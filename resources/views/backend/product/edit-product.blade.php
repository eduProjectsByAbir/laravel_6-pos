@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/')  }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <section class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Edit Product
                                    <a class="btn btn-success float-right" href="{{route('products.view')}}"><i class="fa fa-list"></i> View Products</a>
                                </h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{route('products.update', $editData->id)}}" method="post" id="myForm">
                                    @csrf
                                    <div class="form-row">
                                         <div class="form-group col-md-6">
                                        <label for="supplier">Select Supplier</label>
                                        <select name="supplier_id" id="supplier" class="form-control">
                                            <option value="">Select Supplier</option>
                                            @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}" {{ ($editData->supplier_id==$supplier->id)?"selected":"" }}>{{ $supplier->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="supplier">Select Category</label>
                                        <select name="category_id" id="category" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ ($editData->category_id==$category->id)?"selected":"" }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="supplier">Select Unit</label>
                                        <select name="unit_id" id="unit" class="form-control">
                                            <option value="">Select Unit</option>
                                            @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}" {{ ($editData->unit_id==$unit->id)?"selected":"" }}>{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" value="{{$editData->name}}" id="name" class="form-control">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /.row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <script>
        $(function () {

            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                },
                messages: {
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
