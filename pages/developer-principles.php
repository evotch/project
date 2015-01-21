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
            
            <h1 class="page-header">Front End Principles</h1>
            <h3>SMACSS Principles</h3>
            <small><em>The folling is an expert from SMACSS written by Jonothan Snook</em></small>
            <p>At the very core of SMACSS is categorization. By categorizing CSS
            rules, we begin to see patterns and can define better practices around each of these patterns.</p>
            <p>There are five types of categories:
            <ol>
                <li>Base</li>
                <li>Layout</li>
                <li>Module</li>
                <li>State</li>
                <li>Theme</li>
            </ol>
            </p>
            <p>
            We often find ourselves mixing styles across each of these categories. If we are more aware of
            what we are trying to style, we can avoid the complexity that comes from intertwining these rules.</p>
            <p>Each category has certain guidelines that apply to it. This somewhat succinct separation allows
            us to ask ourselves questions during the development process. How are we going to code things and
            why are we going to code them that way?</p>
            <p>Much of the purpose of categorizing things is to codify patterns—things that repeat themselves
            within our design. Repetition results in less code, easier maintenance, and greater consistency in
            the user experience. These are all wins. Exceptions to the rule can be advantageous but they should
            be justified.</p>
            <a class="btn btn-green" href="../docs/smacss-2012-08-21.pdf">Get SMACSS</a>
            <hr>
            <h3>Working Agreements (First Draft)</h3>
            <div class="developer-principles">
                <h4>Follow a consistent naming convention</h4>
                <p>Naming convention are beneficial for immediately understanding which category a particular style belongs to and its role within the overall scope of the
                page.</p>
                <h4>Never add CSS to HTML, JS, C#, etc.</h4>
                <p>Use a seperate class when you want to apply a set of styles to a section of content.  Then apply that class when necessary.  This helps keep our code clean and orgainized and allows someone else to quickly see what is going on.</p>
                <h4>We're not designing pages, we're designing systems of components.</h4>
                <p>This helps tweak our thinking so that we always give consideration on how else a component could be used.</p>
                <h4>Don't use IDs in selectors</h4>
                <p>IDs shouldn't be used in selectors because these rules are too tightly coupled with the HTML and have no possibility of reuse. It's much preferred to use classes in selectors and then apply a class to an element in the page.  Consitently using classes also helps give us a common naming convention.</p>
                <h4>Our code should always be reusable.</h4>
                <p>It doesn't mean we will resue it but why not plan for it.</p>
                <h4>Don’t use !important</h4>
                <p>Using <code>!important</code> overrides any cascasede rule and leads to specificity wars.  If you think you need to use it, then add a class to the component in html. The use of !important should be avoided unless you are using it in conjuction with a "state" change. Only states should have it.</p>
            </div>
            <br><br><br><br><br>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
<?php include ("../sections/footer.php"); ?>