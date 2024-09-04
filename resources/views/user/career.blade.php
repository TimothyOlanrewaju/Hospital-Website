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
    <title>FMCK | Career</title>
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
Career
</div>
<br>
<div class="p-1 mb-6">
  <div class="max-w-screen-2xl flex justify-center items-center  mx-auto w-3/4 h-3/4 p-10 gap-4 lg:gap-6  shadow-2xl shadow-gray-400 rounded-lg">
    <div class=""><img src="images/disclaimer.webp" alt="" class="hover:scale-110 transition 1s ease-in-out"></div>
    <div class="flex-2"><p class="text-xl font-semibold text-gray-500">We appreciate your interest in joining our organization. Currently, we do not have any open positions or vacancies available. We encourage you to check back periodically for updates on career opportunities that may arise in the future. Thank you! </p></div>
  </div>
</div>
<br>

@include('user.footer')

<script src="js/index.js"></script>
</div>
</body>
</html>