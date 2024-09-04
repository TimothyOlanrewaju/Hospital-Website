<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Welcome;
use App\Models\Mainslider;

use App\Models\courosel;
use App\Models\Whyus;
use App\Models\Blog;
use App\Models\Appointment;
use App\Models\Serve;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Who_we_are;
use App\Models\TMC;
use App\Models\HISTORY;
use App\Models\program;
use App\Models\news_letter_sub;




use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function addview()
    {
        return view ('admin.add_welcome');
    }

    public function upload(Request $request)
    {
        




        $welcome=new Welcome;
        $image=$request->welcome;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->welcome->move('welcomeimage', $imagename);

        $welcome->image=$imagename;


        $welcome->title=$request->title;
        $welcome->message=$request->message;


        $welcome->save();
        return redirect()->back()->with ('message','Welcome added successfully');
    }

    public function show_welcome()
    {
        $show_welcome=Welcome::all();
        return view('admin.show_welcome',compact('show_welcome'));
    }

    public function delete_welcome($id)
    {
        $delete_welcome=Welcome::find($id);
        if ($delete_welcome) 
                {
                    // If the blog post exists, delete it
                    $delete_welcome->delete();
                    
                    // Redirect back with success message or perform any other actions
                    return redirect()->back()->with('message', 'Welcome message deleted successfully');
                }

        }

    public function update_welcome($id)
    {
        $update_welcome=Welcome::find($id);
        return view ('admin.update_welcome',compact('update_welcome'));

    }



            public function edit_welcome(Request $request,$id)
            {
                $post = Welcome::find($id);
                $post->title=$request->title;
                $post->message=$request->message;

                $image=$request->image;

                 if ($request->hasFile('image')) {
        
                $welcomename = time(). '.' .$image->getClientOriginalExtension();
                $image->move('welcomeimage', $welcomename);
                $post->image = $welcomename;

                $post->save();

                 return redirect()->back()->with('message','Welcome Updated successfully');
            }
            }


    //Coureosel
    public function addcouresol()
    {
        return view ('admin.add_couresol');
    }

   public function uploadcourosel(Request $request)
{
    $courosel = new Courosel;

    // Use $request->file instead of $request->courosel
    $image = $request->courosel;

    $couroselname = time() . '.' . $image->getClientOriginalExtension();

    // Use $request->file instead of $request->welcome
    $image->move('couroselimage', $couroselname);

    $courosel->image = $couroselname;
    $courosel->title = $request->title;
    $courosel->message = $request->message;

    $courosel->save();

    return redirect()->back()->with('message', 'Courosel added successfully');
}



// Mainslider
     public function addmainslider()
    {
        return view ('admin.add_mainslider');
    }

    public function uploadmainslider(Request $request)
    { $uploadmainslider = new Mainslider;

    $mainslider = $request->mainslider;
    $mainslidername = time() . '.' . $mainslider->getClientOriginalExtension();

    $request->mainslider->move('mainsliderimage', $mainslidername);

    $uploadmainslider->image = $mainslidername;
    $uploadmainslider->title = $request->title; // Fix: Use -> instead of -
    $uploadmainslider->message = $request->mainsliders; // Fix: Use -> instead of -

    // Save the uploaded slider data
    $uploadmainslider->save();

    // Add a response or redirect if needed
    return redirect()->back()->with('message', 'Main slider uploaded successfully');
 
    }

 public function show_slider()
    {
        $show_slider=Mainslider::all();
        return view ('admin.show_mainslider',compact('show_slider'));
    }


 public function delete_mainslider($id)
        {
            // Find the blog post with the given ID
            $delete_mainslider = Mainslider::find($id);

            // Check if the blog post exists
            if ($delete_mainslider) 
                {
                    // If the blog post exists, delete it
                    $delete_mainslider->delete();
                    
                    // Redirect back with success message or perform any other actions
                    return redirect()->back()->with('message', 'Main Slider deleted successfully');
                } 

            else 

                {
                    // If the blog post does not exist, redirect back with an error message
                    return redirect()->back()->with('error', 'Mainslider not found');
                 }
        }



            public function mainslider_update($id)
                {
                    $mainslider_update = Mainslider::find($id);

                    return view('admin.update_mainslider',compact ('mainslider_update'));
                }

            public function update_mainslider_page(Request $request,$id)
            {
                $post = Mainslider::find($id);
                $post->title=$request->title;
                $post->message=$request->message;

                $image=$request->image;

                 if ($request->hasFile('image')) {
        
                $blogname = time(). '.' .$image->getClientOriginalExtension();
                $image->move('mainsliderimage', $blogname);
                $post->image = $blogname;

                $post->save();

                 return redirect()->back()->with('message','Post Updated successfully');
            }
            }
