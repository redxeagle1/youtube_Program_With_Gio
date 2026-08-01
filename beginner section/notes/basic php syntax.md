### the simpliest boilerplate <!-- markdownlint-disable-line MD041 -->

- in order to write php you must use the `php` tag

```php
<?php
// some code here and there
?>
```

> only the closing tag `?>` is needed when you write in an html file or an outer file but writing it in a `.php` file will give a warning to prevent any accidental text from being written after the closing tag as that will be parsed too.

### outpruting in the web

- in order to print something you can use `echo` functoin and can be written in 2 different ways:

```php
echo 'hello world';
echo ('hello world');
```  

- you can also use `print` and can be written in 2 different ways:

```php
print 'hello world';
print('hello world');
```

> notice that we end our statements[^1] with the semi-colon or [;] and that is a must in every statement except the last one before the php closing tag or `?>` this exception is goof for inline php statements inside html.
> note also that string are always surrounded with [""] or ['']. also you can put `'` inside the double `"`
> you can use escaping to print special characters like `"` or `'`

#### `print` vs `echo`

- `print` has a return value of `1` so outputing it with `echo` like the next example will print the text + literal `1` concatinated so it does return a value but `echo` is void so it returns nothing
- another one is `print`: Only accepts ***one argument*** but `echo`: Accepts ***multiple arguments*** separated by commas (,) and eventually be concatinated
- echo is marginally faster than print meaning by a very small amount

> we will dive more deep into concatination in the next set of videos

```php
echo print 'hello world'; // # output : hello world1
```

### excecuting php scripts via the CLI

you can also execute the php files or scripts seperately via doing the following steps

- open the XAMPP panel
- navigate to shell and click it
- a cmd  prompt will popup
- enter the change directory command or `cd` to the targeted folder
- upon reaching to it type `php <target filename>` inside it

### variable in php

- when creating a variable it follow the next set of rule <!-- markdownlint-disable-line MD003 -->
  - it must start with a `$` sign to indicating it's a variable
  - it must start with a letter [wether upper or lower case] OR with underscore `_` AFTER the `$` sign
  - it mustn't start with numbers at all AFTER the `$` sign
  - NO special character i.e [@,#] are allowed
  - you can not assign a value to a variable named after a this `$this` (this is related to OOP)
  - weirdly you can use - but prefer not to - name a variable after a KEYWORD like `if`

- variable by default are assigned and passed by value weather it's arreay string a number

> [!EXAMPLE]
> suppose we have the following code
>
> ```php
> $a = 4
> $b = 6 
> $a = $b
> $b = 55
> echo $a # output 55
> ```
>
> when the variable `b` is passed by a ***value*** into another one `a` the `a` var only take `b`'s value so changing `b` after that will not change `a`  

- a variable can be passed by refrence via prefixing it with `&` like the following

> [!EXAMPLE]
>
> ```php
> $a = 4
> $b = 6
> $a = &$b 
> $b = 55
> echo $a # output 6
> ```
>
> when the variable `b` is passed by a ***refrence*** into another one `a`, so when changing `b` , `a` will change  

### variable within text

- you can wrtie variable inside text through either string interpolation or concatination
- string interpolation is a concept you insert your variables directly to strings without the need of concatination in other words variables within a text itsel
  - you can't do string interpolation inside double `'`
  - you can do sring interpolation inside double `"` and you may wrap it for more readablity
- string concatination is just merging bunch of text together and can be done by the `.` operator
examples for both

```php
$test_me = 'saad'
# interpolation
echo 'hello $test_me' // will not work even after wraping it with {}
echo "hello $test_me"
echo "hello {$test_me}"
echo 'hello' . $test_me
```

### php in html

- you can - as we mentioned - write html content inside html and here are some different versions

```php
<?php echo 'hello world'?> # "<?php echo" this part can be shorten into "<?= 'hello world'
```

> also another not is you can print html elements via php as it's a server side language this is useful for dynamic generated html
> although you can mix between html and php directly to achieve the seperation of concerns

### comments

1. for single line comment either use `//` or `#`
2. for multi-line comments use `/**/` like that way

```php
/*
somwthing
*/
```

3. for doc-block comments which used for documenting your source code like that way <!-- markdownlint-disable-line MD029 -->

```php
/**
 * some
 * thing
*/
```

> [!WARNING]
> place a comment a before the closing tag of html will not comment it out so be carefull
>
> ```php
> #this is a random comment ?> `this thing will be printed as its` 
> ```
>
> and do not add another multi-line comment inside a mulit line one this be be error

---

[^1]:**the com mands that either do something like printing or declaring and initializing a variable or controlling the code flow**
