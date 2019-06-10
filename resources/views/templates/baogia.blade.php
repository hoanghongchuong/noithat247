@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="active"><a href="#">Báo giá</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="box-content mt-20">
    <div class="container">
        <div class="row ">
            <div class="list-item">
                @foreach($data as $item)
                <div class="col-md-4 col-xs-6 item">
                    <a href="{{url('bao-gia/'.$item->alias.'.html')}}" title="{{$item->name}}">
                        <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}">
                    </a>
                    <p class="name_product"><a href="{{url('bao-gia/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>

@endsection