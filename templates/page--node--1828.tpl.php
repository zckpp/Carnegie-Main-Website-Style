<?php if ($is_front) { include('header_front.tpl.php'); } else if ((arg(0)=="node")&&(arg(1)==60)) include('header_white.tpl.php');  else { include('header.tpl.php'); } ?>
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
  
        <div id="content" class="column">
          <div class="section">
            <a id="main-content"></a>

            <!-- Start Donation Form -->
            <div class="giving-form col-xs-12">

                <br>
                <h2>Step 2: Please Confirm Your Gift</h2>
                <br>
                <div class="progress">
                  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                </div>

                <?php
                /* One Time Gift with GET*/
                if ($_GET['department'] == 'case') {
                    include 'donateForms/oneTimeFormCase.php';
                /* One Time Gift with POST*/
                }else if ($_POST['gift_recurrence'] == 'One Time') {
                    include 'donateForms/oneTimeFormPost.php';
                }else if($_POST['gift_recurrence'] == 'Monthly'){
                /* Monthly Gift */
                    include 'donateForms/MonthlyForm.php';
                }else {
                    include 'donateForms/YearlyForm.php';
                }?>

            </div>


          </div>
        </div> <!-- /.section, /#content -->

        <?php if ($page['sidebar_right']): ?>
          <div id="sidebar-right" class="sidebar sidebar-right">
            <div class="section">
                <?php print render($page['sidebar_right']); ?>
            </div>
          </div> <!-- /.section, /#sidebar-second -->
        <?php endif; ?>

    </div>
  </section> <!-- /#main, /#main-wrapper -->

  <?php if ($page['content_bottom']): ?>
    <section id ="content-bottom" class="clearfix">
      <div class="content-bottom">
        <?php print render($page['content_bottom']); ?>
      </div>
    </section>
  <?php endif; ?>
  
<?php include('footer.tpl.php'); ?>


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

</script>
