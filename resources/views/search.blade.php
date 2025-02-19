<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Phone Book App</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    </head>
    <body>
        <div class="container mt-6">
            <form method="GET" action="/search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search contacts">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>

            @if($contacts->isNotEmpty())
                <ul class="list-group">
                    @foreach ($contacts as $contact)
                        <li class="list-group-item">{{ $contact->name }}</li>
                    @endforeach
                </ul>
            @else
                <p>No contacts found.</p>
            @endif
        </div>
    </body>
</html>