<?php

namespace App\Http\Controllers;

use App\CustomClass\CommentData;
use App\CustomClass\JobPostData;
use App\CustomClass\NormalPostData;
use App\CustomClass\TrainingPostData;
use App\JobPost;
use App\NormalPost;
use App\Seafarer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{

    function active_normal_posts(){
        $obj=new NormalPostData();
        $posts=$obj->get_active_post('normal_post',3);
        return $posts;
    }

    function active_job_posts(){
        $obj=new JobPostData();
        $posts=$obj->get_active_post('job_post',3);
        return $posts;
    }

    function active_training_posts(){
        $obj=new TrainingPostData();
        $posts=$obj->get_active_post('training_post',3);
        // $ads=AdsController::ads_by_page(3);//page_id 3 is Training page
        return $posts;
    }



    function shipmate(){
        $seafarer=Seafarer::orderBy('id','desc')->get();
        // $ads=AdsController::ads_by_page(3);
        return $seafarer;
    }

    function JobPostDetail($id){
        $obj=new JobPostData();
        return $obj->post_detail($id);
    }

    function TrainingPostDetail($id){
        $obj=new TrainingPostData();
        return $obj->post_detail($id);
    }

    function NormalPostDetail($id){
        $obj=new NormalPostData();
        return $obj->post_detail($id);
    }

    function create_comment(Request $request){
//        $user_id=Auth::id();
        $user_id=1;
        $arr=array_merge($request->all(),['user_id'=>$user_id]);
        $obj=new CommentData();
        return $obj->create_comment($arr);
    }

    public function delete_comment($comment_id)
    {
        $obj=new CommentData();
        return $obj->delete_comment($comment_id);
    }

    public function edit_comment(Request $request, $comment_id)
    {
        $obj=new CommentData();
        return $obj->edit_comment($comment_id,$request->all());
    }

    //******************Ads****************************************
    public function newfeed_ads(){
        $ads=AdsController::ads_by_page(1);//page_id 1 is NewFeed page
        return $ads;
    }

    public function training_ads(){
        $ads=AdsController::ads_by_page(3);//page_id 3 is Training page
        return $ads;
    }

    public function jobpost_ads(){
       return AdsController::ads_by_page(2);//page_id 2 is Job page
    }

    public function shipmate_ads(){
        return AdsController::ads_by_page(5);//page_id 5 is shipmate page
     }
}
