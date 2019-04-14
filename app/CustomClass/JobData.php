<?php


namespace App\CustomClass;
 
 use App\JobPost;
 use App\Company;
 use App\CustomClass\ASC;
 use App\ShipType;

 class JobData {
  
    private $id;
    private $job_data;

     function __construct($job_id) {
         $job=JobPost::findOrFail($job_id);
         //$this->id=$course->id;
         $this->setJobData($job);
     }

     /**
      * @return mixed
      */
     public function getJobData()
     {
         $company_id = $this->job_data['company_id'];
         $company = Company::findOrFail($company_id);
          $this->job_data['company_name']=$company->company_name;
          $this->job_data['company_address']=$company->address;
          $this->job_data['company_about']=$company->what_we_do;
          $this->job_data['photo_url']=ASC::$domain_url.'upload/post/'.$this->job_data['photo'];
        $shiptype_id = $this->job_data['shiptype_id'];
        $shiptype = ShipType::findOrFail($shiptype_id);
          $this->job_data['shiptype_name']=$shiptype->name;
         return $this->job_data;
     }

     /**
      * @param mixed $course_data
      */
     private function setJobData($job_data)
     {
         $this->job_data = $job_data;
     }



  
 }