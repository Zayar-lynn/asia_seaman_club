<?php

namespace App\Http\Controllers;

use App\Company;
use App\CustomClass\ASC;
use App\CustomClass\CompanyData;
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
        $photo_link = $request->get('photo');

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
        $user_id=$request->get('user_id');
        //$user_id=1;
        $photo_link = $request->get('photo');
        $arr=array_merge($request->all(),[
            'user_id'=>$user_id,
            'photo'=>$photo_link
        ]);
        $obj=new NormalPostData();
        return $obj->create_post($arr);
    }

    function delete_normal_post($id){
        $obj=new NormalPostData();
        return $obj->delete_post($id);
    }

    function edit_normal_post(Request $request,$id){
        $new_post_data=$request->all();
       $obj=new NormalPostData();
       return $obj->edit_post($id,$new_post_data);
    }

    public function company_normalpost()
    {
        $user = Auth::user();
        $account_id = $user->data_id;
        $account_data = Company::where('id',$account_id)->get();
        foreach ($account_data as $data){
            $job_data=new CompanyData($data->id);
            $account_name = $job_data->getCompany_info();
        }
        
        return view('admin.company_admin.normal_post')->with([
            'url'=>'normal_post',
            'company_name'=>$account_name->company_name
        ]);
    }
}
