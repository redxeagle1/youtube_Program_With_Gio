## 4. string <!-- markdownlint-disable-line MD041 -->

- it's a way to store a series of characters
- we dealt with them some time and it's written `""` and `''`

### variable within text

- you can wrtie variable inside text through either string interpolation or concatination
- string interpolation is a concept you insert your variables directly to strings without the need of concatination in other words variables within a text itsel
  - you can't do string interpolation inside double `'`
  - you can do sring interpolation inside double `"` and you may wrap it for more readablity
- string concatination is just merging bunch of text together and can be done by the `.` operator examples for both

```php
$test_me = 'saad'
# interpolation
echo 'hello $test_me' // will not work even after wraping it with {}
echo "hello $test_me"
echo "hello {$test_me}"
echo 'hello' . $test_me
```

### accessing letters (string indexing)

- strings act like an array of character meaning you can access it through index
  - indexing start from index 0
  - wrong indexing will result a `Warning: Uninitialized string offset` so be ware of that when coding
  - you either access
    1. from the ***first*** element to the ***last*** through positive indexing from `0` to the `length - 1`
    2. from the ***last*** element to the ***first*** through negaitive indexing from `0` to the `-length + 1`

here is an indexing example

```php

$first_name = "John";
$last_name = "smither";

echo nl2br("$first_name[0]\n"); // Output: J
echo nl2br("positvie indexing :  $first_name[3]\n"); // Output: n
echo nl2br("printing the string full length\n");
var_dump($first_name);
// echo nl2br("$first_name[10]\n"); # this will give us a warning
echo nl2br("\nnegative indexing : {$first_name[-1]}"); // Output : h
```

### Nowdoc and Heredoc

- both are a way of writing multi-line strings
- the main difference is `Heredoc` acts like a `""` when working with variables and  `Nowdoc` acts like a `''`
- both affected by the spacing and newlines so be ware when typing some strings inside the as they maybe outputed unexpectedly due to the spacing.
- it require using an identifier which tells php where is the end of this multiline string and you can name it something of your choice
- you ***cannot*** put comments or trailing spaces on the same line as the opening ***Heredoc identifier***.

- here is how to define `Nowdoc`

```php
$texty = <<<IDENTIFEIR
Line 1
Line 2
Line 3
"hamada"
$first_name
IDENTIFEIR;
```

- here is how to define `Heredoc`

```php
$texty = <<<'IDENTIFEIR'
Line 1
Line 2
Line 3
"hamada"
$first_name
IDENTIFEIR;
```

- the use case of them is when writing dynamic html content
