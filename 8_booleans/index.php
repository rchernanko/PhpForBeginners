<?php

// A simple associative array
$task = [
    'title' => 'finish homework',
    'due' => 'today', //later on we can make this more specific by using DateTime
    'assignedTo' => 'richard',
    'completed' => false
];

/*
 * IMPORTANT = "TRUTHY" VALUES
 *
 * Let's say $completed is a variable + that we have assigned it the value 'no' (instead of using boolean values)
 *
 * IF were to try to equate (as per the below), the result would still be true.
 * A populated string equates to a truthy value (regardless of what it's actual value is)
 *
 *     if($completed)...
 *
 */


//Ok now let's loop through the keys/values and print out:

foreach ($task as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

//For just the values:

foreach ($task as $value) {
    echo $value . '<br>';
}

//Interesting thing = if I simply echo a true / false value, nothing will appear on the screen.
//Instead we have to evaluate whether the variable is truthy or not. One of the ways to do this is to use a ternary operator:

echo $task['completed'] ? 'Completed' : 'Not completed';

//If completed => true, echo 'Completed', else echo 'Not completed'