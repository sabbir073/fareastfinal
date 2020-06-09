@extends('dashboard.app')

@section('title')
Shareholding Report
@endsection

@section('css_cdn')

@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">Shareholding Structure</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">Shareholding Structure</h4>
        </div>



        <!-- br-pageheader -->
  			<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">



                 <!-- Large modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Shareholding Structure</button>

                  <div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                      <div class="modal-content">


                      <form action="{{ route('shareholding.create') }}" method="post" style="padding: 6.5rem;" enctype="multipart/form-data">
                        @csrf


  											<!-- Add New Menu-->
  											<div class="row no-gutters">

  												<div class="col-12">
  												<label for="">Add Category Of Shareholders:</label>
  													<input class="form-control" type="text" name="cat_shareholders" placeholder="Add Category Of Shareholders">
  												</div>

  												<div class="col-12">
  												<label for="">Add Number of Shareholders:</label>
                          <input class="form-control" type="number" name="number_shareholders" placeholder="Add Number of Shareholders">
  												</div>

  												<div class="col-12">
  												<label for="">Add Percentage:</label>
                          <input class="form-control" type="text" name="percentage" placeholder="Add Percentage">
  												</div>




  											</div>





                         <div class="row no-gutters">

                         <div class="col-md-12">
                             	<button type="submit" class="btn btn-info waves-effect waves-light">Send Data</button>
                         </div>


  							<!-- col-8 -->
  						</div>

  					</form>


                      </div>
                    </div>
                  </div>




              </div>










        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <div class="table-wrapper">
            						<table id="datatable1" class="table display responsive nowrap">
            							<thead>
            								<tr>
            									<th class="wd-15p">ID</th>
            									<th class="wd-20p">Cat.of shareholders</th>
            									<th class="wd-20p">Num. of shareholders</th>
            									<th class="wd-10p">Percentage(%)</th>
            									<th class="wd-10p">Action</th>
            								</tr>
            							</thead>
            							<tbody>

                            @forelse ($shares as $share)

                              <tr>
              									<td>{{ $loop->index++ + 1 }}</td>
              									<td>{{ $share->cat_shareholders }}</td>
              									<td>{{ $share->number_shareholders }}</td>
              									<td>{{ $share->percentage }}</td>
              									<td>
                                  <a href="{{ route('shareholding.edit',$share->id) }}" class="btn-sm btn-primary">Edit</a>
                                  <a href="{{ route('shareholding.trash',$share->id) }}" class="btn-sm btn-danger">Delete</a>
                                </td>
              								</tr>

                              @empty

                            @endforelse





            							</tbody>
            						</table>
            					</div>

            {{-- inner_content END --}}

          </div>
        </div>









@endsection

@section('js_cdn')





@endsection