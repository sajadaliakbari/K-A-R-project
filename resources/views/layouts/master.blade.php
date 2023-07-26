<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/master/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/master/BlueTech Campany.png">
  <title>
    Online Shopping
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/master/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/master/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/master/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Alpine js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="/master/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  
  <link rel="stylesheet" href="public/style.css">
  <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">

</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-100 bg-primary  position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
      @include('layouts.sidebar')
    </aside>
    <main class="main-content position-relative border-radius-lg mb-7 ">
      @include('layouts.navbar')
              
      {{$slot}}
      </main>
      @include('layouts.footer')
      
  
</body>

</html>