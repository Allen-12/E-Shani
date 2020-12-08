@extends('layouts.profile')
@section('content')


<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Navbar</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<div class="jumbotron  justify-content-center" style= "background-image: url('https://images.unsplash.com/photo-1549490349-8643362247b5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8YXJ0fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
  <h1 class="display-4" style="color:White; Text-align:center">Hello, Doe!</h1>
  <p class="lead" style="color:White; Text-align:center">Choose a topic for doe from our selected topics</p>



</div>
<div class="container">
  <h1 class="display-4" style=" Text-align:center">Uploaded topics.</h1>
<div class="uk-child-width-1-4@m" uk-grid>

    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
              <!-- Button trigger modal -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              <img src="https://images.unsplash.com/photo-1517697471339-4aa32003c11a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            </div>
            <div class="uk-card-body">
           <h3 class="uk-card-title">Arts And Crafts</h3>
           <p>Let your child learn proper art</p></a>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
              <!-- Button trigger modal -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              <img src="https://images.unsplash.com/photo-1517697471339-4aa32003c11a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            </div>
            <div class="uk-card-body">
           <h3 class="uk-card-title">Arts And Crafts</h3>
           <p>Let your child learn proper art</p></a>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
              <!-- Button trigger modal -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              <img src="https://images.unsplash.com/photo-1517697471339-4aa32003c11a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            </div>
            <div class="uk-card-body">
           <h3 class="uk-card-title">Arts And Crafts</h3>
           <p>Let your child learn proper art</p></a>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
              <!-- Button trigger modal -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              <img src="https://images.unsplash.com/photo-1517697471339-4aa32003c11a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            </div>
            <div class="uk-card-body">
           <h3 class="uk-card-title">Arts And Crafts</h3>
           <p>Let your child learn proper art</p></a>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
              <!-- Button trigger modal -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              <img src="https://images.unsplash.com/photo-1517697471339-4aa32003c11a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
            </div>
            <div class="uk-card-body">
           <h3 class="uk-card-title">Arts And Crafts</h3>
           <p>Let your child learn proper art</p></a>
            </div>
        </div>
    </div>



</div>
</div>

<!-- Modal for entering session -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Parental Guidance is being triggered</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Your child will not be able to navigate to other tabs without your attention.
        PROCEED?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-primary">YES</button>
      </div>
    </div>
  </div>
</div>
@endsection
