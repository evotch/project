            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="typeGeneral" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="secondary green">Voice Guidelines</h4>
      </div>
      <div class="modal-body">
        <div class="item"><?php include ("../voice/tone.php"); ?></div>
      </div>

    </div>
  </div>
</div>
            <h1 class="page-header">Typography<button type="button" class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#typeGeneral">
              Voice Guidelines
            </button></h1>
            <p>Our brand font is called <strong>Atlas</strong>. It is an elegant, modern typeface that signals professionalism and yet retains an approachable and friendly personality. This is our main typeface and should be used in all communications materials. For the web their are 2 treatments available to use, <strong>Atlas Medium</strong>, and Atlas Light.</p>
            <h6><strong>Note: Do not substitute any other typeface for our brand font.</strong></h6>
            <!-- Headings -->
            <?php include ("../elements/typography-default.php"); ?>
            <?php include ("../elements/typography-headings.php"); ?>
            <?php include ("../elements/typography-fineprint.php"); ?>
          