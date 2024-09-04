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

        <form action="{{url('upload_tmc')}}" method="POST" enctype="multipart/form-data">

         @csrf
            
              <div class="col-mb-6">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="enter a Name" required>
            </div><br><br>
            
            <div class="col-mb-6">
              <label for="exampleFormControlInput1" class="form-label">Designation</label>
              <input type="text" name="designation" class="form-control" id="exampleFormControlInput1" placeholder="enter a Designation" required>
            </div><br><br>
            <div class="mb-3">
              <label for="formFile" class="form-label">Upload Image</label>
              <input class="form-control" type="file" name="image" id="formFile">
            </div>
                             <button class="btn btn-success" style="width: 120px;">Submit</button>      
            </div>
                        

                     </form>
                     </div>
                 
                </div>
              </div>
            </div>
           
          </div>
          