
<div class="container-fluid  ">
  <div class="top-header">
      
        
          <div class="col-md-4">&nbsp;<i class="fas fa-phone">&nbsp;</i>071-549281/9857045414/9867245414</div>
      
        <div class="col-md-2 text-center"><i class="fas fa-envelope mr-2" ></i>&nbsp;info@hubit.com.np</div>
        <div class="col-md-2 text-center " id="miss"></div>
        
        <div class="col-md-2 text-center top-social-icon">
        <a href="facebook.com" class="icon-social" ><i class="fab fa-facebook-square" ></i></a>
        <a href="facebook.com" class="icon-social" ><i class="fab fa-twitter-square" ></i></a>
        <a href="facebook.com" class="icon-social" ><i class="fab fa-linkedin" ></i></a>
        <a href="facebook.com" class="icon-social" ><i class="fab fa-instagram" ></i></a>
        <a href="facebook.com" class="icon-social" ><i class="fab fa-youtube" ></i></a>

        <a href="facebook.com" class="icon-social" ><i class="fab fa-google" ></i></a>
        </div>
        <div class="col-md-1 hire-talent"><button>Hire Talent</button></div>

        
        <div class="col-md-1 sign-up"><a href="{{url('login')}}"><i class="fas fa-user"></i></a></div>

  </div> 
</div>

<nav class="navbar navbar-expand-sm  sticky-top " id="head" style="position:sticky; ">

<div class="container" id="image">
<a href="{{route('frontend.index')}}"><img src="{{asset('img/logo4.png')}}"></a></div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<i class="fas fa-bars"></i>
</button>
<button class="online-admission-button shortcut " type="button"  ><a href="{{url('online-admission')}}">Online-ADM</a>
</button>
<button class="ticket-support-button shortcut" type="button"  > <a href="{{url('ticket-support')}}">Ticket-support</a>
</button>


  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('frontend.it-solution')}}" id="navitems">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('frontend.product')}}" id="navitems">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('frontend.service')}}" id="navitems">Services</a>
        </li>
        <li class="dropdown nav-item"style="height:40px;" >
          <a class="nav-link" id="navitems">gallery</a>
          <ul class="dropdown-menu">
             @if(isset($globalGallaryCategories))
            @foreach($globalGallaryCategories as $key => $globalGallaryCategory)
              <li><a class="dropdown-item" href="{{route('frontend.gallary_category', $globalGallaryCategory->slug)}}" >{{ $globalGallaryCategory->title}}</a></li>
            @endforeach
            @endif
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{url('online-admission')}}" id="navitems">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('ticket-support')}}" id="navitems">Ticket support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}" id="navitems">Contact Us</a>
        </li> 
    </ul>
  </div> 
</nav>

<script>
        var a = ['For Enquiry Call Us On', '9857045414'];

        textSequence(0);
        function textSequence(i) {

            if (a.length > i) {
                setTimeout(function() {
                    document.getElementById("miss").innerHTML = a[i];
                    textSequence(++i);
                }, 2000); // 1 second (in milliseconds)

            } else if (a.length == i) { // Loop
                textSequence(0);
            }

        }
    </script>

