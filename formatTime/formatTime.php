<?php
/**
 * Function to format a given time in seconds to a readable time.
 * 
 * @param int $seconds The seconds to format.
 * 
 * @return string The formatted time string.
 */
function formatTime(int $seconds) {
  $lang = [
    'time' => [
      'd' => 'day',
      'dP' => 'days',
      'h' => 'hour',
      'hP' => 'hours',
      'm' => 'minute',
      'mP' => 'minutes',
      's' => 'second',
      'sP' => 'seconds',
    ],
  ];
  $string = '';
  $d = floor($seconds / 86400);
  if($d > 0) {
    $seconds-= ($d * 86400);
    $string.= $d.' '.$lang['time']['d'.($d != 1 ? 'P' : NULL)];
  }
  $h = floor($seconds / 3600);
  if($h > 0) {
    $seconds-= ($h * 3600);
    $string.= (!empty($string) ? ', ' : NULL).$h.' '.$lang['time']['h'.($h != 1 ? 'P' : NULL)];
  }
  $m = floor($seconds / 60);
  if($m > 0) {
    $seconds-= ($m * 60);
    $string.= (!empty($string) ? ', ' : NULL).$m.' '.$lang['time']['m'.($m != 1 ? 'P' : NULL)];
  }
  if($seconds > 0) {
    $string.= (!empty($string) ? ', ' : NULL).$seconds.' '.$lang['time']['s'.($seconds != 1 ? 'P' : NULL)];
  }
  return $string;
}
?>
