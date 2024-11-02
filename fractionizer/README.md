# Fractionizer
Fractionizer is a simple number format function with quarter, half and three quarter fraction output.
[!NOTE]
By default the decimal and thousand separator are formatted in the european version: dot for thousands, comma as decimal point.

## Examples
```php
fractionizer(2);                        // returns: 2
fractionizer(2, 2);                     // returns: 2
fractionizer(2, 2, TRUE);               // returns: 2,00
fractionizer(2, 2, TRUE, ".", ",");     // returns: 2.00
fractionizer(2.1);                      // returns: 2
fractionizer(2.1, 2);                   // returns: 2,10
fractionizer(2.1, 2, FALSE, ".", ",");  // returns: 2.10
fractionizer(2.25);                     // returns: 2¼
fractionizer(2.25, 2, TRUE);            // returns: 2¼
fractionizer(2.25, 2, TRUE, ".", ",");  // returns: 2¼
fractionizer(2.5);                      // returns: 2½
fractionizer(2.5, 2, TRUE);             // returns: 2½
fractionizer(2.5, 2, TRUE, ".", ",");   // returns: 2½
fractionizer(2.75);                     // returns: 2¾
fractionizer(2.75, 2, TRUE);            // returns: 2¾
fractionizer(2.75, 2, TRUE, ".", ",");  // returns: 2¾
fractionizer(-2);                       // returns: -2
fractionizer(-2, 2);                    // returns: -2
fractionizer(-2, 2, TRUE);              // returns: -2,00
fractionizer(-2, 2, TRUE, ".", ",");    // returns: -2.00
fractionizer(-2.1);                     // returns: -2
fractionizer(-2.1, 2);                  // returns: -2,10
fractionizer(-2.1, 2, FALSE, ".", ","); // returns: -2.10
fractionizer(-2.25);                    // returns: -2¼
fractionizer(-2.25, 2, TRUE);           // returns: -2¼
fractionizer(-2.25, 2, TRUE, ".", ","); // returns: -2¼
fractionizer(-2.5);                     // returns: -2½
fractionizer(-2.5, 2, TRUE);            // returns: -2½
fractionizer(-2.5, 2, TRUE, ".", ",");  // returns: -2½
fractionizer(-2.75);                    // returns: -2¾
fractionizer(-2.75, 2, TRUE);           // returns: -2¾
fractionizer(-2.75, 2, TRUE, ".", ","); // returns: -2¾
```
