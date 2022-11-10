<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit comic</title>
</head>
<body>


    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $comic->title }}">
        </div>
        <div>
            <label for="title">Description</label>
            <textarea type="description" cols="30" rows="10">{{ $comic->description }}</textarea>
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" step=".01" name="price" value="{{ $comic->price }}">
        </div>
        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" value="{{ $comic->series }}">
        </div>
        <div>
            <label for="sale_date">Date</label>
            <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" value="{{ $comic->type }}">
        </div>
        <div>
            <input type="submit" value="Aggiorna!">
        </div>

    </form>


</body>
</html>
