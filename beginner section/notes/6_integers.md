## integer <!-- markdownlint-disable-line MD041 -->

- it only accepts integer value [no decimals at all] either positve or negative
- you can assign different bases as integers and it will work
  - octal by prefixing the value with `0`
  - binary by prefixing the value with `0b`
  - hexadecimal by prefixing the value with `0x`
- for readability purpose in php `7.4` the ability to seperate the number with `_` was added
- the max integer range is defined by the platform wether it's 32-bit or 64-bit

```php
$my_age = 123; # default integer defiantion
$my_octal_age = 055 # octal and the output is :     45
$my_binary_age = 0b001101101 # binary and lazy to calculate the output
$my_hexiadicmal_age = 0x2A # hexadeciaml and output is :    42 
```

> overflowing the max limit will automaticly change the datatype into float

### casting to intergers

- to cast to int do the following

```php
$test1 = (int) "221321"; 
```

- casting from `boolean` will return `1` if `true` and `0` if `false` as a value for that integer
- casting from a `float` will trim the decimal point and what is after it and ***round down*** aka floor it down to the nearest integer
- casting from a `string` will take on of the following cases
  - the value of it is a string float i.e. `"32.32"`:=> it will cast it to integer dealing with it as a float-to-int casting
  - the value of it is a mix between a string and integer or decimal i.e. `2123.21ismyname` :=> php will try to take only the number till the first occurance of a string and return the result
  - the value is all a string or php can't  detect any number digit then it will return `0`

> casting a stringy "221_32_1" will return "221"
