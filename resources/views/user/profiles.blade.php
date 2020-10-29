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

    <br>  <br>  <br>  <br>
    <h1 class="display-4 text-center">Welcome Back {{ $user->name }}</h1>
    <p class="lead text-center">which child is watching?</p>
    <br>  <br>  <br>  <br>

    <div class="container ">
        <ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s uk-text-center" uk-sortable="handle: .uk-card" uk-grid>
            @forelse($children as $child)
                <li>
                    <div class="uk-card uk-card-default uk-card-body"><a href="/profiles/{{ $child->id }}/show">{{ $child->name }}</a></div>
                </li>
            @empty
                <li>
                    <div class="uk-card uk-card-default uk-card-body">No Child Profiles Available</div>
                </li>
            @endforelse
            <li>
                <a href="/profiles/create" class="uk-card uk-card-default uk-card-body"><span uk-icon="plus"></span></a>
            </li>
        </ul>
        <br>
        <div class="uk-flex uk-flex-center">
            <button type="button" class="btn btn-info btn-lg ">Manage Profiles</button>
        </div>
    </div>
    <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>
@endsection
