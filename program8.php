<!DOCTYPE html>
<html>
<head>
    <title>Image Upload and Display</title>
</head>
<body>
    <h2>Upload an Image</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <h2>Uploaded Image</h2>
    <?php
    // Check if the image file exists and display it
    $imagePath = "uploads/";

    if (isset($_GET['image'])) {
        $imageName = $_GET['image'];
        echo "<img src='$imagePath$imageName' alt='Uploaded Image'>";
    }
    ?>

</body>
</html>
