@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <form action="{{ route('add_booking') }}" method="POST">
    @csrf
        <input type="hidden" name="appointment_type" id="selectedAppointmentType">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="step-number">1</div>
                <div class="step-description">Choose Appointment</div>
            </div>
            <div class="col-md-9">
                <div class="card selectable-appointment" data-type="First Meeting">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">First Meeting</h5>
                            <p class="card-text">For existing clients who have a new order to fit or want to adjust an existing Trifo bespoke.</p>
                        </div>
                    </div>
                </div>
                <div class="card selectable-appointment" data-type="Made-To-Order Fittings">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Made-To-Order Fittings</h5>
                            <p class="card-text">In place of fitting.</p>
                        </div>
                    </div>
                </div>
                <div class="card selectable-appointment" data-type="Consultation">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Consultation</h5>
                            <p class="card-text">For existing clients who want to explore the collection and consider new bespoke orders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Calendar and Time -->
        <div class="row mt-5">
            <div class="col-md-3 text-center">
                <div class="step-number">2</div>
                <div class="step-description">Select Date and Time</div>
            </div>
            <div class="col-md-9">
                <div class="calendar-section">
                    <div class="calendar">
                        <div class="row">
                            <!-- Calendar Column -->
                            <div class="col-md-6">
                                <div class="calendar-header">
                                    <h6>Select Date</h6>
                                </div>
                                <div id="calendar"></div> <!-- Use a div for the calendar -->
                                <input type="hidden" id="hidden-date" name="date"> <!-- Hidden input to store selected date -->
                            </div>

                            <!-- Time Slots Column -->
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <h6>Timezone: Philippine Time (UTC+08:00)</h6>
                                    <div class="time-slots">
                                        <div class="time-slot" data-time="12:30 PM">12:30 PM</div>
                                        <div class="time-slot" data-time="1:30 PM">1:30 PM</div>
                                        <div class="time-slot" data-time="2:30 PM">2:30 PM</div>
                                        <div class="time-slot" data-time="3:30 PM">3:30 PM</div>
                                        <div class="time-slot" data-time="4:30 PM">4:30 PM</div>
                                        <div class="time-slot" data-time="5:30 PM">5:30 PM</div>
                                        <div class="time-slot" data-time="6:30 PM">6:30 PM</div>
                                        <div class="time-slot" data-time="7:30 PM">7:30 PM</div>
                                        <div class="time-slot" data-time="8:30 PM">8:30 PM</div>
                                    </div>
                                    <input type="hidden" id="hidden-time" name="time"> <!-- Hidden input to store selected time -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Row for Your Information -->
        <div class="row mt-5">
            <div class="col-md-3 text-center">
                <div class="step-number">3</div>
                <div class="step-description">Your Information</div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="form-container">
                                <div class="mb-3">
                                    <label class="form-label" for="firstName">Name *</label>
                                    <div class="d-flex">
                                        <input class="form-control me-2" id="firstName" placeholder="First Name" type="text" name="first_name"/>
                                        <input class="form-control" id="lastName" placeholder="Last Name" type="text" name="last_name"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="contactNumber">Contact Number *</label>
                                    <small class="form-text">Add your phone number to receive an appointment reminder via text message.</small>
                                    <div class="input-group mt-2">
                                        <input type="hidden" id="countryName" name="country">
                                        <input class="form-control" id="contactNumber" type="text" name="phone"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email *</label>
                                    <input class="form-control" id="email" type="email" name="email"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Preferred Contact Channels *</label>
                                    <small class="form-text">Note: You may pick several channels.</small>
                                    <div class="form-check">
                                        <input class="form-check-input" id="whatsapp" type="checkbox" name="preferred_channel[]" value="WhatsApp" />
                                        <label class="form-check-label" for="whatsapp">WhatsApp</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="viber" type="checkbox" name="preferred_channel[]" value="Viber" />
                                        <label class="form-check-label" for="viber">Viber</label>
                                    </div>
                                    <!-- Add more channels as needed -->
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="peopleCount">How many people are getting fit during this appointment *</label>
                                    <input class="form-control" id="peopleCount" type="number" name="number_of_people" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="additionalInfo">To better assist you during our session, let us know if you are looking for anything in particular. This will enable us to prepare a selection of fabrics and samples prior to our meeting.</label>
                                    <textarea class="form-control" id="additionalInfo" name="additional_info" rows="3"></textarea>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-cancel" type="button">Cancel</button>
                                    <button class="btn btn-book" type="submit">Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    const hiddenDateInput = document.querySelector("#hidden-date");
    const hiddenTimeInput = document.querySelector("#hidden-time");
    const timeSlots = document.querySelectorAll(".time-slot");

    // Calendar setup with Flatpickr
    flatpickr("#calendar", {
        inline: true,
        defaultDate: "2024-09-15",
        dateFormat: "Y-m-d", // ISO format
        locale: {
            firstDayOfWeek: 1
        },
        minDate: "today",
        disable: [
            function(date) {
                return (date.getDay() === 0); // Disable Sundays
            }
        ],
        onChange: function(selectedDates) {
            if (selectedDates.length > 0) {
                const selectedDate = selectedDates[0];
                
                // Format date as YYYY-MM-DD and store it
                const year = selectedDate.getFullYear();
                const month = String(selectedDate.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed
                const day = String(selectedDate.getDate()).padStart(2, '0');

                // Store date in hidden input
                hiddenDateInput.value = `${year}-${month}-${day}`;
            }
        }
    });

    // Time slot selection
    timeSlots.forEach(slot => {
        slot.addEventListener('click', function() {
            // Remove 'selected' class from other slots
            timeSlots.forEach(s => s.classList.remove('selected'));
            this.classList.add('selected');

            // Remove AM/PM suffix and store in hidden input
            hiddenTimeInput.value = this.getAttribute('data-time').replace(/(AM|PM)/, '').trim();
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
   const input = document.querySelector("#contactNumber");
        const countryNameInput = document.querySelector("#countryName");
        const iti = window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                fetch('https://ipinfo.io/json', { headers: { 'Accept': 'application/json' }})
                    .then((resp) => resp.json())
                    .then((resp) => {
                        const countryCode = (resp && resp.country) ? resp.country : "US";
                        callback(countryCode);
                    });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

        input.addEventListener("countrychange", function() {
            const countryData = iti.getSelectedCountryData();
            countryNameInput.value = countryData.name;
        });
</script>
<script>
    document.querySelectorAll('.selectable-appointment').forEach(card => {
    card.addEventListener('click', function() {
        // Remove 'selected' class from other cards
        document.querySelectorAll('.selectable-appointment').forEach(c => c.classList.remove('selected'));

        // Add 'selected' class to clicked card
        this.classList.add('selected');

        // Set the hidden input value to the selected appointment type
        document.getElementById('selectedAppointmentType').value = this.getAttribute('data-type');
    });
});

</script>
@endsection
