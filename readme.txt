=== Plugin Name ===
Contributors: MartySpellerberg
Tags: template parts, templates, shortcode
Requires at least: 3.4
Tested up to: 3.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A (very) simple WordPress plugin for embedding template parts in your content.

== Description ==

Template parts are reusable snippets of code stored in your theme directory. Normally, they are called by other template files using the get_template_part() function. This plugin creates a shortcode for calling template parts from the body of a post. 

Shortcode usage is: [template part="somepart"].

Template parts must be stored in a "parts" folder within your theme directory. 

If you use custom loops in your template parts, remember to use "reset_query" at the end to return the page to normal.

== Installation ==

1. Install and activate the plugin, in the normal way;
2. In your theme directory, create a subfolder called "parts";
3. Create your template part and save it into the "parts" directory -- ie. parts/somepart.php;
4. In your post Content, call the part via [template part="somepart"]

That's it!