<div id="page-wrapper">
  <div id="page">
    <header class='js-waypoint'>
      <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>">
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
                        <li><a href="<?php global $base_url; print $base_url;?>/donate">Donate</a></li>
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
        
          <?php print render($page['header']); ?>
	  <div class="give"><a href="/donate">Donate</a></div>
          <?php if ($main_menu): ?>
            <div id="main-menu" class="navigation">
              <?php print theme('links__system_main_menu',array('links' => $main_menu,'attributes' => array('id' => 'main-menu-links','class' => array('links', 'clearfix'),),'heading' => array('text' => t('Main menu'),'level' => 'h2','class' => array('element-invisible'),),)); ?>
            </div> <!-- /#main-menu -->
          <?php endif; ?>
          <div id="search"><?php $block = module_invoke('custom_search_blocks', 'block_view', '1'); print render($block['content']); ?></div>
	  
          <div class="spacer" style="clear: both;"></div>
	  
	  
        </div>
      </div>
    </header>
    <?php if ((arg(0)=="node")&&(arg(1)>0))
          $node = node_load(arg(1));
//          avoid base undefined
          $base = null;
          if ($node){
          $fieldImage = field_get_items('node', $node, 'field_banner'); 
              if ($fieldImage):
                  $count= count($fieldImage);
                  $random_image=rand(0, $count-1);
                  $imageUrl = $fieldImage[$random_image]['filename'];
                  $style = '';
                  Global $base_url;
                  $base = $base_url."/sites/carnegiescience.edu/files/".$imageUrl;
              endif;
          }
        ?>
    <section id="banner" class="clearfix">
    <div class="banner <?php if ($base) print 'with-banner-image' ?>">
    <?php if ($base) { ?>
      <div class="banner-image">
        <?php if ($base) print '<img src="' . $base . '" />'; ?>
    <?php } ?>
     
    <div class="banner-slider carnegie_container">
      <div class="banner-content">
        <?php print render($page['banner']); ?>
      </div>
      <div class="banner-second">
        <div class="banner-title">
        <?php if ($title): ?>
        <h4>You Are Exploring</h4>
          <h1 class="title" id="page-title">
            <?php print $title; ?>
          </h1>
        <?php endif; ?>
        </div>
        <div class="social-media">
        <?php if ((arg(0)=="taxonomy")&&(arg(1)=="term")&&(arg(2)>0)) {
            $term = taxonomy_term_load(arg(2));
            print $result=field_view_field('taxonomy_term',$term,'description','text');
        } else { ?>
                <a class="instagram" target="_blank" href="https://instagram.com/carnegiescience"></a>
                <a class="youtube" target="_blank" href="https://www.youtube.com/user/CarnegieInstitution/videos"></a>
                <a class="twitter" target="_blank" href="https://twitter.com/carnegiescience/"></a>
                <a class="facebook" target="_blank" href="https://www.facebook.com/carnegiescience"></a>
        <?php } ?>
        </div>
        <?php if ($page['banner_second']) print render($page['banner_second']); ?>
      </div>
    </div> <?php if ($base) { ?></div><?php } ?>
    </div>
  </section>
