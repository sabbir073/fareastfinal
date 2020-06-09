@extends('frontend.homepage.app')

@section('css_cdn')

@endsection

@section('css')

  #topbar{
    background: #2d3436;
    z-index: 1;
    padding: 1px 0;
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
                          <h4 class="page_title" style="margin-top: 35px;">VALUE ADD STATEMENT</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>



<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">

      {{-- <div class="far_share_p">
          <p class="text-dark p-3">
            Market value added statement reflects the company's performance evaluated by the market through the share price. This amount is derived from the difference between the total market value and total book value of shares of a company. A high market value added indicates that the company has created substantail wealth for the equityholders.
            <br>
            <br>
            The equity market value of the company stood at taka 4723.74 million where the book value of the equity stood at taka 747.42 million, resulting in market value added of taka 3,976.32 million as on 31 December 2018 against taka 4,595.69 million 2017.
          </p>
      </div> --}}

      <div class="table-responsive">
        @foreach ($values as $value)

                <table class="table table-one">
                    <thead class="table-success">
                        <tr>
                          <th scope="col">Particulars</th>
                          <th scope="col">Year {{ $value->year }}</th>
                        </tr>
                    </thead><!-- ends: thead -->
                    <tbody>

                @foreach ($value->valueyears as $v)
                  <tr>
                      <th scope="row">{{$v->title}}</th>
                  </tr>
                @endforeach

                    </tbody><!-- ends: tbody -->
                  </table>

        @endforeach
    </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-7 offset-md-2">
      <img src="https://www.fareastislamilife.com/files/common/Market-Value-Added-Statement.jpg" style="width:100%;margin: 0 auto;" class="img-fluid" alt="">
    </div>
  </div>
</div>





@endsection

@section('js')

@endsection
