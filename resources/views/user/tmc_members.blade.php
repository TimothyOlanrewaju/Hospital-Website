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
    <title>FMCK | TMC Members</title>
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
Top Management Committee
</div>
<br>
<section class="max-w-screen-2xl">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($tmc as $post)
        <div class="mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow-md shadow-green-500  dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
            <div class="flex justify-center items-center w-72 h-40 lg:w-72 lg:h-56 overflow-hidden">
                <img src="TmcImage/{{$post->image}}" alt="" class="object-contain md:object-contain lg:object-fill w-full h-full">
            </div>
            <p class="text-lg font-bold">{{$post->name}}</p>
            <p>{{$post->designation}}</p>
        </div>
        @endforeach
    </div>
    
</section>
<br>
<br>
@include('user.footer')

<script src="js/index.js"></script>
</div>
</body>
</html>