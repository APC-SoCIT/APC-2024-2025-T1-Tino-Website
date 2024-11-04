@extends('admin/layouts.app')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

                	<h1 class="h3 mb-3"><strong>Tino</strong> Dashboard</h1>
				
                    <div class="row">
                        <!-- Appointment Overview Cards -->
                        <div class="col-xl-6 col-xxl-5 d-flex">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <!-- Total Appointments Card -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Total Appointments Today</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{ App\Models\Booking::where('status', 'confirmed')->whereDate('date', today())->count() }}</h1>
                                            </div>
                                        </div>

                                        <!-- Pending Appointments Card -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Pending Appointments</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="stat text-warning">
                                                            <i class="align-middle" data-feather="clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{ App\Models\Booking::where('status', 'pending')->count() }}</h1>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        
                                        <!-- Confirmed Appointments Card -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Confirmed Appointments</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="stat text-success">
                                                            <i class="align-middle" data-feather="check-circle"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{ App\Models\Booking::where('status', 'confirmed')->count() }}</h1>
                                            </div>
                                        </div>

                                        <!-- Cancelled Appointments Card -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Cancelled Appointments</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="stat text-danger">
                                                            <i class="align-middle" data-feather="x-circle"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{ App\Models\Booking::where('status', 'canceled')->count() }}</h1>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Country Pie Chart -->
                        <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Appointment Distribution by Country</h5>
                                </div>
                                <div class="card-body d-flex">
                                    <div class="align-self-center w-100">
                                        <div class="py-3">
                                            <div class="chart chart-xs">
                                                <canvas id="chartjs-dashboard-pie"></canvas>
                                            </div>
                                        </div>

                                        <table class="table mb-0">
                                            <tbody>
                                            @foreach($plabels as $index => $country)
                                                <!-- Display country data here -->
                                                <tr>
                                                    <td>{{ $country }}</td>
                                                    <td class="text-end">{{ $pdata[$index] }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
				</div>
			</main>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
            // Fetch labels and data from the Blade variables
            var _plabels = {!! json_encode($plabels) !!};
            var _pdata = {!! json_encode($pdata) !!};

            // Pie chart colors
            var chartColors = [
                window.theme.primary,
                window.theme.warning,
                window.theme.danger,
                window.theme.success,
                window.theme.info
            ];

            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie",
                data: {
                    labels: _plabels,
                    datasets: [{
                        data: _pdata,
                        backgroundColor: chartColors,
                        borderWidth: 5
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: true,
                        position: 'right',
                        labels: {
                            fontColor: 'rgba(0,0,0,0.8)'
                        }
                    },
                    cutoutPercentage: 75
                }
            });
        });
	</script>

@endsection