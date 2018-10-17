<style>
    .page-node .node {
        padding: 0;
    }
    h2 {
        display: none;
    }
    iframe {
        width: 1980px !important;
    }
</style>
<?php

    $block = module_invoke('views', 'block_view', 'digital_sginage-block');
        print render($block['content']);
?>
<script>
    window.onload = function() {
        setTimeout(function () {
            location.reload()
        }, 3600000);
    };
</script>
