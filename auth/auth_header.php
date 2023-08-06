<?php

$scriptFilename = explode('/', $_SERVER['SCRIPT_FILENAME']);
$currentpath = $scriptFilename[count($scriptFilename) - 1];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Tailwind import -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />

        <!-- Google Font import "Poppins" -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;800&display=swap"
            rel="stylesheet">

        <!-- CSS Import -->
        <link rel="stylesheet" type="text/css" href="../style/index.css">


        <title><?php echo $currentpath == "login.php" ? "Login" : "Register"; ?> | HITK Library</title>
    </head>