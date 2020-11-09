<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Http\Requests\SetCondition;
use Symfony\Component\Console\Input\Input;

class DbController extends Controller
{
    //

    function dbQuery(){
        return view('home');
        // return view('Add');
        // dd(\App\Job::find(1));
    }
    function Show(){
        return view('Show',['data'=>Job::all()]);
    }
    function AddRow(SetCondition $req){
        if(Job::where('job_title','=',$req->job_title)->exists()){
            $req->session()->flash('status','This Job title is Already Available in Database');
            return redirect('add');
        }
        else
        {
            $validation=$req->validated();
            $var=Job::create($validation);
            $req->session()->flash('status','Row is Added Successfully!');
            return view('Show',['data'=>Job::all()]); 
        }         
    }
    function Delete($id , Request $req){
        $var=Job::where('job_id',$id)->delete();
        $req->session()->flash('status','Row is Deleted Successfully!');
        return redirect('show');
    }

    function Edit($id){
        $data=Job::where('job_id',$id)->get();
        return view('Edit',['data'=>$data]);
        
    }
    function Update(Request $req,$id){
        Job::where('job_id',$id)
          ->update(['job_title'=>$req->job_title,'min_salary'=>$req->min_salary,'max_salary'=>$req->max_salary]);
        $req->session()->flash('status','Row is Updated Successfully!');
        return redirect('show');
    }
}
