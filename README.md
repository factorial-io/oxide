Oxide
=====

Adds haml-support to Drupal and its twig-engine.

The engine is based on original work of Kyle Cunningham: **[Peroxide project page](https://github.com/codeincarnate/peroxide)** and on original work of Antoine Lafontaine **[oxide project page](https://github.com/antoinelafontaine/oxide)**

The drupal 8 version is completely rewritten and uses dependency-injection to register the haml parser with the twig-engine.


Dependencies
------------

Requires MtHaml, composer should have installed it automatically. **[MtHaml project page](https://github.com/arnaud-lb/MtHaml)** on github.


Installation via composer
-------------------------

Add the following git-repository to your composer.json:

```
{
  "type": "git",
  "url": "https://github.com/factorial-io/oxide.git"
}
```

Then require the module via composer:

```
composer require "factorial-io/oxide:dev-8.x-1.x"
```

Enable the module from within drupal or via drush:

```
drush en oxide -y
```

Usage guidelines
----------------

If you want to use haml in your twig-templates, just add the following line as the first line of your template:

```
{% haml %}
```
Then you can use haml instead of html in your template. For more info visit the project page of [MtHaml](https://github.com/arnaud-lb/MtHaml)

Example page.tpl.twig
---------------------

```
{% haml %}
%div.Page
  %header(role="banner")
    = page.hero
  %div.Preface
    = page.preface
  %main(role="main")
    %a(id="main-content" tabindex="-1")
    %div.Content
      = page.content

  - if page.footer
    %footer(role="contentinfo")
      = page.footer
```

