<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php if (!$page){ ?><h2><a href="/node/<?php print $node->nid;?>"><?php print $title; ?></a></h2><?php } ?>
  <?php if ($display_submitted): ?>

    <!-- Start Custom Submitted Date -->
    <span class="submitted">
      <?php 
      $custom_date = format_date($node->created, 'custom', 'l, F d, Y');
      print render ($custom_date); ?>
    </span>
    <!-- End Custom Submitted Date -->

  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
      
if ($node->type == "lecture"){ ?>
    <div class="event-links">
      <div class="event-link register-btn"><?php print render(field_view_field('node', $node, 'field_registration_link'), array('absolute' => TRUE)); ?></div>
      <div class="event-link field-address"><?php print render(field_view_field('node', $node, 'field_location')); ?></div>
    </div>
  
  <?php } ?>
  
  </div>

  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>
</div>