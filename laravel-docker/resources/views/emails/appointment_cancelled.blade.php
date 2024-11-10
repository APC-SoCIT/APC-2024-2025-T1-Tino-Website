<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Cancelled</title>
</head>
<body>
    <h1>Appointment Cancelled</h1>
    <p>Dear {{ $booking->first_name }} {{ $booking->last_name }},</p>
    <p>We regret to inform you that your appointment has been cancelled. Below are the details:</p>
    <p><strong>Appointment Type:</strong> {{ $booking->appointment_type }}</p>
    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($booking->date)->format('F d, Y') }}</p>
    <p><strong>Time:</strong> {{ $booking->time }}</p>
    <p><strong>Additional Information:</strong> {{ $booking->additional_info }}</p>
    <p>If you need to reschedule, please feel free to contact us.</p>
</body>
</html>
