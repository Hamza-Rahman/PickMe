<?php
include '../includes/config.php';
$id = $_GET['id'];
$query = "UPDATE hire SET status = 1 WHERE hire_id = '$id'";
$result = $conn->query($query);
if ($result === TRUE) {
    echo "<script type = \"text/javascript\">
					alert(\"Car Successfully Deleted\");
					window.location = (\"index.php\")
				</script>";
}
?>


