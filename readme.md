CG Starter Theme
=================

This is a clean WordPress starter theme primarily based on the Wordpress theme Emi by Zoe Rooney (https://github.com/zoerooney/emi). I've updated the functions, changed the SCSS organization, and made a few other small changes.


Set Up
------------
I use [String Replacer](http://www.tensionsoftware.com/osx/stringreplacer/) (a Mac app) to find and replace the following strings, keeping the same general format as shown:

`CG Starter` > `Theme Name`  (themeName)

`cg_starter` > `Theme_Name`  (themeHandle)

`cg_starter` > `theme_name`  (themeFunction)

`cg-starter` > `theme-name`  (themeTextDomain)

There are additional variables in `scss/styles.scss` you'll want to update one at a time, and a few in `footer.php` as well.

Workflow
------------
This theme uses [Gulp](http://gulpjs.com/) to automate the following tasks:
* Sass preprocessing (with sourcemaps)
* Auto browser prefixing (via [Autoprefixer](https://github.com/ai/autoprefixer))
* Minifying CSS with clean css
* ES Lint
* JS minimization with Gulp Uglify
* Image compression


