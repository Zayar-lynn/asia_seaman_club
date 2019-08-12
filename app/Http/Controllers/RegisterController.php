<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Seafarer;
use App\Teacher;
use App\Company;
use App\Account;
use App\CompanyPhoto;
//use Illuminate\Foundation\Auth\User;
use App\User;

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
        $companyname = $request->get('companyname');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $type = $request->get('type');
        $password = $request->get('password');
        $password_confirmation = $request->get('password_confirmation');
        $address = $request->get('address');
        $whatwedo = $request->get('whatwedo');
        $whyjoinus = $request->get('whyjoinus');
        $workplace = $request->get('workplace');
        $facebook_url = $request->get('facebook');
        $website_url = $request->get('website');
        $photo = $request->file('photo');
        $photo_name = uniqid().'_'.$photo->getClientOriginalName();
        $photo->move(public_path('upload/company_logo'),$photo_name);

        if($password == $password_confirmation){
                $company = Company::create([
                                'company_name' => $companyname,
                                'phone' => $phone,
                                'email' => $email,
                                'company_type' => $type,
                                'photo' => $photo_name,
                                'address' => $address,
                                'what_we_do' => $whatwedo,
                                'why_join_us' => $whyjoinus,
                                'workplace_and_culture' => $workplace,
                                'facebook_url' => $facebook_url,
                                'website_url' => $website_url,
                            ])->id;
            User::create([
                'email' => $email,
                'password' => Hash::make($password),
//                'password' => $password,
                'type' => $type,
                'data_id' => $company,
            ]);
            for ($i=1; $i <= 8; $i++) {
                CompanyPhoto::create([
                    'title' => '',
                    'company_id' => $company,
                ]);
            }


        }
        $device = $request->get('device');
        if (empty($device)) {
            return redirect('/login');
        }



    }

    public function freeagentregister(Request $request)
    {
        $agentcompany = $request->get('agentcompany');
        $phone = $request->get('phone');
        $email = $request->get('email');
        $type = 'freeagent';
        $password = $request->get('password');
        $password_confirmation = $request->get('password_confirmation');
        $address = $request->get('address');
        $whatwedo = $request->get('whatwedo');
        $photo = $request->file('photo');
        $photo_name = uniqid().'_'.$photo->getClientOriginalName();
        $photo->move(public_path('upload/company_logo'),$photo_name);

        if($password == $password_confirmation){
                $agentcompany = Company::create([
                                'company_name' => $agentcompany,
                                'phone' => $phone,
                                'email' => $email,
                                'company_type' => $type,
                                'what_we_do' => $whatwedo,
                                'photo' => $photo_name,
                                'address' => $address,
                            ])->id;
            User::create([
                'email' => $email,
                'password' => Hash::make($password),
//                'password' => $password,
                'type' => $type,
                'data_id' => $agentcompany,
            ]);

        }
        return redirect('/login');
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
