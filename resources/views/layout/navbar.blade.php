<!-- Navbar -->
{{-- <header class="container position-sticky z-index-sticky top-0 bg-light " style="z-index: 999;" id="desktop-navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 shadow position-absolute my-3 py-2 start-0 end-0 mx-4 bg-white w-50" style="border-radius: 80px; padding: 16px;">
            <div class="container-fluid justify-content-center" style="gap: 32px;">
                <div class="" id="navigation">
                    <ul class="navbar-nav" style="gap: 32px;">
                        <li class="nav-item">
                            <a class="nav-link me-2" aria-current="page" href="">
                                Image
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="">
                                Text
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="">
                                Audio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="">
                                Video
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header> --}}
<!-- End Navbar -->

<!-- mobile navbar -->
{{-- <header class="container position-sticky z-index-sticky top-0 bg-light" style="z-index: 999;" id="mobile-navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary blur blur-rounded top-0 shadow position-absolute my-3 py-2 start-0 end-0 mx-4 bg-white" style="border-radius: 24px; padding: 16px;">
            <div class="container-fluid">
                <!-- <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="">
                    <img src="{{url('/')}}/assets/mainLogo.png" alt="">
                </a> -->
                <button class="navbar-toggler shadow-none ms-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
                    <span class="toggler-icon" id="bar1" style="color: #4A0B0B; font-weight: 700;">Menu</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav p-3">
                        <a class="nav-link" href="#">Fitur</a>
                        <a class="nav-link" href="#">Cek Ongkir</a>
                        <a class="nav-link" href="#">Cek Resi</a>
                        <a class="nav-link" href="#">Blog</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header> --}}
<!-- end mobile navbar -->

<header>
    <div class="container">
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid d-flex justify-content-end">
                <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Image</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Text</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Audio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Video</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                </div>
            </div>
        </nav>
    </div>
</header>