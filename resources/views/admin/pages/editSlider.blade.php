@extends('admin.layouts.app')
 
@section('title', 'Sliders')

@section('boxed')
<div class="content-wrapper" style="min-height: 2171.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Slider</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
              <form method="POST" action="" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="sliderName">Slider Name</label>
                        <input type="text" name="name" value="{{$slider->name}}" class="form-control" id="sliderName" placeholder="Enter Name" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                            <label for="sliderDesc">Slider Description</label>
                            <textarea class="form-control" name="desc" rows="3" id="sliderDesc">{{$slider->desc}}</textarea>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <label class="custom-file-label" for="sliderImage">Slider Image</label>
                            <input type="file" name="image" class="custom-file-input" id="sliderImage">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@push('footer-js')

@endpush