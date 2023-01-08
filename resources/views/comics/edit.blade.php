@extends('layouts.splash')

@section('splash-content')

<section id="createForm" class="d-flex flex-column edit justify-content-center align-items-center">
    <h1 class="text-center">You are Editing: <span class="edit-title">{{ $comic->title }}</span></h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="d-flex flex-column justify-content-around align-items-center text-white">
        @csrf

        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" maxlength="20" id="title" value="{{old('title', $comic->title)}}">

        <label for="description">Description</label>
        <input type="text" name="description" maxlength="10000" id="description" value="{{old('description', $comic->description)}}">

        <label for="thumb">Thumb</label>
        <input type="text" name="thumb" id="thumb" value="{{old('thumb', $comic->thumb)}}">

        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{old('price', $comic->price)}}">

        <label for="series">Series</label>
        <input type="text" name="series" id="series" value="{{old('series', $comic->series)}}">

        <label for="sale_date">Sale Date</label>
        <input type="text" name="sale_date" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}">

        <label for="type">Type</label>
        {{-- <input type="text" name="type" id="type"> --}}
        <select name="type" id="type">
            <option value="comic book" {{old('type', $comic->type == 'comic book' ? 'selected' : '')}}>comic book</option>
            <option value="graphic novel" {{old('type', $comic->type == 'graphic novel' ? 'selected' : '')}}>graphic novel</option>
        </select>

        <input type="submit" value="Invia" class="btn btn-primary mt-3">
     </form>
</section>

@endsection
