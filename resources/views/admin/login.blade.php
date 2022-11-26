@extends('layout.app')

@section('content')

<div style="background-color: #020312;height: 100vh">
    <div class="container">
        <div class="row ver-hor_center">
            <div class="col-md-6 mt-5" style="background-color: #3788F229;border-radius: 10px">
               <div  class="ver-hor_center mt-5">
                   <img src="/assets/img/game-den logo.png" alt="logo">
               </div>

                <!--alert-->
                <div class="row ver-hor_center pt-5">
                    <div class="col-10">
                        @if(session()->has('message'))
                        <div class="alert alert-danger text-center fw-bold" id="successMessage" role="alert">
                            {{session('message')}}
                        </div>
                        @endif

                    </div>
                </div>
                <!--alert-->

                <form action="{{route('check_user')}}" method="get">
                    @csrf
                    <div class="mb-3 px-5">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control form_input" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3 px-5">
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control form_input" id="exampleInputPassword" required>
                    </div>

                    <div class="mb-3 px-5">
                        <button type="submit"  class="form_btn_black ver-hor_center px-5 w-100 mt-4" style="font-weight: bold;text-decoration: none">Login</button>
                        <button type="submit" class="btn form_btn_black2 px-5 w-100 my-4" style="font-weight: bold">Sign Up</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script>
    setTimeout(function () {
        $('#successMessage').fadeOut('fast');
    },5000);
</script>

@endsection
