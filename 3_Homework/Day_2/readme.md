# Advanced PHP - homework
> Complete all exercises in the prepared files.

> Additional exercises are for volunteers

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**  

**Remember about type declarations**

#### Exercise 1

1. In `exercise1.php`, implement a function named `createFile($name, $string)`.
2. Its task will be saving a given `$string` parameter in a file named `$name` with `txt` extension.
3. The file should be created if it does not exist in current directory.
4. If the file exists, yo should overwrite its content so that it **only** contains the given `$string`.

#### Exercise 2

1. The file with the exercise contains a function named `circleArea(int $radius): float` that **returns** a number representing the field of a circle with a given radius, rounded to the first decimal place.
2. Add a rule that checks if the `$radius` is greater than zero.
3. If the radius is incorrect, throw an exception containing the message: `Incorrect number`.
4. Create a function named `handleRequest(int $rad)`, **in which you will call** the `circleArea()` function passing it `$rad` as a parameter.
5. In the function named `handleRequest` add code that, despite calling `circleArea()` within it with incorrect radius, will handle the exception thrown by that function.
6. Handling the exception means that the function returns the message extracted from the captured exception, and adds `$rad` number at the end (**preceded by a space!**)
   e.g. `Incorrect number -1`. when calling `handleRequest(-1)`
7. If the number is correct, the `handleRequest` function **returns** the result of of calculating the circle area using the `circleArea()` function.

#### Exercise 3

1. In `exercise03.php`, write a function named `whatVariable($variable)` that will determine if the variable passed as a parameter is a correct  address:  
   * `email` e.g. `john.goodwill@coderslab.pl`
   * `url` e.g. `http://www.coderslab.pl`
   * `ip` e.g. `192.168.150.143`
2. If the variable belongs to one of the type above, the function should **return** a string with its name (`email/url/ip`) (**written in lower case**).
3. Otherwise, the function **return** the string: `Incorrect Input`.

#### Exercise 4

1. In the file `exercise04.php` you will find a form for sending an email.
2. The form has `3` `inputs`:  
   * First one contains sender address that will be used in the header as **respond-to address**  
   * Second one contains recipient address  
   * Third contains the email message.
3. When the data are entered, the form must allow sending an email to the entered address.
4. Write PHP code that does not use additional libraries (you can only use the built-in [mail()][mail] function).

#### Exercise 5

1. In `exercise05.php`, implement a function named `showProduct($attribute, $path)`  
2. The task of the function, which uses the [XMLReader][XMLReader] library, is parsing the `XML` file that is located under ta given `$path`
3. The function should **return** an array:
   * The array should contain the `id` attribute value of a product as **key**, and the `$attribute` attribute value of this product as key **value**
   * If an attribute with the given name cannot be found in any node, the function should **return** an empty array.

<!-- Links -->
[mail]: http://php.net/manual/en/function.mail.php
[XMLReader]: http://php.net/manual/en/book.xmlreader.php
