<?php

session_name("fancy form");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h1>Thank you for your information.</h1><br /><h3>We will publish as soon as possible.</h3>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="shortcut icon" href="../images/favicon.ico" /> 
<title>Safe Map Cozumel</title>
<!--META KEYWORDS-->
<meta name="description" content="Safe Map Cozumel provides the tourism experience to enjoy the best services in Cozumel, and the best choice for local service providers to increase their business." />
<meta name="keywords" content="safe, map, cozumel, restaurants, clinics, tours, dive, snorkel, breakfast, lunch, dinner, sea, food, coffee, drugstore, jewelry, sport, bar, grill, spa, adventure, playa del carmen, cancun, cozumel map, mapa de cozumel" />
<meta name="resource-type" content="document" />
<meta name="revisit-after" content="45 days" />
<meta name="classification" content="Commercial" />
<meta name="robots" content="ALL, index, follow" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="author" content="Gecko Creativo" />
<meta name="copyright" content="Safe Map Cozumel" />

<!-- HOJAS DE ESTILO -->
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
<link href="../styles/color.css" rel="stylesheet" type="text/css" />
<link href="../styles/nivo-slider.css" rel="stylesheet" type="text/css" />
<link href="../styles/inner.css" rel="stylesheet" type="text/css" />


 <!-- códigos para formulario de reservacion -->
<link rel="stylesheet" type="text/css" href="jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="demo.css" />

<?=$css?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>

<script type="text/javascript" src="script.js"></script>
<!-- fin código para formulario de contacto -->

<!-- calendario jquery -->
    <link type="text/css" href="css/ui-lightness/jquery-ui-1.8.1.custom.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-ui-1.8.1.custom.min.js"></script>
	<script type="text/javascript">
        $(function() {
            $("#date").datepicker(
                {dateFormat: 'dd-mm-yy', minDate: -0, maxDate: '+3M +1D', monthNames: ['January','February','March','April','May','June','July','August','September','October','November','December'] });
        });
    </script>
    <!-- fin calendario jquery -->



<!--<script type="text/javascript" src="../js/jquery-1.6.4.min.js"></script>-->

<!-- SLIDER PRINCIPAL -->
<script type="text/javascript" src="../js/jquery.nivo.slider.js"></script>
<script type="text/javascript">

jQuery(window).load(function() {
	jQuery('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'sliceDownRight,sliceDownLeft,fold,fade'
		slices:15,
		animSpeed:300, //Slide transition speed
		pauseTime:3000,
		directionNav:true, //Next &amp; Prev
		startSlide:0, //Set starting Slide (0 index)
		customChange: function(){
		Cufon.replace('#slideshow h1, #slideshow .slider-desc', {fontFamily: 'Yanone Kaffeesatz Regular'});
		}
	});
	 Cufon.refresh();
});
</script>
<!-- FIN SLIDER PRINCIPAL -->

<style type="text/css">
body {
	background-repeat: no-repeat;
	background-image: url(../images/bg-body.jpg);
	background-color: #f3ebe8;
}
</style>
<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19636245-18']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- Fin Google Analytics -->
</head>
<body class="nojs">

<!--<div id="wrappertop">
	<div id="containertop"> <a href="http://www.safetourscozumel.com" target="_blank"><img src="./images/safetours.png" alt="safetours cozumel" width="48" height="27" border="0" class="alignlefttop" /></a>
      
    </div>
</div>-->

<div id="wrapper">
	<div id="container">
		<div id="top">
		  <div id="logo"> <a href="../index.html"><img src="../images/logo.png" alt="SafeMap Cozumel" width="222" height="115" border="0" title="SafeMap Cozumel" /></a></div>
		  <div class="information">
              <p>Informations and Sales: 
              	<span class="no-phone"><a href="mailto:ventas@safemapcozumel.com">ventas@safemapcozumel.com<br /></a></span>
              	
                <span class="greensite">
                	<a href="http://www.safetourscozumel.com/" target="_blank"><img src="../images/icons/st.png" width="34" height="34" alt="Safe Tours Cozumel" /></a> <a href="http://www.facebook.com/pages/Safe-Map-Cozumel/107544306025205?sk=app_4949752878" target="_blank"><img src="../images/icons/facebook.png" alt="Facebook" width="34" height="34" border="0" title="Facebook" /></a>
                    <a href="http://twitter.com/#!/safemapcozumel" target="_blank"><img src="../images/icons/twitter.png" width="34" height="34" alt="Twitter" title="Twitter" /></a> 
                    <a href="https://plus.google.com/109828269179482231700/posts" target="_blank"><img src="../images/icons/gplus.png" width="33" height="33" alt="Google Plus" /></a> <a href="http://www.youtube.com/safemapcozumel" target="_blank"><img src="../images/icons/youtube.png" width="34" height="34" alt="Youtube" title="Youtube" /></a> &nbsp;&nbsp;&nbsp;
                    <img src="../images/green.png" width="60" height="60" alt="Green Site" title="Green Site" /></a>
                </span>
              </p>
