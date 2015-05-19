=== Plugin Name ===
Contributors: BenJD
Donate link: http://blog.dingoeweb.com/technology/donate
Tags: responsive,iframe,wordpress
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Responsive iFrames for Wordpress.

== Description ==

This Wordpress plugin allows you to use responsive frames in your posts, pages or templates. Implemented via shortcode our responsive iFrames are simple and easy to use. Make sure your iFrames display correctly and adapt to different screen sizes and orientations.

Adding an iFrame to Wordpress

Adding a responsive iFrame is simple. A small amount of shortcode is all that is required. The shortcode can be added to a post, a page or a wordpress template. Here is a simple example: [bjd-responsive-iframe src="https://www.youtube.com/embed/UZr75lLiE6k"] This will create a responsive iframe for a youtube video. the 'src' attribute is required. Other optional attributes are also available.

Attribute  | Description  | Example
------------- | ------------- | -------------
src  | The source url for the iframe.  | https://www.youtube.com/embed/UZr75lLiE6k
id  | Sets an id attribute for the iframe  | youtubeVideo
name  | Sets a name attribute for the iframe  | Example
width  | Sets the width attribute for the iframe  | 420
height  | Sets the height attribute for the iframe  | 300
frameborder  | Sets the frameborder attribute for the iframe  | 0
scrolling  | Sets the scrolling attribute for the iframe  | yes OR no
marginheight  | Sets the marginheight attribute for the iframe  | 0
marginwidth  | Sets the marginwidth attribute for the iframe  | 0

Here is a more complicated example: [bjd-responsive-iframe src="https://www.youtube.com/embed/UZr75lLiE6k" id="youtubeVid" name="youtubeVid" width="560" height="315" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ]

Demo

A demonstration for the plugin working on wordpress 3 can be found here ( http://www.bj-dehaan-solutions.com.au/demos/wordpress3/responsive-iframe-demo/ ).
A demonstration for the plugin working on wordpress 4 can be found here ( http://www.bj-dehaan-solutions.com.au/demos/wordpress4/responsive-iframe-demo/ ).

== Installation ==

Copy the whole 'bjd-responsive-iframe' folder to your wordpress plugins folder 'wp-content/plug-ins'. Once the files are copied you will need to activate the plug-in from your wordpress administration dashboard 'http://<your-domain-name>/wp-admin'. Once logged into your administrator dashboard choose 'Plugins' from the menu. Find 'BJD Responsive iFrame' in the list of plugins and click 'Activate' to activate the plugin.

== Screenshots ==

1. This screen shot description corresponds to screenshot1.png. This shows a responsive iframe on a desktop machine.
2. This screen shot description corresponds to screenshot2.png. This shows a responsive iframe on a mobile device.

== Changelog ==

= 1.0.0 =
* This is the first stable release of the plugin.