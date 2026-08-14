<?php

// Numeric Array - Monday to Saturday
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

echo "<h3>Numeric Array</h3>";

foreach ($days as $day) {
    echo $day . "<br>";
}


// Associative Array - Months and Number of Days
$months = [
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
];

echo "<h3>Associative Array</h3>";

foreach ($months as $month => $daysInMonth) {
    echo $month . " => " . $daysInMonth . "<br>";
}


// Multidimensional Array - Laptop Details
$laptops = [
    [
        "company" => "Dell",
        "model" => "Inspiron 15",
        "price" => 55000
    ],
    [
        "company" => "HP",
        "model" => "Pavilion 15",
        "price" => 60000
    ]
];

echo "<h3>Multidimensional Array</h3>";

foreach ($laptops as $laptop) {
    echo "Company: " . $laptop["company"] . "<br>";
    echo "Model: " . $laptop["model"] . "<br>";
    echo "Price: ₹" . $laptop["price"] . "<br><br>";
}

?>