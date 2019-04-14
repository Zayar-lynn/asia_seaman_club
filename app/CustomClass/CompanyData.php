<?php


namespace App\CustomClass;

use App\Company;
use App\JobPost;
use App\CompanyPhoto;
use App\TrainingPost;


class CompanyData{

    private $company_info;
    private $company_photo;
    private $company_blog;
    private $company_post;

    function __construct($company_id) {
        $array = Company::find($company_id);
        $this->setCompany_info($array);
        $this->setCompany_post($company_id);
        $this->setCompany_photo($company_id);
        //$this->setCompany_blog($company_id);
    }
    
    


    /**
     * Get the value of company_info
     */ 
    public function getCompany_info()
    {
        $this->company_info['photo_url']=ASC::$domain_url.'upload/company_logo/'.$this->company_info['photo'];
        return $this->company_info;
    }

    /**
     * Set the value of company_info
     *
     * @return  self
     */ 
    protected function setCompany_info($company_info)
    {
        $this->company_info = $company_info;
    }

    /**
     * Get the value of company_photo
     */ 
    public function getCompany_photo()
    {
        foreach($this->company_photo as $data){
            $photo_url=ASC::$domain_url."upload/company_photo/".$data->photo;
            if($data->photo=="no_image.png"){
                $photo_url=ASC::$domain_url."upload/no_image_default.png";
            }
            $data['photo_url']=$photo_url;
        }
        return $this->company_photo;
    }

    /**
     * Set the value of company_photo
     *
     * @return  self
     */ 
    protected function setCompany_photo($company_id)
    {
        $companyphoto = CompanyPhoto::where('company_id',$company_id)->get();
        $this->company_photo = $companyphoto;
    }

    /**
     * Get the value of company_blog
     */ 
    // public function getCompany_blog()
    // {
    //     return $this->company_blog;
    // }

    /**
     * Set the value of company_blog
     *
     * @return  self
     */ 
    // protected function setCompany_blog($company_id)
    // {

    //     $this->company_blog = $company_blog;
    // }

    public function getCompany_post(){
        foreach($this->company_post as $data){
            $data['photo_url']=ASC::$domain_url.'upload/post/'.$data->photo;
        }
        return $this->company_post;
    }

    /**
     * Set the value of company_post
     *
     * @return  self
     */ 
    protected function setCompany_post($company_id)
    {
        
        $company = $this->getCompany_info();
        $company_type = $company->company_type;
        if($company_type == 'company'){
           $post = JobPost::where('company_id',$company_id)->get();
           //$post="business company";
        }elseif ($company_type == 'training') {
            $post = TrainingPost::where('company_id',$company_id)->get();
            //$post="training";
        }elseif ($company_type == 'freeagent') {
            $post = JobPost::where('company_id',$company_id)->get();
            //$post="freeagent";
        }
        
        $this->company_post = $post;
    }
}