<?php

namespace App\Http\Controllers;

use App\CustomClass\ASC;
use App\CustomClass\CompetencyData;
use App\CustomClass\DocumentData;
use App\CustomClass\JobPostData;
use App\CustomClass\SeafarerData;
use App\CustomClass\SeaServiceData;
use App\CustomClass\TrainingPostData;
use App\Document;
use App\Seafarer;
use App\Shipmate;
use App\User;
use Illuminate\Http\Request;
use App\CustomClass\CompanyData;
use Illuminate\Support\Facades\Auth;
use App\Seafarer_request;

class SeafarerController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj=new SeafarerData();
        return $obj->create_seafarer($request->all());
    }

    function sea_service_store(Request $request){
        $obj=new SeaServiceData();
        return $obj->create($request->all());
    }

    function competency_store(Request $request){
        $obj=new CompetencyData();
        return $obj->create($request->all());
    }

    function document_store(Request $request){
        $obj=new DocumentData();
        return $obj->create($request->all());
    }

    public function upload_seafarer_photo(Request $request){
        return ASC::insert_photo_file($request,'upload/seafarer/photo/');
    }

    public function upload_competency_photo(Request $request){
        return ASC::insert_photo_file($request,'upload/seafarer/competency_photo/');
    }
    public function upload_sea_service_photo(Request $request){
        return ASC::insert_photo_file($request,'upload/seafarer/sea_service_photo/');
    }

    public function upload_document_photo(Request $request){
        return ASC::insert_photo_file($request,'upload/seafarer/document/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj=new SeafarerData();
        return $obj->seafarer_detail($id);
    }

    public function sea_service_show($id){
        $obj=new SeaServiceData();
        return $obj->detail($id);
    }

    public function document_show($id){
        $obj=new DocumentData();
        return $obj->detail($id);
    }
    public function competency_show($id){
        $obj=new CompetencyData();
        return $obj->detail($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj=new SeafarerData();
        return $obj->edit_seafarer($id,$request->all());
    }

    public function sea_service_update(Request $request,$id){
        $obj=new SeaServiceData();
        return $obj->edit($id,$request->all());
    }

    public function document_update(Request $request,$id){
        $obj=new DocumentData();
        return $obj->edit($id,$request->all());
    }

    public function competency_update(Request $request,$id){
        $obj=new CompetencyData();
        return $obj->edit($id,$request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj=new SeafarerData();
        return $obj->delete_seafarer($id);
    }
    public function sea_service_destroy($id)
    {
        $obj=new SeaServiceData();
        return $obj->delete($id);
    }

    public function document_destroy($id){
        $obj=new DocumentData();
        return $obj->delete($id);
    }

    // enroll job post and training post from seafarer
    public function seafarer_request(Request $request){
        $arr=array_merge($request->all());
        $enroll=Seafarer_request::create($arr);
        return $enroll->exists?"success":"fail";
    }

    public function add_friend(Request $request){
        $obj=new SeafarerData();
        $arr=[
            'seafarer_id'=>$request->get('seafarer_id'),
            'friend_seafarer_id'=>$request->get('friend_seafarer_id'),
            'status'=>'request'
        ];
        $obj->add_friend($arr);
    }

    public function confirm($shipmate_id){
        Shipmate::findOrFail($shipmate_id)->update([
            'status'=>'friend',
        ]);
    }

    public function delete_shipmate($shipmate_id){
        $deleted=Shipmate::findOrFail($shipmate_id)->delete();
        return $deleted?'success':'false';
    }

    function friend_list($seafarer_id){
        $obj=new SeafarerData();
        return $obj->friend_list($seafarer_id);
    }

    function request_list($seafarer_id){
        $obj=new SeafarerData();
        return $obj->request_list($seafarer_id);
    }

    function post_enroll_list($user_id){
        $user=User::findOrFail($user_id);
        $user_type=$user['type'];
        $post=[];
        if ($user_type=='company' || $user_type=='company_staff'){
            $post=Seafarer_request::where('company_id',$user['data_id'])->get();
        }
        else if ($user_type=='seafarer'){
            $post=Seafarer_request::where('seafarer_id',$user['data_id'])->get();
        }
        $s_obj=new SeafarerData();
        $post_arr=[];
        $t_post=new TrainingPostData();
        $j_obj=new JobPostData();
        foreach ($post as $data){
            if ($data['post_type']=='job_post'){
                $post_data=$j_obj->post_detail($data['post_id']);
            }
            else if ($data['post_type']=='training_post'){
                $post_data=$t_post->post_detail($data['post_id']);
            }
            $arr=[
                'id'=>$data['id'],
                'seafarer'=>$s_obj->seafarer_detail($data['seafarer_id']),
                'post_type'=>$data['post_type'],
                'post'=>$post_data
            ];
            array_push($post_arr,$arr);
        }



        return $post_arr;
    }



}
