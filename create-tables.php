<?php
$servername = "localhost";
      $username = "root";
      $password = "";
      $database = "attendee";
      

      $conn = mysqli_connect($servername , $username , $password , $database);

      $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      $i = 4;
      $k = 12;

while($months[$k]){
    while($i!=32){
        $j = $i-1;
        
        // $sql_str = "CREATE TABLE `attendee`.`$months[$i]` (`id` INT NOT NULL AUTO_INCREMENT , `1` INT NOT NULL , `2` INT NOT NULL , `3` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
        $sql_str = "ALTER TABLE `$months[$k]` ADD `$i` INT NOT NULL AFTER `$j`";
        
        $newdb = mysqli_query($conn , $sql_str);
        $i += 1;
        echo "done <br>".$i;
        
    }
    $k += 1;
}
?>