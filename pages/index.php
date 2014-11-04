  <?php include ("../sections/header.php"); ?>
   
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
      <div class="row">
        <div class="col-md-9">
          <div id="colors" class="bs-docs-section">
            <?php include ("../elements/brand-colors.php"); ?>
          </div>
          <div class="clearfix"></div>
          <!-- TESTING FETAURES OF BOOTSTRAP -->
          <div id="buttons" class="bs-docs-section">
            <?php include ("../elements/buttons.php"); ?>
          </div>
          <div id="typography" class="bs-docs-section">
            <?php include ("../elements/typography.php"); ?>
          </div>
          <div id="callouts" class="bs-docs-section">
            <?php include ("../elements/call-outs.php"); ?>
          </div>
          <div id="alerts" class="bs-docs-section">
            <?php include ("../elements/alerts.php"); ?>
          </div>
            <div class="bs-docs-section">
  <h1 id="labels" class="page-header">Labels</h1>

  <h4>Example</h4>
  <div class="bs-example">
    <h1>Example heading <span class="label label-default">New</span></h1>
    <h2>Example heading <span class="label label-gold">New</span></h2>
    <h3>Example heading <span class="label label-green">New</span></h3>
    <h4>Example heading <span class="label label-danger">New</span></h4>
    <h5>Example heading <span class="label label-primary">New</span></h5>
    <h6>Example heading <span class="label label-info">New</span></h6>
  </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span></code></pre></div>

  <h4>Available variations</h4>
  <p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>
  <p>
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre></div>

  <div class="bs-callout bs-callout-info">
    <h4>Have tons of labels?</h4>
    <p>Rendering problems can arise when you have dozens of inline labels within a narrow container, each containing its own <code>inline-block</code> element (like an icon). The way around this is setting <code>display: inline-block;</code>. For context and an example, <a href="https://github.com/twbs/bootstrap/issues/13219">see #13219</a>.</p>
  </div>
  <div class="panel panel-default">
         <div class="panel-heading"><h4>Progress Bars</h4></div>
        <div class="panel-body">
          <div class="progress">
          <div class="progress-bar progress-bar" style="width: 35%"></div>
          </div>
          <div class="progress">
          <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <div class="progress">
          <div class="progress-bar progress-bar-warning" style="width: 80%"></div>
          </div>
          <div class="progress">
          <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
          </div>
          
        </div>
       </div>
