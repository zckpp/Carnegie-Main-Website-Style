<?php if ($node->field_youtube_url) { ?>
<div class="views-field views-field-field-main-image">
    <!--<img alt="" src="<?php global $base_url; print $base_url; ?>/sites/carnegiescience.edu/files/<?php // if ($node->field_main_image) print $node->field_main_image['und'][0]['filename']; ?>" typeof="foaf:Image">-->
    <?php if ($node->field_youtube_url) print render(field_view_field('node', $node, 'field_youtube_url'));  ?>
</div>
<?php } ?>

<div class="views-field views-field-nid-1 item-content">
    <div class="row-content">
        <div class="views-field views-field-field-scientific-area item-flag">
    <div class="field-content">
        <div class="">
            <a href="<?php global $base_url; print $base_url; ?>/node/<?php print $node->nid; ?>">Featured Video</a>
        </div>
    </div>
</div>
        <div class="views-field views-field-title">
            <a href="<?php global $base_url; print $base_url; ?>/node/<?php print $node->nid; ?>"><?php print $title; ?></a>
        </div>
        <div class="views-field views-field-body"><?php print render($content['body']);// print $small = substr(render($content['body']), 0, 100); //print $body; ?></div>
        <div class="explore-story"><a href="<?php global $base_url; print $base_url; ?>/node/<?php print $node->nid; ?>">Watch This Video</a></div>
    </div>
</div>
