<?php include ("../sections/header.php"); ?>
<style type="text/css">.design-principles h4 {line-height: 1.75em}.progress {border-radius: 0;box-shadow: none;background: transparent;position: relative;top: -25px;}.progress-bar{box-shadow: none}</style>
<div class="progress">
    <div class="progress-bar progress-bar-plum" style="width: 2%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-berry" style="width: 2%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-orange" style="width: 2%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-gold" style="width: 2%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: 3%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-aqua" style="width: 6%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-cream" style="width: 14%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-tan" style="width: 8%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-gray-light" style="width: 3%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: 3%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-blue" style="width: 4%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-brown" style="width: 4%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-green" style="width: 12%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-teal" style="width: 12%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-white" style="width: .5%">
        <span class="sr-only"></span>
    </div>
    <div class="progress-bar progress-bar-navy" style="width: 18%">
        <span class="sr-only"></span>
    </div>
</div>
<!-- Main -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
            <h1 class="page-header">SASS</h1>
            <h3>Overview</h3>
            <p>Sass is an extension of CSS that adds power and elegance to the basic language. It allows you to use variables, nested rules, mixins, inline imports, and more, all with a fully CSS-compatible syntax. Sass helps keep large stylesheets well-organized, and get small stylesheets up and running quickly, particularly with the help of the Compass style library.</p>
            <h3>Syntax</h3>
            <p>There are two syntaxes available for Sass. The first, known as SCSS (Sassy CSS), and what we use at Alaska, is an extension of the syntax of CSS3. This means that every valid CSS3 stylesheet is a valid SCSS file with the same meaning. In addition, SCSS understands most CSS hacks and vendor-specific syntax, such as IE’s old filter syntax. This syntax is enhanced with the Sass features. Files using this syntax have the .scss extension.</p>
            <h3>Using SASS</h3>
            <p>There are a number of ways to compile SASS into CSS.   For our purposes (content team) a gui compiler like Prepros makes it extremely easy and removes the need to jump into the command line or use any hardcore dev tools.<br><a class="btn btn-green" href="https://prepros.io/">Download Prepros</a></p>
            <h3>CSS Extensions</h3>
            <p>Sass allows CSS rules to be nested within one another. The inner rule then only applies within the outer rule’s selector.</p>
            <p> For example:</p>
            <pre class="code ruby"><code class="ruby">.module p {
  color: #000;
  width: 97%;
  .redbox {
    background-color: #ff0000;
    color: #000000;
  }
}
</code></pre>
<p>Complies to:</p>
<pre class="code ruby"><code class="ruby">.main p {color: #000;width: 97%; }
.main p .redbox {background-color: #ff0000;color: #000000; }</code></pre>
<p>This helps avoid repetition of parent selectors, and makes complex CSS layouts with lots of nested selectors much simpler.</p>
            <a href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html#css_extensions">More Examples</a>
            <hr>
            
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<?php include ("../sections/footer.php"); ?>