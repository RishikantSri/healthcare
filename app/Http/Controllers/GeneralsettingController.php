<?php

namespace App\Http\Controllers;

use App\Models\Appointmentlist;
use Illuminate\Http\Request;
use App\Models\Generalsetting;
use App\Models\Sectionhideshow;
use App\Models\Generalcontent;
use App\Models\Department;
use App\Models\Doctor;

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


        //$model = User::where('votes', '>', 100)->firstOrFail();
      //  dd($generalcontent);
        return view('frontend.layouts.app',compact('generalsettings',
                                                    'hideshow',
                                                    'contentwhyus',
                                                    'contentaboutus',
                                                    'contentservices',
                                                    'contentfaq',
                                                    'departments',
                                                    'doctors') );
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
            
            
            return redirect()->route('home')->with('message', 'Message sent,  successfully.');


        }
           
      

        return redirect()->route('home')->with('message', 'Message Not sent');
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
