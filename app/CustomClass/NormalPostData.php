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
        $data=NormalPost::find($post_id);
        foreach ($data['photo'] as $photo){
            $image_path=public_path().'/upload/post/normal_post/'.$photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        $deleted=$data->delete();
        return $deleted ? 'success' : 'fail';
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
        $post['user']=$post->user;
        $post['photo']=ASC::$domain_url.'upload/post/normal_post/'.$post->photo;
        $post['comments']=CommentData::Comment($post->comment);
        return $post;
        //       return $post->user
    }

    public static function post_format($posts)
    {
        $arr=[];
        foreach ($posts as $post){
            $data=new NormalPostData();
            array_push($arr,$data->post_detail($post->id));
        }
        return $arr;

    }
}
