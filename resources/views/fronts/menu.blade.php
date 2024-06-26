
<ul class="nav navbar-nav" id="main-navigation">
    <li class="active"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
    {{--  --}}
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> About Us <i class="fa fa-angle-down icon-angle"></i></a>
        <ul class="dropdown-menu" role="menu">
            <?php
               $Cores = DB::table('cores')->get();
            ?>
            @foreach ($Cores as $core)
                <li><a href="{{url('/')}}/services/{{$core->slung}}">{{$core->title}}</a></li>
            @endforeach
        </ul>
    </li>
    {{--  --}}
    <li><a href="{{url('/')}}/center-of-excellence"><i class="fa fa-user"></i> Our Services </a></li>
    <li><a href="{{url('/')}}/why-pr"><i class="fa fa-check-circle "></i> Why PR</a></li>
    <li><a href="{{url('/')}}/articles"><i class="fa fa-edit"></i> News</a></li>
    <li><a href="{{url('/')}}/contact-us"><i class="fa fa-envelope"></i> Contact Us</a></li>
    <li><a href="{{url('/')}}/contact-us"><i class="fa fa-map-marker"></i> Find Us</a></li>
    <li><a href="tel:+254710760015"><i class="fa fa-phone"></i> Call Us</a></li>
    <!-- Cart Icon Starts -->
    {{-- <li class="cart hidden-xs hidden-sm"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li> --}}
    <!-- Cart Icon Starts -->
    <!-- Search Icon Starts -->
    <li class="search hidden-xs hidden-sm"><button id="search-button" class="fa fa-search"></button></li>
    <!-- Search Icon Ends -->
</ul>
