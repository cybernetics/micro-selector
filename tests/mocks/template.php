<div class="wrapper">
	<a href="#" class="inner">test</a>
</div>
<div id="divid">
	<div id="divid2" class="wrapper">
		<a href="#" class="inner">test</a>
		<div class="wrapper">
			<a href="#" class="inner">test</a>
		</div>
		<div>
			<div class="wrapper">
				<a href="#" class="inner">test</a>
			</div>
		</div>
	</div>
</div>

<b class="wrapper"></b>

<div>
	<i class="nest a1">d1<b class="flatInNest a1">d1</b>
		<b class="nest a2">d2<i class="flatInNest a2">d2</i>
			<i class="nest a3">d3<b class="flatInNest a3">d3</b>
				<b class="nest a4">d4<i class="flatInNest a4">d4</i>
					<i class="nest a5">d5<b class="flatInNest a5">d5</b>
						<b class="nest a6">d6<i class="flatInNest a6">d6</i>
						</b>
					</i>
				</b>
			</i>
		</b>
	</i>
</div>
<div>
	<b class="flatOut a1">d1
		<b class="flatInOut a1">d1</b>
	</b>
	<i class="flatOut a2">d2
		<i class="flatInOut a2">d2</i>
	</i>
	<b class="flatOut a3">d3
		<b class="flatInOut a3">d3</b>
	</b>
	<i class="flatOut a4">d4
		<i class="flatInOut a4">d4</i>
	</i>
	<b class="flatOut a5">d5
		<b class="flatInOut a5">d5</b>
	</b>
	<i class="flatOut a6">d6
		<i class="flatInOut a6">d6</i>
	</i>
</div>

<div class="contains-cheese">cheese</div>

<abbr id="abbr-id" class="some classes here">text</abbr>

<div class="head">
   <p><a href="http://www.w3.org/"><img height=48 alt=W3C src="http://www.w3.org/Icons/w3c_home" width=72></a>

   <h1 id="title">Selectors</h1>

   <h2>W3C Working Draft 15 December 2005</h2>

   <dl>

    <dt>This version:

    <dd><a href="http://www.w3.org/TR/2005/WD-css3-selectors-20051215">
                 http://www.w3.org/TR/2005/WD-css3-selectors-20051215</a>

    <dt>Latest version:

    <dd><a href="http://www.w3.org/TR/css3-selectors">
                 http://www.w3.org/TR/css3-selectors</a>

    <dt>Previous version:

    <dd><a href="http://www.w3.org/TR/2001/CR-css3-selectors-20011113">
                 http://www.w3.org/TR/2001/CR-css3-selectors-20011113</a>

    <dt><a name=editors-list></a>Editors:

    <dd class="vcard"><span class="fn">Daniel Glazman</span> (Invited Expert)</dd>

    <dd class="vcard"><a lang="tr" class="url fn" href="http://www.tantek.com/">Tantek &Ccedil;elik</a> (Invited Expert)

    <dd class="vcard"><a href="mailto:ian@hixie.ch" class="url fn">Ian Hickson</a> (<span
    class="company"><a href="http://www.google.com/">Google</a></span>)

    <dd class="vcard"><span class="fn">Peter Linss</span> (former editor, <span class="company"><a
    href="http://www.netscape.com/">Netscape/AOL</a></span>)

    <dd class="vcard"><span class="fn">John Williams</span> (former editor, <span class="company"><a
    href="http://www.quark.com/">Quark, Inc.</a></span>)

   </dl>

   <p class="copyright"><a
   href="http://www.w3.org/Consortium/Legal/ipr-notice#Copyright">
   Copyright</a> &copy; 2005 <a href="http://www.w3.org/"><abbr
   title="World Wide Web Consortium">W3C</abbr></a><sup>&reg;</sup>
   (<a href="http://www.csail.mit.edu/"><abbr title="Massachusetts
   Institute of Technology">MIT</abbr></a>, <a
   href="http://www.ercim.org/"><acronym title="European Research
   Consortium for Informatics and Mathematics">ERCIM</acronym></a>, <a
   href="http://www.keio.ac.jp/">Keio</a>), All Rights Reserved.  W3C
   <a
   href="http://www.w3.org/Consortium/Legal/ipr-notice#Legal_Disclaimer">liability</a>,
   <a
   href="http://www.w3.org/Consortium/Legal/ipr-notice#W3C_Trademarks">trademark</a>,
   <a
   href="http://www.w3.org/Consortium/Legal/copyright-documents">document
   use</a> rules apply.

   <hr title="Separator for header">

  </div>

  <h2><a name=abstract></a>Abstract</h2>

  <p><em>Selectors</em> are patterns that match against elements in a
  tree. Selectors have been optimized for use with HTML and XML, and
  are designed to be usable in performance-critical code.</p>

  <p><acronym title="Cascading Style Sheets">CSS</acronym> (Cascading
  Style Sheets) is a language for describing the rendering of <acronym
  title="Hypertext Markup Language">HTML</acronym> and <acronym
  title="Extensible Markup Language">XML</acronym> documents on
  screen, on paper, in speech, etc. CSS uses Selectors for binding
  style properties to elements in the document. This document
  describes extensions to the selectors defined in CSS level 2. These
  extended selectors will be used by CSS level 3.

  <p>Selectors define the following function:</p>

  <pre>expression &#x2217; element &rarr; boolean</pre>

  <p>That is, given an element and a selector, this specification
  defines whether that element matches the selector.</p>

  <p>These expressions can also be used, for instance, to select a set
  of elements, or a single element from a set of elements, by
  evaluating the expression across all the elements in a
  subtree. <acronym title="Simple Tree Transformation
  Sheets">STTS</acronym> (Simple Tree Transformation Sheets), a
  language for transforming XML trees, uses this mechanism. <a href="#refsSTTS">[STTS]</a></p>

  <h2><a name=status></a>Status of this document</h2>

  <p><em>This section describes the status of this document at the
  time of its publication. Other documents may supersede this
  document. A list of current W3C publications and the latest revision
  of this technical report can be found in the <a
  href="http://www.w3.org/TR/">W3C technical reports index at
  http://www.w3.org/TR/.</a></em></p>

  <p>This document describes the selectors that already exist in <a
  href="#refsCSS1"><abbr title="CSS level 1">CSS1</abbr></a> and <a
  href="#refsCSS21"><abbr title="CSS level 2">CSS2</abbr></a>, and
  also proposes new selectors for <abbr title="CSS level
  3">CSS3</abbr> and other languages that may need them.</p>

  <p>The CSS Working Group doesn't expect that all implementations of
  CSS3 will have to implement all selectors. Instead, there will
  probably be a small number of variants of CSS3, called profiles. For
  example, it may be that only a profile for interactive user agents
  will include all of the selectors.</p>

  <p>This specification is a last call working draft for the the <a
  href="http://www.w3.org/Style/CSS/members">CSS Working Group</a>
  (<a href="/Style/">Style Activity</a>). This
  document is a revision of the <a
  href="http://www.w3.org/TR/2001/CR-css3-selectors-20011113/">Candidate
  Recommendation dated 2001 November 13</a>, and has incorporated
  implementation feedback received in the past few years. It is
  expected that this last call will proceed straight to Proposed
  Recommendation stage since it is believed that interoperability will
  be demonstrable.</p>

  <p>All persons are encouraged to review and implement this
  specification and return comments to the (<a
  href="http://lists.w3.org/Archives/Public/www-style/">archived</a>)
  public mailing list <a
  href="http://www.w3.org/Mail/Lists.html#www-style">www-style</a>
  (see <a href="http://www.w3.org/Mail/Request">instructions</a>). W3C
  Members can also send comments directly to the CSS Working
  Group.
  The deadline for comments is 14 January 2006.</p>

  <p>This is still a draft document and may be updated, replaced, or
  obsoleted by other documents at any time. It is inappropriate to
  cite a W3C Working Draft as other than &quot;work in progress&quot;.

  <p>This document may be available in <a
  href="http://www.w3.org/Style/css3-selectors-updates/translations">translation</a>.
  The English version of this specification is the only normative
  version.

  <div class="subtoc">

   <h2><a name=contents>Table of contents</a></h2>

   <ul class="toc">
    <li class="tocline2"><a href="#context">1. Introduction</a>
     <ul>
      <li><a href="#dependencies">1.1. Dependencies</a> </li>
      <li><a href="#terminology">1.2. Terminology</a> </li>
      <li><a href="#changesFromCSS2">1.3. Changes from CSS2</a> </li>
     </ul>
    <li class="tocline2"><a href="#selectors">2. Selectors</a>
    <li class="tocline2"><a href="#casesens">3. Case sensitivity</a>
    <li class="tocline2"><a href="#selector-syntax">4. Selector syntax</a>
    <li class="tocline2"><a href="#grouping">5. Groups of selectors</a>
    <li class="tocline2"><a href="#simple-selectors">6. Simple selectors</a>
     <ul class="toc">
      <li class="tocline3"><a href="#type-selectors">6.1. Type selectors</a>
       <ul class="toc">
        <li class="tocline4"><a href="#typenmsp">6.1.1. Type selectors and namespaces</a></li>
       </ul>
      <li class="tocline3"><a href="#universal-selector">6.2. Universal selector</a>
       <ul>
        <li><a href="#univnmsp">6.2.1. Universal selector and namespaces</a></li>
       </ul>
      <li class="tocline3"><a href="#attribute-selectors">6.3. Attribute selectors</a>
       <ul class="toc">
        <li class="tocline4"><a href="#attribute-representation">6.3.1. Representation of attributes and attributes values</a>
        <li><a href="#attribute-substrings">6.3.2. Substring matching attribute selectors</a>
        <li class="tocline4"><a href="#attrnmsp">6.3.3. Attribute selectors and namespaces</a>
        <li class="tocline4"><a href="#def-values">6.3.4. Default attribute values in DTDs</a></li>
       </ul>
      <li class="tocline3"><a href="#class-html">6.4. Class selectors</a>
      <li class="tocline3"><a href="#id-selectors">6.5. ID selectors</a>
      <li class="tocline3"><a href="#pseudo-classes">6.6. Pseudo-classes</a>
       <ul class="toc">
        <li class="tocline4"><a href="#dynamic-pseudos">6.6.1. Dynamic pseudo-classes</a>
        <li class="tocline4"><a href="#target-pseudo">6.6.2. The :target pseudo-class</a>
        <li class="tocline4"><a href="#lang-pseudo">6.6.3. The :lang() pseudo-class</a>
        <li class="tocline4"><a href="#UIstates">6.6.4. UI element states pseudo-classes</a>
        <li class="tocline4"><a href="#structural-pseudos">6.6.5. Structural pseudo-classes</a>
         <ul>
          <li><a href="#root-pseudo">:root pseudo-class</a>
          <li><a href="#nth-child-pseudo">:nth-child() pseudo-class</a>
          <li><a href="#nth-last-child-pseudo">:nth-last-child()</a>
          <li><a href="#nth-of-type-pseudo">:nth-of-type() pseudo-class</a>
          <li><a href="#nth-last-of-type-pseudo">:nth-last-of-type()</a>
          <li><a href="#first-child-pseudo">:first-child pseudo-class</a>
          <li><a href="#last-child-pseudo">:last-child pseudo-class</a>
          <li><a href="#first-of-type-pseudo">:first-of-type pseudo-class</a>
          <li><a href="#last-of-type-pseudo">:last-of-type pseudo-class</a>
          <li><a href="#only-child-pseudo">:only-child pseudo-class</a>
          <li><a href="#only-of-type-pseudo">:only-of-type pseudo-class</a>
          <li><a href="#empty-pseudo">:empty pseudo-class</a></li>
         </ul>
        <li class="tocline4"><a href="#negation">6.6.7. The negation pseudo-class</a></li>
       </ul>
      </li>
     </ul>
    <li><a href="#pseudo-elements">7. Pseudo-elements</a>
     <ul>
      <li><a href="#first-line">7.1. The ::first-line pseudo-element</a>
      <li><a href="#first-letter">7.2. The ::first-letter pseudo-element</a>
      <li><a href="#UIfragments">7.3. The ::selection pseudo-element</a>
      <li><a href="#gen-content">7.4. The ::before and ::after pseudo-elements</a></li>
     </ul>
    <li class="tocline2"><a href="#combinators">8. Combinators</a>
     <ul class="toc">
      <li class="tocline3"><a href="#descendant-combinators">8.1. Descendant combinators</a>
      <li class="tocline3"><a href="#child-combinators">8.2. Child combinators</a>
      <li class="tocline3"><a href="#sibling-combinators">8.3. Sibling combinators</a>
       <ul class="toc">
        <li class="tocline4"><a href="#adjacent-sibling-combinators">8.3.1. Adjacent sibling combinator</a>
        <li class="tocline4"><a href="#general-sibling-combinators">8.3.2. General sibling combinator</a></li>
       </ul>
      </li>
     </ul>
    <li class="tocline2"><a href="#specificity">9. Calculating a selector's specificity</a>
    <li class="tocline2"><a href="#w3cselgrammar">10. The grammar of Selectors</a>
     <ul class="toc">
      <li class="tocline3"><a href="#grammar">10.1. Grammar</a>
      <li class="tocline3"><a href="#lex">10.2. Lexical scanner</a></li>
     </ul>
    <li class="tocline2"><a href="#downlevel">11. Namespaces and down-level clients</a>
    <li class="tocline2"><a href="#profiling">12. Profiles</a>
    <li><a href="#Conformance">13. Conformance and requirements</a>
    <li><a href="#Tests">14. Tests</a>
    <li><a href="#ACKS">15. Acknowledgements</a>
    <li class="tocline2"><a href="#references">16. References</a>
   </ul>

  </div>

  <h2><a name=context>1. Introduction</a></h2>

  <h3><a name=dependencies></a>1.1. Dependencies</h3>

  <p>Some features of this specification are specific to CSS, or have
  particular limitations or rules specific to CSS. In this
  specification, these have been described in terms of CSS2.1. <a
  href="#refsCSS21">[CSS21]</a></p>

  <h3><a name=terminology></a>1.2. Terminology</h3>

  <p>All of the text of this specification is normative except
  examples, notes, and sections explicitly marked as
  non-normative.</p>

  <h3><a name=changesFromCSS2></a>1.3. Changes from CSS2</h3>
 
  <p><em>This section is non-normative.</em></p>

  <p>The main differences between the selectors in CSS2 and those in
  Selectors are:

  <ul>

   <li>the list of basic definitions (selector, group of selectors,
   simple selector, etc.) has been changed; in particular, what was
   referred to in CSS2 as a simple selector is now called a sequence
   of simple selectors, and the term "simple selector" is now used for
   the components of this sequence</li>

   <li>an optional namespace component is now allowed in type element
   selectors, the universal selector and attribute selectors</li>

   <li>a <a href="#general-sibling-combinators">new combinator</a> has been introduced</li>

   <li>new simple selectors including substring matching attribute
   selectors, and new pseudo-classes</li>

   <li>new pseudo-elements, and introduction of the "::" convention
   for pseudo-elements</li>

   <li>the grammar has been rewritten</li>

   <li>profiles to be added to specifications integrating Selectors
   and defining the set of selectors which is actually supported by
   each specification</li>

   <li>Selectors are now a CSS3 Module and an independent
   specification; other specifications can now refer to this document
   independently of CSS</li>

   <li>the specification now has its own test suite</li>

  </ul>

