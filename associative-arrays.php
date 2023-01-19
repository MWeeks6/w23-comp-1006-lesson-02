<?php

    $student_info_keys = [
        'name',
        'age',
        'dob'
    ];

    $students = [
        ['Matthew', 22, '2000-01-30'],
        ['1997-02-01','Gagandeep', 26]
    ];

    $aa_students = [
        [
            "name" => "Matthew Weeks",
            "age" => 22,
            "dob" => "2000-01-30"
        ],
        [
            "name" => "Amrit",
            "age" => 22,
            "dob" => "2001-01-17"
        ]
    ];

    foreach($aa_students as $student)
    {
        echo $student["age"];
    }