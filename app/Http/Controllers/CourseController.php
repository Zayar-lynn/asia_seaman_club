<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Course_category;
use App\Course_Course_category;
use App\Teacher;
use App\CustomClass\ASC;
use App\CustomClass\CourseData;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course_cats = Course_category::all();
        //return view('site_admin/advertisement',compact('webpages'));
        return view('admin.teacher_admin.course')->with([
            'url'=>'course',
            'course_cats'=>$course_cats
        ]);
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
        $teacher_id = $request->session()->get('account_id');
        $title = $request->get('title');
        $description = $request->get('description');
        $price = $request->get('price');
        $category_name = $request->get('category_name');
        $photo = $request->file('photo');
        $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $course_id = Course::create([
                'title'=>$title,
                'description'=>$description,
                'price'=>$price,
                'teacher_id'=>$teacher_id,
                'photo'=>$photo_name
            ])->id;
                $photo->move(public_path('upload/teacher_course'),$photo_name);
            for ($i=0; $i <count($category_name) ; $i++) {
                Course_Course_category::create([
                    'course_id'=>$course_id,
                    'category_id'=>$category_name[$i]
                ]);
            }
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
        $data = Course::find($id);
        $data['photo_url']=ASC::$domain_url."upload/teacher_course/".$data->photo;
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
        $title = $request->get('title');
        $description = $request->get('description');
        $price = $request->get('price');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/teacher_course/'),$photo_name);
            $course = Course::find($id);
            $image_path=public_path().'/upload/teacher_course/'.$course->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Course::findOrFail($id)->update([
                'title'=>$title,
                'description'=>$description,
                'price'=>$price,
                'photo'=>$photo_name
            ]);
            //return 'yes';
        }else {
            Course::findOrFail($id)->update([
                'title'=>$title,
                'description'=>$description,
                'price'=>$price
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
        $course = Course::find($id);
        $course_cat = Course_Course_category::where('course_id',$id);
        $image_path=public_path().'/upload/teacher_course/'.$course->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $course->delete();
        $course_cat->delete();
    }

    // public function get_all_course(){
    //     $courses=Course::orderBy('id', 'desc')->get();
    //     foreach ($courses as $course){
    //     	$course['photo_url']=ASC::$domain_url.'upload/teacher_course/'.$course->photo;
    //     }
    //     return json_encode($courses);
    // }

    public function get_all_course(){
        $user = Auth::user();
        $teacher_id = $user->data_id;
        $courses=Course::where('teacher_id',$teacher_id)->orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($courses as $data){
            $course_data=new CourseData($data->id);
            array_push($arr,$course_data->getCourseData());
        }
         return json_encode($arr);
     }
     public function get_all_course_android($type){
       if ($type == 'ascandroid') {
         $courses=Course::all();
         $arr=[];
         foreach ($courses as $data){
             $course_data=new CourseData($data->id);
             array_push($arr,$course_data->getCourseData());
         }
          return json_encode($arr);
       }
     }

    public function show_course(){
        $courses=Course::orderBy('id', 'desc')->paginate(10);
        $arr=[];
        foreach ($courses as $data){
            $course_data=new CourseData($data->id);
            array_push($arr,$course_data->getCourseData());
        }

        return view('user.e-learning')->with([
            'arrs'=>$arr,
            'paginate'=>$courses
            ]);
    }

    public function course_detail($course_id){
        $course_obj = new CourseData($course_id);
        $categories=[];
        $course_detail = $course_obj->getCourseData();
        //return $course_detail->course_categories;
        return view('user.e-learning-detail')->with([
            'course_detail'=>$course_detail
            ]);
    }
    public function course_detail_android($type,$course_id){
      if ($type == 'ascandroid') {
        $course_obj = new CourseData($course_id);
        $categories=[];
        $course_detail = $course_obj->getCourseData();
        return json_encode($course_detail);
      }
    }
}
