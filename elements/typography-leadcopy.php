            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="typographyCopy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            <h3 id="type-copy" class="page-header secondary">Lead Copy<!--<button type="button" class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#typographyFineprint">
              Voice Guidelines
            </button>--></h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel enim vulputate, laoreet libero condimentum, blandit felis. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel enim vulputate, laoreet libero condimentum, blandit felis. Nunc tortor erat, sodales sit amet euismod a, facilisis ut ligula. Vestibulum sit amet ipsum bibendum, fringilla ligula sit amet, efficitur orci. Ut turpis magna, consequat in sem et, pharetra auctor lorem. Nulla sollicitudin sapien orci, ac egestas odio gravida sit amet. Curabitur sagittis est tincidunt, egestas enim sed, maximus lorem. Aliquam lacus dui, congue eu ligula non, placerat tristique dui. Nulla hendrerit nulla sed sollicitudin feugiat. Nullam ut dui vel mauris maximus facilisis ut et sapien.</p>
            <pre><code class="html">&lt;p class="lead"&gt;...&lt;/p&gt;</code></pre>

<h3 id="type-copy" class="page-header secondary">Lead Copy</h3>
<div role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs dsg" role="tablist">
    <li role="presentation" class="active"><a href="#Lead-CodeExample" aria-controls="Lead-CodeExample" role="tab" data-toggle="tab">Code Example</a></li>
    <li role="presentation"><a href="#Lead-VoiceGuidlines" aria-controls="Lead-VoiceGuidlines" role="tab" data-toggle="tab">Voice Guidlines</a></li>
    <li role="presentation"><a href="#Lead-SEO" aria-controls="Lead-SEO" role="tab" data-toggle="tab">SEO</a></li>
    <li role="presentation"><a href="#Lead-Mobile" aria-controls="Lead-Mobile" role="tab" data-toggle="tab">Mobile</a></li>
    <li role="presentation"><a href="#Lead-Email" aria-controls="Lead-Email" role="tab" data-toggle="tab">Email</a></li>    
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Lead-CodeExample">
     <p>Use the class <code>.fine-print</code> anytime you need to display terms and conditions, fare rules or any other disclaimer.</p>
            <pre><code class="html">&lt;p class="fine-print"&gt;...&lt;/p&gt;</code></pre>
            <div class="callout callout-blue">
            <h4>Example</h4>
            <?php include ("../sections/tandc-example.php"); ?>
            </div></div>
    <div role="tabpanel" class="tab-pane" id="Lead-VoiceGuidlines"><div class="item"><?php include ("../voice/footnotes.php"); ?></div></div>
    <div role="tabpanel" class="tab-pane" id="Lead-SEO">...</div>
    <div role="tabpanel" class="tab-pane" id="Lead-Mobile">...</div>
    <div role="tabpanel" class="tab-pane" id="Lead-Email">...</div>
  </div>
</div>