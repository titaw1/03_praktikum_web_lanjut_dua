<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>New Vision HTML CSS Template</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="slick/slick.css" rel="stylesheet" /> <!-- https://kenwheeler.github.io/slick/ -->
    <link href="slick/slick-theme.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com -->
	<link href="css/templatemo-new-vision.css" rel="stylesheet" />
<!--

New Vision Template

https://templatemo.com/tm-542-new-vision

-->
</head>
<body>
    <!-- Page Header -->
    <div class="container-fluid">
        @include('layouts.header')

        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg"></div>
            </div>
        </div>

        <!-- Main -->
        <main>
            <!-- Welcome section -->
            @yield('content')
            <!-- Featured -->
            <section class="tm-featured">
                @include('layouts.slider')
            </section>

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End Footer -->

        </main>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>
