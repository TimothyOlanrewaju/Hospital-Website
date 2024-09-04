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
    <title>FMCK | Latest News</title>
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

<div class="max-w-screen-2xl h-20 bg-gradient-to-r from-green-300 to-green-500 mx-auto text-3xl font-extrabold pt-4 text-center text-white lg:pt-2">
Latest News
</div>
<section class="max-w-screen-2xl px-4 py-5">
    @foreach($latest_news->chunk(3) as $chunk)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:py-3 ">
        @foreach($chunk as $post)
        <div class="mx-auto p-2 text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow-lg shadow-green-500 dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
            <div class="w-90 h-40 lg:h-56 overflow-hidden">
                <img src="/blogimage/{{$post->image}}" alt="" class="object-cover w-full h-full">
            </div>
            <div class="text-left">
                <h1 class="text-xl font-bold"><a href="blog-single.html">{{$post->title}}</a></h1>
                <p>{{ substr($post->message, 0, 50) }}{{ strlen($post->message) > 50 ? "..." : "" }}</p>
                <button class="bg-green-500 text-white mt-3 py-2 px-4 rounded-lg hover:bg-green-700 transition:0.5s ease-in-out"><a href="{{url('post_details',$post->id)}}">Read More</a></button>
                <p>Post by <b>{{$post->name}}</b></p>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</section>
@include('user.footer')

<script src="js/index.js"></script>
</div>
</body>
</html>