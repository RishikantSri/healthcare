<?php

namespace App\Http\Controllers;

use App\Models\Appointmentlist;
use App\Models\Contactlist;
use Illuminate\Http\Request;
use App\Models\Generalsetting;
use App\Models\Sectionhideshow;
use App\Models\Generalcontent;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Galleryimage;
use App\Models\Settingother;
use App\Models\Subscription;
use App\Models\Testimonial;

class GeneralsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generalsettings = Generalsetting::find(1);
        $hideshow = Sectionhideshow::all();
        $contentwhyus = Generalcontent::where('show', '=',1)->where('contenttype','=','whyus')->get();
        $contentaboutus = Generalcontent::where('show', '=',1)->where('contenttype','=','aboutus')->get();
        $contentservices = Generalcontent::where('show', '=',1)->where('contenttype','=','services')->get();
        $contentfaq = Generalcontent::where('show', '=',1)->where('contenttype','=','faq')->get();
        $departments = Department::where('show', '=',1)->get();
        $doctors = Doctor::where('show', '=',1)->get();
        $settingother = Settingother::find(1);

        $testimonials = Testimonial::all();
        $galleryimages = Galleryimage::where('show', '=',1)->get();

        
      //  dd($generalcontent);
        return view('frontend.layouts.app',compact('generalsettings',
                                                    'hideshow',
                                                    'contentwhyus',
                                                    'contentaboutus',
                                                    'contentservices',
                                                    'contentfaq',
                                                    'departments',
                                                    'doctors',
                                                    'settingother',
                                                    'testimonials',
                                                    'galleryimages') );
    }


    
    public function AppointmentStore(Request $request) 
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => [ 'string','max:255', ],
            'email' => ['string', 'max:100'],
            'appointment_date' => [ 'date'],
            'department' => [ 'string', 'max:1000'],
            'doctor' => [ 'string', 'max:1000'],
            'message' => [ 'string', 'max:1000'],
          
           
        ]);
      
        
        $appointmentlist = Appointmentlist::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'appointment_date' => $request->appointment_date ?? null,
            'department' => $request->department ?? null,
            'doctor' => $request->doctor ?? null,
            'message' => $request->message ?? 0,
         
        ]);

        if($appointmentlist)
        {
             //  Email :sending on registration
 
        // email data
        // $email_data = array(
        //     'name' =>  $request->name,
        //     'email' =>$request->email,
        // );

        // // send email with the template
        // Mail::send('frontend.layouts.email', $email_data, function ($message) use ($email_data) {
        //     $message->to($email_data['email'], $email_data['name'])
        //         ->subject('Welcome to NGO')
        //         ->from('NGO@rishikantsri.tech', 'NGO: It Helps');
        // });
            
            
          //  return redirect()->route('home')->with('success', 'Message sent,  successfully.');
           return redirect()->to(url()->previous() . '#appointment')->with('success', 'Message sent,  successfully.');
            // return back()->with('success','Product successfully added.');


        }
           
      
        return redirect()->to(url()->previous() . '#appointment')->with('error', 'Message not sent.');
       
    }

    public function ContactStore(Request $request) 
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'subject' => [ 'string','max:255', ],
            'email' => ['string', 'max:100'],
            'message' => [ 'string', 'max:1000'],
          
           
        ]);
      
        
        $contactlist = Contactlist::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message ?? 0,
         
        ]);

        if($contactlist)
        {
             //  Email :sending on registration
 
        // email data
        // $email_data = array(
        //     'name' =>  $request->name,
        //     'email' =>$request->email,
        // );

        // // send email with the template
        // Mail::send('frontend.layouts.email', $email_data, function ($message) use ($email_data) {
        //     $message->to($email_data['email'], $email_data['name'])
        //         ->subject('Welcome to NGO')
        //         ->from('NGO@rishikantsri.tech', 'NGO: It Helps');
        // });
            
            
            // return redirect()->route('home')->with('message', 'Message sent,  successfully.');
            return redirect()->to(url()->previous() . '#contact')->with('success_contact', 'Message sent,  successfully.');    

        }
           
      

        return redirect()->to(url()->previous() . '#contact')->with('error_contact', 'Message not sent,  successfully.');
    }


    public function SubscriptionStore(Request $request) 
    {
        $validated = $request->validate([
            'email' => ['email',  'max:100' , 'unique:subscriptions'],
        ]);
      
        
        $subscription = Subscription::create([
            'email' => $request->email,
        ]);

        if($subscription)
        {
             //  Email :sending on registration
 
        // email data
        // $email_data = array(
        //     'name' =>  $request->name,
        //     'email' =>$request->email,
        // );

        // // send email with the template
        // Mail::send('frontend.layouts.email', $email_data, function ($message) use ($email_data) {
        //     $message->to($email_data['email'], $email_data['name'])
        //         ->subject('Welcome to NGO')
        //         ->from('NGO@rishikantsri.tech', 'NGO: It Helps');
        // });
            
            
            // return redirect()->route('home')->with('message', 'Message sent,  successfully.');
            return redirect()->to(url()->previous() . '#footer')->with('success_subscribe', 'Subscribed,  successfully.');    

        }
           
      
        return redirect()->to(url()->previous() . '#footer')->with('error_subscribe', 'error occured, Try again!.'); 
       

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
