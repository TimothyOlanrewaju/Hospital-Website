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

        <form action="{{url('update_post',$EditService->id)}}" method="POST" >

         @csrf
           <center> <h1><b>Add New Service</h1></b></center>
               <div class="col-mb-6">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <input type="text" name="Service_list" class="form-control" id="exampleFormControlInput1" placeholder="Enter A Service Name" value="{{$EditService->name}}" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"></label>
              <textarea class="form-control" name="Service_detail" id="exampleFormControlTextarea1" rows="3"  placeholder="Enter Service Details"  required>{{$EditService->description}}</textarea>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                          <div class="form-group">
                        <select name="department" class="form-control wide">
                                      <option value="">Select Service Category </option>
                            <?php
                                $EditService = DB::table('categories')->pluck('name', 'id');

                                foreach ($EditService as $id => $name) {
                                    echo "<option class='form-label' value='$id'>$name</option>";
                                }
                                ?>
                        </select>
</div>

                        </div>

           
                             <button class="btn btn-success" value="Update" style="width: 120px;">Submit</button>      
            </div>
                        

                     </form>
                     </div>
                 
                </div>
              </div>
            </div>
           
          </div>
