<?php

namespace App\Http\Controllers;

use App\CustomClass\ASC;
use App\CustomClass\CompetencyData;
use App\CustomClass\DocumentData;
use App\CustomClass\SeafarerData;
use App\CustomClass\SeaServiceData;
use App\Document;
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
}
