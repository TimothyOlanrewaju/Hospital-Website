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
    <title>FMCK | Our History</title>
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
Our History
</div>
<br>
@foreach($history->last() ? [$history->last()] : [] as $post)
<div class="flex gap-3 p-1">
  <div class="flex-1">
    <h4 class="font-extrabold">Founding story</h4>
    <p>{{$post->founding_story}}</p>  
  </div>
  <div class="flex-1">
  <img src="HistoryImage/{{$post->image}}" alt="">
  </div>
</div>
<div class="">
  <p>{{$post->journey_So_far}}</p>
</div>
<div class="flex gap-3 p-1">
  <div class="flex-1">
    <p>Administrative building</p>  
  </div>
  <div class="flex-1">
  <img src="HistoryImage/admin.jpg" alt="">
  </div>
</div>
@include('user.footer')

<script src="js/index.js"></script>
</div>
@endforeach
</body>
</html>