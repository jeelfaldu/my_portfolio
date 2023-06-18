<?php
if (isset($_POST)) {
  $sql = "INSERT INTO contact VALUES $_POST";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>
<!-- <script> wi</script> -->