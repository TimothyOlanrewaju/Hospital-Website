<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin ">
              <div class="card">
                 <div class="card-body ml-5">
                   


<div class="row-md-12">

  
       @if(session()->has('message'))
       <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" ariel-hidden="true">X</button>
          {{session()->get('message')}}
       </div>
       @endif

        <form action="{{url('edit_who_we_are_page',$data->id)}}" method="POST"  enctype="multipart/form-data">

         @csrf
           <center> <h1><b>Update Featured Services</h1></b></center>

              <div class="" >
              <label >Old Banner Image</label>
              <img src="/who_we_are_banner_image/{{$data->banner_image}}" height="150px" width="150px">
            </div><br><br>

            <div class="mb-3">
              <label for="formFile" class="form-label">Add New Banner Image</label>
              <input class="form-control" type="file" name="who_we_are_banner_image" id="formFile">
            </div>

    
<div class="col-mb-6">
        <label for="exampleFormControlInput1" class="form-label">Who We Are</label>
        <input type="text" name="who_we_are_title" class="form-control" id="exampleFormControlInput1" placeholder="enter a title" value="{{$data->who_we_are_title}}" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" name="who_we_are_message"   id="exampleFormControlTextarea1" rows="3" required>{{$data->who_we_are_message}}</textarea>


    </div>

     <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Vision</label>
        <textarea class="form-control" name="vision" value="" id="exampleFormControlTextarea1" rows="3" required>{{$data->vision}}</textarea>
    </div>

     <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mission</label>
        <textarea class="form-control" name="mission" value="" id="exampleFormControlTextarea1" rows="3" required>{{$data->mission}}</textarea>
    </div>

     <div class="mb-3">
        <h1>Edit who we are Image</h1>
    </div>
            

             <div class="" >
              <label >Old Image</label>
              <img src="/who_we_are_image/{{$data->who_we_are_image}}" height="150px" width="150px">
            </div><br><br>

            <div class="mb-3">
              <label for="formFile" class="form-label">Add New Image</label>
              <input class="form-control" type="file" name="who_we_are_image" id="formFile">
            </div>

           
                             <button class="btn btn-success" value="Update"  style="width: 120px;">Update</button>      
            </div>
                        

                     </form>
                     </div>
                 
                </div>
              </div>
            </div>
           
          </div>
