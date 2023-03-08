<?php

# Data Types
$text = "Hello, World!";

$wholeNumber = 100;

$decimalNumber = 99.99;

$boolean = true;

$null = null;

# String Joining / Concatenation
$firstName = "Roland Emmanuel";

$lastName = "Salunga";

$fullName = $firstName . " " . $lastName;

// $firstName .= $lastName;

# Variable naming
$fullname = "Salunga Roland Emmanuel";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $text; ?></title>
</head>

<body>

    <p>
        My first name is <?php echo $firstName; ?>
    </p>

    <p>
        My last name is <?php echo $lastName; ?>
    </p>

    <p>
        My full name is <?php echo $fullName; ?>
    </p>

    <p>
        This is a whole number <?php echo $wholeNumber; ?>. While this is a float <?php echo $decimalNumber; ?>.
    </p>

    <p>
        Booleans are only <?php echo $boolean; ?> or 0, true or false.
    </p>

    <p>
        <?php echo $null; ?> is non-existent.
    </p>

</body>

</html>
