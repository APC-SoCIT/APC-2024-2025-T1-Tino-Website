<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
</head>
<body>
    <h1>Appointment Confirmation</h1>
    <p>Dear {{ $booking->first_name }} {{ $booking->last_name }},</p>

    <p>Your appointment has been confirmed.</p>
    <p><strong>Appointment Type:</strong> {{ $booking->appointment_type }}</p>
    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($booking->date)->format('F d, Y') }}</p>
    <p><strong>Time:</strong> {{ $booking->time }}</p>
    <p><strong>Number of People:</strong> {{ $booking->number_of_people }}</p>
    <p><strong>Additional Information:</strong> {{ $booking->additional_info }}</p>

    <p>Thank you for booking with us!</p>
</body>
</html>
