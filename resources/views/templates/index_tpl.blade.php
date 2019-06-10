@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->where('status',1)->where('com','gioi-thieu')->orderBy('id','desc')->get();
?>
<div class="slider">
    <div id="carousel-id1" class="carousel slide" data-ride="carousel">                    
        <div class="carousel-inner">
            @foreach($sliders as $k=>$slider)
            <div class="item @if($k == 0)active @endif">
                <img  alt="Third slide" src="{{asset('upload/hinhanh/'.$slider->photo)}}">                
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel-id1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>

<div class="box-content">
    <div class="container">
        <div class="row">
            <div class="name-cate">Dự án tiêu biểu</div>
            <p class="tac"><img src="{{asset('public/images/icon1.png')}}" alt=""></p>
            <div class="slide-project">
                <div class="owl-carousel owl-carousel-project owl-theme">
                    @foreach($projects as $project)
                    <div class="item">
                        <a href="{{url('du-an/'.$project->alias.'.html')}}" title="{{$project->name}}">
                            <img src="{{asset('upload/news/'.$project->photo)}}" alt="{{$project->name}}">
                            <p class="name_project">{{$project->name}}</p>
                            <p class="">
                                <a href="{{url('du-an/'.$project->alias.'.html')}}" title="{{$project->name}}"><img src="{{asset('public/images/icon2.png')}}" class="img-ke" alt="{{$project->name}}"></a>                                
                            </p>
                            <div class="des-project">{{$project->mota}}</div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="box-content">
    <div class="container">
        <div class="row">
            <div class="name-cate">{{$newsCate[0]->name}}</div>
            <p class="tac"><img src="{{asset('public/images/icon1.png')}}" alt=""></p>
        </div>
        <div class="list-templates-design">
            @foreach($newsCate[0]->cateChilds() as $child)
            <div class="col-md-3 col-xs-6">
                <div class="box-templates">
                    <a href="{{url('danh-muc/'.$child->alias)}}" title="{{$child->name}}">
                        <img src="{{asset('upload/news/'.$child->photo)}}" alt="{{$child->name}}">
                        <div class="name_template">
                            <span>{{$child->name}}</span>
                        </div>
                    </a>
                </div>
            </div> 
            @endforeach             
        </div>
    </div>
</div>
<div class="box-content">
    <div class="container">
        <div class="row">
            <div class="name-cate">{{$newsCate[1]->name}}</div>
            <p class="tac"><img src="{{asset('public/images/icon1.png')}}" alt=""></p>
        </div>
        <div class="list-box">
            @foreach($newsCate[1]->cateChilds() as $child)
            <div class="col-md-3 col-xs-6 item">
                <a href="{{url('danh-muc/'.$child->alias)}}" title="{{$child->name}}">
                    <img src="{{asset('upload/news/'.$child->photo)}}" alt="{{$child->name}}">
                    <p class="name_idea">{{$child->name}}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- box-news -->
<div class="box-content">
    <div class="container">
        <div class="row">
            <div class="name-cate">Tin tức</div>
            <p class="tac"><img src="{{asset('public/images/icon1.png')}}" alt=""></p>
            <div class="box-news-home">
                @foreach($news as $n)
                <div class="col-md-6 col-xs-12 mb-20">
                    <div class="col-md-6 col-xs-12 pdr-0">
                        <a href="{{url('tin-tuc/'.$n->alias.'.html')}}" title="{{$n->name}}"><img src="{{asset('upload/news/'.$n->photo)}}" alt="{{$n->name}}"></a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="name_news_home"><a href="{{url('tin-tuc/'.$n->alias.'.html')}}" title="{{$n->name}}">{{$n->name}}</a></div>
                        <div class="short-news">{!! $n->mota !!}</div>
                        <p class="readmore" style="margin-top: 20px;"><a href="{{url('tin-tuc/'.$n->alias.'.html')}}" title=""><span>Xem thêm</span></a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
