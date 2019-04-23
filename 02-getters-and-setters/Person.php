<?php

// Creating a Person class
class Person {

    // The name property
    public $name;
    // The age property
    public $age;

    // Constructor method to set the supplied name to the $name variable
    public function __construct($name)
    {
        // '$this' is the value supplied to Person upon creation below (at line 35)
        $this->name = $name;
    }

    // Now we have our getter function to get the age of a Person
    public function getAge()
    {
        // All this function does is return the age in days (age * 365)
        // shh about leap years :P 
        return $this->age * 365;
    }

    // What if we want to set the age?
    // + What if we are only allowed to set their age if they are over 18?
    public function setAge($age)
    {   
        // Simple if statement to check if the supplied $age is over 18
        if ($age < 18)
        {
            // If not over 18 an exception is thrown
            throw new Exception("Person is not old enough.");
        }
        // If the supplied age passes our validation above, age is set
        $this->age = $age;
    }

}


// Creating a new Person called John
$john = new Person('John Doe');

// We could access the age property directly i.e.
$john->age = 15;
// But This wouldn't allow us use the 'age check' we implemented with the setter

// The proper way to set the age would be:
$john->setAge(30);

// This throws an error since the supplied age is less than 18
// $john->setAge(15);

// Johns age should be 10950 days
var_dump($john->getAge());