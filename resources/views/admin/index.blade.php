@extends('layout.app')

@section('content')

<!--game section-->
<section style="background-color: #1a202c">
    <div class="container">
        <div class="d-flex ver-hor_center pt-5">
            <div class="col-md-4 mob-hide" style="background-color: red;height: 2px;width: 100%"></div>
            <div class="col-md-2">
                <h1 class="mb-2  fs-3 text-center text-white font-clash-display">
                    Game
                </h1>
            </div>
            <div class="col-md-4 mob-hide" style="background-color: red;height: 2px;width: 100%"></div>
        </div>
        <div class="row pt-5">
            <div class="col-md-4">
                <form action="{{route('games.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="title" class="form-control rounded-0 form_input">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control rounded-0 form_input">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                    </div>
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input required type='file' name="image" id="imageUpload"/>
                            <label for="imageUpload" class="d-flex justify-content-center align-items-center"><i
                                    class="fa fa-camera fa-sm"></i></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url('/assets/img/avatar.png');">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn form_btn_black w-100 mt-3 mb-5">Add</button>
                </form>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="row">
                    <div class="card px-0">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 p-3" style="float: left">All Games</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-left">
                                <thead>
                                <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($game as $game)
                                <tr>
                                    <td>{{ $game -> title }}</td>
                                    <td>{{ $game -> description }}</td>
                                    <td><img src="{{url('storage/'.$game->photo)}}" width="100%" height="50" alt="">
                                    </td>

                                    <td>
                                        <div class="btn-group">


                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editgame{{ $game->id }}"><i class="fa fa-edit"></i>
                                                Edit
                                            </button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#deletegame{{ $game->id }}"><i
                                                    class="fa fa-trash"></i> Delete
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                                <!--Model of Update Game-->
                                <div class="modal right fade mt-3" id="editgame{{ $game->id }}"
                                     data-bs-backdrop="static"
                                     data-bs-keyboard="false" tabindex="-1"
                                     aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Game
                                                    Details</h5>
                                                <button type="button" style="background-color: transparent;border: none"
                                                        class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">X
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('games.update', $game->id) }}"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="avatar-upload mb-5" style="margin-left: 40%">
                                                        <div class="avatar-edit">
                                                            <input required type='file' name="image" id="imageUpload"/>
                                                            <label for="imageUpload"
                                                                   class="d-flex justify-content-center align-items-center"><i
                                                                    class="fa fa-camera fa-sm"></i></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <input type="hidden" name="image" id="old-img"
                                                                   value="{{url('storage/'.$game->photo)}}">
<!--                                                            <img width="100%" height="100%"-->
<!--                                                                 src="{{url('storage/'.$game->photo)}}"-->
<!--                                                                 id="imagePreview">-->
                                                            <img width="100%" height="100%"
                                                                 src="{{url('storage/'.$game->photo)}}"
                                                                 id="imagePreview">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input type="text" name="title" value="{{$game->title}}"
                                                               id=""
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Description</label>
                                                        <input type="text" name="description" id=""
                                                               value="{{$game->description}}" class="form-control">
                                                    </div>

                                                    <div
                                                        class="modal-footer justify-content-center align-items-center display-flex">
                                                        <div class="col-md-6">
                                                            <button type="submit"
                                                                    class="btn btn-primary btn-block w-100">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Model of Delete user-->
                                <div class="modal right fade mt-3" id="deletegame{{ $game->id }}"
                                     data-bs-backdrop="static"
                                     data-bs-keyboard="false" tabindex="-1"
                                     aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-content-delete">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Remove Game</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('games.destroy', $game->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <p>Are sure want this delete this <b>{{$game->title}}</b> ?</p>

                                                    <div class="modal-footer">
                                                        <button class="btn btn-info text-white" data-dismiss="modal">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--game section-->

