<nav class="navbar navbar-dark bg-black p-3 mb-0">
    <div class="container">
        <div class="col-4">
            <img src="/assets/img/game-den logo.png" alt="logo">
        </div>
        <div class="col-8 d-none d-lg-block">
            <div class="d-flex align-items-center">
                <a href="#Home" class="m-0 fsc-12">Home</a>
                <a href="#games" class="m-0 fsc-12">Games</a>
                <a href="#events" class="m-0 fsc-12">Events</a>
                <a href="#blog" class="m-0 fsc-12">Blog</a>
                <a href="#locations" class="m-0 fsc-12">Locations</a>

                <div class="d-flex align-items-center justify-content-end w-100">
                    <a href="#location" class="px-4 m-0 fsc-12">Login</a>
                    <button class="navbar-toggler px-3 py-2 rounded-0 text-white" type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        Get started
                    </button>
                </div>
            </div>

        </div>


        <div class="col-8 d-lg-none">
            <div class=" d-flex justify-content-end ">
                <button class="navbar-toggler" type="submit" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="offcanvas offcanvas-end bg-black" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header d-flex justify-content-end">
                    <span class="btn-close text-white" data-bs-toggle="offcanvas"
                          aria-label="Close">X</span>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link p-3 fsc-12" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3 fsc-12" href="#">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3 fsc-12" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3 fsc-12" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3 fsc-12" href="#">Locations</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>




<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        // all movie render-->
<!--        movie_render_all();-->
<!---->
<!--        // nav bar-->
<!--        $("ul.navbar-nav > li").click(function (e) {-->
<!--            $("ul.navbar-nav > li").removeClass("active");-->
<!--            $(this).addClass("active");-->
<!--        });-->
<!---->
<!--    });-->
<!--</script>-->
