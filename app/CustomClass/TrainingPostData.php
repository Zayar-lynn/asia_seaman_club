<?php

/**
 * Created by PhpStorm.
 * User: Alintan
 * Date: 16-Aug-19
 * Time: 8:00 PM
 */

namespace App\CustomClass;


use App\Comment;
use App\Company;
use App\TrainingPost;
use App\CustomClass\CommentData;

class TrainingPostData extends Post
{

    public function create_post($post_data)
    {
        $post = TrainingPost::create($post_data);
        return $post->exists ? "success" : "fail";
    }

    public function confirm_post($post_id)
    {
        $post = TrainingPost::find($post_id);
        $post->update([
            'status' => 'active'
        ]);
        return $post->status == 'active' ? 'success' : 'fail';
    }

    public function delete_post($post_id)
    {
        $data = TrainingPost::findorFail($post_id);
        foreach ($data['photo'] as $photo){
            $image_path=public_path().'/upload/post/training_post/'.$photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }

        $deleted=$data->delete();
        return $deleted ? 'success' : 'fail';
    }

    public function edit_post($post_id, $post_data)
    {
        $post = TrainingPost::findorFail($post_id);
        $updated = $post->update($post_data);
        return $updated ? 'success' : 'fail';
    }

    public function post_detail($post_id)
    {
        $post=TrainingPost::find($post_id);
        $company = Company::find($post_id);
        $comments=Comment::where('post_id',$post_id)->get();
        $arr=[
            'id'=>$post->id,
            'company_id'=>$post->company_id,
            'title'=>$post->title,
            'description'=>$post->description,
            'training_for'=>$post->training_for,
            'requirement'=>$post->requirement,
            'duration'=>$post->duration,
            'photo'=>ASC::$domain_url.'upload/post/training_post/'.$post->photo,
            'start_date'=>$post->start_date,
            'end_date'=>$post->end_date,
            'start_time'=>$post->start_time,
            'end_time'=>$post->end_time,
            'training_fee_amount'=>$post->training_fee_amount,
            'fee_type'=>$post->fee_type,
            'enroll_limit'=>$post->enroll_limit,
            'contact_no'=>$post->contact_no,
            'online_banking'=>$post->online_banking,
            'benificiary_name'=>$post->benificiary_name,
            'account_number'=>$post->account_number,
            'post_start_date'=>$post->post_start_date,
            'post_end_date'=>$post->post_end_date,
            'fee_point'=>$post->fee_point,
            'status'=>$post->status,
            'company_data'=>$company,
            'comments'=>CommentData::Comment($post->comment),
        ];
//        //$data=$data+['company'=>$company];
        return $arr;
    }

    public static function post_format($posts)
    {
        $arr=[];
        foreach ($posts as $post){
            $data=new TrainingPostData();
            array_push($arr,$data->post_detail($post->id));
        }
        return $arr;
    }
}
