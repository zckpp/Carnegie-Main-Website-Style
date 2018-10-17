<header class='js-waypoint'>
    <div id="header" class="header <?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>">
        <div class="header-menus">
            <div class = "carnegie_container clearfix">
                <a href="#" id="pull"></a>
                <div id="mobile-menu">
                    <ul class="mobile-menu clearfix">
                        <li><a href="<?php global $base_url; print $base_url;?>/about">About</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/scientific-areas">Scientific Areas</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/scientists">Scientists</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/projects">Projects</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/events">Events</a></li>
                        <li><a href="<?php global $base_url; print $base_url;?>/news">News</a></li>
                    </ul>
                </div>
                <?php if ($logo): ?>
                    <div class="carnegie_container">
                        <div class="logo">
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                <img class="normal-logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
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
                <div class="give"><a href="#donate-section">DONATE</a></div>
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
    </div>
</header>


<section id="main-wrapper" class="clearfix">
    <div id="main" class="carnegie_container clearfix">


      <?php if ($messages): ?>
        <div id="messages"><div class="section clearfix">
          <?php print $messages; ?>
        </div></div> <!-- /.section, /#messages -->
      <?php endif; ?>

        <!-- #tabs -->
        <?php if ($tabs):?>
            <div class="tabs">
                <?php print render($tabs); ?>
            </div>
        <?php endif; ?>
        <!-- EOF: #tabs -->

        <div class="container">
            <div class="row" style="text-align: center">
                <h1 class="title">Erik Hauri</h1>
                <h1 class="title">(1966 - 2018)</h1>
                <img style="width: 100%; margin-bottom: 1%; max-width: 400px" src="<?php global $base_url; print $base_url;?>/sites/default/files/memorial/erik.jpg">
            </div>
        </div>

        <div class="blurb-section">
            <div class="container">
                <div class="row">
                    <p>We note with sadness the passing of Dr. Erik Hauri.  Erik personally contributed greatly to our understanding of the natural world over the 24 years he was a Staff Scientist at DTM.
                        As Director of the ion microprobe laboratory, Erik hosted and tutored a large number of visiting scientists and students who used the advanced techniques he pioneered in their research.
                        Erik requested that donations be made in his name to DTM’s Merle A. Tuve Fellowship program that provides support for scientists from around the world for short stays to work with DTM scientists.
                        We are honored to recognize Erik’s many contributions in this way and to continue his model of open sharing of the wonders of scientific discovery.
                        Unless otherwise requested, we are pleased to notify the family of Erik Hauri of your generous gift.</p>
                </div>
            </div>
        </div>

        <section id="donate-section" class="donate-section">
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <h1 class="title">Donate Amount</h1>-->
<!--                    <div class="col-md-2 col-md-offset-3">-->
<!--                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">-->
<!--                            <input type="hidden" name="cmd" value="_s-xclick">-->
<!--                            <input type="hidden" name="hosted_button_id" value="V89UB9H3DXJY4">-->
<!--                            <input type="image" src="https://carnegiescience.edu/sites/default/files/memorial/100.png" border="0" name="submit" width="150" alt="PayPal - The safer, easier way to pay online!">-->
<!--                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
<!--                        </form>-->
<!---->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">-->
<!--                            <input type="hidden" name="cmd" value="_s-xclick">-->
<!--                            <input type="hidden" name="hosted_button_id" value="V89UB9H3DXJY4">-->
<!--                            <input type="image" src="https://carnegiescience.edu/sites/default/files/memorial/250.png" border="0" name="submit" width="150" alt="PayPal - The safer, easier way to pay online!">-->
<!--                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
<!--                        </form>-->
<!--                    </div>-->
<!--                    <div class="col-md-2">-->
<!--                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" />-->
<!--                            <input name="hosted_button_id" type="hidden" value="UN3JLNQXGGFRJ" />-->
<!--                            <input alt="PayPal - The safer, easier way to pay online!" border="0" name="submit" src="https://carnegiescience.edu/sites/default/files/other.png" type="image" width="150" />-->
<!--                            <img alt="" border="0" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" />-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->

                <div style="max-width: 410px;margin: 0 auto;">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="donate" onsubmit="return validate()">
                        <input id="cmd" name="cmd" type="hidden" value="_xclick">
                        <input name="business" type="hidden" value="donations@ciw.edu">
                        <input name="item_number" type="hidden" value="1">
                        <input name="page_style" type="hidden" value="carnegieinstitution_org">
                        <input name="no_shipping" type="hidden" value="1">
                        <input name="no_note" type="hidden" value="1">
                        <input name="return" type="hidden" value="https://carnegiescience.edu/donate/thank-you">
                        <input name="cancel_return" type="hidden" value="https://carnegiescience.edu/donate">
                        <input name="currency_code" type="hidden" value="USD">
                        <input name="tax" type="hidden" value="0">
                        <input name="bn" type="hidden" value="PP-DonationsBF">
                        <input name="src" type="hidden" value="1">
                        <input name="p3" type="hidden" value="1">
                        <input id="a3" name="a3" type="hidden">
                        <input name="item_name" type="hidden" value="Erik Hauri Memorial">
                        <p>
                            <input name="amount" onchange="ca.disabled = true;" type="radio" value="250.00"><span>&nbsp;</span>$250<span>&nbsp;</span>
                            <input name="amount" onchange="ca.disabled = true;" type="radio" value="100.00"><span>&nbsp;</span>$100<span>&nbsp;</span>
                            <input name="amount" onchange="ca = document.getElementById('custom_amount'); ca.value = ''; ca.disabled = false; ca.name = 'amount';" type="radio">
                            Other: $ <input disabled="disabled" id="custom_amount" name="amount_disabled" onchange="document.getElementById('a3').value = this.value;" required="" size="5" type="text">
                        </p>
                        <p>
                            <input name="submit" type="submit" value="Make a Donation" class="btn btn-primary">
                        </p>
                    </form>

                </div>
            </div>
        </section>

    </div>
</section> <!-- /#main, /#main-wrapper -->



  
<?php include('footer.tpl.php'); ?>


<!-- Set Gift Drop Down Choice -->
<script>

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
