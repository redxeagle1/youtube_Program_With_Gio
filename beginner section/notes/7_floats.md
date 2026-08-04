## floats <!-- markdownlint-disable-line MD041 -->

- it accepts decimals and integer value  either positve or negative
- it's valid to write floating numbers into exponential value i.e. `13e3` which is `13000` or $13 \times 10^3$ either in negativie exponential or positve
- for readability purpose in php `7.4` the ability to seperate the number with `_` was added so you can write `102093323200.2132` into `102_093_323_200.2_132`
- the max integer range is defined by the platform wether it's 32-bit or 64-bit and you can check that by the oredifined constants named `PHP_INT_MAX` and `PHP_INT_MIN`

> casting from a type to float follows the same rules of integers

```php
$myAge = 123.2322; # float defiantion
$random_sample = 13.5e5; # exponetial float defiantion 
```

- same as c#'s own implemnataion of double since the floats are represents as binary it lose some precision upon doing an operation like adding `.1` to `.2` will result `.3000000004` so be aware when no to use floats to do equality checks [follow this link to learn how to deal with that](https://floating-point-gui.de/languages/php/) and you will notice it in the operators section when using the rounding function `floor()` or `ciel`

- to check if ta variable is a float use the following funciton `is_float()` and it will return true or false

### predifend special float constant

- there are two special constant which are

- ***Not A Number*** or undified number `NAN` and you can get it when you try to calculate the log of -1 or any uncomputable operation
- ***Infinity*** or `INF` and you can get it when you get out of the float boundary

>[!WARNING]
>
> Never ever compare a variable with those constant instead use either
>
> - `is_finite()` `is_infinite()` to check infinity
> - `is_nan` to check if it's undifined
