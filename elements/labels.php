<div class="page-header">
  <h3 class="secondary">Labels</h3>
</div>
<div class="bs-example">
  <h1>Example heading <span class="label label-blue">New</span></h1>
  <h2>Example heading <span class="label label-gold">New</span></h2>
  <h3>Example heading <span class="label label-green">New</span></h3>
</div>
<div class="highlight">
<pre><code class="html"><span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span></code></pre></div>
<h4 class="secondary">Available variations</h4>
<p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>
<p>
<span class="label label-blue">Default</span>
<span class="label label-navy">Primary</span>
<span class="label label-green">Success</span>
<span class="label label-aqua">Info</span>
<span class="label label-gold">Warning</span>
<span class="label label-berry">Danger</span>
</p>
  <div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-blue"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-navy"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-green"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-aqua"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-gold"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-berry"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code></pre>
</div>
<div class="bs-callout bs-callout-info">
  <h4 class="secondary">Have tons of labels?</h4>
  <p>Rendering problems can arise when you have dozens of inline labels within a narrow container, each containing its own <code>inline-block</code> element (like an icon). The way around this is setting <code>display: inline-block;</code>. For context and an example, <a href="https://github.com/twbs/bootstrap/issues/13219">see #13219</a>.</p>
</div>