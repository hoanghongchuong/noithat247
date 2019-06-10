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
            <p class="tac"><img src="images/icon1.png" alt=""></p>
            <div class="slide-project">
                <div class="owl-carousel owl-carousel-project owl-theme">
                    <div class="item">
                        <a href="" title="">
                            <img src="images/duan1.png" alt="">
                            <p class="name_project">tin tuwcs lien quan demo</p>
                            <p class="">
                                <a href="" title=""><img src="images/icon2.png" class="img-ke" alt="Tin tức 3"></a>                                
                            </p>
                            <div class="des-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" title="">
                            <img src="images/duan2.png" alt="">
                            <p class="name_project">tin tuwcs lien quan demo</p>
                            <p class="">
                                <a href="" title=""><img src="images/icon2.png" class="img-ke" alt="Tin tức 3"></a>                                
                            </p>
                            <div class="des-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" title="">
                            <img src="images/duan1.png" alt="">
                            <p class="name_project">tin tuwcs lien quan demo</p>
                            <p class="">
                                <a href="" title=""><img src="images/icon2.png" class="img-ke" alt="Tin tức 3"></a>                                
                            </p>
                            <div class="des-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" title="">
                            <img src="images/duan2.png" alt="">
                            <p class="name_project">tin tuwcs lien quan demo</p>
                            <p class="">
                                <a href="" title=""><img src="images/icon2.png" class="img-ke" alt="Tin tức 3"></a>                                
                            </p>
                            <div class="des-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="box-content">
    <div class="container">
        <div class="row">
            <div class="name-cate">Các mẫu nhà</div>
            <p class="tac"><img src="images/icon1.png" alt=""></p>
        </div>
        <div class="list-templates-design">
            <div class="col-md-3 col-xs-6">
                <div class="box-templates">
                    <a href="" title="">
                        <img src="images/mau1.png" alt="">
                        <div class="name_template">
                            <span>Nhà Biệt thự</span>
                        </div>
                    </a>
                </div>
            </div> 
            <div class="col-md-3 col-xs-6">
                <div class="box-templates">
                    <a href="" title="">
                        <img src="images/mau1.png" alt="">
                        <div class="name_template">
                            <span>Nhà Biệt thự</span>
                        </div>
                    </a>
                </div>
            </div> 
            <div class="col-md-3 col-xs-6">
                <div class="box-templates">
                    <a href="" title="">
                        <img src="images/mau1.png" alt="">
                        <div class="name_template">
                            <span>Nhà Biệt thự</span>
                        </div>
                    </a>
                </div>
            </div> 
            <div class="col-md-3 col-xs-6">
                <div class="box-templates">
                    <a href="" title="">
                        <img src="images/mau1.png" alt="">
                        <div class="name_template">
                            <span>Nhà Biệt thự</span>
                        </div>
                    </a>
                </div>
            </div>                
        </div>
    </div>
</div>
<div class="box-content">
    <div class="container">
        <div class="row">
            <div class="name-cate">Ý tưởng thiết kế</div>
            <p class="tac"><img src="images/icon1.png" alt=""></p>
        </div>
        <div class="list-box">
            <div class="col-md-3 col-xs-6 item">
                <a href="" title="">
                    <img src="images/y1.png" alt="">
                    <p class="name_idea">Diện tích mặt tiền 3m</p>
                </a>
            </div>
            <div class="col-md-3 col-xs-6 item">
                <a href="" title="">
                    <img src="images/y2.png" alt="">
                    <p class="name_idea">Diện tích mặt tiền 3m</p>
                </a>
            </div>
            <div class="col-md-3 col-xs-6 item">
                <a href="" title="">
                    <img src="images/yt3.png" alt="">
                    <p class="name_idea">Diện tích mặt tiền 3m</p>
                </a>
            </div>
            <div class="col-md-3 col-xs-6 item">
                <a href="" title="">
                    <img src="images/y4.png" alt="">
                    <p class="name_idea">Diện tích mặt tiền 3m</p>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- box-news -->
