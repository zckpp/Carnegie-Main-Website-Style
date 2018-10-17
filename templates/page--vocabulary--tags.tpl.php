<?php include('header_white.tpl.php');?>
  
  <section id="main-wrapper" class="clearfix">
    <div id="main" class="carnegie_container clearfix">
      <?php if ($page['featured_area']){ ?>
        <div class="featured-area clearfix">
          <?php print render($page['featured_area']); ?>
        </div>
      <?php } ?>
      
      <?php if ($messages): ?>
        <div id="messages"><div class="section clearfix">
          <?php print $messages; ?>
        </div></div> <!-- /.section, /#messages -->
      <?php endif; ?>
  
      <?php if ($page['sidebar_left_first']): ?>
        <div id="sidebar-left" class="sidebar sidebar-left">
          <div class="sidebar-left-first">
            <?php print render($page['sidebar_left_first']); ?>
          </div>
          <div class="sidebar-left-second">
            <?php if ($page['sidebar_left_second']) print render($page['sidebar_left_second']); ?>
          </div>
        </div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>
  
      <div id="content" class="column"><div class="section">
        <a id="main-content"></a>
        
        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print render($tabs); ?>
          </div>
        <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>

    </div></div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_right']): ?>
      <div id="sidebar-right" class="sidebar sidebar-right"><div class="section">
        <?php print render($page['sidebar_right']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></section> <!-- /#main, /#main-wrapper -->

  <?php if ($page['content_bottom']): ?>
    <section id ="content-bottom" class="clearfix">
      <div class="content-bottom">
        <?php print render($page['content_bottom']); ?>
      </div>
    </section>
  <?php endif; ?>
  
<?php include('footer.tpl.php'); ?>
