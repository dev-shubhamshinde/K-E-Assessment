<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USER', 'shubhamshinde9530@gmail.com');
define('SMTP_PASS', 'yirf xkuh eqbo bjam'); // Use an "App Password" from Google, not your main password
define('SMTP_PORT', 465); // For SSL
define('SMTP_SECURE', PHPMailer::ENCRYPTION_SMTPS); // Use 'ssl' (SMTPS)
define('ADMIN_EMAIL', 'your-admin-email@yourdomain.com'); // The email address that RECEIVES the enquiry
define('FROM_EMAIL', 'no-reply@yourdomain.com'); // A "no-reply" address on your domain
define('FROM_NAME', 'Karma Experience'); // The "From" name on the email


/**
 * Helper function to send a JSON response and exit.
 *
 * @param string $status  "success" or "failed"
 * @param string $message The message to send
 */
function send_json_response($status, $message)
{
    header('Content-Type: application/json');
    echo json_encode(['status' => $status, 'response' => $message]);
    exit;
}

// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1. --- VALIDATE AND SANITIZE INPUTS ---

    // Helper function to safely get and sanitize POST data
    function get_post_data($field)
    {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            return null;
        }
        // Sanitize for HTML output (prevents XSS)
        return htmlspecialchars(trim($_POST[$field]), ENT_QUOTES, 'UTF-8');
    }

    // Get all form fields
    $first_name     = get_post_data('firstName');
    $last_name      = get_post_data('lastName');
    $email          = get_post_data('emailAddress');
    $phone          = get_post_data('phoneNumber');
    $dob            = get_post_data('dateOfBirth');
    $marital_status = get_post_data('maritalStatus');
    $passport       = get_post_data('passport');
    $package_option = get_post_data('packageOptions');
    $message        = get_post_data('message');

    // Handle checkboxes (This requires you to fix your HTML, see notes below)
    $consent_contact = isset($_POST['consentContact']) ? 'Yes' : 'No';
    $consent_dnd     = isset($_POST['consentDND']) ? 'Yes' : 'No';


    // 2. --- SERVER-SIDE VALIDATION ---
    // HTML 'required' can be bypassed, so always check on the server.
    $required_fields = [
        'First Name'     => $first_name,
        'Last Name'      => $last_name,
        'Email'          => $email,
        'Phone Number'   => $phone,
        'Date of Birth'  => $dob,
        'Marital Status' => $marital_status,
        'Passport'       => $passport,
        'Package Option' => $package_option,
    ];

    foreach ($required_fields as $field_name => $field_value) {
        if ($field_value === null) {
            send_json_response('failed', "Please fill out the required field: $field_name.");
        }
    }

    // Specifically validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        send_json_response('failed', 'Please provide a valid email address.');
    }


    // 3. --- BUILD THE HTML EMAIL BODY ---
    // Using a table for the best email client compatibility
    $html_body = "
        <style>
            .email-table {
                width: 100%;
                max-width: 600px;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
            }
            .email-table th, .email-table td {
                border: 1px solid #ddd;
                padding: 12px;
                text-align: left;
            }
            .email-table th {
                background-color: #f4f4f4;
                width: 150px;
            }
            .email-table h2 {
                color: #333;
            }
        </style>
        <table class='email-table'>
            <thead>
                <tr>
                    <th colspan='2'><h2>New Cruise Enquiry</h2></th>
                </tr>
            </thead>
            <tbody>
                <tr><th>First Name</th><td>{$first_name}</td></tr>
                <tr><th>Last Name</th><td>{$last_name}</td></tr>
                <tr><th>Email</th><td>{$email}</td></tr>
                <tr><th>Phone Number</th><td>{$phone}</td></tr>
                <tr><th>Date of Birth</th><td>{$dob}</td></tr>
                <tr><th>Marital Status</th><td>{$marital_status}</td></tr>
                <tr><th>Has Passport?</th><td>{$passport}</td></tr>
                <tr><th>Package Option</th><td>{$package_option}</td></tr>
                <tr>
                    <th>Message</th>
                    <td>" . nl2br($message) . "</td>
                </tr>
                <tr><th colspan='2' style='background-color:#f9f9f9;'>Consents</th></tr>
                <tr><th>Consent to Contact</th><td>{$consent_contact}</td></tr>
                <tr><th>DND Subscriber</th><td>{$consent_dnd}</td></tr>
            </tbody>
        </table>
    ";

    // 4. --- BUILD THE PLAIN TEXT BODY (for non-HTML clients) ---
    $text_body = "
        New Cruise Enquiry
        =====================
        First Name:     {$first_name}
        Last Name:      {$last_name}
        Email:          {$email}
        Phone Number:   {$phone}
        Date of Birth:  {$dob}
        Marital Status: {$marital_status}
        Has Passport?:  {$passport}
        Package Option: {$package_option}
        Message:
        {$message}

        Consent to Contact: {$consent_contact}
        DND Subscriber:     {$consent_dnd}
    ";


    // 5. --- SEND THE EMAIL TO THE ADMIN ---
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port       = SMTP_PORT;

        // Enable detailed debug output (for testing only)
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 

        // Recipients
        $mail->setFrom(FROM_EMAIL, FROM_NAME);
        $mail->addAddress($email); // Send to admin
        $mail->addReplyTo($email, "{$first_name} {$last_name}"); // Set reply-to as the user

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Cruise Enquiry: {$first_name} {$last_name} - {$package_option}";
        $mail->Body    = $html_body;
        $mail->AltBody = $text_body;

        $mail->send();

        // 6. --- (Optional) SEND A CONFIRMATION EMAIL TO THE USER ---
        // Clear previous settings
        $mail->clearAllRecipients();
        $mail->clearReplyTos();

        $mail->setFrom(FROM_EMAIL, FROM_NAME);
        $mail->addAddress($email, "{$first_name} {$last_name}"); // Send TO the user

        $mail->Subject = "We've received your enquiry!";
        $mail->Body    = "
            <p>Dear {$first_name},</p>
            <p>Thank you for your enquiry about the '{$package_option}' package. We have received your message and will get back to you shortly.</p>
            <p>Best regards,<br>The Karma Experience Team</p>
        ";
        $mail->AltBody = "Dear {$first_name},\n\nThank you for your enquiry about the '{$package_option}' package. We have received your message and will get back to you shortly.\n\nBest regards,\nThe Karma Experience Team";

        $mail->send();

        // 7. --- SEND SUCCESS RESPONSE ---
        send_json_response('success', 'Email sent successfully! We will be in touch soon.');
    } catch (Exception $e) {
        // --- CATCH ERRORS ---
        // Log the detailed error to the server error log, NOT to the user
        error_log("PHPMailer Error: {$mail->ErrorInfo}");

        // Send a generic error message to the user
        send_json_response('failed', 'Message could not be sent. Please try again later.');
    }
} else {
    // Not a POST request
    send_json_response('failed', 'Invalid request method.');
}
