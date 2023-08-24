<?php
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$year = $_POST['year'];
$college = $_POST['college'];
$useMobile = $_POST['useMobile'];
$opinion = $_POST['opinion'];
$opinionReason = $_POST['opinionReason'];
$mobileUsage = isset($_POST['mobileUsage']) ? $_POST['mobileUsage'] : array();
$mobileUsageOther = isset($_POST['mobileUsageOther']) ? $_POST['mobileUsageOther'] : "";
$concerns = isset($_POST['concerns']) ? $_POST['concerns'] : array();
$concernsOther = isset($_POST['concernsOther']) ? $_POST['concernsOther'] : "";
$alternativeSolutions = $_POST['alternativeSolutions'];
$additionalComments = $_POST['additionalComments'];
$finalThoughts = $_POST['finalThoughts'];

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'survey');
if ($conn->connect_error) {
  die("Connection Failed : " . $conn->connect_error);
} else {
  $mobileUsageString = !empty($mobileUsage) ? implode(", ", $mobileUsage) : "";
$concernsString = !empty($concerns) ? implode(", ", $concerns) : "";


  $stmt = $conn->prepare("INSERT INTO mobilesurvey (name, email, gender, department, year, college, useMobile, opinion, opinionReason, mobileUsage, mobileUsageOther, concerns, concernsOther, alternativeSolutions, additionalComments, finalThoughts) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssssssssssss", $name, $email, $gender, $department, $year, $college, $useMobile, $opinion, $opinionReason, $mobileUsageString, $mobileUsageOther,  $concernsString, $concernsOther, $alternativeSolutions, $additionalComments, $finalThoughts);
  
  
  if ($stmt->execute()) { 
    echo '<div class="centered-container"><img src="https://www.freepnglogos.com/uploads/thank-you-png/thank-you-png-maid-the-spot-inc-pittsburgh-24.png" alt="Success Image" class="responsive-image"></div>';
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>
