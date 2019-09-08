<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\CompanyData;
use App\CustomClass\ASC;
use App\CustomClass\JobData;
use App\CustomClass\TrainingData;
use App\CompanyPhoto;
use App\ShipType;
use App\JobPost;
use App\TrainingPost;
use App\Company;
use App\CustomClass\JobPostData;
use App\CustomClass\TrainingPostData;
use App\JobPosition;
use App\User;
use App\Seafarer_request;
use App\VesselType;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $account_id = $user->data_id;
        $account_data = Company::where('id',$account_id)->get();
        foreach ($account_data as $data){
            $job_data=new CompanyData($data->id);
            $account_name = $job_data->getCompany_info();
        }
        return view('admin.company_admin.dashboard')->with(['url'=>'dashboard'])->with(['company_name'=>$account_name->company_name]);
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
    public function edit(Request $request,$id)
    {
        // $data = JobPost::find($id);
        // $data['photo_url']=ASC::$domain_url."upload/post/".$data->photo;
        // return json_encode($data);

        // $obj=new JobData($id);
        // $jobpost_obj = $obj->getJobData();
        // return json_encode($jobpost_obj);

        $company_id=1; //to change auth
        $new_post_data=$request->all()+['company_id'=>$company_id];
        $obj=new JobPostData();
        return $obj->edit_post($id,$new_post_data);
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
        $rank = $request->get('rank');
        $salary = $request->get('salary');
        $contract_time = $request->get('contract_time');
        $vessel_name = $request->get('vessel_name');
        $ship_type = $request->get('ship_type');
        $grt = $request->get('grt');
        $flag_of_vessel = $request->get('flag_of_vessel');
        $navigation_area = $request->get('navigation_area');
        $request_certificates = $request->get('request_certificates');
        $description = $request->get('description');
        $english_level = $request->get('english_level');

        JobPost::findOrFail($id)->update([
            'rank'=>$rank,
            'salary'=>$salary,
            'contract_time'=>$contract_time,
            'vessel_name'=>$vessel_name,
            'shiptype_id'=>$ship_type,
            'grt'=>$grt,
            'flag_of_vessel'=>$flag_of_vessel,
            'navigation_area'=>$navigation_area,
            'request_certificates'=>$request_certificates,
            'description'=>$description,
            'english_level'=>$english_level
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj=new JobPostData();
        // $image_path=public_path().'/upload/post/'.$obj->photo;
        // if(file_exists($image_path)){
        //     unlink($image_path);
        // }
        return $obj->delete_post($id);
    }

    public function edit_company_profile(){
        $user = Auth::user();
        $company_id = $user->data_id;
        $company_obj = new CompanyData($company_id);
        return $company_obj->getCompany_info();
        //return view('admin.company_admin.company_profile')->with(['url'=>'company_profile']);
    }

    public function edit_company_photo(){
        $user = Auth::user();
        $company_id = $user->data_id;

       $company_obj=new CompanyData($company_id);
       $company_info=$company_obj->getCompany_info();
       $company_photo=$company_obj->getCompany_photo();

       $company_info['company_type']=='company'?$view_file='admin.company_admin.company_photo':$view_file='admin.training_admin.company_photo';
        return view($view_file
        )
            ->with(['url'=>'company_photo'])
            ->with('company_photos',$company_photo)
            ->with(['company_name'=>$company_info['company_name']]);
    }

    public function company_photo_detail($id){
        $data = CompanyPhoto::find($id);
        $photo_url=ASC::$domain_url."upload/company_photo/".$data->photo;
        if($data->photo=="no_image.png"){
            $photo_url=ASC::$domain_url."upload/no_image_default.png";
        }

        $data['photo_url']=$photo_url;
        return json_encode($data);
    }

    public function update_companyphoto(Request $request)
    {

        $user = Auth::user();
        $company_id = $user->data_id;
        $company_photos = CompanyPhoto::where('company_id',$company_id)->get();

        $account_data = Company::where('id',$company_id)->get();
        foreach ($account_data as $data){
            $job_data=new CompanyData($data->id);
            $account_name = $job_data->getCompany_info();
        }

        $id = $request->get('project_id');
        $title = $request->get('title');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/company_photo/'),$photo_name);
            $company_photo = CompanyPhoto::find($id);
            $image_path=public_path().'/upload/company_photo/'.$company_photo->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            CompanyPhoto::findOrFail($id)->update([
                'photo'=>$photo_name,
                'title'=>$title
            ]);
            return redirect('/company_dashboard/company_photo');
        }else {
            CompanyPhoto::findOrFail($id)->update([
                'title'=>$title
            ]);
            return redirect('/company_dashboard/company_photo');
        }
    }

    public function company_jobpost(){
        $user = Auth::user();
        $account_id = $user->data_id;
        $account_data = Company::where('id',$account_id)->get();
        foreach ($account_data as $data){
            $job_data=new CompanyData($data->id);
            $account_name = $job_data->getCompany_info();
        }

        $shiptype = ShipType::all();
        $deck_position = JobPosition::where('header','Deck')->get();
        $engine_position = JobPosition::where('header','Engine')->get();
        $bulk_vesseltype = VesselType::where('header','Bulk Carriers')->get();
        return view('admin.company_admin.jobpost')
            ->with(['url'=>'jobpost'])
            ->with('shiptypes',$shiptype)
            ->with(['company_name'=>$account_name->company_name])
            ->with(['deck_positions'=>$deck_position])
            ->with(['engine_positions'=>$engine_position])
            ->with(['bulk_vesseltypes'=>$bulk_vesseltype]);
    }

    public function insert_jobpost(Request $request){
        $user = Auth::user();
        //$company_id = $user->data_id;
        $company_id=1;

       $arr=array_merge($request->all(),['company_id'=>$company_id]);
       $obj=new JobPostData();
       return $obj->create_post($arr);
    }

    public function company_profile($company_id){
        $company_obj = new CompanyData($company_id);
        $company_info = $company_obj->getCompany_info();
        $company_photo = $company_obj->getCompany_photo();
        $company_post = $company_obj->getCompany_post();
        //return $company_post;
        return view('user.company_profile')->with([
            'company_info'=>$company_info,
            'company_posts'=>$company_post,
            'company_photos'=>$company_photo
            ]);
    }
    public function company_profile_android($type,$company_id){
      if ($type == 'ascandroid') {
        $company_obj = new CompanyData($company_id);
        $company_info = $company_obj->getCompany_info();
        $company_photo = $company_obj->getCompany_photo();
        $company_post = $company_obj->getCompany_post();
        return json_encode([$company_info, $company_photo,$company_post]);
      }
    }

    public function show_jobpost(){
        $jobs=JobPost::orderBy('id', 'desc')->paginate(10);
        $arr=[];
        foreach ($jobs as $data){
            $job_data=new JobData($data->id);
            array_push($arr,$job_data->getJobData());
        }

        $ads=new AdsController();
        $area3_ads=$ads->ads_by_page(3);

        return view('user.job-listing')->with([
            'company_jobs'=>$arr,
            'ads'=>$area3_ads,
            'paginate'=>$jobs
            ]);
    }

    public function show_training(){
        $trainings=TrainingPost::orderBy('id', 'desc')->paginate(10);
        $arr=[];
        foreach ($trainings as $data){
            $training_data=new TrainingData($data->id);
            array_push($arr,$training_data->getTrainingData());
        }

        $ads=new AdsController();
        $ads=$ads->ads_by_page(5);

        return view('user.training')->with([
            'training_posts'=>$arr,
            'paginate'=>$trainings,
            'ads'=>$ads
            ]);
    }

    public function show_company(){
        $companies=Company::where('company_type','training')->orwhere('company_type','company')->orderBy('id', 'desc')->paginate(10);
        $arr=[];
        foreach ($companies as $data){
            $company_data=new CompanyData($data->id);
            array_push($arr,$company_data->getCompany_info());
        }
        $ads=new AdsController();
        $area4_ads=$ads->ads_by_page(4);
        return view('user.company')->with([
            'companies'=>$arr,
            'paginate'=>$companies,
            'ads'=>$area4_ads
            ]);
    }

    public function show_freeagent(){
        $companies=Company::where('company_type','freeagent')->orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($companies as $data){
            $company_data=new CompanyData($data->id);
            array_push($arr,$company_data->getCompany_info());
        }

        return view('user.freeagent')->with([
            'freeagents'=>$arr
            ]);
    }

    public function job_detail($job_id){
        $job_obj = new JobData($job_id);
        $job_detail = $job_obj->getJobData();
        return view('user.job-details')->with([
            'job_detail'=>$job_detail
            ]);
    }
    public function job_detail_android($type,$job_id){
      if ($type == 'ascandroid') {
        $job_obj = new JobData($job_id);
        $job_detail = $job_obj->getJobData();
        return json_encode($job_detail);
      }
    }

    public function training_detail($training_id){
        $training_obj = new TrainingData($training_id);
        $training_detail = $training_obj->getTrainingData();
        return view('user.training-detail')->with([
            'training_detail'=>$training_detail
            ]);
    }
    public function training_detail_android($type,$training_id){
      if ($type == 'ascandroid') {
        $training_obj = new TrainingData($training_id);
        $training_detail = $training_obj->getTrainingData();
        return json_encode($training_detail);
      }
    }

    public function get_all_jobpost(){
      $user = Auth::user();
      $company_id = $user->data_id;
      $jobs=JobPost::where('company_id',$company_id)->orderBy('id', 'desc')->get();

        $arr=[];
        foreach ($jobs as $data){
            $job_data=new JobData($data->id);
            array_push($arr,$job_data->getJobData());
        }
        return json_encode($arr);
     }
     public function get_all_jobpost_android($type){
       if ($type == 'ascandroid') {
         $jobs=JobPost::all();
         $arr=[];
         foreach ($jobs as $data){
             $job_data=new JobData($data->id);
             array_push($arr,$job_data->getJobData());
         }
         return json_encode($arr);
       }
     }

     public function show_companylist_table(){
       $companytype = Company::all();
       return view('admin.site_admin.company_list')->with(['url'=>'company_list','companytype'=>$companytype]);
     }

     public function get_all_company_list(){
       $companies=Company::where('company_type','company')->orderBy('id', 'desc')->get();
       $arr=[];
       foreach ($companies as $data){
           $company_data=new CompanyData($data->id);
           array_push($arr,$company_data->getCompany_info());
       }
        return json_encode($arr);
     }
     public function get_all_company_training_list(){
       $companies=Company::where('company_type','training')->orderBy('id', 'desc')->get();
       $arr=[];
       foreach ($companies as $data){
           $company_data=new CompanyData($data->id);
           array_push($arr,$company_data->getCompany_info());
       }
        return json_encode($arr);
     }
     public function get_all_company_freeagent_list(){
       $companies=Company::where('company_type','freeagent')->orderBy('id', 'desc')->get();
       $arr=[];
       foreach ($companies as $data){
           $company_data=new CompanyData($data->id);
           array_push($arr,$company_data->getCompany_info());
       }
        return json_encode($arr);
     }

     public function company_edit($id){
       $data = Company::find($id);
       $data['photo_url']=ASC::$domain_url."upload/company_logo/".$data->photo;
       return json_encode($data);
     }

     public function company_update(Request $request){
       $id = $request->get('id');
       $companyname = $request->get('name');
       $phone = $request->get('phone');
       $email = $request->get('email');
       $address = $request->get('address');
       $whatwedo = $request->get('whatwedo');
       $whyjoinus = $request->get('whyjoinus');
       $workplace = $request->get('workplaceandculture');
       $facebook_url = $request->get('facebook');
       $website_url = $request->get('website');
       $photo = $request->file('photo');
      if($request->hasFile('photo')){
        $photo = $request->file('photo');
        $photo_name = uniqid().'_'.$photo->getClientOriginalName();
        $photo->move(public_path('upload/company_logo/'),$photo_name);
        $company = Company::find($id);
        $image_path=public_path().'/upload/company_logo/'.$company->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        Company::findOrFail($id)->update([
          'company_name' => $companyname,
          'phone' => $phone,
          'email' => $email,
          'photo' => $photo_name,
          'address' => $address,
          'what_we_do' => $whatwedo,
          'why_join_us' => $whyjoinus,
          'workplace_and_culture' => $workplace,
          'facebook_url' => $facebook_url,
          'website_url' => $website_url
        ]);
      }else {
        Company::findOrFail($id)->update([
          'company_name' => $companyname,
          'phone' => $phone,
          'email' => $email,
          'address' => $address,
          'what_we_do' => $whatwedo,
          'why_join_us' => $whyjoinus,
          'workplace_and_culture' => $workplace,
          'facebook_url' => $facebook_url,
          'website_url' => $website_url
        ]);
      }
     }

     public function company_delete($id){
       $company=Company::findOrFail($id);
       $type = $company->company_type;
       $image_path=public_path().'/upload/company_logo/'.$company->photo;
       if(file_exists($image_path)){
           unlink($image_path);
       }
       $company->delete();

       User::where('data_id',$id)->delete();

       $company_photos = CompanyPhoto::where('company_id',$id)->get();
       foreach ($company_photos as $company_photo) {
         $company_photo_path=public_path().'/upload/company_photo/'.$company_photo->photo;
         if(file_exists($company_photo_path)){
             unlink($company_photo_path);
         }
         $company_photo->delete();
       }
      $seafarer_requests = Seafarer_request::where('company_id',$id)->get();
      //return $seafarer_requests;
      foreach ($seafarer_requests as $seafarer_request) {
        $seafarer_request->delete();
      }
       if ($type == 'company' || $type == 'freeagent') {
         $jobposts = JobPost::where('company_id',$id)->get();
         foreach ($jobposts as $jobpost) {
           $jobpost->delete();
         }
       }elseif ($type == 'training') {
         $trainingposts = TrainingPost::where('company_id',$id)->get();
         foreach ($trainingposts as $trainingpost) {
           $training_post_path=public_path().'/upload/post/'.$trainingpost->photo;
           if(file_exists($training_post_path)){
               unlink($training_post_path);
           }
           $trainingpost->delete();
         }
       }
     }







     
//training post
function upload_training_post_photo(Request $request){
  return ASC::insert_photo_file($request,'upload/post/job_post');
}

public function insert_training_post(Request $request){
  $user= Auth::user();
  //$company_id=$user->data_id;
  $company_id=1;
 $arr=array_merge($request->all(),['company_id'=>$company_id]);
 $obj=new TrainingPostData();
 return $obj->create_post($arr);
}

function confirm_training_post($id){
  $obj=new TrainingPostData();
  return $obj->confirm_post($id);
}

function delete_training_post($id){
  $obj=new TrainingPostData();
  return $obj->delete_post($id);
}

function edit_training_post(Request $request,$id){
  $company_id=1; //to change auth
  $new_post_data=$request->all()+['company_id'=>$company_id];
 $obj=new TrainingPostData();
 return $obj->edit_post($id,$new_post_data);
}

function pending_training_posts(){
  $obj=new TrainingPostData();
  $posts=$obj->get_pending_post('training_post');
  return $posts;
}

// function active_training_posts(){
//   $obj=new TrainingPostData();
//   $posts=$obj->get_active_post('training_post');
//   return $posts;
// }

function post_detail($id){
    $obj=new TrainingPostData();
    return $obj->post_detail($id);
}


}
