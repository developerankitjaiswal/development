@extends('layouts.app')
@section('content')
<div id="content" class="app-content">
<div class="d-flex align-items-center mb-3">
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Category</li>
        </ol>
        <h1 class="page-header mb-0">Category Management</h1>
    </div>
    @can('user-create')
        <div class="ms-auto">
            <a href="{{ route('category.create') }}" class="btn btn-primary px-4"><i class="fa fa-user-plus fa-lg ms-n2 "></i> CREATE CATEGORY</a>
        </div>
    @endcan
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card border-0 mb-4">
            <div class="card-header h6 mb-0 bg-none p-3">
                <i class="fa fa-list fa-lg fa-fw text-dark text-opacity-50 me-1"></i> CATEGORY LIST
            </div>
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show rounded-0">
                    <strong> Success! </strong> {{ \Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
              </div>
            @endif
            <div class="card-body">
                <table id="data-table-default" class="table table-striped table-bordered align-middle">
                    <thead>
                      <tr>
                        <th width="1%"></th>
                        <th width="1%"></th>
                        <th class="text-nowrap">Category</th>
                        <th class="text-nowrap">Designation</th>
                        <th class="text-nowrap">Testimonail</th>
                        <th class="text-nowrap" width="1%">Status</th>
                        <th class="text-nowrap" width="15%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="odd gradeX">
                        <td class="fw-bold text-dark">1</td>
                        <td class="with-img"><img src="../uploads/testimonial/111111" class="rounded h-40px my-n1 mx-n1" /></td>
                        <td>1112222</td>
                        <td>33333</td>
                        <td>44444444444</td>
                        <td>
                          <div class="form-check form-switch">
                            <input class="form-check-input statustestimonial" data-id="2" type="checkbox" checked>
                          </div>
                        </td>
                        <td>
                            <a class="btn btn-white btn-sm btn-circle me-1 mb-1" href="#"><i class="fa fa-edit"></i> Edit</a>
                            <a data-id="1" class="btn btn-danger btn-sm btn-circle me-1 mb-1" style="background-color: #9a1515;"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                        </td>
                      </tr>

                      <tr class="odd gradeX">
                        <td class="fw-bold text-dark">1</td>
                        <td class="with-img"><img src="../uploads/testimonial/111111" class="rounded h-40px my-n1 mx-n1" /></td>
                        <td>1112222</td>
                        <td>33333</td>
                        <td>44444444444</td>
                        <td>
                          <div class="form-check form-switch">
                            <input class="form-check-input statustestimonial" data-id="2" type="checkbox" checked>
                          </div>
                        </td>
                        <td>
                            <a class="btn btn-white btn-sm btn-circle me-1 mb-1" href="#"><i class="fa fa-edit"></i> Edit</a>
                            <a data-id="1" class="btn btn-danger btn-sm btn-circle me-1 mb-1" style="background-color: #9a1515;"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                        </td>
                      </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('custom-javascript')

@endsection
