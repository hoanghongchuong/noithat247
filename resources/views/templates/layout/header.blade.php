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
                <a href="" title="">
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
                <li>
                    <a href="">Thiết kế mới</a>
                    <ul class="vk-menu__child">                                
                        <li><a href="#">Thiết kế - thi công nội thất chung cư</a></li>
                        <li><a href="#">Thiết kế - thi công nội thất biệt thự</a></li>
                        <li><a href="#">Thiết kế - thi công nội thất nhà phố</a></li>
                        <li><a href="#">Thiết kế - thi công nội thất nhà liền kề</a></li>
                        <li><a href="" title="">Phòng khách</a></li>                        
                        <li><a href="" title="">Phòng ngủ</a></li>          
                        <li><a href="#">Phòng trẻ em</a></li>                        
                    </ul>
                </li>
                <li>
                    <a href="">Các mẫu nhà</a>
                    <ul class="vk-menu__child">                                
                        <li><a href="#">Thiết kế - thi công nội thất chung cư</a></li>
                        <li><a href="#">Thiết kế - thi công nội thất biệt thự</a></li>
                        <li><a href="#">Thiết kế - thi công nội thất nhà phố</a></li>
                        <li><a href="#">Thiết kế - thi công nội thất nhà liền kề</a></li>
                        <li><a href="" title="">Phòng khách</a></li>                        
                        <li><a href="" title="">Phòng ngủ</a></li>          
                        <li><a href="#">Phòng trẻ em</a></li>                        
                    </ul>
                </li>
                <li>
                    <a href="">Ý tưởng thiết kế</a>
                    <ul class="vk-menu__child">                                
                        <li><a href="#">Thiết kế - thi công nội thất chung cư</a></li>
                        <li><a href="#">Thiết kế - thi công nội thất biệt thự</a></li>
                        <li><a href="#">Thiết kế - thi công nội thất nhà phố</a></li>
                        <li><a href="#">Thiết kế - thi công nội thất nhà liền kề</a></li>
                        <li><a href="" title="">Phòng khách</a></li>                        
                        <li><a href="" title="">Phòng ngủ</a></li>          
                        <li><a href="#">Phòng trẻ em</a></li>                        
                    </ul>
                </li>                         
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
            <li>
                <a href="">Thiết kế mới</a>
                <a href="#menu2" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu2">
                    <li><a href="#">Khóa điện tử thẻ từ</a></li>
                    <li><a href="#">Khóa điện tử cửa kính</a></li>
                    <li><a href="#">Khóa điện tử cửa kính</a></li>
                    <li><a href="#">Khóa điện tử cửa kính</a></li>
                    <li><a href="#">Khóa điện tử cửa kính</a></li>                                              
                </ul>
            </li>
            <li>
                <a href="">Các mẫu nhà</a>
                <a href="#menu3" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu3">
                    <li><a href="#">Nhà biệt thự</a></li>
                    <li><a href="#">Nhà phố</a></li>
                    <li><a href="#">Nhà hiện đại</a></li>
                    <li><a href="#">Nhà cổ điển</a></li>                                              
                </ul>
            </li>
            <li>
                <a href="">Ý tưởng thiết kế</a>
                <a href="#menu4" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu4">
                    <li><a href="#">Diện tích mặt tiền 3m</a></li>
                    <li><a href="#">Diện tích mặt tiền 4m</a></li>
                    <li><a href="#">Diện tích mặt tiền 5m</a></li>
                    <li><a href="#">Diện tích mặt tiền 6m</a></li>                                              
                </ul>
            </li>                         
            <li><a href="{{url('bao-gia')}}">Báo giá</a></li>          
            <li><a href="{{url('tin-tuc')}}">Tin tức</a></li> 
        </ul>
    </nav>        
</div>    
<!-- /menu-mobile -->