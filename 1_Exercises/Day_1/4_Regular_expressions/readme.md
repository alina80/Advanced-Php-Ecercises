<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

# Regular expressions

> Complete the exercises in appropriate files.

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**

**Remember about type declarations**

#### Exercise 1

Write a function named `regexCheckPassword(string $password): bool` that will check if password meets all conditions below:
1. Has from 10 to 15 characters.
2. Contains at least one lower case letter character.
3. Contains at least one upper case letter character.
4. Does not contain two upper or lower case letters next to each other.

If the password does not meet any of the conditions above, the function should return **false**.  
Write a form that will use the function above and check correctness of password displaying an appropriate message.

E.g.:
```php
regexCheckPassword('abc');//false
regexCheckPassword('abcdefghijklmnop');//false
regexCheckPassword('abCdeFghijklmnop');//false
regexCheckPassword('aBpLoCkDmTgGgG');//true
```

#### Exercise 2

Write a function named `findCitations(string $text): array` that will find all quotations in a text and return them as an array of strings.  
To simplify, we assume that quotes are surrounded with quotation marks.
Np.:
```php
$citeArray = findCitations('This is some text. "This is quotation1". The text continues. "This is a second quotation".');
//Should return the following array:
print_r($citeArray);//["This is quotation1", "This is a second quotation"]
```

### Exercise 3

Write a function named `cleanString(string $text): string` that will clear all characters in a text that are not:
* digits
* lower or upper case letters
* underscores `_`

You can use the help of [**regex101**][regex101] in testing regular expressions.

E.g.:
```php
cleanString('Single_Page*45(wow');//Single_Page45wow
cleanString('Is_thisStringCorrect');//Is_thisStringCorrect
cleanString('Another$%^&Wrong*6789String_____');//AnotherWrong6789String_____
```

<!-- Links -->
[regex101]: https://regex101.com/
