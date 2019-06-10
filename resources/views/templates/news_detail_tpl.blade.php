@extends('index')
@section('content')

<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="active"><a href="">{{$news_detail->name}}</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="box-content news_detail">
    <div class="container">
        <div class="row ">
            <div class="content_detail">
                <h1>{{$news_detail->name}}</h1>
                {!! $news_detail->content !!}
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <h3>Bài viết liên quan</h3>
            <div class="owl-carousel owl-carousel-product owl-theme">                
                @foreach($newsSameCate as $post)
                <div class="item">
                    <a href="{{url('tin-tuc/'.$post->alias.'.html')}}" title="{{$post->name}}">
                        <img src="{{asset('upload/news/'.$post->photo)}}" alt="{{$post->name}}">
                        <p class="name_product">{{$post->name}}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

