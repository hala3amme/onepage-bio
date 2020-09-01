<?php 
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = 'muayadq@gmail.com';
$subject = '[Portfolio] Contact Email ( ' . $_POST['email'] . ')';
$message = $_POST['message'];
$headers = 'From:' . sanitize_my_email($_POST['email']);
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($_POST['email']);
if ($secure_check == false) {
} else { //send email 
    mail($to_email, $subject, $message, $headers);
}
?>