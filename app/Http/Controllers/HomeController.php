<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\jd;

class HomeController extends Controller
{
    public function index()
    {
       
    	return view('index');
    }


     public function about()
    {
       
    	return view('about');
    }


     public function academy()
    {
       
    	return view('academy');
    }


     public function business()
    {
       
    	return view('business');
    }

     public function case1()
    {
       
    	return view('case');
    }
    
     public function consult()
    {
       
    	return view('consulting');
    }
    
     public function contact()
    {
       
    	return view('contact');
    }
    
     public function cr()
    {
       
    	return view('cr');
    }
    
     public function employee()
    {
       
    	return view('employee');
    }
    
     public function human()
    {
       
    	return view('human');
    }
    
     public function job()
    {
       
    	return view('job');
    }
    
     public function marine()
    {
       
    	return view('marine');
    }
    
     public function services()
    {
       
    	return view('services');
    }

    public function team()
    {
       
    	return view('team');
    }

    public function value()
    {
       
    	return view('value');
    }

 public function success()
    {
       
        return view('success');
    }

public function success1()
    {
       
        return view('success1');
    }

    public function success2()
    {
       
        return view('success2');
    }



     public function job1()
    {
        $roles= jd::all();
       return view('job1',compact('roles'));
    }

    public function Jobadmin(Request $request, $id)
    {
        $jobadmins =jd::find($id);
       return view('jobadmin',compact('jobadmins'));
    }

    public function job11()
    {
       
        return view('job11');
    }
    public function job2()
    {
       
        return view('job2');
    }
    public function job3()
    {
       
        return view('job3');
    }


    public function storecontact(Request $request)
    {
       $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
             'phone'=>'required|numeric',
            'message'=>'required'
            ]);
            

      Mail::send('mail.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
             'phone' => $request->get('phone'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('donotreply@mml.com.ng');
        $message->to('info@mml.com.ng', 'Admin')->subject('MML Feedback');
    });

  return Redirect()->route('contact')->with('message', 'Thanks for contacting us! Your message has been received. We will contact you shortly');
        
    }

    public function storejob3(Request $request)
    {
       $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
             'phone'=>'required|numeric',
             'country'=>'required',
             'education'=>'required',
             'role'=>'required',
              'employer'=>'required',
             'years'=>'required|numeric',
             'salary'=>'required',
             'resume'=>'required|mimes:pdf,docx,doc|max:5000'
              
            ]);
            

$attach = $request->file('resume');
$rrole = $request->get('role');

      Mail::send('mail.job3',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
             'phone' => $request->get('phone'),
             'country' => $request->get('country'),
             'education' => $request->get('education'),
             'role' => $request->get('role'),
             'employer' => $request->get('employer'),
             'years' => $request->get('years'),
             'salary' => $request->get('salary'),
             'resume' => $request->get('resume')
            
        ), function($message) use ($attach, $rrole)
    {
        $message->from('donotreply@mml.com.ng.com');
        $message->to('recruitment@mml.com.ng', 'Admin')->subject('MML Job Application for'.'   '. $rrole);
        $message->attach($attach->getRealPath(), [ 'as' => $attach->getClientOriginalName(), 'mime' => $attach->getMimeType() ]);
    });

  return Redirect()->route('job3')->with('message', 'Thank you for your application. If you meet the requirements for this role or any other roles we are recruiting for, one of our recruiters would be in touch with next steps.');
        
    }


}
