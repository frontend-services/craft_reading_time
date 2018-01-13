# Reading Time

An estimated read time [Twig](http://twig.sensiolabs.org/) filter for [Craft CMS](http://buildwithcraft.com/). This can be added to any field (that's data is a string), but it was designed with the rich text (Redactor) field in mind

This plugin is a fork of [craft_readtime](https://github.com/ehousestudio/craft_readtime) by eHouse Studio with added support for japanese language.

## Installation

1. Move `readingtime` directory to `craft/plugins` directory
2. Install `Reading Time` under **Craft Admin &rsaquo; Settings &rsaquo; Plugins**

## Usage

```
{{ entry.richTextField|readingtime }}
```

## License

This work is licenced under the MIT license.
