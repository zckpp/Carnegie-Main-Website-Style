  <section id="footer-wrapper">
    <div class="section carnegie_container">
      <?php if ($page['footer_top']){?>
      <div class="footer-top">
        <?php print render($page['footer_top']); ?>
      </div>
      <?php } ?>
      <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
        <div id="footer-columns" class="clearfix">
            <?php print render($page['footer_first']); ?>
            <?php print render($page['footer_second']); ?>
            <?php print render($page['footer_third']); ?>
            <?php print render($page['footer_fourth']); ?>
            <?php print render($page['footer_fifth']); ?>
        </div> <!-- /#footer-columns -->
      <?php endif; ?>

  </div>
  
  <?php if ($page['footer']): ?>
          <div id="footer" class="clearfix">
            <div class="footer carnegie_container">
                <?php print render($page['footer']); ?>
                <div class="social-media">
                  <a class="instagram" target="_blank" href="https://instagram.com/carnegiescience"></a>
                  <a class="youtube" target="_blank" href="https://www.youtube.com/user/CarnegieInstitution/videos"></a>
                  <a class="twitter" target="_blank" href="https://twitter.com/carnegiescience/"></a>
                  <a class="facebook" target="_blank" href="https://www.facebook.com/carnegiescience"></a>
                </div>
                <a href="#" class="back-top"><div class="arrow"></div></a>
            </div>
          </div> <!-- /#footer -->
      <?php endif; ?>
  
  </section> <!-- /.section, /#footer-wrapper -->

<!--   <div class="stickyFooter">
      <span>Your tax-deductible contribution to Carnegie Science will be matched dollar-for-dollar when made by December 31, 2017. &nbsp;</span><a href="https://carnegiescience.edu/donate" target="_blank">&nbsp;Donate now!</a>
  </div> -->
  

</div></div> <!-- /#page, /#page-wrapper -->