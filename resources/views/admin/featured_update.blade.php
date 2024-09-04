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

        <form action="{{url('featured_page_update',$data->id)}}" method="POST"  enctype="multipart/form-data">

         @csrf
           <center> <h1><b>Update Featured Services</h1></b></center>
               <div class="col-mb-6">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter A Service Name" value="{{$data->title}}" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"></label>
              <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"  placeholder="Enter Service Details"  required>{{$data->message}}</textarea>
            </div>

             <div class="" >
              <label >Old Image</label>
              <img src="/couroselimage/{{$data->image}}" height="150px" width="150px">
            </div>

            <div class="mb-3">
              <label for="formFile" class="form-label">Update Image</label>
              <input class="form-control" type="file" name="image" id="formFile">
            </div>

           
                             <button class="btn btn-success" value="Update"  style="width: 120px;">Update</button>      
            </div>
                        

                     </form>
                     </div>
                 
                </div>
              </div>
            </div>
           
          </div>
