<?php

    $my_arr_constructor = array();

    $my_arr_literal = [];

    $my_arr_init_vals = ['a', 1, true, 5.6];

    $mixed_arr = [
        "Matthew Weeks",
        true,
        22,
        30.62
    ];

    array_push($mixed_arr, "I like cats"); //adds a new value in mixed_arr
    $mixed_arr[] = "i like dogs";

    array_unshift($mixed_arr, false);

    array_pop($mixed_arr);//removes the last value
    array_shift($mixed_arr);//removes first value in the array

    array_splice($mixed_arr, 3, 1);//removes a specific item in the array

    $mixed_arr[] = [
        "hello",
        "world"
    ];

    $mixed_arr[3] = "I like hedgehogs";