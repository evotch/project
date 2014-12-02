
<p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages. For inline dismissal, use the <a href="../javascript/#alerts">alerts jQuery plugin</a>.</p>
<h5 id="alerts-examples">Examples</h5>
<p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>
<div class="bs-callout bs-callout-info">
  
  <div class="callout callout-info"><h4>No default class</h4>
    <p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.</p>
  </div>
</div>
<div class="bs-example">
  <div class="alert alert-success" role="alert">
    <strong>Well done!</strong> You successfully read this important alert message.
  </div>
  <div class="alert alert-info" role="alert">
    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
  </div>
  <div class="alert alert-warning" role="alert">
    <strong>Warning!</strong> Better check yourself, you're not looking too good.
  </div>
  <div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong> Change a few things up and try submitting again.
  </div>
</div>
<div class="highlight">
              <pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert alert-success&quot;</span> <span class="na">role=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert alert-info&quot;</span> <span class="na">role=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert alert-warning&quot;</span> <span class="na">role=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert alert-danger&quot;</span> <span class="na">role=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>
</div>
<h5 id="alerts-dismissible">Dismissible Alerts</h5>
<p>Build on any alert by adding an optional <code>.alert-dismissible</code> and close button. Be sure to use the <code>&lt;button&gt;</code> element with the <code>data-dismiss="alert"</code> data attribute to ensure proper behavior across all devices</p>
<div class="bs-example">
  <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Warning!</strong> Better check yourself, you're not looking too good.
  </div>
</div>
<div class="highlight">
                  <pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert alert-warning alert-dismissible&quot;</span> <span class="na">role=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">&quot;button&quot;</span> <span class="na">class=</span><span class="s">&quot;close&quot;</span> <span class="na">data-dismiss=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;&lt;span</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Close<span class="nt">&lt;/span&gt;&lt;/button&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre>
</div>
<h5 id="alerts-links">Links in Alerts</h5>
<p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
<div class="bs-example">
  <div class="alert alert-success" role="alert">
    <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
  </div>
  
</div>
              <div class="highlight"><pre><code class="html">
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;alert alert-success&quot;</span> <span class="na">role=</span><span class="s">&quot;alert&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;alert-link&quot;</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
</code></pre></div>