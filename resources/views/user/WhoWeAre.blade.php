<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="16x16" href="images/fmc_logo.jpg">
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <title>FMCK | Who We Are</title>
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

<div class="max-w-screen-2xl h-20 bg-gradient-to-r from-green-300 to-green-500 mx-auto text-2xl font-extrabold pt-4 text-center text-white">
Who We Are
</div>
<br>
@foreach($WhoWeAre->last() ? [$WhoWeAre->last()] : [] as $post)
<div class="p-8 leading-loose">
  <div class="">
    <p>{{$post->who_we_are_message}}</p>
  </div>
  <div>
    <h3 class="font-bold text-lg">VISION</h3>
    <p>{{$post->vision}}</p>
  </div>
  <div>
    <h3 class="font-bold text-lg">MISSION</h3>
    <p>{{$post->mission}}</p>
  </div>
</div>
@include('user.footer')

<script src="js/index.js"></script>
@endforeach
</div>
</body>
</html>