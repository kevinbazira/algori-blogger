=== Algori Blogger ===
Contributors: kevinbazira
Tags: blog, two-columns, right-sidebar, custom-header, custom-menu, custom-logo, editor-style, featured-images, post-formats, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready
Requires at least: WP 4.9.6
Tested up to: WP 5.1
Requires PHP: 5.6.0
Stable tag: 1.1.8
License: GNU General Public License v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

Algori Blogger is a WordPress Theme designed for Modern Personal Blogs.

== Description ==

A Gutenberg Ready Free Modern Personal Blog WordPress Theme with a clean and professional design that will be a great solution for sharing your creative vision, spreading your ideas, and creating a resource for others.

== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the 'Add New' button.
2. Type in Algori Blogger in the search form and press the 'Enter' key on your keyboard.
3. Click on the 'Activate' button to use your new theme right away.
4. Go to http://kevinbazira.com/blog/article/algori-blogger-documentation for a guide on how to customize this theme.
5. Navigate to Appearance > Customize in your admin panel and customize to taste.
6. Done :)

== Frequently Asked Questions ==

= Does this theme support any plugins? =

Algori Blogger includes support for the following plugins;
1. Infinite Scroll in Jetpack
2. Gutenberg plugin

== Changelog ==

= 1.1.8 - Jul 16 2019 =
* Removed big white space below Header Image for both tablets and mobile screens

= 1.1.7 - June 26 2019 =
* Fixed Header Image CSS animation for older Safari browsers
* Added CSS3 animation support for Safari browser 4.0 - 8.0
* Added CSS3 transition support for Safari browser prior 6.1
* Added CSS3 keyframes support for Safari browser prior 10.0

= 1.1.6 - May 24 2019 =
* Added recommended plugins using the TGMPA library
* Updated POT file in languages folder

= 1.1.5 - May 10 2019 =
* Fixed readme.txt issues and passed WordPress Readme Validator

= 1.1.4 - Apr 15 2019 =
* Added Algori Blogger documentation link to the customizer
* Added customizer css for custom controls like the algori-blogger-documentation-link 
* Updated POT file in languages folder

= 1.1.3 - Apr 01 2019 =
* Added static text translation that was missing on comment_message, previous_btn_title and next_btn_title
* Removed '-min' extension from wp_enqueue_script handlers
* Removed unused functions from template-tags.php
* Fixed anchor tag url ecaping from esc_html() to esc_url()
* Added admin check to avoid affecting admin dashboard 'excerpt_more'
* Updated POT file in languages folder

= 1.1.2 - Mar 25 2019 =
* Removed $ manipulation and added 'jquery' in the dependencies param for all scripts that need jQuery
* Fixed all the added scripts to use jQuery instead of $ since WP Core jQuery is old and uses 'jquery' instead of '$'
* Updated escaping functions to avoid double escaping html elements
* Removed support for iframes from owl.carousel.js to be compliant with WordPress theme requirements
* Removed theme-slug prefixes from third party assets to avoid plugins from loading the same script leading to improved performance
* Changed theme license from GPLv2 to GPLv3 to support isotope
* Updated POT file in languages folder

= 1.1.1 - Mar 07 2019 =
* Added support for centered content when sidebar is empty especially in Gutenberg
* Added mobile support for hero title and description
* Updated POT file in languages folder

= 1.1.0 - Feb 06 2019 =
* Updated style-rtl.css to match style.css
* Added index.php page-title wrapper to show on !is_front_page()
* Fixed page.php and archive.php page-title wrapper to show on !is_front_page()
* Updated POT file in languages folder

= 1.0.9 - Jan 25 2019 =
* Added theme support for Gutenberg to functions.php
* Added front-end Gutenberg block styles to styles.css and style-rtl.css
* Added back-end Gutenberg block styles to editor-styles.css
* Changed line-height from 25px to 1.8 in both styles.css and editor-styles.css
* Added copyright information in readme
* Updated POT file in languages folder

= 1.0.8 - April 28 2018 =
* Added WP core-bundled jQuery
* Updated readme file to keep credits and license info of all third party resources (like scripts, styles, libraries, images, etc)
* Removed FancyBox v2.1.5
* Removed Revolution Slider because it's not GPL compatible.
* Added all unminified versions of the minified files being used.
* Updated POT file in languages folder.

= 1.0.7 - April 17 2018 =
* Fixed Sidebar Styling

= 1.0.6 - Feb 26 2018 =
* Added Default Header Image

= 1.0.5 - Feb 23 2018 =
* Added Support for RTL Mode

= 1.0.4 - Feb 20 2018 =
* Added Editor Styles

= 1.0.0 - Feb 14 2018 =
* Initial Release

== Credits ==

* Based on [Underscores](https://underscores.me/) , (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* [normalize.css](https://necolas.github.io/normalize.css/) , (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
* [google-code-prettify](https://github.com/google/code-prettify) , (C) 2006 Google Inc, [Apache License 2.0](http://www.apache.org/licenses/LICENSE-2.0)
* [Bootstrap v3.0.3](http://getbootstrap.com) , (C) 2013 Twitter Inc, [Apache License 2.0](http://www.apache.org/licenses/LICENSE-2.0)
* [Bootstrap Hover Dropdown v2.2.1](https://necolas.github.io/normalize.css/) , (C) Cameron Spear, [MIT](https://opensource.org/licenses/MIT)
* [jQuery JavaScript Library v3.3.1](https://jquery.com/) , (C) JS Foundation, [MIT](https://opensource.org/licenses/MIT)
* [jQuery EasyTabs plugin 3.2.0](https://necolas.github.io/normalize.css/) , (C) 2010-2011 Steve Schwartz (JangoSteve), [MIT](https://opensource.org/licenses/MIT) and [GPL](http://www.gnu.org/licenses/gpl.html)
* [jQuery FitVids 1.0.3](http://fitvidsjs.com/) , (C) 2013 Chris Coyier and Dave Rupert , [WTFPL](http://sam.zoy.org/wtfpl/)
* [jQuery Isotope v1.5.26](http://isotope.metafizzy.co) , (C) 2014 Metafizzy, [MIT](https://opensource.org/licenses/MIT)
* [jQuery Slick Forms](http://www.designchemical.com) , (C) 2011 Design Chemical, [MIT](https://opensource.org/licenses/MIT) and [GPL](http://www.gnu.org/licenses/gpl.html)
* [jQuery Sticky v1.0.0](http://labs.anthonygarand.com/sticky) , (C) 2011 Anthony Garand, [MIT](https://opensource.org/licenses/MIT)
* [Owl Carousel v2.2.1](https://owlcarousel2.github.io/OwlCarousel2/) , (C) 2013-2017 David Deutsch, [MIT](https://opensource.org/licenses/MIT)
* [retina.js](https://github.com/strues/retinajs) , (C) Steven Truesdell, [MIT](https://opensource.org/licenses/MIT)
* [Font Awesome icons](http://fontawesome.io) , (C) Dave Gandy, [Font: SIL OFL 1.1, CSS: MIT License](http://fontawesome.io/license)
* [Default Header Image](https://stocksnap.io/photo/5AQ9OI606F) , (C) StockSnap.io Photographer: Toa Heftiba, [CC0 License](https://creativecommons.org/publicdomain/zero/1.0/)

Algori Blogger WordPress Theme, Copyright 2019 Kevin Bazira<br/>
Algori Blogger is distributed under the terms of the GNU GPL