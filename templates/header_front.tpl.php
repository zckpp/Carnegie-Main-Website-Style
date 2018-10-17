<div id="page-wrapper">
  <div id="page">
    
    <header class='js-waypoint'>
      
      <div id="header" class="header <?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>">
        <div class="header-menus">
          <div class = "carnegie_container clearfix">
          <a href="#" id="pull"></a>
          <a href="/search" id="mobile-search"></a>
          <div id="mobile-menu">
                  <ul class="mobile-menu clearfix">
                        <li><a href="<?php global $base_url; print $base_url;?>/about">About</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/scientific-areas">Scientific Areas</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/scientists">Scientists</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/projects">Projects</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/events">Events</a></li>
			<li><a href="<?php global $base_url; print $base_url;?>/news">News</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/donate">DONATE</a></li>
                  </ul>
          </div>
            <?php if ($logo): ?>
            <div class="carnegie_container">
                <div class="logo">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img class="normal-logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        <img class="mobile-logo" src="<?php Global $base_url; print $base_url."/".path_to_theme(); ?>/images/small_logo.png" />
                    </a>
                </div>
            </div>
            <?php endif; ?>
          
              <div class="header-top">
              
              
              <?php if ($secondary_menu): ?>
                <div id="secondary-menu" class="navigation">
                  <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu,'attributes' => array('id' => 'secondary-menu-links','class' => array('links', 'inline', 'clearfix'),),'heading' => array('text' => t('Secondary menu'),'level' => 'h2','class' => array('element-invisible'),),)); ?>
                </div> <!-- /#secondary-menu -->
              <?php endif; ?>
              </div>
              <div class="give"><a href="/donate">DONATE</a></div>
              <div class="follow"><a href="#">Follow</a></div>
              <?php print render($page['header']); ?>
              <?php if ($main_menu): ?>
                <div id="main-menu" class="white-links navigation">
                  <?php print theme('links__system_main_menu',array('links' => $main_menu,'attributes' => array('id' => 'main-menu-links','class' => array('links', 'clearfix'),),'heading' => array('text' => t('Main menu'),'level' => 'h2','class' => array('element-invisible'),),)); ?>
                </div> <!-- /#main-menu -->
              <?php endif; ?>
              <div id="search"><?php $block = module_invoke('custom_search_blocks', 'block_view', '1'); print render($block['content']); ?></div>
              <div class="spacer" style="clear: both;"></div>
          </div>
        </div>
        
        <div id="social-bar" class="social-bar clearfix">
            <div class="front-social carnegie_container">
              <div class="social-text">
                To encourage discovery and the application of knowledge to the improvement of humankind
              </div>
              <div class="social-media">
                <a class="instagram" target="_blank" href="https://instagram.com/carnegiescience"></a>
                <a class="youtube" target="_blank" href="https://www.youtube.com/user/CarnegieInstitution/videos"></a>
                <a class="twitter" target="_blank" href="https://twitter.com/carnegiescience/"></a>
                <a class="facebook" target="_blank" href="https://www.facebook.com/carnegiescience"></a>
              </div>
            </div>
        </div>
      </div>

<!--md slider-->
        <?php $block = module_invoke('md_slider', 'block_view', 'front'); if (!empty($block['content'])) {print render($block['content']);}  ?>

        <?php
        //        homepage message function
        if ((arg(0) == 'node') && (arg(1)>0)) {
            $node = node_load(arg(1));
            $node_wrapper = entity_metadata_wrapper('node', $node);
            $switch = $node->field_homepage_message[$node->language][0]['value'];
            // Get Field values
            if (1 == $switch) {
                $text = $node_wrapper->body->value();
                $url = $node->field_links[$node->language][0]['url'];
                $title = $node->field_links[$node->language][0]['title'];
                $fieldImage = field_get_items('node', $node, 'field_main_image');
                if ($fieldImage):
                    $count = count($fieldImage);
                    $random_image = rand(0, $count - 1);
                    $imageUrl = $fieldImage[$random_image]['filename'];
                    $style = '';
                    Global $base_url;
                    $base = $base_url . "/sites/carnegiescience.edu/files/" . $imageUrl;
                endif;
            }
        }
        ?>

<!--        <p --><?php //if (1 == $switch) print 'style="display: none;"' ?><!-- style="text-align: center"><iframe allowfullscreen="yes" frameborder="0" height="366" marginheight="0" marginwidth="0" mozallowfullscreen="" scrolling="no" src="https://cdn.fora.tv/iframe/event/1317" webkitallowfullscreen="" width="650"></iframe></p>-->

<!--        hide the message if requested-->
        <div class="Message" <?php if (0 == $switch) print 'style="display: none;"' ?> >
            <div class="row">
                <div class="img col-md-3 col-sm-5 col-xs-6">
                    <?php if ($base) print '<img src="' . $base . '" />'; ?>
                </div>

                <div class="text col-md-9 col-sm-7 col-xs-6">
                    <a class="title" href=<?php print $url ?>><?php print $title ?></a>
                    <p class="text">
                        <?php print $text['value'] ?>
                    </p>
                    <div class="explore-story"><a href=<?php print $url ?>>Explore this Story</a></div>
                </div>
            </div>
        </div>


        <div class="divider">

        </div>

    </header>
    
     
    
    <section id="banner" class="home-banner clearfix">
    <div class="banner carnegie_container">
      <div class="banner-content">
        <?php print render($page['banner']); ?>
      </div>
    </div>
  </section>


<script>
    $('.follow').click(function () {
        $('#social-bar').toggle();
    })

    $('body').click(function (e) {
        var menu = $('.mobile-menu');

        if ('mobile-menu' == e.target.class || 'pull' == e.target.id) {
            e.stopPropagation();
        }

        else {
            if (menu.hasClass('is-open')) {
                menu.removeClass('is-open');
            }
        }
    });
</script>
