<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php $counter=0; foreach ($rows as $id => $row):
if ($counter==0){ ?>
    <div class="left-row four-blocks-row">
    <?php }
    if ($counter==1){ ?>
    <div class="right-row four-blocks-row">
    <?php } ?>
    <?php if ($counter==2){ ?>
        <div class="second-div">
    <?php } ?>
    
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php if ($counter==0){ ?>
    </div>
    <?php } ?>
    <?php if ($counter==3){ ?>
    </div></div>
    <?php } ?>
<?php $counter++; endforeach; ?>