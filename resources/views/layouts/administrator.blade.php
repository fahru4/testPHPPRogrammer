<!doctype html>
<html lang="en">

<head>
    <meta name="_token" id="token" value="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <title>Sticky Footer Navbar Template for Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrapCustom/adminstrator.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link href="{{ asset('bootstrapCustom/modal.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>

<body>

    <!-- Fixed navbar -->
    @include('components.navbar')


    <!-- Begin page content -->
    {{-- <main role="main" class="container"> --}}
    @include('utils.flash-message')
    @yield('content')
    {{-- </main> --}}

    {{-- <footer class="footer"> --}}
    @include('components.footer')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    @stack('js')

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
    
<script>

    $(document).ready(function() {
        var table = $('#productTable').DataTable({
            ajax: {
                url: 'https://dummyjson.com/products',
                dataSrc: 'products'
            },
            columns: [
                {
                        "data": "images",
                        "render": function(data, type, row) {
                            var html = "";
                            // for (var i = 0; i < data.length; i++) {
                            html += "<img src=" + data[0] + " width='80px'/>";
                            // }
                            return html;
                        }

                    },
                    {
                        "data": "title"
                    },
                    {
                        "data": "category"
                    },
                    {
                        "data": "brand"
                    },
                    {
                        "data": "stock"
                    },
                    {
                        "data": "price"
                    },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<button class="btn btn-primary btn-sm" data-id="' + row.id + '">View</button>';
                    }
                }
            ]
        });

        $('#productTable tbody').on('click', 'button', function() {
            var rowData = table.row($(this).closest('tr')).data();
            var rating = rowData.rating
            var stars = ''
            var imageElements = '';
            var img = rowData.images
            $('#productName').text(rowData.title);
            $('#productPrice').text(rowData.price);

            for (var i = 1; i <= 5; i++) {
            var starClass = i <= rating ? 'rating-stars active' : 'rating-stars';
            stars += '<span class="' + starClass + '">&#9733;</span>';
            }
          // Append the rating stars to the 'rating' element
            $('#rating').html(stars);

            img.forEach(function(image) {
                imageElements += '<img src=' + image + ' class="thumbnail active"/>';
            });

            $('.images-one').html(imageElements);
            
            // var prices = '<span>Price</span>';

            $('#price').text(rowData.price);

            $('#productModal').modal('show');
        });

        
    });
</script>

<script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail')

    let activeImages = document.getElementsByClassName('active')

    for (var i=0; i < thumbnails.length; i++){

        thumbnails[i].addEventListener('mouseover', function(){
            console.log(activeImages)
            
            if (activeImages.length > 0){
                activeImages[0].classList.remove('active')
            }
            

            this.classList.add('active')
            document.getElementById('featured').src = this.src
        })
    }


    let buttonRight = document.getElementById('slideRight');
    let buttonLeft = document.getElementById('slideLeft');

    buttonLeft.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft -= 180
    })

    buttonRight.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft += 180
    })


</script>

<script type="text/javascript">
    $(function() {

        var table = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('order-index') }}",
            columns: [
                  {data: 'no_order', name: 'no_order'},
                  {data: 'name_supplier', name: 'name_supplier'},
                  {data: 'name_product', name: 'name_product'},
                  {data: 'total', name: 'total'},

                
            ]
        });

    });
</script>


</body>

</html>
