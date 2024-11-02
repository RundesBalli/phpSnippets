<?php
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
