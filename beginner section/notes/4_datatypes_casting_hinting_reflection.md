# Datatypes

- php is a dynamicly typed languages like python and javascript which means tyoechecking is happening in the runtime unlike static typed languages which happens in compile time like c#,C++ and JAVA
- such flexiblity come with a price of the performance and can sometimes cause unexpected bugs
- php has improved alot and supported strict types and it mainly supports 10 primitive datatypes which grouped in 4 groups scalar, compound, special and psuedo tyoes and this is mainly used for readability and these are `mixed` and `void`
- scalar types are 4 types which are `integers float string boolean`

## type hinting and casting

- types are always determined by the php runtime by the context
- type hinting happens in class and function proberty and it allows you to dynamicly change a datatype into the prefered datatype let's showcase this in an example

```php
function sum($x,$y) {
    return $x + $y;
}

$sum = sum(1,2);
echo $sum .'<br />';
```

- not hinting the type of `x` and `y` will allow us to pass any type from the scalar category literally since it can dynamicly type cast it I mean passing string will not affect the core functionality which is summing
- when reflecting like that nothing the variable type of course change based on what passed as types are always determined by the php runtime by the context
- when hint the function like that `function sum(int $x,int $y)` this will gurentee that there types are alway integer even after passing a different type in the function like a string this dynamic casting process is called type juggling
- such like dynamism maybe troublesome and very performance cost this led to `strict_types` which force type hinting and strict type casting which leads to a better qaulity of code and to do so `declare(strict_types=1)`
- to explicity type cast something you must inclose the targegt type with `()` like the following

```php
$hamada = (int)'5';
```

## type reflection in php

- printing a varibale will not distinguish its type to know really the type you can use one of the following method
  1. `gettype($VARIABLE_NAME)`
      - this only return the type only
  2. `var_dump(VARIABLE_NAME)`
      - this prints out everything it know about this expression you give it to like

## compound types

### 1. arrays

- it funcitons more like a `python LIST` holding different values of different types

```php
$companies = [1,2,3,0.4,-3,'a',"my big mambo",true];
```

- it cannot be printed by a regular `echo` it will give you a warning and prints its type you must use `print_r()` instead  

### 2. object

### 3. callable

### 4. iterable

## special types

### 1. resource

### 2. null

- means no value literally

## psuedo elements

### 1. mixed

### 2. void
