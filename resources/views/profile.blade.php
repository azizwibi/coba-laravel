@extends('layouts.main')

@section('container')
<h1>ini halaman profile
</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{$name  }}" width="200">
@endsection

