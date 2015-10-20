<h2 class="page-header">Typography</h2>
<p>Our brand font is called <strong>Circular</strong>. We use sentence case on all type unless inside primary, secondary, and other card based CTAs. Uppercase always uses <code>letter-spacing: 0.02em</code></p>
<div class="alert alert-warning">For V1 we will only change the font and the color.  We won't change the size of any typograpy including headlines and body copy.</div>
<!-- Headings -->
<div role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-tabs-underline" role="tablist">
    <li role="presentation" class="active"><a href="#type-CodeExample" aria-controls="type-CodeExample" role="tab" data-toggle="tab">Example</a></li>
    <li role="presentation"><a href="#type-voice" aria-controls="type-voice" role="tab" data-toggle="tab">Voice</a></li>
    <li role="presentation"><a href="#type-ada" aria-controls="type-ada" role="tab" data-toggle="tab">Accessibility</a></li>   
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="type-CodeExample">
      <h5>Web Font</h5>
<div class="highlight"><pre><code class="html"><span class="nt">Coming Soon</code></pre>
</div>
<h5>CSS Font Stack</h5>
<div class="highlight"><pre><code class="html"><span class="nt">font-family: Circular, Arial, 'Helvetica Neue', Helvetica, sans-serif;</span></code></pre>
  <h6 class="secondary green">Note: Do not substitute any other typeface for our brand font. If Circular is unavailable, arial is the preferred backup font.</h6>
  </div>
  <h5>CSS Font Weight</h5>
    <div class="highlight"><pre><code class="html"><span class="nt">font-weight:bold; /*Circular Bold*/</span>
<span class="nt">font-weight:normal; /*Circular Book*/</span></code></pre></div>
     </div>
    <div role="tabpanel" class="tab-pane" id="type-voice"><?php include ("../voice/tone.php"); ?></div>
    <div role="tabpanel" class="tab-pane" id="type-ada"><h3>ADA Accessibility</h3><p>All font that are bold and 14pt or larger must carry a contrast ratio of at least 3:1 . All font that are under 14px bold must carry a contrast ratio of 4 .5:1 .</p></div>
  </div>
</div>    
    <?php include ("../elements/typography-copy.php"); ?>    
    <?php include ("../elements/typography-leadcopy.php"); ?>
    <?php include ("../elements/typography-headings.php"); ?>
    <?php include ("../elements/typography-fineprint.php"); ?>