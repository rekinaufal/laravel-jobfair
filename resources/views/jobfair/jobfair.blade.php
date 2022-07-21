@extends('frontend.index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-right mb-3">
            <a href="/register" class="btn btn-secondary mt-3 mr-3" style="background-color: rgb(33, 156, 189);">Register</a>
        </div>
        <!-- {{-- <table align="center" width="20%">
            <tr>
              <td style="padding-right: 10px">
                <input type="text" id="Search" class="form-control" onkeyup="myFunction()" placeholder="Please enter a search term.." title="Type in a name">
              </td>
            </tr>
          </table> --}} -->
          <div class="col-md-10">
            <div class="input-group mb-3">
                <input type="text" id="Search" onkeyup="myFunction()" class="form-control" placeholder="Search">
                <!-- {{-- <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">Go</button>
                </div> --}} -->
            </div>
        </div>
    </div>
    <div class="row">
        <a href="detail.html" class="col-md-3 mb-3">
            <div class="card shadow target">
                <div class="card-body">
                    <div class="d-flex justify-content-center w-100 mb-3">
                        <img src="{{ url('assets/img/1.JFIF') }}" height="150" class="border">
                    </div>
                    <p class="m-0 text-dark">
                        Staff
                        <br>
                        Admin Keudangan
                        <br>
                        PT Bangun Sukses Multindo
                        <br>
                        <br>
                        Tanggerang, Banten
                    </p>
                </div>
            </div>
        </a>
        <a href="detail.html" class="col-md-3 mb-3">
            <div class="card shadow target">
                <div class="card-body">
                    <div class="d-flex justify-content-center w-100 mb-3">
                        <img src="{{ url('assets/img/2.PNG') }}" height="150" class="border">
                    </div>
                    <p class="m-0 text-dark">
                        Staff
                        <br>
                        Admin Keudangan
                        <br>
                        PT Slogan Here
                        <br>
                        <br>
                        Cibinong, Bogor
                    </p>
                </div>
            </div>
        </a>
        <a href="detail.html" class="col-md-3 mb-3">
            <div class="card shadow target">
                <div class="card-body">
                    <div class="d-flex justify-content-center w-100 mb-3">
                        <img src="{{ url('assets/img/3.JFIF') }}" height="150" class="border">
                    </div>
                    <p class="m-0 text-dark">
                        UI & UX Developer
                        <br>
                        Admin Keudangan
                        <br>
                        PT Royal Nusa Persada
                        <br>
                        <br>
                        Dramaga, Bogor
                    </p>
                </div>
            </div>
        </a>
        <a href="detail.html" class="col-md-3 mb-3">
            <div class="card shadow target">
                <div class="card-body">
                    <div class="d-flex justify-content-center w-100 mb-3">
                        <img src="{{ url('assets/img/4.JFIF') }}" height="150" width ="150"class="border">
                    </div>
                    <p class="m-0 text-dark">
                        Staff Accuntant
                        <br>
                        Admin Keudangan
                        <br>
                        Garuda Indonesia
                        <br>
                        <br>
                        Jakarta Pusat
                    </p>
                </div>
            </div>
        </a>
        <a href="detail.html" class="col-md-3 mb-3">
            <div class="card shadow target">
                <div class="card-body">
                    <div class="d-flex justify-content-center w-100 mb-3">
                        <img src="{{ url('assets/img/5.JFIF') }}" height="150" class="border">
                    </div>
                    <p class="m-0 text-dark">
                        Frontend Developer
                        <br>
                        Admin Keudangan
                        <br>
                        PT Busness Tangue
                        <br>
                        <br>
                        Tanggerang, Banten
                    </p>
                </div>
            </div>
        </a>
        <a href="detail.html" class="col-md-3 mb-3">
            <div class="card shadow target">
                <div class="card-body">
                    <div class="d-flex justify-content-center w-100 mb-3">
                        <img src="{{ url('assets/img/6.JFIF') }}" height="150" class="border">
                    </div>
                    <p class="m-0 text-dark">
                        Staff
                        <br>
                        IT Support
                        <br>
                        Kominfo
                        <br>
                        <br>
                        Jakarta Utara
                    </p>
                </div>
            </div>
        </a>
        <a href="detail.html" class="col-md-3 mb-3">
            <div class="card shadow target">
                <div class="card-body">
                    <div class="d-flex justify-content-center w-100 mb-3">
                        <img src="{{ url('assets/img/7.JFIF') }}" height="150" class="border">
                    </div>
                    <p class="m-0 text-dark">
                        IT Programmer
                        <br>
                        Admin Keudangan
                        <br>
                        Telkom Indonesia
                        <br>
                        <br>
                        Sudirman, Jakarta Pusat
                    </p>
                </div>
            </div>
        </a>
        <a href="detail.html" class="col-md-3 mb-3">
            <div class="card shadow target">
                <div class="card-body">
                    <div class="d-flex justify-content-center w-100 mb-3">
                        <img src="{{ url('assets/img/download.PNG') }}" height="150" class="border">
                    </div>
                    <p class="m-0 text-dark">
                        Backend Developer
                        <br>
                        Admin Keudangan
                        <br>
                        PT Sangkala Jaya Abadi
                        <br>
                        <br>
                        Tanggerang, Banten
                    </p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
<script>
function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('target');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
    </script>