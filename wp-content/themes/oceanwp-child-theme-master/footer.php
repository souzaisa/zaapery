<footer>
    <div class="footer-zaapery">
        <div class="logo-footer">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logobranco.png" alt="Logo zaapery">
        </div>
        <div class="menu-footer">
            <!-- Shortcode menu-->
            <?php echo do_shortcode('[menu name="Menu Footer"]'); ?>
        </div>
        <div class="icons-footer">
            <h6>Fale conosco</h6>
            <i class="fab fa-whatsapp">
                <a href="<?php the_field('link_wpp', 285); ?>"><p><?php the_field('wpp', 285); ?></p></a>
            </i>
            <i class="fas fa-envelope">
                <a href="mailto:<?php the_field('email', 285); ?>"><p><?php the_field('email', 285); ?></p></a>
            </i>
            <i class="fas fa-clipboard-check">
                <p><?php the_field('cnpj', 285); ?></p>    
            </i>
        </div>
        <div class="icons-footer">
           <h6>Redes Sociais</h6>
            <i class="fab fa-facebook-f">
                <a href="<?php the_field('link_fb', 285); ?>"><p>/zaapery</p></a>
            </i>
            <i class="fab fa-instagram">
                <a href="<?php the_field('link_insta', 285); ?>"><p>/zaapery</p></a>
            </i>
            <a class="site-seguro" href="https://www.google.com/transparencyreport/safebrowsing/diagnostic/?hl=pt-BR#url=zaapery.com.br" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/google-report.png" alt="Site Seguro"></a>

        </div>
      
    </div>
    <div class="footer-copyright">
        <div class="container center">
            <p> Desenvolvido por </p>
            <a href="http://byronsolutions.com" target="_blank" title="Site da byron.solutions">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.png" alt="Logo da byron.solutions" title="Logo da byron.solutions">
            </a>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '376940086687012',
      cookie     : true,
      xfbml      : true,
      version    : 'v8.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };
  
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</html>
