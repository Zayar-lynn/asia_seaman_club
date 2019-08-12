<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin_blog;
use App\CustomClass\BlogData;
use App\CustomClass\ASC;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Admin_blog::find($id);
        $data['photo_url']=ASC::$domain_url."upload/admin_blog/".$data->photo;
        return json_encode($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        //$photo_name = Admin_blog::find($id)->photo;
        //return $photo_name;
        $title = $request->get('title');
        $description = $request->get('description');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/admin_blog/'),$photo_name);
            $blog = Admin_blog::find($id);
            $image_path=public_path().'/upload/admin_blog/'.$blog->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Admin_blog::findOrFail($id)->update([
                'title'=>$title,
                'photo'=>$photo_name,
                'description'=>$description
            ]);
            //return 'yes';
        }else {
            Admin_blog::findOrFail($id)->update([
                'title'=>$title,
                'description'=>$description
            ]);
            //return 'no';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Admin_blog::find($id);
        $image_path=public_path().'/upload/admin_blog/'.$blog->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $blog->delete();
    }

    public function insert(Request $request){
    	$title = $request->get('title');
    	$description = $request->get('description');
        $photo = $request->file('photo');
        $photo_name = uniqid().'_'.$photo->getClientOriginalName();
        $photo->move(public_path('upload/admin_blog'),$photo_name);

            Admin_blog::create([
                'title'=>$title,
                'photo'=>$photo_name,
                'description'=>$description
            ]);
        // return view('admin.site_admin.blog');
    }

    public function get_all_blog(){
      $blogs=Admin_blog::orderBy('id', 'desc')->get();
      $arr=[];
      foreach ($blogs as $data){
          $blog_data=new BlogData($data->id);
          array_push($arr,$blog_data->getBlogData());
      }
       return json_encode($arr);
    }
    public function get_all_blog_android($type){
      if ($type == 'ascandroid') {
        return $this->get_all_blog();
      }
    }

    public function show_blog(){
        $blogs=Admin_blog::orderBy('id', 'desc')->paginate(10);
        $arr=[];
        foreach ($blogs as $data){
            $blog_data=new BlogData($data->id);
            array_push($arr,$blog_data->getBlogData());
        }
        return view('user.blog-grid')->with([
            'arrs'=>$arr,
            'paginate'=>$blogs
            ]);
     }

     public function blog_detail($blog_id){
        $blog_obj = new BlogData($blog_id);
        $blog_post = $blog_obj->getBlogData();
        return view('user.blog-details')->with([
            'blog_post'=>$blog_post
            ]);
    }
    public function blog_detail_android($type,$blog_id){
      if ($type == 'ascandroid') {
        $blog_obj = new BlogData($blog_id);
        $blog_post = $blog_obj->getBlogData();
        return json_encode($blog_post);
      }
    }

}
