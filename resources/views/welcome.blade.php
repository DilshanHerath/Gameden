@extends('layout.app')

@section('content')


<!--banner-->
<section class="banner-img">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mt-5" style="padding-left:5%">
                <h1 class="banner-text"> An
                    <lt class="banner-text2"> immersive</lt>
                    co-op gaming experience
                </h1>
                <br>
                <p class="text-white banner-sub-text" style="color: #CCCCCF">
                    Hic quo molestiae sed accusantium omnis soluta omnis minima tempore perferendis voluptatem cum rerum
                    non ratione.
                </p>
                <br>
                <div class="row d-flex">
                    <div class="col-md-5 mb-5">
                        <a href="" class="ver-hor_center text-white font-manrope-bold btn-book">
                            Book a session now!</a>
                    </div>
                    <div class="col-md-7 px-4 align-items-center d-flex mb-5">
                        <div>
                            <img src="/assets/img/arrow-icon.png" alt="">
                        </div>
                        <div class="align-items-center d-flex">
                            <p class="m-0 font-manrope-bold" style="color: #B537F2"> Explore all games</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="mt-5" src="/assets/img/hero-image.png" width="100%" height="auto" alt="">
            </div>
        </div>
    </div>
</section>

<!--all in one section -->
<section style="background: #343541">

    <!--        space       -->
    <div class="py-5"></div>

    <div class="container">
        <div class="row pb-5">
            @foreach ($game as $games)
            <div class="col-md-4 mt-5" style="position: relative">
                <div class="row mx-1 game-box" style="background-color: #020312">
                    <div class="col-md-6 mt-4">
                        <p class="font-clash-display mb-2 text-white" style="font-size: 18px">{{$games->title}}</p>
                        <p class="font-manrope-regular fsc-4" style="color: #CCCCCF">{{$games->description}}</p>
                        <div class="d-flex">
                            <p class="font-manrope-bold" style="color: #B537F2">View more</p>
                            <img src="/assets/img/arrow.png" width="24" height="24" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img  src="{{url('storage/'.$games->photo)}}" height="115%"
                             class="games-img" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <section>

            <!--        space       -->
            <div class="py-4"></div>

            <div class="d-flex justify-content-center" style="">
                <p class="mb-3 px-3 py-1 sub-title-blue">ALL IN ONE PLATFORM</p>
            </div>

            <h1 class="mb-3 text-center text-white font-clash-display fsc-2">
                Unlimited exitement
            </h1>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <p class="text-center banner-sub-text" style="color: #CCCCCF">
                        Asperiores omnis reprehenderit illo nesciunt qui eius molestias. Autem libero maxime accusantium
                        aut inventore eos qui. Ut ratione et ad sint natus necessitatibus dolor. Possimus iusto
                        excepturi minus.
                    </p>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-4 mt-5" style="position: relative">
                    <div style="background-color: #676770" class="ml-1 p-3">
                        <img class="mb-1" src="/assets/img/clock.png" width="42px" height="42px" alt="">
                        <p class="mb-1 font-clash-display text-white" style="font-size: 20px">Center hours</p>
                        <p class="banner-sub-text" style="color: #CCCCCF">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mt-5" style="position: relative">
                    <div style="background-color: #676770" class="ml-1 p-3">
                        <img class="mb-1" src="/assets/img/cup.png" width="42px" height="42px" alt="">
                        <p class="mb-1 font-clash-display text-white" style="font-size: 20px">Tournaments</p>
                        <p class="banner-sub-text" style="color: #CCCCCF">
                            Molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                            officia deserunt mollitia.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mt-5" style="position: relative">
                    <div style="background-color: #676770" class="ml-1 p-3">
                        <img class="mb-1" src="/assets/img/party.png" width="42px" height="42px" alt="">
                        <p class="mb-1 font-clash-display text-white" style="font-size: 20px">Parties</p>
                        <p class="banner-sub-text" style="color: #CCCCCF">
                            Animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
                            distinctioed ut.
                        </p>
                    </div>
                </div>
            </div>

            <h4 class="font-clash-display text-center text-white mb-4">Fueled by most known names in the gaming
                industry</h4>

            <div class="row d-flex justify-content-center">
                <div class="col-md-1"></div>
                <div class="col">
                    <img class="mb-1" src="/assets/img/hyper-x-logo.png" width="200" height="72" alt="">
                </div>
                <div class="col">
                    <img class="mb-1" src="/assets/img/logotech-logo.png" width="200" height="72" alt="">
                </div>
                <div class="col">
                    <img class="mb-1" src="/assets/img/corsair-logo.png" width="200" height="72" alt="">
                </div>
                <div class="col">
                    <img class="mb-1" src="/assets/img/msi-logo.png" width="200" height="72" alt="">
                </div>
                <div class="col-md-1"></div>
            </div>
            <!--        space       -->
            <div class="py-5"></div>

        </section>
    </div>
