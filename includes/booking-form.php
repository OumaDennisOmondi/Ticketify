
<div class="tab-pane show active" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
    <form action="flight-results-rt-out" method="POST" id="search-form">
        <div class="rt-radio-group">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ow" value="OW" name="trip-type" class="custom-control-input" >
                <label class="custom-control-label" for="ow">One-way</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="rt" value="RT" name="trip-type" class="custom-control-input" checked="checked">
                <label class="custom-control-label" for="rt">Round-trip</label>
            </div>

        </div><!-- /.radio-group -->

        <div class="rt-input-group">
            <div class="single-input  col-rt-in-3">
              <input type="text" class="form-control from has-icon" list="from-list" name="fromcode" id="fromcode" placeholder="From" required>
              <datalist id="from-list">
                <<?php foreach ($destinations as $destination) { ?>
                <option value="<?php echo $destination->code;?>">
                  <?php echo $destination->name;?>
                </option>
                  <?php } ?>
              </datalist>
              <span class="input-iconbadge"><i class="fa fa-map-marker-alt"></i></span>
            </div><!-- /.single-input -->
            <div class="single-input  col-rt-in-3">
              <input type="text" class="form-control to has-icon" list="to-list" name="tocode" id="tocode" placeholder="To" required>
              <datalist id="to-list">
                <<?php foreach ($destinations as $destination) { ?>
                <option value="<?php echo $destination->code;?>">
                  <?php echo $destination->name;?>
                </option>
                  <?php } ?>
              </datalist>
              <span class="input-iconbadge"><i class="fa fa-map-marker-alt"></i></span>
            </div><!-- /.single-input -->
            <div class="single-input  col-rt-in-3">
                <input type="text" class="form-control departure-date has-icon" name="departure_date" id="departure_date" placeholder="Depart" autocomplete="off" required>
                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
            </div><!-- /.single-input -->
            <div class="single-input  col-rt-in-3" id="rt-date">
                <input type="text" class="form-control return-date has-icon" name="return_date" id="rt-input" autocomplete="off" placeholder="Return">
                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
            </div><!-- /.single-input -->

        </div>
        <div class="rt-input-group mt-5">
            <div class="single-input  col-rt-in-3">
            <label class="text-secondary ml-4" for="adults" style="font-size: 14px;">Adults (>12 Yrs)</label>
                <input type="number" class="form-control has-icon" onchange="validateInput()" onkeyup="validateInput()" name="adults"id="adults" value="1" min="0">
                <span class="input-iconbadge pass"><i class="icofont-users"></i></span>
            </div><!-- /.single-input -->
            <div class="single-input  col-rt-in-3">
            <label class="text-secondary ml-4" style="font-size: 14px;" for="children">Children (2-11 Yrs)</label>
               <input type="number" class="form-control has-icon" name="child" value="0" id="children" min="0">
               <span class="input-iconbadge pass"><i class="icofont-kid"></i></span>
            </div>
            <div class="single-input  col-rt-in-3">
              <label class="text-secondary ml-4" style="font-size: 14px;" for="infants">Infants (< 2 Yrs)</label>
               <input type="number" onkeyup="validateInput()" onchange="validateInput()" class="form-control has-icon" name="infants" value="0" id="infants" min="0">
               <span class="input-iconbadge pass"><i class="icofont-baby"></i></span>

            </div><!-- /.single-input -->
            <div class="single-input  col-rt-in-3">
                <button id="submit" class="btn btn-lg" type="submit"><i class="icofont-search"></i> Search Flights</button>
            </div><!-- /.single-input -->
        </div><!-- /.rt-input-group -->
    </form><!-- ./ form -->
</div>
