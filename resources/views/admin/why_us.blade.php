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
               <button type="button" class="close" data-dismiss="alert">
                  

                  x
               </button>
               {{session()->get('message')}}
            </div>


      @endif
<div class="row-md-12">
        <form action="{{url('upload_whyus')}}" method="POST" enctype="multipart/form-data">

         @csrf
            
               <div class="col-mb-6">
              <label for="exampleFormControlInput1" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="enter a title" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Welcome Message</label>
              <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>

            <div class="mb-3">
              <label for="formFile" class="form-label">Upload Image</label>
              <input class="form-control" type="file" name="whyus" id="formFile">
            </div>
                             <button class="btn btn-success" style="width: 120px;">Submit</button>      
            </div>
                        

                     </form>
                     </div>
                 
                </div>
              </div>
            </div>
           
          </div>
          