<h2><a name=selectors></a>2. Selectors</h2>

<p><em>This section is non-normative, as it merely summarizes the
following sections.</em></p>

<p>A Selector represents a structure. This structure can be used as a
condition (e.g. in a CSS rule) that determines which elements a
selector matches in the document tree, or as a flat description of the
HTML or XML fragment corresponding to that structure.</p>

<p>Selectors may range from simple element names to rich contextual
representations.</p>

<p>The following table summarizes the Selector syntax:</p>

<table class="selectorsReview">
  <thead>
  <tr>
    <th class="pattern">Pattern</th>
    <th class="meaning">Meaning</th>
    <th class="described">Described in section</th>
    <th class="origin">First defined in CSS level</th></tr>
  <tbody>
  <tr>
    <td class="pattern">*</td>
    <td class="meaning">any element</td>
    <td class="described"><a
      href="#universal-selector">Universal
      selector</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E</td>
    <td class="meaning">an element of type E</td>
    <td class="described"><a
      href="#type-selectors">Type selector</a></td>
    <td class="origin">1</td></tr>
  <tr>
    <td class="pattern">E[foo]</td>
    <td class="meaning">an E element with a "foo" attribute</td>
    <td class="described"><a
      href="#attribute-selectors">Attribute
      selectors</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E[foo="bar"]</td>
    <td class="meaning">an E element whose "foo" attribute value is exactly
      equal to "bar"</td>
    <td class="described"><a
      href="#attribute-selectors">Attribute
      selectors</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E[foo~="bar"]</td>
    <td class="meaning">an E element whose "foo" attribute value is a list of
      space-separated values, one of which is exactly equal to "bar"</td>
    <td class="described"><a
      href="#attribute-selectors">Attribute
      selectors</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E[foo^="bar"]</td>
    <td class="meaning">an E element whose "foo" attribute value begins exactly
      with the string "bar"</td>
    <td class="described"><a
      href="#attribute-selectors">Attribute
      selectors</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E[foo$="bar"]</td>
    <td class="meaning">an E element whose "foo" attribute value ends exactly
      with the string "bar"</td>
    <td class="described"><a
      href="#attribute-selectors">Attribute
      selectors</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E[foo*="bar"]</td>
    <td class="meaning">an E element whose "foo" attribute value contains the
      substring "bar"</td>
    <td class="described"><a
      href="#attribute-selectors">Attribute
      selectors</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E[hreflang|="en"]</td>
    <td class="meaning">an E element whose "hreflang" attribute has a hyphen-separated
      list of values beginning (from the left) with "en"</td>
    <td class="described"><a
      href="#attribute-selectors">Attribute
      selectors</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E:root</td>
    <td class="meaning">an E element, root of the document</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:nth-child(n)</td>
    <td class="meaning">an E element, the n-th child of its parent</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:nth-last-child(n)</td>
    <td class="meaning">an E element, the n-th child of its parent, counting
      from the last one</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:nth-of-type(n)</td>
    <td class="meaning">an E element, the n-th sibling of its type</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:nth-last-of-type(n)</td>
    <td class="meaning">an E element, the n-th sibling of its type, counting
      from the last one</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:first-child</td>
    <td class="meaning">an E element, first child of its parent</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E:last-child</td>
    <td class="meaning">an E element, last child of its parent</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:first-of-type</td>
    <td class="meaning">an E element, first sibling of its type</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:last-of-type</td>
    <td class="meaning">an E element, last sibling of its type</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:only-child</td>
    <td class="meaning">an E element, only child of its parent</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:only-of-type</td>
    <td class="meaning">an E element, only sibling of its type</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:empty</td>
    <td class="meaning">an E element that has no children (including text
    nodes)</td>
    <td class="described"><a
      href="#structural-pseudos">Structural
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:link<br>E:visited</td>
    <td class="meaning">an E element being the source anchor of a hyperlink of
      which the target is not yet visited (:link) or already visited
    (:visited)</td>
    <td class="described"><a
      href="#link">The link
      pseudo-classes</a></td>
    <td class="origin">1</td></tr>
  <tr>
    <td class="pattern">E:active<br>E:hover<br>E:focus</td>
    <td class="meaning">an E element during certain user actions</td>
    <td class="described"><a
      href="#useraction-pseudos">The user
      action pseudo-classes</a></td>
    <td class="origin">1 and 2</td></tr>
  <tr>
    <td class="pattern">E:target</td>
    <td class="meaning">an E element being the target of the referring URI</td>
    <td class="described"><a
      href="#target-pseudo">The target
      pseudo-class</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:lang(fr)</td>
    <td class="meaning">an element of type E in language "fr" (the document
      language specifies how language is determined)</td>
    <td class="described"><a
      href="#lang-pseudo">The :lang()
      pseudo-class</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E:enabled<br>E:disabled</td>
    <td class="meaning">a user interface element E which is enabled or
    disabled</td>
    <td class="described"><a
      href="#UIstates">The UI element states
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E:checked<!--<br>E:indeterminate--></td>
    <td class="meaning">a user interface element E which is checked<!-- or in an
      indeterminate state--> (for instance a radio-button or checkbox)</td>
    <td class="described"><a
      href="#UIstates">The UI element states
      pseudo-classes</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E::first-line</td>
    <td class="meaning">the first formatted line of an E element</td>
    <td class="described"><a
      href="#first-line">The ::first-line
      pseudo-element</a></td>
    <td class="origin">1</td></tr>
  <tr>
    <td class="pattern">E::first-letter</td>
    <td class="meaning">the first formatted letter of an E element</td>
    <td class="described"><a
      href="#first-letter">The ::first-letter
      pseudo-element</a></td>
    <td class="origin">1</td></tr>
  <tr>
    <td class="pattern">E::selection</td>
    <td class="meaning">the portion of an E element that is currently
      selected/highlighted by the user</td>
    <td class="described"><a
      href="#UIfragments">The UI element
      fragments pseudo-elements</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E::before</td>
    <td class="meaning">generated content before an E element</td>
    <td class="described"><a
      href="#gen-content">The ::before
      pseudo-element</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E::after</td>
    <td class="meaning">generated content after an E element</td>
    <td class="described"><a
      href="#gen-content">The ::after
      pseudo-element</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E.warning</td>
    <td class="meaning">an E element whose class is
"warning" (the document language specifies how class is determined).</td>
    <td class="described"><a
      href="#class-html">Class
    selectors</a></td>
    <td class="origin">1</td></tr>
  <tr>
    <td class="pattern">E#myid</td>
    <td class="meaning">an E element with ID equal to "myid".</td>
    <td class="described"><a
      href="#id-selectors">ID
    selectors</a></td>
    <td class="origin">1</td></tr>
  <tr>
    <td class="pattern">E:not(s)</td>
    <td class="meaning">an E element that does not match simple selector s</td>
    <td class="described"><a
      href="#negation">Negation
      pseudo-class</a></td>
    <td class="origin">3</td></tr>
  <tr>
    <td class="pattern">E F</td>
    <td class="meaning">an F element descendant of an E element</td>
    <td class="described"><a
      href="#descendant-combinators">Descendant
      combinator</a></td>
    <td class="origin">1</td></tr>
  <tr>
    <td class="pattern">E &gt; F</td>
    <td class="meaning">an F element child of an E element</td>
    <td class="described"><a
      href="#child-combinators">Child
      combinator</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E + F</td>
    <td class="meaning">an F element immediately preceded by an E element</td>
    <td class="described"><a
      href="#adjacent-sibling-combinators">Adjacent sibling combinator</a></td>
    <td class="origin">2</td></tr>
  <tr>
    <td class="pattern">E ~ F</td>
    <td class="meaning">an F element preceded by an E element</td>
    <td class="described"><a
      href="#general-sibling-combinators">General sibling combinator</a></td>
    <td class="origin">3</td></tr></tbody></table>

<p>The meaning of each selector is derived from the table above by
prepending "matches" to the contents of each cell in the "Meaning"
column.</p>

<h2><a name=casesens>3. Case sensitivity</a></h2>

<p>The case sensitivity of document language element names, attribute
names, and attribute values in selectors depends on the document
language. For example, in HTML, element names are case-insensitive,
but in XML, they are case-sensitive.</p>

<h2><a name=selector-syntax>4. Selector syntax</a></h2>

<p>A <dfn><a name=selector>selector</a></dfn> is a chain of one
or more <a href="#sequence">sequences of simple selectors</a>
separated by <a href="#combinators">combinators</a>.</p>

<p>A <dfn><a name=sequence>sequence of simple selectors</a></dfn>
is a chain of <a href="#simple-selectors-dfn">simple selectors</a>
that are not separated by a <a href="#combinators">combinator</a>. It
always begins with a <a href="#type-selectors">type selector</a> or a
<a href="#universal-selector">universal selector</a>. No other type
selector or universal selector is allowed in the sequence.</p>

<p>A <dfn><a name=simple-selectors-dfn></a><a
href="#simple-selectors">simple selector</a></dfn> is either a <a
href="#type-selectors">type selector</a>, <a
href="#universal-selector">universal selector</a>, <a
href="#attribute-selectors">attribute selector</a>, <a
href="#class-html">class selector</a>, <a
href="#id-selectors">ID selector</a>, <a
href="#content-selectors">content selector</a>, or <a
href="#pseudo-classes">pseudo-class</a>. One <a
href="#pseudo-elements">pseudo-element</a> may be appended to the last
sequence of simple selectors.</p>

<p><dfn>Combinators</dfn> are: white space, &quot;greater-than
sign&quot; (U+003E, <code>&gt;</code>), &quot;plus sign&quot; (U+002B,
<code>+</code>) and &quot;tilde&quot; (U+007E, <code>~</code>).  White
space may appear between a combinator and the simple selectors around
it. <a name=whitespace></a>Only the characters "space" (U+0020), "tab"
(U+0009), "line feed" (U+000A), "carriage return" (U+000D), and "form
feed" (U+000C) can occur in white space. Other space-like characters,
such as "em-space" (U+2003) and "ideographic space" (U+3000), are
never part of white space.</p>

<p>The elements of a document tree that are represented by a selector
are the <dfn><a name=subject></a>subjects of the selector</dfn>. A
selector consisting of a single sequence of simple selectors
represents any element satisfying its requirements. Prepending another
sequence of simple selectors and a combinator to a sequence imposes
additional matching constraints, so the subjects of a selector are
always a subset of the elements represented by the last sequence of
simple selectors.</p>

<p>An empty selector, containing no sequence of simple selectors and
no pseudo-element, is an <a href="#Conformance">invalid
selector</a>.</p>

<h2><a name=grouping>5. Groups of selectors</a></h2>

<p>When several selectors share the same declarations, they may be
grouped into a comma-separated list. (A comma is U+002C.)</p>

<div class="example">
<p>CSS examples:</p>
<p>In this example, we condense three rules with identical
declarations into one. Thus,</p>
<pre>h1 { font-family: sans-serif }
h2 { font-family: sans-serif }
h3 { font-family: sans-serif }</pre>
<p>is equivalent to:</p>
<pre>h1, h2, h3 { font-family: sans-serif }</pre>
</div>

<p><strong>Warning</strong>: the equivalence is true in this example
because all the selectors are valid selectors. If just one of these
selectors were invalid, the entire group of selectors would be
invalid. This would invalidate the rule for all three heading
elements, whereas in the former case only one of the three individual
heading rules would be invalidated.</p>


<h2><a name=simple-selectors>6. Simple selectors</a></h2>

<h3><a name=type-selectors>6.1. Type selector</a></h3>

<p>A <dfn>type selector</dfn> is the name of a document language
element type. A type selector represents an instance of the element
type in the document tree.</p>

<div class="example">
 <p>Example:</p>
 <p>The following selector represents an <code>h1</code> element in the document tree:</p>
 <pre>h1</pre>
</div>


<h4><a name=typenmsp>6.1.1. Type selectors and namespaces</a></h4>

<p>Type selectors allow an optional namespace (<a
href="#refsXMLNAMES">[XMLNAMES]</a>) component. A namespace prefix
that has been previously declared may be prepended to the element name
separated by the namespace separator &quot;vertical bar&quot;
(U+007C, <code>|</code>).</p>

<p>The namespace component may be left empty to indicate that the
selector is only to represent elements with no declared namespace.</p>

<p>An asterisk may be used for the namespace prefix, indicating that
the selector represents elements in any namespace (including elements
with no namespace).</p>

<p>Element type selectors that have no namespace component (no
namespace separator), represent elements without regard to the
element's namespace (equivalent to "<code>*|</code>") unless a default
namespace has been declared. If a default namespace has been declared,
the selector will represent only elements in the default
namespace.</p>

<p>A type selector containing a namespace prefix that has not been
previously declared is an <a href="#Conformance">invalid</a> selector.
The mechanism for declaring a namespace prefix is left up to the
language implementing Selectors. In CSS, such a mechanism is defined
in the General Syntax module.</p>

