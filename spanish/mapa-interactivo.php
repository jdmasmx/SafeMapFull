<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Safe Map Cozumel - Where to stay and things to do in Cozumel</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Dosis:200,300' rel='stylesheet' type='text/css'/>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.lavalamp.min.js"></script>

    <script type="text/javascript" src="../js/jquery.lavalamp.min.js"></script>

    <script type="text/javascript" src="../js/fade-in-jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="../js/feature_carousel.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
    <script type="text/javascript" src="../css/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="../css/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-1.3.4.css" media="screen" />

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

            <div class="logo">
                <a href="http://safemapcozumel.com/spanish/">
                    <img src="http://safemapcozumel.com/images/logo.png">
                </a>
            </div>

            <div class="menu-container">
              <div class="nav">
               <ul id="main_menu">
                <li class="current"><a href="http://safemapcozumel.com/spanish" id="home"> Home</a></li>
                <li><a href="ediciones.php">Ediciones</a></li>
                <li><a href="anunciantes.php">Anunciantes</a>
                    <?php 
                    include 'categorias-esp.php';

                    ?>
                </li>
                <li><a href="quienes-somos.php">Quienes Somos</a></li>
                <li><a href="faqs.php">FAQ</a></li>
                <li><a href="informacion.php" >Información</a>
                 <ul>
                    <li><a href="acerca-cozumel.php">Acerca de Cozumel</a></li>
                    <li><a href="donde-hospedarse.php">Dónde hospedarse</a></li>
                    <li><a href="actividades.php">Actividades</a></li>
                    <li><a href="como-llegar.php">Como Llegar</a></li>
                </ul>
            </li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="nuevos-anunciantes.php">Nuevos anunciantes</a></li>
        </ul>
    </div><!-- end nav -->
</div><!-- end menu-container -->
</div><!-- end wrap -->
</div>
<!--////////header end////////-->

<!-- //////banner//////// -->
<div class="banner_small">
    <div class="idiomas">
                <a href="http://www.safemapcozumel.com/">English</a> 
                
                <a href="http://www.safemapcozumel.com/spanish" class="activo"> | Español</a>
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
                <h1>Mapa Interactivo Cozumel.</h1>
                <div class="title_underline"></div>
            </div>
            <iframe width="590" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=203173678386505060299.0004d0867cffd0547c04a&amp;ie=UTF8&amp;t=h&amp;ll=20.450819,-86.923141&amp;spn=0.418188,0.404434&amp;z=11&amp;output=embed"></iframe>
<br /><br />
<br /><br />
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50edae0c66a3f38f"></script>
<!-- AddThis Button END -->

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

