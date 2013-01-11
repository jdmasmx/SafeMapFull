<div class="footer">
    <div class="strip_1">
        <div class="strip_1_radial">
            <div class="wrap">
                <div class="footer_watermark"></div>
                <div class="footer_box ">
                    <div class="footer_title_styling">
                        <h1> Quick Links </h1>
                        <div class="footer_title_underline"></div>
                    </div>
                        <!--<ul>
                            <li><a href="about.html">Issues </a></li>
                            <li><a href="blog.html">Advertisers </a></li>
                            <li><a href="contact.html">About Us</a> </li>
                            <li><a href="#">Faq's</a> </li>
                        </ul>
                        <ul>
                            <li><a href="#">Tourist Info</a></li>
                            <li><a href="#">Contact </a></li>
                            <li><a href="#">Terms of Use </a></li>
                            <li><a href="#">Free Ads Form</a> </li>
                        </ul>-->
                        <ul>
                            <li><a href="http://safemapcozumel.com/issues.php">Issues </a></li>
                            <li><a href="http://safemapcozumel.com/advertisers.php">Advertisers </a></li>
                            <li><a href="http://safemapcozumel.com/about_safemap.php">About Us</a> </li>
                            <li><a href="http://safemapcozumel.com/tourist_information.php">Tourist Info</a> </li>
                        </ul>
                        <ul>
                            <li><a href="http://safemapcozumel.com/contact.php">Contact Us</a></li>
                            
                            <li><a href="http://safemapcozumel.com/faqs.php">FAQ </a></li>
                            <!-- <li><a href="#">Legal </a></li> -->
                            <li><a href="http://safemapcozumel.com/hiring.php">Ads Form</a> </li>
                        </ul>
                    </div>
                    <div class="footer_box">
                        <div class="footer_title_styling">
                            <h1> Social Media</h1>
                            <div class="footer_title_underline"></div>
                        </div>
                        <p>
                            We are just as active on popular social sites. Don't
                            forget to follow us.
                        </p>
                        <a class="social_link" id="st" target="_blank" href="http://www.safetourscozumel.com/"></a> 
                        <a class="social_link" id="fb" target="_blank" href="http://www.facebook.com/pages/Safe-Map-Cozumel/107544306025205?sk=app_4949752878" alt="Facebook"></a>
                        <a class="social_link" id="tw" target="_blank" href="http://twitter.com/#!/safemapcozumel"></a>
                        <a class="social_link" id="rss" target="_blank" href="http://safemapcozumel.com/images/icons/gplus.png"></a> 
                        <a class="social_link" id="ytb" target="_blank" href="http://www.youtube.com/safemapcozumel"></a> 

                        
                        <!--  Place this tag where you want the +1 button to render  -->
                        <div class="google_plus">
                            <!--  Place this tag where you want the +1 button to render  -->
                            <g:plusone size="medium"></g:plusone>
                            
                            <!--  Place this render call where appropriate  -->
                            <script type="text/javascript">
                            (function() {
                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                po.src = 'https://apis.google.com/js/plusone.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                            })();
                            </script>                            
                        </div>
                        <div class="facebook_like">
                           <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.safemapcozumel.com%2F&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35&amp;appId=250104305117940" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
                       </div>
                   </div>
                   <div class="footer_box">
                    <div class="footer_title_styling">
                        <h1> Newsletter </h1>
                        <div class="footer_title_underline"></div>
                    </div>
                    <p>
                        Subscribe to our newsletter and be the first to hear
                        about latest issues and news.
                    </p>
                    <div class="news_sub">
                        <form id="contactform" method="POST" action="newsletter.php">
                            <input type="text" onblur="if(this.value=='')this.value='Your Email Address';" onclick="if(this.value=='Your Email Address')this.value='';" value="Your Email Address" name="email" id="email" />
                            <table>
                                <tr>
                                    <td><input class="primary_btn_c" type="submit" value="Send" id="send_button"/></td>
                                    <td><span id="response"></span></td>
                                </tr>
                            </table>
                            
                            
                            <!-- <div class="secondary-button">
                              <div class="secondary-button-content">
                                <a href="#">Subscribe</a>  
                                 
                             </div> 
                            
                         </div> -->
                     </form>
                 </div>
                 
             </div>



         </div>
     </div>
 </div><!-- strip_1 -->
 <div class="strip_2">
    <div class="strip_2_shadow">
        <div class="wrap">
            <!--<div class="footer-logo">Mobile App</div>-->
            <p style="color:#222;">© Copyright Safemap Cozumel - Design by <a style="color:#222;" href="http://www.geckocreativo.com" target="_blank">Gecko Creativo</a></p>
        </div>   
    </div>     
</div><!-- strip_2 -->

</div>

<script type="text/javascript">
$(document).ready(function() { 

    $("ul#restaurantes").hide();
    $("ul#health").hide();
    $("ul#activities").hide();
    $("ul#art").hide();
    $("ul#agency").hide();
    $("ul#carscooter").hide();

});
$(".category").mouseover(function(){
    var btnid = $(this).attr("id");
    if ($("ul#"+btnid+"").is(":hidden")) {
        $("ul#"+btnid+"").slideDown("slow");
    } else {
        //$("ul#"+btnid+"").hide();
        $("ul#"+btnid+"").slideUp("slow");
    }
});

</script>