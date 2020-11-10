<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

# Advanced operations on strings

> Complete the exercises in appropriate files.

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**

**Remember about type declarations**

#### Exercise 1

Write three functions. Each of them should take an email address (string in the form: `name.surname@company.com.pl`) as a parameter and return:
1. Name and surname extracted from email. Remember that both name and surname begin with a capital letter.
2. Company name and surname.
3. A person's initials.

```php
echo function1('john.snow@company.com.pl');//John Snow
echo function2('john.snow@company.com.pl');//Company Snow
echo function3('john.snow@company.com.pl');//J.S.
```

Test your functions on several different emails.

#### Exercise 2

Write a function that will take an email address (in the form: `name.surname@company.com.pl`) as a parameter.
The function should **return** an array with all aliases respectively:  
* beginning with `n.surname@`
* beginning with `surname@`
* ending with `@company.pl`
* ending with `@mail.company.pl`

```
input -> john.kovalsky@coderslab.com.pl
output -> j.kovalsky@coderslab.com.pl, kovalsky@coderslab.com.pl, john.kovalsky@coderslab.pl, john.kovalsky@mail.coderslab.pl
```

Test your functions on several different emails.
