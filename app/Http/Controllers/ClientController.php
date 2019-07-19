<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Tutor;
use App\Category;
use App\Learner;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $tutors = Tutor::with('category')->orderBy('created_at', 'desc')->where('is_active','1')->paginate(9);
        return view('front.index', compact('tutors', 'category'));
    }

    public function tutor_details($id) {
        $tutors = Tutor::findOrFail($id);
        return view('front.tutor-detail', compact('tutors'));
    }

    public function be_a_tutor(Request $request) {
        $tutor = array(
            'surname'=>'required|min:2|max:50',
            'firstname'=>'required|min:2|max:100',
            'email'=>'required',
            'password'=>'required|min:2|max:100',
            'city'=>'required|min:2|max:100',
            'courses'=>'required|min:2|max:100',
            'state'=>'required|min:2|max:100',
            'phone'=>'required|min:2|max:100'
            
        );

        $error = Validator::make($request->all(), $tutor);
        if($error->fails()){
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('image');
        
        $new_name = rand(). '.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);


        $form_data = array(
        'surname' => $request->surname,
        'firstname' => $request->firstname,
        'category_id' => $request->category_id,
        'email' => $request->email,
        'password' => $request->password,
        'courses' => $request->courses,
        'phone' => $request->phone,
        'city' => $request->city,
        'state' => $request->state,
        'image' => $new_name
        );
        Tutor::create($form_data);
        return redirect()->back()->with('success','Tutor Added Successfully');
        //return redirect()->json(['success'=> 'Thanks for registering with us']);
        
    }

    public function get_tutor(Request $request) {
        $tutor = array(
            'name'=>'required|min:2|max:50',
            'city'=>'required|min:2|max:100',
            //'course'=>'required|min:2|max:100',
            'state'=>'required|min:2|max:100',
            'phone'=>'required|min:2|max:100'
            
        );

        $error = Validator::make($request->all(), $tutor);
        if($error->fails()){
            return response()->json(['errors' => $error->errors()->all()]);
        }

        
        $form_data = array(
        'name' => $request->name,
        'tutorname' => $request->tutorname,
        'tutor_id' => $request->tutor_id,
        'phone' => $request->phone,
        'address' => $request->address,
        //'courses' => $request->courses,
        'city' => $request->city,
        'state' => $request->state,
        'comment' => $request->comment
        
        );
        Learner::create($form_data);
        return redirect()->back()->with('success','Tutor Will Contact You Soon!');
        //return redirect()->json(['success'=> 'Thanks for registering with us']);
        
        //$tutor = $request->all();
        //return response()->json(['success' =>'Successfull']);
    }

    public function make_active(){
        
    }
}
