# Umami

This is a repository to store source code for the Umami Styleguide. The styleguide will eventually become the theme
for the ['Out of the Box'](https://www.drupal.org/node/2847582) initiative for Drupal.

## Designs
Designs are attached to the summary of <a href="https://www.drupal.org/node/2900720">#2900720: Designs for the Out of the Box experience intiative</a> and are also available in <a href="https://projects.invisionapp.com/share/MECDJD8GP#/screens/243951129_Umami_-_Front_-_Sketch_1_-_Desktop">InVision</a>.

## Resources
* There is a <a href="https://drive.google.com/drive/folders/0B7MA3IYYh44bMzNsVXhKNGpZNDQ">Google Drive folder</a> with shared files (documents, assets etc.).
* Here is a PDF Styleguide with colors, typography, etc. The latest version can be found in the <a href="https://www.drupal.org/node/2881910#comment-12279271">issue</a>.

## Installing the styleguide

Install the dependencies using yarn

    yarn install

Build the styleguide

    ./node_modules/.bin/gulp

## Using BrowserSync

Find example.gulp-config-local.js and follow the instructions in it. After that

      gulp watch

## Communication, discussions and help
* Most communication happens on <a href="https://drupaltwig-slack.herokuapp.com/">Slack</a> in the <em>#out-of-the-box channel</em>. Feel free to join and ask for help.
* There is a weekly meeting on Mondays 15:00h-16:00h UTC.

##Standard css

###Breakpoints

**Formatting**

The CSS formatting guidlines require that breakpoints are as follows

> Media queries should be written in the same style as ruleset. Any containing rulesets are indented by two spaces.

> * One space between the media feature and the value.
> * All values to be written in rems unless it is inappropriate.
> * Add the pixel value in a comment directly after the the opening brace.

```
@media screen and (min-width: XXrem) { /* YYYpx */
  .selector {
    /* Styles */
  }
}
```

**Positioning**

Place the media queries immediately after the selector to which they relate

**Sizes**

The following small, medium, large and extra large sizes can be ordinarily followed.

If an element needs a custom breakpoint use it.

```
/* Small */
@media screen and (min-width: 30rem) { /* 480px */

}
/* Medium */
@media screen and (min-width: 48rem) { /* 768px */

}
/* Large */
@media screen and (min-width: 60rem) { /* 960px */

}
/* Extra large */
@media screen and (min-width: 75rem) { /* 1200px */

}
```
