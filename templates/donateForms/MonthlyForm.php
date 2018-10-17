
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

    <!-- Options 1 -->
    <input name="cmd" type="hidden" value="_s-xclick" />
    <input name="hosted_button_id" type="hidden" value="JKMQAR537LCV2" />

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
        <a class="btn btn-default" href="/donate" role="button">Back</a>
        <input class="btn btn-default btn-danger" name="Give Now" type="submit" alt="Donate to Carnegie Science" value="Process Gift" />
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