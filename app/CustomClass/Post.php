<?php
/**
 * Created by PhpStorm.
 * User: Alintan
 * Date: 16-Aug-19
 * Time: 7:37 PM
 */

namespace App\CustomClass;

use App\JobPost;
use App\NormalPost;
use App\TrainingPost;

abstract class Post
{
    abstract public function create_post($post_data);
    abstract public function confirm_post($post_id);
    abstract public function delete_post($post_id);
    abstract public function edit_post($post_id,$post_data);
    abstract public function post_detail($post_id);
    abstract public static function post_format($posts);

    public function get_pending_post($post_type){
        if($post_type=="training_post"){
            $posts=TrainingPost::where('status','pending')->orderBy('id', 'DESC')->get();
            $post_data=TrainingPostData::post_format($posts);
        }
        if($post_type=="job_post"){
            $posts=JobPost::where('status','pending')->orderBy('id', 'DESC')->get();
            $post_data=JobPostData::post_format($posts);
        }
        if($post_type=="normal_post"){
            $posts=NormalPost::where('status','pending')->orderBy('id', 'DESC')->get();
            $post_data=NormalPostData::post_format($posts);
        }
    // $posts=TrainingPost::all();
        return $post_data;
    }

    public function get_active_post($post_type,$paginate_count){
        $posts='';
        $post_data='';
        if($post_type=="training_post"){
            $posts=TrainingPost::where('status','active')->orderBy('id', 'DESC')->paginate($paginate_count);
            $post_data=TrainingPostData::post_format($posts);
        }
        if($post_type=="job_post"){
            $posts=JobPost::where('status','active')->orderBy('id', 'DESC')->paginate($paginate_count);
            $post_data=JobPostData::post_format($posts);
        }
        if($post_type=="normal_post"){
            $posts=NormalPost::where('status','active')->orderBy('id', 'DESC')->paginate($paginate_count);
            $post_data=NormalPostData::post_format($posts);
        }
        $arr=[
            'paginate'=>$posts,
            'posts'=>$post_data
        ];
        // $posts=TrainingPost::all();
        return $arr;
    }


}
