<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    @include('component.navbar')

    <div class="dashboard">
        @include('component.user.dashboard')

        <div class="user-stats">
            <div class="stats">
                <div class="card total-order">
                    <div>
                        <h1><i class="fas fa-shopping-cart"></i></h1>
                        <h1>03</h1>
                        <p>Total Order</p>
                    </div>
                </div>
                <div class="card cancel-order">
                    <div>
                        <h1><i class="fas fa-times-circle"></i></h1>
                        <h1>24</h1>
                        <p>Cancel Order</p>
                    </div>
                </div>
            </div>
            <div class="recent-orders">
                <h1>My Recent Order</h1>
                <table class="order-table">
                    <thead>
                        <tr>
                            <th>Booking No.</th>
                            <th>Vehicle</th>
                            <th>Pick-up Location</th>
                            <th>Return Date</th>
                            <th>Payment Status</th>
                            <th>Completed Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#02345</td>
                            <td>Jeep Renegade</td>
                            <td>Bandung Airport</td>
                            <td>25/07/2019</td>
                            <td>$5000</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>#02345</td>
                            <td>Jeep Renegade</td>
                            <td>Bandung Airport</td>
                            <td>25/07/2019</td>
                            <td>$5000</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>#02346</td>
                            <td>Ford Escape</td>
                            <td>Shah Alam Parking Spot</td>
                            <td>26/07/2019</td>
                            <td>$5300</td>
                            <td>Cancelled</td>
                        </tr>
                        <tr>
                            <td>#02347</td>
                            <td>Honda Civic</td>
                            <td>Lumut Bus Station Spot</td>
                            <td>27/07/2019</td>
                            <td>$4700</td>
                            <td>Booked</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('component.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
