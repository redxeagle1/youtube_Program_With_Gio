# arrays

- it funcitons more like a `python LIST[]` holding different values of different types
- it's so dynamic that you can use it as it's to represent stacks, hash tables aka dictionary, queues,collections  ordered maps.
- all the scalar types can be casted into array explicitly like this example

    ```php
    $hamada = 11;
    $array = (array) $hamada
    ```

## declaration

- it can be defined in 2 different ways which are
  - using the square brackets syntax i.e. like python which name short array syntax

      ```php
      $companies = [1,2,3,0.4,-3,'a',"my mambo",true];
      ```

  - using an older more verbose syntax using the array object constructor

      ```php
      $companies = array(1,2,3,0.4,-3,'a',"my mambo",true);
      ```

      > I personally prefer the first method
  
## printing

- it cannot be printed by a regular `echo` it will give you a warning and prints its type you must use `print_r()` instead  

  > to make the output of `print_r()` more readable inclose it with the `<pre>` tag element as the following
  >
  > ```php
  > $programmingLanguage = ['PHP', 'Python', 'java'];
  > echo '<pre>';
  > print_r($programmingLanguage);
  > echo '</pre>';
  > ```
  >
  
- you can also print it using `var_dump()` but it will be less clear than the `print_r()`

## indexing

- array in be php have keys as indexes i.e. the key `0` will access the first element and ***you can define your own keys two and will be cover in more details in the associative arrays or python dictoinary or a hash table***
- an array can be accessed through index
  - indexing start from index 0
  - wrong indexing will result a `Warning: Undefined array key` and if you `var_dump()` it it will give the `NULL` type along side with warning so be ware of that when coding
  - you can only access a key from the ***first*** element to the ***last*** through positive indexing from `0` to the `length - 1`

- unlike string which can be accessed from from the ***last*** element to the ***first*** through negaitive indexing the arrays can't do it

- not defining your own keys php will set the keys to the default defination which is the number from `0` to `length - 1`
  - here is an indexing example

    ```php
    $programmingLanguage = ['PHP', 'Python', 'java'];
    echo "$programmingLanguage[3]"; // wrong indexing
    echo "$programmingLanguage[1]"; // right indexing
    ```

- to check if a key exist by using the `isset` funciton and it return a boolean typed value and it

  > `isset()` does check if its value is `NULL` along side being exist at the first place if either of the conditions wasn't satisfied it will return `false`

- another way of checking is using `array_key_exists()` function and this does not check the element's value is `null` but check if the key only exists or no

- in order to know the length of an array use the `count()` function like the following

    ```php
    echo nl2br(sprintf("\n the count is %d", count($programmingLanguage)));
    // nl2br() and sprintf() are for formating
    ```

- you can `re-index` an array via `array_values(ARRAY_NAME)` method but it return a new copy or it operate by passing a value not a refrence

    ```php
    $programmingLanguage = array_values($programmingLanguage);
    ```

## mutation

- in order to mutate an element in the array you must access it first through its `key` or `index` as the following example

```php
$programmingLanguage = ['PHP', 'Python', 'java'];
// changing python to c++
$programmingLanguage[1] = ['C++'];

```

- in order to add `one` new element pass it without notice specifying any indexes while passing the element in the `[]`

```php
$programmingLanguage = ['PHP', 'Python', 'java'];
// changing python to c++
$programmingLanguage[] = ['C++'];
```

- in oder to add `mulitple` new elements use the `array_push()` function as the following

```php
$programmingLanguage = ['PHP', 'Python', 'java'];

array_push($programmingLanguage,'mojo','rust','c');
```

