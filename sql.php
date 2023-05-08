
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>




</head>
<body>


<?php $sname = $_POST["sname"]; ?>
<?php $url = $_POST["url"]; ?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "table1";

$conn = mysqli_connect($servername , $username , $password , $database);

if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
else{
    echo "Successfully connected <br>";
}

$sql_str = "INSERT INTO `notes url` (`Sr. No.`, `Subject`, `url`) VALUES (NULL, '$sname', '$url')";

$newdb = mysqli_query($conn , $sql_str);

if($newdb){
    echo "New database created";
}
else{
    echo "Cant create because " . mysqli_error($conn);
}
?>









<table id="table">
    <tr>
        <th>Subject</th]>
        <th>URL</th>
    </tr>
</table>


<script>
    let i =0
    window.onload = addnew()
    function addnew()
    {
    var table = document.getElementById("table");
    var row x= table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
  cell1.innerHTML = "<?php echo $_POST["sname"]; ?>" ;
  cell2.innerHTML = "<?php echo $_POST["url"]; ?>" ;}   
</script>
</body>
</html>