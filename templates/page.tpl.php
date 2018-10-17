<?php if ($is_front) { include('header_front.tpl.php'); } else if ((arg(0)=="node")&&(arg(1)==60)) include('header_white.tpl.php');  else { include('header.tpl.php'); } ?>
  <section id="main-wrapper" class="clearfix">
    <div id="main" class="carnegie_container clearfix">
    
      <?php if ($messages): ?>
        <div id="messages"><div class="section clearfix">
          <?php print $messages; ?>
        </div></div> <!-- /.section, /#messages -->
      <?php endif; ?>
  
      <?php if (($page['sidebar_left_first'])||($page['sidebar_left_second'])): ?>
        <?php $donation = false; 
              if ((arg(0)=="node")&&(arg(1)>0)){
                $node = node_load(arg(1)); 
                if ($node->field_donation_content[LANGUAGE_NONE][0]['value']== "Yes") 
                  $donation = true;
              }
?>
        <div id="sidebar-left" class="sidebar sidebar-left <?php if ($donation) print 'donation-page'; ?>">
        <?php if ($page['sidebar_left_first']): ?>
          <div class="sidebar-left-first">
            <div class="mobile-submenu">
              <a href="#"><?php print $title; ?></a>
            </div>
            <?php print render($page['sidebar_left_first']); ?>
          </div>
        <?php endif; ?>
        <?php if ($page['sidebar_left_second']): ?>
          <div class="sidebar-left-second">
            <?php if ($page['sidebar_left_second']) print render($page['sidebar_left_second']); ?>
          </div>
        <?php endif; ?>
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
        <?php if ((arg(0)=="event-category")&&(arg(1)>0)){
                print '<div class="event-body">';
                  $node = node_load(arg(1));
                  print '<div class="field-title">'; print $node->title; print '</div>';
                  print render(field_view_field('node', $node, 'body')); 
                  print '<div class="explore-event-category"><span>';
                  print "Explore ";
                  print $node->title;
                  print " Events";
                print '</span></div>';
                print '</div>';
                
              }?>
               <?php if ($page['content_top']): ?>
        <div id="content-top"><div class="section clearfix">
          <?php print render($page['content_top']); ?>
        </div></div> <!-- /.section, /#messages -->
      <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php if ((arg(0)=="node")&&(arg(1)>0)){
              $node = node_load(arg(1));
              $featured = false;
              if ($node->field_donation_featured){
                $featured = true;
              }
              if ($featured){print '<div class="support-project"><a href="/donate/online?project='.$node->title.'">Support This Project</a></div>';}
        } ?>
        
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
