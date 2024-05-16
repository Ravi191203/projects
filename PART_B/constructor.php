<?php
class Student
{
    public $name;
    public $age;
    public $gender;
    public $class;
    public $address;
    // Constructor
    public function __construct($name, $age, $gender, $class, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->class = $class;
        $this->address = $address;
        echo "<p>Student information created:</p>";
        echo "<ul>";
        echo "<li>Name: $this->name</li>";
        echo "<li>Age: $this->age</li>";
        echo "<li>Gender: $this->gender</li>";
        echo "<li>Class: $this->class</li>";
        echo "<li>Address: $this->address</li>";
        echo "</ul>";
    }
    // Destructor
    public function __destruct()
    {
        // Destroying address information
        unset($this->address);
    }
}
// Creating student objects
$student1 = new Student("Kiran Raj", 26, "Male", "BTech", "456 2nd cross vijayanagara Mysore");
// Remaining objects still exist
echo "<p>Address information destroyed.</p>";
echo "<p>Remaining Student Objects:</p>";
echo "<ul>";
echo "<li>Name: $student1->name</li>";
echo "<li>Age: $student1->age</li>";
echo "<li>Gender: $student1->gender</li>";
echo "<li>Class: $student1->class</li>";
echo "<li>Address: $student1->address</li>";
echo "</ul>";
