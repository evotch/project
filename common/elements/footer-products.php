<div class="page-header">
        <h3 class="secondary">Footer Products</h3>
      </div>
<div class="bs-docs-section">
  <p>Allow browsers to determine video or slideshow dimensions based on the width of their containing block by creating an intrinsic ratio that will properly scale on any device.</p>
  <p>Rules are directly applied to <code>&lt;iframe&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;video&gt;</code>, and <code>&lt;object&gt;</code> elements; optionally use an explicit descendant class <code>.embed-responsive-item</code> when you want to match the styling for other attributes.</p>
  <p><strong>Pro-Tip!</strong> You don't need to include <code>frameborder="0"</code> in your <code>&lt;iframe&gt;</code>as we override that for you.</p>
  <div class="bs-example">
    <footer class="footer-products">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 text-center">
                <span class=" icon icon-email-envelope"></span>
                <h4 class="secondary">Email Deals</h4>
                <p>The best flight deals in your inbox every week</p>
                <a class="btn-link" href="//www.alaskaair.com/www2/ssl/myalaskaair/myalaskaair.aspx?CurrentForm=UCNewsletterSignupStart&lid=footer:emailDeals&INT-_AS_NAV_-prodID:EmailDeals" aria-describedby="descEmailDeals">Sign Up Now &rsaquo;</a>
<div id="descEmailDeals" class="sr-only">for email flight deals</div>
            </div>
            <div class="col-sm-6 col-md-3 text-center">
                <span class=" icon icon-chat-bubble-two"></span>
                <h4 class="secondary">Alaska Listens</h4>
                <p>We want to hear about your recent trip</p>
                <a class="btn-link" href="http://survey.alaskalistens.com/#/survey1" data-omniture-tag="footer:alaskaListens" aria-describedby="descAlaskaListens">Give Feedback &rsaquo;</a>
<div id="descAlaskaListens" class="sr-only">about your recent trip</div>
            </div>
            <div class="col-sm-6 col-md-3 text-center">
                <span class=" icon icon-mobile"></span>
                <h4 class="secondary">Mobile</h4>
                <p>iPhone, Android, and Windows Phone</p>
                <a class="btn-link" href="//www.alaskaair.com/content/gifts-and-products/mobile/mobile-site-mobile-apps.aspx?lid=footer:mobile&INT-_AS_NAV_-prodID:Mobile" aria-describedby="descMobile">Get the App &rsaquo;</a>
<div id="descMobile" class="sr-only">Alaska Airlines mobile app</div>
            </div>
            <div class="col-sm-6 col-md-3 text-center">
                <span class=" icon icon-credit-card"></span>
                <h4 class="secondary">Credit Card</h4>
                <p>Earn miles for travel with every purchase</p>
                <a class="btn-link" href="//www.alaskaair.com/content/credit-card/alaska-airlines-cards?lid=footer:creditCard&INT-_AS_NAV_-prodID:AlaskaAirlinesCreditCard" aria-describedby="descCreditCard">Apply Now &rsaquo;</a>
<div id="descCreditCard" class="sr-only">for an Alaska Airlines credit card</div>
            </div>

        </div>
    </div>
</footer>

  </div><br>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- 16:9 aspect ratio --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"embed-responsive embed-responsive-16by9"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;iframe</span> <span class="na">class=</span><span class="s">"embed-responsive-item"</span> <span class="na">src=</span><span class="s">"..."</span><span class="nt">&gt;&lt;/iframe&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- 4:3 aspect ratio --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"embed-responsive embed-responsive-4by3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;iframe</span> <span class="na">class=</span><span class="s">"embed-responsive-item"</span> <span class="na">src=</span><span class="s">"..."</span><span class="nt">&gt;&lt;/iframe&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>
</div>