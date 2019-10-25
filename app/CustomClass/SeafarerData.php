<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2019
 * Time: 4:45 PM
 */

namespace App\CustomClass;


use App\Competency;
use App\Document;
use App\Seafarer;
use App\Seafarer_request;
use App\SeaService;
use App\Shipmate;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class SeafarerData
{
    public function create_seafarer($seafarer_data)
    {
        if($seafarer_data['password']==$seafarer_data['confirm_password']){
            $post=Seafarer::create([
                'email'=>$seafarer_data['email']
            ]);

            $user=User::create([
                'email'=>$post['email'],
                'password'=>Hash::make($seafarer_data['password']),
                'type'=>'seafarer',
                'data_id'=>$post['id'],
                'api_token'=>Str::random(80)
            ]);
            return $user->exists?"success":"fail";
        }

    }

//    public function confirm_post($post_id)
//    {
//        $post=NormalPost::find($post_id);
//        $post->update([
//            'status'=>'active'
//        ]);
//        return $post->status=='active'?'success':'fail';
//    }



    public function delete_seafarer($id)
    {
        $data=Seafarer::findOrFail($id);

        $arr1=json_decode($data['photo']);
        $arr2=json_decode($data['english_certificate']);
        $arr3=json_decode($data['resume_file']);
        $arr=array_merge($arr1,$arr2,$arr3);
        foreach ($arr as $photo){
            $image_path=public_path().'/upload/seafarer/photo/'.$photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }

        $seaservice=SeaService::where('seafarer_id',$id)->get();
        foreach ($seaservice as $sea){
            $obj=new SeaServiceData();
            $obj->delete($sea['id']);
        }

        $document=Document::where('seafarer_id',$id)->get();
        foreach ($document as $sea){
            $obj=new DocumentData();
            $obj->delete($sea['id']);
        }

        $competency=Competency::where('seafarer_id',$id)->get();
        foreach ($competency as $sea){
            $obj=new CompetencyData();
            $obj->delete($sea['id']);
        }
        Seafarer_request::where('seafarer_id',$id)->delete();
        User::where('data_id',$id)->delete();
        $deleted=$data->delete();
        return $deleted ? 'success' : 'fail';
    }

    public function edit_seafarer($seafarer_id, $new_data)
    {
        $post=Seafarer::findOrFail($seafarer_id);

        if(!empty($new_data['photo_url'])){
            $new_data = array_merge($new_data,['photo'=>$new_data['photo_url']]);
        }
        if(!empty($new_data['english_certificate_url'])){
            $new_data = array_merge($new_data,['english_certificate'=>$new_data['english_certificate_url']]);
        }
        if(!empty($new_data['resume_url'])){
            $new_data = array_merge($new_data,['resume_file'=>$new_data['resume_url']]);
        }
        if ($post->photo!=null){
            $post_photos=json_decode($post->photo);
            foreach ($post_photos as $post_photo) {
                $image_path=public_path().'/upload/seafarer/photo/'.$post_photo;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }
        }

        $updated = $post->update($new_data);
        $user_updated=User::where('data_id',$seafarer_id)->where('type','seafarer')->update([
            "email"=>$new_data['email']
        ]);

        return $user_updated?'success':'fail';
    }

    public function seafarer_detail($id)
    {
        $item=Seafarer::findOrFail($id);
        $photo_arr=[];
        $english_certificate_arr=[];
        $resume_file_arr=[];
        if ($item->photo!=null){
            foreach (json_decode($item->photo) as $data){
                array_push($photo_arr,ASC::$domain_url.'upload/seafarer/photo/'.$data);
            }
            $item['photo']=$photo_arr;
        }
        if ($item->english_certificate!=null){
            foreach (json_decode($item->english_certificate) as $data){
                array_push($english_certificate_arr,ASC::$domain_url.'upload/seafarer/photo/'.$data);
            }
            $item['english_certificate']=$english_certificate_arr;
        }
        if ($item->resume_file!=null) {
            foreach (json_decode($item->resume_file) as $data) {
                array_push($resume_file_arr, ASC::$domain_url . 'upload/seafarer/photo/' . $data);
            }
            $item['resume_file'] = $resume_file_arr;

        }
        return $item;
        //       return $post->user
    }

    public static function seafarer_format($arr)
    {
        $temp_arr=[];
        foreach ($arr as $post){
            $data=new SeafarerData();
            array_push($temp_arr,$data->seafarer_detail($post['id']));
        }
        return $temp_arr;

    }
//----------------------------

    public function add_friend($arr){
        $data=Shipmate::create($arr);
        return $data->exits?'success':'fail';
    }

    public function friend_list($seafarer_id){
        $seafarer_arr=[];
        $arr=Shipmate::where('seafarer_id',$seafarer_id)->where('status','friend')->get();
        foreach ($arr as $seafarer){
            $obj=new SeafarerData();
            $seafarer=$obj->seafarer_detail($seafarer['friend_seafarer_id']);
            array_push($seafarer_arr,$seafarer);
        }
        return $seafarer_arr;
    }

    public function request_list($seafarer_id){
        $seafarer_arr=[];
        $arr=Shipmate::where('seafarer_id',$seafarer_id)->where('status','request')->get();
        foreach ($arr as $seafarer){
            $obj=new SeafarerData();
            $seafarer=$obj->seafarer_detail($seafarer['friend_seafarer_id']);
            array_push($seafarer_arr,$seafarer);
        }
        return $seafarer_arr;
    }


}