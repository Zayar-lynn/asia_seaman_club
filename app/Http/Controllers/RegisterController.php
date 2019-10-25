<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Seafarer;
use App\Teacher;
use App\Company;
use App\User;
use App\CustomClass\ASC;
use App\Freeman;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function teacherregister(Request $request)
    {
        $teachername = $request->get('teachername');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $password = $request->get('password');
        $password_confirmation = $request->get('password_confirmation');
        $teacher_type = 'teacher';

        if($password == $password_confirmation){
            $teacher = Teacher::create([
                            'name' => $teachername,
                            'phone' => $phone,
                            'email' => $email,
                            'teacher_type' => $teacher_type,
                        ])->id;
            User::create([
                'email' => $email,
                'password' => Hash::make($password),
//                'password' => $password,
                'type' => $teacher_type,
                'data_id' => $teacher,
            ]);
        }
        //return redirect('/login');
    }

    public function businessregister(Request $request)
    {
        $company_name = $request->get('company_name');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $type = $request->get('type');
        $password = $request->get('password');
        $password_confirmation = $request->get('password_confirmation');
        $address = $request->get('address');
        $contact_person_name = $request->get('contact_person_name');
        $position = $request->get('position');
        $street = $request->get('street');
        $city = $request->get('city');
        $state = $request->get('state');
        $country = $request->get('country_id');
        $website_url = $request->get('website_url');
        $referral_code = $request->get('referral_code');

        if($password == $password_confirmation){
            $company = Company::create([
                        'company_name' => $company_name,
                        'contact_person_name' => $contact_person_name,
                        'position' => $position,
                        'phone' => $phone,
                        'email' => $email,
                        'business_type' => $type,
                        'address' => $address,
                        'street' => $street,
                        'city' => $city,
                        'state' => $state,
                        'country_id' => $country,
                        'website_url' => $website_url,
                        'referral_code' => $referral_code
                    ])->id;
            $new_user=User::create([
                'email' => $email,
                'password' => Hash::make($password),
                'type' => 'company',
                'data_id' => $company,
                'api_token'=>Str::random(60),
            ]);
            // for ($i=1; $i <= 8; $i++) {
            //     CompanyPhoto::create([
            //         'title' => '',
            //         'company_id' => $company,
            //     ]);
            // }


        }
        $device = $request->get('device');
        if (empty($device)) {
            return redirect('/login');
        }
        else{
            $arr=[
                'email'=>$email,
                'phone'=>$phone,
                'name'=>$company_name,
                'api_token'=>$new_user->api_token
            ];
            return $arr;
        }



    }

    public function upload_freeman_photo(Request $request)
    {
        return ASC::insert_photo_file($request,'upload/freeman_photo');
    }

    public function freeagentregister(Request $request)
    {
        $agentcompany = $request->get('name');
        $occupation = $request->get('occupation');
        $id_card = $request->get('id_card');
        $front_photo_link = $request->get('front_photo_link');
        $back_photo_link = $request->get('back_photo_link');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $street = $request->get('street');
        $city = $request->get('city');
        $state = $request->get('state');
        $email = $request->get('email');
        $referral_code = $request->get('referral_code');
        $type = 'freeman';
        $password = $request->get('password');
        $password_confirmation = $request->get('password_confirmation');

        //return $occupation;

        if($password == $password_confirmation){
            $freeman = Freeman::create([
                            'name' => $agentcompany,
                            'occupation' => $occupation,
                            'id_card' => $id_card,
                            'front_photo' => $front_photo_link,
                            'back_photo' => $back_photo_link,
                            'phone' => $phone,
                            'address' => $address,
                            'street' => $street,
                            'city' => $city,
                            'state' => $state,
                            'email' => $email,
                            'referral_code' => $referral_code,
                        ])->id;
            $new_user=User::create([
                'email' => $email,
                'password' => Hash::make($password),
                'type' => $type,
                'data_id' => $freeman,
                'api_token'=>Str::random(80)
            ]);
            $device = $request->get('device');
            if (empty($device)) {
                return redirect('/login');
            }
            else{
                $arr=[
                    'email'=>$email,
                    'phone'=>$phone,
                    'name'=>$agentcompany,
                    'api_token'=>$new_user->api_token
                ];
                return $arr;
            }


        }
//         return redirect('/login');
    }

    public function seafarerregister(Request $request){
    	$employeename = $request->get('employeename');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $password = $request->get('password');
        $password_confirmation = $request->get('password_confirmation');
        $seafarer_type = 'seafarer';

        $device = $request->get('device');

        if($password == $password_confirmation){
            $user=User::where('email',$email)->get();
            if(count($user)==0){
                $seafarer = Seafarer::create([
                    'employee_name' => $employeename,
                    'phone' => $phone,
                    'email' => $email,
                    'seafarer_type' => $seafarer_type,
                ])->id;
                User::create([
                    'email' => $email,
                    'password' => Hash::make($password),
                    //                'password' => $password,
                    'type' => $seafarer_type,
                    'data_id' => $seafarer,
                ]);
            }
            else{
                if (empty($device)) {
                  return redirect('/employee-register')->with(['error_msg'=>'Already Email!']);
                }
            }
        }else {
          if (empty($device)) {
            return redirect('/employee-register')->with(['error_msg'=>'Passowd does not match!']);
          }
        }
        if (empty($device)) {
            return redirect('/login');
        }

    }


    public function get_all_teacher_acc(){
        $teachers=Teacher::orderBy('id', 'desc')->get();
        return json_encode($teachers);
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $t_user = User::where('data_id',$id);
        $teacher->delete();
        $t_user->delete();
    }
}
