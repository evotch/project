            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="typographyFineprint" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="secondary green">Voice Guidelines</h4>
      </div>
      <div class="modal-body">
        <div class="item"><?php include ("../voice/footnotes.php"); ?></div>
      </div>

    </div>
  </div>
</div>
            <h3 id="type-fineprint">Fine Print<button type="button" class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#typographyFineprint">
              Voice Guidelines
            </button></h3>
            <p>Use the class <code>.fine-print</code> anytime you need to display terms and conditions, fare rules or any other disclaimer.</p>
            <pre><code class="html">&lt;p class="fine-print"&gt;...&lt;/p&gt;</code></pre>
            <div class="callout callout-blue">
            <h4>Example</h4>
            <?php include ("../sections/tandc-example.php"); ?>
            </div>

          