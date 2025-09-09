<?php 

    #variable
    $name = "Jay";
    $age = 60;

    #sequential structure
    echo "Hello $name! <br/>";
    echo "$name how are you? <br/>";
    echo "You are $age years old, that's good <br/>";

    #conditional structure
    if ($age >= 60)  
    {
        echo "You must be a senior citizen!";
    }
    else 
    {
        echo "You must be not a senior customer";
    }

    #repetition structure
    for ($age = 0; $age <= 100; $age++)
    {
        echo $age . "<br />";
    }

?>