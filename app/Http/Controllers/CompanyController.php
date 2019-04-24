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
use App\User;

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
    public function edit($id)
    {
        $data = JobPost::find($id);
        $data['photo_url']=ASC::$domain_url."upload/post/".$data->photo;
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
        $jobpost = JobPost::find($id);
        $image_path=public_path().'/upload/post/'.$jobpost->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $jobpost->delete();
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
        return view('admin.company_admin.jobpost')
            ->with(['url'=>'jobpost'])
            ->with('shiptypes',$shiptype)
            ->with(['company_name'=>$account_name->company_name]);
    }

    public function insert_jobpost(Request $request){
        $user = Auth::user();
        $company_id = $user->data_id;

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


            JobPost::create([
                'company_id'=>$company_id,
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

    public function training_detail($training_id){
        $training_obj = new TrainingData($training_id);

        $training_detail = $training_obj->getTrainingData();
        return view('user.training-detail')->with([
            'training_detail'=>$training_detail
            ]);
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
}
