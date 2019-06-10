<?php
    $setting = Cache::get('setting');
    $posts = DB::table('news')->where('com','bai-viet')->where('status',1)->get();
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 20px;">
                  <a href="" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}" alt=""></a>
            </div>
            <div class="col-md-4">
                {!! $setting->fax !!}
            </div>
            <div class="col-md-4">
                  <p class="name-company">{{$setting->company}}</p>
                  <P><i class="fa fa-home"></i> {{$setting->address}}.</P>
                  <p><i class="fa fa-envelope"></i> {{$setting->email}}</p>
                  <p><i class="fa fa-phone"></i> {{$setting->phone}}</p>
                  <div class="quytrinh">
                      @foreach($posts as $post)                      
                        <a href="{{url('post/'.$post->alias.'.html')}}" title="">{{$post->name}}</a>
                      @endforeach 
                  </div>
            </div>
            <div class="col-md-4">
                  <div class="box-newsletter">
                    <form action="{{route('postNewsletter')}}" method="post" accept-charset="utf-8">
                    {{csrf_field()}}
                      <input type="email" name="txtEmail" class="input-newsletter col-md-9 col-xs-9" value="" placeholder="">
                      <input type="submit" name="" class="btn-newsletter col-xs-3 col-md-3" value="Đăng ký">
                      </form>
                  </div>
                  <p class="p-social">Theo dõi chúng tôi trên 
                      <a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a> 
                      <a href="{{$setting->youtube}}"><i class="fa fa-youtube"></i></a>
                      <a href="{{$setting->google}}"><i class="fa fa-google"></i></a>
                  </p>
            </div>
        </div>
    </div>
</footer>