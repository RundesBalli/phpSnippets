# hex2rgb function
This is a snippet to tidy the prepared html output.

## Dependencies
```
sudo apt install php-tidy
```

## Example
Turns this:
```html
<html><body><p>your HTML code here</p></body></html>
```

Into this:
```html
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title></title>
  </head>
  <body>
    <p>
      your HTML code here
    </p>
  </body>
</html>
```

## Usage
Put all your prepared output in the `$output` variable, run the snippet, and `echo` the tidied output `$tidy`:
```php
<?php
$output = "<html><body><p>your HTML code here</p></body></html>";

/**
 * Tidies up the previously created output.
 * 
 * @see https://github.com/RundesBalli/phpSnippets
 * @see https://api.html-tidy.org/tidy/quickref_5.6.0.html
 */
$tidyOptions = [
  'indent' => TRUE,
  'output-xhtml' => TRUE,
  'wrap' => 200,
  'newline' => 'LF', /* LF = \n */
  'output-encoding' => 'utf8',
  'drop-empty-elements' => FALSE /* e.g. for placeholders */
];

$tidy = tidy_parse_string($output, $tidyOptions, 'UTF8');
tidy_clean_repair($tidy);
echo $tidy;
?>
```