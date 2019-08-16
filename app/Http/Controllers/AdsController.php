<?php

namespace App\Http\Controllers;

use App\Ads_webpage;
use App\Webpage;
use Illuminate\Http\Request;
use App\Ads;
use App\CustomClass\ASC;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $webpage=Webpage::all();
        return view('admin.site_admin.ads')
            ->with([
                'url'=>'ads',
                'webpages'=>$webpage
            ]);
    }

    function create_or_edit_ads(Request $request){
//        return $request->all();
        $id=$request->get("ads_id");
        $webpage=$request->get("webpage");

        $link=$request->get('link');
        $start_date=$request->get('start_date');
        $end_date=$request->get('end_date');

        if($id==0){//if insert
            if ($request->hasFile('photo')){
                $file=$request->file('photo');
                $image_name=uniqid().'_'.$file->getClientOriginalName();
                $file->move(public_path().'/upload/ads/',$image_name);
            }
            $ads_id=Ads::create([
                'photo'=>$image_name,
                'link'=>$link,
                'start_date'=>$start_date,
                'end_date'=>$end_date
            ])->id;
            foreach ($webpage as $data){
                Ads_webpage::create([
                    'webpage_id'=>$data,
                    'ads_id'=>$ads_id
                ]);
            }
        }
//        else{
//            if ($request->hasFile('photo')) {
//                $file = $request->file('photo');
//                $image_name = uniqid() . '_' . $file->getClientOriginalName();
//                $file->move(public_path() . '/upload/ads/', $image_name);
//                $blog=Ads::findOrFail($id);
//                $image_path=public_path().'/upload/ads/'.$blog->photo;
//                if(file_exists($image_path)){
//                    unlink($image_path);
//                }
//
//                Ads::findOrFail($id)->update([
//                    'photo'=>$image_name
//                ]);
//            }
//        }

    }


    function all_ads(){
        $ads=Ads::all();
        $ads=$this->show_ads($ads);
        return json_encode($ads);
    }

    static function ads_by_page($page_id){
        $ads_webpage=Ads_webpage::where('webpage_id',$page_id)->get();
        $ads_arr=[];
        foreach ($ads_webpage as $data){
            $ads=Ads::findOrFail($data->ads_id);
            array_push($ads_arr,$ads);
        }
        $ads_arr=AdsController::show_ads($ads_arr);
        $active_ads=self::filter_active_ads($ads_arr);
        return $active_ads;
    }

    public static function filter_active_ads($arr){
        $active_ads=[];
        foreach ($arr as $ads){
            if($ads['status']=="success" || $ads['status']=="warning"){
                array_push($active_ads,$ads);
            }
        }
        return $active_ads;
    }

    private static function show_ads($ads){
        foreach ($ads as $data){
            $data['photo_url']=ASC::$domain_url.'upload/ads/'.$data->photo;

            $arr=[];
            foreach ($data->webpage as $webpage){
                $page=Webpage::findOrFail($webpage->webpage_id);
                array_push($arr,$page->name);
            }
            $data['webpage_name']=$arr;
//           compare date
            $today = date('Y-m-d');
            if($today>=$data['start_date'] && $today<=$data['end_date']){
                if(date('Y-m-d',strtotime("+10 day"))>=$data['end_date']){
                    $status="warning";
                }
                else{
                    $status='success';
                }
            }
            else if($data['start_date']>$today){
                $status='primary';
            }
            else{
                $status='danger';
            }

            $data['status']=$status;
        }
        return $ads;
    }
//    function test($id){
////        $data=Ads::find($id);
////        $data['photo_url']=RenoMyanmar::$domain_url.'upload/ads/'.$data->photo;
////        $status='success';
////
////        $today = date('Y-m-d');
////        if($today>=$data['start_date'] && $today<=$data['end_date']){
////            if(Date('y:m:d', strtotime("+10 days"))>=$data['end_date']){
////                $status="warning";
////            }
////            else{
////                $status='success';
////            }
////        }
////        else{
////            $status='danger';
////        }
////
////        $data['status']=$status;
//        $data=date('Y-m-d',strtotime("+1 day"));
//        return $data;
//
//    }



    function delete($id){
        $ads=Ads::findOrFail($id);
        $image_path=public_path().'/upload/ads/'.$ads->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $ads->delete();
        Ads_webpage::where('ads_id',$id)->delete();
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
        $data = Ads::find($id);
        $data['photo_url']=ASC::$domain_url."upload/ads/".$data->photo;
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
        $link = $request->get('link');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/ads/'),$photo_name);
            $blog = Ads::find($id);
            $image_path=public_path().'/upload/ads/'.$blog->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Ads::findOrFail($id)->update([
                'photo'=>$photo_name,
                'link'=>$link
            ]);
        }else {
            Ads::findOrFail($id)->update([
                'link'=>$link
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
        $ads = Ads::find($id);
        $image_path=public_path().'/upload/ads/'.$ads->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $ads->delete();
    }

    public function insert(Request $request){
        $link = $request->get('link');
        $photo = $request->file('photo');
        $photo_name = uniqid().'_'.$photo->getClientOriginalName();
        $photo->move(public_path('upload/ads'),$photo_name);

            Ads::create([
                'photo'=>$photo_name,
                'link'=>$link
            ]);
    }

    public function get_all_ads(){
        $adss=Ads::orderBy('id', 'desc')->get();
        foreach ($adss as $ads){
            $ads['photo_url']=ASC::$domain_url."upload/ads/".$ads->photo;
        }
        return json_encode($adss);
    }
}
