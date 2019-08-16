<?php
/**
 * Created by PhpStorm.
 * User: Alintan
 * Date: 16-Aug-19
 * Time: 9:20 PM
 */

namespace App\CustomClass;


use App\NormalPost;

class NormalPostData extends Post
{

    public function create_post($post_data)
    {
        $post=NormalPost::create($post_data);
        return $post->exists?"success":"fail";
    }

    public function confirm_post($post_id)
    {
        $post=NormalPost::find($post_id);
        $post->update([
            'status'=>'active'
        ]);
        return $post->status=='active'?'success':'fail';
    }

    public function delete_post($post_id)
    {
        $deleted=NormalPost::find($post_id)->delete();
        return $deleted?'success':'fail';
    }

    public function edit_post($post_id, $post_data)
    {
        $post=NormalPost::find($post_id);
        $updated=$post->update($post_data);
        return $updated?'success':'fail';
    }

    public function post_detail($post_id)
    {
        $post=NormalPost::find($post_id);
        $post['comments']=CommentData::Comment($post->comment);
        return $post;
        //       return $post->user
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
