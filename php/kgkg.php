<body bgcolor="skyblue">
    <h1 style="background-color:red;color:white;text-align:center;">UPLOADING IMAGES</h1>
    <form action="upload1.php" method="post" enctype="multipart/form-data">
        <h2 style="background-color:olive;color:white;">Select image to upload:</h2>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        <input type="Reset" value="Retry" name="Reset">
    </form>

</body>

</html>

<!-- enctype='multipart/form-data is an encoding type that allows files to be sent through a POST. Quite simply, without this encoding the files cannot be sent through POST. If you want to allow a user to upload a file via a form, you must use this enctype -->