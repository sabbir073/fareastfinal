@extends('frontend.homepage.app')

@section('css_cdn')

@endsection

@section('css')

  #topbar{
    background: #2d3436;
    z-index: 1;
    padding: 1px 0;
  }

  main{
    background: #FBFBFB;
  }


@endsection

@section('content')


  <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay" style="z-index: 1;">
          <div class="bg_image_holder" style="background-image: url(&quot;img/breadbg.jpg&quot;); opacity: 1;">
              <img src="https://picfiles.alphacoders.com/191/191008.jpg" alt="img/breadbg.jpg">
          </div>
          <div class="container content_above">
              <div class="row">
                  <div class="col-md-12">
                      <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                          <h4 class="page_title text-uppercase" style="margin-top: 35px;">director report</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>




<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-2">
      <img src="https://www.fareastislamilife.com/images/common/director-report.png" style="width:85%;margin: 0 auto;" class="img-fluid" alt="">
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      @foreach ($directors as $director)
        <p class="text-center text-dark">
          <a href="{{ route('director_download',$director->id) }}" target="_blank">
            <i class="fas fa-file-pdf" style="color:#F9240F;"></i> Director's Report download
          </a>
        </p>
      @endforeach
    </div>
  </div>
</div>





@endsection

@section('js')

@endsection
