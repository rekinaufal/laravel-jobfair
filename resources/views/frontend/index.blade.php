<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .bg-gray {
            background-color: #E0E2E4;
        }

        .btn-meja {
            cursor: pointer;
        }
    </style>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @include('partials.navbar')
    @yield('content')
    <!-- <ul class="nav justify-content-center bg-dark">
        <li class="nav-item my-1">
            <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item my-1">
            <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item my-1">
            <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item my-1">
            <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item my-1">
            <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item my-1">
            <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item my-1">
            <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item my-1">
            <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item my-1">
            <a class="nav-link text-white" href="#">Link</a>
        </li>
    </ul> -->
    <script>
        var show = 1;
        $('.btn-meja').click(function(event) {
            $('.detail').hide();
            if (show == 1) {
                $('#detail-2').show();
                show = 2;
            } else {
                $('#detail-1').show();
                show = 1;
            }
        });
    </script>
</body>
</html>