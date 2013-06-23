CMSMS Minify
============

This project embeds [Minify 2.1.5](http://code.google.com/p/minify/) into CMS Made Simple.  From the Minify website:

> Minify is a PHP5 app that helps you follow several of Yahoo!'s Rules for High Performance Web Sites. It combines multiple CSS or Javascript files, removes unnecessary whitespace and comments, and serves them with gzip encoding and optimal client-side cache headers.

For example, the javascripts for the Admin interface could be minified into:

``<script type="text/javascript" src="/modules/Minify/min/?b=lib/jquery/js&amp;f=jquery-1.7.2.min.js,jquery-ui-1.8.21.custom.min.js,jquery.ui.nestedSortable-1.3.4.js,jquery.json-2.3.min.js"></script>``

Currently, it simply embeds the Minify project into the module, and exposes the Builder to the admin interface.  The builder allows you to enter your Javascript files in a list, and outputs a the ``<script....>`` tag that you would embed your template.

For support, please submit [an issue](https://github.com/drmikecrowe/cmsms_minify/issues) for assistance.

Roadmap:

- Initial Release
- Implement Debug mode for development
- Maintains the list of javascripts (or stylesheets), and allow embedding different lists, such as {Minify package="xxxx"}
- Log to CMSMS Admin Log



