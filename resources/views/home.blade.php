@extends('layouts.splash')

@section('splash-content')
<a href="{{ route('comics.index') }}">comics/index</a>
<br>
<a href="{{ route('comics.create') }}">comics/create</a>
@endsection
