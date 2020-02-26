@extends('dashboard.app')

@section('title')
TRASHED EVENT
@endsection

@section('css_cdn')


  <!-- vendor css -->

		<link href="{{ asset('dashboard/lib/highlightjs/github.css') }}" rel="stylesheet">
		<link href="{{ asset('dashboard/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
		<link href="{{ asset('dashboard/lib/select2/css/select2.min.css') }}" rel="stylesheet">


@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">TRASHED EVENT</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">TRASHED EVENT</h4>
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
									<th class="wd-15p">Event Title</th>
									<th class="wd-20p">Event Details</th>
									<th class="wd-15p">Photo</th>

									<th class="wd-10p">Action</th>
								</tr>
							</thead>
							<tbody>


									@foreach ($trashed_events as $trashed_event)

										<tr>
											<td>{{ $trashed_event->id }}</td>
											<td>{!! html_entity_decode(Str::limit($trashed_event->event_title,25)) !!}</td>
											<td>{!! html_entity_decode(Str::limit($trashed_event->event_details,25)) !!}</td>
											<td>
												<img src="{{ asset('uploads/events') }}/{{ $trashed_event->photo }}" alt="">
											</td>

											<td>
													<div class="btn-group" role="group" aria-label="Basic example">
																							<a type="button" href="{{ url('/dashboard/event/restore') }}/{{ $trashed_event->id }}" class="btn btn-success pd-x-25 active"><i class="icon ion-loop"></i></a>
																							<a type="button" href="{{ url('/dashboard/event/force/delete') }}/{{ $trashed_event->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
																						</div>
											</td>
										</tr>

									@endforeach





							</tbody>
						</table>
					</div>



            {{-- inner_content END --}}

          </div>
        </div>












@endsection

@section('js_cdn')


  <script src="{{ asset('dashboard/lib/highlightjs/highlight.pack.js') }}"></script>
  <script src="{{ asset('dashboard/lib/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('dashboard/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
  <script src="{{ asset('dashboard/lib/select2/js/select2.min.js') }}"></script>
  <script>
    $(function(){
      'use strict';

      $('#datatable1').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });



      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>

@endsection
