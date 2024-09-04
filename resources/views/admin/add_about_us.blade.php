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
                   

         @if(session()->has('message'))
            <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert" ariel-hidden='true'>
                  

                  x
               </button>
               {{session()->get('message')}}
            </div>


      @endif
<div class="row-md-12">

       <form action="{{ url('add_about_us') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <center><h1>Add About Us</h1></center>

    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Banner Image</label>
        <input class="form-control" type="file" name="banner_image" id="formFile">
    </div>

    <div class="col-mb-6">
        <label for="exampleFormControlInput1" class="form-label">Who We Are</label>
        <input type="text" name="who_we_are_title" class="form-control" id="exampleFormControlInput1" placeholder="enter a title" required>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" name="who_we_are_message" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Vision</label>
        <textarea class="form-control" name="vision" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mission</label>
        <textarea class="form-control" name="mission" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Upload who we are Image</label>
        <input class="form-control" type="file" name="who_we_are_image" id="formFile">
    </div>

    <button class="btn btn-success" style="width: 120px;">Submit</button>      
</form>

                     </div>
                 
                </div>
              </div>
            </div>
           
          </div>
          