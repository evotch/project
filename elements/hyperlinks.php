<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="hyperlinks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="secondary green">Voice Guidelines</h4>
      </div>
      <div class="modal-body">
        <div class="item"><?php include ("../voice/links.php"); ?></div>
      </div>
    </div>
  </div>
</div>

<h3 class="page-header secondary">Hyperlinks<button type="button" class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#hyperlinks">
Voice</button></h3>
<p>Anytime you are including a link in a block of text a text underline will be required.  As long as the link is inside a <code>&lt;p&gt;</code> the links will automatcally show with an underline.  If you run into a situation where you need a link, but can't wrap it a <code>&lt;p&gt;</code> and it doesn't make sense to use an arrow to indicate that it is a link&mdash;use the class <code>.underline</code></p>
<div class="callout callout-blue">
  <h4>Example</h4>
  <p>Neutra paleo Thundercats, leggings jean shorts single-origin. You probably haven't heard of <a href="">coffee slow-carb quinoa</a> PBR shabby chic umami pickled. Freegan tofu drinking vinegar trust fund salvia, typewriter Wes Anderson you probably haven't heard of them pour-over. Food truck try-hard vinyl mixtape keffiyeh, literally chia narwhal plaid.</p>
</div>
