<?php
/**
 * Created by PhpStorm.
 * User: Alintan
 * Date: 2/2/2019
 * Time: 9:22 AM
 */

namespace App\CustomClass;

use Illuminate\Http\Request;

class ASC
{
    static public $domain_url="http://aseamenclub.com/";

    public static function insert_photo_file(Request $request,$storage_location){
        $photolinks=[];
        $photos = $request->file('photo');
        foreach ($photos as $photo){
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path($storage_location),$photo_name);

            array_push($photolinks,$photo_name);
        }
        return $photolinks;

    }
}
