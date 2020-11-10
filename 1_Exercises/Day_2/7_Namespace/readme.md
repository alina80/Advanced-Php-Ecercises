<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

# Namespace

> Complete the exercises in appropriate files.

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**

**Remember about type declarations**

#### Exercise 1

> Files for this exercise are in the Exercise1 directory

1. In **Exercise1** directory, create **User.php**, and in it create `User` class with a namespace `Exercise1`.
2. In **Interfaces** directory you will find 4 interfaces:
    * `GoodbyeInterface` with `sayGoodbye()` method that displays the message: `Bye Bye!`
    * `HelloInterface` with `sayHello()` method that displays the message: `Hello!`
    * `WatchInterface` with `watch()` method that displays the message: `I'm watching You!`
    * `IntroductionInterface` with methods: `sayYourNamespace()` that displays the namespace of an object, and `sayYourClass` that displays class of an object
3. In the `User` class from point 1, implement the interfaces: `IntroductionInterface` and `HelloInterface`. in the **exercise1.php** file, create an object of that class and call methods of the implemented interfaces.
4. In **Exercise1** directory, create a directory named **User**, and a `User` class in it. Give the class the namespace `Exercise1\User`.
5. In the `User` class from point 4, implement the interfaces: `IntroductionInterface` and `GoodbyeInterface`. In the **exercise1.php** file,  create an object of that class and call methods of the implemented interfaces.
6. In the **User** directory created in point 4, create a class named `Watcher` and give it the namespace `Exercise1\User`.
7. In the `Watcher` class from point 4, implement the interfaces: `IntroductionInterface` and `WatchInterface`. In the **exercise1.php** file,   create an object of that class and call methods of the implemented interfaces.

#### Exercise 2

Modify the **exercise1.php** file so that you do not have to enter full namespaces when creating objects of individual classes. To do this, use the instruction `use` and aliases.

#### Exercise 3

In the **exercise1.php** file, remove the `require` instruction. Write an autoloader that loads classes with their namespaces.

Use the `__DIR__` instruction and `str_replace` function to change the namespace to file path.

#### Exercise 4

> Files for this exercise are in the Exercise4 directory

In the **Exercise4** directory, you will find a framework of an application. The file that executes the code is in **exercise4.php**, and in the **src** directory you will find classes with namespeces.

Add an autoloader built-in into Composer to the file **exercise4.php**, so that the classes are loaded correctly.

**Using Composer's autoloader**
1. In the exercise directory run the command `composer init`, confirm all steps in the generator.
2. Open the **composer.json** file and add an `autoload` section  in it (use JSON format).
3. In the `autoload` section place `psr-4` section. Add namespace names and paths to classes in it. Example:
    ```json
    "autoload":{
       "psr-4": {
           "name_of\\namespace\\": "path/classes"
      }
    }
    ```

    Detailed description of adding catalogs to it can be found in the [documentation](https://getcomposer.org/doc/04-schema.md#psr-4).

4. Install Composer dependencies using the command: `composer install`.
5. Add the `vendor/autoload.php` file to the file with the exercise.

**Attention**: Remember to run the command `composer dump-autoload` each time you make a change in the **composer.json** file.
