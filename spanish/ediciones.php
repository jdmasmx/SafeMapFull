<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Safe Map Cozumel - Where to stay and things to do in Cozumel</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Dosis:200,300' rel='stylesheet' type='text/css'/>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36983377-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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

        $("#contacto").fancybox({
      'width'       : '50%',
      'height'      : '25%',
      'autoScale'     : false,
      'transitionIn'    : 'elastic',
      'transitionOut'   : 'elastic',
      'type'        : 'iframe'
    });
        
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
                <li><a href="http://safemapcozumel.com/spanish" id="home"> Home</a></li>
                <li  class="current"><a href="ediciones.php">Ediciones</a></li>
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
                <h1> Ediciones Safe Map Cozumel.</h1>
                <div class="title_underline"></div>
            </div>



            <p>Safe Cozumel Map; ofrece cada 2 meses una edición nueva y emocionante, que contiene una información útil e importante dirigido al turismo que nos visita cada año. proporcionamos información sobre los servicios locales, historia y actividades de la isla, así como un mapa detallado de Cozumel.</p>

            <table class="mapas">
                <tr>    
                    <td>

                        Map 2013 <br />
                        Haga clic en la imagen para ver la disponibilidad
                    </td>
                    <td>
                        Junio - Septiembre Map <br />
                        Haga clic en la imagen para ampliar
                    </td>
                    <td>
                        Abril - Mayo Map<br />
                        Haga clic en la imagen para ampliar
                    </td>

                </tr>   
                <tr>

                    <td>
                        <a href="avisoedicion.php" id="contacto"><img alt="example1" src="../issues/portada-december.jpg" /></a>

                    </td>
                    <td>
                        <a rel="example_group" href="../issues/june-sep-2012.jpg" title="June - September 2012 Map "><img alt="example1" src="../issues/portada-september.jpg" /></a>

                    </td>
                    <td>
                        <a rel="example_group" href="../issues/april-may-2012.jpg" title="June - April - May 2012 Map "><img alt="example1" src="../issues/portada-mayo.jpg" /></a>

                    </td>
                </tr>
                <tr>

                    <td>
                        <!-- 40,000 Issues<br />
                        <a href="#"><img src="images/print.png" class="icono-map"></a> -->
                    </td>
                    <td>
                        40,000 Ediciones<br />
                        <a href="http://www.safemapcozumel.com/images/ediciones/jun%20-%20sep/junio%20-%20septiembre.pdf" target="_blank"><img src="../images/print.png" class="icono-map"></a>
                    </td>
                    <td>
                        20,000 Ediciones<br />
                        <a href="http://safemapcozumel.com/images/ediciones/april%20-%20may/April_May_issue.pdf" target="_blank"><img src="../images/print.png" class="icono-map"></a>
                    </td>
                </tr>
            </table>
            <hr class="divide" />
            <table class="mapas">
                <tr>    
                    <td>
                        Febrero - Marzo Map <br />
                      Haga clic en la imagen para ampliar
                    </td>
                    <td>
                        Diciembre - Enero Map <br />
                        Haga clic en la imagen para ampliar
                    </td>


                </tr>   
                <tr>

                    <td>
                          20,000 Ediciones<br />
                        <a rel="example_group" href="../issues/february-march-2012.jpg" title="February - March 2012 Map "><img alt="example1" src="../issues/portada-febrero.jpg" /></a>

                    </td>
                    <td>
                          10,000 Ediciones<br />
                        <a rel="example_group" href="../issues/december-january-2012.jpg" title="December - January 2012 - Map"><img alt="example1" src="../issues/portada-december-2.jpg" /></a>

                    </td>

                </tr>
                <tr>

                    <td>
                        40,000 Ediciones<br />
                        <a href="http://safemapcozumel.com/images/ediciones/february%20-%20march/February_March_map.pdf" target="_blank"><img src="../images/print.png" width="60"></a>
                    </td>
                    <td>
                        40,000 Ediciones<br />
                        <a href="http://safemapcozumel.com/images/ediciones/december-%20january/December_January_map.pdf" target="_blank"><img src="../images/print.png" width="60"></a>
                    </td>

                </tr>
            </table>
            <hr class="divide" />
            <p>

                <strong>¿Quieres anunciar tu negocio?. Contacta con nosotros.</strong><br />
                <a href="contacto.php" class="links">Click Aqui</a>
            </p>
            <hr class="divide" />
            <div class="title_styling">
                <h1>Mapa Interactivo.</h1>
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

</body>
</html>

