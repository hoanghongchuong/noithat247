@extends('index')
@section('content')

<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="active"><a href="">{{$data->name}}</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="box-content news_detail">
    <div class="container">
        <div class="row ">
            <div class="content_detail">
                <h1>{{$data->name}}</h1>
                {!! $data->content !!}
            </div>
        </div>
        
    </div>
</div>
@endsection

