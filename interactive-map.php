<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Safe Map Cozumel - Where to stay and things to do in Cozumel</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Dosis:200,300' rel='stylesheet' type='text/css'/>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>

    <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>

    <script type="text/javascript" src="js/fade-in-jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="js/feature_carousel.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="css/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="css/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />

    <script type="text/javascript">


    $(document).ready(function() {
        $("ul#restaurantes").hide();
        
        $("a[rel=example_group]").fancybox({
            'transitionIn'      : 'none',
            'transitionOut'     : 'none',
            'titlePosition'     : 'over',
            'titleFormat'       : function(title, currentArray, currentIndex, currentOpts) {
                return '<span id="fancybox-title-over">SafeMap /' + (title.length ? ' &nbsp; ' + title : '') + '</span>';
            }

        });
    });

    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {	
     jqueryCycle()
     jcarouselVertical()
     socialIcon()
     back2top()
     lavaLamp()
 });
    </script>
</head>

<body>
    <!--////////header////////-->
    <div class="header">
    	<div class="wrap">
            <div class="company-logo">
                <!-- <div class="logo"><a href="http://safemapcozumel.com/">home</a></div> -->
            <div class="logo">
                <a href="http://safemapcozumel.com/">
                    <img src="http://safemapcozumel.com/images/logo.png">
                </a>
            </div>
            </div>
            <div class="menu-container">
              <div class="nav">
               <ul id="main_menu">
                <li><a href="http://safemapcozumel.com/" id="home"> Home</a></li>
                <li><a href="issues.php">Issues</a></li>
                <li><a href="advertisers.php">Advertisers</a>
                                       <?php 
                            include "categorias.php";
                        ?>
                </li>
                <li><a href="about_safemap.php">About Us</a></li>
                <li><a href="faqs.php">Faq's</a></li>
                <li class="current"><a href="tourist_information.php" >Tourist Information</a>
                 <ul>
                    <li><a href="about_cozumel.php">About Cozumel</a></li>
                    <li><a href="where-to-stay.php">Where to Stay</a></li>
                    <li><a href="things-to-do.php">Things to Do</a></li>
                    <li><a href="how-to-get.php">How to Get</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="hiring.php">New Ads</a></li>
        </ul>
    </div><!-- end nav -->
</div><!-- end menu-container -->
</div><!-- end wrap -->
</div>
<!--////////header end////////-->

<!-- //////banner//////// -->
<div class="banner_small">
    <div class="idiomas">
                <a href="http://www.safemapcozumel.com/" class="activo">English</a> 
                
                <a href="http://www.safemapcozumel.com/spanish"> | Español</a>
            </div>
    <div class="wrap">

    </div>
</div>
<!--////////banner end //////// -->

<!-- //////wrapper (main content) //////// -->
<div id="wrapper">

    <!--////Main container////-->
    <div id="main-container">
       <!-- ////left containet//// -->
       <div class="left-content">
        <div id="info-container">


            <div class="title_styling">
                <h1>Interactive Advertisers Map.</h1>
                <div class="title_underline"></div>
            </div>
            <iframe width="590" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=203173678386505060299.0004d0867cffd0547c04a&amp;ie=UTF8&amp;t=h&amp;ll=20.450819,-86.923141&amp;spn=0.418188,0.404434&amp;z=11&amp;output=embed"></iframe>

        </div><!--end blog-box-->

    </div><!--End left-content-->
    <!--rignt container-->
    <?php
    include 'right-container.php';
    ?>
    <!--rignt container end-->
</div>
<!--////Main container////-->
</div> 
<!-- //////End wrapper////////- -->

<!-- //////footer////// -->
<?php
include 'footer.php';
?>
<!-- //////footer end////// -->
<div id="goto_top"></div>
<script type="text/javascript">


$(".category").click(function(){
    var btnid = $(this).attr("id");
    if ($("ul#"+btnid+"").is(":hidden")) {
        $("ul#"+btnid+"").slideDown("slow");
    } else {
        $("ul#"+btnid+"").hide();
    }
});

</script>
</body>
</html>

