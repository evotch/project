            <h1 class="page-header">Buttons</h1>
            <p>There are 3 sizes of buttons available to use.  We'll use the top 3 as our primary buttons along with a deemphasized button.  Below are examples of medium and small buttons along with info, warning, and danger buttons.</p>
            <p>
            <button type="button" class="btn btn-default">Default</button>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-ghost-green">Green</button>
            <button type="button" class="btn btn-ghost-navy">Navy</button>
            <button type="button" class="btn btn-ghost-blue">Blue</button>
            <button type="button" class="btn btn-link">Link</button>
            </p>
        <pre><code class="html">
        <span class="c">&lt;!-- Standard button --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
        
        <span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
        
        <span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
        
        <span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
        
        <span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
        
        <span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
        
        <span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span>
        </code></pre>
            <h3 id="buttons-sizes">Sizes</h3>
            <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
            <div class="bs-example">
              <p>
              <button type="button" class="btn btn-primary btn-lg">Large button</button>
              <button type="button" class="btn btn-default btn-lg">Large button</button>
              </p>
              <p>
              <button type="button" class="btn btn-primary">Default button</button>
              <button type="button" class="btn btn-default">Default button</button>
              </p>
              <p>
              <button type="button" class="btn btn-primary btn-sm">Small button</button>
              <button type="button" class="btn btn-default btn-sm">Small button</button>
              </p>
              <p>
              <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
              <button type="button" class="btn btn-default btn-xs">Extra small button</button>
              </p>
            </div>
            <div class="highlight">
<pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span></code></pre>
            </div>