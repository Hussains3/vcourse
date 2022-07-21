@extends('frontend.layouts.app')

{{-- @section('headScript')
<script src="https://cdn.ckeditor.com/4.17.2/basic/ckeditor.js"></script>
@endsection --}}

@section('content')

@endsection


@section('script')
<script>
    //  CKEDITOR.replace( 'about_me' );
    $(document).ready(function () {

        $("#studentaboutpen").click(function(){
            $("#studentaboutform").toggleClass("d-none");
            $("#studentabout").toggleClass("d-none");
        });

        $("#studentnamepen").click(function(){
            $("#studentnameform").toggleClass("d-none");
            $("#studentname").toggleClass("d-none");
        });

        $("#instructoraboutpen").click(function(){
            $("#instructoraboutform").toggleClass("d-none");
            $("#instructorabout").toggleClass("d-none");
        });
        $("#studentinfopen").click(function(){
            $("#studentinfoform").toggleClass("d-none");
            $("#studentinfo").toggleClass("d-none");
        });
        $("#instructorsocialpen").click(function(){
            $("#instructorsocialform").toggleClass("d-none");
            $("#instructorsocial").toggleClass("d-none");
        });


       $("#selectedFile").on('input', function () {
            $("#submitPP").click();
        });

    });
</script>
@endsection








