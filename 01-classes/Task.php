<?php

// A class is a blueprint of something, i.e. a Task
class Task {
    // A title and description are properties of a 'Task'
    // Initiating these variables
    public $title;
    public $description;

    public $completed = false;

    // Within a class, a function becomes a 'Method'

    // The __construction method is invoked immediately when
    // creating a new 'Task' object
    public function __construct($title, $description) 
    {
        // $this is a way of referring to this object
        // OR this instance of the task class (same thing). 
        $this->title = $title;
        $this->description = $description;
    }

    // A 'Task' can be completed or uncompleted
    // This method sets the completed status to true
    public function complete()
    {   
        $this->completed = true;
    }

    // This method sets the completed status to false
    public function uncomplete()
    {
        $this->completed = false;
    }
}

// Creating a new Task object called 'task'
// new Task($title, $description)
$task = new Task('Learn OOP', 'Lorem ipsum lallaalala');
// Another Task object called 'task2'
$task2 = new Task('Pick up groceries', 'Something else');

// Setting task's status to complete
$task->complete();
// Printing the 'task' object
var_dump($task);

// Setting task2's status to uncomplete
$task2->complete();
// Printing the 'task2' object
var_dump($task);