@extends('layout.app')

@section('content')

<div style="background-color: #020312;height: 100vh">
    <div class="container">
        <div class="row ver-hor_center">
            <div class="col-md-6 mt-5" style="background-color: #3788F229;border-radius: 10px">
               <div  class="ver-hor_center my-5">
                   <img src="/assets/img/game-den logo.png" alt="logo">
               </div>
                <form>
                    <div class="mb-3 px-5">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control form_input" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3 px-5">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control form_input" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3 px-5">
                        <a type="submit" class="form_btn_black ver-hor_center px-5 w-100 mt-4" href="{{url('admin')}}" style="font-weight: bold">Login</a>
                        <button type="submit" name="password" class="btn form_btn_black2 px-5 w-100 my-4" style="font-weight: bold">Sign Up</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
