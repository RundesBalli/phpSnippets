# hex2rgb function
This is a function to calculate a 3- or 6-digit hex color code to RGB.

## Function calls
```php
# 6-digit hex without hash before.
var_dump(hex2rgb('6c6c6c'));
// array(4) {
//   ["r"]=>
//   int(108)
//   ["g"]=>
//   int(108)
//   ["b"]=>
//   int(108)
//   ["hex"]=>
//   string(6) "6c6c6c"
// }

# 6-digit hex with hash before.
var_dump(hex2rgb('#6c6c6c'));
// array(4) {
//   ["r"]=>
//   int(108)
//   ["g"]=>
//   int(108)
//   ["b"]=>
//   int(108)
//   ["hex"]=>
//   string(6) "6c6c6c"
// }

# 3-digit hex with hash before.
var_dump(hex2rgb('#f00'));
// array(4) {
//   ["r"]=>
//   int(255)
//   ["g"]=>
//   int(0)
//   ["b"]=>
//   int(0)
//   ["hex"]=>
//   string(3) "f00"
// }
```

## Mentions
I have been inspired by the two following comments:
- [on php.net](https://www.php.net/manual/en/function.hexdec.php#99478)
- [on stackoverflow.com](https://stackoverflow.com/questions/1636350/how-to-identify-a-given-string-is-hex-color-format/1637260#1637260)

Thanks to the authors.
