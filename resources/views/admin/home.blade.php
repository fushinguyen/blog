@extends('layouts.base')

@section('content')
<script src="{{ url('ckeditor/ckeditor.js') }}"></script>
<div class="container-fluid">
    <h3>Home</h3>
    <textarea class="ckeditor" id="editor"></textarea>
</div>
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endsection
