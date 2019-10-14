<?php

namespace App\Http\Controllers;

use App\CustomClass\ASC;
use App\CustomClass\NormalPostData;
use App\NormalPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PostController extends Controller
{
    public function view_admin_post()
    {
        return view('admin.site_admin.admin_post')->with([
            'url'=>'admin_post'
        ]);
    }

    function upload_admin_post_photo(Request $request)
    {
        return ASC::insert_photo_file($request,'upload/normal_post');
    }

    public function insert_admin_post(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;

        $title = $request->get('title');
        $description = $request->get('description');
        $photo_link = $request->get('photo_link');

        //return $user_id;

        NormalPost::create([
            'user_id'=>$user_id,
            'title'=>$title,
            'photo'=>$photo_link,
            'description'=>$description,
            'status'=>'active'
        ]);

    }

    public function get_all_admin_post()
    {
        $user = Auth::user();
        $user_id = $user->id;

        $normal_posts=NormalPost::where('user_id',$user_id)->orderBy('id', 'desc')->get();
//        $arr=[];
//        foreach ($normal_posts as $data){
//            $post_data=new NormalPostData($data->id);
//            array_push($arr,$post_data->getPostData());
//        }
        return json_encode($normal_posts);
    }

    function upload_seafarer_post_photo(Request $request)
    {
        return ASC::insert_photo_file($request,'upload/post/normal_post');
    }

    public function insert_seafarer_post(Request $request)
    {
        $user = Auth::user();
//        $user_id=$user->id;
        $user_id=1;
        $arr=array_merge($request->all(),['user_id'=>$user_id]);
        $obj=new NormalPostData();
        return $obj->create_post($arr);
    }

    function delete_normal_post($id){
        $obj=new NormalPostData();
        return $obj->delete_post($id);
    }

    function edit_normal_post(Request $request,$id){
        $company_id=1; //to change auth
        $new_post_data=$request->all()+['company_id'=>$company_id];
       $obj=new NormalPostData();
       return $obj->edit_post($id,$new_post_data);
    }
}
