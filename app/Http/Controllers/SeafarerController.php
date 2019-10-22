<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomClass\CompanyData;
use Illuminate\Support\Facades\Auth;
use App\Seafarer_request;

class SeafarerController extends Controller
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function request($company_id,$post_id){
        $company_obj = new CompanyData($company_id);
        $company_info = $company_obj->getCompany_info();
        $company_type = $company_info->company_type;
        
        if(Auth::check()){
            
            $user = Auth::user();
            $account_type = $user->type;
            $account_id = $user->data_id;
            if($account_type == "seafarer"){
                Seafarer_request::create([
                    'company_id'=>$company_id,
                    'seafarer_id'=>$account_id,
                    'post_id'=>$post_id,
                ]);
            }else{
                return "This is other account";
            }
            
        }else{
            return view('user.login')->with([
                'company_id'=>$company_id,
                'post_id'=>$post_id
                ]);
        }
        
    }

    public function seafarer_request(Request $request){
        $arr=array_merge($request->all());
        $enroll=Seafarer_request::create($arr);
        return $enroll->exists?"success":"fail";
    }
}
