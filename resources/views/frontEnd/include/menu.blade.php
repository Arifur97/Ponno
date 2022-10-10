<section style="height: 50px;">
    <nav class="navbar navbar-default navbar-sticky bootsnav" style="background-color: #dcddde;">
        <div class="container" >
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown megamenu-fw"> <a href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown megamenu-fw">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">{{$healthAndBeauty->category_name}}</a>
                        @if(!$habFirstSixSubCategories->isEmpty())
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($habFirstSixSubCategories as $habFirstSixSubCategory)
                                                <li><a href="{{ url('/category/'.$habFirstSixSubCategory->id) }}">{{ $habFirstSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($habSecondSixSubCategories as $habSecondSixSubCategory)
                                                <li><a href="{{ url('/category/'.$habSecondSixSubCategory->id) }}">{{ $habSecondSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($habThirdSixSubCategories as $habThirdSixSubCategory)
                                                <li><a href="{{ url('/category/'.$habThirdSixSubCategory->id) }}">{{ $habThirdSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($habFourthSixSubCategories as $habFourthSixSubCategory)
                                                <li><a href="{{ url('/category/'.$habFourthSixSubCategory->id) }}">{{ $habFourthSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                        @endif
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$clothing->category_name}}</a>
                        @if(!$cloFirstSixSubCategories->isEmpty())
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($cloFirstSixSubCategories as $cloFirstSixSubCategory)
                                                <li><a href="{{ url('/category/'.$cloFirstSixSubCategory->id) }}">{{ $cloFirstSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($cloSecondSixSubCategories as $cloSecondSixSubCategory)
                                                <li><a href="{{ url('/category/'.$cloSecondSixSubCategory->id) }}">{{ $cloSecondSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($cloThirdSixSubCategories as $cloThirdSixSubCategory)
                                                <li><a href="{{ url('/category/'.$cloThirdSixSubCategory->id) }}">{{ $cloThirdSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($cloFourthSixSubCategories as $cloFourthSixSubCategory)
                                                <li><a href="{{ url('/category/'.$cloFourthSixSubCategory->id) }}">{{ $cloFourthSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">

                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                        @endif
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$footwear->category_name}}</a>
                        @if(!$fooFirstSixSubCategories->isEmpty())
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($fooFirstSixSubCategories as $fooFirstSixSubCategory)
                                                <li><a href="{{ url('/category/'.$fooFirstSixSubCategory->id) }}">{{ $fooFirstSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($fooSecondSixSubCategories as $fooSecondSixSubCategory)
                                                <li><a href="{{ url('/category/'.$fooSecondSixSubCategory->id) }}">{{ $fooSecondSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($fooThirdSixSubCategories as $fooThirdSixSubCategory)
                                                <li><a href="{{ url('/category/'.$fooThirdSixSubCategory->id) }}">{{ $fooThirdSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($fooFourthSixSubCategories as $fooFourthSixSubCategory)
                                                <li><a href="{{ url('/category/'.$fooFourthSixSubCategory->id) }}">{{ $fooFourthSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                        @endif
                    </li>

                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$jewelry->category_name}}</a>
                        @if(!$jewFirstSixSubCategories->isEmpty())
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($jewFirstSixSubCategories as $jewFirstSixSubCategory)
                                                <li><a href="{{ url('/category/'.$jewFirstSixSubCategory->id) }}">{{ $jewFirstSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($jewSecondSixSubCategories as $jewSecondSixSubCategory)
                                                <li><a href="{{ url('/category/'.$jewSecondSixSubCategory->id) }}">{{ $jewSecondSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($jewThirdSixSubCategories as $jewThirdSixSubCategory)
                                                <li><a href="{{ url('/category/'.$jewThirdSixSubCategory->id) }}">{{ $jewThirdSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($jewFourthSixSubCategories as $jewFourthSixSubCategory)
                                                <li><a href="{{ url('/category/'.$jewFourthSixSubCategory->id) }}">{{ $jewFourthSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                        @endif
                    </li>

                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$lifestyle->category_name}}</a>
                        @if(!$lisFirstSixSubCategories->isEmpty())
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($lisFirstSixSubCategories as $lisFirstSixSubCategory)
                                                <li><a href="{{ url('/category/'.$lisFirstSixSubCategory->id) }}">{{ $lisFirstSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($lisSecondSixSubCategories as $lisSecondSixSubCategory)
                                                <li><a href="{{ url('/category/'.$lisSecondSixSubCategory->id) }}">{{ $lisSecondSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($lisThirdSixSubCategories as $lisThirdSixSubCategory)
                                                <li><a href="{{ url('/category/'.$lisThirdSixSubCategory->id) }}">{{ $lisThirdSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">

                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($lisFourthSixSubCategories as $lisFourthSixSubCategory)
                                                <li><a href="{{ url('/category/'.$lisFourthSixSubCategory->id) }}">{{ $lisFourthSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                        @endif
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$islamic->category_name}}</a>
                        @if(!$iscFirstSixSubCategories->isEmpty())
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($iscFirstSixSubCategories as $iscFirstSixSubCategory)
                                                <li><a href="{{ url('/category/'.$iscFirstSixSubCategory->id) }}">{{ $iscFirstSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($iscSecondSixSubCategories as $iscSecondSixSubCategory)
                                                <li><a href="{{ url('/category/'.$iscSecondSixSubCategory->id) }}">{{ $iscSecondSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">

                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($iscThirdSixSubCategories as $iscThirdSixSubCategory)
                                                <li><a href="{{ url('/category/'.$iscThirdSixSubCategory->id) }}">{{ $iscThirdSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($iscFourthSixSubCategories as $iscFourthSixSubCategory)
                                                <li><a href="{{ url('/category/'.$iscFourthSixSubCategory->id) }}">{{ $iscFourthSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                        @endif
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$giftItem->category_name}}</a>
                        @if(!$giiFirstSixSubCategories->isEmpty())
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($giiFirstSixSubCategories as $giiFirstSixSubCategory)
                                                <li><a href="{{ url('/category/'.$giiFirstSixSubCategory->id) }}">{{ $giiFirstSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($giiSecondSixSubCategories as $giiSecondSixSubCategory)
                                                <li><a href="{{ url('/category/'.$giiSecondSixSubCategory->id) }}">{{ $giiSecondSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">

                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($giiThirdSixSubCategories as $giiThirdSixSubCategory)
                                                <li><a href="{{ url('/category/'.$giiThirdSixSubCategory->id) }}">{{ $giiThirdSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($giiFourthSixSubCategories as $giiFourthSixSubCategory)
                                                <li><a href="{{ url('/category/'.$giiFourthSixSubCategory->id) }}">{{ $giiFourthSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                        @endif
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$footItem->category_name}}</a>
                        @if(!$foiFirstSixSubCategories->isEmpty())
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($foiFirstSixSubCategories as $foiFirstSixSubCategory)
                                                <li><a href="{{ url('/category/'.$foiFirstSixSubCategory->id) }}">{{ $foiFirstSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">

                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($foiSecondSixSubCategories as $foiSecondSixSubCategory)
                                                <li><a href="{{ url('/category/'.$foiSecondSixSubCategory->id) }}">{{ $foiSecondSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">

                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($foiThirdSixSubCategories as $foiThirdSixSubCategory)
                                                <li><a href="{{ url('/category/'.$foiThirdSixSubCategory->id) }}">{{ $foiThirdSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">

                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <ul class="menu-col">
                                            @foreach($foiFourthSixSubCategories as $foiFourthSixSubCategory)
                                                <li><a href="{{ url('/category/'.$foiFourthSixSubCategory->id) }}">{{ $foiFourthSixSubCategory->sub_category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="content">
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                        @endif
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</section>
