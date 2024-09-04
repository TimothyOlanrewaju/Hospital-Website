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
	<h3 class="title-design">ALL BLOG POST</h3>
<div class="container-fluid page-body-wrapper">
    <table class="table-bordered" class="table-responsive" class="table table-bordered" >

  <thead class="th_des">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Message</th>
      <th scope="col">Post By</th>
      <th scope="col">Usertype
      	      <th scope="col">Image</th>
      	      <th scope="col">Delete</th>
      	            	      <th scope="col">Update</th>



    </tr>
  </thead>
  <tbody>
  	@foreach($post as $post)
    <tr>
      <td>{{$post->title}}</td>
      <td>{{$post->message}}</td>
      <td>{{$post->name}}</td>
      <td>{{$post->usertype}}</td>
            <td>
            	<img src="blogimage/{{$post->image}}">
            </td>

<td><a href="{{url('delete_prog',$post->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure to Delete This?')">Delete</a></td>


<td><a href="{{url('update_prog',$post->id)}}" class="btn btn-primary">Update</a></td>
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