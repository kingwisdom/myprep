<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tutor;
use App\Category;
use DB;
use Hash;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Tutor::with('category')->get();
        $tutors = Tutor::with('category')->orderBy('created_at', 'desc')->paginate(9);
        return view('admin.tutor.index', compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.tutor.create', compact('category'));
    }


    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'surname'=>'required|min:2|max:50',
            'firstname'=>'required|min:2|max:100',
            'email'=>'required',
            'password'=>'required|min:2|max:100',
            'city'=>'required|min:2|max:100',
            'course'=>'required|min:2|max:100',
            'state'=>'required|min:2|max:100',
            'phone'=>'required|min:2|max:100'
            
        ]);

        $image = $request->file('image');
        
        $new_name = rand(). '.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);


        $data = array(
        'surname' => $request->surname,
        'firstname' => $request->firstname,
        'category_id' => $request->category_id,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'courses' => $request->course,
        'phone' => $request->phone,
        'city' => $request->city,
        'state' => $request->state,
        'image' => $new_name
        );
        Tutor::create($data);
               
        return redirect(route('tutor.index'))->with('success','Tutor Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function make_tutor_inactive($tutor_id){
        DB::table('tutors')
            ->where('id',$tutor_id)
            ->update(['is_active' => 0]);
            return redirect()->back();
    }
    public function make_tutor_active($tutor_id){
        DB::table('tutors')
            ->where('id',$tutor_id)
            ->update(['is_active' => 1]);
            return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = $request->id;
        $active = $request->is_active;
        //$id = $request->id;
        DB::table('tutors')->where('id',$id)->update(['is_active'=> $active]);
        return redirect(route('tutor.index'))->with('success','Tutor Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tutor::findOrFail($id)->delete();
        return redirect(route('tutor.index'))->with('success', 'Tutor Created Successfully');
    }
}
