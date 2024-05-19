<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Define recipient email
//     $to = 'm.aitisamyaseen@gmail.com';

//     // Define email subject
//     $subject = 'New Hire Check List Submission';

//     // Build email message
//     $message = '<html><body>';
//     $message .= '<table border="1" cellpadding="10">';
//     foreach ($_POST as $key => $value) {
//         // Replace empty values with "--" (dash)
//         $value = empty($value) ? '--' : $value;
//         if (is_array($value)) {
//             $value = implode(", ", $value);
//         }
//         $message .= "<tr><td><strong>" . htmlspecialchars($key) . ":</strong></td><td>" . htmlspecialchars($value) . "</td></tr>";
//     }
//     $message .= '</table>';
//     $message .= '</body></html>';

//     // Set email headers
//     $headers = "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//     $headers .= 'From: <noreply@example.com>' . "\r\n";

//     // Attempt to send email
//     $success = mail($to, $subject, $message, $headers);

//     // Prepare response data
//     if ($success) {
//         // Email sent successfully, redirect back to index.html with success message
//         header('Location: index.html?success=true');
//         exit();
//     } else {
//         // Error sending email, redirect back to index.html with error message
//         header('Location: index.html?error=true');
//         exit();
//     }
// } else {
//     // Invalid request method, redirect back to index.html with error message
//     header('Location: index.html?error=true');
//     exit();
// }
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeName = htmlspecialchars($_POST['employeeName']);
    $startDate = htmlspecialchars($_POST['startDate']);
    $language = htmlspecialchars($_POST['language']);
    $languageOther = htmlspecialchars($_POST['languageOther']);
    $directReport = htmlspecialchars($_POST['directReport']);
    $email = htmlspecialchars($_POST['email']);
    $collaredShirtSize = htmlspecialchars($_POST['collaredShirtSize']);
    $tShirtSize = htmlspecialchars($_POST['tShirtSize']);
    $license = htmlspecialchars($_POST['license']);
    $licenseType = htmlspecialchars($_POST['licenseType']);
    $licenseNumber = htmlspecialchars($_POST['licenseNumber']);
    $expirationDate = htmlspecialchars($_POST['expirationDate']);
    $device = !empty($_POST['device']) ? $_POST['device'] : [];
    $deviceOther = htmlspecialchars($_POST['deviceOther']);
    $software = !empty($_POST['software']) ? $_POST['software'] : [];
    $softwareOther = htmlspecialchars($_POST['softwareOther']);
    $workstation = htmlspecialchars($_POST['workstation']);
    $similarEmployee = htmlspecialchars($_POST['similarEmployee']);
    $userType = htmlspecialchars($_POST['userType']);
    $personalEmail = htmlspecialchars($_POST['personalEmail']);
    $cellPhone = htmlspecialchars($_POST['cellPhone']);
    $emergencyName = htmlspecialchars($_POST['emergencyName']);
    $emergencyMobile = htmlspecialchars($_POST['emergencyMobile']);
    $emergencyRelation = htmlspecialchars($_POST['emergencyRelation']);
    $phoneQueues = !empty($_POST['phoneQueues']) ? $_POST['phoneQueues'] : [];
    $websites = !empty($_POST['websites']) ? $_POST['websites'] : [];
    $fleetCard = htmlspecialchars($_POST['fleetCard']);
    $vehicleRequired = htmlspecialchars($_POST['vehicleRequired']);
    $vehicleLease = htmlspecialchars($_POST['vehicleLease']);
    $tollTag = htmlspecialchars($_POST['tollTag']);
    $facilityKeys = htmlspecialchars($_POST['facilityKeys']);
    $facilityType = htmlspecialchars($_POST['facilityType']);
    $alarmAccess = htmlspecialchars($_POST['alarmAccess']);
    $pin = htmlspecialchars($_POST['pin']);
    $companyCreditCard = htmlspecialchars($_POST['companyCreditCard']);
    $specialRequests = htmlspecialchars($_POST['specialRequests']);

    $to = "recipient@example.com"; // Replace with actual recipient email
    $subject = "New Hire Form Submission";

    $message = "<html><body>";
    $message .= "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    $message .= "<tr><th>Field</th><th>Value</th></tr>";
    $message .= "<tr><td>Employee Name</td><td>{$employeeName}</td></tr>";
    $message .= "<tr><td>Start Date</td><td>{$startDate}</td></tr>";
    $message .= "<tr><td>Language</td><td>{$language}</td></tr>";
    $message .= "<tr><td>Other Language</td><td>{$languageOther}</td></tr>";
    $message .= "<tr><td>Direct Report</td><td>{$directReport}</td></tr>";
    $message .= "<tr><td>Email</td><td>{$email}</td></tr>";
    $message .= "<tr><td>Collared Shirt Size</td><td>{$collaredShirtSize}</td></tr>";
    $message .= "<tr><td>T-Shirt Size</td><td>{$tShirtSize}</td></tr>";
    $message .= "<tr><td>License</td><td>{$license}</td></tr>";
    $message .= "<tr><td>License Type</td><td>{$licenseType}</td></tr>";
    $message .= "<tr><td>License Number</td><td>{$licenseNumber}</td></tr>";
    $message .= "<tr><td>Expiration Date</td><td>{$expirationDate}</td></tr>";

    $message .= "<tr><td>Devices</td><td>" . implode(", ", $device) . "</td></tr>";
    $message .= "<tr><td>Other Device</td><td>{$deviceOther}</td></tr>";
    $message .= "<tr><td>Software</td><td>" . implode(", ", $software) . "</td></tr>";
    $message .= "<tr><td>Other Software</td><td>{$softwareOther}</td></tr>";
    $message .= "<tr><td>Workstation</td><td>{$workstation}</td></tr>";
    $message .= "<tr><td>Similar Employee</td><td>{$similarEmployee}</td></tr>";
    $message .= "<tr><td>User Type</td><td>{$userType}</td></tr>";
    $message .= "<tr><td>Personal Email</td><td>{$personalEmail}</td></tr>";
    $message .= "<tr><td>Cell Phone</td><td>{$cellPhone}</td></tr>";
    $message .= "<tr><td>Emergency Contact Name</td><td>{$emergencyName}</td></tr>";
    $message .= "<tr><td>Emergency Contact Mobile</td><td>{$emergencyMobile}</td></tr>";
    $message .= "<tr><td>Emergency Contact Relation</td><td>{$emergencyRelation}</td></tr>";

    $message .= "<tr><td>Phone Queues</td><td>" . implode(", ", $phoneQueues) . "</td></tr>";
    $message .= "<tr><td>Websites</td><td>" . implode(", ", $websites) . "</td></tr>";
    $message .= "<tr><td>Fleet Card Needed</td><td>{$fleetCard}</td></tr>";
    $message .= "<tr><td>Vehicle Required</td><td>{$vehicleRequired}</td></tr>";
    $message .= "<tr><td>Vehicle Lease</td><td>{$vehicleLease}</td></tr>";
    $message .= "<tr><td>Toll Tag</td><td>{$tollTag}</td></tr>";
    $message .= "<tr><td>Facility Keys</td><td>{$facilityKeys}</td></tr>";
    $message .= "<tr><td>Facility Type</td><td>{$facilityType}</td></tr>";
    $message .= "<tr><td>Alarm Access</td><td>{$alarmAccess}</td></tr>";
    $message .= "<tr><td>Pin</td><td>{$pin}</td></tr>";
    $message .= "<tr><td>Company Credit Card</td><td>{$companyCreditCard}</td></tr>";
    $message .= "<tr><td>Special Requests</td><td>{$specialRequests}</td></tr>";

    $message .= "</table>";
    $message .= "</body></html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@example.com" . "\r\n"; // Replace with actual sender email

    // Attempt to send email
    $success = mail($to, $subject, $message, $headers);

    // Prepare response data
    if ($success) {
        // Email sent successfully, redirect back to index.html with success message
        header('Location: index.html?success=true');
        exit();
    } else {
        // Error sending email, redirect back to index.html with error message
        header('Location: index.html?error=true');
        exit();
    }
} else {
    // Invalid request method, redirect back to index.html with error message
    header('Location: index.html?error=true');
    exit();
}
?>