- you can remove a key by many ways here is some of them :
  - using `array_pop(ARRAY_NAME)` it will pop the ***last element*** of the array removing it then return it
  - using `array_shift(ARRAY_NAME) it will remove the ***first element***
    > this will cause `re-indexing` for that array meaning a full reset your numric keys if you used them
  - using the `unset()` function and this one may `desttoy the entire array` if you didn't specify the keys or indexes but if use proberly you can delete multiple elemnt spreaded across the array

    >```php
    > $programmingLanguage = ['PHP', 'Python', 'java', 'mojo','rust','c'];
    > 
    > unset($programmingLanguage[1],$programmingLanguage[3],$programmingLanguage[5],);
    > 
    > // Output : Array ( [0] => PHP [2] => java [4] => rust )
    >```
    >
    > notice the deletation didn't cause re-indexing at all
    > to re-index it use `array_values()` funcito
    >
    > ```php
    > $programmingLanguage = array_values($programmingLanguage);
    > // Output : Array ( [0] => PHP [1] => java [2] => rust )
    > ```

## associative arrays

- as mentioned before you are able to define your own keys and when that happens the array act as a hash table or a dictoinary and called associative arrays
- you can define them by specifying the key in the defination
- key can either be
  - strings
  - numeric
    > php will try to cast all the keys into one of the two mentioned so assigning a `true` for example will be casted to `1`
- such dynamism will allow us to difine key as vatiable then pass is a keys ginig as the ability for dynamic array keys

```php
$go = 'go'
$programmingLanguage [$go] = '1.26.5'; 
```

### associative arrays indexing and keys

- you can access them by there keys after that like `$programmingLanguage['php']` or `$programmingLanguage['python']`

```php
$programmingLanguage = [
    'php' => 8.2,
    'python' => 3.14,
    'C++' => 'C26',
    'java' => 26,
    ];
```

> if you have muliple keys with the ***same name*** the last key's value will overwrite the rest of the keys for example
>
> ```php
> $array_me = [
>     true=> 1,
>     1 => 2,
>     '1'=> 3,
>     1.8=> 4,
> ];
> print_r($array_me); // OUTPUT: sonArray ( [1] => 4 )
> ```
>

- you can assigned specific keys to an array and the default indexing which is from 0 to n (where n is the size) will not be affected at all

    ```php
    $array_me = [1,2,'hamad'=> 3, 4,];
    ```

    > printing it will give as the following
    >
    > ```t
    > Array
    > (
    >     [0] => 1
    >     [1] => 2
    >     [hamad] => 3
    >     [2] => 4
    > )
    > ```
    >
    > notice how the default indexing will not change even after adding a key in the middle

- making a numric key in for specific element will cause the default indexing to leap to the largest numric index or key and increment it for the rest of the element without changing the default size

    ```php
    $array_me = [1, 2, 100=> 3,   4];
    ```

    > printing it will give as the following
    >
    > ```t
    >   (
    >   [0] => 1
    >   [1] => 2
    >   [100] => 3
    >   [101] => 4
    >   )
    > ```
    >
    > notice how we jumped from 1 to 100 after setting it as a key for number 3
    >

### associative arrays mutation and indexing

- in order to add element to the accociative arrays follow the same normal array one element addition and specify the element

```php
$programmingLanguage ['go'] = '1.26.5'; 
```

## multi-dimentional arrays

- not only the arrays can hold type but can also hold entire arrays known as multi-dimentional and it's applicable for both normal and associative arrays

```php
$company = [
    "HR" => [
        "manager" => "Alice Smith",
        "budget" => 50000,
        "location" => "Floor 2",
        "family" => ['wife','son','daughter','baby']
    ],
    "IT" => [
        "manager" => "Bob Jones",
        "budget" => 120000,
        "location" => "Floor 4",
        "family" => ['wife','son','daughter','baby']
    ],
    "Marketing" => [
        "manager" => "Charlie Brown",
        "budget" => 75000,
        "location" => "Floor 1",
        "family" => ['wife','son','daughter','baby']
    ]
];
```

- in oder to access a multi-dimentional arrays chaing the keys or the index till reaching to the target

```php
// in order to access the son in $company we will do the following
$company['HR']['family'][1]
```
