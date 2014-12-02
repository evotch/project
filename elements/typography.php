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
<!-- Headings -->
<h5>Web Font</h5>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;link href='http://www.alaskaair.com/content/~/media/Files/fonts/atlas/atlas' rel='stylesheet' type='text/css'<span class="nt">&gt;</span></code></pre>
</div>
<h5>CSS Font Stack</h5>
<div class="highlight"><pre><code class="html"><span class="nt">font-family: Atlas, Arial, 'Helvetica Neue', Helvetica, sans-serif;</span></code></pre>
  <h6 class="secondary green">Note: Do not substitute any other typeface for our brand font. If Atlas is unavailable, arial is the preferred backup font.</h6>
  </div>
  <h5>CSS Font Weight</h5>
    <div class="highlight"><pre><code class="html"><span class="nt">font-weight:bold; /*Atlas Medium*/</span>
<span class="nt">font-weight:normal; /*Atlas Light*/</span></code></pre></div>
  <link href='/fonts/atlas.css' rel='stylesheet' type='text/css'>
    
    <?php include ("../elements/typography-copy.php"); ?>    
    <?php include ("../elements/typography-lead.php"); ?>
    <?php include ("../elements/typography-headings.php"); ?>
    <?php include ("../elements/typography-fineprint.php"); ?>