<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Foodia Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/bost/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <style>
        /********** Template CSS **********/
        :root {
            --primary: #fdad00;
            --secondary: #191C24;
            --light: #6C7293;
            --dark: #000000;
        }

        .back-to-top {
            position: fixed;
            display: none;
            right: 45px;
            bottom: 45px;
            z-index: 99;
        }


        /*** Spinner ***/
        #spinner {
            opacity: 0;
            visibility: hidden;
            transition: opacity .5s ease-out, visibility 0s linear .5s;
            z-index: 99999;
        }

        #spinner.show {
            transition: opacity .5s ease-out, visibility 0s linear 0s;
            visibility: visible;
            opacity: 1;
        }


        /*** Button ***/
        .btn {
            transition: .5s;
        }

        .btn-square {
            width: 38px;
            height: 38px;
        }

        .btn-sm-square {
            width: 32px;
            height: 32px;
        }

        .btn-lg-square {
            width: 48px;
            height: 48px;
        }

        .btn-square,
        .btn-sm-square,
        .btn-lg-square {
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: normal;
            border-radius: 50px;
        }


        /*** Layout ***/
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            height: 100vh;
            overflow-y: auto;
            background: var(--secondary);
            transition: 0.5s;
            z-index: 999;
        }

        .content {
            margin-left: 250px;
            min-height: 100vh;
            background: var(--dark);
            transition: 0.5s;
        }

        @media (min-width: 992px) {
            .sidebar {
                margin-left: 0;
            }

            .sidebar.open {
                margin-left: -250px;
            }

            .content {
                width: calc(100% - 250px);
            }

            .content.open {
                width: 100%;
                margin-left: 0;
            }
        }

        @media (max-width: 991.98px) {
            .sidebar {
                margin-left: -250px;
            }

            .sidebar.open {
                margin-left: 0;
            }

            .content {
                width: 100%;
                margin-left: 0;
            }
        }


        /*** Navbar ***/
        .sidebar .navbar .navbar-nav .nav-link {
            padding: 7px 20px;
            color: var(--light);
            font-weight: 500;
            border-left: 3px solid var(--secondary);
            border-radius: 0 30px 30px 0;
            outline: none;
        }

        .sidebar .navbar .navbar-nav .nav-link:hover,
        .sidebar .navbar .navbar-nav .nav-link.active {
            color: var(--primary);
            background: var(--dark);
            border-color: var(--primary);
        }

        .sidebar .navbar .navbar-nav .nav-link i {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--dark);
            border-radius: 40px;
        }

        .sidebar .navbar .navbar-nav .nav-link:hover i,
        .sidebar .navbar .navbar-nav .nav-link.active i {
            background: var(--secondary);
        }

        .sidebar .navbar .dropdown-toggle::after {
            position: absolute;
            top: 15px;
            right: 15px;
            border: none;
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            transition: .5s;
        }

        .sidebar .navbar .dropdown-toggle[aria-expanded=true]::after {
            transform: rotate(-180deg);
        }

        .sidebar .navbar .dropdown-item {
            padding-left: 25px;
            border-radius: 0 30px 30px 0;
            color: var(--light);
        }

        .sidebar .navbar .dropdown-item:hover,
        .sidebar .navbar .dropdown-item.active {
            background: var(--dark);
        }

        .content .navbar .navbar-nav .nav-link {
            margin-left: 25px;
            padding: 12px 0;
            color: var(--light);
            outline: none;
        }

        .content .navbar .navbar-nav .nav-link:hover,
        .content .navbar .navbar-nav .nav-link.active {
            color: var(--primary);
        }

        .content .navbar .sidebar-toggler,
        .content .navbar .navbar-nav .nav-link i {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--dark);
            border-radius: 40px;
        }

        .content .navbar .dropdown-item {
            color: var(--light);
        }

        .content .navbar .dropdown-item:hover,
        .content .navbar .dropdown-item.active {
            background: var(--dark);
        }

        .content .navbar .dropdown-toggle::after {
            margin-left: 6px;
            vertical-align: middle;
            border: none;
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            transition: .5s;
        }

        .content .navbar .dropdown-toggle[aria-expanded=true]::after {
            transform: rotate(-180deg);
        }

        @media (max-width: 575.98px) {
            .content .navbar .navbar-nav .nav-link {
                margin-left: 15px;
            }
        }


        /*** Date Picker ***/
        .bootstrap-datetimepicker-widget.bottom {
            top: auto !important;
        }

        .bootstrap-datetimepicker-widget .table * {
            border-bottom-width: 0px;
        }

        .bootstrap-datetimepicker-widget .table th {
            font-weight: 500;
        }

        .bootstrap-datetimepicker-widget.dropdown-menu {
            padding: 10px;
            border-radius: 2px;
        }

        .bootstrap-datetimepicker-widget table td.active,
        .bootstrap-datetimepicker-widget table td.active:hover {
            background: var(--primary);
        }

        .bootstrap-datetimepicker-widget table td.today::before {
            border-bottom-color: var(--primary);
        }


        /*** Testimonial ***/
        .progress .progress-bar {
            width: 0px;
            transition: 2s;
        }


        /*** Testimonial ***/
        .testimonial-carousel .owl-dots {
            margin-top: 24px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .testimonial-carousel .owl-dot {
            position: relative;
            display: inline-block;
            margin: 0 5px;
            width: 15px;
            height: 15px;
            border: 5px solid var(--primary);
            border-radius: 15px;
            transition: .5s;
        }

        .testimonial-carousel .owl-dot.active {
            background: var(--dark);
            border-color: var(--primary);
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 style="color:#fdad00;"></i>Foodia<span style="color:white;"> Admin</span></h3>
                </a>

                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                </div>
                <div class="navbar-nav w-100">
                    <!-- <a href="#" class="nav-item nav-link "><i class="fa fa-sign-out-alt me-2"></i>Logout</a> -->

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">

                <a style="margin-top:10px;margin-bottom:10px;" href="#" class="sidebar-toggler flex-shrink-0">
                    <i style="color:#fdad00;" class="fa fa-bars"></i>
                </a>

                <div class="">
                    <h6 style="padding-top:8px;padding-left:20px;"><i style="font-size:20px;" class="uil uil-user-circle"></i> {{ Auth::user()->name }}</h6>
                </div>

                <div class="navbar-nav align-items-center ms-auto">
                </div>

                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button style="background-color:#fdad00;" class="btn btn-warning" type="submit">Logout</button>
                </form>
            </nav>
            <!-- Navbar End -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                        </div>
                        <div class="card border-0  rounded">
                            <div style="background-color:black;border-radius:5px;" class="card-body">
                                <nav class="navbar bg-body-tertiary">
                                    <div class="containers">
                                        <a style="margin-left:-15px;background-color:#fdad00;" href="{{ route('posts.create') }}" class="btn btn-md btn-warning mb-3">TAMBAH POST</a>
                                        <!-- <form action="search" style="margin-bottom:10px;" class="d-flex" role="search">
                                            <input name="search" style="background-color:white;margin-left:-15px;" class="form-control me-2 col-10" type="search" placeholder="Search" aria-label="Search" value="" name="search" autofocus value="{{ old('search') }}">
                                            <button class="btn btn-outline-warning" type="submit">Search</button>
                                        </form> -->
                                    </div>
                                </nav>
                                <table class="table table-bordered">
                                    <thead style="border-color:white;color:white;">
                                        <tr>
                                            <th scope="col">GAMBAR</th>
                                            <th scope="col">JUDUL</th>
                                            <th scope="col">CONTENT</th>
                                            <th scope="col">AKSI</th>
                                        </tr>

                                    <tbody style="border-color:white;">
                                        @forelse ($posts as $post)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/posts/' .$post->image) }}" class="rounded" style="width: 150px">
                                            </td>
                                            <td style="color:white;">{{ $post->title }}</td>
                                            <td style="color:white;">{!! $post->content !!}</td>
                                            <td class="text-center col-3">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                    <a style="color:white;" href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-warning">SHOW</a>
                                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-success">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                        @endforelse
                                    </tbody>
                                    </thead>
                                </table>
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib1/chart/chart.min.js"></script>
    <script src="lib1/easing/easing.min.js"></script>
    <script src="lib1/waypoints/waypoints.min.js"></script>
    <script src="lib1/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib1/tempusdominus/js/moment.min.js"></script>
    <script src="lib1/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib1/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main1.js"></script>
</body>

</html>