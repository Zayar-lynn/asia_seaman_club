<?php


namespace App\CustomClass;
 
 use App\Testimonial;

 class TestimonialData {
  
    private $id;
    private $testimonial_data;

     function __construct($testimonial_id) {
         $testimonial=Testimonial::findOrFail($testimonial_id);
         $this->id=$testimonial->id;
         $this->setTestimonialData($testimonial);
     }

     /**
      * @return mixed
      */
     public function getTestimonialData()
     {
         $this->testimonial_data['photo_url']=ASC::$domain_url.'/upload/testimonial/'.$this->testimonial_data['photo'];
         return $this->testimonial_data;
     }

     /**
      * @param mixed $testimonial_data
      */
     private function setTestimonialData($testimonial_data)
     {
         $this->testimonial_data = $testimonial_data;
     }




  
 }