<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        /* Add background image to the body */
        body {
            background-image: url('https://img.freepik.com/premium-photo/minimalist-art-piece-featuring-white-paper-sculpture-white-background-perfect-use-designs-publications-where-clean-simple-aesthetic-is-desired_153912-338793.jpg'); /* Replace with the path to your image */
            background-size: cover; /* Ensures the image covers the whole page */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents the image from repeating */
        }

        /* The side navigation menu */
        .sidebar {
            margin: 0;
            padding: 0;
            width: 300px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar section boxes */
        .sidebar-section {
            margin: 10px; /* Spacing between boxes */
            padding: 10px;
            background-color: white; /* Box background color */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow effect */
            border: 1px solid #ddd; /* Light border for the boxes */
        }

        /* Links inside the sidebar section */
        .sidebar-section a {
            display: block;
            color: black;
            padding: 8px 12px;
            text-decoration: none;
            margin-bottom: 5px; /* Space between links */
        }

        /* Hover effect for links */
        .sidebar-section a:hover {
            background-color:rgba(52, 146, 230, 0.86);
            color: white;
        }

        /* Active link inside sidebar sections */
        .sidebar-section a.active {
            background-color: darkblue;
            color: white;
        }

        /* Page content */
        div.content {
            margin-left: 0px; /* Sidebar width + spacing */
            padding: 10px 10px;
            height: 1000px;
        }

        /* Navbar styling */
        .navbar {
            background-color: darkblue !important; /* Blue background */
        }

        .navbar .navbar-brand h2 {
            color: white !important; /* White font color */
        }

        /* Mobile responsiveness for the navbar */
        .navbar-toggler-icon {
            filter: invert(1); /* Makes the toggler icon white */
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><h2>Student Management System</h2></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                    <!-- Home Section -->
                    <div class="sidebar-section">
                        <a class="active" href="#home">Home</a>
                    </div>

                    <!-- Student Section -->
                    <div class="sidebar-section">
                        <a href="{{url('/students')}}">Student</a>
                    </div>

                    <!-- Teacher Section -->
                    <div class="sidebar-section">
                        <a href="{{url('/teachers')}}">Teacher</a>
                    </div>

                    <!-- Courses Section -->
                    <div class="sidebar-section">
                        <a href="{{url('/courses')}}">Courses</a>
                    </div>

                    <!-- Batches Section -->
                    <div class="sidebar-section">
                        <a href="{{url('/batches')}}">Batches</a>
                    </div>

                    <!-- Enrollment Section -->
                    <div class="sidebar-section">
                        <a href="{{url('/enrollments')}}">Enrollment</a>
                    </div>

                    <!-- Payment Section -->
                    <div class="sidebar-section">
                        <a href="{{url('/payments')}}">Payment</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYJbb03gNNU6PzW7K2YFqNFTOHFs3AFjlfpE3oUh3NEhiVKnP9aFwPPx6" crossorigin="anonymous"></script>
</body>
</html>
