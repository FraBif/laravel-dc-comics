<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                 <header>
                    <div class="container">
                        <h1 class="my_create">
                            Generate New Comics
                        </h1>
                    </div>
                </header>
                <main>
                    <div class="container">
                        <form action="{{ route('store') }}" method="POST" class="my_form">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">
                                    Title
                                </label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">
                                    Description
                                </label>
                                <input type="text" class="form-control" name="description" id="description">
                            </div>

                            <div class="mb-3">
                                <label for="thumb" class="form-label">
                                    Thumb link
                                </label>
                                <input type="text" class="form-control" name="thumb" id="thumb">
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">
                                    Price
                                </label>
                                <input type="text" class="form-control" name="price" id="price">
                            </div>

                            <div class="mb-3">
                                <label for="series" class="form-label">
                                    Series
                                </label>
                                <input type="text" class="form-control" name="series" id="series">
                            </div>

                            <div class="mb-3">
                                <label for="sale_date" class="form-label">
                                    Sale Date
                                </label>
                                <input type="text" class="form-control" name="sale_date" id="sale_date">
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label">
                                    Type
                                </label>
                                <input type="text" class="form-control" name="type" id="type">
                            </div>

                            <div class="mb-3">
                                <label for="artists" class="form-label">
                                    Artists
                                </label>
                                <input type="text" class="form-control" name="artists">
                            </div>

                            <div class="mb-3">
                                <label for="writers" class="form-label">
                                    Writers
                                </label>
                                <input type="text" class="form-control" name="writers" id="writers">
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </form>
                    </div>
                </main>
                @vite("resources/js/app.js")
</body>
</html>