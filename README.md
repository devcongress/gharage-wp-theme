[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

gharage
===

Hi. I'm a custom DevCongress WP theme  called `dc-gharage`, or `gharage`, if you like. I was created out of the underscores starter theme, but I'm a DevCongress baby now.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A sample custom header implementation in `inc/custom-header.php` that can be activated by uncommenting one line in `functions.php` and adding the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/extras.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` and `css/dc-gharage.css` that will help you to quickly get your design off the ground.
* My main fonts, Fira Sans, has been extracted to the  `/fonts` folder. The hgroup font, Actor, is a Google Font. You know where to find it. Use it to make something cool.

Getting Started
---------------

If you want to set things up manually, the first thing you want to do is copy the `_s` directory and change the name to something else (like, say, `azonto`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'dc-gharage'` (inside single quotations) to capture the text domain.
2. Search for `_dc_gharage_` to capture all the function names.
3. Search for `Text Domain: dc-gharage` in style.css.
4. Search for <code>&nbsp;_dc-gharage</code> (with a space before it) to capture DocBlocks.
5. Search for `_dc-gharage-` to capture prefixed handles.

OR

* Search for: `'dc_gharage'` and replace with: `'azonto'`
* Search for: `_dc_gharage_` and replace with: `azonto_`
* Search for: `Text Domain: dc_gharage` and replace with: `Text Domain: azonto` in style.css.
* Search for: <code>&nbsp;_dc_gharage</code> and replace with: <code>&nbsp;Azonto</code>
* Search for: `_dc-gharage-` and replace with: `azonto-`

Update the links in `footer.php` with your own information. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: be awesome! :)

Good luck!
