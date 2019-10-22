<?php
/**
 * Created by PhpStorm.
 * User: Alintan
 * Date: 15-Oct-19
 * Time: 2:34 PM
 */

namespace App\CustomClass;


use App\Company;
use App\Freeman;
use App\User;

class UserData
{
    static function get_user_info($id){
        $user=User::findOrFail($id);
        $type=$user->type;
        if($type=="company" || $type=="company_staff"){
            $company=Company::findOrFail($user->data_id);
            $user['other_info']=$company;
        }
        else if($type=="seafarer"){
//            $company=::findOrFail($user->data_id);
//            $user['other_info']=$company;
        }
        else if($type=="freeman"){
            $company=Freeman::findOrFail($user->data_id);
            $user['other_info']=$company;
        }
        else if($type=="admin"){

        }
        return $user;

    }
}