// END_OF_MAINSLIDER



// FEATUREDSERVICES


    public function featuredservices()
    {
        return view('admin.add_featured_services');
    }

    public function whyus()
    {
        return view('admin.add_why_us');
    }

    public function uploadwhyus(Request $request)
    {
        $whyus=new whyus;
        $image=$request ->whyus;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->whyus->move('whyusimage',$imagename);
        $whyus->link=$imagename;

        $whyus->title=$request->title;
        $whyus->message=$request->message;

        $whyus->save();
        return redirect()->back()->with('message','Whyus added successfully'); 
    }


// Blog_POST
    public function blog()
    {
        return view('admin.blog_page');
    }


    public function upload_blog(Request $request)
    {
    
        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;



    $post = new Blog; // Assuming your model is named 'Blog' and follows Laravel's naming conventions

    $post->title = $request->input('title');
    $post->message = $request->input('message');
    $post->Post_status='active';
    $post->user_id =  $userid;
    $post->name = $name;
    $post->usertype = $usertype;

    $image = $request->file('image');

    if ($request->hasFile('image')) {
        
        $blogname = time(). '.' .$image->getClientOriginalExtension();
        $image->move('blogimage', $blogname);
        $post->image = $blogname;
    }

    $post->save();

    return redirect()->back()->with('message','Post Created successfully');
}



    public function show_blog()
            {
                $post=Blog::all();
                return view ('admin.show_blog',compact('post'));
            }

            public function delete_blog($id)
                {
                    // Find the blog post with the given ID
                    $post = Blog::find($id);

                    // Check if the blog post exists
                    if ($post) {
                        // If the blog post exists, delete it
                        $post->delete();
                        
                        // Redirect back with success message or perform any other actions
                        return redirect()->back()->with('message', 'Blog post deleted successfully');
                    } else {
                        // If the blog post does not exist, redirect back with an error message
                        return redirect()->back()->with('error', 'Blog post not found');
                     }
                    }

            public function update_blog($id)
            {
                $post = Blog::find($id);

                return view('admin.update_blog',compact ('post'));
            }

            public function update_blog_page(Request $request,$id)
            {
                $post = Blog::find($id);
                $post->title=$request->title;
                $post->message=$request->message;

                $image=$request->image;

                 if ($request->hasFile('image')) {
        
                $blogname = time(). '.' .$image->getClientOriginalExtension();
                $image->move('blogimage', $blogname);
                $post->image = $blogname;

                $post->save();

                 return redirect()->back()->with('message','Post Updated successfully');
            }
            }


            public function show_appointments()
            {
                $data=appointment::all();
                return view ('admin.show_appointments',compact('data'));
            }

            public function approved($id)
            {
                $data=appointment::find($id);
                $data->status='approved';
                $data->save();
                return redirect()->back();
            }

            public function cancel($id)
            {
                $data=appointment::find($id);
                 $data->status='Canceled';
                $data->save();
                return redirect()->back();
            }


            public function add_service_list()
            {

                return view('admin.add_services_list');
            }



          public function serve_list(Request $request)
                {
                    // Service creation logic
                    $user = Auth()->user();
                    $name = $user->name;

                    $post = new Serve;
                    $post->name = $request->Service_list;
                    $post->description = $request->Service_detail;
                    $post->service_created_by = $name;
                    $post->category_id = $request->department;
                    $post->sevice_status = 'active';
                    $post->save();

                    // Fetch data after service creation
                    $categories = category::all();

                    // Return the view with the fetched data
                    return view('admin.service_page', compact('categories'))
                        ->with('message', 'Service created successfully');
                }



            // public function ok ()
            // {

            //     $newservice=Serve::with('categories')->get();
            //     $newcategories=Category::with('serves')->get();
            //     return view ('admin.serve_list',compact('newservice','newcategories'));
            // }

             public function category_add_service(Request $request)
            {
                       
                
                $post=new Category;
                $post->name=$request->name;
                $post->save();
                return redirect()->back()->with('message','Category created successfully');

            }

            public function service_page()
            {
                return view ('admin.service_page');
            }


            public function show_services()
            {
                $service=Serve::all();
                return view('admin.show_services',compact('service'));
            }


            public function delete_service($id)
            {
                $ServiceDelete=Serve::find($id);

                if ($ServiceDelete) {
                // If the blog post exists, delete it
                $ServiceDelete->delete();
                
                // Redirect back with success message or perform any other actions
                return redirect()->back()->with('message', 'Service deleted successfully');
            } 
            else {
                // If the blog post does not exist, redirect back with an error message
                return redirect()->back()->with('error', 'Service not found');
             }
                 
        }

        public function edit_services($id)
        {
                $EditService=Serve::find($id);
                return view ('admin.edit_service',compact('EditService'));
 
        }

        public function update_post(Request $request,$id)
        {
            $update=Serve::find($id);
            $update->name=$request->Service_list;
            $update->description=$request->Service_detail;
            $update->category_id=$request->department;

            $update->save();
            return redirect()->back()->with('message','Service updated successfully');

        }

        public function ServiceHome()
        {
            return view ('user.service_page');
        }

        public function new_category()
                {   
                    return view('admin.new_category');
                }

        public function who_we_are()
        {
            $who_we_are=Whyus::all();
        return view ('admin.who_we_are',compact('who_we_are'));
        }

        public function delete_who_we_are($id)
        {
             $Who_we_are_Delete=Whyus::find($id);

                if ($Who_we_are_Delete) 
                {
                // If the blog post exists, delete it
                $Who_we_are_Delete->delete();
                
                // Redirect back with success message or perform any other actions
                return redirect()->back()->with('message', 'Deleted successfully');
            }
        }



         public function update_who($id)
        {
            $data=Whyus::find($id);
            return view('admin.update_who',compact('data'));

        }


        public function update_who_page(Request $request,$id)
        {
            $update=Whyus::find($id);
            $update->title=$request->title;
            $update->message=$request->message;

            $update->save();
            return redirect()->back()->with('message','Who We Are updated successfully');
        }

        public function featured_services()
            {
                $featuredservices=Courosel::all();
                return view('admin.featured_services',compact('featuredservices'));
            }

        public function delete_featured($id)
        {
            $featured=Courosel::find($id);

                if ($featured) 
                {
                // If the blog post exists, delete it
                $featured->delete();
                
                // Redirect back with success message or perform any other actions
                return redirect()->back()->with('message', 'Service deleted successfully');
                }
        }

        public function update_featured($id)
        {
            $data=Courosel::find($id);
            return view('admin.update_featured_page',compact('data'));
        }

        public function featured_page_update(Request $request,$id)
        {
            $update=Courosel::find($id);
            $update->title=$request->title;
            $update->message=$request->message;

             $image=$request->image;

                 if ($request->hasFile('image')) {
        
                $couroselname = time(). '.' .$image->getClientOriginalExtension();
                $image->move('couroselimage', $couroselname);
                $update->image = $couroselname;

                $update->save();

                 return redirect()->back()->with('message','Post Updated successfully');
            }
        }

        public function contact_admin()
        {
            $data=Contact::all();
            return view('admin.contact_admin',compact('data'));
        }



        //About Us
        public function about_us()
        {
            return view ('admin.about_us');
        }


       public function add_about_us(Request $request)
            {
                $post = new Who_we_are;

                // Upload and save banner image
                $banner_image = $request->file('banner_image');
                $banner_image_name = time().'.'.$banner_image->getClientOriginalExtension();
                $banner_image->move('who_we_are_banner_image', $banner_image_name);
                $post->banner_image = $banner_image_name; 

                // Save other form data
                $post->who_we_are_title = $request->who_we_are_title; 
                $post->who_we_are_message = $request->who_we_are_message;       
                $post->vision = $request->vision;       
                $post->mission = $request->mission;  

                // Upload and save who we are image
                $who_we_are_image = $request->file('who_we_are_image');
                $who_image_name = time().'.'.$who_we_are_image->getClientOriginalExtension();
                $who_we_are_image->move('who_we_are_image', $who_image_name);
                $post->who_we_are_image = $who_image_name; 

                $post->save();

                // Redirect back with a success message
                return redirect()->back()->with('message', 'About Us information added successfully.');
            }


