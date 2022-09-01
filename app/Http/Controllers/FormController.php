<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FormController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function hello($id)
    {
        $data="".$id;
        return view('service',compact('data'));
    }
    function formroute(request $request)
    {
        $id=$request['resid'];
       $name=$request['name'];
       $email=$request['email'];
       $house=$request['house'];
       $city=$request['city'];
       $state=$request['state'];
       $pincode=$request['pincode'];
       $social1=$request['social1'];
       $social2=$request['social2'];
       $ps1=$request['pskill1'];
       $ps2=$request['pskill2'];
       $prs1=$request['prskill1'];
       $prs2=$request['prskill2'];
       $mobile=$request['mobile'];
       $website=$request['website'];
       $GC=$request['GC'];
       $GI=$request['Gins'];
       $Gy=$request['GYear'];
       $Gper=$request['Gper'];
       $PGC=$request['PGC'];
       $PGI=$request['PGIns'];
       $PGy=$request['PGYear'];
       $PGper=$request['PGPer'];
       $exp=$request['Exp'];
       $viw='resume'.$request['resid'];

       return view($viw,compact('name','email','house','city','state','pincode','social1','social2','ps1','ps2','prs1','prs2','mobile','website','GC','GI','Gy','Gper','PGC','PGI','PGy','PGper','exp'));
        
           
         
          
         
    }
    public function createPDF() {
        // retreive all records from db
        $data = Employee::all();
        // share data to view
        view()->share('employee',$data);
        $pdf = PDF::loadView('pdf_view', $data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
}
