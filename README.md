# Umami

This is a repository to store source code for the Umami theme, a part of the ['Out of the Box'](https://www.drupal.org/node/2847582) initiative for Drupal.

## Designs
Designs are attached to the summary of <a href="https://www.drupal.org/node/2900720">#2900720: Designs for the Out of the Box experience intiative</a> and are also available in <a href="https://projects.invisionapp.com/share/MECDJD8GP#/screens/243951129_Umami_-_Front_-_Sketch_1_-_Desktop">InVision</a>.

## Resources
* There is a <a href="https://drive.google.com/drive/folders/0B7MA3IYYh44bMzNsVXhKNGpZNDQ">Google Drive folder</a> with shared files (documents, assets etc.).
* Here is a PDF Styleguide with colors, typography, etc. The latest version can be found in the <a href="https://www.drupal.org/node/2881910#comment-12279271">issue</a>.

## Installing
To work on the theme it is also necessary to have the [Installation profile](https://github.com/gareth-fivemile/demo_umami) and the default content we are on which we are basing our theming.

### Installing the Umami Demo and Umami theme:
To install the Umami Demo locally, you can use the Umami Build installer. This installer uses composer to install everything you need to get up and running (presuming you already have a local development environment for Drupal). You can find the installer here: https://github.com/gareth-fivemile/umami-build. This installer provisions Drupal, the Umami Demo installation profile, the sample content and the Umami theme by cloning the projects from Github. So once you have it installed you can start working on the project locally right away.

#### Here are the steps to install
* `git clone https://github.com/gareth-fivemile/umami-build.git`
* `cd umami-build`
* `composer install`
* `cd web`
* Install the Umami Demo (change to your email address): `drush si demo_umami --account-pass=admin --account-name=admin --account-mail="your-email@example.com"`
* Install the sample content (temporarily a second manual step): `drush en demo_umami_content -y`
To work on the profile find it in /profiles/contrib/demo_umami
To work on the theme find it in /themes/contrib/umami

### Updating the Umami Demo and Umami theme:
Once you have the Umami Build installer running, you will want to keep it up to date. Follow these steps to update:
If you are working on the installation profile, export any config from Drupal that you need to keep since following this process will delete and install a new version of the database
If you have uncommitted changes in your local branches for the profile or the theme commit or stash them. You could also be working on local branches other than dev or master, these should not be affected by the update
* Change directory to the umami-build directory
* Get the latest changes for umami_build:
* `git pull`
* Update the dependencies: `composer install`
* Reinstall the site (change to your email address): `drush si demo_umami -y --account-pass=admin --account-name=admin --account-mail="your-email@example.com"`
* Reinstall the sample content (temporarily a manual step):`drush en demo_umami_content -y`
* Continue as normal


## Communication, discussions and help
* Most communication happens on <a href="https://drupaltwig-slack.herokuapp.com/">Slack</a> in the <em>#out-of-the-box channel</em>. Feel free to join and ask for help.
* There is a weekly meeting on Mondays 15:00h-16:00h UTC. [Notes.](https://docs.google.com/document/d/1mF2C3K7HGg5rFv7E3UpmGcobSjDQLo18TH3BLN4ZWRo/edit#)

## Standard css

### Breakpoints

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
