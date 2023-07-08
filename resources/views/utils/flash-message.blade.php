@if ($alertFm = Session::get('success'))
  <script type="text/javascript">
     Swal.fire({
        text:"{{Session::get('success')}}",
        type:'success',
        icon:'success',
        showConfirmButton: false,
        timer:2500
     }).then((value) => {
     }).catch(swal.noop);
 </script>
 @endif
 @if ($alertFm = Session::get('error'))
 <script type="text/javascript">
    Swal.fire({
        // title:'Error occured',
        text:"{{Session::get('error')}}",
        type:'error',
        icon:'error',
        showConfirmButton: false,
        timer:2500
    }).then((value) => {
    }).catch(swal.noop);
</script>
@endif
@if ($alertFm = Session::get('warning'))
 <script type="text/javascript">
    Swal.fire({
        // title:'Error occured',
        text:"{{Session::get('warning')}}",
        type:'warning',
        icon:'warning',
        showConfirmButton: false,
        timer:2500
    }).then((value) => {
    }).catch(swal.noop);
</script>
@endif
@if ($alertFm = Session::get('info'))
 <script type="text/javascript">
    Swal.fire({
        text:"{{Session::get('info')}}",
        type:'info',
        icon:'info',
        showConfirmButton: false,
        timer:2500
    }).then((value) => {
    }).catch(swal.noop);
</script>
@endif
@if ($alertFm = $errors->any())
 <!-- <script type="text/javascript">
    Swal.fire({
        // title:'Error occured',
        text:"Isi form dengan benar.",
        type:'warning',
        icon:'warning',
        showConfirmButton: false,
        timer:2500
    }).then((value) => {
    }).catch(swal.noop);
</script> -->
@endif

<!-- @if ($message = Session::get('alert-success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif-->

@if ($message = Session::get('alert-error'))
<script type="text/javascript">
    Swal.fire({
        title:'Opps...',
        html:"{{$message}}",
        type:'error',
        icon:'error',
        showConfirmButton: true,
    }).then((value) => {
    }).catch(swal.noop);
</script>
@endif

<!-- @if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Please check the form below for errors
</div>
@endif -->