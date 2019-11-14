<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<!-- form setup -->
<form action="site.php" method = "get">

<!-- user inputs -->
Color: <input type="text" name="color"><br><br>
Plural Noun: <input type="text" name="pluralNoun"><br><br>
Celebrity: <input type="text" name="celebrity"><br><br>

<input type="submit">
<br>
</form>

 <?php 


// variables for storing user input

$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];

// printing results on screen
 
echo " <br> Roses are $color <br>";
 echo "<br> $pluralNoun are blue <br>";
 echo "<br> I love $celebrity <br>";
 
 ?>


</body>
</html>