</div>
		</div>
		<div id="topnav">
		  <div id="myslidemenu" class="jqueryslidemenu">
		    <ul>
		      <li><a href="../index.html">HOME</a></li>
		      <li><a href="../tourist_information.html">TOURIST INFORMATION</a></li>
		      <li><a href="../issues.html">ISSUES</a></li>
		      <li><a href="../advertisers.html">ADVERTISERS</a></li>
		      <li><a href="../about_safemap.html">ABOUT US</a></li>
		      <li><a href="../faqs.html">FAQ'S</a></li>
		      <li><a href="../contact.html">CONTACT US</a></li>
	        </ul>
	      </div>
	  </div>
        
		<div id="main-content">
		  <div id="sidebar">
		    <ul>
		      <li class="widget-container">
		        <h2>Tourist Information</h2>
		        <ul>
		          <li><a href="../about_cozumel.html">About Cozumel</a></li>
		          <li><a href="../where_to_stay.html">Where to Stay in Cozumel</a></li>
		          <li><a href="../things_to_do.html">Things to Do in Cozumel</a></li>
		          <li><a href="../how_to_get.html">How to Get in Cozumel</a></li>
		          <li><a href="ads_form/free_ads_form.php">Free Ads Form</a></li>
	            </ul>
	          </li>
		      <li class="widget-container">
		        <h2>Advertisers</h2>
		        <ul>
		          <li><a href="../restaurant_albertos.html">Albertos Beach bar Restaurant</a></li>
		          <li><a href="../restaurant_camilos.html">Camilo's Sea Food</a></li>
		          <li><a href="../real_state_cozumel_capital.html">Cozumel Capital</a></li>
		          <li><a href="../health_cozumel_red_cross.html">Cozumel Red Cross</a></li>
		          <li><a href="../jewelry_dejavu.html">Deja Vu Leather &amp; Jewelry</a></li>
		          <li><a href="../restaurants_el_coffee.html">El Coffee Cozumel</a></li>
		          <li><a href="../restaurants_especias.html">Especias</a></li>
		          <li><a href="../art_galeria_azul.html">Galería Azul</a></li>
		          <li><a href="../agency_gecko_creativo.html">Gecko Creativo</a></li>
		          <li><a href="../restaurant_guidos.html">Guidos Restaurant</a></li>
		          <li><a href="../restaurants_kelleys.html">Kelleys Sport Bar &amp; Grill</a></li>
		          <li><a href="../restaurants_la_lobsteria.html">La Lobsteria</a></li>
		          <li><a href="../activities_mi_mexico_lindo.html">Mi México Lindo</a></li>
		          <li><a href="../restaurant_ohana.html">Ohana café &amp; Bar</a></li>
		          <li><a href="../restaurant_punta_morena.html">Punta Morena restaurant</a></li>
		          <li><a href="../activities_safetours.html">Safe Tours Cozumel</a></li>
		          <li><a href="../restaurant_taco_rock.html">Taco Rock</a></li>
		          <li><a href="../art_tattoo.html">Tattoo</a></li>
		          <li><a href="../activities_visiting_cozumel.html">Visiting Cozumel</a></li>
	            </ul>
	          </li>
		      <h2>Contact Us</h2>
		      <a href="contact.html"><img src="../images/bannercontact.jpg" alt="Contact Information" width="230" height="199" border="0" /></a> <br />
		      <br />
		      <li class="widget-container banner">
		        <h2>Weather in Cozumel</h2>
		        <div id="cont_4c14c0235d110b2cfb2b5a217d79be56"> <span id="h_4c14c0235d110b2cfb2b5a217d79be56"><a id="a_4c14c0235d110b2cfb2b5a217d79be56" href="http://www.yourweather.co.uk/" target="_blank" style="color:#656565;font-family:1;font-size:14px;"></a></span>
		          <script type="text/javascript" src="http://www.yourweather.co.uk/wid_loader/4c14c0235d110b2cfb2b5a217d79be56"></script>
	            </div>
	          </li>
		      <li class="widget-container">
		        <h2>Facebook Site</h2>
		        <div class="fb-like-box" data-href="http://www.facebook.com/pages/Safe-Map-Cozumel/107544306025205" data-width="220" data-show-faces="true" data-border-color="#eee" data-stream="true" data-header="false"></div>
	          </li>
	        </ul>
	      </div>
		  <div id="content">
        		
