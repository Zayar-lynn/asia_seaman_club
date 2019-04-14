<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\CustomClass\TestimonialData;
use App\CustomClass\ASC;

class TestimonialController extends Controller
{
    public function insert(Request $request){
    	$name = $request->get('name');
    	$description = $request->get('description');
        $photo = $request->file('photo');
        $photo_name = uniqid().'_'.$photo->getClientOriginalName();
        $photo->move(public_path('upload/testimonial'),$photo_name);

        Testimonial::create([
            'photo'=>$photo_name,
            'name'=>$name,
            'description'=>$description
        ]);
    }

    public function get_all_testimonial(){
        $testimonials=Testimonial::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($testimonials as $data){
            $testimonial_data=new TestimonialData($data->id);
            array_push($arr,$testimonial_data->getTestimonialData());
        }
         return json_encode($arr);
     }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $image_path=public_path().'/upload/testimonial/'.$testimonial->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $testimonial->delete();
    }

    public function edit($id)
    {
        $data = Testimonial::find($id);
        $data['photo_url']=ASC::$domain_url."upload/testimonial/".$data->photo;
        return json_encode($data);
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $description = $request->get('description');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/testimonial/'),$photo_name);
            $testimonial = Testimonial::find($id);
            $image_path=public_path().'/upload/testimonial/'.$testimonial->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Testimonial::findOrFail($id)->update([
                'photo'=>$photo_name,
                'name'=>$name,
                'description'=>$description
            ]);
        }else {
            Testimonial::findOrFail($id)->update([
                'name'=>$name,
                'description'=>$description
            ]);
        }
    }
}
