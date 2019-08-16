<?php


namespace App\CustomClass;
 
 use App\JobPost;
 use App\Company;
 use App\CustomClass\ASC;
use App\JobPosition;
use App\ShipType;
use App\VesselType;

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
          $this->job_data['photo_url']=ASC::$domain_url.'upload/post/'.$this->job_data['photo'];

          $job_id = $this->job_data['job_position_id'];
          $job_position = JobPosition::findOrFail($job_id);
        $this->job_data['position_name']=$job_position->position_name;

        $vessel_id = $this->job_data['vessel_type_id'];
        $vessel = VesselType::findOrFail($vessel_id);
        $this->job_data['vessel_type']=$vessel->vessel_name;
        // $shiptype_id = $this->job_data['shiptype_id'];
        // $shiptype = ShipType::findOrFail($shiptype_id);
        //   $this->job_data['shiptype_name']=$shiptype->name;
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