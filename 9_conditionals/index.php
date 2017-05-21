<?php

// A simple associative array
$task = [
    'title' => 'finish homework',
    'due' => 'today', //later on we can make this more specific by using DateTime
    'assignedTo' => 'richard',
    'completed' => false
];

if ($task['completed']) { //if this evaluates to a truthy value...
    echo 'truthy value';
} else {
    echo 'not a truthy value';
}

//Of course, you can use a ternary operator too...

echo $task['completed'] ? 'Completed' : 'Not completed';