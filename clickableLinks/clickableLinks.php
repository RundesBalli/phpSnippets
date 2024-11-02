<?php
/**
 * clickableLinks
 *
 * Function to automatically link URLs in texts.
 *
 * @author    RundesBalli <github@rundesballi.com>
 * @copyright 2024 RundesBalli
 * @version   1.0
 * @license   MIT-License
 * @see       https://github.com/RundesBalli/phpSnippets
 *
 * @param string $string    String whose URLs are to be linked.
 * @param bool   $newTab    True if URLs should open in a new tab.
 * @param bool   $stripTags True if HTML and PHP tags should be removed before convertion.
 * 
 * @return string The string with linked URLs.
 */
function clickableLinks(string $string, bool $newTab = TRUE, bool $stripTags = TRUE) {
  return preg_replace(
    '/https?:\/\/[^\s]+/im',
    '<a href="$0"'.($newTab ? ' target="_blank" rel="noopener"' : NULL).'>$0</a>',
    ($stripTags ? strip_tags($string) : $string)
  );
}
?>
