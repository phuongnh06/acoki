<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use App\Models\Works;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Works::with('user', 'comment', 'request')
                        ->orderBy('work_id', 'DESC')
                        ->limit(30)
                        ->get();
        return view('components/homepage/index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'type' => 'required|numeric',
            'title' => 'required|min:4',
            'description' => 'required|min:4',
            'time_begin' => 'nullable|date',
            'time_end' => 'nullable|date',
            'time_work' => 'nullable|numeric',
            'number_people' => 'nullable|numeric',
            'price' => 'required|numeric',
            'purchase_location' => 'required',
            'gender' => 'nullable|numeric',
            'delivery_location' => 'nullable',
            'phone_receiver' => 'nullable',
            'deadline' => 'nullable',
            'name_receiver' => 'nullable'
        ]);

        $image = $this->uploadImage($request);

        Works::create([
            'type' => $data['type'],
            'title' => $data['title'],
            'description' => $data['description'],
            'time_begin' => strtotime($data['time_begin']) * 1000,
            'time_end' => strtotime($data['time_end']) * 1000,
            'time_work' => $data['time_work'],
            'image_default' => $data['type'],
            'create_time' => strtotime(Carbon::now()) * 1000,
            'user_id' => $request->user()->user_id,
            'number_people' => $data['number_people'],
            'price' => $data['price'],
            'purchase_location' => $data['purchase_location'],
            'picture_id' => $image,
            'gender' => $data['gender'],
            'delivery_location' => $data['delivery_location'],
            'phone_receiver' => $data['phone_receiver'],
            'name_receiver' => $data['name_receiver'],
        ]);

        return redirect()->route('store');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    public function uploadImage($request)
    {
        if($request->has('image')) {
            $image = $request->file('image');
            $name = md5($image->getClientOriginalName().time()) .'.'. $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $name);

            $picture = Pictures::create([
                'url_medium' => $name,
                'create_time' => strtotime(Carbon::now())
            ]);

            return $picture->id;
        }

        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
