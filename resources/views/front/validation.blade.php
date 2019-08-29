@extends('layouts.index')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
  {!! session()->get('success')  !!}
</div>

@endif


@endsection