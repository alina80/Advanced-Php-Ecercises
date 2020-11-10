<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  Filters

> Complete the exercises in appropriate files.

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**

**Remember about type declarations**

#### Exercise 1

1. Wrote a function that will take an array with the following addresses as a parameter:
   * MAIL,
   * URL,
   * IP.
2. Then function will then check with the use of filters, if the entered data are correct.
3. The function should **return** an array containing:
   * a single key (passed address),
   * ```true``` or ```false``` value, depending on whether the address is correct or not.

E.g.:

```php
$arrayWithAddr = ['john.kovalsky@gmail.com', 'http://www.coderslab.pl', '192.168.290.4'];
function1($arrayWithAddr);
//[
//    'john.kovalsky@gmail.com'  => true,
//    'http://www.coderslab.pl' => true,
//    '192.168.290.4'           => false,
//];
```
