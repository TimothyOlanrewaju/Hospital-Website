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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" href="css/carousel.css">
    <title>Federal Medical Center Keffi</title>
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

@include('user.mainslider')

@include('user.welcome')


@include('user.whyus')

@include('user.display')

@include('user.couresol')

<br>

@include('user.funstats')


@include('user.blog')
<br>

@include('user.partners')
<br>
<div class="flex justify-center items-center text-center mt-4">
  <h4 class="font-extrabold text-3xl">Contact Us</h4>
</div>
@include('user.contact_us')

@include('user.footer')

<script src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script src="js/carousel.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</div>
</body>
</html>


