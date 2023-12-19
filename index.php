<?php
// This is your PHP file named run_script.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Start logging
    $logFile = fopen("log.txt", "a");
    $timeStamp = date("Y-m-d H:i:s");
    fwrite($logFile, $timeStamp . " - POST request received\n");

    // Execute the shell script
    $output = shell_exec("main.sh");

    // Log the output of the shell script
    fwrite($logFile, $timeStamp . " - Output: " . $output . "\n");

    // End logging
    fclose($logFile);
}
?>
