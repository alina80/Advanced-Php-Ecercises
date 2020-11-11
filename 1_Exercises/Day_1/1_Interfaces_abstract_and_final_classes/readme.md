<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  Interfaces, abstract and final classes

> Complete the exercises in appropriate files.

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**

**Remember about type declarations**

#### Exercise 1 A

Create an abstract class named `User` that has:
1. `username`, `password` and `age` attributes (consider which access level you should give them).
2. Abstract method named `checkLogin` which:
   * takes `username` and `password` as parameters
3. Public method named `setLogin` which:
   * takes login as parameter
   * sets `username` to the passed value
4. Abstract method named `setPassword` which:
   * takes password as parameter
   * this method will implement different ways of checking the password
4. Abstract method named `setAge` which:
   * takes age as a parameter
5. Public final method named `login` which:
   * takes `username` and `password` as parameters
   * checks password using the `checkLogin` method

#### Exercise 1 B

Create two classes:  
* `Client`
* `Admin`  

that will extend the `User` class. You will implement abstract methods in them.  

The classes should work in the following way:  
1. We create a class object
2. We set appropriate values of login, password (here we check its correctness) and age using setters
3. Password setter should return `false` if the password does not meet criteria or the passed age is not a positive integer
4. At this point, we have an object with login, password and age set.
5. We call the `login` method, passing login and password to it; the method will return `true` or `false`
6. The `checkLogin` method should be called in the `login` method.
   `checkLogin` will check login and password for correctness and, possibly, other login conditions as well, and will return `true` or `false`.

In the `Admin` class logging in should meet the following conditions:
1. User entered correct login.
2. Password has at least `10` characters and is correct;  
   check the length of password in the `setPassword` method.
3. IP address of the user logging in must begin with `127` **or** `192`.

In the `Client` class logging in should require that:
  1. User enters correct login.
  2. Password has at least `8` characters and is correct;  
     check the length of password in the `setPassword` method.
  3. User is at least `18` years old.

  Create objects of each class and set logins and passwords.
  Check if logging in works.

Logging should require a valid password and after `3` unsuccessful attempts in a row the account should be blocked (the` login` method always returns `false` in such case).
Consider how to store incorrect login attempts.

Additionally, check the following scenario:
1. Create user object, set appropriate attributes
2. Make `2` failed login attempts
3. Make a correct login
4. Make a failed login attempt
5. Check if the account is blocked - it should not be.

#### Exercise 2

1. Create a class named `UserSet` that represents the users of  `Client` class.
2. Implement the `add` method for the newly created class that will take a `Client` class object as a parameter; you cannot have the possibility to add an object of another class.
3. Implement a built-in PHP interface named [Iterator][iterator] for this method, that will cause the logins and passwords of subsequent users to be displayed when iterating through the object.
4. Add a method named `showUserByPassword` that takes password as a parameter and returns all users who can log in with a given password. Use the `foreach` loop.

#### Exercise 3

1. Create an interface named `Url` that will be used for parse URL address in order to extract parameters passed with `GET`.
2. The interface should contain a constructor with one parameter - `$url` which is an address to be parsed, and a public method named `getParam($name)` that will return the value of parameter named `$name` extracted from the `$url`
3. Next, create a class named `StandardUrl` in which you will implement the interface.  
   Its task will be parsing a standard url, e.g. ``url_example.php?param1=99&param2=string`` in such a way that you get `99` etc. using the `getParam('param1')` method.
4. When the class works properly, create a file named `url_example.php` in which you will include the class with the interface.
5. In the file, create an instance of the `StandardUrl` object passing a sample URL address in the constructor (can be as seen in the example).
6. Next, display a list of all parameter names with their values.

<!-- Links -->
[iterator]: https://secure.php.net/manual/pl/class.iterator.php
