
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
<div class="highlight">
<pre><code class="html"><span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span></code></pre></div>
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
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre>
  </div>
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