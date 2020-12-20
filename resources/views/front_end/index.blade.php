<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.klevermedia.co.uk/html_templates/movie_star_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2020 05:45:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thesis</title>
    <base href="{{asset('/')}}">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/venbobox.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="js/lib/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/lib/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/lib/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
@include("front_end.main.header")
<div class="wrapper">
    @yield("content")
    @include("front_end.main.footer")
</div>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/lib/main-tab.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/headhesive.min.js"></script>
    <script src="js/matchHeight.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/font-awesome.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script>
        $("#owl-blog").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,


            //Pagination
            pagination: true
        });
      
                $("#datepicker").datepicker();
    </script>
  

</body>

</html>