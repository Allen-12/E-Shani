
 <!-- Navigation -->

 <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg bg-info"  color-on-scroll="100">
   <div class="container">
       <div class="navbar-translate">
           <a href="/"><img src="{{URL::to('logo.png')}}"></a>


           <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
           <span class="sr-only">Toggle navigation</span>
           <span class="navbar-toggler-icon"></span>
           <span class="navbar-toggler-icon"></span>
           <span class="navbar-toggler-icon"></span>
           </button>
       </div>

       <div class="collapse navbar-collapse">
           <ul class="navbar-nav">
               <li class="nav-item active">
                   <button class="btn btn-primary btn-round">Sign up</button>
               </li>
               <li class="nav-item">
                   <a href="#pablo" class="nav-link">log in</a>
               </li>

           <form class="form-inline ml-auto ">
               <div class="form-group no-border">

                 <input type="text" class="form-control" placeholder="Search">
                 <span class="bmd-help">All the videos you are looking for</span>
               </div>
               <button type="submit" class="btn btn-white btn-just-icon btn-round">
                   <i class="material-icons">search</i>
               </button>
           </form>
   </ul>
       </div>
   </div>
 </nav>
