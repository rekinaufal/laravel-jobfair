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
    </style>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light border-bottom">
        <a class="navbar-brand" href="index.html">
            <img src="assets/img/logo.png" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="job-fair.html">JOB FAIR !</a>
                </li>
            </ul>
        </div>  
    </nav>
    <div class="container-fluid p-0">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form>
                    <table width="100%">
                        <tr>
                            <td width="50%">Full Name (Based on ID) :</td>
                            <td width="50%">
                                <input type="text" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td>
                                <input type="email" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td>
                                <input type="password" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Confirm Password :</td>
                            <td>
                                <input type="password" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone Number :</td>
                            <td>
                                <input type="text" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Desire Role :</td>
                            <td>
                                <input type="text" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-top">Describe Yourself :</td>
                            <td>
                                <textarea class="form-control" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Upload CV (PDF) :</td>
                            <td>
                                <input type="file" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text-right">
                                <input type="submit" class="btn btn-primary mt-3">
                            </td>
                        </tr>
                        
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>