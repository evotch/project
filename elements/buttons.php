            <!-style used to format buttons on DSG-->
            <style>
            .buttons .btn{margin: 5px 10px 5px 0;}
            @media screen and (min-width : 1224px) {
            span.panel-white.well-sm {width: 300px;display: inline-block;}
            span.panel-navy.well-lg button {margin-right: 0px;}
            }
            @media screen and (max-width : 1224px) {
            span.panel-white.well-sm {
                width: 200px;
                display: inline-block;
                vertical-align: -20px;
                }
            }
            </style>
            <div class="buttons">
            <h1 class="page-header">Buttons</h1>
            <p>There are 3 sizes of buttons available to use.  We'll use the top 3 as our primary buttons along with a deemphasized button.  Below are examples of medium and small buttons along with info, warning, and danger buttons.</p>
            <p>
            <h4 class="page-header secondary">Primary</h4>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-ghost-green">Primary</button>
            <span class="panel-navy well-lg"><button type="button" class="btn btn-ghost-white">Primary</button></span><span class="panel-white well-sm">Ghost Button<br><span class="fine-print">(white on solid color background or imagery)</span></span>
            </p>
            <p>
            <h4 class="page-header secondary">Secondary</h4>
            <button type="button" class="btn btn-teal">Secondary</button>
            <button type="button" class="btn btn-ghost-teal">Secondary</button>
            <button type="button" class="btn btn-blue">Secondary</button>
            <button type="button" class="btn btn-ghost-blue">Secondary</button>
            <h4 class="page-header secondary">Secondary <small>(support)</small></h4>
            <p>Use Gray or Brown secondary buttons primarily to create visual relief in layouts saturated with color and/or
with a lot of varying content.</p>
            <button type="button" class="btn btn-default">Default</button>
            <button type="button" class="btn btn-brown">Book Now</button>
            <button type="button" class="btn btn-ghost-brown">Book Now</button>
            </p>
            <p>
            <h4 class="page-header secondary">Tertiary</h4>
            <a class="btn-link" href="#">Learn More &raquo;</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn-link" href="#">Book Now &raquo;</a>
            <button type="button" class="btn btn-link">Learn More</button>
            <button type="button" class="btn btn-link">Book Now</button>
            </p>
            <p>
            <h4 class="page-header secondary">Utilitarian</h4>
            <button type="button" class="btn btn-gray">Utilitarian</button>
            <button type="button" class="btn btn-ghost-gray">Utilitarian</button>
            </p>
             <p>
            <h4 class="page-header secondary">Accent <small>(emphasizing importance)</small></h4>
            <p>Use sparingly and primarily to give more prominence to action in layouts with alot of varying content or to heighten
an important message in merchandising.</p>
            <button type="button" class="btn btn-orange">Book Now</button>
            <button type="button" class="btn btn-ghost-orange">Book Now</button>
            <button type="button" class="btn btn-pink">Book Now</button>
            <button type="button" class="btn btn-ghost-pink">Book Now</button><br><br>
            
            </p>
            <p>
            <h4 class="page-header secondary">Disabled</h4>
            <button type="button" class="btn btn-disabled">Book Now</button>
            
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
            </div>