<p>In a namespace-aware client, element type selectors will only match
against the <a
href="http://www.w3.org/TR/REC-xml-names/#NT-LocalPart">local part</a>
of the element's <a
href="http://www.w3.org/TR/REC-xml-names/#ns-qualnames">qualified
name</a>. See <a href="#downlevel">below</a> for notes about matching
behaviors in down-level clients.</p>

<p>In summary:</p>

<dl>
  <dt><code>ns|E</code></dt>
  <dd>elements with name E in namespace ns</dd>
  <dt><code>*|E</code></dt>
  <dd>elements with name E in any namespace, including those without any
  declared namespace</dd>
  <dt><code>|E</code></dt>
  <dd>elements with name E without any declared namespace</dd>
  <dt><code>E</code></dt>
  <dd>if no default namespace has been specified, this is equivalent to *|E.
  Otherwise it is equivalent to ns|E where ns is the default namespace.</dd>
</dl>

<div class="example">
 <p>CSS examples:</p>

 <pre>@namespace foo url(http://www.example.com);
 foo|h1 { color: blue }
 foo|* { color: yellow }
 |h1 { color: red }
 *|h1 { color: green }
 h1 { color: green }</pre>

 <p>The first rule will match only <code>h1</code> elements in the
 "http://www.example.com" namespace.</p>

 <p>The second rule will match all elements in the
 "http://www.example.com" namespace.</p>

 <p>The third rule will match only <code>h1</code> elements without
 any declared namespace.</p>

 <p>The fourth rule will match <code>h1</code> elements in any
 namespace (including those without any declared namespace).</p>

 <p>The last rule is equivalent to the fourth rule because no default
 namespace has been defined.</p>

</div>

<h3><a name=universal-selector>6.2. Universal selector</a> </h3>

<p>The <dfn>universal selector</dfn>, written &quot;asterisk&quot;
(<code>*</code>), represents the qualified name of any element
type. It represents any single element in the document tree in any
namespace (including those without any declared namespace) if no
default namespace has been specified. If a default namespace has been
specified, see <a href="#univnmsp">Universal selector and
Namespaces</a> below.</p>

<p>If the universal selector is not the only component of a sequence
of simple selectors, the <code>*</code> may be omitted.</p>

<div class="example">
 <p>Examples:</p>
 <ul>
  <li><code>*[hreflang|=en]</code> and <code>[hreflang|=en]</code> are equivalent,</li>
  <li><code>*.warning</code> and <code>.warning</code> are equivalent,</li>
  <li><code>*#myid</code> and <code>#myid</code> are equivalent.</li>
 </ul>
</div>

<p class="note"><strong>Note:</strong> it is recommended that the
<code>*</code>, representing the universal selector, not be
omitted.</p>

<h4><a name=univnmsp>6.2.1. Universal selector and namespaces</a></h4>

<p>The universal selector allows an optional namespace component. It
is used as follows:</p>

<dl>
 <dt><code>ns|*</code></dt>
 <dd>all elements in namespace ns</dd>
 <dt><code>*|*</code></dt>
 <dd>all elements</dd>
 <dt><code>|*</code></dt>
 <dd>all elements without any declared namespace</dd>
 <dt><code>*</code></dt>
 <dd>if no default namespace has been specified, this is equivalent to *|*.
 Otherwise it is equivalent to ns|* where ns is the default namespace.</dd>
</dl>

<p>A universal selector containing a namespace prefix that has not
been previously declared is an <a href="#Conformance">invalid</a>
selector.  The mechanism for declaring a namespace prefix is left up
to the language implementing Selectors.  In CSS, such a mechanism is
defined in the General Syntax module.</p>


<h3><a name=attribute-selectors>6.3. Attribute selectors</a></h3>

<p>Selectors allow the representation of an element's attributes. When
a selector is used as an expression to match against an element,
attribute selectors must be considered to match an element if that
element has an attribute that matches the attribute represented by the
attribute selector.</p>

<h4><a name=attribute-representation>6.3.1. Attribute presence and values
selectors</a></h4>

<p>CSS2 introduced four attribute selectors:</p>

<dl>
  <dt><code>[att]</code>
  <dd>Represents an element with the <code>att</code> attribute, whatever the value of
  the attribute.</dd>
  <dt><code>[att=val]</code></dt>
  <dd>Represents an element with the <code>att</code> attribute whose value is exactly
  "val".</dd>
  <dt><code>[att~=val]</code></dt>
  <dd>Represents an element with the <code>att</code> attribute whose value is a <a
  href="#whitespace">whitespace</a>-separated list of words, one of
  which is exactly "val". If "val" contains whitespace, it will never
  represent anything (since the words are <em>separated</em> by
  spaces).</dd>
  <dt><code>[att|=val]</code>
  <dd>Represents an element with the <code>att</code> attribute, its value either
  being exactly "val" or beginning with "val" immediately followed by
  "-" (U+002D).  This is primarily intended to allow language subcode
  matches (e.g., the <code>hreflang</code> attribute on the
  <code>link</code> element in HTML) as described in RFC 3066 (<a
  href="#refsRFC3066">[RFC3066]</a>).  For <code>lang</code> (or
  <code>xml:lang</code>) language subcode matching, please see <a
  href="#lang-pseudo">the <code>:lang</code> pseudo-class</a>.</dd>
</dl>

<p>Attribute values must be identifiers or strings. The
case-sensitivity of attribute names and values in selectors depends on
the document language.</p>

<div class="example">

  <p>Examples:</p>

  <p>The following attribute selector represents an <code>h1</code>
  element that carries the <code>title</code> attribute, whatever its
  value:</p>

  <pre>h1[title]</pre>

  <p>In the following example, the selector represents a
  <code>span</code> element whose <code>class</code> attribute has
  exactly the value "example":</p>

  <pre>span[class="example"]</pre>

  <p>Multiple attribute selectors can be used to represent several
  attributes of an element, or several conditions on the same
  attribute. Here, the selector represents a <code>span</code> element
  whose <code>hello</code> attribute has exactly the value "Cleveland"
  and whose <code>goodbye</code> attribute has exactly the value
  "Columbus":</p>

  <pre>span[hello="Cleveland"][goodbye="Columbus"]</pre>

  <p>The following selectors illustrate the differences between "="
  and "~=".  The first selector will represent, for example, the value
  "copyright copyleft copyeditor" on a <code>rel</code> attribute. The
  second selector will only represent an <code>a</code> element with
  an <code>href</code> attribute having the exact value
  "http://www.w3.org/".</p>

  <pre>a[rel~="copyright"]
a[href="http://www.w3.org/"]</pre>

  <p>The following selector represents a <code>link</code> element
  whose <code>hreflang</code> attribute is exactly "fr".</p>

  <pre>link[hreflang=fr]</pre>

  <p>The following selector represents a <code>link</code> element for
  which the values of the <code>hreflang</code> attribute begins with
  "en", including "en", "en-US", and "en-cockney":</p>

  <pre>link[hreflang|="en"]</pre>

  <p>Similarly, the following selectors represents a
  <code>DIALOGUE</code> element whenever it has one of two different
  values for an attribute <code>character</code>:</p>

  <pre>DIALOGUE[character=romeo]
DIALOGUE[character=juliet]</pre>

</div>

<h4><a name=attribute-substrings></a>6.3.2. Substring matching attribute
selectors</h4>

<p>Three additional attribute selectors are provided for matching
substrings in the value of an attribute:</p>

<dl>
  <dt><code>[att^=val]</code></dt>
  <dd>Represents an element with the <code>att</code> attribute whose value begins
  with the prefix "val".</dd>
  <dt><code>[att$=val]</code>
  <dd>Represents an element with the <code>att</code> attribute whose value ends with
  the suffix "val".</dd>
  <dt><code>[att*=val]</code>
  <dd>Represents an element with the <code>att</code> attribute whose value contains
  at least one instance of the substring "val".</dd>
</dl>

<p>Attribute values must be identifiers or strings. The
case-sensitivity of attribute names in selectors depends on the
document language.</p>

<div class="example">
 <p>Examples:</p>
 <p>The following selector represents an HTML <code>object</code>, referencing an
 image:</p>
 <pre>object[type^="image/"]</pre>
 <p>The following selector represents an HTML anchor <code>a</code> with an
 <code>href</code> attribute whose value ends with ".html".</p>
 <pre>a[href$=".html"]</pre>
 <p>The following selector represents an HTML paragraph with a <code>title</code>
 attribute whose value contains the substring "hello"</p>
 <pre>p[title*="hello"]</pre>
</div>

<h4><a name=attrnmsp>6.3.3. Attribute selectors and namespaces</a></h4>

<p>Attribute selectors allow an optional namespace component to the
attribute name. A namespace prefix that has been previously declared
may be prepended to the attribute name separated by the namespace
separator &quot;vertical bar&quot; (<code>|</code>). In keeping with
the Namespaces in the XML recommendation, default namespaces do not
apply to attributes, therefore attribute selectors without a namespace
component apply only to attributes that have no declared namespace
(equivalent to "<code>|attr</code>"). An asterisk may be used for the
namespace prefix indicating that the selector is to match all
attribute names without regard to the attribute's namespace.

<p>An attribute selector with an attribute name containing a namespace
prefix that has not been previously declared is an <a
href="#Conformance">invalid</a> selector.  The mechanism for declaring
a namespace prefix is left up to the language implementing Selectors.
In CSS, such a mechanism is defined in the General Syntax module.

<div class="example">
  <p>CSS examples:</p>
  <pre>@namespace foo "http://www.example.com";
[foo|att=val] { color: blue }
[*|att] { color: yellow }
[|att] { color: green }
[att] { color: green }</pre>

  <p>The first rule will match only elements with the attribute
  <code>att</code> in the "http://www.example.com" namespace with the
  value "val".</p>

  <p>The second rule will match only elements with the attribute
  <code>att</code> regardless of the namespace of the attribute
  (including no declared namespace).</p>

  <p>The last two rules are equivalent and will match only elements
  with the attribute <code>att</code> where the attribute is not
  declared to be in a namespace.</p>

</div>

<h4><a name=def-values>6.3.4. Default attribute values in DTDs</a></h4>

<p>Attribute selectors represent explicitly set attribute values in
the document tree. Default attribute values may be defined in a DTD or
elsewhere, but cannot always be selected by attribute
selectors. Selectors should be designed so that they work even if the
default values are not included in the document tree.</p>

<p>More precisely, a UA is <em>not</em> required to read an "external
subset" of the DTD but <em>is</em> required to look for default
attribute values in the document's "internal subset." (See <a
href="#refsXML10">[XML10]</a> for definitions of these subsets.)</p>

<p>A UA that recognizes an XML namespace <a
href="#refsXMLNAMES">[XMLNAMES]</a> is not required to use its
knowledge of that namespace to treat default attribute values as if
they were present in the document. (For example, an XHTML UA is not
required to use its built-in knowledge of the XHTML DTD.)</p>

<p class="note"><strong>Note:</strong> Typically, implementations
choose to ignore external subsets.</p>

<div class="example">
<p>Example:</p>

<p>Consider an element EXAMPLE with an attribute "notation" that has a
default value of "decimal". The DTD fragment might be</p>

<pre class="dtd-example">&lt;!ATTLIST EXAMPLE notation (decimal,octal) "decimal"></pre>

<p>If the style sheet contains the rules</p>

<pre>EXAMPLE[notation=decimal] { /*... default property settings ...*/ }
EXAMPLE[notation=octal]   { /*... other settings...*/ }</pre>

<p>the first rule will not match elements whose "notation" attribute
is set by default, i.e. not set explicitly. To catch all cases, the
attribute selector for the default value must be dropped:</p>

<pre>EXAMPLE                   { /*... default property settings ...*/ }
EXAMPLE[notation=octal]   { /*... other settings...*/ }</pre>

<p>Here, because the selector <code>EXAMPLE[notation=octal]</code> is
more specific than the tag
selector alone, the style declarations in the second rule will override
those in the first for elements that have a "notation" attribute value
of "octal". Care has to be taken that all property declarations that
are to apply only to the default case are overridden in the non-default
cases' style rules.</p>

</div>

<h3><a name=class-html>6.4. Class selectors</a></h3>

<p>Working with HTML, authors may use the period (U+002E,
<code>.</code>) notation as an alternative to the <code>~=</code>
notation when representing the <code>class</code> attribute. Thus, for
HTML, <code>div.value</code> and <code>div[class~=value]</code> have
the same meaning. The attribute value must immediately follow the
&quot;period&quot; (<code>.</code>).</p>

<p>UAs may apply selectors using the period (.) notation in XML
documents if the UA has namespace-specific knowledge that allows it to
determine which attribute is the &quot;class&quot; attribute for the
respective namespace. One such example of namespace-specific knowledge
is the prose in the specification for a particular namespace (e.g. SVG
1.0 <a href="#refsSVG">[SVG]</a> describes the <a
href="http://www.w3.org/TR/2001/PR-SVG-20010719/styling.html#ClassAttribute">SVG
&quot;class&quot; attribute</a> and how a UA should interpret it, and
similarly MathML 1.01 <a href="#refsMATH">[MATH]</a> describes the <a
href="http://www.w3.org/1999/07/REC-MathML-19990707/chapter2.html#sec2.3.4">MathML
&quot;class&quot; attribute</a>.)</p>

<div class="example">
 <p>CSS examples:</p>

 <p>We can assign style information to all elements with
 <code>class~="pastoral"</code> as follows:</p>

  <pre>*.pastoral { color: green }  /* all elements with class~=pastoral */</pre>

  <p>or just</p>

  <pre>.pastoral { color: green }  /* all elements with class~=pastoral */</pre>

  <p>The following assigns style only to H1 elements with
  <code>class~="pastoral"</code>:</p>

  <pre>H1.pastoral { color: green }  /* H1 elements with class~=pastoral */</pre>

  <p>Given these rules, the first H1 instance below would not have
  green text, while the second would:</p>

  <pre>&lt;H1&gt;Not green&lt;/H1&gt;
&lt;H1 class="pastoral"&gt;Very green&lt;/H1&gt;</pre>

</div>

<p>To represent a subset of "class" values, each value must be preceded
by a ".", in any order.</P>