<!--blog section-->
<section style="background-color: #1a202c">
    <div class="container">
        <div class="d-flex ver-hor_center pb-5">
            <div class="col-md-4 mob-hide" style="background-color: red;height: 2px;width: 100%"></div>
            <div class="col-2">
                <h1 class="mb-md-2  fs-3 text-center text-white font-clash-display">
                    Blog
                </h1>
            </div>
            <div class="col-md-4 mob-hide" style="background-color: red;height: 2px;width: 100%"></div>
        </div>

        <div class="row pt-5">
            <div class="col-md-4">
                <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="title" class="form-control rounded-0 form_input">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control rounded-0 form_input">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                    </div>
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input required type='file' name="image" id="imageUpload"/>
                            <label for="imageUpload" class="d-flex justify-content-center align-items-center"><i
                                    class="fa fa-camera fa-sm"></i></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url('/assets/img/avatar.png');">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn form_btn_black w-100 mt-3 mb-5">Add</button>
                </form>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="row">
                    <div class="card px-0">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 p-3" style="float: left">All Games</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-left">
                                <thead>
                                <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($blog as $blog)
                                <tr>
                                    <td>{{ $blog -> title }}</td>
                                    <td>{{ $blog -> description }}</td>
                                    <td><img src="{{url('storage/'.$blog->photo)}}" alt=""></td>

                                    <td>
                                        <div class="btn-group">


                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editbblog{{ $blog->id }}"><i
                                                    class="fa fa-edit"></i>
                                                Edit
                                            </button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#deleteblog{{ $blog->id }}"><i
                                                    class="fa fa-trash"></i> Delete
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                                <!--Model of Update Student-->
                                <div class="modal right fade mt-3" id="editblog{{ $blog->id }}"
                                     data-bs-backdrop="static"
                                     data-bs-keyboard="false" tabindex="-1"
                                     aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Game
                                                    Details</h5>
                                                <button type="button" style="background-color: transparent;border: none"
                                                        class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">X
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('blog.update', $blog->id) }}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="avatar-upload mb-5" style="margin-left: 40%">
                                                        <div class="avatar-edit">
                                                            <input required type='file' name="image" id="imageUpload"/>
                                                            <label for="imageUpload"
                                                                   class="d-flex justify-content-center align-items-center"><i
                                                                    class="fa fa-camera fa-sm"></i></label>
                                                        </div>
                                                        <div class="avatar-preview">

                                                            <input type="hidden" id="old-img"
                                                                   value="{{url('storage/blog'.$blog->photo)}}">
                                                            <img src="{{url('storage/blog'.$blog->photo)}}"
                                                                 id="imagePreview">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input type="text" name="title" value="{{$game->title}}"
                                                               id=""
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Description</label>
                                                        <input type="text" name="description" id=""
                                                               value="{{$blog->description}}" class="form-control">
                                                    </div>

                                                    <div
                                                        class="modal-footer justify-content-center align-items-center display-flex">
                                                        <div class="col-md-6">
                                                            <button type="submit"
                                                                    class="btn btn-primary btn-block w-100">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Model of Delete user-->
                                <div class="modal right fade mt-3" id="deleteblog{{ $blog->id }}"
                                     data-bs-backdrop="static"
                                     data-bs-keyboard="false" tabindex="-1"
                                     aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-content-delete">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Remove Game</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <p>Are sure want this delete this <b>{{$blog->title}}</b> ?</p>

                                                    <div class="modal-footer">
                                                        <button class="btn btn-info text-white" data-dismiss="modal">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--blog section-->


<!--register section-->
<section style="background-color: #1a202c">
    <div class="container">
        <div class="d-flex ver-hor_center pb-5">
            <div class="col mob-hide" style="background-color: red;height: 2px;width: 100%"></div>
            <div class="col-3">
                <h1 class="fs-3 text-center text-white font-clash-display">
                    Registerd Members
                </h1>
            </div>
            <div class="col mob-hide" style="background-color: red;height: 2px;width: 100%"></div>
        </div>

        <div class="row pb-5">
            <div class="col-md-12">
                <div class="card px-0">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 p-3" style="float: left">All Games</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-left">
                            <thead>
                            <tr>
                                <th class="text-center">Full Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Preferred gaming console</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($home as $home)
                            <tr>
                                <td class="text-center">{{ $home -> full_name }}</td>
                                <td class="text-center">{{ $home -> email }}</td>
                                <td class="text-center">{{ $home -> contact }}</td>
                                <td class="text-center">{{ $home -> type }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--register section-->


@endsection

@section('script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imageUpload").change(function () {
        readURL(this);
    });

</script>
@endsection

