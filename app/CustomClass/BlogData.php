<?php


namespace App\CustomClass;
 
 use App\Admin_blog;

 class BlogData {
  
    private $id;
    private $blog_data;

     function __construct($blog_id) {
         $blog=Admin_blog::findOrFail($blog_id);
         $this->id=$blog->id;
         $this->setBlogData($blog);
     }

     /**
      * @return mixed
      */
     public function getBlogData()
     {
         $this->blog_data['photo_url']=ASC::$domain_url.'/upload/admin_blog/'.$this->blog_data['photo'];
         return $this->blog_data;
     }

     /**
      * @param mixed $blog_data
      */
     private function setBlogData($blog_data)
     {
         $this->blog_data = $blog_data;
     }




  
 }