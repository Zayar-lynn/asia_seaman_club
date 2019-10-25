<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/25/2019
 * Time: 6:19 PM
 */

namespace App\CustomClass;


use App\SeaService;

class SeaServiceData
{
    public function create($arr)
    {
        $post=SeaService::create($arr);
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

    public function delete($id)
    {
        $data=SeaService::findOrFail($id);

        $arr=json_decode($data['seaservice_confirm_photo']);
        foreach ($arr as $photo){
            $image_path=public_path().'/upload/seafarer/sea_service_photo/'.$photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        $deleted=$data->delete();
        return $deleted ? 'success' : 'fail';
    }

    public function edit($id, $new_data)
    {
        $post=SeaService::findOrFail($id);

        if(!empty($new_data['seaservice_confirm_photo_link'])){
            $new_data = array_merge($new_data,['seaservice_confirm_photo'=>$new_data['seaservice_confirm_photo_link']]);
        }
        $post_photos=json_decode($post->seaservice_confirm_photo);
        foreach ($post_photos as $post_photo) {
            $image_path=public_path().'/upload/seafarer/sea_service_photo/'.$post_photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        $updated = $post->update($new_data);

        return $updated?'success':'fail';
    }

    public function detail($id)
    {
        $item=SeaService::findOrFail($id);
        $photo_arr=[];
        foreach (json_decode($item->seaservice_confirm_photo) as $data){
            array_push($photo_arr,ASC::$domain_url.'upload/seafarer/sea_service_photo/'.$data);
        }
        $item['seaservice_confirm_photo']=$photo_arr;
        return $item;
        //       return $post->user
    }

    public static function format($arr)
    {
        $temp_arr=[];
        foreach ($arr as $post){
            $data=new SeaServiceData();
            array_push($temp_arr,$data->detail($post['id']));
        }
        return $temp_arr;

    }
}