<?php include ("../common/sections/header.php"); ?>
<div class="container">
<div class="row">
<div class="col-md-8">
<h1 class="page-header">Accessibility</h1>

<div class="accessibility">
Set Language Attribute to english <code>lang=en</code><br>
You can use words to convey info as long as color isn't the only thing.<br>
We need labels in forms <code>&lt;label for="fname"&gt;&lt;input id="fname"&gt;</code><br>
<code>tabindex="-1"</code> this makes an element focusable with js but not by default.  Never use positive numbers.  Use <code>tabindex="0"</code> to make something tabbale.
if possible <br>
use lable instead of placeholder to describe field if possible to help sited users.<br>
send users to first error message that has a proble and use aria describy with js to describe the error message.<br>
alt tags should be around 140 characters<br>
<h3>Aria Landmarks</h3>
<p> Note: Aria only helps screen reader users</p>
<table class="table table-striped">
<caption class="h4 text-left">New HTML 5 elements and  corresponding ARIA roles</caption>
  <tbody><tr>
    <th scope="col">HTML 5</th>
    <th scope="col">ARIA Role</th>
  </tr>
  <tr>
    <td><code>&lt;header&gt;</code></td>
    <td><code>role="banner"</code></td>
  </tr>
  <tr>
    <td><code>&lt;nav&gt;</code></td>
    <td><code>role="navigation"</code></td>
  </tr>
  <tr>
    <td><code>&lt;main&gt;</code></td>
    <td><code>role="main"</code></td>
  </tr>
  <tr>
    <td><code>&lt;footer&gt;</code></td>
    <td><code>role="contentinfo"</code></td>
  </tr>
  <tr>
    <td><code>&lt;aside&gt;</code></td>
    <td><code>role="complementary"</code></td>
  </tr>
  <tr>
    <td><code>&lt;section&gt;</code></td>
    <td><code>role="region"</code> *</td>
  </tr>
  <tr>
    <td><code>&lt;article&gt;</code></td>
    <td><code>role="article"</code> *</td>
  </tr>
  <tr>
    <td><code>none</code></td>
    <td><code>role="search"</code></td>
  </tr>
  <tr>
    <td><code>&lt;form&gt;</code></td>
    <td><code>role="form"</code></td>
  </tr>
</tbody></table>
<a class="btn btn-teal" role="link" href="https://specs.webplatform.org/html-aria/webspecs/master/">More Aria Roles</a>

</div>


</div>
<div class="col-md-4">
	</div>
</div></div>

    <?php include ("../common/sections/footer.php"); ?>