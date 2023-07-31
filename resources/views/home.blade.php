<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <div class="card">
                                <img src="{{ $comic -> thumb }}" class="card-img-top" alt="{{ $comic -> title }}">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $comic -> title }}
                                    </h5>
                                    <a href="{{ route('show', $comic->id) }}" class="btn btn-primary">
                                        see more
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
</body>
</html>