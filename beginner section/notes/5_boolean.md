### boolean <!-- markdownlint-disable-line MD041 -->

- one of the scalar types and it's a truth value
- this is either `true` or `false` and can be defined as the following

```php
$isOk = true; # boolean defination
$isNotOk = FAlse; # it's case insensitive but you should stick to one case per project
```

- those values are predifined and case-insensitive
- printing it in the browser will output `1` as it's `true` but printing `false` will output blank or ` ` nothing since `echo` or the print function is casting it to a string to print there values you can make a conditional statment and print the value based on the logic
- it plays a vital rule in control structure
- php can convert datatybes to booleans in the fly and can be evaluated into `true` or `false` to based on there values everything can be evaluated into `true` except the following these are evaluated into `false`
  - integers : 0 , -0
  - floats : 0.0, -0
  - '' or empty strings
  - '0' string zero
  - [] or empty arrays
  - null value
  > so 'false' will evaluate to true
- to check if a variable is a boolean `is_bool($VARIABLE_NAME)`
