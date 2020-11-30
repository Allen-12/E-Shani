@extends('layouts.profile')
@section('content')
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>

    <h1 class="display-4 text-center">Welcome Back {{ $user->name }}</h1>
    <p class="lead text-center">Which child is watching?</p>
    <br>  <br>

    <div class="container ">
        <ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s uk-text-center" uk-sortable="handle: .uk-card" uk-grid>
            @forelse($children as $child)
                <li>
                    <div>
                        <div class="uk-card uk-card-default uk-card">
                            <div class="uk-card-media-top">
                                <a href="/profiles/{{ $child->id }}/show"> <img src="{{ $child->image }}" alt=""></a>
                            </div>
                            <div class="uk-card-body">
                                <h3> <a href="/profiles/{{ $child->id }}/show">{{ $child->name }}</a></h3>
                                <a id="edit_user" data-update-link="{{ route('profile.update', $child->id) }}" data-toggle="modal" data-target="#edituser" style="color:#00BCD4">  <span uk-icon="pencil">Edit User</span></a>
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li>
                    <div class="uk-card uk-card-default uk-card-body">No Child Profiles Available</div>
                </li>
            @endforelse
            <li>
                <div class="uk-card uk-card-default uk-card-body">
                    <a data-toggle="modal" data-target="#newuser" ><span uk-icon="plus" ></span>
                        <p>Add New Child</p>
                    </a>
                </div>
            </li>
        </ul>
        <br>

    </div>
    <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>

<!-- create user profile Modal -->
<div class="modal fade" id="newuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ml-auto mr-auto">
                            <div class="card card-login">
                                <form class="form" method="post" action="/profiles" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header card-header-primary text-center">
                                        <h4 class="card-title">Add Profile</h4>
                                    </div>
                                    <p class="description text-center">Add a profile for another Child that is Using Kindy-E</p>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputState">Child's name</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="First Name...">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputState">Age Group</label>
                                            <select name="age" class="form-control">
                                                <option>Select an age group</option>
                                                <option value="1">4-5 years old</option>
                                                <option value="2">5-6 years old</option>
                                                <option value="3">7-8 years old</option>
                                            </select>
                                        </div>
                                        @error('age')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <label for="inputState">Choose Profile picture</label>
                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/hv3gV2Lt/Screenshot-2020-10-30-140942.png"/>
                                                <img src="https://i.postimg.cc/hv3gV2Lt/Screenshot-2020-10-30-140942.png" alt=""/>
                                            </label>

                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/SQZy0xBb/Screenshot-2020-10-30-141016.png"/>
                                                <img src="https://i.postimg.cc/SQZy0xBb/Screenshot-2020-10-30-141016.png" alt=""/>
                                            </label>

                                            <label class="avatars">
                                                <input type="radio"name="image" value="https://i.postimg.cc/0jNP6TJ4/Screenshot-2020-10-30-141044.png"/>
                                                <img src="https://i.postimg.cc/0jNP6TJ4/Screenshot-2020-10-30-141044.png" alt=""/>
                                            </label>

                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/X7pnn0WG/Screenshot-2020-10-30-141113.png"/>
                                                <img src="https://i.postimg.cc/X7pnn0WG/Screenshot-2020-10-30-141113.png" alt=""/>
                                            </label>

                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/Tw0T3dhm/Screenshot-2020-10-30-141205.png"/>
                                                <img src="https://i.postimg.cc/Tw0T3dhm/Screenshot-2020-10-30-141205.png" alt="" />
                                            </label>

                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/0QP8vM5P/Screenshot-2020-10-30-141352.png"/>
                                                <img src="https://i.postimg.cc/0QP8vM5P/Screenshot-2020-10-30-141352.png" alt="" />
                                            </label>
                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/9fGWsthL/Screenshot-2020-10-30-141438.png"/>
                                                <img src="https://i.postimg.cc/9fGWsthL/Screenshot-2020-10-30-141438.png" alt="" />
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="footer text-center">
                                        <button class="btn btn-rose btn-round " id="submitButton" type="submit">Add Child</button>
                                        <button class="btn btn-default btn-round " data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- edit user modal -->
<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ml-auto mr-auto">
                            <div class="card card-login">
                                <form id="edit_user_form" class="form" method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')

                                    <div class="card-header card-header-primary text-center">
                                        <h4 class="card-title">Edit Profile</h4>
                                    </div>
                                    <p class="description text-center">Edit the profile of this Child that is Using Kindy-E</p>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputState">Child's name</label>
                                            <input type="text" name="name" id="edit_name" class="form-control" placeholder="First Name...">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
{{--                                        <div class="form-group">--}}
{{--                                            <label for="inputState">Age Group</label>--}}
{{--                                            <select name="age" class="form-control">--}}
{{--                                                <option disabled>Select an age group</option>--}}
{{--                                                <option value="1">4-5 years old</option>--}}
{{--                                                <option value="2">5-6 years old</option>--}}
{{--                                                <option value="3">7-8 years old</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        @error('age')--}}
{{--                                            <small class="text-danger">{{ $message }}</small>--}}
{{--                                        @enderror--}}

                                        <label for="inputState">Update Profile picture</label>
                                        <div id="">
                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/hv3gV2Lt/Screenshot-2020-10-30-140942.png"/>
                                                <img src="https://i.postimg.cc/hv3gV2Lt/Screenshot-2020-10-30-140942.png" alt=""/>
                                            </label>

                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/SQZy0xBb/Screenshot-2020-10-30-141016.png"/>
                                                <img src="https://i.postimg.cc/SQZy0xBb/Screenshot-2020-10-30-141016.png" alt=""/>
                                            </label>

                                            <label class="avatars">
                                                <input type="radio"name="image" value="https://i.postimg.cc/0jNP6TJ4/Screenshot-2020-10-30-141044.png"/>
                                                <img src="https://i.postimg.cc/0jNP6TJ4/Screenshot-2020-10-30-141044.png" alt=""/>
                                            </label>

                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/X7pnn0WG/Screenshot-2020-10-30-141113.png"/>
                                                <img src="https://i.postimg.cc/X7pnn0WG/Screenshot-2020-10-30-141113.png" alt=""/>
                                            </label>

                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/Tw0T3dhm/Screenshot-2020-10-30-141205.png"/>
                                                <img src="https://i.postimg.cc/Tw0T3dhm/Screenshot-2020-10-30-141205.png" alt="" />
                                            </label>

                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/0QP8vM5P/Screenshot-2020-10-30-141352.png"/>
                                                <img src="https://i.postimg.cc/0QP8vM5P/Screenshot-2020-10-30-141352.png" alt="" />
                                            </label>
                                            <label class="avatars">
                                                <input type="radio" name="image" value="https://i.postimg.cc/9fGWsthL/Screenshot-2020-10-30-141438.png"/>
                                                <img src="https://i.postimg.cc/9fGWsthL/Screenshot-2020-10-30-141438.png" alt="" />
                                            </label>
                                        @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="footer text-center">
                                        <button class="btn btn-rose btn-round " id="submitButton" type="submit">Edit profile</button>
                                        <button class="btn btn-default btn-round " data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
