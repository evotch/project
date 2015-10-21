<?php include ("../common/sections/header.php"); ?>
<style>
pre {
max-height: 85px;
}
</style>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container">
      <div class="row">
        <div class="col-md-9">       
          <div id="carousels" class="docs-section">   
            <div class="page-header">
              <h3 class="secondary">Carousels</h3>   
            </div>
            <div class="item"><?php include ("../plugins/carousel.php"); ?></div>
          </div>

          <!--<div id="modals" class="docs-section">   
            <div class="page-header">
              <h3 class="secondary">Modals</h3>   
            </div>
            <div class="item"><?php /* include ("../plugins/modal.php");*/ ?></div>
          </div>-->
          <div id="alerts" class="docs-section">
          <div class="page-header">
              <h3 class="secondary">Alerts</h3>   
            </div>
            <?php include ("../elements/alerts.php"); ?>
          </div>
        </div>  
        <div class="col-md-3">
          

        </div><!--end col3-->
      </div><!--end row-->
    </div><!--end container-->
<?php include ("../common/sections/footer.php"); ?>