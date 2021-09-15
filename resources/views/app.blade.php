<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ferdous Anam">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="http://thevectorlab.net/flatlab-4/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://thevectorlab.net/flatlab-4/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"></link>
    <link href="http://thevectorlab.net/flatlab-4/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"></link>
    <link rel="stylesheet" href="http://thevectorlab.net/flatlab-4/css/owl.carousel.css" type="text/css"></link>

    <!--right slidebar-->
    <link href="http://thevectorlab.net/flatlab-4/css/slidebars.css" rel="stylesheet"></link>

    <!-- Custom styles for this template -->

    <link href="http://thevectorlab.net/flatlab-4/css/style.css" rel="stylesheet"></link>
    <link href="http://thevectorlab.net/flatlab-4/css/style-responsive.css" rel="stylesheet"></link>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"></link>

</head>

<body class="light-sidebar-nav">

@inertia

<!-- js placed at the end of the document so the pages load faster -->
<script src="http://thevectorlab.net/flatlab-4/js/jquery.js"></script>
<script src="http://thevectorlab.net/flatlab-4/js/bootstrap.bundle.min.js"></script>
<script class="include" type="text/javascript" src="http://thevectorlab.net/flatlab-4/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="http://thevectorlab.net/flatlab-4/js/jquery.scrollTo.min.js"></script>
<script src="http://thevectorlab.net/flatlab-4/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="http://thevectorlab.net/flatlab-4/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="http://thevectorlab.net/flatlab-4/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="http://thevectorlab.net/flatlab-4/js/owl.carousel.js" ></script>
<script src="http://thevectorlab.net/flatlab-4/js/jquery.customSelect.min.js" ></script>
<script src="http://thevectorlab.net/flatlab-4/js/respond.min.js" ></script>

<!--right slidebar-->
<script src="http://thevectorlab.net/flatlab-4/js/slidebars.min.js"></script>

<!--common script for all pages-->
<script src="http://thevectorlab.net/flatlab-4/js/common-scripts.js"></script>

<!--script for this page-->
<script src="http://thevectorlab.net/flatlab-4/js/sparkline-chart.js"></script>
<script src="http://thevectorlab.net/flatlab-4/js/easy-pie-chart.js"></script>
<script src="http://thevectorlab.net/flatlab-4/js/count.js"></script>
<script src="{{ mix('/js/app.js') }}" defer></script>

<script>
    //owl carousel
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box
    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });
</script>

</body>
</html>
