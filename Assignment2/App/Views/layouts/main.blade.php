<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ASM2</title>
</head>

<body>
    <div class="container">
        <header>
            <a href="{{route('')}}" class="text-decoration-none text-dark">
                <h1 class="text-center mt-5 bg-warning">Manager Store</h1>
            </a>
        </header>

        <section class="content">
            @yield('content')
        </section>

        <footer>
        </footer>
    </div>
</body>

</html>
