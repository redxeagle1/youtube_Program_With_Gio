### variable in php <!-- markdownlint-disable-line MD041 -->

> php statements are executed top-to-bottom

- when creating a variable it follow the next set of rule <!-- markdownlint-disable-line MD003 -->
  - it must start with a `$` sign to indicating it's a variable
  - it must start with a letter [wether upper or lower case] OR with underscore `_` AFTER the `$` sign
  - it mustn't start with numbers at all AFTER the `$` sign
  - NO special character i.e [@,#] are allowed
  - you can not assign a value to a variable named after a this `$this` (this is related to OOP)
  - weirdly you can use - but prefer not to - name a variable after a KEYWORD like `if`

- variable by default are assigned and passed by value weather it's arreay string a number
- variables can be reassigned
- variable are declared and assign as the following line `$VAR_NAME = val`  as known as initialization

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

### constants

- unlike variable which can be changed after defination constant cannot change value
- naming constant follow the same naming rule of variable except prefixing it with a `$` sign
- constant have to distinct method of defination
  1. `define('CONSTANT_NAME','VALUE');`
      - this function can accept three arguments the name and value and an [optional and deprecated boolean indicated it's case sensitive] respectively
      - this defines constants at runtime and enable defining constant at control structure and we will touch that in the next videos
      - this function allow us to define constant dynamicly as highled in the `index.php`
  2. `const CONSTANT_NAME = value`
      - this defines the constant at compile time so it's not suited for contant defination at control structure
- you can check wethwer a constant is defined with the `defined()` function which return boolean value

> note that there is other differences but we will not cover it now as it's advanced

### predifined and magic constants

- php provides predefined constants to give you some information about php version for example here is a line for the full list of [predined constants](https://www.php.net/manual/en/reserved.constants.php)
- php provide magic constant and they called that as there value changes based on where they are used like `__Line__` which print out the current line number it's in and `__FILE__` which tells you the location of your file to get the full list follow this link [magic constants](https://www.php.net/manual/en/language.constants.magic.php)

### Variable Variables

- php can make dynamic variable as the following

```php
$foo = "bar";
$$foo = "baz";

echo  $foo, $bar ; # this will work
echo "$foo + $bar" # this will work
echo "$foo + $$foo" # this will NOT work
echo "$foo + {$$foo}" # this will work
echo ""$foo + ${$foo}"" # this will also work
```