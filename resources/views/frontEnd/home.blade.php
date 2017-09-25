@extends('frontEnd.layout')

@section('content')

        <!-- start Home Slider -->
@include('frontEnd.includes.slider')
        <!-- end Home Slider -->


@if(count($TextBanners)>0)
    @foreach($TextBanners->slice(0,1) as $TextBanner)
        <?php
        try {
            $TextBanner_type = $TextBanner->webmasterBanner->type;
        } catch (Exception $e) {
            $TextBanner_type = 0;
        }
        ?>
    @endforeach
    <?php
    $title_var = "title_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $file_var = "file_" . trans('backLang.boxCode');

    $col_width = 12;
    if (count($TextBanners) == 2) {
        $col_width = 6;
    }
    if (count($TextBanners) == 3) {
        $col_width = 4;
    }
    if (count($TextBanners) > 3) {
        $col_width = 3;
    }
    ?>
    <section class="content-row-no-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($TextBanners as $TextBanner)
                            <div class="col-lg-{{$col_width}}">
                                <div class="box">
                                    <div class="box-gray aligncenter">
                                        @if($TextBanner->icon !="")
                                            <div class="icon">
                                                <i class="fa {{$TextBanner->icon}} fa-3x"></i>
                                            </div>
                                        @elseif($TextBanner->$file_var !="")
                                            <img src="{{ URL::to('uploads/banners/'.$TextBanner->$file_var) }}"
                                                 alt="{{ $TextBanner->$title_var }}"/>
                                        @endif
                                        <h4>{!! $TextBanner->$title_var !!}</h4>
                                        @if($TextBanner->$details_var !="")
                                            <p>{!! nl2br($TextBanner->$details_var) !!}</p>
                                        @endif

                                    </div>
                                    @if($TextBanner->link_url !="")
                                        <div class="box-bottom">
                                            <a href="{!! $TextBanner->link_url !!}">{{ trans('frontLang.moreDetails') }}</a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

@if(count($HomeTopics)>0)
    <section class="content-row-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="home-row-head">
                        <h3 class="heading">{{ trans('frontLang.homeContents1Title') }}</h3>
                        <small>{{ trans('frontLang.homeContents1desc') }}</small>
                    </div>
                    <div class="row">
                        <?php
                        $title_var = "title_" . trans('backLang.boxCode');
                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                        $details_var = "details_" . trans('backLang.boxCode');
                        $details_var2 = "details_" . trans('backLang.boxCodeOther');
                        $section_url = "";
                        ?>
                        @foreach($HomeTopics as $HomeTopic)
                            <?php
                            if ($HomeTopic->$title_var != "") {
                                $title = $HomeTopic->$title_var;
                            } else {
                                $title = $HomeTopic->$title_var2;
                            }
                            if ($HomeTopic->$details_var != "") {
                                $details = $details_var;
                            } else {
                                $details = $details_var2;
                            }
                            $section_url = $HomeTopic->webmasterSection->name;
                            ?>
                            <div class="col-lg-4 text-center">
                                <h4>
                                    @if($HomeTopic->icon !="")
                                        <i class="fa {!! $HomeTopic->icon !!} "></i>&nbsp;
                                    @endif
                                    {{ $title }}
                                </h4>
                                @if($HomeTopic->photo_file !="")
                                    <img src="{{ URL::to('uploads/topics/'.$HomeTopic->photo_file) }}"
                                         alt="{{ $title }}"/>
                                @endif
                                <p class="text-justify">{{ str_limit(strip_tags($HomeTopic->$details), $limit = 400, $end = '...') }}
                                    &nbsp; <a href="{{route('FrontendTopic',["section"=>$HomeTopic->webmasterSection->name,"id"=>$HomeTopic->id])}}">{{ trans('frontLang.readMore') }}
                                        <i
                                                class="fa fa-caret-{{ trans('backLang.right') }}"></i></a>
                                </p>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="more-btn">
                            <a href="{{ url($section_url) }}" class="btn btn-theme"><i
                                        class="fa fa-angle-left"></i>&nbsp; {{ trans('frontLang.viewMore') }}
                                &nbsp;<i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

        </div>
    </section>
@endif


@if(count($HomePhotos)>0)
    <section class="content-row-no-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="home-row-head">
                        <h3 class="heading">{{ trans('frontLang.homeContents2Title') }}</h3>
                        <small>{{ trans('frontLang.homeContents2desc') }}</small>
                    </div>
                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs" class="portfolio">
                                <?php
                                $title_var = "title_" . trans('backLang.boxCode');
                                $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                $section_url = "";
                                $ph_count = 0;
                                ?>
                                @foreach($HomePhotos as $HomePhoto)
                                    <?php
                                    if ($HomePhoto->$title_var != "") {
                                        $title = $HomePhoto->$title_var;
                                    } else {
                                        $title = $HomePhoto->$title_var2;
                                    }
                                    $section_url = $HomePhoto->webmasterSection->name;
                                    ?>
                                    @foreach($HomePhoto->photos as $photo)
                                        @if($ph_count<12)
                                            <li class="col-lg-2 design" data-id="id-0" data-type="web">
                                                <div class="relative">
                                                    <div class="item-thumbs">
                                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                                           title="{{ $title }}"
                                                           href="{{ URL::to('uploads/topics/'.$photo->file) }}">
                                                            <span class="overlay-img"></span>
                                                            <span class="overlay-img-thumb"><i class="fa fa-search-plus"></i></span>
                                                        </a>
                                                        <!-- Thumb Image and Description -->
                                                        <img src="{{ URL::to('uploads/topics/'.$photo->file) }}"
                                                             alt="{{ $title }}">
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        <?php
                                        $ph_count++;
                                        ?>
                                    @endforeach
                                @endforeach

                            </ul>
                        </section>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more-btn">
                                <a href="{{ url($section_url) }}" class="btn btn-theme"><i
                                            class="fa fa-angle-left"></i>&nbsp; {{ trans('frontLang.viewMore') }}
                                    &nbsp;<i
                                            class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    @endif


                </div>
            </div>
        </div>
    </section>

    @endsection