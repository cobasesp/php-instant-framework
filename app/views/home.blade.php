<!-- File: /app/Views/hola/index.php -->

@extends('master')

@section('title') {{ $title }} @endsection

@section('custom_css')
@endsection

@section('content')
    <div>
        <h1>Hello world!!</h1>
        <p>Welcome {{ $name }}</p>
    </div>
@endsection

@section('custom_js')
<script type="text/javascript">
    alert('works!');
</script>
@endsection