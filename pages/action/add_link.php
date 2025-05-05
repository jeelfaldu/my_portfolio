php
<?php
include_once '../../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $link = htmlspecialchars($_POST['link']);
    $description = htmlspecialchars($_POST['description']);

    $target_dir = "../../assets/images/affiliate/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $imagePath = "assets/images/affiliate/" . basename($_FILES["image"]["name"]);

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO affiliate_links (link, description, image) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $link, $description, $imagePath);
            $stmt->execute();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
