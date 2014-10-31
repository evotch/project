  <style type="text/css">
  /*makes the form fit in full screen and col-sm-4 container*/
  .col-sm-4 .col-md-2 {
    width: 50%;
  }
</style>
<h4>Search Flights</h4>
  <form action="https://www.alaskaair.com/Shopping/Flights/Shop" role="form">
    <div class="form-group">
      <div class="row">
        <div class="col-xs-12">
          <div class="checkbox">
            <label>
              <input type="checkbox"> One Way
            </label>
            <label>
              <input type="checkbox"> Use Miles
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-2">
          <label>From</label>
            <input type="text" class="form-control" id="flightDepartureAiport" placeholder="Seattle, WA">
          </div>
          <div class="col-md-2">
            <label>Date</label>
            <input type="date" class="form-control" id="flightDepartureDate">
          </div>
          <div class="col-md-2">
          <label>To</label>
            <input type="text" class="form-control" id="flightArrivalAirport" placeholder="City/Airport">
          </div>
          <div class="col-md-2">
            <label>Date</label>
            <input type="date" class="form-control" id="flightArrivalDate">
          </div>
          <div class="col-md-2">
          <label>Travelers</label>
            <select class="form-control">
              <option value="one">1</option>
              <option value="two">2</option>
              <option value="three">3</option>
              <option value="four">4</option>
              <option value="five">5</option>
              <option value="four">6</option>
              <option value="five">7</option>
            </select>
          </div>
          <div class="col-md-2">
          <label>&nbsp;</label>
            <button type="submit" class="btn btn-default btn-block">Find Flights</button>
          </div>
          <div class="col-md-2">
            <a href="#" class="">Advanced Search </a>
          </div>
        </div>
      </div>
    </div>
  </form>
  <hr>
<br>