<div class="example">

  <p>CSS example:</p>

  <p>The following rule matches any P element whose "class" attribute
  has been assigned a list of <a
  href="#whitespace">whitespace</a>-separated values that includes
  "pastoral" and "marine":</p>

  <pre>p.pastoral.marine { color: green }</pre>

  <p>This rule matches when <code>class="pastoral blue aqua
  marine"</code> but does not match for <code>class="pastoral
  blue"</code>.</p>

</div>

<p class="note"><strong>Note:</strong> Because CSS gives considerable
power to the "class" attribute, authors could conceivably design their
own "document language" based on elements with almost no associated
presentation (such as DIV and SPAN in HTML) and assigning style
information through the "class" attribute.  Authors should avoid this
practice since the structural elements of a document language often
have recognized and accepted meanings and author-defined classes may
not.</p>

<p class="note"><strong>Note:</strong> If an element has multiple
class attributes, their values must be concatenated with spaces
between the values before searching for the class. As of this time the
working group is not aware of any manner in which this situation can
be reached, however, so this behavior is explicitly non-normative in
this specification.</p>

<h3><a name=id-selectors>6.5. ID selectors</a></h3>

<p>Document languages may contain attributes that are declared to be
of type ID. What makes attributes of type ID special is that no two
such attributes can have the same value in a document, regardless of
the type of the elements that carry them; whatever the document
language, an ID typed attribute can be used to uniquely identify its
element. In HTML all ID attributes are named "id"; XML applications
may name ID attributes differently, but the same restriction
applies.</p>

