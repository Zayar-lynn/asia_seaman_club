<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainingPost;
use App\CustomClass\TrainingData;
use App\CustomClass\ASC;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\CustomClass\CompanyData;
use App\CompanyPhoto;

class TrainingController extends Controller
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
        return view('admin.training_admin.dashboard')->with(['url'=>'dashboard'])->with(['company_name'=>$account_name->company_name]);
    }

    public function training_course()
    {
        $user = Auth::user();
        $account_id = $user->data_id;
        $job_data=new CompanyData($account_id);
        $account_name = $job_data->getCompany_info();

        return view('admin.training_admin.course')
            ->with(['url'=>'training_course'])
            ->with(['company_name'=>$account_name->company_name]);
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
        $training_id = $request->session()->get('account_id');
        $title = $request->get('title');
        $description = $request->get('description');
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');
        $time = $request->get('time');
        $photo = $request->file('photo');
        $photo_name = uniqid().'_'.$photo->getClientOriginalName();
        $photo->move(public_path('upload/post'),$photo_name);

            TrainingPost::create([
                'title'=>$title,
                'description'=>$description,
                'company_id'=>$training_id,
                'photo'=>$photo_name,
                'start_date'=>$start_date,
                'end_date'=>$end_date,
                'time'=>$time
            ]);
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
        $data = TrainingPost::find($id);
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
        $title = $request->get('title');
        $description = $request->get('description');
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');
        $time = $request->get('time');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/post/'),$photo_name);
            $training_post = TrainingPost::find($id);
            $image_path=public_path().'/upload/post/'.$training_post->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            TrainingPost::findOrFail($id)->update([
                'title'=>$title,
                'description'=>$description,
                'start_date'=>$start_date,
                'end_date'=>$end_date,
                'time'=>$time,
                'photo'=>$photo_name
            ]);
        }else {
            TrainingPost::findOrFail($id)->update([
                'title'=>$title,
                'description'=>$description,
                'start_date'=>$start_date,
                'end_date'=>$end_date,
                'time'=>$time
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
        $training_course = TrainingPost::find($id);
        $image_path=public_path().'/upload/post/'.$training_course->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $training_course->delete();
    }

    public function get_all_trainingcourse(){
        $user = Auth::user();
        $company_id = $user->data_id;
        $training_course=TrainingPost::where('company_id',$company_id)->orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($training_course as $data){
            $training_data=new TrainingData($data->id);
            array_push($arr,$training_data->getTrainingData());
        }
         return json_encode($arr);
     }

//     public function edit_company_photo(){
//        $user = Auth::user();
//        $company_id = $user->data_id;
//        $company_photo = CompanyPhoto::where('company_id',$company_id)->get();
//
//        $account_data = Company::where('id',$company_id)->get();
//        foreach ($account_data as $data){
//            $job_data=new CompanyData($data->id);
//            $account_name = $job_data->getCompany_info();
//        }
//        return view('admin.training_admin.company_photo')
//            ->with(['url'=>'company_photo'])
//            ->with('company_photos',$company_photo)
//            ->with(['company_name'=>$account_name->company_name]);
//    }

//    public function company_photo_detail($id){
//        $data = CompanyPhoto::find($id);
//        $data['photo_url']=ASC::$domain_url."upload/company_photo/".$data->photo;
//        return json_encode($data);
//    }

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
            return redirect('/training_dashboard/company_photo');
        }else {
            CompanyPhoto::findOrFail($id)->update([
                'title'=>$title
            ]);
            return redirect('/training_dashboard/company_photo');
        }
    }
}
