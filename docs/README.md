# Documentation

This folder contains documentation for each category of widgets.

## Widget

The widget class contains these methods:

* build -> renders the element
* tryBuild (param `$name`) -> tries rendering child element. Name is used as key in $this
* generateAttributes (param `$array`, param `$ignore`, returns `$attributes` as `string`) -> generates attributes from given array, ignoring keys in `$ignore`.
