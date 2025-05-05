php
<?php
// Include database configuration
include '../../config/db.php';

// Fetch affiliate links, descriptions, and image paths from the database
$sql = "SELECT link, description, image FROM affiliate_links";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='affiliate-link'>";
        // Display the image if available
        if (!empty($row["image"])) echo "<img src='assets/images/affiliate/" . $row["image"] . "' alt='Affiliate Image' style='max-width: 200px; height: auto;'>";
        echo "<a href='" . $row["link"] . "' target='_blank'>Affiliate Link</a>";
        echo "<p>" . $row["description"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No affiliate links found.";
}

// Close database connection
$conn->close();
?>