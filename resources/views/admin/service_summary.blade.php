<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		
		.title-design{
			font-size: 30px;
			font-weight: bold;
			padding: 50px;
			text-align: center;
		}

		.table{
			border: 1px solid black;
			padding: 30px;
			width: 70%;
			text-align: center;
			margin-left: 30px;
		}
		.th_des{
			background-color: limegreen;
		}
	</style>
</head>
<body>

	
<div class="main-panel">
	@if(session()->has('message'))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" ariel-hidden="true">X</button>

		{{session()->get('message')}}
	</div>
	@endif()
	<h3 class="title-design">ALL SERVICE</h3>
<div class="container-fluid page-body-wrapper">
    <table class="table" class="table-bordered" class="table-responsive" style="color: black">

  <thead class="th_des">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Created By</th>
            <th scope="col">Category Name</th>

            <th scope="col">Service Status</th>
      	      <th scope="col">Delete</th>
      	            	      <th scope="col">Update</th>



    </tr>
  </thead>
  <tbody>
  	@foreach ($service as $services)
  	<tr>
  		<td>{{$services->name}}</td>
  		<td>{{$services->description}}</td>
  		<td>{{$services->service_created_by}}</td>
  		<td>{{$services->category->name}}</td>
  		<td>{{$services->sevice_status}}</td>
  		  		<td><a href="{{url('edit_services',$services->id)}}" class="btn btn-primary">Edit</a></td>

  		<td><a href="{{url('delete_service',$services->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a></td>

  	</tr>
  	  	@endforeach

  </tbody>
</table>    
  </div>
  </div>               
                </div>
            </div>
             
           
          


</body>
</html>