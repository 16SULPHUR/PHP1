<html>

<body>

    <form action="form.php" method="post">
        <input class="form-control" id="intime" name="intime" type="time" value="10:00">
        <input class="form-control" id="outtime" name="outtime" type="time" value="20:00">
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
      $in = $_POST["intime"];
      $out = $_POST["outtime"];

      $indatetime = DateTime::createFromFormat('H:i' , $in);
      $outdatetime = DateTime::createFromFormat('H:i' , $out);

      $interval = $indatetime->diff($outdatetime);

      $hours = $interval->h;

      if($interval->i >= 30){
        $hours += 1;
      }

      echo $hours;

    }
    ?>
</body>

</html>