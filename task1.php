<?php

$users = [" rAHim@gmail.com ", " kArim@outlook.com ", " sUmi@yahoo.com "];

foreach ($users as $user) {

    // Step 1: Remove extra spaces
    $user = trim($user);

    // Step 2: Split name and domain
    $parts = explode("@", $user);

    $name = $parts[0];
    $domain = $parts[1];

    // Step 3: Format name (Title Case)
    $name = ucfirst(strtolower($name));

    // Step 4: Print output
    echo "Name: $name, Domain: $domain\n";
}

?>