</section>


<section style="background: #020312">

    <!--        space       -->
    <div class="py-5"></div>

    <div class="container">
        <div class="d-flex justify-content-center" style="">
            <p class="mb-3 px-3 py-1 sub-title-purpule">GALLERY</p>
        </div>

        <h1 class="mb-2 text-center text-white fsc-2 font-clash-display">
            Here’S How The Rigs Looks
        </h1>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <p class="mb-5 text-center banner-sub-text" style="color: #CCCCCF">
                    Unde ut et. Delectus aspernatur eligendi ullam. Sit ad illum eaque distinctio.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img class="mb-1" src="/assets/img/image-1.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img class="mb-1" src="/assets/img/image-2.png" width="100%" height="100%" alt="">
                    </div>
                    <div class="col-md-6">
                        <img class="mb-1" src="/assets/img/image-3.png" width="100%" height="100%" alt="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <img class="mb-1" src="/assets/img/image-4.png" width="100%" height="100%" alt="">
                    </div>
                    <div class="col-md-6">
                        <img class="mb-1" src="/assets/img/image-5.png" width="100%" height="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="d-flex justify-content-center pt-3">
            <p class="font-manrope-bold" style="color: #B537F2">View all photos</p>
            <img src="/assets/img/arrow.png" width="24" height="24" alt="">
        </div>

        <!--        space       -->
        <div class="py-5"></div>

        <div class="form-background-blue">
            <!--alert-->
            <div class="row ver-hor_center pt-5">
                <div class="col-10">
                    @if(session()->has('message'))
                    <div class="alert alert-info text-center fw-bold" id="successMessage" role="alert">
                       {{session('message')}}
                    </div>
                    @endif

                </div>
            </div>
            <!--alert-->
            <div class="row pt-5 px-5 ver-hor_center">
                <div class="col-md-6">
                    <h1 class="mb-2 fsc-2 text-left text-white font-clash-display">
                        Reserve your membership today!
                    </h1>
                    <p class="text-left banner-sub-text" style="color: #CCCCCF">
                        Ut sed non dolores qui deleniti tempora. Minus et voluptatem officiis ut aspernatur nihil
                        recusandae ullam. Ut similique occaecati ea porro voluptatibus sequi.
                    </p>
                </div>
                <div class="col-md-6">
                    <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="full_name" class="form-control rounded-0 form_input">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control rounded-0 form_input"
                                   placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="number" name="contact" class="form-control rounded-0 form_input">
                        </div>
                        <div class="mb-3">
                            <div id="selector" class="container">
                                <label class="form-label">Preferred gaming
                                    console</label>
                                <select class="form-control input-lg" name="type">
                                    <option value="PS4">PS4</option>
                                    <option value="PS5">PS5</option>
                                    <option value="xbox_x">Xbox X</option>
                                    <option value="xbox_s">Xbox S</option>
                                </select>
                                <i class="fa fa-sort-down"></i>
                            </div>
                        </div>

<!--                        @if(session()->has('message'))-->
<!--                        <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">-->
<!--                            <a href="#" class="close" data-bs-dismiss="alert" aria-label="close">&times;</a>-->
<!--                            <strong> {{ session()->get('message') }} </strong>-->
<!--                        </div>-->
<!--                        @endif-->

                        <button type="submit" class="btn form_btn_black w-100 mt-3 mb-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!--        space       -->
        <div class="py-5"></div>


        <div class="d-flex justify-content-center" style="">
            <p class="sub-title-blue mb-3 px-3 py-1">FOOTAGE</p>
        </div>

        <h1 class="mb-2 text-center text-white font-clash-display fsc-2">
            Check how fun it was!
        </h1>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <p class="mb-5 text-center banner-sub-text" style="color: #CCCCCF">
                    Unde ut et. Delectus aspernatur eligendi ullam. Sit ad illum eaque distinctio.
                </p>
            </div>
        </div>

        <div id="carousel">
            <ul>
                <li>
                    <img src="/assets/img/video-3-thumbnail.png" class="d-block mx-auto" alt="for website">
                </li>
                <li>
                    <img src="/assets/img/video-1-thumbnail.png" class="d-block mx-auto" alt="for website">
                </li>
                <li>
                    <img src="/assets/img/video-2-thumbnail.png" class="d-block mx-auto" alt="for website">
                </li>

            </ul>
        </div>

        <!--        space       -->
        <div class="py-5"></div>

    </div>
