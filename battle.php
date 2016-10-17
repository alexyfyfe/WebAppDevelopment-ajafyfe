<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>SuperHero Form</title>
</head>
<body>
<form action="insertbattle.php" method="post">
    <p>Select a superhero that faught in battle</p><select name=""superhero">
    <?
    include ("DBCONNECT.php");
    $sql_query = "SELECT * FROM superheros";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array()){
        $firstname = $row['firstName'];
        $lastName = $row['lastName'];
        $superheroID = $row['superheroID'];
        echo "<option value='{$superheroID}'>{$firstname} {$lastName}</option>";
    }
    ?>
    </select><br>
    <p><label>Villan: </label><input type="text" name="villan"></p>
    <p><input type="submit" value="Submit"></p>
</form>
</body>
</html>