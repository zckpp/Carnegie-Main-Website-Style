<div class="giving-form">
    <form id="giftForm" action="https://www.paypal.com/cgi-bin/webscr" method="post">

        <!-- Confirm Values -->

        <!-- Gift Amount -->
        <div id="giftAmount" class="form-group">
            <label for="giftAmount">Gift Amount</label>
            <span class="input-group-addon">$</span>
            <input id="giftAmount" class="form-control input-lg" name="amount" type="number"
                   value="<?php echo $_POST['amount']; ?>"/>
        </div>

        <div class="row">
            <!-- Supported Project -->
            <div id="giftProjects" class="form-group col-xs-6">
                <label for="giftSelection">Selected Project</label>
                <input id="giftSelection" name="item_name" class="form-control"
                       value="Carnegie Academy for Science Education"/>
            </div>

            <!-- Recurrence -->
            <div id="giftProjects" class="form-group col-xs-6">
                <label for="giftRecurrence">Recurrence</label>
                <input id="giftRecurrence" name="gift_recurrence" class="form-control"
                       value="One Time"/>
            </div>
        </div>


        <div class="div-col-xs-12">
            <a class="btn btn-default" href="/donate" role="button">Back</a>
            <input class="btn btn-default btn-danger" name="Give Now" type="submit"
                   alt="Donate to Carnegie Science" value="Process Gift">
        </div>


        <!-- Options -->
        <input id="cmd" name="cmd" type="hidden" value="_xclick"/>
        <input id="business" name="business" type="hidden" value="donations@ciw.edu"/>
        <input id="item_number" name="item_number" type="hidden" value="1"/>
        <input id="page_style" name="page_style" type="hidden" value="carnegiescience"/>
        <input id="no_shipping" name="no_shipping" type="hidden" value="2"/>
        <input id="no_note" name="no_note" type="hidden" value="1"/>
        <input id="return" name="return" type="hidden"
               value="https://www.carnegiescience.edu/donate/thank-you"/>
        <input id="cancel_return" name="cancel_return" type="hidden"
               value="https://www.carnegiescience.edu/donate"/>
        <input id="currency_code" name="currency_code" type="hidden" value="USD"/>
        <input id="tax" name="tax" type="hidden" value="0"/>
        <input id="bn" name="bn" type="hidden" value="PP-DonationsBF"/>
        <input id="p3" name="p3" type="hidden" value="<?php echo $_POST['amount']; ?>"/>
        <input id="a3" name="a3" type="hidden"/>


    </form>
</div>