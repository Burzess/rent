<!-- resources/views/booking.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Rental Booking</title>
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    @include('component.navbar')

    <div class="booking-container">
        <div class="bike-image">
            <div class="carousel">
                <ul class="slides">
                    <input type="radio" name="radio-buttons" id="img-1" checked />
                    <li class="slide-container">
                        <div class="slide-image">
                            <img
                                src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/uploads/product-draft/meta/ahm-gaul-sideview-deluxe-black-6-01022023-085314.png">
                        </div>
                        <div class="carousel-controls">
                            <label for="img-3" class="prev-slide">
                                <span>&lsaquo;</span>
                            </label>
                            <label for="img-2" class="next-slide">
                                <span>&rsaquo;</span>
                            </label>
                        </div>
                    </li>
                    <input type="radio" name="radio-buttons" id="img-2" />
                    <li class="slide-container">
                        <div class="slide-image">
                            <img
                                src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/uploads/product-draft/meta/ahm-gaul-sideview-deluxe-black-6-01022023-085314.png">
                        </div>
                        <div class="carousel-controls">
                            <label for="img-1" class="prev-slide">
                                <span>&lsaquo;</span>
                            </label>
                            <label for="img-3" class="next-slide">
                                <span>&rsaquo;</span>
                            </label>
                        </div>
                    </li>
                    <input type="radio" name="radio-buttons" id="img-3" />
                    <li class="slide-container">
                        <div class="slide-image">
                            <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/uploads/product-draft/meta/ahm-gaul-sideview-deluxe-black-6-01022023-085314.png">
                        </div>
                        <div class="carousel-controls">
                            <label for="img-2" class="prev-slide">
                                <span>&lsaquo;</span>
                            </label>
                            <label for="img-1" class="next-slide">
                                <span>&rsaquo;</span>
                            </label>
                        </div>
                    </li>
                    <div class="carousel-dots">
                        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
                        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
                        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
                    </div>
                </ul>
            </div>
        </div>

        <div class="booking-details">
            <div class="booking-form">
                <h2>Book Now</h2>
                <form action="#process_booking.php" method="post">
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" required>
                    <label for="pickup-date">Pick-Up Date:</label>
                    <input type="date" id="pickup-date" name="pickup-date" required>
                    <label for="duration">Duration:</label>
                    <input type="text" id="duration" name="duration" value="72 Hours" readonly>
                    <label for="total-price">Total Price: {{ 'Rp. 100.000' }}</label>
                    <input type="submit" value="BOOK NOW">
                </form>
            </div>
        </div>

        <div class="vehicle-detail">
            <!-- Detail kendaraan dapat ditambahkan di sini -->
        </div>
    </div>

    @include('component.footer')

    <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