<div class="box-content">
    <div class="container">
        <div class="row">
            <div class="name-cate">Tin tức</div>
            <p class="tac"><img src="images/ke.png" alt=""></p>
            <div class="box-news-home">
                <div class="col-md-6 col-xs-12 mb-20">
                    <div class="col-md-6 col-xs-12 pdr-0">
                        <a href="" title=""><img src="images/news1.png" alt=""></a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="name_news_home"><a href="" title="Giải pháp thiết kế nội thất nhà ống hiện đại">Giải pháp thiết kế nội thất nhà ống hiện đại</a></div>
                        <div class="short-news">Căn hộ được thiết kế khá giản dị và nhẹ nhàng theo phong cách nội thất đồng quê. Bên cạnh lối sắp xếp nội thất tinh tế, chất liệu tự nhiên và bảng màu dịu nhẹ là các yếu tố nhấn mạnh cảm giác tuyệt vời về bầu không khí đồng quê nhẹ nhàng, thư thái trong căn hộ hiện đại.</div>
                        <p class="readmore" style="margin-top: 20px;"><a href="" title=""><span>Xem thêm</span></a></p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 mb-20">
                    <div class="col-md-6 col-xs-12 pdr-0">
                        <a href="" title=""><img src="images/news1.png" alt=""></a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="name_news_home"><a href="" title="Giải pháp thiết kế nội thất nhà ống hiện đại">Giải pháp thiết kế nội thất nhà ống hiện đại</a></div>
                        <div class="short-news">Căn hộ được thiết kế khá giản dị và nhẹ nhàng theo phong cách nội thất đồng quê. Bên cạnh lối sắp xếp nội thất tinh tế, chất liệu tự nhiên và bảng màu dịu nhẹ là các yếu tố nhấn mạnh cảm giác tuyệt vời về bầu không khí đồng quê nhẹ nhàng, thư thái trong căn hộ hiện đại.</div>
                        <p class="readmore" style="margin-top: 20px;"><a href="" title=""><span>Xem thêm</span></a></p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 mb-20">
                    <div class="col-md-6 col-xs-12 pdr-0">
                        <a href="" title=""><img src="images/news1.png" alt=""></a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="name_news_home"><a href="" title="Giải pháp thiết kế nội thất nhà ống hiện đại">Giải pháp thiết kế nội thất nhà ống hiện đại</a></div>
                        <div class="short-news">Căn hộ được thiết kế khá giản dị và nhẹ nhàng theo phong cách nội thất đồng quê. Bên cạnh lối sắp xếp nội thất tinh tế, chất liệu tự nhiên và bảng màu dịu nhẹ là các yếu tố nhấn mạnh cảm giác tuyệt vời về bầu không khí đồng quê nhẹ nhàng, thư thái trong căn hộ hiện đại.</div>
                        <p class="readmore" style="margin-top: 20px;"><a href="" title=""><span>Xem thêm</span></a></p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 mb-20">
                    <div class="col-md-6 col-xs-12 pdr-0">
                        <a href="" title=""><img src="images/news1.png" alt=""></a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="name_news_home"><a href="" title="Giải pháp thiết kế nội thất nhà ống hiện đại">Giải pháp thiết kế nội thất nhà ống hiện đại</a></div>
                        <div class="short-news">Căn hộ được thiết kế khá giản dị và nhẹ nhàng theo phong cách nội thất đồng quê. Bên cạnh lối sắp xếp nội thất tinh tế, chất liệu tự nhiên và bảng màu dịu nhẹ là các yếu tố nhấn mạnh cảm giác tuyệt vời về bầu không khí đồng quê nhẹ nhàng, thư thái trong căn hộ hiện đại.</div>
                        <p class="readmore" style="margin-top: 20px;"><a href="" title=""><span>Xem thêm</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
