<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Appointment is Pending</title>
</head>
<body>
    <h1>Appointment Pending</h1>
    <p>Dear {{ $booking->first_name }} {{ $booking->last_name }},</p>
    <p>Your appointment is currently pending. It will be confirmed shortly by our team.</p>
    <p><strong>Appointment Type:</strong> {{ $booking->appointment_type }}</p>
    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($booking->date)->format('F d, Y') }}</p>
    <p><strong>Time:</strong> {{ $booking->time }}</p>
    <p><strong>Additional Information:</strong> {{ $booking->additional_info }}</p>
    <p>We will notify you once your appointment is confirmed.</p>
</body>
</html>