<h2>Fill out the form below with your business information. We will post as soon as possible. Thank you for your confidence</h2>
                <br />
                <br />
                <form id="contact-form" name="contact-form" method="post" action="submit2.php">
                          <table width="100%" border="0" cellspacing="0" cellpadding="5" class="formborde">
                            <tr>
                              <td><label for="subject">Category</label></td>
                              <td><select name="subject" id="subject">
                                <option value="" selected="selected">Select a category</option>
                                <option value="Beach Hotels">Beach Hotels</option>
                                <option value="Downtown Hotels">Downtown Hotels</option>
                                <option value="Bed & Breakfast">Bed & Breakfast</option>
                                <option value="Houses for Rent">Houses for Rent</option>
                                <option value="Properties for Sale">Properties for Sale</option>
                                <option value="Beach Clubs">Beach Clubs</option>
                                <option value="Restaurants">Restaurants</option>
                                <option value="Coffee Shops">Coffee Shops</option>
                                <option value="Bars & Clubs">Bars & Clubs</option>
                                <option value="Car & Scooter rentals">Car & Scooter rentals</option>
                                <option value="Medical & Health Services">Medical & Health Services</option>
                                <option value="Handcrafts & Boutique">Handcrafts & Boutique</option>
                                <option value="Jewelry & Silver Stores">Jewelry & Silver Stores</option>
                                <option value="Non-Profit Organization">Non-Profit Organization</option>
                                <option value="Financial Club">Financial Club</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Others">Others</option>
                              </select>          
                              </td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                              <td ><label for="name">Business Name</label></td>
                              <td ><input name="name" type="text" class="validate[required,custom[onlyLetter]]" id="name" value="<?=$_SESSION['post']['name']?>" maxlength="25" /></td>
                              <td id="errOffset">&nbsp;</td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                              <td valign="top"><label for="message">Address</label></td>
                              <!--<td><textarea name="message" id="message" class="validate[required]" cols="20" rows="5"><?=$_SESSION['post']['message']?></textarea></td>-->
                              <td ><input name="message" type="text" class="validate[required]" id="message" value="<?=$_SESSION['post']['message']?>" maxlength="35" /></td>
                              <td valign="top">&nbsp;</td>
                            </tr>
                            
                            <tr><td>&nbsp;</td></tr>
                            
                            <tr>
                              <td><label for="num">Phone</label></td>
                              <td><input name="num" type="text" class="validate[required,custom[onlyNumber]]" id="num" value="<?=$_SESSION['post']['num']?>" maxlength="15" /></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                              <td><label for="email">Email</label></td>
                              <td><input name="email" type="text" class="validate[required,custom[email]]" id="email" value="<?=$_SESSION['post']['email']?>" maxlength="60" /></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            
                            
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                              <td valign="top">&nbsp;</td>
                              <td colspan="2"><input type="submit" name="button" id="button" value="SEND NOW" class="input-submit button-grey" /> 
                              
                              
                              <?=$str?> <img id="loading" src="../../img/loader.gif" width="16" height="16" alt="loading" /></td>
                            </tr>
                          </table>
                          </form>
                          <?=$success?>
                
                <br />
                <hr />
                <p style="text-align:justify"><b><blockquote>
                	The ads will be validated and published as soon as possible.<br />
                    Publish your ad in this section is FREE. <br />
                    We will notify you by email the publication of his business.
                </blockquote></b></p>
                
                <p>
             	<hr />
                        
                <h2 class="posttitle">Social Media</h2>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style ">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                <a class="addthis_counter addthis_pill_style"></a>
                </div>
          		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ec404b85b9c4481"></script>
                <!-- AddThis Button END -->
             </p>         
             
            </div>
            
		</div>
		<div id="frame-footer">
		  <div id="footer">
		    <div id="copyright"> Copyright &copy;2011 SafeMap Cozumel. All rights reserved. | Developed by <a href="http://www.geckocreativo.com" title="Gecko Creativo" target="_blank">Gecko Creativo &reg;</a></div>
		    <ul class="social">
		      <a href="../issues.html">Issues</a> - <a href="../faqs.html">Faq's</a> - <a href="../legal.html">Terms Of Use</a> - <a href="../contact.html">Contact Us</a>
	        </ul>
	      </div>
	  </div>
		<div class="clear"></div>
	</div>
