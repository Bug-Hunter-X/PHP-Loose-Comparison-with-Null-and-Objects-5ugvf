# PHP Loose Comparison with Null and Objects

This repository demonstrates a subtle bug in PHP related to loose comparison (`==`) when dealing with null values and objects.

The `bug.php` file shows how a function intended to handle null values incorrectly returns 0 instead of the expected string when the input is an object with a null property. This is because the loose comparison (`==`) considers null and 0 to be equal.

The `bugSolution.php` file demonstrates the corrected behavior using strict comparison (`===`), which correctly identifies the null value and returns the intended string. 

This bug highlights the importance of using strict comparison whenever dealing with null values to avoid unexpected behavior. 