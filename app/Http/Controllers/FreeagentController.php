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

class FreeagentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/post/'),$photo_name);
            $jobpost = JobPost::find($id);
            $image_path=public_path().'/upload/post/'.$jobpost->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            JobPost::findOrFail($id)->update([
                'photo'=>$photo_name,
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
        }else{
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

    public function freeagent_jobpost(){
        $shiptype = ShipType::all();
        return view('admin.freeagent_admin.job_post')->with(['url'=>'jobpost'])->with('shiptypes',$shiptype);
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

        $photo = $request->file('photo');
        $photo_name = uniqid().'_'.$photo->getClientOriginalName();
        $photo->move(public_path('upload/post'),$photo_name);

            JobPost::create([
                'photo'=>$photo_name,
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
