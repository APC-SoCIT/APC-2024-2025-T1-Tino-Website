<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
</head>
<body>

<form id="appointment-form">
  <!-- Appointment Type -->
  <label for="appointment_type">Appointment Type</label>
  <select id="appointment_type" name="appointment_type" required>
    <option value="">Select Appointment Type</option>
    <option value="First Meeting">First Meeting</option>
    <option value="Fitting">Fitting</option>
    <option value="Consultation">Consultation</option>
    <option value="Pick-up">Pick-up</option>
    <option value="Atelier Visit">Atelier Visit</option>
  </select>

  <!-- Date -->
  <label for="date">Date</label>
  <input type="date" id="date" name="date" required>

  <!-- Time -->
  <label for="time">Time</label>
  <select id="time" name="time" required>
    <option value="">Select a time</option>
    <!-- Time slots will be populated here -->
  </select>

  <!-- First Name -->
  <label for="first_name">First Name</label>
  <input type="text" id="first_name" name="first_name" required>

  <!-- Last Name -->
  <label for="last_name">Last Name</label>
  <input type="text" id="last_name" name="last_name" required>

  <!-- Country -->
  <label for="country">Country</label>
  <select id="country" name="country" required>
      <option value="">Select a country</option>
  </select>

  <!-- Phone -->
  <label for="phone">Phone</label>
  <input type="tel" id="phone" name="phone" required>

  <!-- Email -->
  <label for="email">Email</label>
  <input type="email" id="email" name="email" required>

  <!-- Preferred Channel -->
  <label for="preferred_channel">Preferred Channel</label>
  <select id="preferred_channel" name="preferred_channel" required>
    <option value="WhatsApp">WhatsApp</option>
    <option value="Viber">Viber</option>
  </select>

  <!-- Category -->
  <label for="category">Category</label>
  <select id="category" name="category" required>
    <option value="">Select Category</option>
    <option value="Suits">Suits</option>
    <option value="Jackets">Jackets</option>
    <option value="Shoes">Shoes</option>
    <option value="Other">Other</option>
  </select>

  <!-- Number of People -->
  <label for="number_of_people">Number of People</label>
  <input type="number" id="number_of_people" name="number_of_people" min="1" required>

  <!-- Additional Info -->
  <label for="additional_info">Additional Info</label>
  <textarea id="additional_info" name="additional_info"></textarea>

  <!-- Submit Button -->
  <button type="submit">Book Appointment</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Disable past dates
        const dateInput = document.getElementById('date');
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);

        // Generate Time Slots
        const timeSelect = document.getElementById('time');
        function generateTimeSlots() {
            const selectedDate = dateInput.value;
            timeSelect.innerHTML = '<option value="">Select a time</option>'; // Reset time options

            if (selectedDate) {
                const timeInterval = 30; // 30 minutes interval
                const startHour = 12; // Start time (12:30 PM)
                const startMinute = 30;
                const endHour = 17; // End time (5:00 PM)

                for (let hour = startHour; hour <= endHour; hour++) {
                    for (let minute = 0; minute < 60; minute += timeInterval) {
                        if (hour === startHour && minute < startMinute) continue;
                        if (hour === endHour && minute > 0) continue; // Exclude times after endHour

                        const timeOption = new Date();
                        timeOption.setHours(hour);
                        timeOption.setMinutes(minute);
                        timeOption.setSeconds(0);

                        const formattedTime = timeOption.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });

                        const option = document.createElement('option');
                        option.value = formattedTime;
                        option.textContent = formattedTime;
                        timeSelect.appendChild(option);
                    }
                }
            }
        }

        dateInput.addEventListener('change', generateTimeSlots);

        // Fetch country data and populate the dropdown
        async function fetchCountries() {
            try {
                const response = await fetch('https://restcountries.com/v3.1/all');
                const countries = await response.json();
                const countryDropdown = document.getElementById('country');

                // Sort countries alphabetically
                countries.sort((a, b) => {
                    return a.name.common.localeCompare(b.name.common);
                });

                countries.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.name.common;  // Country name
                    option.textContent = country.name.common;
                    countryDropdown.appendChild(option);
                });
            } catch (error) {
                console.error('Error fetching country data:', error);
            }
        }

        // Call the function to populate countries when the page loads
        fetchCountries();
    });
</script>

</body>
</html>
