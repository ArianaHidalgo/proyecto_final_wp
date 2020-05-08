<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<!--footer con iconos a redes + derechos-->
<footer class="footer"> 
        <div class="footer_icon">
            
          <div class="container my-5 py-3">
            <div class="bg-gray text-white rounded pt-4 pb-5">
              <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-3">
                        <i class="fab fa-facebook-square" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Facebook"></i>
                      </div>
                      <div class="col-3">
                        <i class="fab fa-instagram"data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Instagram"></i>
                      </div>
                      <div class="col-3">
                        <i class="fab fa-twitter" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Twitter"></i>
                      </div>
                      <div class="col-3">
                        <i class="far fa-envelope" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="mail"></i>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-3">
                        <i class="far fa-envelope" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="mail"></i>
                      </div>
                      <div class="col-3">
                        <i class="fab fa-twitter" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Twitter"></i>
                      </div>
                      <div class="col-3">
                        <i class="fab fa-instagram"data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Instagram"></i>
                      </div>
                      <div class="col-3">
                        <i class="fab fa-facebook-square" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Facebook"></i>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer_text">
            <p>Copyright © 2020 All rights Reserved. Desingn by ArianaHidalgo</p>
          </div>
        </div>    
    </footer>

<?php wp_footer(); ?>
</body>
</html>