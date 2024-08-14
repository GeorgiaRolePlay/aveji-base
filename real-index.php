<?php
include "mysql.php";
$sql = "SELECT * FROM shekveta";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<?php
 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         $id = $row['id'];
         $img = $row['photo'];
         $name = $row['user_name'];
         $names = $row['shekvetis_saxeli'];
?>
        <a href="shekveta.php?shekvetis_id=<?php echo $id;?>"><div class="device">
            <img src="<?php echo $img?>">
            <h2><?php echo $names?></h2>
            <p><?php echo $name?></p>
        </div></a>
    
<?php }}?>
</div>
</body>
<script>
    // Check if the browser supports notifications
if ('Notification' in window) {
    // Request permission from the user
    Notification.requestPermission().then((permission) => {
        if (permission === 'granted') {
            // If permission is granted, you can show a notification
            new Notification('Hello, notifications are enabled!');
        } else if (permission === 'denied') {
            console.log('Notification permission denied');
        } else {
            console.log('Notification permission dismissed');
        }
    });
} else {
    console.log('This browser does not support notifications.');
}

</script>
</html>
