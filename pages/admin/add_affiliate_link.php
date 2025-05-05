php
<?php
include '../../config/db.php';

// Database configuration
$dbHost = "localhost";
$dbUser = "your_db_user";
$dbPass = "your_db_password";
$dbName = "your_db_name";

// Create database connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $link = $_POST["link"];
  $description = $_POST["description"];

  // Handle image upload
  $targetDir = "../../assets/images/affiliate/";
  $targetFile = $targetDir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  $imageName = time() . '_' . basename($_FILES["image"]["name"]);
  $imagePath = "assets/images/affiliate/" . $imageName;
  $targetFile = $targetDir . $imageName;

  // Check if file is an actual image or fake image
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if ($check === false) {
    $errorMessage = "File is not an image.";
    $uploadOk = 0;
  }
  if ($uploadOk && move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    // Prepare and execute SQL query to insert data
    $stmt = $conn->prepare("INSERT INTO affiliate_links (link, description, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $link, $description, $imagePath);
  }else{
    $errorMessage = "Sorry, there was an error uploading your file.";
  }
  
    if ($stmt->execute()) {
        $successMessage = "Affiliate link added successfully!";
    } else {
        $errorMessage = "Error adding affiliate link: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Add Affiliate Link</title>
</head>
<body>
    <h1>Add Amazon Affiliate Link</h1>

    <?php if ($successMessage): ?>
        <p style="color: green;"><?php echo $successMessage; ?></p>
    <?php endif; ?>

    <?php if ($errorMessage): ?>
        <p style="color: red;"><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <div>
            <label for="link">Affiliate Link:</label>
            <input type="text" name="link" id="link" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" accept="image/*" required>
        </div>
        <div>
            <button type="submit">Add Link</button>
        </div>
    </form>
</body>
</html>