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
        $data=JobPost::find($post_id);
        // gettype($data);
        $arr=json_decode($data['photo']);
        foreach ($arr as $photo){
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
        //$updated=$post->update($post_data);
        $arr = [
            'job_position_id'=>$post_data['job_position_id'],
            'vancant'=>$post_data['vancant'],
            'salary'=>$post_data['salary'],
            'join_date'=>$post_data['join_date'],
            'contract_duration'=>$post_data['contract_duration'],
            'requirement'=>$post_data['requirement'],
            'vessel_name'=>$post_data['vessel_name'],
            'vessel_type_id'=>$post_data['vessel_type_id'],
            'build_year'=>$post_data['build_year'],
            'dwt'=>$post_data['dwt'],
            'flage'=>$post_data['flage'],
            'main_engine'=>$post_data['main_engine'],
            'crew_onboard'=>$post_data['crew_onboard'],
            'sailing_area'=>$post_data['sailing_area'],
            'description'=>$post_data['description'],
            'english_level'=>$post_data['english_level'],
            'post_start_date'=>$post_data['post_start_date'],
            'post_end_date'=>$post_data['post_end_date'],
            'post_start_time'=>$post_data['post_start_time'],
            'post_end_time'=>$post_data['post_end_time']
        ];
        if(!empty($post_data['photo_url'])){
            $arr = array_merge($arr,['photo'=>$post_data['photo_url']]);
        }
        $post_photos=json_decode($post->photo);
        foreach ($post_photos as $post_photo) {
            $image_path=public_path().'/upload/post/job_post/'.$post_photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        $updated = $post->update($arr);
        
        return $updated?'success':'fail';
        //return $post_data;
        // return gettype($post['photo']);
        
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
