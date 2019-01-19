<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hobi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body {
        font-family: arial;
    }
    table{
        background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
        margin:50px;
        border-color:red;
    }
    th {
        background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
        padding-left: 10px;
        padding-right: 50px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    table tr td {
        padding-left: 10px;
        padding-right: 50px;
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #ccffdd;
    }
</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rekrutarka";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
$query = mysqli_query($connection,"SELECT hobbies.person_id, persons.name, hobbies.person_hobbies FROM persons 
INNER JOIN hobbies ON persons.id = hobbies.person_id ORDER BY persons.name;");
?>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Hobi</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
        
            <td><?php echo $data["person_id"];?></td>
            <td><?php echo $data["name"];?></td>
            <td><?php echo $data["person_hobbies"];?></td>
        </tr>
        <?php }}
        ?>
    </table>

</body>
</html>