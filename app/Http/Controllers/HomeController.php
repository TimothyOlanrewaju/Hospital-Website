<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Welcome;
use App\Models\Blog;
use App\Models\Mainslider;

use App\Models\Appointment;

use App\Models\Serve;
use App\Models\Category;

use App\Models\Whyus;
use App\Models\Courosel;

use App\Models\Contact;
use App\Models\Who_we_are;
use App\Models\TMC;
use App\Models\HISTORY;
use App\Models\Program;





class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) 
        {
          if (Auth::user()->usertype=='0') 
            {
                        $welcome=Welcome::all();
                        $posts = Blog::all();
                        $mainslider=Mainslider::all();
                        $who_we_are=Whyus::all();

                        $featured_service=Courosel::all();

                return view ('user.home',compact('welcome','posts','mainslider','who_we_are','featured_service'));
            } 

            else
            {
                return view ('admin.home');
            } 
        }
        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        if (Auth::id()) 
        {
            return redirect('home');
        }

        else
        {

        $welcome=Welcome::all();
        $posts=Blog::all();
        $mainslider=Mainslider::all();
        $who_we_are=Whyus::all();
        $featured_service=Courosel::all();


        return view('user.home',compact('welcome','posts','mainslider','who_we_are','featured_service'));
        }
    }

    public function post_details($id)
    {
        Blog::find($id)->increment('views');

        $post=Blog::find($id);
        return view('user.post_details',compact('post'));
    }



    public function book_appointment(Request $request)
    {
         $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'department' => 'required|string',
            'date' => 'required|date',
            'message' => 'nullable|string',
        ]);


        $data=new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->department=$request->department;
        $data->date=$request->date;
        $data->message=$request->message;
        $data->status='In progress';

        if (Auth::id()) 
        {
            $data->user_id=Auth::user()->id;

        }
        $data->save();
        return redirect()->back()->with('message','Appointment Request Successfull.  will Contact You Shortly');
 
    }
    public function my_appointment()
    { 
        if (Auth::id()) 
            {
                $userid=Auth::user()->id;

                $appoint=appointment::where('user_id',$userid)->get();
                return view('user.my_appointment',compact('appoint'));
            }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function service()
    {
        $services=Serve::all();

        return view('user.home',compact('services'));

    }


public function service_view($id)
{
    Post::find($id)->increment('views');
    $service_view = Serve::find($id);

    if ($service_view === null) {
        // Handle the case where the service is not found
        return abort(404); // or redirect to another page, or display an error message
    }

    return view('user.service_view', compact('service_view'));
}


    public function contact()
    {
        return view('user.contact');
    }

    public function contact_us(Request $request)
        {
                    $request->validate([
                    'name' => 'required|string',
                    'email' => 'required|email',
                    'subject' => 'required|string',
                    'message' => 'required|string',
                ]);


                $data=new contact;
                $data->name=$request->name;
                $data->email=$request->email;
                $data->subject=$request->subject;
                $data->message=$request->message;

                // if (Auth::id()) 
                // {
                //     $data->user_id=Auth::user()->id;

                // }

                $data->save();
                return redirect()->back()->with('message',' Your message was successfully delivered.  will Contact You Shortly');

        }

    public function WhoWeAre()
        {
            $WhoWeAre=Who_we_are::all();
            return view('user.WhoWeAre',compact('WhoWeAre'));

        }

    public function tmc_members()
        {
            $tmc=TMC::all();
            return view('user.tmc_members',compact('tmc'));
        }

    public function our_history()
    {
        $history=HISTORY::all();
        return view('user.our_history',compact('history'));
    }


 public function programs()
    {
        $update=Program::all();
        return view('user.programs',compact('update'));
    }
    
    public function program_details($id)
    {
        $post=Program::find($id);
        return view('user.program_details',compact('post'));
    }
//Homeblog
    public function latest_news()
    {

        $latest_news=Blog::all();
        return view('user.latest_news',compact('latest_news'));
    }


    public function welcome_details()
    {
        $welcome_details=Welcome::all();
        return view('user.welcome_details',compact('welcome_details'));
    }


    public function admin()
    {
        // Retrieve total view count from your storage mechanism
        $totalViews = View::count(); // Assuming 'views' table exists and tracks views

        // Store total view count in the session
        Session::put('totalViews', $totalViews);

        // Redirect to the admin dashboard
return redirect()->route('admin.home')->with('totalViews', $totalViews);
    }

    public function career()
    {
        return view('user.career');
    }

    public function sop()
    {
        return view('user.sop');
    }

    public function our_services()
    {
        return view('user.service');
    }
}
