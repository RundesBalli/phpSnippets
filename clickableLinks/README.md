# Clickable links function
This is a function to add HTML links to a text with URLs in it.

## Parameters
```php
/**
 * @param string $string    String whose URLs are to be linked.
 * @param bool   $newTab    True if URLs should open in a new tab.
 * @param bool   $stripTags True if HTML and PHP tags should be removed before convertion.
 */
clickableLinks(string $string, bool $newTab = TRUE, bool $stripTags = TRUE);
```
