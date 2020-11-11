<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

# Autoload function

> Complete the exercises in appropriate files.

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**

**Remember about type declarations**

#### Exercise 1

> Files for this exercise are int the Exercise1 directory

Analyze the code in User and Account classes. In **exercise1.php** create one object for each class and display information about them.

`User` and `Account` classes have a magic method `__toString()` defined which allows us to use `echo` instruction on objects of those classes. The result will be a string **returned** by the `__toString()` method, e.g:

```
$bob = new User('bob');
echo $bob; // will display "Name: bob"
```

Create the appropriate functions for automatic loading of classes when creating their objects.

#### Exercise 2

> Files for this exercise are int the Exercise2 directory

In **exercise2.php**, create and display information about objects of the following classes: `Car`, `Bike` and `User`. `Bike` and `Car` classes are in the Vehicles catalog, and `User` class is in the User catalog.

Write two functions that load files from appropriate catalogs and register them using the function named `spl_autoload_register()`.

To view the information about objects, use the magical method `__toString()` which is already defined in all classes.

**Attention**

To avoid warnings - before you load a file, check if it exists in the catalog using the [file_exists()](https://secure.php.net/manual/en/function.file-exists.php) function.

#### Exercise 3

> Files for this exercise are int the Exercise3 directory

In **exercise3.php**, create and display information about objects of `Target`, `Kmart` and `Drink` classes. `Target` and `Kmart` classes are in the Shops catalog, and the `Drink` class is in the Products catalog.

To load classes, use the autoloader built-in into **Composer**

To view the information about objects, use the magical method `__toString()` which is already defined in all classes.

**How to use Composer autoloader**
1. In the catalog of the exercise, run `composer init` command, confirm all steps in the generator.
2. Open **composer.json** file and add a section in it named `autoload` (use JSON format).
3. In the `autoload` section, place `classmap` sections. A detailed description of how to add folders to it is in the [documentation](https://getcomposer.org/doc/04-schema.md#classmap).
3. Install Composer dependencies using the `composer install` command.
4. Add the`vendor/autoload.php` file to the exercise file.

**Attention**: Remember that each time the **composer.json** file is changed, you must run the`composer dump-autoload` command.
