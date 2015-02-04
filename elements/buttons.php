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
<h1 class="page-header">Buttons</h1>
<p>Use these buttons styles.  They are set to be a minimum of 44px tall at the default setting.  In rare cases you may need different sizes.  In those cases, there are 3 size variants available, <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code>.</p>

<div role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs dsg" role="tablist">
    <li role="presentation" class="active"><a href="#buttons-CodeExample" aria-controls="buttons-CodeExample" role="tab" data-toggle="tab">Code Example</a></li>
    <li role="presentation"><a href="#buttons-VoiceGuidlines" aria-controls="buttons-VoiceGuidlines" role="tab" data-toggle="tab">Voice Guidlines</a></li>
    <li role="presentation"><a href="#buttons-SEO" aria-controls="buttons-SEO" role="tab" data-toggle="tab">SEO</a></li>
    <li role="presentation"><a href="#buttons-Mobile" aria-controls="buttons-Mobile" role="tab" data-toggle="tab">Mobile</a></li>
    <li role="presentation"><a href="#buttons-Email" aria-controls="buttons-Email" role="tab" data-toggle="tab">Email</a></li>  
    <li role="presentation"><a href="#buttons-Kiost" aria-controls="buttons-Kiost" role="tab" data-toggle="tab">Kiosk</a></li>    
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="buttons-CodeExample">
    
<div class="buttons">
  <h6 class="secondary green">Note: You can use a Button Tag <code>&lt;button&gt;</code>for form elements or an Anchor Tag <code>&lt;a&gt;</code>for standard links utilizing the same css class names.    </h6>
      
      <p>
      <h4 class="page-header secondary">Primary</h4>
      <p>The green button is used when there is one primary action on a page.  If there are multiple "primary" actions on a page then you'll want to use secondary buttons. As a general rule you won't have more than one green button on a page.</p>
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-ghost-green">Primary</button>
       <pre><code class="html"><span class="c">&lt;!-- Primary Green button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-green"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Primary Green Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-green"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>
      <p>
      <h4 class="page-header secondary">Primary<small> (for use on background images or solid colors)</small></h4>
      <div class="panel-navy well-lg"><button type="button" class="btn btn-ghost-white">Primary</button><button type="button" class="btn btn-white">Primary</button></div>
      <pre><code class="html"><span class="c">&lt;!-- Primary White Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-white"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Primary White button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-white"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>
      <p>
      <h4 class="page-header secondary">Secondary</h4>
      <button type="button" class="btn btn-teal">Secondary</button>
      <button type="button" class="btn btn-ghost-teal">Secondary</button>
      <button type="button" class="btn btn-blue">Secondary</button>
      <button type="button" class="btn btn-ghost-blue">Secondary</button>
      <pre><code class="html"><span class="c">&lt;!-- Secondary Brown button --&gt;</span><span class="nt">&lt;a class="btn btn-teal" href="#"&gt;Book Now&lt;/a&gt;</span><span class="c">
<span class="c">&lt;!-- Secondary Teal Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-teal"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Secondary Blue button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-blue"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Secondary Blue Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-blue"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>      
      </p>
      <h4 class="page-header secondary">Secondary <small>(support)</small></h4>
      <p>Use Gray or Brown secondary buttons primarily to create visual relief in layouts saturated with color and/or
      with a lot of varying content.</p>
      <button type="button" class="btn btn-default">Secondary</button>
      <button type="button" class="btn btn-brown">Secondary</button>
      <button type="button" class="btn btn-ghost-brown">Secondary</button>
      <pre><code class="html"><span class="c">&lt;!-- Secondary Gray button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span><span class="c">&lt;!-- Secondary Brown button --&gt;</span><span class="nt">&lt;a class="btn btn-brown" href="#"&gt;Book Now&lt;/a&gt;</span>
<span class="c">&lt;!-- Secondary Brown Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-brown"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>      
      </p>
      <p>
      <h4 class="page-header secondary">Tertiary</h4>
      <a class="btn-link" href="#">Learn More &rsaquo;</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-link">Learn More</button>
      <pre><code class="html"><span class="c">&lt;!-- Lowercase Link button --&gt;</span><span class="nt">&lt;a class="btn-link" href="#"&gt;Learn More &amp;raquo;&lt;/a&gt;</span>
<span class="c">&lt;!-- Uppercase Link button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>
      <p>
      <h4 class="page-header secondary">Utilitarian</h4>
      <button type="button" class="btn btn-gray">Utilitarian</button>
      <button type="button" class="btn btn-ghost-gray">Utilitarian</button>
      <pre><code class="html"><span class="c">&lt;!-- Utilitarian button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-gray"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span>
<span class="c">&lt;!-- Utilitarian Ghost button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ghost-gray"</span><span class="nt">&gt;</span>Book Now<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>
      <p>
      <h4 class="page-header secondary">Accent <small>(emphasizing importance)</small></h4>
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
      <h4 class="page-header secondary">Disabled</h4>
      <button type="button" class="btn btn-disabled">Disabled</button>
            <pre><code class="html"><span class="c">&lt;!-- Disabled button --&gt;</span><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-disabled"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/button&gt;</span></code></pre>
      </p>
      
</div>
</div>
    <div role="tabpanel" class="tab-pane" id="buttons-VoiceGuidlines"><div class="item">Coming Soon!</div></div>
    <div role="tabpanel" class="tab-pane" id="buttons-SEO"><div class="item">Coming Soon!</div></div>
    <div role="tabpanel" class="tab-pane" id="buttons-Mobile"><div class="item">Coming Soon!</div></div>
    <div role="tabpanel" class="tab-pane" id="buttons-Email"><div class="item">Coming Soon!</div></div>
    <div role="tabpanel" class="tab-pane" id="buttons-Kiosk"><div class="item">Coming Soon!</div></div>    
  </div>
</div>

