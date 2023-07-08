@extends('layouts.administrator')
@section('content')
    <!-- Begin page content -->
    <main role="main" class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h2">Product List</h1>
            <button class="btn btn-primary" id="showProductBtn">Show Product</button>

        </div>

        <div class="table-responsive">
            <table class="table table-bordered data-table" id="productTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>



        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="productModal"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <span id="productName"></span>
                            </div>
                            <div class="col-md-4 offset-md-4">
                                <button type="button" class="close close-btn" data-bs-dismiss="modal" aria-label="Close">
                                    <span class="" aria-hidden="true">&times;</span>

                                    <div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="content-wrapper">


                        <div class="container">
                                   <div class="row">
                                       <div class="col">
                                <div class="column">
                                    <img id="featured" src="{{ asset('icon/shoe1.jpg') }}">
                                    
                                    <div class="singleImg" id=featured>
        
                                    </div>
                                    <div id="slide-wrapper">
                                        <img id="slideLeft" class="arrow" src="{{ asset('icon/arrow-left.png') }}">
        
                                        <div class="images-one" id="slider">
                                        </div>
        
                                        <img id="slideRight" class="arrow" src="{{ 'icon/arrow-right.png' }}">
                                    </div>
                                </div>
                                
                            </div>

                            {{-- <div class="container"> --}}
                                <div class="col">
                                    <div id="rating">

                                    </div>
                                </div>
                            {{-- </div> --}}

                        </div>

                    </div>


                </div>
            </div>
        </div>

        <!-- Small modal -->

    </main>
    {{-- @include('components.vuejs') --}}
@endsection
{{-- @push('js') --}}