</div>
          </div>

        <div class="col-md-3 toc" role="main">
          <div class="page-header">
            <h3>Table of Contents</h3>
          </div>
          <ul class="nav bs-docs-sidenav">
            <li><a href="#current">Done So Far</a>
            <ul class="nav">
              <li><a href="#colors">Brand Colors</a></li>
              <li><a href="#buttons">Buttons</a></li>
              <li><a href="#typography">Typography</a></li>
            </ul>
            
            <a href="#overview">Overview</a>
            <ul class="nav">
              <li><a href="#overview-doctype">HTML5 doctype</a></li>
              <li><a href="#overview-mobile">Mobile first</a></li>
              <li><a href="#overview-type-links">Typography and links</a></li>
              <li><a href="#overview-normalize">Normalize.css</a></li>
              <li><a href="#overview-container">Containers</a></li>
            </ul>
          </li>
          <li>
            <a href="#grid">Grid system</a>
            <ul class="nav">
              <li><a href="#grid-intro">Introduction</a></li>
              <li><a href="#grid-media-queries">Media queries</a></li>
              <li><a href="#grid-options">Grid options</a></li>
              <li><a href="#grid-example-basic">Ex: Stacked-to-horizontal</a></li>
              <li><a href="#grid-example-fluid">Ex: Fluid container</a></li>
              <li><a href="#grid-example-mixed">Ex: Mobile and desktops</a></li>
              <li><a href="#grid-example-mixed-complete">Ex: Mobile, tablet, desktops</a></li>
              <li><a href="#grid-example-wrapping">Ex: Column wrapping</a></li>
              <li><a href="#grid-responsive-resets">Responsive column resets</a></li>
              <li><a href="#grid-offsetting">Offsetting columns</a></li>
              <li><a href="#grid-nesting">Nesting columns</a></li>
              <li><a href="#grid-column-ordering">Column ordering</a></li>
              <li><a href="#grid-less">Less mixins and variables</a></li>
            </ul>
          </li>
          <li>
            <a href="#type">Typography</a>
            <ul class="nav">
              <li><a href="#type-headings">Headings</a></li>
              <li><a href="#type-body-copy">Body copy</a></li>
              <li><a href="#type-inline-text">Inline text elements</a></li>
              <li><a href="#type-alignment">Alignment classes</a></li>
              <li><a href="#type-transformation">Transformation classes</a></li>
              <li><a href="#type-abbreviations">Abbreviations</a></li>
              <li><a href="#type-addresses">Addresses</a></li>
              <li><a href="#type-blockquotes">Blockquotes</a></li>
              <li><a href="#type-lists">Lists</a></li>
            </ul>
          </li>
          <li>
            <a href="#code">Code</a>
            <ul class="nav">
              <li><a href="#code-inline">Inline code</a></li>
              <li><a href="#code-user-input">User input</a></li>
              <li><a href="#code-block">Blocks of code</a></li>
              <li><a href="#code-variables">Variables</a></li>
              <li><a href="#code-sample-output">Sample output</a></li>
            </ul>
          </li>
          <li>
            <a href="#tables">Tables</a>
            <ul class="nav">
              <li><a href="#tables-example">Basic example</a></li>
              <li><a href="#tables-striped">Striped rows</a></li>
              <li><a href="#tables-bordered">Bordered table</a></li>
              <li><a href="#tables-hover-rows">Hover rows</a></li>
              <li><a href="#tables-condensed">Condensed table</a></li>
              <li><a href="#tables-contextual-classes">Contextual classes</a></li>
              <li><a href="#tables-responsive">Responsive tables</a></li>
            </ul>
          </li>
          <li>
            <a href="#forms">Forms</a>
            <ul class="nav">
              <li><a href="#forms-example">Basic example</a></li>
              <li><a href="#forms-inline">Inline form</a></li>
              <li><a href="#forms-horizontal">Horizontal form</a></li>
              <li><a href="#forms-controls">Supported controls</a></li>
              <li><a href="#forms-controls-static">Static control</a></li>
              <li><a href="#forms-control-focus">Focus state</a></li>
              <li><a href="#forms-control-disabled">Disabled state</a></li>
              <li><a href="#forms-control-readonly">Readonly state</a></li>
              <li><a href="#forms-control-validation">Validation states</a></li>
              <li><a href="#forms-control-sizes">Control sizing</a></li>
              <li><a href="#forms-help-text">Help text</a></li>
            </ul>
          </li>
          <li>
            <a href="#buttons">Buttons</a>
            <ul class="nav">
              <li><a href="#buttons-options">Options</a></li>
              <li><a href="#buttons-sizes">Sizes</a></li>
              <li><a href="#buttons-active">Active state</a></li>
              <li><a href="#buttons-disabled">Disabled state</a></li>
              <li><a href="#buttons-tags">Button tags</a></li>
            </ul>
          </li>
          <li>
            <a href="#images">Images</a>
            <ul class="nav">
              <li><a href="#images-responsive">Responsive images</a></li>
              <li><a href="#images-shapes">Image shapes</a></li>
            </ul>
          </li>
          <li>
            <a href="#helper-classes">Helper classes</a>
            <ul class="nav">
              <li><a href="#helper-classes-colors">Contextual colors</a></li>
              <li><a href="#helper-classes-backgrounds">Contextual backgrounds</a></li>
              <li><a href="#helper-classes-close">Close icon</a></li>
              <li><a href="#helper-classes-carets">Carets</a></li>
              <li><a href="#helper-classes-floats">Quick floats</a></li>
              <li><a href="#helper-classes-center">Center content blocks</a></li>
              <li><a href="#helper-classes-clearfix">Clearfix</a></li>
              <li><a href="#helper-classes-show-hide">Showing and hiding content</a></li>
              <li><a href="#helper-classes-screen-readers">Screen reader content</a></li>
              <li><a href="#helper-classes-image-replacement">Image replacement</a></li>
            </ul>
          </li>
          <li>
            <a href="#responsive-utilities">Responsive utilities</a>
            <ul class="nav">
              <li><a href="#responsive-utilities-classes">Available classes</a></li>
              <li><a href="#responsive-utilities-print">Print classes</a></li>
              <li><a href="#responsive-utilities-tests">Test cases</a></li>
            </ul>
          </li>
          <li>
            <a href="#less">Using Less</a>
            <ul class="nav">
              <li><a href="#less-bootstrap">Compiling Bootstrap</a></li>
              <li><a href="#less-variables">Variables</a></li>
              <li><a href="#less-mixins-vendor">Vendor mixins</a></li>
              <li><a href="#less-mixins-utility">Utility mixins</a></li>
            </ul>
          </li>
          <li>
            <a href="#sass">Using Sass</a>
            <ul class="nav">
              <li><a href="#sass-contents">What's included</a></li>
              <li><a href="#sass-installation">Rails install</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <hr>
    <!-- /END THE FEATURETTES -->
    </div>
    <?php include ("../sections/footer.php"); ?>