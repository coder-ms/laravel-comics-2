@extends('layouts.splash')
@section('page-title', 'Comic Form')

@section('splash-content')
<section id="createForm" class="d-flex justify-content-center align-items-center">
    <form action="{{ route('comics.store') }}" method="POST" class="d-flex flex-column justify-content-around align-items-center text-white">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" maxlength="20" id="title">

        <label for="description">Description</label>
        <input type="text" name="description" maxlength="10000" id="description">

        <label for="thumb">Thumb</label>
        <input type="text" name="thumb" id="thumb">

        <label for="price">Price</label>
        <input type="text" name="price" id="price">

        <label for="series">Series</label>
        <input type="text" name="series" id="series">

        <label for="sale_date">Sale Date</label>
        <input type="text" name="sale_date" id="sale_date">

        <label for="type">Type</label>
        {{-- <input type="text" name="type" id="type"> --}}
        <select name="type" id="type">
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>

        <input type="submit" value="Invia" class="btn btn-primary mt-3">
     </form>
</section>
@endsection
