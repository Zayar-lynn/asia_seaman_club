<?php


namespace App\CustomClass;
 
 use App\Course;
 use App\Teacher;
 use App\CustomClass\ASC;
 use App\Course_Course_category;
 use App\Course_category;

 class CourseData {
  
    private $id;
    private $course_data;

     function __construct($course_id) {
         $course=Course::findOrFail($course_id);
         //$this->id=$course->id;
         $this->setCourseData($course);
     }

     /**
      * @return mixed
      */
      public function getCourseData()
      {
          $this->course_data['photo_url']=ASC::$domain_url.'upload/teacher_course/'.$this->course_data['photo'];
         $teacher_id = $this->course_data['teacher_id'];
         $teacher = Teacher::findOrFail($teacher_id);
          $this->course_data['teacher_name']=$teacher->name;
 
         $course_id = $this->course_data['id'];
         $course_course_cat = Course_Course_category::where('course_id',$course_id)->get();
         $categories=[];
         foreach($course_course_cat as $data){
             $cat = $data->category_id;
             $category=Course_category::findOrFail($cat);
             array_push($categories,$category);
         }
         $this->course_data['course_categories']=$categories;
 
          return $this->course_data;
      }

     /**
      * @param mixed $course_data
      */
     private function setCourseData($course_data)
     {
         $this->course_data = $course_data;
     }



  
 }