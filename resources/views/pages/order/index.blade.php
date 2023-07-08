@extends('layouts.administrator')
@section('content')

    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="d-flex justify-content-between">
            <h1 class="h2">Orders</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered data-table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                                <th>No Order</th>
                                <th>Name Supplier</th>
                                <th>Name Product</th>
                                <th>Total</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </main>
@endsection