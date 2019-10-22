<?php
/**
 * Created by PhpStorm.
 * User: Alintan
 * Date: 16-Aug-19
 * Time: 8:21 PM
 */

namespace App\CustomClass;


use App\JobPost;

class JobPostData extends Post
{

    public function create_post($post_data)
    {
        $post=JobPost::create($post_data);
        return $post->exists?"success":"fail";
    }

    public function confirm_post($post_id)
    {
        $post=JobPost::find($post_id);
        $post->update([
            'status'=>'active'
        ]);
        return $post->status=='active'?'success':'fail';
    }

    public function delete_post($post_id)
    {
        $data=JobPost::find($post_id)->delete();
        foreach ($data['photo'] as $photo){
            $image_path=public_path().'/upload/post/job_post/'.$photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        $deleted=$data->delete();
        return $deleted ? 'success' : 'fail';
    }

    public function edit_post($post_id, $post_data)
    {
        $post=JobPost::find($post_id);
        $updated=$post->update($post_data);
        return $updated?'success':'fail';
    }

    public function post_detail($post_id)
    {
       $post=JobPost::find($post_id);
       $post['company']=$post->company;
       $post['vessel_type']=$post->vessel_type;
       $post['job_position']=$post->job_position;
       $post['photo']=ASC::$domain_url.'upload/post/job_post/'.$post->photo;
       $post['comments']=CommentData::Comment($post->comment);

       return $post;

//       return $post->company;
//       return $post->vessel_type;
//       return $post->job_position;
    }

    public static function post_format($posts)
    {
        $arr=[];
        foreach ($posts as $post){
            $data=new JobPostData();
            array_push($arr,$data->post_detail($post->id));
        }
        return $arr;
    }
}
