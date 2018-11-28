
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



    <div class="blurb">

        <!--    <div class="textWrapper">-->
        <!--        <div class="textBox">-->
        <!--            <label>Support our Science</label>-->
        <!--            <p>-->
        <!--                The Carnegie Institution for Science is home to some 65 senior researchers, postdoctoral fellows, technicians and other support staff who push the boundaries of the space, Earth and life sciences. For over 110 years this institution has supported individuals of exceptional ability and passion and given them the independence to pursue science in the entrepreneurial spirit that Andrew Carnegie saw as key to advancing the human condition.-->
        <!--            </p>-->
        <!--        </div>-->
        <!---->
        <!--    </div>-->
        <div class="support">
            <a href="#main-wrapper" id="supportL">
                <p>
                    Support Our Science
                </p>
            </a>
        </div>

    </div>

    <section id="main-wrapper" class="clearfix">
        <div id="main" class="carnegie_container clearfix">


            <?php if ($messages): ?>
                <div id="messages"><div class="section clearfix">
                        <?php print $messages; ?>
                    </div></div> <!-- /.section, /#messages -->
            <?php endif; ?>

            <?php if (($page['sidebar_left_first'])||($page['sidebar_left_second'])): ?>
                <?php $donation = false;
                if ((arg(0)=="node")&&(arg(1)>0)){
                    $node = node_load(arg(1));
                    if ($node->field_donation_content[LANGUAGE_NONE][0]['value']== "Yes")
                        $donation = true;
                }
                ?>
                <div id="sidebar-left" class="sidebar sidebar-left <?php if ($donation) print 'donation-page'; ?>">
                    <?php if ($page['sidebar_left_first']): ?>
                        <div class="sidebar-left-first">
                            <div class="mobile-submenu">
                                <a href="#"><?php print $title; ?></a>
                            </div>
                            <?php print render($page['sidebar_left_first']); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($page['sidebar_left_second']): ?>
                        <div class="sidebar-left-second">
                            <?php if ($page['sidebar_left_second']) print render($page['sidebar_left_second']); ?>
                        </div>
                    <?php endif; ?>
                </div> <!-- /.section, /#sidebar-first -->
            <?php endif; ?>

            <div id="content" class="column"><div class="section">
                    <a id="main-content"></a>

                    <!-- Start Donation Form -->
                    <div class="giving-form col-xs-12">


                        <form id="giftForm" action="/node/1828" method="post">

                            <!-- Supported Project -->

                            <div class="row">
                                <div class="one-half col-md-6" >
                                    <img style="max-width: 100%; height: auto" src="https://carnegiescience.edu/sites/default/files/donate/fund.jpg" alt="general fund">
                                </div>

                                <div class="one-half col-md-6">
                                    <span for="giftSelection">Carnegie Fund</span>
                                    <p>Donations to this category go to the institution’s greatest needs. Gifts to this fund provide us with important flexibility to support our scientists.</p>

                                    <select id="giftSelection" name="project" class="form-control input-lg" autofocus style="display: none">

                                        <option value="Carnegie Fund" selected>Carnegie Fund</option>

                                    </select>


                                    <div class="buttonWrap">

                                        <div id="giftProjects" class="form-group">
                                            <label for="giftRecurrence">Recurrence</label>
                                            <select id="giftRecurrence" name="gift_recurrence" class="form-control input-lg">
                                                <option value="One Time">One Time</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
                                            </select>
                                        </div>


                                    </div>
                                    <input class="btn btn-default btn-danger btn-lg" name="Donate Now" type="submit" alt="Donate to Carnegie Science" value="Donate Now">

                                    <!-- Recurring Options -->

                                </div>


                            </div>

                            <div class="row">
                                <div class="one-half col-md-6" >
                                    <img style="max-width: 100%; height: auto" src="https://carnegiescience.edu/sites/default/files/donate/departmentA.jpg" alt="department">
                                </div>

                                <div class="one-half col-md-6">
                                    <span for="giftSelection">Departments</span>
                                    <p>Carnegie has six departments. Donations to the individual departments go to their greatest needs.</p>

                                    <div class="buttonWrap">
                                        <label for="project">Select Department</label>
                                        <select  name="project" class="form-control input-lg">

                                            <option disabled selected>--select from below--</option>
                                            <?php
                                            $project = array(
                                                'Carnegie Academy for Science Education',
                                                'Carnegie Observatories',
                                                'Department of Embryology',
                                                'Department of Global Ecology',
                                                'Department of Plant Biology',
                                                'Department of Terrestrial Magnetism',
                                                'Geophysical Laboratory',
                                            );
                                            if ($_GET['department'] == 'case') {
                                                $select = 'Carnegie Academy for Science Education';
                                            }
                                            elseif ($_GET['department'] == 'dpb') {
                                                $select = 'Department of Plant Biology';
                                            }
                                            elseif ($_GET['department'] == 'dge') {
                                                $select = 'Department of Global Ecology';
                                            }
                                            elseif ($_GET['department'] == 'obs') {
                                                $select = 'Carnegie Observatories';
                                            }
                                            elseif ($_GET['department'] == 'gl') {
                                                $select = 'Geophysical Laboratory';
                                            }
                                            elseif ($_GET['department'] == 'emb') {
                                                $select = 'Department of Embryology';
                                            }
                                            elseif ($_GET['department'] == 'dtm') {
                                                $select = 'epartment of Terrestrial Magnetism';
                                            }
                                            foreach ($project as $value) {
                                                if ($select == $value) {
                                                    echo '<option selected = "selected" value="'.$value.'">'.$value.'</option>';
                                                }
                                                else echo '<option value="'.$value.'">'.$value.'</option>';
                                            }
                                            ?>
                                        </select>


                                        <!-- Recurring Options -->
                                        <div id="giftProjects" class="form-group">
                                            <label for="giftRecurrence">Recurrence</label>
                                            <select id="giftRecurrence" name="gift_recurrence" class="form-control input-lg">
                                                <option value="One Time">One Time</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
                                            </select>
                                        </div>

                                    </div>
                                    <input class="btn btn-default btn-danger btn-lg" name="Donate Now" type="submit" alt="Donate to Carnegie Science" value="Donate Now">

                                </div>


                            </div>

                            <div class="row">
                                <div class="one-half col-md-6" >
                                    <img style="max-width: 100%; height: auto" src="https://carnegiescience.edu/sites/default/files/donate/fellowshipA.jpg" alt="fellowship">
                                </div>

                                <div class="one-half col-md-6">
                                    <span for="giftSelection">Fellowships</span>
                                    <p>Carnegie hosts over 150 postdoctoral fellows. Donations to these fellowships help strengthen science for future generations.</p>

                                    <div class="buttonWrap">
                                        <label for="project">Select Fellowship</label>
                                        <select  name="project" class="form-control input-lg">

                                            <option disabled selected>--select from below--</option>
                                            <?php
                                            $project = array(
                                                'Marilyn Fogel Endowed Fund for Internships',
                                                'Post-Doctoral Research Fund',
                                                'Vera Rubin Fellowship'
                                            );
                                            foreach ($project as $value) {
                                                echo '<option value="'.$value.'">'.$value.'</option>';
                                            }
                                            ?>
                                        </select>


                                        <!-- Recurring Options -->
                                        <div id="giftProjects" class="form-group">
                                            <label for="giftRecurrence">Recurrence</label>
                                            <select id="giftRecurrence" name="gift_recurrence" class="form-control input-lg">
                                                <option value="One Time">One Time</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
                                            </select>
                                        </div>

                                    </div>
                                    <input class="btn btn-default btn-danger btn-lg" name="Donate Now" type="submit" alt="Donate to Carnegie Science" value="Donate Now">

                                </div>


                            </div>

                            <div class="row">
                                <div class="one-half col-md-6" >
                                    <img style="max-width: 100%; height: auto" src="https://carnegiescience.edu/sites/default/files/donate/lecture.jpg" alt="lecture">
                                </div>

                                <div class="one-half col-md-6">
                                    <span for="giftSelection">Public Lectures</span>
                                    <p>Carnegie invites the best minds in science to give engaging talks. Your support of this scientific outreach will help introduce more individuals into the wonders of discovery.</p>

                                    <div class="buttonWrap">
                                        <label for="project">Select Lecture</label>
                                        <select  name="project" class="form-control input-lg">

                                            <option disabled selected>--select from below--</option>
                                            <?php
                                            $project = array(
                                                'Astronomy Lecture Series',
                                                'Broad Branch Road Lecture Series',
                                                'Capital Science Lecture Series'
                                            );
                                            foreach ($project as $value) {
                                                echo '<option value="'.$value.'">'.$value.'</option>';
                                            }
                                            ?>
                                        </select>


                                        <!-- Recurring Options -->
                                        <div id="giftProjects" class="form-group">
                                            <label for="giftRecurrence">Recurrence</label>
                                            <select id="giftRecurrence" name="gift_recurrence" class="form-control input-lg">
                                                <option value="One Time">One Time</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
                                            </select>
                                        </div>

                                    </div>
                                    <input class="btn btn-default btn-danger btn-lg" name="Donate Now" type="submit" alt="Donate to Carnegie Science" value="Donate Now">

                                </div>

                            </div>

                            <div class="row">
                                <div class="one-half col-md-6" >
                                    <img style="max-width: 100%; height: auto" src="https://carnegiescience.edu/sites/default/files/donate/projectB.jpg" alt="project">
                                </div>

                                <div class="one-half col-md-6">
                                    <span for="giftSelection">Projects</span>
                                    <p>Carnegie scientists engage in many different projects, from exploring the distant reaches of space to the wild world of the subatomic. You can support specific projects of your interest.</p>

                                    <div class="buttonWrap">
                                        <label for="project">Select Project</label>
                                        <select  name="project" class="form-control input-lg">

                                            <option disabled selected>--select from below--</option>
                                            <?php
                                            $project = array(
                                                'BioEYES',
                                                'Carnegie Airborne Observatory',
                                                'Carnegie Astrometric Planet Search',
                                                'Earthbound Planet Search Program',
                                                'Giant Magellan Telescope Project',
                                                'Ocean Acidification Research',
                                                'Salinity and Plants',
                                                'Scientific Computing',
                                                'Visualizing Lipid Metabolism and Signaling',
                                                'Water Quality'
                                            );
                                            foreach ($project as $value) {
                                                echo '<option value="'.$value.'">'.$value.'</option>';
                                            }
                                            ?>
                                        </select>


                                        <!-- Recurring Options -->
                                        <div id="giftProjects" class="form-group">
                                            <label for="giftRecurrence">Recurrence</label>
                                            <select id="giftRecurrence" name="gift_recurrence" class="form-control input-lg">
                                                <option value="One Time">One Time</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Yearly">Yearly</option>
                                            </select>
                                        </div>

                                    </div>
                                    <input class="btn btn-default btn-danger btn-lg" name="Donate Now" type="submit" alt="Donate to Carnegie Science" value="Donate Now">

                                </div>
                            </div>



                        </form>
                    </div>



                </div></div> <!-- /.section, /#content -->

        </div></section> <!-- /#main, /#main-wrapper -->


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
