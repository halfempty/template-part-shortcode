Template Part Shortcode
=======================

A (very) simple WordPress plugin for embedding template parts in your content.

This plugin creates a shortcode for embedding template parts in the body of a post. Template parts must be stored in a `parts` folder within your theme directory. (This is for neatness.)

Shortcode usage is: `[template part="somepart"]`, which would render `parts/somepart.php`.

If you use custom loops in your template parts, remember to use `reset_query` at the end to return the page to normal.