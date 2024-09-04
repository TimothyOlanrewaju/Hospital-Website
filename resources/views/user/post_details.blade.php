<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="16x16" href="/images/fmc_logo.jpg">
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <title>FMCK | {{$post->title}}</title>
</head>
<body class="overflow-x-hidden">
<div>
@include('user.nav')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="max-w-screen-2xl justify-center items-center text-center rounded-lg shadow-gray-600 shadow-lg p-2">
  <div>
  <img src="/blogimage/{{$post->image}}" alt="" class="w-full h-80 object-contain">
  </div><br>
  <div>
    <h2 class="text-2xl font-extrabold"><a href="blog-single.html">{{$post->title}}</a></h2>
    <p class="text">{{$post->message}}</p>
    <br>
    <p>Post by <b>{{$post->name}}</p>

  </div>
</div>
@include('user.footer')
<script src="js/index.js"></script>
</div>
</body>
</html>