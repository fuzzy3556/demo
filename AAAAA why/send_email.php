<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service = $_POST['service'];

    $to = "ethanrobinson175@gmail.com"; // Change this to the owner's email
    $subject = "New Appointment Booking";
    $message = "New appointment booked:\n\nName: $name\nEmail: $email\nPhone: $phone\nDate: $date\nTime: $time\nService: $service";
    $headers = "From: noreply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
