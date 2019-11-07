<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function index()
    {
        $students = $this->student->all();
        return view('student.list', compact('students'));
    }

    public function formAdd()
    {
        return view('student.formadd');
    }

    public function add(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->theme = $request->theme;
        $student->title = $request->title;
        $student->present = $request->present;
        if(!$request->hasFile('image')){
            $student->image = $request->image;
        } else {
            $image = $request->file('image');
            $path = $image->store('image','public');
            $student->image = $path;
        }
        $student->save();
        return redirect()->route('student.index');
    }

    public function delete($id)
    {
        $student = $this->student->findOrFail($id);
        $student->delete($id);
      return redirect()->route('student.index');
    }
    public function edit($id){
        $student = $this->student->findOrFail($id);
        return view('student.formEdit',compact('student'));
    }

   public function update(Request $request , $id){
        $student = $this->student->findOrFail($id);
        $student->name = $request->name;
        $student->theme= $request->theme;
        $student->title = $request->title;
       $student->present = $request->present;
       if($request->image){
           Storage::disk('public')->delete("$student->image");
            $image = $request->file('image');
            $path = $image->store('image','public');
            $student->image = $path;
       }
       $student->save();
       return redirect()->route('student.index');
   }

}
