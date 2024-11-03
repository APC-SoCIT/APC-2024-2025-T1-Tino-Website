@extends('admin/layouts.app')

@section('content')
<style>
     #calendar {
        max-width: 80%;
        height: 80vh;
        margin: 0 auto;
    }

    .fc-daygrid-day {
        pointer-events: none; /* Prevent all click events on the day cells */
        cursor: default;      /* Change the cursor back to default */
    }

    .fc-event {
        pointer-events: auto;  /* Allow click events on the events */
        cursor: pointer;       /* Change cursor to pointer for events */
    }

    .fc-col-header {
        pointer-events: none; /* Prevent all click events on day headers */
        cursor: default;      /* Change the cursor back to default */
    }
	
    /* Smaller screens */
    @media (max-width: 768px) {
        #calendar {
            max-width: 100%;
            height: 60vh;
        }
    }
</style>

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3" >Client <strong>Appointments</strong></h1>
        <div id="calendar"></div> <!-- Calendar container -->

        <div class="card mt-4"> <!-- Add margin top for spacing -->
            <table class="table my-0">
            
                <thead>
                    <tr>
                        <th class="d-none d-md-table-cell">Appointment Type</th>
                        <th class="d-none d-md-table-cell">Interests</th>
                        <th class="d-none d-md-table-cell">Client Name</th>
                        <th class="d-none d-md-table-cell">Country</th>
                        <th class="d-none d-md-table-cell">Phone</th> 
                        <th class="d-none d-md-table-cell">Email</th> 
                        <th class="d-none d-md-table-cell">Preferred Channel</th>
                        <th class="d-none d-md-table-cell">Number of People</th> 
                        <th class="d-none d-md-table-cell">Additional Info</th> 
                        <th class="d-none d-md-table-cell">Actions</th> 
                    </tr>
                </thead>
                <tbody>
                    @if($bookings->isEmpty())
                        <tr>
                            <td colspan="10" class="text-center">No pending appointments have been made.</td>
                        </tr>
                    @else
                        @foreach($bookings as $booking)
                        <tr>
                            <td class="d-none d-md-table-cell">{{ $booking->appointment_type }}</td>
                            <td class="d-none d-md-table-cell">{{ $booking->category_of_interest }}</td>
                            <td class="d-none d-md-table-cell">{{ $booking->first_name }} {{ $booking->last_name }}</td>
                            <td class="d-none d-md-table-cell">{{ $booking->country }}</td>
                            <td class="d-none d-md-table-cell">{{ $booking->phone }}</td>
                            <td class="d-none d-md-table-cell">{{ $booking->email }}</td>
                            <td class="d-none d-md-table-cell">{{ $booking->preferred_channel }}</td>
                            <td class="d-none d-md-table-cell">{{ $booking->number_of_people }}</td>
                            <td class="d-none d-md-table-cell">{{ $booking->additional_info }}</td>
                            <td style="width: 150px;">
                                @if($booking->status === 'confirmed')
                                    <span class="badge bg-success">Confirmed</span>
                                @elseif($booking->status === 'canceled')
                                    <span class="badge bg-danger">Cancelled</span>
                                @else
                                    <form action="{{ route('confirm.booking', $booking->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
                                    </form>
                                    <form action="{{ route('decline.booking', $booking->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection

@section('scripts')
    <!-- FullCalendar CSS and JS -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'customFiveRow',
                views: {
                    customFiveRow: {
                        type: 'dayGrid',
                        duration: { months: 1 },
                        buttonText: '5 Rows',
                        dayRender: function(info) {
                            const allRows = document.querySelectorAll('.fc-daygrid-row');
                            allRows.forEach((row, index) => {
                                if (index >= 5) {
                                    row.style.display = 'none';
                                }
                            });
                        }
                    }
                },
                eventColor: '#378006',
                events: '/bookings', // Adjust the URL as needed to match your route
                eventDisplay: 'block'
            });
            calendar.render();
        });
    </script>
@endsection