</div>
<div align="center">
  <table border="0" width="1000px" >
    <tr>
      <td width="200"><strong>Navigation</strong></td>
      <td width="200"><strong>Tourist Information</strong></td>
      <td width="200"><strong>Social Media</strong></td>
      <td colspan="2"><strong>Advertisers</strong><strong></strong></td>
    </tr>
    <tr>
      <td valign="top"><ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="../tourist_information.html">Tourist Information</a></li>
        <li><a href="../issues.html">Issues</a></li>
        <li><a href="../advertisers.html">Advertisers</a></li>
        <li><a href="../about_safemap.html">About Us</a></li>
        <li><a href="../faqs.html">Faq's</a></li>
        <li><a href="../contact.html">Contact Us</a></li>
      </ul></td>
      <td valign="top"><ul>
        <li><a href="../about_cozumel.html">About Cozumel</a></li>
        <li><a href="../where_to_stay.html">Where to Stay</a></li>
        <li><a href="../things_to_do.html">Things to Do</a></li>
        <li><a href="../how_to_get.html">How to Get</a></li>
        <li><a href="ads_form/free_ads_form.php">Free Ads Form</a></li>
      </ul></td>
      <td valign="top"><a href="http://www.facebook.com/pages/Safe-Map-Cozumel/107544306025205?sk=app_4949752878" target="_blank"><img src="../images/icons/facebook.png" width="34" height="34" alt="Facebook" /></a> <a href="http://twitter.com/#!/safemapcozumel" target="_blank"><img src="../images/icons/twitter.png" width="34" height="34" alt="Twitter" /></a> <a href="https://plus.google.com/109828269179482231700/posts" target="_blank"><img src="../images/icons/gplus.png" width="33" height="33" alt="Google Plus" /></a> <a href="http://www.youtube.com/safemapcozumel" target="_blank"><img src="../images/icons/youtube.png" width="34" height="34" alt="Youtube" /></a></td>
      <td width="200" valign="top"><li><a href="restaurant_albertos.html">Albertos Beach bar Restaurant</a></li>
        <li><a href="../health_blissdayspa.html">BlissdaySpa</a></li>
        <li><a href="../restaurant_buccanos.html">Buccanos Bar &amp; Grill</a></li>
        <li><a href="../restaurant_camilos.html">Camilo's Sea Food</a></li>
        <li><a href="../health_cruz_roja_mexicana.html">Cruz Roja Mexicana</a></li>
        <li><a href="../jewelry_dejavu.html">Deja Vu Leather &amp; Jewelry</a></li>
        <li><a href="../activities_donny_xtreme.html">Donny Xtreme Boarding</a></li>
        <li><a href="../activities_ecoparque_cuzam.html">Ecoparque Cuzam</a></li>
        <li><a href="../restaurants_el_coffee.html">El Coffee Cozumel</a></li>
        <li><a href="../agency_gecko_creativo.html">Gecko Creativo</a></li></td>
      <td width="200" valign="top"><li><a href="../restaurant_guidos.html">Guidos Restaurant</a></li>
        <li><a href="../restaurants_kelleys.html">Kelleys Sport Bar and Grill</a></li>
        <li><a href="../restaurant_mama_linda.html">Mama Linda Restaurant &amp; Bar</a></li>
        <li><a href="../restaurant_ohana.html">Ohana café &amp; Bar</a></li>
        <li><a href="../restaurant_paprika_bar.html">Paprika Mexican &amp; Caribbean</a></li>
        <li><a href="../activities_pirate_ship.html">Pirate Ship Jean Lafitte</a></li>
        <li><a href="../restaurant_punta_morena.html">Punta Morena restaurant</a></li>
        <li><a href="../activities_safetours.html">Safe Tours Cozumel</a></li>
        <li><a href="../restaurant_taco_rock.html">Taco Rock</a></li>
        <li><a href="../activities_tequila_tres_tonios.html">Tequila Los tres Toños</a></li>
        <li><a href="restaurant_tikila_bar.html">Tikila Bar</a></li></td>
    </tr>
  </table>
  <br />
  <br />
</div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>