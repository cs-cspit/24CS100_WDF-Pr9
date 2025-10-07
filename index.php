<?php
$students = ["Rahul", "Priya", "Amit"];

echo "<h3>List of Students:</h3>";
foreach ($students as $name) {
    echo $name . "<br>";
}

$grades = [
    "Rahul" => "A",
    "Priya" => "B",
    "Amit"  => "C"
];

echo "<h3>Students with Grades:</h3>";
foreach ($grades as $student => $grade) {
    echo "$student : $grade <br>";
}

$grades["Samir"] = "A+";

echo "<h3>Grade of Samir:</h3>";
echo "Samir : " . $grades["Samir"];
?>