</section>

<!--enlighten yourself section-->

<section style="background: #343541">

    <!--        space       -->
    <div class="py-5"></div>

    <div class="container">
        <div class="d-flex justify-content-center" style="">
            <p class="sub-title-blue mb-3 px-3 py-1">BLOGS</p>
        </div>

        <h1 class="mb-2 text-center text-white fw-bold font-clash-display fsc-2">
            Enlighten yourself
        </h1>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <p class="mb-5 text-center banner-sub-text" style="color: #CCCCCF">
                    Unde ut et. Delectus aspernatur eligendi ullam. Sit ad illum eaque distinctio.
                </p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 mb-5">
                <div style="background: #020312" class="p-3">
                    <img class="card-img-top" src="/assets/img/blog-1.png" alt="Card image cap">

                    <div class="card-body p-0">
                        <p class="card-text my-2 font-manrope-regular">29 April 2021</p>
                        <div class="mb-3">
                            <span class="badge badge-primary p-2 rounded-0" style="background: #1D1D2B;color: #71737B">Action</span>
                            <span class="badge badge-primary p-2 rounded-0" style="background: #1D1D2B;color: #71737B">Platform</span>
                            <span class="badge badge-primary p-2 rounded-0" style="background: #1D1D2B;color: #71737B">FPS</span>
                        </div>
                        <h5 class="card-title text-white font-clash-display">Vel id asperiores commodi dignissimos
                            eveniet</h5>
                        <p class="card-text banner-sub-text" style="color: #CCCCCF">Lorem ipsum dolor sit amet,
                            consetetur sadipscing
                            elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore.</p>
                        <div class="d-flex justify-content-start">
                            <p class="fw-bold" style="color: #B537F2">Read more</p>
                            <img src="/assets/img/arrow.png" width="24" height="24" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div style="background: #020312" class="p-3">
                    <img class="card-img-top" src="/assets/img/blog-2.png" alt="Card image cap">

                    <div class="card-body p-0">
                        <p class="card-text my-2 font-manrope-regular">29 April 2021</p>
                        <div class="mb-3">
                            <span class="badge badge-primary p-2 rounded-0" style="background: #1D1D2B;color: #71737B">Platform</span>
                            <span class="badge badge-primary p-2 rounded-0" style="background: #1D1D2B;color: #71737B">Action</span>
                            <span class="badge badge-primary p-2 rounded-0" style="background: #1D1D2B;color: #71737B">FPS</span>
                        </div>
                        <h5 class="card-title text-white font-clash-display">Non molestiae animi quam sequi aut</h5>
                        <p class="card-text banner-sub-text" style="color: #CCCCCF">Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                        <div class="d-flex justify-content-start">
                            <p class="fw-bold" style="color: #B537F2">Read more</p>
                            <img src="/assets/img/arrow.png" width="24" height="24" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div style="background: #020312" class="p-3">
                    <img class="card-img-top" src="/assets/img/blog-3.png" alt="Card image cap">

                    <div class="card-body p-0">
                        <p class="card-text my-2 font-manrope-regular">29 April 2021</p>
                        <div class="mb-3">
                            <span class="badge badge-primary p-2 rounded-0" style="background: #1D1D2B;color: #71737B">Primary</span>
                            <span class="badge badge-primary p-2 rounded-0" style="background: #1D1D2B;color: #71737B">Platform</span>
                            <span class="badge badge-primary p-2 rounded-0" style="background: #1D1D2B;color: #71737B">FPS</span>
                        </div>
                        <h5 class="card-title text-white font-clash-display">Occaecati cum quidem quia assumendat optio
                            illum et</h5>
                        <p class="card-text banner-sub-text" style="color: #CCCCCF">Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                        <div class="d-flex justify-content-start">
                            <p class="fw-bold" style="color: #B537F2">Read more</p>
                            <img src="/assets/img/arrow.png" width="24" height="24" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center ">
            <p class="font-manrope-bold" style="color: #B537F2">View all blogs</p>
            <img src="/assets/img/arrow.png" width="24" height="24" alt="">
        </div>
        <!--        space       -->
        <div class="py-4"></div>
    </div>
