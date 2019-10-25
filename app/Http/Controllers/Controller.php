<?php

namespace App\Http\Controllers;

use App\CustomClass\CompanyData;
use App\CustomClass\JobPostData;
use App\CustomClass\NormalPostData;
use App\CustomClass\UserData;
use App\Freeman;
use App\JobPosition;
use App\Seafarer;
use App\VesselType;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use Illuminate\Support\Facades\Session;

use App\Seafarer_request;
use App\Admin_blog;
use App\CustomClass\BlogData;
use App\Testimonial;
use App\CustomClass\TestimonialData;
use App\JobPost;
use App\CustomClass\JobData;
use App\Ads;
use App\CustomClass\ASC;
use App\Country;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function update_token(Request $request)
    {
        $token = Str::random(60);

        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return ['token' => $token];
    }

    function api_login(Request $request){
        $email=$request->get('email');
        $password=$request->get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user=Auth::user();
            $arr=UserData::get_user_info($user->id);
//            if ($user->type==="company"){
//                $company_obj=new CompanyData($user->data_id);
//                $company=$company_obj->getCompany_info();
//                $name=$company['company_name'];
//                $phone=$company['phone'];
//            }
//            else if ($user->type==="freeman"){
//                $freeman=Freeman::find($user->data_id);
//                $name=$freeman['employee_name'];
//                $phone=$freeman['phone'];
//            }
//            else if ($user->type==="seafarer"){
//                $seafarer=Seafarer::find($user->data_id);
//                $name=$seafarer['employee_name'];
//                $phone=$seafarer['phone'];
//            }
//            $arr=[
//                'email'=>$email,
//                'phone'=>$phone,
//                'name'=>$name,
//                'api_token'=>$user->api_token
//            ];
            return $arr;
        }
        else{
            return "false";
        }
    }

    function get_job_position(){
        $position=JobPosition::all();
        return $position;
    }

    function get_vessel_type(){
        $type=VesselType::all();
        return $type;
    }

    function login(Request $request){
    	$email=$request->get('email');
        $password=$request->get('password');

        $company_id=$request->get('company_id');
        $post_id=$request->get('post_id');
        //return json_encode($request->all());
        if (Auth::attempt(['email' => $email, 'password' => $password])) {  //yyk
            $account=Auth::user();

            $account_type=$account->type;
            $data_id=$account->data_id;

            $request->session()->put('login_id', $data_id);
            if($account_type=="admin"){
                return redirect('admin');
            }
            else if($account_type==="teacher"){
                $request->session()->put('account_id',$data_id);
                return redirect('teacher_dashboard');
            }
            else if($account_type==="company"){
                return redirect('company_dashboard');
            }
            else if($account_type==="training"){
                $request->session()->put('account_id',$data_id);
                return redirect('training_dashboard');
            }
            else if($account_type==="freeagent"){
                return redirect('freeagent_dashboard');
                //return 'Free Agent Dashboard';
            }
            else if($account_type==="seafarer"){
                if(!empty($company_id) && !empty($post_id)){
                    $user = Auth::user();
                    $account_id = $user->data_id;
                    Seafarer_request::create([
                        'company_id'=>$company_id,
                        'seafarer_id'=>$account_id,
                        'post_id'=>$post_id,
                    ]);
                    return redirect('serfarer_over-view');
                }
                return redirect('serfarer_over-view');
            }

        }
        else{
            return "no acccount";
        }


    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/login')->with('success_msg','Logout Success');
    }

    public function index(){
        //job
        $jobs = JobPost::orderBy('id', 'desc')->limit(10)->get();
        $arr_job=[];
        foreach ($jobs as $data){
            $job_data=new JobData($data->id);
            array_push($arr_job,$job_data->getJobData());
        }

        // blog
        $admin_blog = Admin_blog::orderBy('id', 'desc')->limit(3)->get();
        $arr_blog=[];
        foreach ($admin_blog as $data){
            $blog_data=new BlogData($data->id);
            array_push($arr_blog,$blog_data->getBlogData());
        }

        // testimonial
        $admin_testimonial = Testimonial::orderBy('id', 'desc')->get();
        $arr_testimonial=[];
        foreach ($admin_testimonial as $data){
            $testimonial_data=new TestimonialData($data->id);
            array_push($arr_testimonial,$testimonial_data->getTestimonialData());
        }

        // ads
        $adss=Ads::orderBy('id', 'desc')->limit(4)->get();
        foreach ($adss as $ads){
            $ads['photo_url']=ASC::$domain_url."upload/ads/".$ads->photo;
        }

        return view('user.index')->with([
            'admin_blogs'=>$arr_blog,
            'admin_testimonials'=>$arr_testimonial,
            'company_job'=>$arr_job,
            'adss'=>$adss
            ]);
    }

    public function company_register(){
        $country = Country::all();

        return view('user/company-register')->with([
            'countries'=>$country
        ]);
    }

    function get_country_list(){
        return Country::all();
    }




    function test(Request $request){
        return $request->get('aa');
    }
}
