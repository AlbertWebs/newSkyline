@extends('front.master')

@section('content')

@foreach ($Service as $Ser)


    <!-- Banner Starts -->
    <section class="banner" style="background-image: url('{{url('/')}}/uploads/services/{{$Ser->image}}'); background-size: cover; background-repeat: no-repeat; background-position: center top; background-attachment: fixed;">
        <div class="content text-center">
            <div class="text-center top-text">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1>{{$Ser->title}}</h1>
                </div>
                <!-- Main Heading Ends -->
                <hr>
                <!-- Breadcrumb Starts -->
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}"> home</a></li>
                    <li><a href="{{url('/')}}/center-of-excellence"> Pr And Communication Services </a></li>
                    <li>{{$Ser->title}}</li>
                </ul>
                <!-- Breadcrumb Ends -->
            </div>
        </div>
    </section>
    <!-- Banner Ends -->
    <section class="project" style="padding: 80px;">
        <div class="row services-box">
            <!-- Service Item Starts -->
            <div class="col-sm-12 col-md-12 col-xs-12 text-center" style="border:3px solid #daa520; padding:10px; border-radius:10px;">
                <div class="latest-post">
                    <!-- Featured Image Starts -->
                    <a class="img-thumb" href="{{url('/')}}/center-of-excellence/{{$Ser->slung}}"><img class="img-responsive" src="{{url('/')}}/uploads/services/{{$Ser->image}}" alt="img"></a>
                    <!-- Featured Image Ends -->
                    <!-- Article Content Starts -->
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="{{url('/')}}/center-of-excellence/{{$Ser->slung}}">{{$Ser->title}}</a>
                        </h4>
                        <div class="post-text"  style="list-style: none !important">
                            <p style="list-style: none !important">
                                {!! html_entity_decode($Ser->content, ENT_QUOTES, 'UTF-8') !!}
                            </p>
                        </div>
                    </div>
                    {{-- <a style="color:#23527c" class="custom-button" href="{{url('/')}}/center-of-excellence/{{$Ser->slung}}">Learn More</a> --}}
                    <!-- Article Content Ends -->
                </div>
            </div>
        </div>
    </section>
    <!-- Services Ends -->



    <!-- Project Ends -->

    {{-- Content Ends --}}
    @endforeach
@endsection