<p>An ID-typed attribute of a document language allows authors to
assign an identifier to one element instance in the document tree. W3C
ID selectors represent an element instance based on its identifier. An
ID selector contains a &quot;number sign&quot; (U+0023,
<code>#</code>) immediately followed by the ID value, which must be an
identifier.</p>

<p>Selectors does not specify how a UA knows the ID-typed attribute of
an element. The UA may, e.g., read a document's DTD, have the
information hard-coded or ask the user.

<div class="example">
  <p>Examples:</p>
  <p>The following ID selector represents an <code>h1</code> element
  whose ID-typed attribute has the value "chapter1":</p>
  <pre>h1#chapter1</pre>
  <p>The following ID selector represents any element whose ID-typed
  attribute has the value "chapter1":</p>
  <pre>#chapter1</pre>
  <p>The following selector represents any element whose ID-typed
  attribute has the value "z98y".</p>
  <pre>*#z98y</pre>
</div>

<p class="note"><strong>Note.</strong> In XML 1.0 <a
href="#refsXML10">[XML10]</a>, the information about which attribute
contains an element's IDs is contained in a DTD or a schema. When
parsing XML, UAs do not always read the DTD, and thus may not know
what the ID of an element is (though a UA may have namespace-specific
knowledge that allows it to determine which attribute is the ID
attribute for that namespace). If a style sheet designer knows or
suspects that a UA may not know what the ID of an element is, he
should use normal attribute selectors instead:
<code>[name=p371]</code> instead of <code>#p371</code>.  Elements in
XML 1.0 documents without a DTD do not have IDs at all.</p>

<p>If an element has multiple ID attributes, all of them must be
treated as IDs for that element for the purposes of the ID
selector. Such a situation could be reached using mixtures of xml:id,
DOM3 Core, XML DTDs, and namespace-specific knowledge.</p>

<h3><a name=pseudo-classes>6.6. Pseudo-classes</a></h3>

<p>The pseudo-class concept is introduced to permit selection based on
information that lies outside of the document tree or that cannot be
expressed using the other simple selectors.</p>

<p>A pseudo-class always consists of a &quot;colon&quot;
(<code>:</code>) followed by the name of the pseudo-class and
optionally by a value between parentheses.</p>

<p>Pseudo-classes are allowed in all sequences of simple selectors
contained in a selector. Pseudo-classes are allowed anywhere in
sequences of simple selectors, after the leading type selector or
universal selector (possibly omitted). Pseudo-class names are
case-insensitive. Some pseudo-classes are mutually exclusive, while
others can be applied simultaneously to the same
element. Pseudo-classes may be dynamic, in the sense that an element
may acquire or lose a pseudo-class while a user interacts with the
document.</p>


<h4><a name=dynamic-pseudos>6.6.1. Dynamic pseudo-classes</a></h4>

<p>Dynamic pseudo-classes classify elements on characteristics other
than their name, attributes, or content, in principle characteristics
that cannot be deduced from the document tree.</p>

<p>Dynamic pseudo-classes do not appear in the document source or
document tree.</p>


<h5>The <a name=link>link pseudo-classes: :link and :visited</a></h5>

<p>User agents commonly display unvisited links differently from
previously visited ones. Selectors
provides the pseudo-classes <code>:link</code> and
<code>:visited</code> to distinguish them:</p>

<ul>
  <li>The <code>:link</code> pseudo-class applies to links that have
  not yet been visited.</li>
  <li>The <code>:visited</code> pseudo-class applies once the link has
  been visited by the user. </li>
</ul>

<p>After some amount of time, user agents may choose to return a
visited link to the (unvisited) ':link' state.</p>

<p>The two states are mutually exclusive.</p>

<div class="example">

  <p>Example:</p>

  <p>The following selector represents links carrying class
  <code>external</code> and already visited:</p>

  <pre>a.external:visited</pre>

</div>

<p class="note"><strong>Note:</strong> It is possible for style sheet
authors to abuse the :link and :visited pseudo-classes to determine
which sites a user has visited without the user's consent.

<p>UAs may therefore treat all links as unvisited links, or implement
other measures to preserve the user's privacy while rendering visited
and unvisited links differently.</p>

<h5>The <a name=useraction-pseudos>user action pseudo-classes
:hover, :active, and :focus</a></h5>

<p>Interactive user agents sometimes change the rendering in response
to user actions. Selectors provides
three pseudo-classes for the selection of an element the user is
acting on.</p>

<ul>

  <li>The <code>:hover</code> pseudo-class applies while the user
  designates an element with a pointing device, but does not activate
  it. For example, a visual user agent could apply this pseudo-class
  when the cursor (mouse pointer) hovers over a box generated by the
  element. User agents not that do not support <a
  href="http://www.w3.org/TR/REC-CSS2/media.html#interactive-media-group">interactive
  media</a> do not have to support this pseudo-class. Some conforming
  user agents that support <a
  href="http://www.w3.org/TR/REC-CSS2/media.html#interactive-media-group">interactive
  media</a> may not be able to support this pseudo-class (e.g., a pen
  device that does not detect hovering).</li>

  <li>The <code>:active</code> pseudo-class applies while an element
  is being activated by the user. For example, between the times the
  user presses the mouse button and releases it.</li>

  <li>The <code>:focus</code> pseudo-class applies while an element
  has the focus (accepts keyboard or mouse events, or other forms of
  input). </li>

</ul>

<p>There may be document language or implementation specific limits on
which elements can become <code>:active</code> or acquire
<code>:focus</code>.</p>

<p>These pseudo-classes are not mutually exclusive. An element may
match several pseudo-classes at the same time.</p>

<p>Selectors doesn't define if the parent of an element that is
':active' or ':hover' is also in that state.</p>

<div class="example">
  <p>Examples:</p>
  <pre>a:link    /* unvisited links */
a:visited /* visited links */
a:hover   /* user hovers */
a:active  /* active links */</pre>
  <p>An example of combining dynamic pseudo-classes:</p>
  <pre>a:focus
a:focus:hover</pre>
  <p>The last selector matches <code>a</code> elements that are in
  the pseudo-class :focus and in the pseudo-class :hover.</p>
</div>

<p class="note"><strong>Note:</strong> An element can be both ':visited'
and ':active' (or ':link' and ':active').</p>

<h4><a name=target-pseudo>6.6.2. The target pseudo-class :target</a></h4>

<p>Some URIs refer to a location within a resource. This kind of URI
ends with a &quot;number sign&quot; (#) followed by an anchor
identifier (called the fragment identifier).</p>

<p>URIs with fragment identifiers link to a certain element within the
document, known as the target element. For instance, here is a URI
pointing to an anchor named <code>section_2</code> in an HTML
document:</p>

<pre>http://example.com/html/top.html#section_2</pre>

<p>A target element can be represented by the <code>:target</code>
pseudo-class. If the document's URI has no fragment identifier, then
the document has no target element.</p>

<div class="example">
 <p>Example:</p>
 <pre>p.note:target</pre>
 <p>This selector represents a <code>p</code> element of class
 <code>note</code> that is the target element of the referring
 URI.</p>
</div>

<div class="example">
 <p>CSS example:</p>
 <p>Here, the <code>:target</code> pseudo-class is used to make the
 target element red and place an image before it, if there is one:</p>
 <pre>*:target { color : red }
*:target::before { content : url(target.png) }</pre>
</div>

<h4><a name=lang-pseudo>6.6.3. The language pseudo-class :lang</a></h4>

<p>If the document language specifies how the human language of an
element is determined, it is possible to write selectors that
represent an element based on its language. For example, in HTML <a
href="#refsHTML4">[HTML4]</a>, the language is determined by a
combination of the <code>lang</code> attribute, the <code>meta</code>
element, and possibly by information from the protocol (such as HTTP
headers). XML uses an attribute called <code>xml:lang</code>, and
there may be other document language-specific methods for determining
the language.</p>

<p>The pseudo-class <code>:lang(C)</code> represents an element that
is in language C. Whether an element is represented by a
<code>:lang()</code> selector is based solely on the identifier C
being either equal to, or a hyphen-separated substring of, the
element's language value, in the same way as if performed by the <a
href="#attribute-representation">'|='</a> operator in attribute
selectors. The identifier C does not have to be a valid language
name.</p>

<p>C must not be empty. (If it is, the selector is invalid.)</p>

<p class="note"><strong>Note:</strong> It is recommended that
documents and protocols indicate language using codes from RFC 3066 <a
href="#refsRFC3066">[RFC3066]</a> or its successor, and by means of
"xml:lang" attributes in the case of XML-based documents <a
href="#refsXML10">[XML10]</a>. See <a
href="http://www.w3.org/International/questions/qa-lang-2or3.html">
"FAQ: Two-letter or three-letter language codes."</a></p>

<div class="example">
  <p>Examples:</p>
  <p>The two following selectors represent an HTML document that is in
  Belgian, French, or German. The two next selectors represent
  <code>q</code> quotations in an arbitrary element in Belgian, French,
  or German.</p>
  <pre>html:lang(fr-be)
html:lang(de)
:lang(fr-be) &gt; q
:lang(de) &gt; q</pre>
</div>

<h4><a name=UIstates>6.6.4. The UI element states pseudo-classes</a></h4>

<h5><a name=enableddisabled>The :enabled and :disabled pseudo-classes</a></h5>

<p>The <code>:enabled</code> pseudo-class allows authors to customize
the look of user interface elements that are enabled &mdash; which the
user can select or activate in some fashion (e.g. clicking on a button
with a mouse).  There is a need for such a pseudo-class because there
is no way to programmatically specify the default appearance of say,
an enabled <code>input</code> element without also specifying what it
would look like when it was disabled.</p>

<p>Similar to <code>:enabled</code>, <code>:disabled</code> allows the
author to specify precisely how a disabled or inactive user interface
element should look.</p>

<p>Most elements will be neither enabled nor disabled.  An element is
enabled if the user can either activate it or transfer the focus to
it. An element is disabled if it could be enabled, but the user cannot
presently activate it or transfer focus to it.</p>


<h5><a name=checked>The :checked pseudo-class</a></h5>

<p>Radio and checkbox elements can be toggled by the user. Some menu
items are "checked" when the user selects them. When such elements are
toggled "on" the <code>:checked</code> pseudo-class applies. The
<code>:checked</code> pseudo-class initially applies to such elements
that have the HTML4 <code>selected</code> and <code>checked</code>
attributes as described in <a
href="http://www.w3.org/TR/REC-html40/interact/forms.html#h-17.2.1">Section
17.2.1 of HTML4</a>, but of course the user can toggle "off" such
elements in which case the <code>:checked</code> pseudo-class would no
longer apply. While the <code>:checked</code> pseudo-class is dynamic
in nature, and is altered by user action, since it can also be based
on the presence of the semantic HTML4 <code>selected</code> and
<code>checked</code> attributes, it applies to all media.


<h5><a name=indeterminate>The :indeterminate pseudo-class</a></h5>

<div class="note">

<p>Radio and checkbox elements can be toggled by the user, but are
sometimes in an indeterminate state, neither checked nor unchecked.
This can be due to an element attribute, or DOM manipulation.</p>

<p>A future version of this specification may introduce an 
<code>:indeterminate</code> pseudo-class that applies to such elements.
<!--While the <code>:indeterminate</code> pseudo-class is dynamic in
nature, and is altered by user action, since it can also be based on
the presence of an element attribute, it applies to all media.</p>

<p>Components of a radio-group initialized with no pre-selected choice
are an example of :indeterminate state.--></p>

</div>


<h4><a name=structural-pseudos>6.6.5. Structural pseudo-classes</a></h4>

<p>Selectors introduces the concept of <dfn>structural
pseudo-classes</dfn> to permit selection based on extra information that lies in
the document tree but cannot be represented by other simple selectors or
combinators. 

<p>Note that standalone pieces of PCDATA (text nodes in the DOM) are
not counted when calculating the position of an element in the list of
children of its parent. When calculating the position of an element in
the list of children of its parent, the index numbering starts at 1.


<h5><a name=root-pseudo>:root pseudo-class</a></h5>

<p>The <code>:root</code> pseudo-class represents an element that is
the root of the document. In HTML 4, this is always the
<code>HTML</code> element.


<h5><a name=nth-child-pseudo>:nth-child() pseudo-class</a></h5>

<p>The
<code>:nth-child(<var>a</var><code>n</code>+<var>b</var>)</code>
pseudo-class notation represents an element that has
<var>a</var><code>n</code>+<var>b</var>-1 siblings
<strong>before</strong> it in the document tree, for a given positive
integer or zero value of <code>n</code>, and has a parent element. In
other words, this matches the <var>b</var>th child of an element after
all the children have been split into groups of <var>a</var> elements
each. For example, this allows the selectors to address every other
row in a table, and could be used to alternate the color
of paragraph text in a cycle of four. The <var>a</var> and
<var>b</var> values must be zero, negative integers or positive
integers. The index of the first child of an element is 1.

<p>In addition to this, <code>:nth-child()</code> can take
'<code>odd</code>' and '<code>even</code>' as arguments instead.
'<code>odd</code>' has the same signification as <code>2n+1</code>,
and '<code>even</code>' has the same signification as <code>2n</code>.


<div class="example">
<p>Examples:</p>
<pre>tr:nth-child(2n+1) /* represents every odd row of an HTML table */
tr:nth-child(odd)  /* same */
tr:nth-child(2n)   /* represents every even row of an HTML table */
tr:nth-child(even) /* same */

/* Alternate paragraph colours in CSS */
p:nth-child(4n+1) { color: navy; }
p:nth-child(4n+2) { color: green; }
p:nth-child(4n+3) { color: maroon; }
p:nth-child(4n+4) { color: purple; }</pre>
</div>

<p>When <var>a</var>=0, no repeating is used, so for example
<code>:nth-child(0n+5)</code> matches only the fifth child. When
<var>a</var>=0, the <var>a</var><code>n</code> part need not be
included, so the syntax simplifies to
<code>:nth-child(<var>b</var>)</code> and the last example simplifies
to <code>:nth-child(5)</code>.

<div class="example">
<p>Examples:</p>
<pre>foo:nth-child(0n+1)   /* represents an element foo, first child of its parent element */
foo:nth-child(1)      /* same */</pre>
</div>

<p>When <var>a</var>=1, the number may be omitted from the rule.

<div class="example">
<p>Examples:</p>
<p>The following selectors are therefore equivalent:</p>
<pre>bar:nth-child(1n+0)   /* represents all bar elements, specificity (0,1,1) */
bar:nth-child(n+0)    /* same */
bar:nth-child(n)      /* same */
bar                   /* same but lower specificity (0,0,1) */</pre>
</div>

<p>If <var>b</var>=0, then every <var>a</var>th element is picked. In
such a case, the <var>b</var> part may be omitted.

<div class="example">
<p>Examples:</p>
<pre>tr:nth-child(2n+0) /* represents every even row of an HTML table */
tr:nth-child(2n) /* same */</pre>
</div>

<p>If both <var>a</var> and <var>b</var> are equal to zero, the
pseudo-class represents no element in the document tree.</p>

<p>The value <var>a</var> can be negative, but only the positive
values of <var>a</var><code>n</code>+<var>b</var>, for
<code>n</code>&ge;0, may represent an element in the document
tree.</p>

<div class="example">
<p>Example:</p>
<pre>html|tr:nth-child(-n+6)  /* represents the 6 first rows of XHTML tables */</pre>
</div>

<p>When the value <var>b</var> is negative, the "+" character in the
expression must be removed (it is effectively replaced by the "-"
character indicating the negative value of <var>b</var>).</p>

<div class="example">
<p>Examples:</p>
<pre>:nth-child(10n-1)  /* represents the 9th, 19th, 29th, etc, element */
:nth-child(10n+9)  /* Same */
:nth-child(10n+-1) /* Syntactically invalid, and would be ignored */</pre>
</div>


<h5><a name=nth-last-child-pseudo>:nth-last-child() pseudo-class</a></h5>

<p>The <code>:nth-last-child(<var>a</var>n+<var>b</var>)</code>
pseudo-class notation represents an element that has
<var>a</var><code>n</code>+<var>b</var>-1 siblings
<strong>after</strong> it in the document tree, for a given positive
integer or zero value of <code>n</code>, and has a parent element. See
<code>:nth-child()</code> pseudo-class for the syntax of its argument.
It also accepts the '<code>even</code>' and '<code>odd</code>' values
as arguments.


<div class="example">
<p>Examples:</p>
<pre>tr:nth-last-child(-n+2)    /* represents the two last rows of an HTML table */

foo:nth-last-child(odd)    /* represents all odd foo elements in their parent element,
                              counting from the last one */</pre>
</div>


<h5><a name=nth-of-type-pseudo>:nth-of-type() pseudo-class</a></h5>

<p>The <code>:nth-of-type(<var>a</var>n+<var>b</var>)</code>
pseudo-class notation represents an element that has
<var>a</var><code>n</code>+<var>b</var>-1 siblings with the same
element name <strong>before</strong> it in the document tree, for a
given zero or positive integer value of <code>n</code>, and has a
parent element. In other words, this matches the <var>b</var>th child
of that type after all the children of that type have been split into
groups of a elements each. See <code>:nth-child()</code> pseudo-class
for the syntax of its argument. It also accepts the
'<code>even</code>' and '<code>odd</code>' values.


<div class="example">
<p>CSS example:</p>
<p>This allows an author to alternate the position of floated images:</p>
<pre>img:nth-of-type(2n+1) { float: right; }
img:nth-of-type(2n) { float: left; }</pre>
</div>


<h5><a name=nth-last-of-type-pseudo>:nth-last-of-type() pseudo-class</a></h5>

<p>The <code>:nth-last-of-type(<var>a</var>n+<var>b</var>)</code>
pseudo-class notation represents an element that has
<var>a</var><code>n</code>+<var>b</var>-1 siblings with the same
element name <strong>after</strong> it in the document tree, for a
given zero or positive integer value of <code>n</code>, and has a
parent element. See <code>:nth-child()</code> pseudo-class for the
syntax of its argument. It also accepts the '<code>even</code>' and '<code>odd</code>' values.


<div class="example">
 <p>Example:</p>
 <p>To represent all <code>h2</code> children of an XHTML
 <code>body</code> except the first and last, one could use the
 following selector:</p>
 <pre>body &gt; h2:nth-of-type(n+2):nth-last-of-type(n+2)</pre>
 <p>In this case, one could also use <code>:not()</code>, although the
 selector ends up being just as long:</p>
 <pre>body &gt; h2:not(:first-of-type):not(:last-of-type)</pre>
</div>


<h5><a name=first-child-pseudo>:first-child pseudo-class</a></h5>

<p>Same as <code>:nth-child(1)</code>. The <code>:first-child</code> pseudo-class
represents an element that is the first child of some other element.


<div class="example">
  <p>Examples:</p>
  <p>The following selector represents a <code>p</code> element that is
  the first child of a <code>div</code> element:</p>
  <pre>div &gt; p:first-child</pre>
  <p>This selector can represent the <code>p</code> inside the
  <code>div</code> of the following fragment:</p>
  <pre>&lt;p&gt; The last P before the note.&lt;/p&gt;
&lt;div class="note"&gt;
   &lt;p&gt; The first P inside the note.&lt;/p&gt;
&lt;/div&gt;</pre>but cannot represent the second <code>p</code> in the following
fragment: 
  <pre>&lt;p&gt; The last P before the note.&lt;/p&gt;
&lt;div class="note"&gt;
   &lt;h2&gt; Note &lt;/h2&gt;
   &lt;p&gt; The first P inside the note.&lt;/p&gt;
&lt;/div&gt;</pre>
  <p>The following two selectors are usually equivalent:</p>
  <pre>* &gt; a:first-child /* a is first child of any element */
a:first-child /* Same (assuming a is not the root element) */</pre>
</div>

<h5><a name=last-child-pseudo>:last-child pseudo-class</a></h5>

<p>Same as <code>:nth-last-child(1)</code>. The <code>:last-child</code> pseudo-class
represents an element that is the last child of some other element. 

<div class="example">
 <p>Example:</p>
 <p>The following selector represents a list item <code>li</code> that
 is the last child of an ordered list <code>ol</code>.
 <pre>ol &gt; li:last-child</pre>
</div>

<h5><a name=first-of-type-pseudo>:first-of-type pseudo-class</a></h5>

<p>Same as <code>:nth-of-type(1)</code>. The <code>:first-of-type</code> pseudo-class
represents an element that is the first sibling of its type in the list of
children of its parent element. 

<div class="example">
<p>Example:</p>
<p>The following selector represents a definition title
<code>dt</code> inside a definition list <code>dl</code>, this
<code>dt</code> being the first of its type in the list of children of
its parent element.</p>
<pre>dl dt:first-of-type</pre>
<p>It is a valid description for the first two <code>dt</code>
elements in the following example but not for the third one:</p>
<pre>&lt;dl&gt;
 &lt;dt&gt;gigogne&lt;/dt&gt;
 &lt;dd&gt;
  &lt;dl&gt;
   &lt;dt&gt;fus&eacute;e&lt;/dt&gt;
   &lt;dd&gt;multistage rocket&lt;/dd&gt;
   &lt;dt&gt;table&lt;/dt&gt;
   &lt;dd&gt;nest of tables&lt;/dd&gt;
  &lt;/dl&gt;
 &lt;/dd&gt;
&lt;/dl&gt;</pre>
</div>

<h5><a name=last-of-type-pseudo>:last-of-type pseudo-class</a></h5>

<p>Same as <code>:nth-last-of-type(1)</code>. The
<code>:last-of-type</code> pseudo-class represents an element that is
the last sibling of its type in the list of children of its parent
element.</p>

<div class="example">
 <p>Example:</p>
 <p>The following selector represents the last data cell
 <code>td</code> of a table row.</p>
 <pre>tr &gt; td:last-of-type</pre>
</div>

<h5><a name=only-child-pseudo>:only-child pseudo-class</a></h5>

<p>Represents an element that has a parent element and whose parent
element has no other element children. Same as
<code>:first-child:last-child</code> or
<code>:nth-child(1):nth-last-child(1)</code>, but with a lower
specificity.</p>

<h5><a name=only-of-type-pseudo>:only-of-type pseudo-class</a></h5>

<p>Represents an element that has a parent element and whose parent
element has no other element children with the same element name. Same
as <code>:first-of-type:last-of-type</code> or
<code>:nth-of-type(1):nth-last-of-type(1)</code>, but with a lower
specificity.</p>


<h5><a name=empty-pseudo></a>:empty pseudo-class</h5>

<p>The <code>:empty</code> pseudo-class represents an element that has
no children at all. In terms of the DOM, only element nodes and text
nodes (including CDATA nodes and entity references) whose data has a
non-zero length must be considered as affecting emptiness; comments,
PIs, and other nodes must not affect whether an element is considered
empty or not.</p>

<div class="example">
 <p>Examples:</p>
 <p><code>p:empty</code> is a valid representation of the following fragment:</p>
 <pre>&lt;p&gt;&lt;/p&gt;</pre>
 <p><code>foo:empty</code> is not a valid representation for the
 following fragments:</p>
 <pre>&lt;foo&gt;bar&lt;/foo&gt;</pre>
 <pre>&lt;foo&gt;&lt;bar&gt;bla&lt;/bar&gt;&lt;/foo&gt;</pre>
 <pre>&lt;foo&gt;this is not &lt;bar&gt;:empty&lt;/bar&gt;&lt;/foo&gt;</pre>
</div>

<h4><a name=content-selectors>6.6.6. Blank</a></h4> <!-- It's the Return of Appendix H!!! Run away! -->

<p>This section intentionally left blank.</p>
<!-- (used to be :contains()) -->

<h4><a name=negation></a>6.6.7. The negation pseudo-class</h4>

<p>The negation pseudo-class, <code>:not(<var>X</var>)</code>, is a
functional notation taking a <a href="#simple-selectors-dfn">simple
selector</a> (excluding the negation pseudo-class itself and
pseudo-elements) as an argument. It represents an element that is not
represented by the argument.

<!-- pseudo-elements are not simple selectors, so the above paragraph
may be a bit confusing -->

<div class="example">
  <p>Examples:</p>
  <p>The following CSS selector matches all <code>button</code>
  elements in an HTML document that are not disabled.</p>
  <pre>button:not([DISABLED])</pre>
  <p>The following selector represents all but <code>FOO</code>
  elements.</p>
  <pre>*:not(FOO)</pre>
  <p>The following group of selectors represents all HTML elements
  except links.</p>
  <pre>html|*:not(:link):not(:visited)</pre>
</div>

<p>Default namespace declarations do not affect the argument of the
negation pseudo-class unless the argument is a universal selector or a
type selector.</p>

<div class="example">
  <p>Examples:</p>
  <p>Assuming that the default namespace is bound to
  "http://example.com/", the following selector represents all
  elements that are not in that namespace:</p>
  <pre>*|*:not(*)</pre>
  <p>The following CSS selector matches any element being hovered,
  regardless of its namespace. In particular, it is not limited to
  only matching elements in the default namespace that are not being
  hovered, and elements not in the default namespace don't match the
  rule when they <em>are</em> being hovered.</p>
  <pre>*|*:not(:hover)</pre>
</div>

<p class="note"><strong>Note</strong>: the :not() pseudo allows
useless selectors to be written.  For instance <code>:not(*|*)</code>,
which represents no element at all, or <code>foo:not(bar)</code>,
which is equivalent to <code>foo</code> but with a higher
specificity.</p>

<h3><a name=pseudo-elements>7. Pseudo-elements</a></h3>

<p>Pseudo-elements create abstractions about the document tree beyond
those specified by the document language. For instance, document
languages do not offer mechanisms to access the first letter or first
line of an element's content. Pseudo-elements allow designers to refer
to this otherwise inaccessible information. Pseudo-elements may also
provide designers a way to refer to content that does not exist in the
source document (e.g., the <code>::before</code> and
<code>::after</code> pseudo-elements give access to generated
content).</p>

<p>A pseudo-element is made of two colons (<code>::</code>) followed
by the name of the pseudo-element.</p>

<p>This <code>::</code> notation is introduced by the current document
in order to establish a discrimination between pseudo-classes and
pseudo-elements.  For compatibility with existing style sheets, user
agents must also accept the previous one-colon notation for
pseudo-elements introduced in CSS levels 1 and 2 (namely,
<code>:first-line</code>, <code>:first-letter</code>,
<code>:before</code> and <code>:after</code>). This compatibility is
not allowed for the new pseudo-elements introduced in CSS level 3.</p>

<p>Only one pseudo-element may appear per selector, and if present it
must appear after the sequence of simple selectors that represents the
<a href="#subject">subjects</a> of the selector. <span class="note">A
future version of this specification may allow multiple
pesudo-elements per selector.</span></p>

<h4><a name=first-line>7.1. The ::first-line pseudo-element</a></h4>

<p>The <code>::first-line</code> pseudo-element describes the contents
of the first formatted line of an element.

<div class="example">
<p>CSS example:</p>
<pre>p::first-line { text-transform: uppercase }</pre>
<p>The above rule means "change the letters of the first line of every
paragraph to uppercase".</p>
</div>

<p>The selector <code>p::first-line</code> does not match any real
HTML element. It does match a pseudo-element that conforming user
agents will insert at the beginning of every paragraph.</p>

<p>Note that the length of the first line depends on a number of
factors, including the width of the page, the font size, etc.  Thus,
an ordinary HTML paragraph such as:</p>

<pre>
&lt;P&gt;This is a somewhat long HTML 
paragraph that will be broken into several 
lines. The first line will be identified
by a fictional tag sequence. The other lines 
will be treated as ordinary lines in the 
paragraph.&lt;/P&gt;
</pre>

<p>the lines of which happen to be broken as follows:

<pre>
THIS IS A SOMEWHAT LONG HTML PARAGRAPH THAT
will be broken into several lines. The first
line will be identified by a fictional tag 
sequence. The other lines will be treated as 
ordinary lines in the paragraph.
</pre>

<p>This paragraph might be "rewritten" by user agents to include the
<em>fictional tag sequence</em> for <code>::first-line</code>. This
fictional tag sequence helps to show how properties are inherited.</p>

<pre>
&lt;P&gt;<b>&lt;P::first-line&gt;</b> This is a somewhat long HTML 
paragraph that <b>&lt;/P::first-line&gt;</b> will be broken into several
lines. The first line will be identified 
by a fictional tag sequence. The other lines 
will be treated as ordinary lines in the 
paragraph.&lt;/P&gt;
</pre>

<p>If a pseudo-element breaks up a real element, the desired effect
can often be described by a fictional tag sequence that closes and
then re-opens the element. Thus, if we mark up the previous paragraph
with a <code>span</code> element:</p>

<pre>
&lt;P&gt;<b>&lt;SPAN class="test"&gt;</b> This is a somewhat long HTML
paragraph that will be broken into several
lines.<b>&lt;/SPAN&gt;</b> The first line will be identified
by a fictional tag sequence. The other lines 
will be treated as ordinary lines in the 
paragraph.&lt;/P&gt;
</pre>

<p>the user agent could simulate start and end tags for
<code>span</code> when inserting the fictional tag sequence for
<code>::first-line</code>.

<pre>
&lt;P&gt;&lt;P::first-line&gt;<b>&lt;SPAN class="test"&gt;</b> This is a
somewhat long HTML
paragraph that will <b>&lt;/SPAN&gt;</b>&lt;/P::first-line&gt;<b>&lt;SPAN class="test"&gt;</b> be
broken into several
lines.<b>&lt;/SPAN&gt;</b> The first line will be identified
by a fictional tag sequence. The other lines
will be treated as ordinary lines in the 
paragraph.&lt;/P&gt;
</pre>

<p>In CSS, the <code>::first-line</code> pseudo-element can only be
attached to a block-level element, an inline-block, a table-caption,
or a table-cell.</p>

<p><a name="first-formatted-line"></a>The "first formatted line" of an
element may occur inside a
block-level descendant in the same flow (i.e., a block-level
descendant that is not positioned and not a float). E.g., the first
line of the <code>div</code> in <code>&lt;DIV>&lt;P>This
line...&lt;/P>&lt/DIV></code> is the first line of the <code>p</code> (assuming
that both <code>p</code> and <code>div</code> are block-level).

<p>The first line of a table-cell or inline-block cannot be the first
formatted line of an ancestor element. Thus, in <code>&lt;DIV&gt;&lt;P
STYLE="display: inline-block">Hello&lt;BR&gt;Goodbye&lt;/P&gt;
etcetera&lt;/DIV&gt;</code> the first formatted line of the
<code>div</code> is not the line "Hello".

<p class="note">Note that the first line of the <code>p</code> in this
fragment: <code>&lt;p&gt&lt;br&gt;First...</code> doesn't contain any
letters (assuming the default style for <code>br</code> in HTML
4). The word "First" is not on the first formatted line.

<p>A UA should act as if the fictional start tags of the
<code>::first-line</code> pseudo-elements were nested just inside the
innermost enclosing block-level element. (Since CSS1 and CSS2 were
silent on this case, authors should not rely on this behavior.) Here
is an example. The fictional tag sequence for</p>

<pre>
&lt;DIV>
  &lt;P>First paragraph&lt;/P>
  &lt;P>Second paragraph&lt;/P>
&lt;/DIV>
</pre>

<p>is</p>

<pre>
&lt;DIV>
  &lt;P>&lt;DIV::first-line>&lt;P::first-line>First paragraph&lt;/P::first-line>&lt;/DIV::first-line>&lt;/P>
  &lt;P>&lt;P::first-line>Second paragraph&lt;/P::first-line>&lt;/P>
&lt;/DIV>
</pre>

<p>The <code>::first-line</code> pseudo-element is similar to an
inline-level element, but with certain restrictions. In CSS, the
following properties apply to a <code>::first-line</code>
pseudo-element: font properties, color property, background
properties, 'word-spacing', 'letter-spacing', 'text-decoration',
'vertical-align', 'text-transform', 'line-height'. UAs may apply other
properties as well.</p>


<h4><a name=first-letter>7.2. The ::first-letter pseudo-element</a></h4>

<p>The <code>::first-letter</code> pseudo-element represents the first
letter of the first line of a block, if it is not preceded by any
other content (such as images or inline tables) on its line. The
::first-letter pseudo-element may be used for "initial caps" and "drop
caps", which are common typographical effects. This type of initial
letter is similar to an inline-level element if its 'float' property
is 'none'; otherwise, it is similar to a floated element.</p>

<p>In CSS, these are the properties that apply to <code>::first-letter</code>
pseudo-elements: font properties, 'text-decoration', 'text-transform',
'letter-spacing', 'word-spacing' (when appropriate), 'line-height',
'float', 'vertical-align' (only if 'float' is 'none'), margin
properties, padding properties, border properties, color property,
background properties.  UAs may apply other properties as well.  To
allow UAs to render a typographically correct drop cap or initial cap,
the UA may choose a line-height, width and height based on the shape
of the letter, unlike for normal elements.</p>

<div class="example">
<p>Example:</p>
<p>This example shows a possible rendering of an initial cap. Note
that the 'line-height' that is inherited by the <code>::first-letter</code>
pseudo-element is 1.1, but the UA in this example has computed the
height of the first letter differently, so that it doesn't cause any
unnecessary space between the first two lines. Also note that the
fictional start tag of the first letter is inside the <span>span</span>, and thus
the font weight of the first letter is normal, not bold as the <span>span</span>:
<pre>
p { line-height: 1.1 }
p::first-letter { font-size: 3em; font-weight: normal }
span { font-weight: bold }
...
&lt;p>&lt;span>Het hemelsche&lt;/span> gerecht heeft zich ten lange lesten&lt;br>
Erbarremt over my en mijn benaeuwde vesten&lt;br>
En arme burgery, en op mijn volcx gebed&lt;br>
En dagelix geschrey de bange stad ontzet.
</pre>
<div class="figure">
<p><img src="initial-cap.png" alt="Image illustrating the ::first-letter pseudo-element">
</div>
</div>

<div class="example">
<p>The following CSS will make a drop cap initial letter span about two lines:</p>

<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"&gt;
&lt;HTML&gt;
 &lt;HEAD&gt;
  &lt;TITLE&gt;Drop cap initial letter&lt;/TITLE&gt;
  &lt;STYLE type="text/css"&gt;
   P               { font-size: 12pt; line-height: 1.2 }
   P::first-letter { font-size: 200%; font-weight: bold; float: left }
   SPAN            { text-transform: uppercase }
  &lt;/STYLE&gt;
 &lt;/HEAD&gt;
 &lt;BODY&gt;
  &lt;P&gt;&lt;SPAN&gt;The first&lt;/SPAN&gt; few words of an article
    in The Economist.&lt;/P&gt;
 &lt;/BODY&gt;
&lt;/HTML&gt;
</pre>

<p>This example might be formatted as follows:</p>

<div class="figure">
<P><img src="first-letter.gif" alt="Image illustrating the combined effect of the ::first-letter and ::first-line pseudo-elements"></p>
</div>

<p>The <span class="index-inst" title="fictional tag
sequence">fictional tag sequence</span> is:</p>

<pre>
&lt;P&gt;
&lt;SPAN&gt;
&lt;P::first-letter&gt;
T
&lt;/P::first-letter&gt;he first
&lt;/SPAN&gt; 
few words of an article in the Economist.
&lt;/P&gt;
</pre>

<p>Note that the <code>::first-letter</code> pseudo-element tags abut
the content (i.e., the initial character), while the ::first-line
pseudo-element start tag is inserted right after the start tag of the
block element.</p> </div>

<p>In order to achieve traditional drop caps formatting, user agents
may approximate font sizes, for example to align baselines. Also, the
glyph outline may be taken into account when formatting.</p>

<p>Punctuation (i.e, characters defined in Unicode in the "open" (Ps),
"close" (Pe), "initial" (Pi). "final" (Pf) and "other" (Po)
punctuation classes), that precedes or follows the first letter should
be included. <a href="#refsUNICODE">[UNICODE]</a></p>

<div class="figure">
<P><img src="first-letter2.gif" alt="Quotes that precede the
first letter should be included."></p>
</div>

<p>The <code>::first-letter</code> also applies if the first letter is
in fact a digit, e.g., the "6" in "67 million dollars is a lot of
money."</p>

<p>In CSS, the <code>::first-letter</code> pseudo-element applies to
block, list-item, table-cell, table-caption, and inline-block
elements. <span class="note">A future version of this specification
may allow this pesudo-element to apply to more element
types.</span></p>

<p>The <code>::first-letter</code> pseudo-element can be used with all
such elements that contain text, or that have a descendant in the same
flow that contains text. A UA should act as if the fictional start tag
of the ::first-letter pseudo-element is just before the first text of
the element, even if that first text is in a descendant.</p>

<div class="example">
<p>Example:</p>
<p>The fictional tag sequence for this HTMLfragment:
<pre>&lt;div>
&lt;p>The first text.</pre>
<p>is:
<pre>&lt;div>
&lt;p>&lt;div::first-letter>&lt;p::first-letter>T&lt;/...>&lt;/...>he first text.</pre>
</div>

<p>The first letter of a table-cell or inline-block cannot be the
first letter of an ancestor element. Thus, in <code>&lt;DIV&gt;&lt;P
STYLE="display: inline-block">Hello&lt;BR&gt;Goodbye&lt;/P&gt;
etcetera&lt;/DIV&gt;</code> the first letter of the <code>div</code> is not the
letter "H". In fact, the <code>div</code> doesn't have a first letter.

<p>The first letter must occur on the <a
href="#first-formatted-line">first formatted line.</a> For example, in
this fragment: <code>&lt;p&gt&lt;br&gt;First...</code> the first line
doesn't contain any letters and <code>::first-letter</code> doesn't
match anything (assuming the default style for <code>br</code> in HTML
4). In particular, it does not match the "F" of "First."

<p>In CSS, if an element is a list item ('display: list-item'), the
<code>::first-letter</code> applies to the first letter in the
principal box after the marker. UAs may ignore
<code>::first-letter</code> on list items with 'list-style-position:
inside'. If an element has <code>::before</code> or
<code>::after</code> content, the <code>::first-letter</code> applies
to the first letter of the element <em>including</em> that content.

<div class="example">
<p>Example:</p>
<p>After the rule 'p::before {content: "Note: "}', the selector
'p::first-letter' matches the "N" of "Note".</p>
</div>

<p>Some languages may have specific rules about how to treat certain
letter combinations. In Dutch, for example, if the letter combination
"ij" appears at the beginning of a word, both letters should be
considered within the <code>::first-letter</code> pseudo-element.

<p>If the letters that would form the ::first-letter are not in the
same element, such as "'T" in <code>&lt;p>'&lt;em>T...</code>, the UA
may create a ::first-letter pseudo-element from one of the elements,
both elements, or simply not create a pseudo-element.</p>

<p>Similarly, if the first letter(s) of the block are not at the start
of the line (for example due to bidirectional reordering), then the UA
need not create the pseudo-element(s).

<div class="example">
<p>Example:</p>
<p><a name="overlapping-example">The following example</a> illustrates
how overlapping pseudo-elements may interact.  The first letter of
each P element will be green with a font size of '24pt'. The rest of
the first formatted line will be 'blue' while the rest of the
paragraph will be 'red'.</p>

<pre>p { color: red; font-size: 12pt }
p::first-letter { color: green; font-size: 200% }
p::first-line { color: blue }

&lt;P&gt;Some text that ends up on two lines&lt;/P&gt;</pre>

<p>Assuming that a line break will occur before the word "ends", the
<span class="index-inst" title="fictional tag sequence">fictional tag
sequence</span> for this fragment might be:</p>

<pre>&lt;P&gt;
&lt;P::first-line&gt;
&lt;P::first-letter&gt; 
S 
&lt;/P::first-letter&gt;ome text that 
&lt;/P::first-line&gt; 
ends up on two lines 
&lt;/P&gt;</pre>

<p>Note that the <code>::first-letter</code> element is inside the <code>::first-line</code>
element.  Properties set on <code>::first-line</code> are inherited by
<code>::first-letter</code>, but are overridden if the same property is set on
<code>::first-letter</code>.</p>
</div>


<h4><a name=UIfragments>7.3.</a> <a name=selection>The ::selection pseudo-element</a></h4>

<p>The <code>::selection</code> pseudo-element applies to the portion
of a document that has been highlighted by the user. This also
applies, for example, to selected text within an editable text
field. This pseudo-element should not be confused with the <code><a
href="#checked">:checked</a></code> pseudo-class (which used to be
named <code>:selected</code>)

<p>Although the <code>::selection</code> pseudo-element is dynamic in
nature, and is altered by user action, it is reasonable to expect that
when a UA re-renders to a static medium (such as a printed page, see
<a href="#refsCSS21">[CSS21]</a>) which was originally rendered to a
dynamic medium (like screen), the UA may wish to transfer the current
<code>::selection</code> state to that other medium, and have all the
appropriate formatting and rendering take effect as well. This is not
required &mdash; UAs may omit the <code>::selection</code>
pseudo-element for static media.

<p>These are the CSS properties that apply to <code>::selection</code>
pseudo-elements: color, background, cursor (optional), outline
(optional). The computed value of the 'background-image' property on
<code>::selection</code> may be ignored.


<h4><a name=gen-content>7.4. The ::before and ::after pseudo-elements</a></h4>

<p>The <code>::before</code> and <code>::after</code> pseudo-elements
can be used to describe generated content before or after an element's
content. They are explained in CSS 2.1 <a
href="#refsCSS21">[CSS21]</a>.</p>

<p>When the <code>::first-letter</code> and <code>::first-line</code>
pseudo-elements are combined with <code>::before</code> and
<code>::after</code>, they apply to the first letter or line of the
element including the inserted text.</p>

<h2><a name=combinators>8. Combinators</a></h2>

<h3><a name=descendant-combinators>8.1. Descendant combinator</a></h3>

<p>At times, authors may want selectors to describe an element that is
the descendant of another element in the document tree (e.g., "an
<code>EM</code> element that is contained within an <code>H1</code>
element"). Descendant combinators express such a relationship. A
descendant combinator is <a href="#whitespace">white space</a> that
separates two sequences of simple selectors.  A selector of the form
"<code>A B</code>" represents an element <code>B</code> that is an
arbitrary descendant of some ancestor element <code>A</code>.

<div class="example">
 <p>Examples:</p>
 <p>For example, consider the following selector:</p>
 <pre>h1 em</pre>
 <p>It represents an <code>em</code> element being the descendant of
 an <code>h1</code> element. It is a correct and valid, but partial,
 description of the following fragment:</p>
 <pre>&lt;h1&gt;This &lt;span class="myclass"&gt;headline
is &lt;em&gt;very&lt;/em&gt; important&lt;/span&gt;&lt;/h1&gt;</pre>
 <p>The following selector:</p>
 <pre>div * p</pre>
 <p>represents a <code>p</code> element that is a grandchild or later
 descendant of a <code>div</code> element. Note the whitespace on
 either side of the "*" is not part of the universal selector; the
 whitespace is a combinator indicating that the DIV must be the
 ancestor of some element, and that that element must be an ancestor
 of the P.</p>
 <p>The following selector, which combines descendant combinators and
 <a href="#attribute-selectors">attribute selectors</a>, represents an
 element that (1) has the <code>href</code> attribute set and (2) is
 inside a <code>p</code> that is itself inside a <code>div</code>:</p>
 <pre>div p *[href]</pre>
</div>

<h3><a name=child-combinators>8.2. Child combinators</a></h3>

<p>A <dfn>child combinator</dfn> describes a childhood relationship
between two elements. A child combinator is made of the
&quot;greater-than sign&quot; (<code>&gt;</code>) character and
separates two sequences of simple selectors.


<div class="example">
 <p>Examples:</p>
 <p>The following selector represents a <code>p</code> element that is
 child of <code>body</code>:</p>
 <pre>body &gt; p</pre>
 <p>The following example combines descendant combinators and child
 combinators.</p>
 <pre>div ol&gt;li p</pre><!-- LEAVE THOSE SPACES OUT! see below -->
 <p>It represents a <code>p</code> element that is a descendant of an
 <code>li</code> element; the <code>li</code> element must be the
 child of an <code>ol</code> element; the <code>ol</code> element must
 be a descendant of a <code>div</code>. Notice that the optional white
 space around the "&gt;" combinator has been left out.</p>
</div>

<p>For information on selecting the first child of an element, please
see the section on the <code><a
href="#structural-pseudos">:first-child</a></code> pseudo-class
above.</p>

<h3><a name=sibling-combinators>8.3. Sibling combinators</a></h3>

<p>There are two different sibling combinators: the adjacent sibling
combinator and the general sibling combinator. In both cases,
non-element nodes (e.g. text between elements) are ignored when
considering adjacency of elements.</p>

<h4><a name=adjacent-sibling-combinators>8.3.1. Adjacent sibling combinator</a></h4>

<p>The adjacent sibling combinator is made of the &quot;plus
sign&quot; (U+002B, <code>+</code>) character that separates two
sequences of simple selectors. The elements represented by the two
sequences share the same parent in the document tree and the element
represented by the first sequence immediately precedes the element
represented by the second one.</p>

<div class="example">
 <p>Examples:</p>
 <p>The following selector represents a <code>p</code> element
 immediately following a <code>math</code> element:</p>
 <pre>math + p</pre>
 <p>The following selector is conceptually similar to the one in the
 previous example, except that it adds an attribute selector &mdash; it
 adds a constraint to the <code>h1</code> element, that it must have
 <code>class="opener"</code>:</p>
 <pre>h1.opener + h2</pre>
</div>


<h4><a name=general-sibling-combinators>8.3.2. General sibling combinator</a></h4>

<p>The general sibling combinator is made of the &quot;tilde&quot;
(U+007E, <code>~</code>) character that separates two sequences of
simple selectors. The elements represented by the two sequences share
the same parent in the document tree and the element represented by
the first sequence precedes (not necessarily immediately) the element
represented by the second one.</p>

<div class="example">
 <p>Example:</p>
 <pre>h1 ~ pre</pre>
 <p>represents a <code>pre</code> element following an <code>h1</code>. It
 is a correct and valid, but partial, description of:</p>
 <pre>&lt;h1&gt;Definition of the function a&lt;/h1&gt;
&lt;p&gt;Function a(x) has to be applied to all figures in the table.&lt;/p&gt;
&lt;pre&gt;function a(x) = 12x/13.5&lt;/pre&gt;</pre>
</div>

<h2><a name=specificity>9. Calculating a selector's specificity</a></h2>

<p>A selector's specificity is calculated as follows:</p>

<ul>
  <li>count the number of ID selectors in the selector (= a)</li>
  <li>count the number of class selectors, attributes selectors, and pseudo-classes in the selector (= b)</li>
  <li>count the number of element names in the selector (= c)</li>
  <li>ignore pseudo-elements</li>
</ul>

<p>Selectors inside <a href="#negation">the negation pseudo-class</a>
are counted like any other, but the negation itself does not count as
a pseudo-class.</p>

<p>Concatenating the three numbers a-b-c (in a number system with a
large base) gives the specificity.</p>

<div class="example">
<p>Examples:</p>
<pre>*               /* a=0 b=0 c=0 -&gt; specificity =   0 */
LI              /* a=0 b=0 c=1 -&gt; specificity =   1 */
UL LI           /* a=0 b=0 c=2 -&gt; specificity =   2 */
UL OL+LI        /* a=0 b=0 c=3 -&gt; specificity =   3 */
H1 + *[REL=up]  /* a=0 b=1 c=1 -&gt; specificity =  11 */
UL OL LI.red    /* a=0 b=1 c=3 -&gt; specificity =  13 */
LI.red.level    /* a=0 b=2 c=1 -&gt; specificity =  21 */
#x34y           /* a=1 b=0 c=0 -&gt; specificity = 100 */
#s12:not(FOO)   /* a=1 b=0 c=1 -&gt; specificity = 101 */
</pre>
</div>

<p class="note"><strong>Note:</strong> the specificity of the styles
specified in an HTML <code>style</code> attribute is described in CSS
2.1. <a href="#refsCSS21">[CSS21]</a>.</p>

<h2><a name=w3cselgrammar>10. The grammar of Selectors</a></h2>

<h3><a name=grammar>10.1. Grammar</a></h3>

<p>The grammar below defines the syntax of Selectors.  It is globally
LL(1) and can be locally LL(2) (but note that most UA's should not use
it directly, since it doesn't express the parsing conventions). The
format of the productions is optimized for human consumption and some
shorthand notations beyond Yacc (see <a href="#refsYACC">[YACC]</a>)
are used:</p>

<ul>
  <li><b>*</b>: 0 or more
  <li><b>+</b>: 1 or more
  <li><b>?</b>: 0 or 1
  <li><b>|</b>: separates alternatives
  <li><b>[ ]</b>: grouping </li>
</ul>

<p>The productions are:</p>

<pre>selectors_group
  : selector [ COMMA S* selector ]*
  ;

selector
  : simple_selector_sequence [ combinator simple_selector_sequence ]*
  ;

combinator
  /* combinators can be surrounded by white space */
  : PLUS S* | GREATER S* | TILDE S* | S+
  ;

simple_selector_sequence
  : [ type_selector | universal ]
    [ HASH | class | attrib | pseudo | negation ]*
  | [ HASH | class | attrib | pseudo | negation ]+
  ;

type_selector
  : [ namespace_prefix ]? element_name
  ;

namespace_prefix
  : [ IDENT | '*' ]? '|'
  ;

element_name
  : IDENT
  ;

universal
  : [ namespace_prefix ]? '*'
  ;

class
  : '.' IDENT
  ;

attrib
  : '[' S* [ namespace_prefix ]? IDENT S*
        [ [ PREFIXMATCH |
            SUFFIXMATCH |
            SUBSTRINGMATCH |
            '=' |
            INCLUDES |
            DASHMATCH ] S* [ IDENT | STRING ] S*
        ]? ']'
  ;

pseudo
  /* '::' starts a pseudo-element, ':' a pseudo-class */
  /* Exceptions: :first-line, :first-letter, :before and :after. */
  /* Note that pseudo-elements are restricted to one per selector and */
  /* occur only in the last simple_selector_sequence. */
  : ':' ':'? [ IDENT | functional_pseudo ]
  ;

functional_pseudo
  : FUNCTION S* expression ')'
  ;

expression
  /* In CSS3, the expressions are identifiers, strings, */
  /* or of the form "an+b" */
  : [ [ PLUS | '-' | DIMENSION | NUMBER | STRING | IDENT ] S* ]+
  ;

negation
  : NOT S* negation_arg S* ')'
  ;

negation_arg
  : type_selector | universal | HASH | class | attrib | pseudo
  ;</pre>


<h3><a name=lex>10.2. Lexical scanner</a></h3>

<p>The following is the <a name=x3>tokenizer</a>, written in Flex (see
<a href="#refsFLEX">[FLEX]</a>) notation. The tokenizer is
case-insensitive.</p>

<p>The two occurrences of "\377" represent the highest character
number that current versions of Flex can deal with (decimal 255). They
should be read as "\4177777" (decimal 1114111), which is the highest
possible code point in Unicode/ISO-10646. <a
href="#refsUNICODE">[UNICODE]</a></p>

<pre>%option case-insensitive

ident     [-]?{nmstart}{nmchar}*
name      {nmchar}+
nmstart   [_a-z]|{nonascii}|{escape}
nonascii  [^\0-\177]
unicode   \\[0-9a-f]{1,6}(\r\n|[ \n\r\t\f])?
escape    {unicode}|\\[^\n\r\f0-9a-f]
nmchar    [_a-z0-9-]|{nonascii}|{escape}
num       [0-9]+|[0-9]*\.[0-9]+
string    {string1}|{string2}
string1   \"([^\n\r\f\\"]|\\{nl}|{nonascii}|{escape})*\"
string2   \'([^\n\r\f\\']|\\{nl}|{nonascii}|{escape})*\'
invalid   {invalid1}|{invalid2}
invalid1  \"([^\n\r\f\\"]|\\{nl}|{nonascii}|{escape})*
invalid2  \'([^\n\r\f\\']|\\{nl}|{nonascii}|{escape})*
nl        \n|\r\n|\r|\f
w         [ \t\r\n\f]*

