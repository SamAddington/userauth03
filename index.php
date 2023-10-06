<?php
// Get the visitor's IP address
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// List of allowed IP addresses
$allowed_ips = ['192.168.1.117', '192.168.1.224'];

// Check if the visitor's IP is allowed
if (in_array($visitor_ip, $allowed_ips)) {
    $message = "Welcome! You can access the website.";
} else {
    $message = "Sorry, you cannot access the website.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Address Check</title>
</head>
<body>
    <h1>IP Address Check</h1>
    <p><?php echo $message; ?></p>
</body>
</html>
