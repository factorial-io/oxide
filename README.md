Oxide
=====

A Haml theme engine for Drupal.

The engine is based on original work of Kyle Cunningham.
**Peroxide project page** on github: https://github.com/codeincarnate/peroxide

The goal is now limited to _only_ providing Haml template support to Drupal.

Dependencies
============

Requires a copy of MtHaml Haml parser to be placed in _sites/all/libraries_ or _sites/[domain]/libraries_ of your Drupal installation.
**MtHaml project page** on github: https://github.com/arnaud-lb/MtHaml


Installation via composer
-------------------------

As the theme-engine is its in development-stages we'll have to add the following repositories to the `repositories`-section of your composer.json

```
{
  "type": "git",
  "url": "https://github.com/factorial-io/oxide.git"
},
{
  "type": "git",
  "url": "https://github.com/factorial-io/MtHaml.git"
},
{
  "type": "git",
  "url": "https://github.com/stmh/installers.git"
}
```

Then add the following lines to your `dependencies`-section:

```
"composer/installers": "dev-master as 1.0.22.0",
"mthaml/mthaml": "dev-master",
"factorial-io/oxide": "dev-8.x-1.x"
```

Here's a complete example

```
{
  "name": "my project name",
  "description": "my description",
  "repositories": [
    {
      "type": "composer",
      "url": "https://packagist.drupal-composer.org/"
    },
    {
      "type": "git",
      "url": "https://github.com/factorial-io/oxide.git"
    },
    {
      "type": "git",
      "url": "https://github.com/factorial-io/MtHaml.git"
    },
    {
      "type": "git",
      "url": "https://github.com/stmh/installers.git"
    }
  ],
  "require": {
    "composer/installers": "dev-master as 1.0.22.0",
     "derhasi/composer-preserve-paths": "0.1.*",
    "drupal/drupal": "8.0.0",
    "mthaml/mthaml": "dev-master",
    "factorial-io/oxide": "dev-8.x-1.x"
  },
  "extra": {
    "installer-paths": {
      "public": ["type:drupal-core"],
      "public/modules/contrib/{$name}": ["type:drupal-module"],
      "public/profiles/contrib/{$name}": ["type:drupal-profile"],
      "public/themes/contrib/{$name}": ["type:drupal-theme"],
      "public/themes/engines/{$name}": ["type:drupal-theme-engine"],
      "public/drush/commands/{$name}": ["type:drupal-drush"]
    },
    "preserve-paths": [
      "public/modules/contrib",
      "public/themes/contrib",
      "public/themes/engines",
      "public/themes/custom",
      "public/modules/custom",
      "public/libraries",
      "public/sites/default/settings.php",
      "public/sites/default/files"
    ]
  },
  "minimum-stability": "dev",
  "prefer-stable": true,
}
```



Usage guidelines
================

The engine needs to first be placed in the _sites/all/themes/engine_ or the _sites/[domain]_ variant folder.

Then you need to declare that you'll be using _oxide_ as your theme engine in your theme info.yml file.

```
name: My Oxide based theme
description: An Haml powered theme
package: Core
version: VERSION
core = 8.x

engine: oxide
```

You're all set to use haml template files for your new theme! Happy theming!


Notes
=====

~~The engine saves rendered parsed haml files in the sites files folder in order to speed up rendering.~~

~~These can be located under _sites/default/files/oxide/[theme name]/~~

~~A small drush command - drush oxide-clear-cache (occ) - has been defined for emptying that cache folder whenever you rename or move a template file when developing.~~
~~You can also safely remove that folder manualy and the engine will recreate it when required.~~
