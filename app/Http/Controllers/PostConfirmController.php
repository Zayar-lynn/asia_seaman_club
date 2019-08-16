<?php

namespace App\Http\Controllers;

use App\CustomClass\JobData;
use App\JobPost;
use Illuminate\Http\Request;

class PostConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.post_confirm')->with([
            'url'=>'post_confirm'
        ]);
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
        //
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
        $jobpost = JobPost::find($id);
        $image_path=public_path().'/upload/post/'.$jobpost->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $jobpost->delete();
    }

    public function get_all_confirm_post(){
        $jobs=JobPost::where('status','pending')->orderBy('id', 'desc')->get();

        $arr=[];
        foreach ($jobs as $data){
            $job_data=new JobData($data->id);
            array_push($arr,$job_data->getJobData());
        }
        return json_encode($arr);
    }

    public function active_post($id){
        JobPost::findOrFail($id)->update([
            'status'=>'active'
        ]);
    }
}
