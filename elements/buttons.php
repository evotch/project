<!-style used to format buttons on DSG-->
<script type="text/javascript">
setInterval(function(){
// toggle the class every 4 second
$('.buttons .panel-navy').toggleClass('destination-kauai');
},4000);
</script>
<style>
.buttons .btn{margin: 5px 10px 5px 0;}
@media screen and (min-width : 1224px) {
.buttons .panel-navy.well-lg {width: 44%; display: inline-block; margin-bottom: 5px;}
}
@media screen and (max-width : 1224px) {
span.panel-white.well-sm {
width: 200px;
display: inline-block;
vertical-align: -20px;
}
}
</style>
<h1 class="section-header">Buttons</h1>
<p>Use these buttons styles.  They are set to be a minimum of 44px tall at the default setting and should match input height.  Text is all caps.  In rare cases you may need different sizes.  In those cases, there are 3 size variants available, <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code>.</p>

<div role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-tabs-underline" role="tablist">
    <li role="presentation" class="active"><a href="#buttons-CodeExample" aria-controls="buttons-CodeExample" role="tab" data-toggle="tab">Examples</a></li>
    <li role="presentation"><a href="#buttons-VoiceGuidlines" aria-controls="buttons-VoiceGuidlines" role="tab" data-toggle="tab">Voice</a></li>
    <li role="presentation"><a href="#buttons-SEO" aria-controls="buttons-SEO" role="tab" data-toggle="tab">SEO</a></li>
    <li role="presentation"><a href="#buttons-Mobile" aria-controls="buttons-Mobile" role="tab" data-toggle="tab">Mobile</a></li>
    <li role="presentation"><a href="#buttons-Email" aria-controls="buttons-Email" role="tab" data-toggle="tab">Email</a></li>  
    <li role="presentation"><a href="#buttons-Kiost" aria-controls="buttons-Kiost" role="tab" data-toggle="tab">Kiosk</a></li>    
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="buttons-CodeExample">
    
<div class="buttons">
      
      <p>
      <h3 class="section-header secondary">Primary CTA</h3>
      <p>The Primary CTA only appears once on a page . If there are more CTAs use the secondary style . This CTA is always used in the specified primary CTA color . Type should be uppercase and tracked out VA +20 . The width of the Primary CTA can flex dependent upon layout, but should not have a width smaller than 200px or greater than 460px . The height of the CTA is always 50px . Hover state can increase drop
to 6px.</p>
      <button type="button" class="btn btn-primary">Continue</button>

       <pre><code class="html"><span class="c">&lt;!-- Primary Green button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-green"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Primary Green Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-green"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>
      <p>
      <h3 class="section-header secondary">Primary<small> (for use on background images or solid colors)</small></h3>
      <div class="panel-navy well-lg"><button type="button" class="btn btn-ghost-white">Primary</button><button type="button" class="btn btn-white">Primary</button></div>
      <pre><code class="html"><span class="c">&lt;!-- Primary White Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-white"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Primary White button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-white"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>
      <p>
      <h3 class="section-header secondary" id="multiple-actions">Secondary</h3>
      <p>Secondary CTAs are always shown in Atlas
Blue with a two pixel border and standard drop shadow . The width of the CTA is determined by 15px of padding on each side of the title . The height of the CTA is 34px . Corners should not be rounded on any CTAs . On touch screens, use the filled in state since there is no hover state .</p>
      <button type="button" class="btn btn-blue">View Deals</button>
      <button type="button" class="btn btn-ghost-blue">View Deals</button>
      <pre><code class="html"><span class="c">&lt;!-- Blue button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-blue"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Blue Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-blue"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>      
      </p>
      <p>
      <!-- <h3 class="section-header secondary">Tertiary</h3>
      <a class="btn-link" href="#">Learn More &rsaquo;</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-link">Learn More</button>
      <pre><code class="html"><span class="c">&lt;!-- Lowercase Link button --&gt;</span><span class="nt">&lt;a role="button" class="btn-link" href="#"&gt;Learn More &amp;raquo;&lt;/a&gt;</span>
<span class="c">&lt;!-- Uppercase Link button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>
      <h3 class="section-header secondary">Utilitarian <small>(support)</small></h3>
      <p>Use a gray button in cases where the action is an alternative and shouldn't detract from the pages primary action.</p>
      <button type="button" class="btn btn-default">Settings</button>
      
      <pre><code class="html"><span class="c">&lt;!-- Gray button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>      
      </p> -->
      <!--
      <p>
      <h3 class="section-header secondary">Utilitarian</h3>
      <button type="button" class="btn btn-gray">Utilitarian</button>
      <button type="button" class="btn btn-ghost-gray">Utilitarian</button>
      <pre><code class="html"><span class="c">&lt;!-- Utilitarian button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-gray"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Utilitarian Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-gray"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>-->
      <!-- <p>
      <h3 class="section-header secondary">Special Case Buttons <small>(Primarily used in Merchandising Ads)</small></h3>
      <p>Use sparingly and primarily to give more prominence to action in layouts with a lot of varying content or to heighten
      an important message in merchandising.</p>
      <button type="button" class="btn btn-orange">Accent</button>
      <button type="button" class="btn btn-ghost-orange">Accent</button>
      <button type="button" class="btn btn-pink">Accent</button>
      <button type="button" class="btn btn-ghost-pink">Accent</button>

      <pre><code class="html"><span class="c">&lt;!-- Accent Orange button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-orange"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Accent Orange Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-orange"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Accent Berry button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-berry"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Accent Berry Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-berry"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>      
      </p>
      <p>
      <h3 class="section-header secondary">Disabled</h3>
      <button type="button" class="btn btn-disabled">Disabled</button>
            <pre><code class="html"><span class="c">&lt;!-- Disabled button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-disabled"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>
      <h6 class="secondary green">Note: You can use a Button Tag <code>&lt;button&gt;</code>for form elements or an Anchor Tag <code>&lt;a&gt;</code>for standard links utilizing the same css class names.    </h6>
   -->
</div>
</div>
    <div role="tabpanel" class="tab-pane" id="buttons-VoiceGuidlines"><div class="item">Coming Soon!</div></div>
    <div role="tabpanel" class="tab-pane" id="buttons-SEO"><div class="item">Coming Soon!</div></div>
    <div role="tabpanel" class="tab-pane" id="buttons-Mobile"><div class="item">Coming Soon!</div></div>
    <div role="tabpanel" class="tab-pane" id="buttons-Email"><div class="item">Coming Soon!</div></div>
    <div role="tabpanel" class="tab-pane" id="buttons-Kiosk"><div class="item">Coming Soon!</div></div>    
  </div>
</div>

