# dev-template
A handy development template built for web developers by myself. Includes many useful plugins and standard options.

I've been developing websites for some time and began building a base template to use. Over the years 
this template has grown and improved to the point where I think it'd be useful to share with the public.

I wanted to incorporate any and all possible options right out of the box.

This template includes:

1. Available Plugins (Open Source and Custom):
* I've been using these plugins for so long that I automatically included them in my template.
-- Bootstrap
-- PrettyPhoto
-- Chart.js
-- Flowplayer
-- Scroll to Fixed
-- Scrollbar
-- TableHover
-- TouchSwipe
-- Mousewheel
-- Financial Highlights Table (CUSTOM)

* Plugins can be selectively activated in the "includes/initialize.php" file. You will see them commented out 
in an array at the bottom. Simply uncomment them for use. 
* For the list of plugins and and reference urls/coding go to "includes/plugins.php"
* I use the plugins class in the plugins.php file with a function the automatically puts the css files in the head 
and the js files in the footer.

2. CSS Files:
-- Main Style
-- Responsive (mobile / tablet)
-- IE7, IE8, IE9
-- Devices (iphone, ipad, etc)
-- Browser Specific (Chrome, Firefox, Safari)
-- 4 Optional extra Developer Stylesheets
-- Pie.css
-- Fonts Folder

3. JS Files
-- jQuery
-- jQuery UI
-- jQuery Validate (for form)
-- Modernizr
-- Actual
-- Custom Functions
-- Custom Animations
-- Selectivizr (http://selectivizr.com)

4. PHP Code
-- Mobile Device detector (for detecting if a user is using mobile phone and/or tablet)
-- Contact Form file

5. Other
-- HTML5 Shiv for IE8 compatibility
-- IE Specific conditional tags in the <html> for version specific targeting
-- Meta viewport
-- Favicon Urls ready in the <head>
-- Nav Constant variables to add "current-menu-item" classes to a main nav <a> tag

More Instructions & Information in future versions...
