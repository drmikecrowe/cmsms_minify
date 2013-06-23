<?php
$lang['friendlyname'] = 'Minify';
$lang['postinstall'] = 'Configure Minify via the Layout seciton.';
$lang['postuninstall'] = 'Minify is now uninstalled';
$lang['really_uninstall'] = 'Really? Are you sure
you want to unsinstall this module?';
$lang['uninstalled'] = 'Module Uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['upgraded'] = 'Module upgraded to version %s.';
$lang['moddescription'] = 'Javascript and CSS minifier using https://github.com/mrclay/minify';

$lang['error'] = 'Error!';
$land['admin_title'] = 'Minify Admin Panel';
$lang['admindescription'] = 'Control minification of Javascript and external CSS stylesheets';
$lang['accessdenied'] = 'Access Denied. Please check your permissions.';

// Tab Headers
$lang['title_settings'] = 'Settings';
$lang['title_builder'] = 'Builder';
$lang['title_minify_help'] = 'Minify Help';

//Changlog
$lang['changelog'] = '<ul>
<li>Version 0,9 - 16 June 2013. Initial Release.</li>
</ul>';

// Minify Help
$lang['minify_help'] = <<<EOS
		<h2><a name="#Usage"></a>Usage<a href="#Usage" class="section_anchor"></a></h2>
		<hr/>
