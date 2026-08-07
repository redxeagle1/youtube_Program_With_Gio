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

> notice that we end our statements(^1) with the semi-colon or (;) and that is a must in every statement except the last one before the php closing tag or `?>` this exception is goof for inline php statements inside html.
> note also that string are always surrounded with ("") or (''). also you can put `'` inside the double `"`
> you can use escaping to print special characters like `"` or `'`

#### `print` vs `echo`

- `print` has a return value of `1` so outputing it with `echo` like the next example will print the text + literal `1` concatinated so it does return a value but `echo` is void so it returns nothing
- another one is `print`: Only accepts ***one argument*** but `echo`: Accepts ***multiple arguments*** separated by commas (,) and eventually be concatinated
- echo is marginally faster than print meaning by a very small amount

> we will dive more deep into concatination in the next set of videos

```php
echo print 'hello world'; // # output : hello world1
```

> - in order to print newline in php use either
>   - `<br>` : by concatinating it with the string being printed
>   - `nl2br(STRING_NAME)` : knowing the `\n` escape sequence in programming you can use the same technique he
> you can `sprintf()` and this equivlent to `format` function in c# or pythobn

### excecuting php scripts via the CLI

you can also execute the php files or scripts seperately via doing the following steps

- open the XAMPP panel
- navigate to shell and click it
- a cmd  prompt will popup
- enter the change directory command or `cd` to the targeted folder
- upon reaching to it type `php <target filename>` inside it

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

> (!WARNING)
> place a comment a before the closing tag of html will not comment it out so be carefull
>
> ```php
> #this is a random comment ?> `this thing will be printed as its` 
> ```
>
> and do not add another multi-line comment inside a mulit line one this be be error

---

(^1):**the com mands that either do something like printing or declaring and initializing a variable or controlling the code flow**

### expression

- php itself is an expression oriented language where almost anything is an expression
- expression always evaluate to some kind of value of any type
- the simplest expression are constant, variable and litral value (i.e. like `5`, `true` or `"strings"`)
- example of expression
  - everything after the assignment operator `=` is considered an expression
  - when comparing variables
  - function are considered structure as they evaluate in a value
  - control structure does also considerd an expression
