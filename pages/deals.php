<?php include ("../sections/header-brand.php"); ?>
<style>
.choosecity{
  position: relative;
  top: 32px;
}
.choosecity select.selectpicker {
width: 18px;
margin: 0 0 0 10px;
}
.dealsbg {
  background-color: #b7af9b;
  height: 400px;
  width: 100%;
  margin: -24px 0 2em;
  position: relative;
  z-index: -2;
}
</style>
<div class="dealsbg img-responsive"></div>
<div class="container">
  <div class="row">

    <div class="col-xs-12 col-md-8">
    <div class="choosecity pull-right">
    <p class="small">View Deals From Other Cities 
    <select class="selectpicker pull-right">
        <option>Los Angeles</option>
        <option>San Francisco</option>
        <option>Seattle</option>
        <option>Portland</option>
      </select></p>
    
    </div>
  <h3 class="page-title">Flights from Seattle <span class="secondary gray">(SEA)</span></h3>
  <hr>
      <div class="module-fd">
         <div class="module-fd--button"><!-- Secondary Blue button --><a href="#" class="visible-xs-block pull-right">></a><!-- Desktop Blue button --><a href="#" class="btn btn-sm btn-blue pull-right hidden-xs">View Dates</a></div>
        <h4 class="module-fd--arrivalcity"><a href="#">To TMP_ARR_CITY <span class="secondary gray">(PDX)</span></a></h4>
        <div class="module-fd--priceline">
          From $<span class="module-fd--price">49</span> one way
        </div>
        <div class="module-fd--purchase-by">
          Purchase by <span class="module-fd--purchasebydate">January 12, 2015</span>
        </div>
        <div class="module-fd--restrictions-apply">
          <a href="#" onclick="showDealTerms(this);return false;">*Restrictions Apply</a>
        </div>
        <div class="module-fd--restrictions">
          Terms and Conditions text
        </div>
      </div>
      <div class="module-fd">
        <div class="module-fd--button"><!-- Secondary Blue button --><a href="#" class="visible-xs-block pull-right">></a><!-- Desktop Blue button --><button type="button" class="btn btn-sm btn-blue pull-right hidden-xs">View Dates</button></div>
        <h4>To LA/Ontario <span class="secondary gray">(ONT)</span></h4>
        <div class="module-fd--priceline">
          From $<span class="module-fd--price">129</span> one way
        </div>
        <div class="module-fd--purchase-by">
          Purchase by <span class="module-fd--purchasebydate">January 12, 2015</span>
        </div>
        <div class="module-fd--restrictions-apply">
          <a href="#">*Restrictions Apply</a>
        </div>
        <div class="module-fd--restrictions">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida eros lacus, sit amet consequat sapien laoreet sit amet. Quisque augue purus, facilisis et tellus a, porta vulputate nisl. Nam faucibus urna mi, nec sollicitudin est facilisis eget. Praesent scelerisque volutpat venenatis. Phasellus luctus sagittis eleifend. Sed vestibulum facilisis odio, nec fermentum turpis tincidunt in. Fusce bibendum cursus ante, non commodo nulla malesuada semper.
        </div>
      </div>
      <div class="module-fd">
         <div class="module-fd--button"><!-- Secondary Blue button --><a href="#" class="visible-xs-block pull-right">></a><!-- Desktop Blue button --><button type="button" class="btn btn-sm btn-blue pull-right hidden-xs">View Dates</button></div>
        <h4>To St. Louis <span class="secondary gray">(STL)</span></h4>
        <div class="module-fd--priceline">
          From $<span class="module-fd--price">159</span> one way
        </div>
        <div class="module-fd--purchase-by">
          Purchase by <span class="module-fd--purchasebydate">January 12, 2015</span>
        </div>
        <div class="module-fd--restrictions-apply">
          <a href="#">*Restrictions Apply</a>
        </div>
        <div class="module-fd--restrictions">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida eros lacus, sit amet consequat sapien laoreet sit amet. Quisque augue purus, facilisis et tellus a, porta vulputate nisl. Nam faucibus urna mi, nec sollicitudin est facilisis eget. Praesent scelerisque volutpat venenatis. Phasellus luctus sagittis eleifend. Sed vestibulum facilisis odio, nec fermentum turpis tincidunt in. Fusce bibendum cursus ante, non commodo nulla malesuada semper.
        </div>
      </div>
      <div class="module-fd">
         <div class="module-fd--button"><!-- Secondary Blue button --><a href="#" class="visible-xs-block pull-right">></a><!-- Desktop Blue button --><button type="button" class="btn btn-sm btn-blue pull-right hidden-xs">View Dates</button></div>
        <h4>To Baltimore/Washington D.C. <span class="secondary gray">(BWI)</span></h4>
        <div class="module-fd--priceline">
          From $<span class="module-fd--price">179</span> one way
        </div>
        <div class="module-fd--purchase-by">
          Purchase by <span class="module-fd--purchasebydate">January 12, 2015</span>
        </div>
        <div class="module-fd--restrictions-apply">
          <a href="#">*Restrictions Apply</a>
        </div>
        <div class="module-fd--restrictions">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida eros lacus, sit amet consequat sapien laoreet sit amet. Quisque augue purus, facilisis et tellus a, porta vulputate nisl. Nam faucibus urna mi, nec sollicitudin est facilisis eget. Praesent scelerisque volutpat venenatis. Phasellus luctus sagittis eleifend. Sed vestibulum facilisis odio, nec fermentum turpis tincidunt in. Fusce bibendum cursus ante, non commodo nulla malesuada semper.
        </div>
      </div>
      <div class="module-fd">
         <div class="module-fd--button"><!-- Secondary Blue button --><a href="#" class="visible-xs-block pull-right">></a><!-- Desktop Blue button --><button type="button" class="btn btn-sm btn-blue pull-right hidden-xs">View Dates</button></div>
        <h4>To Maui <span class="secondary gray">(OGG)</span></h4>
        <div class="module-fd--priceline">
          From $<span class="module-fd--price">289</span> one way
        </div>
        <div class="module-fd--purchase-by">
          Purchase by <span class="module-fd--purchasebydate">January 12, 2015</span>
        </div>
        <div class="module-fd--restrictions-apply">
          <a href="#">*Restrictions Apply</a>
        </div>
        <div class="module-fd--restrictions">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida eros lacus, sit amet consequat sapien laoreet sit amet. Quisque augue purus, facilisis et tellus a, porta vulputate nisl. Nam faucibus urna mi, nec sollicitudin est facilisis eget. Praesent scelerisque volutpat venenatis. Phasellus luctus sagittis eleifend. Sed vestibulum facilisis odio, nec fermentum turpis tincidunt in. Fusce bibendum cursus ante, non commodo nulla malesuada semper.
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 col-md-offset-1">
    <h4>Search Flights</h4>
    <?php include ("../forms/flightform-deals.php"); ?>
    