<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  Exceptions

> Complete the exercises in appropriate files.

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**

**Remember about type declarations**

#### Exercise 1

1. Copy your code from exercise 1 in the regular expressions section to the `exercise1.php` file.
2. Modify the code in such a way that, if a condition is not met, the function throws an appropriate exception.
3. Next, correct the form in a way to make it handle those exceptions.

#### Exercise 2

1. In `exercise2.php` file, there is a function named `divide($divider, $dividend)` that returns different types of exceptions.  
   * `InvalidArgumentException`, when dividing by `0`
   * `OutOfRangeException`, when we try to divide by a negative number
   The next function uses it to display the result of dividing a random number by `5` or `0`.
2. Modify it so that it does not stop operating when an exception is thrown by the `divide()` function used for dividing.
3. Finally, display on the page information stating how many times each exception occured.
