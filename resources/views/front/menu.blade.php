<ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link active">HOME </a>

                                </li>

                                <li class="nav-item"><a href="{{url('/')}}/about-us" class="nav-link">ABOUT US</a>

                                </li>



                                <li class="nav-item"><a href="#" class="nav-link">OUR SERVICES <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <?php
                                         $Services = DB::table('services')->get();
                                        ?>
                                        @foreach ($Services as $Service)
                                        <li class="nav-item"><a href="{{url('/')}}/our-services/{{$Service->slung}}" class="nav-link">{{$Service->title}} <i class="bx bx-chevron-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                    $Solutions = DB::table('solutions')->where('service_id',$Service->id)->get(); $counter = 1;
                                                ?>
                                                @foreach ($Solutions as $solutions)
                                                <li class="nav-item"><a href="{{url('/')}}/our-services/solutions/{{$solutions->slung}}" class="nav-link">{{$solutions->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="{{url('/sectors')}}" class="nav-link">SECTORS </a>

                                </li>

                                <li class="nav-item"><a href="{{url('/articles')}}" class="nav-link">NEWS & UPDATES </a>

                                </li>
                                <li class="nav-item"><a href="{{url('/')}}/contact-us" class="nav-link">CONTACT US </a>

                                </li>
                            </ul>
