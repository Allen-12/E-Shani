@extends('layouts.profile')
@section('content')
  <br>  <br>  <br>  <br>
    <h1 class="display-4 text-center">Welcome Back Caroline</h1>
    <p class="lead text-center">which child is watching?</p>
    <br>  <br>  <br>  <br>

<div class="container ">
<ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s uk-text-center" uk-sortable="handle: .uk-card" uk-grid>
   <li>
       <div class="uk-card uk-card-default uk-card-body">Liam</div>
   </li>
   <li>
       <div class="uk-card uk-card-default uk-card-body">Leo</div>
   </li>
   <li>
       <div class="uk-card uk-card-default uk-card-body">Allen</div>
   </li>
   <li>
       <div class="uk-card uk-card-default uk-card-body"><span uk-icon="plus"></span></div>
   </li>

</ul>
<br>
<div class="uk-flex uk-flex-center">
<button type="button" class="btn btn-info btn-lg  ">Manage Profiles</button>
</div>
</div>
<br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>
@endsection
