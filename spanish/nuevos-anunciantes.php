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
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/jquery.form.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>

    <script type="text/javascript">


    $(document).ready(function() {
        $("ul#restaurantes").hide();

        $(".contacto").fancybox({
      'width'       : '50%',
      'height'      : '100%',
      'autoScale'     : false,
      'transitionIn'    : 'elastic',
      'transitionOut'   : 'elastic',
      'type'        : 'iframe'
    });

         $(".contactobanner").fancybox({
      'width'       : '50%',
      'height'      : '100%',
      'autoScale'     : false,
      'transitionIn'    : 'elastic',
      'transitionOut'   : 'elastic',
      'type'        : 'iframe'
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
            <li  class="current"><a href="nuevos-anunciantes.php">Nuevos anunciantes</a></li>
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
            <!--<div class="page_title">
                    <h1>CONTACT US </h1>
                </div> -->       
            </div>
        </div>
        <!--////////banner end //////// -->
        
        <!-- //////wrapper (main content) //////// -->
        <div id="wrapper">

            <!--////Main container////-->
            <div id="main-container">
             <!-- ////left containet//// -->
             <div class="left-content">
               <div class="title_styling">
                <h1> Opción Uno</h1>
            </div>

            <strong>Únete a nuestro directorio</strong>, envíe sus datos y estaremos encantados de tenerte entre nuestros <a href="anunciantes.php">anunciantes.</a> <a href="politicas.php" class="contacto">Haga clic aquí para ver nuestras políticas.</a>
            <br />
            <div class="primary_btn_b">
                <a href="politicas.php" class="contacto">POLÍTICAS Y PRECIOS HAGA CLIC AQUÍ.</a>
      </div>
            <hr class="divide"/> <br />
            <form class="cmxform" id="contactform" method="POST" action="hiring-envio.php">
             <fieldset>
                 <p>
                    <label for="name">Nombre del negocio</label>
                    <input id="name"  name="name" type="text" size="50"  class="contact-input" />
                </p>
                <p>
                    <label for="slogan">Slogan del negocio</label>
                    <input id="slogan"  name="slogan" type="text" size="50"  class="contact-input" />
                </p>
                 <p>
                    <label for="sloganesp">Slogan del negocio (<i>en Ingles</i>)</label>
                    <input id="sloganesp"  name="sloganesp" type="text" size="50"  class="contact-input" />
                </p>
                <p>
                    <label for="category">Categoria</label>
                    <select name="subject" id="subject">
                        <option value="" selected="selected">Select a category</option>
                        <option value="Beach Hotels">Beach Hotels</option>
                        <option value="Downtown Hotels">Downtown Hotels</option>
                        <option value="Bed &amp; Breakfast">Bed &amp; Breakfast</option>
                        <option value="Houses for Rent">Houses for Rent</option>
                        <option value="Properties for Sale">Properties for Sale</option>
                        <option value="Beach Clubs">Beach Clubs</option>
                        <option value="Restaurants">Restaurants</option>
                        <option value="Coffee Shops">Coffee Shops</option>
                        <option value="Bars &amp; Clubs">Bars &amp; Clubs</option>
                        <option value="Car &amp; Scooter rentals">Car &amp; Scooter rentals</option>
                        <option value="Medical &amp; Health Services">Medical &amp; Health Services</option>
                        <option value="Handcrafts &amp; Boutique">Handcrafts &amp; Boutique</option>
                        <option value="Jewelry &amp; Silver Stores">Jewelry &amp; Silver Stores</option>
                        <option value="Non-Profit Organization">Non-Profit Organization</option>
                        <option value="Financial Club">Financial Club</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Others">Others</option>
                    </select>
                </p>    
                <p>
                    <label for="logo">Logo del Negocio (Format: PNG, JPG, JPEG)</label>
                    <input id="logo"  name="logo" type="file" size="50"  class="contact-input"/>
                </p>
                <p>
                    <label for="banner">Banner promocional (Tamaño de imagen: 630px X 350px, Format: PNG, JPG, JPEG)</label>
                    <input id="banner"  name="banner" type="file" size="50"  class="contact-input"/>
                    
                </p>

                <p>
                    <label for="bannerin">Banner promocional<i>Texto en Ingles</i> (Tamaño de imagen: 630px X 350px, Format: PNG, JPG, JPEG)</label>
                    <input id="bannerin"  name="bannerin" type="file" size="50"  class="contact-input"/>
                    <label>Si usted necesita una ayuda para el diseño de su banner <a href="contactobanner.php" class="contactobanner"><u>Contactenos</u></a>.</label>
                </p>
                <br />

                <p>
                    <label for="texto"> Texto Descriptivo Uno (Max 250 caracteres)</label>
                    <textarea name="texto" id="texto" cols="5" rows="50" class="contact-input"></textarea>
                </p>   
                 <p>
                    <label for="textoesp"> Texto Descriptivo Uno (Max 250 caracteres <i>en Ingles</i>)</label>
                    <textarea name="textoesp" id="textoesp" cols="5" rows="50" class="contact-input"></textarea>
                </p> 
                <p>
                    <label for="textod"> Texto Descriptivo Dos (Max 250 caracteres</label>
                    <textarea name="textod" id="textod" cols="5" rows="50" class="contact-input"></textarea>
                </p>  
                <p>
                    <label for="textodesp"> Texto Descriptivo Dos (Max 250 caracteres <i>en Ingles</i>)</label>
                    <textarea name="textodesp" id="textodesp" cols="5" rows="50" class="contact-input"></textarea>
                </p>   
                <br /><br />    
                <h4>Información General</h4>  
                <p>
                    <label for="address"> Dirección en Cozumel</label>
                    <input id="address" name="addressh"  type="text" size="50" class="contact-input"/>
                </p>
                <p>
                    <label for="address"> Dirección 2 (Opcional)</label>
                    <input id="address" name="addressh2"  type="text" size="50" class="contact-input"/>
                </p>
                <p>
                    <label for="phoned">Teléfono</label>
                    <input id="phoned" name="phoned"  type="text" size="50" class="contact-input"/>
                </p>
                <p>
                    <label for="phoned">Teléfono 2 (Opcional)</label>
                    <input id="phoned" name="phoned2"  type="text" size="50" class="contact-input"/>
                </p>
                <p>
                    <label for="facebook">Cuenta en Facebook(Opcional)</label>
                    <input id="facebook" name="facebook"  type="text" size="50" class="contact-input"/>
                </p>
                <p>
                    <label for="twitter">Cuenta en Twitter (Opcional)</label>
                    <input id="twitter" name="twitter"  type="text" size="50" class="contact-input"/>
                </p>
                <p>
                    <label for="website"> Website (Optional)</label>
                    <input id="website" name="website"  type="text" size="50" class="contact-input"/>
                </p>
                <p>
                    <label for="email"> Email</label>
                    <input id="email" name="email"  type="text" size="50" class="contact-input"/>
                </p>
                    <p>
                    <label for="webcomment">Comentarios para Webmaster</label>
                    <textarea cols="5" rows="20" id="webcomment" name="webcomment" class="contact-input"></textarea>
                    <!-- <input id="webcomment" name="webcomment"  type="text" size="50" class="contact-input"/> -->
                </p>
                 <p>
                    <label for="medio">¿Como llegaste a nosotros?</label>
                    <select name="medio" id="medio">
                    
                    <option value="" selected="selected">Selecciona una opcion</option>
                        <option value="Arturo">Arturo</option>
                        <option value="Sofia">Sofia</option>
                        <option value="Internet">Internet</option>
                         <option value="gecko">Gecko</option>
                        <option value="otros">Otros</option>
                        
                    </select>
                </p>    
<br /><br />
                <p>
                    <input class="primary_btn" type="submit" value="Enviar" id="send_button"/>

                    <input class="primary_btn" type="reset" value="Limpiar"/> 
                </p>
                <p>
                </p>
                <br class="clear" />
                <p>
                    <div id="response"></div>
                </p>
            </fieldset>
        </form> 
        <!-- Formulario ADS-->
        <hr class="divide" />
        <br /><br /><br /><br />
        <div class="title_styling">
            <h1 id="freeads"> Opcion Dos </h1>
        </div>
        Estas son las menciones al <strong>100% GRATIS</strong>, y están sujetos a las mismas políticas de todos los anuncios en <a href="politicas.php" class="contacto">Safe Map Cozumel.</a>
        
        <hr class="divide"/> <br />
        <form class="cmxform" id="freeads" method="POST" action="free-ads.php">
         <fieldset>
            <p>
                <label for="categorydf">Categoria</label>
                <select name="categorydf" id="categorydf">
                    <option value="" selected="selected">Select a category</option>
                    <option value="Beach Hotels">Beach Hotels</option>
                    <option value="Downtown Hotels">Downtown Hotels</option>
                    <option value="Bed &amp; Breakfast">Bed &amp; Breakfast</option>
                    <option value="Houses for Rent">Houses for Rent</option>
                    <option value="Properties for Sale">Properties for Sale</option>
                    <option value="Beach Clubs">Beach Clubs</option>
                    <option value="Restaurants">Restaurants</option>
                    <option value="Coffee Shops">Coffee Shops</option>
                    <option value="Bars &amp; Clubs">Bars &amp; Clubs</option>
                    <option value="Car &amp; Scooter rentals">Car &amp; Scooter rentals</option>
                    <option value="Medical &amp; Health Services">Medical &amp; Health Services</option>
                    <option value="Handcrafts &amp; Boutique">Handcrafts &amp; Boutique</option>
                    <option value="Jewelry &amp; Silver Stores">Jewelry &amp; Silver Stores</option>
                    <option value="Non-Profit Organization">Non-Profit Organization</option>
                    <option value="Financial Club">Financial Club</option>
                    <option value="Insurance">Insurance</option>
                    <option value="Others">Others</option>
                </select>

            </p>    
            <p>
                <label for="businessnamedf"> Nombre del Negocio</label>
                <input id="businessnamedf"  name="businessnamedf" type="text" size="50"  class="contact-input"/>
            </p>
            <p>
                <label for="phonedf">Teléfono</label>
                <input id="phonedf" name="phonedf"  type="text" size="50" class="contact-input"/>
            </p>
            <p>
                <label for="addressdf">Dirección</label>
                <input id="addressdf" name="addressdf"  type="text" size="50" class="contact-input"/>
            </p>

            <p>
                <label for="emaildf">Email</label>
                <input id="emaildf" name="emaildf"  type="text" size="50" class="contact-input"/>
            </p>

            <p>
                <input class="primary_btn" type="submit" value="Enviar" id="send_button_df"/>

                <input class="primary_btn" type="reset" value="Limpiar"/> 
            </p>
            <p>
            </p>
            <br class="clear" />
            <p>
                <div id="responsedf"></div>
            </p>
        </fieldset>
    </form>
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

</div>
<!--End left-content-->

<!--rignt container-->
<?php
include 'right-container.php';
?>
<!--rignt container end-->

</div>
<!--//// End Main container////-->
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
