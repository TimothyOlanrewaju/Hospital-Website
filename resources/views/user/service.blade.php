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
    <title>FMCK | Services</title>
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
Our Services
</div>
<br>
<div class="max-w-screen-2xl grid grid-cols-1 gap-3 justify-center items-center mx-auto md:grid-cols-2 lg:grid-cols-3 lg:pl-20">
    <div tabindex="0" class="collapse collapse-arrow border w-3/4 border-base-300 bg-base-200">
        <div class="collapse-title text-xl font-medium">
            Service One
        </div>
        <div class="collapse-content"> 
            <ul>
                <li>service 1</li>
                <li>service 1</li>
                <li>service 1</li>
            </ul>
        </div>
    </div>
    <div tabindex="0" class="collapse collapse-arrow border w-3/4 border-base-300 bg-base-200">
        <div class="collapse-title text-xl font-medium">
            Service One
        </div>
        <div class="collapse-content"> 
            <ul>
                <li>service 1</li>
                <li>service 1</li>
                <li>service 1</li>
            </ul>
        </div>
    </div>
    <div tabindex="0" class="collapse collapse-arrow border w-3/4 border-base-300 bg-base-200">
        <div class="collapse-title text-xl font-medium">
            Service One
        </div>
        <div class="collapse-content"> 
            <ul>
                <li>service 1</li>
                <li>service 1</li>
                <li>service 1</li>
            </ul>
        </div>
    </div>
    <div tabindex="0" class="collapse collapse-arrow border w-3/4 border-base-300 bg-base-200">
        <div class="collapse-title text-xl font-medium">
            Service One
        </div>
        <div class="collapse-content"> 
            <ul>
                <li>service 1</li>
                <li>service 1</li>
                <li>service 1</li>
            </ul>
        </div>
    </div>
    <div tabindex="0" class="collapse collapse-arrow border w-3/4 border-base-300 bg-base-200">
        <div class="collapse-title text-xl font-medium">
            Service One
        </div>
        <div class="collapse-content"> 
            <ul>
                <li>service 1</li>
                <li>service 1</li>
                <li>service 1</li>
            </ul>
        </div>
    </div>
    <div tabindex="0" class="collapse collapse-arrow border w-3/4 border-base-300 bg-base-200">
        <div class="collapse-title text-xl font-medium">
            Service One
        </div>
        <div class="collapse-content"> 
            <ul>
                <li>service 1</li>
                <li>service 1</li>
                <li>service 1</li>
            </ul>
        </div>
    </div>
</div>
@include('user.footer')
<script src="js/index.js"></script>
</div>
</body>
</html>