@extends('admin.layouts.app')
 
@section('title', 'Sliders')

@section('boxed')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sliders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sliders</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
			<div class="col-11 d-flex justify-content-end">
			</div>
			<div class="col-1 d-flex justify-content-end">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSlider">Add Slider</button>
			</div>
			<!-- The Modal -->
			<div class="modal fade" id="addSlider">
				<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form method="POST" action="{{route('sliders.store')}}" enctype="multipart/form-data">
						@csrf
						<!-- Modal Header -->
						<div class="modal-header">
						<h4 class="modal-title">Add Slider</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						
						<!-- Modal body -->
						<div class="modal-body">
							<div class="form-group">
								<label for="sliderName">Slider Name</label>
								<input type="text" name="name" class="form-control" id="sliderName" placeholder="Enter Name" required>
							</div>
							<div class="row">
								<div class="col-sm-12">
								<div class="form-group">
									<label for="sliderDesc">Slider Description</label>
									<textarea class="form-control" name="desc" rows="3" id="sliderDesc"></textarea>
								</div>
								</div>
							</div>
							<div class="form-group">
								<div class="custom-file">
									<label class="custom-file-label" for="sliderImage">Slider Image</label>
									<input type="file" name="image" class="custom-file-input" id="sliderImage">
								</div>
							</div>
							<div class="form-group">
								<div class="text-center">
									<button type="submit" class="btn btn-default">Submit</button>
								</div>
							</div>
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
				</div>
			</div>
        </div>
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                          <table id="sliders" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Image</th>
                              <th>Action</th>
                            </tr>
                            </thead>
							{{-- <tbody>
								<tr>
									<td>Test</td>
								</tr>
							</tbody> --}}
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@push('footer-js')
<!-- DataTables  & Plugins -->
<script src="{{asset('storage/admin-assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('storage/admin-assets/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
 
<!-- Page specific script -->
<script>

  $(document).ready(function() {

	$('#sliders').on('click', 'button.delete-slider', function() {

		var userURL = $(this).data('url');
		var sliderId = $(this).data('id');

		Swal.fire({                                 
			title: 'Warning!',                                 
			text: "Do you want to delete the Slider?",   
			showDenyButton: true,
			showCancelButton: true,
			confirmButtonText: "Delete",               
		}).then((result) => {
		
			if (result.isConfirmed) 
			{
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.ajax({
					url: userURL,
					type: 'DELETE',
					data: {
						"id": sliderId,
					},
					success: function (response) {
						
						Swal.fire({                                 
							title: 'Deleted!',                                 
							text: response.success,                      
						});
						
						$('#sliders').DataTable().ajax.reload();
					}
				});

			} else if (result.isDenied) {
				
			}
		});

	});

	$('#sliders').DataTable({
		ajax: {
			url: "{{route('getSliders')}}",
			type: "POST",
			dataType: "json",
			data: {
			"_token": "{{ csrf_token() }}",
        }},
		columns: [
			{ data: 'id' },	
			{ data: 'name' },
			{ data: 'desc' },
			{ data: 'image', 
				"render": function (data) {
					return "<img src='{{asset('storage/admin-assets/slider-images/')}}"+"/"+data+"' width='80px'>";
				}
			},
			{ data: 'action'}
		],
		paging: true,
		lengthChange: false,
		searching: false,
		ordering: true,
		info: true,
		autoWidth: false,
		responsive: true,
    });
  });
</script>
@endpush