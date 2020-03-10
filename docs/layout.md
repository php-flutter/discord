# Layout

## Wrapper

Renders child elements (provided as array/object) in a wrapper, so the contents have padding on both sides and on top for better readability.

## Footer

Footer is a widget that should be placed at the very bottom of page. It usualy contains navigation, but can also contain some form of call-to-action (such as title and subtitle with button).

## Navigation

Navigation is a widget that's intended to be in Footer (althrough it should work just as good anywhere else, in terms of styling).
It contains `navigationSection`s (see below).

## Navigation section

*Part of [`navigation`](#navigation)*

Navigation Section consist of [navigation header](dataholders.md#navigation-header) and [navigation link](clickables.md#navigation-link)s.

## Separator

Separator usualy separates two different contents, such as body and footer.

Works and looks very similar to this Markdown one:

---
