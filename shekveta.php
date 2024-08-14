<?php
include "mysql.php";
$id = $_GET['shekvetis_id'];
$sql = "SELECT * FROM shekveta WHERE id = $id";
$result = $conn->query($sql);
?>
<a href="real-index.php"><button>BACK</button></a>
<center>
<?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $misamarti = $row['misamarti'];
                    $misamarti2 =$row['misamarti2'];
            ?>
<iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=<?php echo $misamarti?>%2C<?php echo $misamarti?>&amp;layer=mapnik&amp;marker=<?php echo $misamarti2;?>" style="border: 1px solid black"></iframe>
<?php }}?>
</center>
<body style="background: rgb(0,0,41);">