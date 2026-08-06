### 2. null <!-- markdownlint-disable-line MD041 -->

- means no value literally or no value
- a variable can be null in one of the 3 states
    1. using the `NULL` constant explicitly and its case insensitive so you can say `Null` or `NUll` but stick with only one case

        ```php
        $variable = NULL;
        ```

    2. undifend variable this will give as a warning since simply put we didn't assign the variable we just said

        ```php
        // $a isn't defined
        var_dump($a);  //Outputs a warning and then NULL
        ```

    3. unseting a variable after defining it and giving it a value like the following

        ```php
        $a = "papa";
        unset($a);
        var_dump($a);
        ```

- to check if a value is `NULL` either
  - use `is_null()` and pass it as a funciton
  - use the identity equality `===` and we will discuss it in the operator seciton

    ```php
    is_null($a);
    echo($a === NULL);
    ```

- casting from a null value to the scalar one will turn the `NULL` value into the correspondent default value
