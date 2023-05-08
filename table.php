<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
HELLO PHP




<table id="table">
    <tr>
        <th>Names</th>
        <th>E-mails</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>
<button onclick="addnew()">add</button>

<script>
    let i =0
    function addnew()
    {
        i++
        var table = document.getElementById("table");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
  cell1.innerHTML = "NEW CELL" ;
  cell2.innerHTML = "NEW CELL" ;}   
</script>
</body>
</html>