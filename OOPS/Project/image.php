<html>
<html>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html>


குகன் கணேசன், [31.10.17 12:13]
Image Download from Database

குகன் கணேசன், [31.10.17 12:13]
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'guhan';
    /*
    $conn = mysqli_connect($host, $user, $pass, $db);

    $query = mysqli_query($conn, "SELECT image FROM images WHERE id = 2");
    
    if(mysqli_num_rows($query) > 0)
  
        $row = mysqli_fetch_assoc($query);
        header("Content-type: image/jpg"); 
        echo $row['image'];
    */
    $conn = mysqli_connect($host, $user, $pass, $db);
    $res=mysqli_query($conn,"SELECT image FROM profile WHERE id = 7");
    echo "<table>";
    echo "<tr>";
    while($row=mysqli_fetch_array($res))
    {
    echo "<td>"; 
    echo '<img src="data:image;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>';
    echo "<br>"; 
      echo "</td>";
    } 
    echo "</tr>";
    echo "</table>";
    
?>