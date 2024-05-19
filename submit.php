<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'm.aitisamyaseen@gmail.com';
    $subject = 'New Hire Check List Submission';

    $message = '<html><body>';
    $message .= '<table border="1" cellpadding="10">';
    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            $value = implode(", ", $value);
        }
        $message .= "<tr><td><strong>" . htmlspecialchars($key) . ":</strong></td><td>" . htmlspecialchars($value) . "</td></tr>";
    }
    $message .= '</table>';
    $message .= '</body></html>';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <noreply@example.com>' . "\r\n";  

    $success = mail($to, $subject, $message, $headers, "-f your_email@example.com -v");
    if ($success) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error sending email.';
    }
} else {
    echo 'Invalid request method.';
}
?>