<h2><a name="News"></a>News<a href="#News" class="section_anchor"></a></h2><p><strong>2012-03-10 <a href="http://code.google.com/p/minify/downloads/list" rel="nofollow">Minify 2.1.5</a> released! We've also converted to git and are <a href="https://github.com/mrclay/minify" rel="nofollow">mirroring at GitHub</a>.  </strong></p><h2><a name="About"></a>About<a href="#About" class="section_anchor"></a></h2><p>Minify is a PHP5 app that helps you follow several of Yahoo!'s <a href="http://developer.yahoo.com/performance/index.html#rules" rel="nofollow">Rules for High Performance Web Sites</a>. </p><p>It combines multiple CSS or Javascript files, removes unnecessary whitespace and comments, and serves them with gzip encoding and optimal client-side cache headers. </p><h3><a name=""></a><a href="http://groups.google.com/group/minify" rel="nofollow">Support List</a></h3><h2><a name="Minify_in_Use"></a>Minify in Use<a href="#Minify_in_Use" class="section_anchor"></a></h2><p></p><table class="wikitable"><tbody><tr><td style="border: 1px solid #ccc; padding: 5px;"> <strong>Before</strong> </td><td style="border: 1px solid #ccc; padding: 5px;"> <img src="http://mrclay.org/wp-content/uploads/2008/09/fiddler_before.png"> </td></tr> <tr><td style="border: 1px solid #ccc; padding: 5px;"> <strong>After</strong> </td><td style="border: 1px solid #ccc; padding: 5px;"> <img src="http://mrclay.org/wp-content/uploads/2008/09/fiddler_after.png"> </td></tr> </tbody></table><p></p><p>The stats above are from a <a href="http://mrclay.org/index.php/2008/09/19/minify-21-on-mrclayorg/" rel="nofollow">brief walkthrough</a> which shows how easy it is to set up Minify on an existing site. It eliminated 5 HTTP requests and reduced JS/CSS bandwidth by 70%. </p><p>The design is somewhat similar to Yahoo's <a href="http://yuiblog.com/blog/2008/07/16/combohandler/" rel="nofollow">Combo Handler Service</a>, except that Minify can combine <i>any</i> local JS/CSS files you need for your page. </p><h2><a name="Minify_integrated_into_other_Projects/Plugins"></a>Minify integrated into other Projects/Plugins<a href="#Minify_integrated_into_other_Projects/Plugins" class="section_anchor"></a></h2><ul><li>WordPress: <a href="http://wordpress.org/extend/plugins/wp-minify/" rel="nofollow">WP-Minify</a> </li><li>WordPress: <a href="http://wordpress.org/extend/plugins/w3-total-cache/" rel="nofollow">W3 Total Cache</a> </li><li>Zend Framework: <a href="https://github.com/bubba-h57/zf-helpers" rel="nofollow">View helpers for links/scripts</a> </li><li>Yii: <a href="https://bitbucket.org/TeamTPG/minscript/wiki/Home" rel="nofollow">minscript Extension</a> </li></ul><h2><a name="Features"></a>Features<a href="#Features" class="section_anchor"></a></h2><ul><li>Combines and minifies multiple CSS or JavaScript files into a single download </li><li>Uses an <a href="http://code.google.com/p/minify/source/browse/trunk/min/lib/JSMin.php" rel="nofollow">enhanced port</a> of Douglas Crockford's <a href="http://www.crockford.com/javascript/jsmin.html" rel="nofollow">JSMin library</a> and custom classes to minify <a href="http://code.google.com/p/minify/source/browse/trunk/min/lib/Minify/CSS.php" rel="nofollow">CSS</a> and <a href="http://code.google.com/p/minify/source/browse/trunk/min/lib/Minify/HTML.php" rel="nofollow">HTML</a> </li><li>Caches server-side (files/apc/memcache) to avoid doing unnecessary work </li><li>Responds with an HTTP 304 (Not Modified) response when the browser has an up-to-date cache copy </li><li>Most modules are lazy-loaded as needed (304 responses use minimal code) </li><li>Automatically rewrites relative URIs in combined CSS files to point to valid locations </li><li>With caching enabled, Minify is capable of handling hundreds of requests per second on a moderately powerful server.  </li><li>Content-Encoding: gzip, based on request headers. Caching allows it so serve gzipped files faster than Apache's mod_deflate option! </li><li>Test cases for most components </li><li>Easy integration of 3rd-party minifiers </li><li>Separate utility classes for HTTP encoding and cache control </li></ul><h2><a name="Requirements"></a>Requirements<a href="#Requirements" class="section_anchor"></a></h2><ul><li>PHP 5.1.6 / command-line tools require 5.3 </li><li>The commonly installed <a href="http://us3.php.net/manual/en/zlib.installation.php" rel="nofollow">zlib extension</a> is recommended for HTTP encoding functionality. </li><li>Version 1.0.1 required PHP 5.2.1+. </li></ul><h2><a name="Installation"></a>Installation<a href="#Installation" class="section_anchor"></a></h2><p>See the <a href="/p/minify/wiki/UserGuide">UserGuide</a>. </p><h2><a name=""></a><a href="http://groups.google.com/group/minify" rel="nofollow">Support List</a></h2><h2><a name="PHP5_Component_Classes"></a>PHP5 Component Classes<a href="#PHP5_Component_Classes" class="section_anchor"></a></h2><p>Minify is based on several <a href="/p/minify/wiki/ComponentClasses">PHP5 classes</a> that may be useful in other projects (all BSD licensed). </p><h2><a name="Warnings"></a>Warnings<a href="#Warnings" class="section_anchor"></a></h2><ul><li>Minify is designed for efficiency, but, for very high traffic sites, Minify may serve files slower than your HTTPd due to the CGI overhead of PHP. See the <a href="/p/minify/wiki/FAQ">FAQ</a> and <a href="/p/minify/wiki/CookBook">CookBook</a> for more info. </li><li>If you combine a lot of CSS, watch out for <a href="http://www.thecssdiv.co.uk/2009/08/28/another-weird-ie6-bug/" rel="nofollow">IE's 4096 selectors-per-file limit</a>. This bug has been verified in IE versions 6 through 8 (so far). </li></ul><h2><a name="Problem_Domain"></a>Problem Domain<a href="#Problem_Domain" class="section_anchor"></a></h2><p>Pages that refer to multiple CSS or JavaScript files often suffer from slower page loads, due to the browser requesting each file individually. Many browsers also are limited to a few simultaneous requests per domain. The wait for a series of requests and the transfer of unoptimized files can dramatically reduce the client-side performance of your site. </p><p>Here are some of Yahoo!'s best practices that are addressed by the use of Minify. </p><ul><li><a href="http://developer.yahoo.com/performance/rules.html#num_http" rel="nofollow">Make Fewer HTTP Requests</a> </li><li><a href="http://developer.yahoo.com/performance/rules.html#expires" rel="nofollow">Add an Expires or a Cache-Control Header</a> </li><li><a href="http://developer.yahoo.com/performance/rules.html#gzip" rel="nofollow">Gzip Components</a> </li><li><a href="http://developer.yahoo.com/performance/rules.html#minify" rel="nofollow">Minify JavaScript and CSS</a> </li><li><a href="http://developer.yahoo.com/performance/rules.html#etags" rel="nofollow">Configure ETags</a> </li><li><a href="http://developer.yahoo.com/performance/rules.html#under25" rel="nofollow">Keep Components under 25K</a> </li></ul><h3><a name="Acknowledgments"></a>Acknowledgments<a href="#Acknowledgments" class="section_anchor"></a></h3><p>Minify was inspired by <a href="http://code.google.com/p/jscsscomp/" rel="nofollow">jscsscomp</a> by Maxim Martynyuk and by the article '<a href="http://www.hunlock.com/blogs/Supercharged_Javascript" rel="nofollow">Supercharged JavaScript</a>' by Patrick Hunlock. </p><p>The <a href="http://www.crockford.com/javascript/jsmin.html" rel="nofollow">JSMin library</a> used for JavaScript minification was originally written by Douglas Crockford and was <a href="http://code.google.com/p/jsmin-php" rel="nofollow">ported to PHP</a> by Ryan Grove specifically for use in Minify. </p><p>You may contact Steve Clay (steve@mrclay.org) or Ryan (ryan@wonko.com) if you're interested in joining the project. </p>
EOS;

