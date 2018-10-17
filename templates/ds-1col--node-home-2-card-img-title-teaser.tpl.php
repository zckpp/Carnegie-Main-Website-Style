<?php $class="";
$term_title ="";
$term_path ="";
    if ($node->field_scientific_area){
        foreach($node->field_scientific_area[LANGUAGE_NONE] as $category){
            $tid = $category['tid'];
            $class = "flag-".$tid;
            $term = taxonomy_term_load($tid); // load term object
            $term_uri = taxonomy_term_uri($term); // get array with path
            $term_title = taxonomy_term_title($term);
            $term_path = $term_uri['path'];
        }
    }
    else if ($node->field_news_category){
        foreach($node->field_news_category[LANGUAGE_NONE] as $category){
            $tid = $category['tid'];
            $class = "flag-".$tid;
            $term = taxonomy_term_load($tid); // load term object
            $term_uri = taxonomy_term_uri($term); // get array with path
            $term_title = taxonomy_term_title($term);
            $term_path = $term_uri['path'];
        }
    }
    else{
        $term_title = "News Article";
    }
//$body = field_get_items('node', $node, 'body');
//$teaser_body= $body[0]['safe_summary'];
?>
<div class="views-field views-field-field-scientific-area item-flag">
    <div class="field-content">
        <div class="<?php print $class; ?>">
            <a href="<?php print $term_path; ?>"><?php print $term_title; ?></a>
        </div>
    </div>
</div>
<?php if ($node->field_main_image) { ?>
<div class="views-field views-field-field-main-image">
    <img alt="" src="<?php global $base_url; print $base_url; ?>/sites/carnegiescience.edu/files/<?php print $node->field_main_image['und'][0]['filename']; ?>" typeof="foaf:Image">
</div>
<?php } ?>

<div class="views-field views-field-nid-1 item-content">
    <div class="row-content">
        <div class="views-field views-field-title">
            <a href="<?php global $base_url; print $base_url; ?>/node/<?php print $node->nid; ?>"><?php print $title; ?></a>
        </div>
        <div class="views-field views-field-body"><?php print render($content['body']);// print $small = substr(render($content['body']), 0, 100); //print $body; ?></div>
        <div class="explore-story"><a href="<?php global $base_url; print $base_url; ?>/node/<?php print $node->nid; ?>">Explore this Story</a></div>
    </div>
</div>
