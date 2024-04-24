<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/Home">LOGO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/blog">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/create">ADD ARTICLE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/add-auteur">ADD AUTEUR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/add-cat">ADD CATEGORY</a>
                    </li>


                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/contact">Contact us</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    @yield('Home')
    <section>
        @yield('section')
    </section>
    @yield('formCat')
    @yield('creation')
    @yield('contact')
    @yield('admin')
<div>
    @yield('Auteur')
</div>

</body>

</html>