%%

[ \t\r\n\f]+     return S;

"~="             return INCLUDES;
"|="             return DASHMATCH;
"^="             return PREFIXMATCH;
"$="             return SUFFIXMATCH;
"*="             return SUBSTRINGMATCH;
{ident}          return IDENT;
{string}         return STRING;
{ident}"("       return FUNCTION;
{num}            return NUMBER;
"#"{name}        return HASH;
{w}"+"           return PLUS;
{w}"&gt;"           return GREATER;
{w}","           return COMMA;
{w}"~"           return TILDE;
":not("          return NOT;
@{ident}         return ATKEYWORD;
{invalid}        return INVALID;
{num}%           return PERCENTAGE;
{num}{ident}     return DIMENSION;
"&lt;!--"           return CDO;
"--&gt;"            return CDC;

"url("{w}{string}{w}")"                           return URI;
"url("{w}([!#$%&*-~]|{nonascii}|{escape})*{w}")"  return URI;
U\+[0-9a-f?]{1,6}(-[0-9a-f]{1,6})?                return UNICODE_RANGE;

\/\*[^*]*\*+([^/*][^*]*\*+)*\/                    /* ignore comments */

.                return *yytext;</pre>



<h2><a name=downlevel>11. Namespaces and down-level clients</a></h2>

<p>An important issue is the interaction of CSS selectors with XML
documents in web clients that were produced prior to this
document. Unfortunately, due to the fact that namespaces must be
matched based on the URI which identifies the namespace, not the
namespace prefix, some mechanism is required to identify namespaces in
CSS by their URI as well. Without such a mechanism, it is impossible
to construct a CSS style sheet which will properly match selectors in
all cases against a random set of XML documents. However, given
complete knowledge of the XML document to which a style sheet is to be
applied, and a limited use of namespaces within the XML document, it
is possible to construct a style sheet in which selectors would match
elements and attributes correctly.</p>

<p>It should be noted that a down-level CSS client will (if it
properly conforms to CSS forward compatible parsing rules) ignore all
<code>@namespace</code> at-rules, as well as all style rules that make
use of namespace qualified element type or attribute selectors. The
syntax of delimiting namespace prefixes in CSS was deliberately chosen
so that down-level CSS clients would ignore the style rules rather
than possibly match them incorrectly.</p>

<p>The use of default namespaces in CSS makes it possible to write
element type selectors that will function in both namespace aware CSS
clients as well as down-level clients. It should be noted that
down-level clients may incorrectly match selectors against XML
elements in other namespaces.</p>

<p>The following are scenarios and examples in which it is possible to
construct style sheets which would function properly in web clients
that do not implement this proposal.</p>

<ol>
  <li>

   <p>The XML document does not use namespaces.</p>

   <ul>

    <li>In this case, it is obviously not necessary to declare or use
    namespaces in the style sheet. Standard CSS element type and
    attribute selectors will function adequately in a down-level
    client.</li>

    <li>In a CSS namespace aware client, the default behavior of
    element selectors matching without regard to namespace will
    function properly against all elements, since no namespaces are
    present. However, the use of specific element type selectors that
    match only elements that have no namespace ("<code>|name</code>")
    will guarantee that selectors will match only XML elements that do
    not have a declared namespace. </li>

   </ul>

  </li>

  <li>

   <p>The XML document defines a single, default namespace used
   throughout the document. No namespace prefixes are used in element
   names.</p>

   <ul>

    <li>In this case, a down-level client will function as if
    namespaces were not used in the XML document at all. Standard CSS
    element type and attribute selectors will match against all
    elements. </li>

   </ul>

  </li>

  <li>

   <p>The XML document does <b>not</b> use a default namespace, all
   namespace prefixes used are known to the style sheet author, and
   there is a direct mapping between namespace prefixes and namespace
   URIs. (A given prefix may only be mapped to one namespace URI
   throughout the XML document; there may be multiple prefixes mapped
   to the same URI).</p>

   <ul>

    <li>In this case, the down-level client will view and match
    element type and attribute selectors based on their fully
    qualified name, not the local part as outlined in the <a
    href="#typenmsp">Type selectors and Namespaces</a> section. CSS
    selectors may be declared using an escaped colon "<code>\:</code>"
    to describe the fully qualified names, e.g.
    "<code>html\:h1</code>" will match
    <code>&lt;html:h1&gt;</code>. Selectors using the qualified name
    will only match XML elements that use the same prefix. Other
    namespace prefixes used in the XML that are mapped to the same URI
    will not match as expected unless additional CSS style rules are
    declared for them.</li>

    <li>Note that selectors declared in this fashion will
    <em>only</em> match in down-level clients. A CSS namespace aware
    client will match element type and attribute selectors based on
    the name's local part. Selectors declared with the fully
    qualified name will not match (unless there is no namespace prefix
    in the fully qualified name).</li>

   </ul>

  </li>

 </ol>

<p>In other scenarios: when the namespace prefixes used in the XML are
not known in advance by the style sheet author; or a combination of
elements with no namespace are used in conjunction with elements using
a default namespace; or the same namespace prefix is mapped to
<em>different</em> namespace URIs within the same document, or in
different documents; it is impossible to construct a CSS style sheet
that will function properly against all elements in those documents,
unless, the style sheet is written using a namespace URI syntax (as
outlined in this document or similar) and the document is processed by
a CSS and XML namespace aware client.</p>

<h2><a name=profiling>12. Profiles</a></h2>

<p>Each specification using Selectors must define the subset of W3C
Selectors it allows and excludes, and describe the local meaning of
all the components of that subset.</p>

<p>Non normative examples:

<div class="profile">
<table class="tprofile">
  <tbody>
  <tr>
    <th class="title" colspan=2>Selectors profile</th></tr>
  <tr>
    <th>Specification</th>
    <td>CSS level 1</td></tr>
  <tr>
    <th>Accepts</th>
    <td>type selectors<br>class selectors<br>ID selectors<br>:link,
      :visited and :active pseudo-classes<br>descendant combinator
     <br>::first-line and ::first-letter pseudo-elements</td></tr>
  <tr>
    <th>Excludes</th>
    <td>
      
<p>universal selector<br>attribute selectors<br>:hover and :focus
      pseudo-classes<br>:target pseudo-class<br>:lang() pseudo-class<br>all UI
      element states pseudo-classes<br>all structural
      pseudo-classes<br>negation pseudo-class<br>all
      UI element fragments pseudo-elements<br>::before and ::after
      pseudo-elements<br>child combinators<br>sibling combinators
      
<p>namespaces</td></tr>
  <tr>
    <th>Extra constraints</th>
    <td>only one class selector allowed per sequence of simple
  selectors</td></tr></tbody></table><br><br>
<table class="tprofile">
  <tbody>
  <tr>
    <th class="title" colspan=2>Selectors profile</th></tr>
  <tr>
    <th>Specification</th>
    <td>CSS level 2</td></tr>
  <tr>
    <th>Accepts</th>
    <td>type selectors<br>universal selector<br>attribute presence and
      values selectors<br>class selectors<br>ID selectors<br>:link, :visited,
      :active, :hover, :focus, :lang() and :first-child pseudo-classes
     <br>descendant combinator<br>child combinator<br>adjacent sibling
      combinator<br>::first-line and ::first-letter pseudo-elements<br>::before
      and ::after pseudo-elements</td></tr>
  <tr>
    <th>Excludes</th>
    <td>
      
<p>content selectors<br>substring matching attribute
      selectors<br>:target pseudo-classes<br>all UI element
      states pseudo-classes<br>all structural pseudo-classes other
      than :first-child<br>negation pseudo-class<br>all UI element
      fragments pseudo-elements<br>general sibling combinators
      
<p>namespaces</td></tr>
  <tr>
    <th>Extra constraints</th>
    <td>more than one class selector per sequence of simple selectors (CSS1
      constraint) allowed</td></tr></tbody></table>

<p>In CSS, selectors express pattern matching rules that determine which style
rules apply to elements in the document tree. 

<p>The following selector (CSS level 2) will <b>match</b> all anchors <code>a</code>
with attribute <code>name</code> set inside a section 1 header <code>h1</code>: 
<pre>h1 a[name]</pre>

<p>All CSS declarations attached to such a selector are applied to elements
matching it. </div>

<div class="profile">
<table class="tprofile">
  <tbody>
  <tr>
    <th class="title" colspan=2>Selectors profile</th></tr>
  <tr>
    <th>Specification</th>
      <td>STTS 3</td>
    </tr>
  <tr>
    <th>Accepts</th>
    <td>
      
<p>type selectors<br>universal selectors<br>attribute selectors<br>class
      selectors<br>ID selectors<br>all structural pseudo-classes<br>
          all combinators
      
<p>namespaces</td></tr>
  <tr>
    <th>Excludes</th>
    <td>non-accepted pseudo-classes<br>pseudo-elements<br></td></tr>
  <tr>
    <th>Extra constraints</th>
    <td>some selectors and combinators are not allowed in fragment
      descriptions on the right side of STTS declarations.</td></tr></tbody></table>
  
<p>Selectors can be used in STTS 3 in two different
    manners: 
<ol>
  <li>a selection mechanism equivalent to CSS selection mechanism: declarations
  attached to a given selector are applied to elements matching that selector,
  <li>fragment descriptions that appear on the right side of declarations.
</li></ol></div>

<h2><a name=Conformance></a>13. Conformance and requirements</h2>

<p>This section defines conformance with the present specification only.

<p>The inability of a user agent to implement part of this specification due to
the limitations of a particular device (e.g., non interactive user agents will
probably not implement dynamic pseudo-classes because they make no sense without
interactivity) does not imply non-conformance.

<p>All specifications reusing Selectors must contain a <a
href="#profiling">Profile</a> listing the
subset of Selectors it accepts or excludes, and describing the constraints
it adds to the current specification. 

<p>Invalidity is caused by a parsing error, e.g. an unrecognized token or a token
which is not allowed at the current parsing point.

<p>User agents must observe the rules for handling parsing errors:
<ul>
  <li>a simple selector containing an undeclared namespace prefix is invalid</li>
  <li>a selector containing an invalid simple selector, an invalid combinator
    or an invalid token is invalid. </li>
  <li>a group of selectors containing an invalid selector is invalid.</li>
</ul>

<p>Specifications reusing Selectors must define how to handle parsing
errors. (In the case of CSS, the entire rule in which the selector is
used is dropped.)</p>

<!-- Apparently all these references are out of date:
<p>Implementations of this specification must behave as
"recipients of text data" as defined by <a href="#refsCWWW">[CWWW]</a>
when parsing selectors and attempting matches. (In particular,
implementations must assume the data is normalized and must not
normalize it.) Normative rules for matching strings are defined in
<a href="#refsCWWW">[CWWW]</a> and <a
href="#refsUNICODE">[UNICODE]</a> and apply to implementations of this
specification.</p>-->

<h2><a name=Tests></a>14. Tests</h2>

<p>This specification has <a
href="http://www.w3.org/Style/CSS/Test/CSS3/Selectors/current/">a test
suite</a> allowing user agents to verify their basic conformance to
the specification. This test suite does not pretend to be exhaustive
and does not cover all possible combined cases of Selectors.</p>

<h2><a name=ACKS></a>15. Acknowledgements</h2>

<p>The CSS working group would like to thank everyone who has sent
comments on this specification over the years.</p>

<p>The working group would like to extend special thanks to Donna
McManus, Justin Baker, Joel Sklar, and Molly Ives Brower who perfermed
the final editorial review.</p>

<h2><a name=references>16. References</a></h2>

<dl class="refs">

  <dt>[CSS1]
  <dd><a name=refsCSS1></a> Bert Bos, H&aring;kon Wium Lie; "<cite>Cascading Style Sheets, level 1</cite>", W3C Recommendation, 17 Dec 1996, revised 11 Jan 1999
  <dd>(<code><a href="http://www.w3.org/TR/REC-CSS1">http://www.w3.org/TR/REC-CSS1</a></code>)

  <dt>[CSS21]
  <dd><a name=refsCSS21></a> Bert Bos, Tantek &Ccedil;elik, Ian Hickson, H&aring;kon Wium Lie, editors; "<cite>Cascading Style Sheets, level 2 revision 1</cite>", W3C Working Draft, 13 June 2005 
  <dd>(<code><a href="http://www.w3.org/TR/CSS21">http://www.w3.org/TR/CSS21</a></code>)

  <dt>[CWWW]
  <dd><a name=refsCWWW></a> Martin J. D&uuml;rst, Fran&ccedil;ois Yergeau, Misha Wolf, Asmus Freytag, Tex Texin, editors; "<cite>Character Model for the World Wide Web</cite>", W3C Recommendation, 15 February 2005
  <dd>(<code><a href="http://www.w3.org/TR/charmod/">http://www.w3.org/TR/charmod/</a></code>)

  <dt>[FLEX]
  <dd><a name="refsFLEX"></a> "<cite>Flex: The Lexical Scanner Generator</cite>", Version 2.3.7, ISBN 1882114213

  <dt>[HTML4]
  <dd><a name="refsHTML4"></a> Dave Ragget, Arnaud Le Hors, Ian Jacobs, editors; "<cite>HTML 4.01 Specification</cite>", W3C Recommendation, 24 December 1999
  <dd>(<a href="http://www.w3.org/TR/html4/"><code>http://www.w3.org/TR/html4/</code></a>)

  <dt>[MATH]
  <dd><a name="refsMATH"></a> Patrick Ion, Robert Miner, editors; "<cite>Mathematical Markup Language (MathML) 1.01</cite>", W3C Recommendation, revision of 7 July 1999
  <dd>(<code><a href="http://www.w3.org/TR/REC-MathML/">http://www.w3.org/TR/REC-MathML/</a></code>)

  <dt>[RFC3066]
  <dd><a name="refsRFC3066"></a> H. Alvestrand; "<cite>Tags for the Identification of Languages</cite>", Request for Comments 3066, January 2001
  <dd>(<a href="http://www.ietf.org/rfc/rfc3066.txt"><code>http://www.ietf.org/rfc/rfc3066.txt</code></a>)

  <dt>[STTS]
  <dd><a name=refsSTTS></a> Daniel Glazman; "<cite>Simple Tree Transformation Sheets 3</cite>", Electricit&eacute; de France, submission to the W3C, 11 November 1998 
  <dd>(<code><a href="http://www.w3.org/TR/NOTE-STTS3">http://www.w3.org/TR/NOTE-STTS3</a></code>)

  <dt>[SVG]
  <dd><a name="refsSVG"></a> Jon Ferraiolo, &#34276;&#27810; &#28147;, Dean Jackson, editors; "<cite>Scalable Vector Graphics (SVG) 1.1 Specification</cite>", W3C Recommendation, 14 January 2003
  <dd>(<code><a href="http://www.w3.org/TR/SVG/">http://www.w3.org/TR/SVG/</a></code>)

  <dt>[UNICODE]</dt>
  <dd><a name="refsUNICODE"></a> <cite><a
   href="http://www.unicode.org/versions/Unicode4.1.0/">The Unicode Standard, Version 4.1</a></cite>, The Unicode Consortium. Boston, MA, Addison-Wesley, March 2005. ISBN 0-321-18578-1, as amended by <a href="http://www.unicode.org/versions/Unicode4.0.1/">Unicode 4.0.1</a> and <a href="http://www.unicode.org/versions/Unicode4.1.0/">Unicode  4.1.0</a>.
  <dd>(<code><a href="http://www.unicode.org/versions/">http://www.unicode.org/versions/</a></code>)</dd>

  <dt>[XML10]
  <dd><a name="refsXML10"></a> Tim Bray, Jean Paoli, C. M. Sperberg-McQueen, Eve Maler, Fran&ccedil;ois Yergeau, editors; "<cite>Extensible Markup Language (XML) 1.0 (Third Edition)</cite>", W3C Recommendation, 4 February 2004
  <dd>(<a href="http://www.w3.org/TR/REC-xml/"><code>http://www.w3.org/TR/REC-xml/</code></a>)

  <dt>[XMLNAMES]
  <dd><a name="refsXMLNAMES"></a> Tim Bray, Dave Hollander, Andrew Layman, editors; "<cite>Namespaces in XML</cite>", W3C Recommendation, 14 January 1999
  <dd>(<a href="http://www.w3.org/TR/REC-xml-names/"><code>http://www.w3.org/TR/REC-xml-names/</code></a>)

  <dt>[YACC]
  <dd><a name="refsYACC"></a> S. C. Johnson; "<cite>YACC &mdash; Yet another compiler compiler</cite>", Technical Report, Murray Hill, 1975

</dl>