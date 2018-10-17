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
  
      <div id="content" class="column"><div class="section">
        <a id="main-content"></a>

		<!-- Start Donation Form -->
		<div class="giving-form">
			<form id="giftForm" action="https://www.paypal.com/cgi-bin/webscr" method="post">

				<!-- Options 1 -->
				<input id="cmd" name="cmd" type="hidden" value="_xclick" /> 
				<input id="business" name="business" type="hidden" value="donations@ciw.edu" />

				<!-- Supported Project -->
				<div id="giftProjects" class="form-group">
					<label for="giftSelection">I Want to Support...</label>
					<select id="giftSelection" name="item_name" class="form-control input-lg">
						
						<?php 
							$project = array(
								'Carnegie Fund',
								'Department of Embryology',
								'Geophysical Laboratory',
								'Department of Global Ecology',
								'The Carnegie Observatories',
								'Department of Plant Biology',
								'Department of Terrestrial Magnetism',
								'Astronomy Lecture Series',
								'BioEYES',
								'Broad Branch Road Lecture Series',
								'Capital Science Lecture Series',
								'Carnegie Academy for Science Education',
                                'Carnegie Astrometric Planet Search',
								'The Carnegie Airborne Observatory',
								'The Giant Magellan Telescope Project',
								'Ocean Acidification Research',
								'Salinity and Plants',
								'Post-Doctoral Research Fund',
								'Visualizing Lipid Metabolism and Signaling',
								'Water Quality'
							);							
							foreach ($project as $value) {
								echo '<option value="'.$value.'">'.$value.'</option>';
							}
						?>

					</select>
				</div>

				<br>

				<!-- Gift Amount -->
				<div id="giftAmount" class="form-group">
					<label for="giftAmount">Gift Amount</label>
					<span class="input-group-addon">$</span>
					<input id="giftAmount" class="form-control input-lg" name="amount" type="number" />
				</div>

				<!-- Options 2 -->
				<input id="item_number" name="item_number" type="hidden" value="1" />
				<input id="page_style" name="page_style" type="hidden" value="carnegiescience" />
				<input id="no_shipping" name="no_shipping" type="hidden" value="2" />
				<input id="no_note" name="no_note" type="hidden" value="1" />
				<input id="return" name="return" type="hidden" value="https://www.carnegiescience.edu/donate/thank-you" />
				<input id="cancel_return" name="cancel_return" type="hidden" value="https://www.carnegiescience.edu/donate" />
				<input id="currency_code" name="currency_code" type="hidden" value="USD" />
				<input id="tax" name="tax" type="hidden" value="0" />
				<input id="bn" name="bn" type="hidden" value="PP-DonationsBF" />
				<input id="src" name="src" type="hidden" value="1" />
				<input id="srt" name="srt" type="hidden" value="1" />
				<input id="p3" name="p3" type="hidden" value="5" />
				<input id="a3" name="a3" type="hidden" />
				<input name="Give Now" type="submit" alt="Donate to Carnegie Science" value="Donate Now">

			</form>

			<br><br>
			

		</div>

        
    </div></div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_right']): ?>
      <div id="sidebar-right" class="sidebar sidebar-right"><div class="section">
        <?php print render($page['sidebar_right']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></section> <!-- /#main, /#main-wrapper -->

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
