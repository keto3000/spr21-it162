<?php include "includes/header.php"?>
     <p>The CSS Flexible Box Module, known as Flexbox, is a layout system created by Tab Atkins, Jr. and first introduced in July, 2009.  It was designed to help web developers better organize elements in fewer CSS declarations on responsive web pages.  The flex layout form-fits based upon the viewing environment.  It allows you to place responsive elements inside a container which will be auto arranged based upon screen (device) width(en.wikipedia.org),(MDN).</p>

     <p>Flexbox has become highly popular with better than 97% global support across most major browsers (*partial support on IE 10,11).  It is currently the main layout system used for modern web pages(caniuse.com).  When older browser (IE 8, 9, etc.) support may be an issue, a simple javascript polyfill, e.g., Jonathan T. Neal's FLEXIBILITY can provide an effective solution. (Neal, JonathanT.)</p>

     <p>While Flexbox is a highly effective one-dimensional layout system used to create a row or column main axis layout
     another fast rising, powerful contender is CSS Grid which allows for two-dimensional layout control allowing for row and column positioning of elements together. In a sense, CSS Grid feels similar to using a spreadsheet table where each element's position can be defined with specificity by its "cell" location (row and column coordinates)" reminiscent of  spreadsheet software.</p>

     <p>When to use either Flexbox or Grid will depend on several considerations.  According to LogRocket.com's Leonardo Maldonado, use Flexbox when alignment of elements is crucial, and use CSS Grid for mastery of layout.  Maldonado suggests these general rules:</p>

     <p>Consider FLEXBOX when:</p>
          <ul>
               <li>You have a small design to implement</li>
               <li>You need to align elements</li>
               <li>You need a content-first design</li>
          </ul>
     </p>
     <p>CSS Grid is better when:</p>
          <ul>
               <li>You have a complex design to implement</li> 
               <li>You need to have a gap between block elements</li>
               <li>You need to overlap elements</li>
               <li>You need a layout-first design</li>

     <p>(Maldonado, Leonardo)</p>

     <p>Chris Coyier puts it this way, "Grid is mostly defined on the parent element. In Flexbox, most of the layout (beyond the very basics) happens on the children."  (Coyier, Chris)</p>

     <p>Robin Rendle also reminds that Flexbox and CSS Grid can be effectively used together when needed:</p>

     <p>“This is good to remember: Grid items can be Flex parents:”</p>
     
     <p><img src="images/both-grid-and-flex.jpg" alt="Both Grid and Flex"></p>

     <p>“And, Flex items can be grid parents:”</p>
     <p> <img src="images/grid-sub.jpg" alt="Grid Sub"></p>
     <p>(Rendle, Robin)</p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>WORKS CITED</h3>
     <dl>
          <dt>en.wikipedia.org,  "CSS Flexible Box Layout."  21 April 2021,</dt>
          <dd>https://en.wikipedia.org/wiki/CSS_Flexible_Box_Layout</dd>
     </dl>
     <dl>
          <dt>MDN contributors,  "Basic concepts of flexbox - CSS: Cascading Style Sheets: MDN." 10 May  2021,</dt>
          <dd>https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox</dd>
     </dl>
     <dl>
          <dt>Deveria, Alexis  "CSS Flexible Box Layout Module."  April 2021,</dt>
          <dd>https://caniuse.com/flexbox</dd>
     </dl>
     <dl>
          <dt>Neal, Jonathan T.  "Flexibility 2.0.1."  10 August 2018,
                </dt>
          <dd>https://github.com/jonathantneal/flexibility</dd>
     </dl> 
     <dl>
          <dt>Maldonado, Leonardo  "When to use Flexbox and when to use CSS Grid."  6 April 2020,</dt>
          <dd>https://blog.logrocket.com/flexbox-vs-css-grid</dd>
     </dl>
     <dl>
          <dt>Coyler, Chris  "Quick! What’s the Difference Between Flexbox and Grid?."  14 February 2019,</dt>
          <dd>https://css-tricks.com/snippets/css/a-guide-to-flexbox</dd>
     </dl>
     <dl>
          <dt>Rendle, Robin7“Does CSS Grid Replace Flexbox?”  31 March 2017.</dt>
          <dd>https://css-tricks.com/css-grid-replace-flexbox</dd>
     </dl>
</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php"?>
