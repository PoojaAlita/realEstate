@extends('layouts.master')
@section('title',"Service")
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Service</li>
    </ol>
</nav>
<!-- Service Modal -->
<div class="modal fade select  bd-example-modal-md" id="service_modal" tabindex="-1" aria-labelledby="title_service_modal" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="title_service_modal">Add service </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
          
          <form class="forms-sample" method="POST" enctype="multipart/form-data" id="service_form">
            @csrf
            <input type="hidden" name="id" class="id" id="id" value="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label>Title</label>
                <input type="text" class="form-control" id="title" value="" name="title" placeholder="Enter Title">
                <span class="title_service error_color"></span>
              </div>
              <div class="col-md-6 mb-3">
                <label>File</label>
                <input type="file" class="form-control " id="file" value="" name="file">
                <span class="file_service error_color"></span>

                <div class="mb-3 w-5">
                    <img src="" alt=""  class="service_image mb-3 w-5">
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        <span class="description_service error_color"></span>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary submit_service" type="button"></button>
          </form>
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <div class="row">
              <h6 class="card-title col">Services</h6>
              <div class="col-2 ">
                    <a  class="btn btn-primary add_service"  style="float: right" id="add_service">Add Service</a>
              </div>
            </div>
          <div class="table-responsive mt-2">
            <table id="service_tbl" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@section('custome-script')
  <script src="{{asset('assets/js/delete.js')}}"></script>
  <script src="{{asset('assets/js/service.js')}}"></script>
@endsection    