$lang['help'] = <<<EOS
	<h2>CMSMS Minify Module Help</h2>
    <p>This project embeds <a href="http://code.google.com/p/minify/">Minify
        2.1.5</a> into CMS Made Simple. From the Minify website:</p>
    <blockquote>
      <p>Minify is a PHP5 app that helps you follow several of Yahoo!'s Rules
        for High Performance Web Sites. It combines multiple CSS or Javascript
        files, removes unnecessary whitespace and comments, and serves them with
        gzip encoding and optimal client-side cache headers.</p>
    </blockquote>
    <p>For example, the javascripts for the Admin interface could be minified
      into:</p>
    <p><code>&lt;script type="text/javascript"
src="/modules/Minify/min/?b=lib/jquery/js&amp;amp;f=jquery-1.7.2.min.js,jquery-ui-1.8.21.custom.min.js,jquery.ui.nestedSortable-1.3.4.js,jquery.json-2.3.min.js"&gt;&lt;/script&gt;</code></p>
	<br/>
    <p>Currently, it simply embeds the Minify project into the module, and
      exposes the Builder to the admin interface. The builder allows you to
      enter your Javascript files in a list, and outputs a the <code>&lt;script....&gt;</code>
      tag that you would embed your template.</p>
	<br/>
    <p>For support, please submit <a href="https://github.com/drmikecrowe/cmsms_minify/issues">an
        issue</a> for assistance.</p>
	<br/>
    <p>Roadmap:</p>
    <ul>
      <li>Initial Release</li>
      <li>Implement Debug mode for development</li>
      <li>Maintains the list of javascripts (or stylesheets), and allow
        embedding different lists, such as {Minify package="xxxx"}</li>
      <li>Log to CMSMS Admin Log</li>
    </ul>
    Donations are appreciated, and would encourage continual improvement of this
    module.<br />
    <br />
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick" /> <input type="hidden"
        name="hosted_button_id" value="K2LGNGX64UG48" /> <input type="image" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit"
        alt="PayPal - The safer, easier way to pay online!" /> <img width="1" height="1"
        border="0" alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" />
    </form>
EOS;
