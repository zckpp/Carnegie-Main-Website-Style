
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
                <div class="give"><a href="#main-wrapper">DONATE</a></div>
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

</header>

<div id="page-wrapper">
    <div id="page">

        <div class="donation-wrapper">

            <div class="textBox">
                <h1>Support</h1>

                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="donate" onsubmit="return validate()" id="donate">
                    <input id="cmd" name="cmd" type="hidden" value="_xclick">
                    <input name="business" type="hidden" value="donations@ciw.edu">
                    <input name="item_number" type="hidden" value="1">
                    <input name="landing_page" type="hidden" value="billing">
                    <input name="page_style" type="hidden" value="carnegieinstitution_org">
                    <input name="no_shipping" type="hidden" value="2">
                    <input name="no_note" type="hidden" value="1">
                    <input name="return" type="hidden" value="https://carnegiescience.edu/donate/thank-you">
                    <input name="cancel_return" type="hidden" value="http://carnegiescience.edu/support/giving/make_a_gift">
                    <input name="currency_code" type="hidden" value="USD">
                    <input name="tax" type="hidden" value="0">
                    <input name="bn" type="hidden" value="PP-DonationsBF">
                    <input name="src" type="hidden" value="1">
                    <input id="p3" name="p3" type="hidden" value="1">
                    <input id="a3" name="a3" type="hidden">
                    <br>
                    <div class="select">
                        <select name="item_name" id="department">
                            <option value="The Carnegie Fund" selected>Our Greatest Need</option>
                            <option value="Carnegie Academy for Science Education">Carnegie Academy for Science Education</option>
                            <option value="Carnegie Observatories">Carnegie Observatories</option>
                            <option value="Department of Embryology">Department of Embryology</option>
                            <option value="Department of Global Ecology">Department of Global Ecology</option>
                            <option value="Department of Plant Biology">Department of Plant Biology</option>
                            <option value="Department of Terrestrial Magnetism">Department of Terrestrial Magnetism</option>
                            <option value="Geophysical Laboratory">Geophysical Laboratory</option>
                        </select>
                    </div>

                    <!--donation amount-->
                    <div class="amount">
                        <input name="amount" onchange="ca.disabled = true;" type="radio" value="1000.00" id="b1000"><label for="b1000">&nbsp;$1,000</label>
                        <input name="amount" onchange="ca.disabled = true;" type="radio" value="500.00" id="b500"><label for="b500">&nbsp;$500</label>
                        <input name="amount" onchange="ca.disabled = true;" type="radio" value="250.00" id="b250"><label for="b250">&nbsp;$250</label>
                        <input name="amount" onchange="ca.disabled = true;" type="radio" value="100.00" id="b100"><label for="b100">&nbsp;$100</label>
                    <!--if custom amount checked, enable text input field-->
                        <br>
                        <input name="amount" onchange="ca = document.getElementById('custom_amount'); ca.value = ''; ca.disabled = false; ca.name = 'amount';" type="radio" id="other">
                        <label for="other">Other: $ </label>
                        <input disabled="disabled" id="custom_amount" name="amount_disabled" onchange="document.getElementById('a3').value = this.value;" required="" size="5" type="text">
                    </div>
                    <!--if recurrence, modify duration field p3: 24 for monthly and 5 for yearly-->
                    <div class="recurrence">
                        <span><input checked="checked" name="t3" type="radio" onchange="document.getElementById('p3').value = 1" id="once"><label for="once">&nbsp;One time </label></span>
                        <span><input name="t3" type="radio" value="M" onchange="document.getElementById('p3').value = 24" id="month"><label for="month">&nbsp;Monthly </label></span>
                        <span><input name="t3" type="radio" value="Y" onchange="document.getElementById('p3').value = 5" id="year"><label for="year">&nbsp;Yearly </label></span>
                    </div>
                    <p><Button class="donate-now btn" name="submit" type="submit">DONATE NOW</Button></p>
                </form>
            </div>

        </div>

    <?php if ($page['content_bottom']): ?>
        <section id ="content-bottom" class="clearfix">
            <div class="content-bottom">
                <?php print render($page['content_bottom']); ?>
            </div>
        </section>
    <?php endif; ?>

    <?php include('footer.tpl.php'); ?>
</div>
</div>




<!-- Set Gift Drop Down Choice -->
<script>

// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

var giftName = getUrlVars()["project"];
var cleanUrl = decodeURIComponent(giftName);
var giftValue = $($("#giftSelection option").val());
var urlLength = cleanUrl.length

jQuery(function( $ ) {
	if(cleanUrl.length < 1){
		$("#giftProjects")[0].selectedIndex = 0;
	} else {
		$("#giftProjects select").val(cleanUrl);
	}
	console.log(urlLength);
});

$("a#give, a#supportL").on('click',function(e) {
    var url = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(url).offset().top
    }, 1000);
    return false;
});

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
