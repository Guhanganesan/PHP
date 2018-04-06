<?php

        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db   = 'guhan';
        
    /* SQl: query:
                    CREATE TABLE profile (
            id int(11) NOT NULL AUTO_INCREMENT,
            image longblob NOT NULL,
             PRIMARY KEY (id)
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
    
    */
       
        $conn = mysqli_connect($host, $user, $pass, $db);
            
        $insert = mysqli_query($conn, "INSERT into profile (image) VALUES ('$imgContent')");
        if($insert)
        {
            //echo "File uploaded successfully.";
			 header("Location:s2.php");
        }
       else
        {
            echo "File upload failed, please try again.";
        } 
?>

