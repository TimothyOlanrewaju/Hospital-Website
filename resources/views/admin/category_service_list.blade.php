<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                
                
              </div>
            </div>
          </div>
          <div class="row">
             @if(session()->has('message'))
            <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">
                  

                  x
               </button>
               {{session()->get('message')}}
            </div>


      @endif
            <div class="col-md-12 grid-margin ">
              <div class="card">
                 <div class="card-body ml-5">
                   

       

<div class="row-md-12">

        <form action="{{url('category_add_service')}}" method="POST" >

         @csrf
           <center> <h1><b>Add New Service Category</h1></b></center>
               <div class="col-mb-6">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter A Service Name" required>
            </div>
            
            <br><br>
           
                             <button class="btn btn-success" style="width: 120px;">Submit</button>      
            </div>
                        

                     </form>
                     </div>
                 
                </div>
              </div>
            </div>
           
          </div>
