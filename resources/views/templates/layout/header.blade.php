<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $categories = App\NewsCate::where('com','post')->where('parent_id',0)->get();
?>
<div class="top-header">
    <div class="container">
        <a href="{{$setting->facebook}}" title=""><i class="fa fa-facebook"></i></a>
        <a href="{{$setting->google}}" title=""><i class="fa fa-google"></i></a>
        <a href="{{$setting->youtube}}" title=""><i class="fa fa-youtube"></i></a>
    </div>
</div>
<header id="header" class="">        
    <div class="container">
        <div class="row">
            <div class="col-md-3 img-logo">
                <a href="{{url('')}}" title="">
                    <img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <p class="name-company">{{$setting->company}}</p>
            </div>
            <div class="col-md-4">
                <div class="info-right">
                    <p class="email"><i class="fa fa-envelope"></i> {{$setting->email}}</p>
                    <p class="email"><i class="fa fa-phone"></i> {{$setting->phone}}</p>
                    <p class="email"><i class="fa fa-clock"></i> 08:00 - 18:00</p>
                </div>
            </div>
        </div>
        <!-- menu-mobile -->                        
    </div>
</header><!-- /header -->
<!-- menu -->
<div class="menu visible-lg visible-md">
    <div class="container">
        <div class="row">
            <ul class="navi">                                        
                <li><a href="{{url('')}}">Trang chủ</a></li>
                <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                @foreach($categories as $cate)
                <li>
                    <a href="{{url('danh-muc/'.$cate->alias)}}">{{$cate->name}}</a>
                    <ul class="vk-menu__child">                                
                        @foreach($cate->cateChilds() as $cateChild)
                        <li><a href="{{url('danh-muc/'.$cateChild->alias)}}">{{$cateChild->name}}</a></li>
                        @endforeach                     
                    </ul>
                </li>
                @endforeach                        
                <li><a href="{{url('bao-gia')}}">Báo giá</a></li>          
                <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>                            
                <!-- <li><a href="">Liên hệ</a></li> -->
                <li>
                    <a href="javascript:;" class="show-box-search"><i class="fa fa-search"></i></a>
                    <div class="box-search">
                        <form action="{{route('search')}}" method="get" accept-charset="utf-8">
                           <input type="text" name="txtSearch" class="input-search" value="" placeholder="">
                        </form>                        
                    </div>
                </li>
            </ul>            
        </div>
    </div>
</div><!-- /menu -->

<!-- menu-mobile -->
<div class="visible-xs visible-sm menu-mobile">     
    <div class="vk-header__search">
        <div class="container">                
            <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            
            <li><a href="{{url('')}}">Trang chủ</a></li>
            <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>  
            @foreach($categories as $k=>$cate)              
            <li>
                <a href="{{url('danh-muc/'.$cate->alias)}}">{{$cate->name}}</a>
                <a href="#menu{{$k}}" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu{{$k}}">
                    @foreach($cate->cateChilds() as $cateChild)
                        <li><a href="{{url('danh-muc/'.$cateChild->alias)}}">{{$cateChild->name}}</a></li>
                    @endforeach                                                
                </ul>
            </li>
            @endforeach                       
            <li><a href="{{url('bao-gia')}}">Báo giá</a></li>          
            <li><a href="{{url('tin-tuc')}}">Tin tức</a></li> 
        </ul>
    </nav>        
</div>    
<!-- /menu-mobile -->