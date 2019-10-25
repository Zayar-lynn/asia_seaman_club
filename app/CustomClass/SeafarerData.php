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
use App\SeaService;

class SeafarerData
{
    public function create_seafarer($seafarer_data)
    {
        $post=Seafarer::create($seafarer_data);
        return $post->exists?"success":"fail";
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

        $deleted=$data->delete();
        return $deleted ? 'success' : 'fail';
    }

    public function edit_seafarer($post_id, $new_data)
    {
        $post=Seafarer::findOrFail($post_id);

        if(!empty($new_data['photo_url'])){
            $new_data = array_merge($new_data,['photo'=>$new_data['photo_url']]);
        }
        if(!empty($new_data['english_certificate_url'])){
            $new_data = array_merge($new_data,['english_certificate'=>$new_data['english_certificate_url']]);
        }
        if(!empty($new_data['resume_url'])){
            $new_data = array_merge($new_data,['resume_file'=>$new_data['resume_url']]);
        }
        $post_photos=json_decode($post->photo);
        foreach ($post_photos as $post_photo) {
            $image_path=public_path().'/upload/seafarer/photo/'.$post_photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        $updated = $post->update($new_data);

        return $updated?'success':'fail';
    }

    public function seafarer_detail($id)
    {
        $item=Seafarer::findOrFail($id);
        $photo_arr=[];
        $english_certificate_arr=[];
        $resume_file_arr=[];
        foreach (json_decode($item->photo) as $data){
            array_push($photo_arr,ASC::$domain_url.'upload/seafarer/photo/'.$data);
        }
        foreach (json_decode($item->english_certificate) as $data){
            array_push($english_certificate_arr,ASC::$domain_url.'upload/seafarer/photo/'.$data);
        }
        foreach (json_decode($item->resume_file) as $data){
            array_push($resume_file_arr,ASC::$domain_url.'upload/seafarer/photo/'.$data);
        }
        $item['photo']=$photo_arr;
        $item['english_certificate']=$english_certificate_arr;
        $item['resume_file']=$resume_file_arr;
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
}