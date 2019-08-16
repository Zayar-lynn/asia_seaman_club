<?php


namespace App\CustomClass;


use App\Comment;
use App\Company;
use App\Freeman;
use App\JobPost;
use App\Seafarer;
use App\User;

class CommentData
{
    private $user;
    private $post;
    private $message;

    /**
     * Comment constructor.
     * @param $id
     */

    private function CommentFormat($id){
        $comment=Comment::find($id);
        $this->setUser($comment->user_id);
//        $this->setPost($comment->post_id,$comment->post_type);
        $arr=[
            'id'=>$id,
            'user'=>$this->getUser(),
            'comment'=>$comment->comment
        ];
        return $arr;
    }

    public static function Comment($comments){
        $arr=[];
        foreach ($comments as $data){
            $comment=new CommentData();
            array_push($arr,$comment->CommentFormat($data->id));
        }
        return $arr;
    }




    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user_id): void
    {
        $user=User::find($user_id);
        if($user->type=="admin"){
            $user_data=$user;
        }
        if($user->type=="company"){
            $user_data=Company::find($user->data_id);
        }
        if($user->type=="seafarer"){
            $user_data=Seafarer::find($user->data_id);
        }
        if($user->type=="freeman"){
            $user_data=Freeman::find($user->data_id);
        }

        $this->user = $user_data;
    }

    /**
     * @return mixed
     */
//    public function getPost()
//    {
//        return $this->post;
//    }
//
//    /**
//     * @param mixed $post
//     */
//    public function setPost($post_id,$post_type): void
//    {
//        if ($post_type=="normal_post"){
//
//        }
//        if ($post_type=="training_post"){
//
//        }
//        if ($post_type=="job_post"){
//
//        }
//
//        $this->post = $post;
//    }


    public function create_comment($arr)
    {
        $post=Comment::create($arr);
        return $post->exists?"success":"fail";
    }
    public function delete_comment($id)
    {
        $deleted=Comment::find($id)->delete();
        return $deleted?'success':'fail';
    }

    public function edit_comment($id, $new_data)
    {
        $comment=JobPost::find($id);
        $updated=$comment->update($new_data);
        return $updated?'success':'fail';
    }


}
