# Advanced PHP - homework
> Complete all exercises in the prepared files.

> Additional exercises are for volunteers

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**  

**Remember about type declarations**

#### Exercise 1

1. Individual classes, which you created in exercise 1 [1_Interfaces_abstract_and_final_classes][exercise1], are located in files named according to class names, e.g. `Admin` class in file `Admin.php`.  
2. Use the `autoload` mechanism to load those classes in the file named `exercise01.php`.
3. The two methods contained in this file should return instances of automatically loaded objects.  
4. Check if your code works correctly.

#### Exercise 2

1. In the `Enigma` class, implement a method named `getCode($code)` that will **return** modified `$code` string.
2. The modification lies in moving each letter by `4` positions in the alphabet.
3. In `exercise2.php` you will find a class and an array with alphabet.
4. In the case of the last few letter of the alphabet, moving past the last letter should be continued form the beginning of the array.

#### Exercise 3

1. In `exercise3.php` you will find a class named `Password` with one public static method named `checkComplexity($pass)`.
2. Implement the following functionalities in this method.
3. The method takes a **string** as a parameter and checks its complexity.
4. The method **returns** `true` if the string meets the conditions:  
   * length of `6` letters **or** digits minimum
   * contains **at least** one upper case letter **and** at least one digit.  
5. Otherwise the method **returns** `false`.

You can use [**regex101**][regex101] to help you test regular expressions.

#### Exercise 4

Using the interface written in exercise 3 during classes [1_Interfaces_abstract_and_final_classes][exercise1] (finish it on your own if you did not manage to during classes):  
1. Add a new class named `ExtendedUrl`. The class should implement the interface and correctly parse a non-standard url address written according to the pattern seen in the example below:
   e.g. `url_example.php/param1.99/param2.string`
2. In the example above, passing `param1` to the method should return `99`, and passing `param2` should return `string`
3. In the created file named `url_example.php`, include the file with the new class, and change the object instances and the url passed to the constructor to the new ones.

Does the list of parameters and values display correctly despite changing type of the object?

<!-- Links -->
[regex101]: https://regex101.com/
[exercise1]: ../../1_Exercises/Day_1/1_Interfaces_abstract_and_final_classes
