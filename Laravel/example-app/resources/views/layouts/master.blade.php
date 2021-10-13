


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Moi moi moi</title>
</head>
<body>
@include('partials.header')
    <div>
        <p>
            This is a holla lotta text.
        </p>
    </div>
    <section id="zoekertjesSection">
        @yield('zoeker1')
        @yield('zoeker2')
        @yield('zoeker3')
    </section>
    <section id="aboutSection">
        @yield('thissec')
    </section>
    <section id="itemSection">
        @yield('items')
    </section>
<link rel="stylesheet" href="/app.css">
</body>
</html>
