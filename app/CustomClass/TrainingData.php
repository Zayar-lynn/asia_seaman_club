<?php


namespace App\CustomClass;
 
 use App\TrainingPost;
 use App\Company;
 use App\CustomClass\ASC;

 class TrainingData {
  
    private $id;
    private $training_data;

     function __construct($training_id) {
         $training=TrainingPost::findOrFail($training_id);
         //$this->id=$course->id;
         $this->setTrainingData($training);
     }

     /**
      * @return mixed
      */
     public function getTrainingData()
     {
        $this->training_data['photo_url']=ASC::$domain_url.'upload/post/'.$this->training_data['photo'];
        $company_id = $this->training_data['company_id'];
        $company = Company::findOrFail($company_id);
        $this->training_data['company_name']=$company->company_name;
        $this->training_data['company_phone']=$company->phone;
        $this->training_data['company_address']=$company->address;
        return $this->training_data;
     }

     /**
      * @param mixed $course_data
      */
     private function setTrainingData($training_data)
     {
         $this->training_data = $training_data;
     }



  
 }