//Show Who We are

        public function detail_who_we_are()
                {
                    $detail_who_we_are=Who_we_are::all();
                    return view('admin.show_detail_who_we_are',compact('detail_who_we_are'));
                }

        public function delete_who($id)
                {
                      $detail_who=Who_we_are::find($id);

                    if ($detail_who) 
                        {
                            // If the blog post exists, delete it
                            $detail_who->delete();
                            
                            // Redirect back with success message or perform any other actions
                            return redirect()->back()->with('message', 'Service deleted successfully');
                        }
                }


        public function update_who_we($id)
                {
                    $data=Who_we_are::find($id);
                    return view('admin.update_who_we',compact('data'));
                }


       public function editWhoWeArePage(Request $request, $id)
{
    // Find the 'Who_we_are' record by ID
    $updateEditWhoWeArePage = who_we_are::find($id);

    // If record exists
    if ($updateEditWhoWeArePage) {
        // Check if a new banner image is uploaded
        if ($request->hasFile('who_we_are_banner_image')) {
            $bannerImage = $request->file('who_we_are_banner_image');
            $bannerImageName = time() . '.' . $bannerImage->getClientOriginalExtension();
            $bannerImage->move('who_we_are_banner_image', $bannerImageName);
            $updateEditWhoWeArePage->banner_image = $bannerImageName;
        }

        // Update other fields
        $updateEditWhoWeArePage->who_we_are_title = $request->who_we_are_title;
        $updateEditWhoWeArePage->who_we_are_message = $request->who_we_are_message;
        $updateEditWhoWeArePage->vision = $request->vision;
        $updateEditWhoWeArePage->mission = $request->mission;

        // Check if a new "who we are" image is uploaded
        if ($request->hasFile('who_we_are_image')) {
            $whoWeAreImage = $request->file('who_we_are_image');
            $whoWeAreImageName = time() . '.' . $whoWeAreImage->getClientOriginalExtension();
            $whoWeAreImage->move('who_we_are_image', $whoWeAreImageName);
            $updateEditWhoWeArePage->who_we_are_image = $whoWeAreImageName;
        }

        // Save the changes
        $updateEditWhoWeArePage->save();

        // Redirect back with success message
        return redirect()->back()->with('message', 'Who we are Updated successfully');
    } 
    else {
        // Redirect back with error message if record not found
        return redirect()->back()->with('error', 'Record not found');
    }
}

