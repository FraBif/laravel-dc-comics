<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
            <div class="d-flex container">
                <div class="my_container">
                    <img src="{{ $comic -> thumb }}" alt="{{ $comic -> title }}">
                </div>
                <div class="d-flex">
                    <div class="m-auto container">
                        <div class="row">
                            <div class="col-3">
                                {{ $comic -> title }}
                            </div>
                            <div class="col-3">
                                {{ $comic -> price }}
                            </div>
                            <div class="col-3">
                                {{ $comic -> sale_date }}
                            </div>
                            <div class="col-3">
                                {{ $comic -> type }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {{ $comic -> description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @vite("resources/js/app.js")
</body>
</html>