</section>

<!--footer-->
<section style="background: #020312">
    <div class="container">
        <img class="pt-5" src="/assets/img/game-den logo.png" alt="">
        <div class="row">
            <div class="col-md-4 mt-5">
                <p class="banner-sub-text" style="color: #CCCCCF">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempo.
                </p>
                <div class="row">
                    <div class="col-1">
                        <img src="/assets/img/phone.png" alt="">
                    </div>
                    <div class="col-8">
                        <p class="banner-sub-text" style="color: #CCCCCF">+123 456 789</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <img src="/assets/img/email.png" alt="">
                    </div>
                    <div class="col-8">
                        <p class="banner-sub-text" style="color: #CCCCCF">gameden@email.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <img src="/assets/img/location.png" alt="">
                    </div>
                    <div class="col-8">
                        <p class="banner-sub-text" style="color: #CCCCCF">5036 O'Reilly Alley, Trystanbury</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <p class="font-manrope-bold" style="color: #CCCCCF">QUICK LINKS</p>
                <p class="mb-2 banner-sub-text" style="color: #CCCCCF">
                    Home
                </p>
                <p class="mb-2 banner-sub-text" style="color: #CCCCCF">
                    Games
                </p>
                <p class="banner-sub-text" style="color: #CCCCCF">
                    Events
                </p>

                <!--        space       -->
                <div class="py-2"></div>

                <p class="font-manrope-bold mb-2" style="color: #CCCCCF">SOCIAL LINKS</p>
                <div class="row mb-5">
                    <div class="col-2">
                        <img src="/assets/img/facebook.png" alt="">
                    </div>
                    <div class="col-2">
                        <img src="/assets/img/instagram.png" alt="">
                    </div>
                    <div class="col-2">
                        <img src="/assets/img/linkedin.png" alt="">
                    </div>
                </div>

            </div>
            <div class="col-md-2">
                <p class="font-manrope-bold" style="color: #CCCCCF">RESOURCES</p>
                <p class="mb-2 banner-sub-text" style="color: #CCCCCF">
                    Events
                </p>
                <p class="mb-2 banner-sub-text" style="color: #CCCCCF">
                    Blogs
                </p>
                <p class="banner-sub-text" style="color: #CCCCCF">
                    Support
                </p>

            </div>
            <div class="col-md-2">
                <p class="font-manrope-bold" style="color: #CCCCCF">BRANCHES</p>
                <p class="mb-2 banner-sub-text" style="color: #CCCCCF">
                    Atlanta
                </p>
                <p class="mb-2 banner-sub-text" style="color: #CCCCCF">
                    Homenickshire
                </p>
                <p class="banner-sub-text" style="color: #CCCCCF">
                    South Betty
                </p>

            </div>
            <div class="col-md-2">
                <p class="font-manrope-bold" style="color: #CCCCCF">LEGAL</p>
                <p class="mb-2 banner-sub-text" style="color: #CCCCCF">
                    Privacy policy
                </p>
                <p class="mb-2 banner-sub-text" style="color: #CCCCCF">
                    Terms & conditions
                </p>
                <p class="banner-sub-text" style="color: #CCCCCF">
                    Disclaimer
                </p>

            </div>
        </div>
        <div class="mt-0 mb-2" style="width: 100%;background: white;height: 1px;opacity: 0.2"></div>
        <p class="py-2 text-center banner-sub-text" style="color: #CCCCCF">
            © 2022 Surge Global. All rights reserved.
        </p>
    </div>
</section>
<style>
    :root {
        height: 100%;
    }

    ::placeholder {
        color: rgba(255, 255, 255, 1) !important;
        opacity: 0.6 !important;
    }

    :-ms-input-placeholder {
        color: rgba(255, 255, 255, 1);
        opacity: 0.6 !important;
    }

    ::-ms-input-placeholder {
        color: rgba(255, 255, 255, 1);
        opacity: 0.6 !important;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none !important;
    }

    .flipster {
        overflow-y: hidden;
    }

    .fw-bold {
        font-weight: bold;
    }

</style>
@endsection

@section('script')
<script>
    var carousel = $("#carousel").flipster({
        style: 'carousel',
        spacing: -0.4,
        nav: false,
        buttons: false,
    });

    setTimeout(function () {
        $('#successMessage').fadeOut('fast');
    },6000);

</script>

@endsection
