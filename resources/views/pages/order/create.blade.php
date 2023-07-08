@extends('layouts.administrator')
@section('content')
    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="d-flex justify-content-between mt-5 flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
            <h1 class="h2">Dashboard</h1>
        </div>

            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body"><br>
                                <form action="{{ route('order-store') }}" method="post" enctype="multipart/form-data"
                                    id="create">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name Supplier</label>
                                        <input class="form-control @error('name_supplier') parsley-error @enderror"
                                                type="text" name="name_supplier" value="{{old('name_supplier')}}"
                                                placeholder="Enter name supplier" id="example-text-input">
                                                @error('name_supplier')
                                                <ul class="parsley-errors-list filled" role="alert">
                                                    <li class="parsley-required">{{ $message }}</li>
                                                </ul>
                                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name Product</label>
                                        <input class="form-control @error('name_product') parsley-error @enderror"
                                                type="text" name="name_product" value="{{old('name_product')}}"
                                                placeholder="Enter name product" id="example-text-input">
                                                @error('name_product')
                                                <ul class="parsley-errors-list filled" role="alert">
                                                    <li class="parsley-required">{{ $message }}</li>
                                                </ul>
                                                @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input class="form-control @error('date') parsley-error @enderror"
                                                type="date" name="date" value="{{old('date')}}"
                                                placeholder="Enter date" id="example-text-input">
                                                @error('date')
                                                <ul class="parsley-errors-list filled" role="alert">
                                                    <li class="parsley-required">{{ $message }}</li>
                                                </ul>
                                                @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Total</label>
                                        <input class="form-control @error('total') parsley-error @enderror"
                                                type="text" name="total" value="{{old('total')}}"
                                                placeholder="Enter total" id="example-text-input">
                                                @error('total')
                                                <ul class="parsley-errors-list filled" role="alert">
                                                    <li class="parsley-required">{{ $message }}</li>
                                                </ul>
                                                @enderror
                                    </div>

                                    <input type="hidden" name="action" value="create">
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                SAVE
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                RESET
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

        </div>
        <!--
        </main>
@endsection
