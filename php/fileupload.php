<?php
if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    if(move_uploaded_file($file_tmp,"imgup/".$file_name)){ 
        echo "Successfully uploaded";
    }
    else{
        echo "could not uploade";
    }
}
?>
<html>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image"/><br><br>
            <input type="submit"/>
        </form>
        
</body>
</html>