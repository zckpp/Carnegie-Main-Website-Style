<?php $classes = "";
$data = $row->{$field->field_alias};
if ($data > 0)
    $node = node_load($data);
    if ($node->field_scientific_area){
            $classes = "flag-".$node->field_scientific_area[LANGUAGE_NONE][0]['tid'];
    }
?>
<?php if ((arg(0)=="taxonomy")&&(arg(1)=="term")&&(arg(2)>0)){
        $term = taxonomy_term_load(arg(2));
    	} else {
        	$term =taxonomy_term_load($node->field_scientific_area[LANGUAGE_NONE][0]['tid']);
        }
		?>
		<div class="flag-<?php print $term->tid ?>">
			<a href="/taxonomy/term/<?php print $term->tid; ?>"><?php print $term->name; ?></a>
		</div>