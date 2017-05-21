<?php

class Task
{
    private $description;
    private $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function completeTask()
    {
        $this->completed = true;
    }
}