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
      <div class="giving-form col-xs-12">

        <br>
        <h2>Step 2: Please Confirm Your Gift</h2>
        <br>
        <div class="progress">
          <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
        </div>


        <?php 
        /* One Time Gift */
        if ($_POST['gift_recurrence'] == 'One Time') {
        ?>
          <div class="giving-form">
            <form id="giftForm" action="https://www.paypal.com/cgi-bin/webscr" method="post">

            <!-- Confirm Values -->

              <!-- Gift Amount -->
              <div id="giftAmount" class="form-group">
                <label for="giftAmount">Gift Amount</label>
                <span class="input-group-addon">$</span>
                <input id="giftAmount" class="form-control input-lg" name="amount" type="number" value="<?php echo $_POST['amount'];?>" />
              </div>

              <div class="row">
                <!-- Supported Project -->
                <div id="giftProjects" class="form-group col-xs-6">
                  <label for="giftSelection">Selected Project</label>
                  <input id="giftSelection" name="item_name" class="form-control" value="<?php echo $_POST['project'];?>" />
                </div>          
            
                <!-- Recurrence -->
                <div id="giftProjects" class="form-group col-xs-6">
                  <label for="giftRecurrence">Recurrence</label>
                  <input id="giftRecurrence" name="gift_recurrence" class="form-control" value="<?php echo $_POST['gift_recurrence'];?>" />
                </div>
              </div>


              <div class="div-col-xs-12">
                <a class="btn btn-default btn-lg" href="givingAdd.php" role="button">Back</a>
                <input class="btn btn-default btn-danger btn-lg" name="Give Now" type="submit" alt="Donate to Carnegie Science" value="Process Gift">
              </div>


                <!-- Options -->
                <input id="cmd" name="cmd" type="hidden" value="_xclick" /> 
                <input id="business" name="business" type="hidden" value="donations@ciw.edu" />
                <input id="item_number" name="item_number" type="hidden" value="1" />
                <input id="page_style" name="page_style" type="hidden" value="carnegiescience" />
                <input id="no_shipping" name="no_shipping" type="hidden" value="2" />
                <input id="no_note" name="no_note" type="hidden" value="1" />
                <input id="return" name="return" type="hidden" value="https://www.carnegiescience.edu/donate/thank-you" />
                <input id="cancel_return" name="cancel_return" type="hidden" value="https://www.carnegiescience.edu/donate" />
                <input id="currency_code" name="currency_code" type="hidden" value="USD" />
                <input id="tax" name="tax" type="hidden" value="0" />
                <input id="bn" name="bn" type="hidden" value="PP-DonationsBF" />
                <input id="p3" name="p3" type="hidden" value="<?php echo $_POST['amount'];?>" />
                <input id="a3" name="a3" type="hidden" />


            </form>
          </div>
        <?php
        }else if($_POST['gift_recurrence'] == 'Monthly'){
        /* Monthly Gift */
        ?>
          
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

          <!-- Options 1 -->
          <input name="cmd" type="hidden" value="_s-xclick" /> 
          <input name="hosted_button_id" type="hidden" value="XB8A272HBR8YJ" />

          <!-- Confirm Values -->

            <!-- Gift Amount -->
            <div id="giftAmount" class="form-group">
              <label for="giftAmount">Gift Amount</label>
              <select name="os0" class="form-control input-lg" autofocus>
                <option value="Option 1">Option 1 : $5.00USD - monthly</option>
                <option value="Option 2">Option 2 : $10.00USD - monthly</option>
                <option value="Option 3">Option 3 : $20.00USD - monthly</option>
                <option value="Option 4">Option 4 : $50.00USD - monthly</option>
                <option value="Option 5">Option 5 : $100.00USD - monthly</option>
                <option value="Option 6">Option 6 : $200.00USD - monthly</option>
                <option value="Option 7">Option 7 : $500.00USD - monthly</option>
                <option value="Option 8">Option 8 : $1,000.00USD - monthly</option>
                <option value="Option 9">Option 9 : $2,000.00USD - monthly</option>
              </select>
            </div>

            <div class="row">
              <!-- Supported Project -->
              <div id="giftProjects" class="form-group col-xs-6">
                <label for="giftSelection">Selected Project</label>
                <input id="giftSelection" name="item_name" class="form-control" value="<?php echo $_POST['project'];?>" />
              </div>          
          
              <!-- Recurrence -->
              <div id="giftProjects" class="form-group col-xs-6">
                <label for="giftRecurrence">Recurrence</label>
                <input id="giftRecurrence" name="gift_recurrence" class="form-control" value="<?php echo $_POST['gift_recurrence'];?>" />
              </div>
            </div>

            <div class="div-col-xs-12">
              <a class="btn btn-default btn-lg" href="givingAdd.php" role="button">Back</a>
              <input class="btn btn-default btn-danger btn-lg" name="Give Now" type="submit" alt="Donate to Carnegie Science" value="Process Gift">
            </div>


              <!-- Other Options -->
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

          </form>

        <?php
        }else {
        ?>
          

          <form id="giftForm" action="https://www.paypal.com/cgi-bin/webscr" method="post">

          <!-- Options 1 -->
          <input name="cmd" type="hidden" value="_s-xclick" /> 
          <input name="hosted_button_id" type="hidden" value="EP8P6RUUK8GPA" />


          <!-- Confirm Values -->

            <!-- Gift Amount -->
            <div id="giftAmount" class="form-group">
              <label for="giftAmount">Gift Amount</label>
              <select name="os0" class="form-control input-lg" autofocus>
                <option value="Option 1">Option 1 : $20.00USD - yearly</option>
                <option value="Option 2">Option 2 : $50.00USD - yearly</option>
                <option value="Option 3">Option 3 : $100.00USD - yearly</option>
                <option value="Option 4">Option 4 : $200.00USD - yearly</option>
                <option value="Option 5">Option 5 : $500.00USD - yearly</option>
                <option value="Option 6">Option 6 : $1,000.00USD - yearly</option>
                <option value="Option 7">Option 7 : $2,000.00USD - yearly</option>
                <option value="Option 8">Option 8 : $5,000.00USD - yearly</option>
                <option value="Option 9">Option 9 : $10,000.00USD - yearly</option>
              </select>
            </div>

            
            <div class="row">
              <!-- Supported Project -->
              <div id="giftProjects" class="form-group col-xs-6">
                <label for="giftSelection">Selected Project</label>
                <input id="giftSelection" name="item_name" class="form-control" value="<?php echo $_POST['project'];?>" />
              </div>          
          
              <!-- Recurrence -->
              <div id="giftProjects" class="form-group col-xs-6">
                <label for="giftRecurrence">Recurrence</label>
                <input id="giftRecurrence" name="gift_recurrence" class="form-control" value="<?php echo $_POST['gift_recurrence'];?>" />
              </div>
            </div>


            <div class="div-col-xs-12">
              <a class="btn btn-default btn-lg" href="givingAdd.php" role="button">Back</a>
              <input class="btn btn-default btn-danger btn-lg" name="Give Now" type="submit" alt="Donate to Carnegie Science" value="Process Gift">
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

          </form>

        <?php }?>
        <form>

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