public function AddTmcMembers()
        {
            return view ('admin.add_tmc_members');
        }

public function UploadTmc(Request $request)
        {
            $TMC=new TMC;
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('TmcImage',$imagename);
            $TMC->image=$imagename;
            $TMC->name=$request->name;
            $TMC->designation=$request->designation;
            $TMC->save();
            return redirect()->back()->with('message','TMC member added successfully');

        }

public function show_tmc()
        {
        
            $show_tmc=TMC::all();
            return view('admin.show_tmc',compact('show_tmc'));
            

        }
    public function delete_tmc($id)
        {
            $detail_tmc=TMC::find($id);

                if ($detail_tmc) 
                        {
                            // If the blog post exists, delete it
                            $detail_tmc->delete();
                            
                            // Redirect back with success message or perform any other actions
                            return redirect()->back()->with('message', 'TMC MEMBER deleted successfully');
                        }
        }


    public function edit_tmc($id)
        {
            $post=TMC::find($id);
            return view('admin.edit_tmc_members',compact('post'));

        }

    public function update_tmc(Request $request,$id)
        {
            $data=TMC::find($id);
            $data->name=$request->name;
            $data->designation=$request->designation;

            $image=$request->image;
                if ($image) 
                {
                    $imagename = time(). '.' .$image->getClientOriginalExtension();
                    $image->move('TmcImage', $imagename);
                    $data->image = $imagename;
                }

            $data->save();

            return redirect()->back()->with ('message','TMC MEMBER UPDATED SUCCESSFULLY');
        }


        //Our History

    public function our_history()
        {
            return view('admin.our_history');
        }

    public function upload_history(Request $request)
        {
            $history=new HISTORY;
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('HistoryImage',$imagename);
            $history->image=$imagename;
            $history->Title=$request->title;
            $history->founding_story=$request->founding_story;
            $history->journey_So_far=$request->journey_So_far;
            $history->achievements=$request->achievements;

            $history->save();
            return redirect()->back()->with('message','History added successfully');
        }

    public function show_history()
        {
            $show_history=HISTORY::all();
            return view('admin.show_history',compact('show_history'));
        }

    public function delete_history($id)
        {
            $delete_history=HISTORY::find($id);

                if ($delete_history) 
                        {
                            // If the blog post exists, delete it
                            $delete_history->delete();
                            
                            // Redirect back with success message or perform any other actions
                            return redirect()->back()->with('message', 'History deleted successfully');
                        }
        }


    public function update_history($id)
            {
                $update=HISTORY::find($id);
                return view('admin.update_history',compact('update'));
            }

     public function edit_history(Request $request,$id)
                {
                    $data=HISTORY::find($id);
                    $data->Title=$request->title;
                    $data->founding_story=$request->founding_story;
                    $data->journey_So_far=$request->journey_So_far;
                    $data->achievements=$request->achievements;
                    $data->image=$request->image;
                    $image=$request->image;
                        if ($image) 
                        {
                            $imagename = time(). '.' .$image->getClientOriginalExtension();
                            $image->move('HistoryImage', $imagename);
                            $data->image = $imagename;
                        }

                    $data->save();

                    return redirect()->back()->with ('message','OUR HISTORY UPDATED SUCCESSFULLY');
                }



   public function program()
   {
    return view ('admin.program');
   }

   public function program_form (Request $request)
    {
    
        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;



    $post = new program; // Assuming your model is named 'Blog' and follows Laravel's naming conventions

    $post->title = $request->input('title');
    $post->message = $request->input('message');
    $post->user_id =  $userid;
    $post->name = $name;
    $post->usertype = $usertype;

    $image = $request->file('image');

        if ($request->hasFile('image')) 
        {
            
            $progname = time(). '.' .$image->getClientOriginalExtension();
            $image->move('progimage', $progname);
            $post->image = $progname;
        }

        $post->save();

        return redirect()->back()->with('message','PROGRAM CREATED SUCCESSFULLY');
    }



    public function show_prog()
            {
                $post=Program::all();
                return view ('admin.show_prog',compact('post'));
            }

    public function delete_prog($id)
            {
                $ProgDelete=Program::find($id);

                if ($ProgDelete) {
                // If the blog post exists, delete it
                $ProgDelete->delete();
                
                // Redirect back with success message or perform any other actions
                return redirect()->back()->with('message', 'Program deleted successfully');
            } 
            else {
                // If the blog post does not exist, redirect back with an error message
                return redirect()->back()->with('error', 'Program not found');
             }
                 
        }

    public function update_prog($id)
            {
                $update=Program::find($id);
                return view('admin.update_prog',compact('update'));
            }

 public function edit_prog(Request $request,$id)
                {
                    $data=Program::find($id);
                    $data->Title=$request->title;
                    $data->message=$request->message;
                    $data->image=$request->image;
                    $image=$request->image;
                        if ($image) 
                        {
                            $imagename = time(). '.' .$image->getClientOriginalExtension();
                            $image->move('progimage', $imagename);
                            $data->image = $imagename;
                        }

                    $data->save();

                    return redirect()->back()->with ('message','PROGRAM UPDATED SUCCESSFULLY');
                }


public function email_list()
            {
                $email_list=news_letter_sub::all();
                return view('admin.email_list',compact('email_list'));
            }

 public function email_approved($id)
            {
                $data=news_letter_sub::find($id);
                $data->status='approved';
                $data->save();
                return redirect()->back();
            }

            public function email_cancel($id)
            {
                $data=news_letter_sub::find($id);
                 $data->status='Canceled';
                $data->save();
                return redirect()->back();
            }
            public function email_delete($id)
            {
                 $emailDelete=news_letter_sub::find($id);

                if ($emailDelete) {
                // If the blog post exists, delete it
                $emailDelete->delete();
                
                // Redirect back with success message or perform any other actions
                return redirect()->back()->with('message', 'email deleted successfully');
            }

        }

}