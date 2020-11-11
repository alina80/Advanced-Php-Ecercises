<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

# Advanced PHP - Snippets
> Short pieces of code that solve various problems, illustrate dependencies, or show how to use some more complicated functions.

#### 1. What is the difference between an abstract class and an interface?

In addition to the most obvious difference lying in the fact that abstract class can contain code while interface cannot, there are also
others listed below:
* class can implement multiple interfaces and extend only one class
* all methods in an interface are public while in an abstract class methods can also be protected
* abstract classes may contain attributes while interfaces do not have this option

Finally, there is also a good practice to use abstract classes when other classes that will inherit from it, are closely related and together they implement specific functionality. Interfaces treat the aim of classes that implement them more loosely.

#### 2. Can you put classes that will later be automatically loaded into different directories?

Yes, but instead of `__autoload` method, we must use a newer `spl_autoload_register` method then.
See an example of use below.

```php
function classLoader($classname){
    $file = __DIR__.'/class/'.$classname.'.class.php';
    if (file_exists($file) && is_readable($file) && !class_exists($classname, false)){
        require_once($file);
    } else {
        throw new Exception('Class cannot be found ( ' . $classname . ' )');
    }
}

spl_autoload_register('classLoader');
```
If you do not know what `__DIR__` is, check [__DIR__][__DIR__]

#### 3. Functions most commonly used on strings with examples.

**strlen** - returns string length
```php
$str = 'abcdef';
echo strlen($str); // 6
```

**trim** - removes white characters
```php
$text   = "\t\tThese are a few words :) ...  ";
var_dump($text);// string(32) "        These are a few words :) ...  "
var_dump(trim($text));// string(32) "These are a few words :) ..."
```

**str_replace** - changes a word in the searched sentence into the one passed in the parameter
```php
$bodytag = str_replace("main", "container", "<body class='main'>");
```

**strpos** - returns the position at which the searched character occurs.
             Be careful when using this method in the conditional expression `if`, because the position `0` can be interpreted as `false`.
```php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme); // $pos = 0

//Correct use in the conditional expression if
if ($pos !== false) {
     echo "The string '$findme' was found in the string '$mystring'";
} else {
     echo "The string '$findme' was not found in the string '$mystring'";
}
```

**addslashes** and **stripslashes** - adds/deletes slashes before special characters that require this action
```php
$str = "Is your name O'Reilly?";

echo addslashes($str);
// Outputs: Is your name O\'Reilly?

echo stripslashes($str);
// Outputs: Is your name O'reilly?
```

**parse_str** - changes a given string into an array with values
```php
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
echo $first;  // value
echo $arr[0]; // foo bar
echo $arr[1]; // baz
```


#### 4. Basic meanings of regular expressions

|      Expression     |                        Meaning                         |
|:-------------------:|:------------------------------------------------------:|
|         foo         |                      string "foo"                      |
|         ^foo        |           "foo" at the beginning of string             |
|        ^foo$        |          "foo" takes the whole string length           |
|        [abc]        |                       a, b, or c                       |
|        [a-z]        |                every lower case letter                 |
|        [^A-Z]       |          every letter that is not upper case           |
|      (gif&#124;jpg) |                     "gif" or "jpg"                     |
|        [a-z]+       |             one or more lower case letters             |
|      [0-9\.\-]      |                every digit, dot, or minus              |
|  ^[a-zA-Z0-9]{1,}$  |      every word with minimum one letter or digit       |
|     ([wx])([yz])    |                    wy, wz, xy, or xz                   |
|     [^A-Za-z0-9]    |       every symbol excluding letters and digits        |
| ([A-Z]{3}|[0-9]{4}) |              three letters or four digits              |

#### 5. Useful ways to use HEADER in scripts

* Clearing browser's cache
```php
header("Cache-Control: no-cache, mustrevalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header('Pragma: no-cache');
```

* Redirecting to a different address
```php
header("Location: http://www.example.com/");
```

* Changing server response code - useful i.a. when rebuilding application
```php
header('HTTP/1.1 404 Not Found');//not found
header('HTTP/1.1 403 Forbidden');//access forbidden, e.g. entering incorrect login and/or password
header('HTTP/1.1 301 Moved Permanently');//page moved to  a different address
header('HTTP/1.1 500 Internal Server Error');//internal server error
```

#### 6. Saving and reading a file

We use two functions for this purpose:

Reading
```php
$file = file_get_contents('people.txt');
```
Saving
```php
file_put_contents($file, $txt);
```

#### 7. Parsing XML

We use two methods for parsing an XML file:

```php
$products = simplexml_load_file('products.xml');
```
Loads the whole file at once, and then we can get to the appropriate nodes.
```php
$products = new XMLReader();
$products->xml(file_get_contents('products.xml'));
```
Loads the file node by node.
<!-- Links -->
[__DIR__]: https://secure.php.net/manual/en/language.constants.predefined.php
