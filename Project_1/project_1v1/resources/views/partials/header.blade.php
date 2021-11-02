
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/header_css.css')}}" type="text/css">
<div class="headdiv">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid navibar">
            <!--Logo-->
            <figure class="navlogo">
                <img class="navlogoimage" src="images/portfolio logo.png" alt="Conpanny logo">
            </figure>
            <div class="" id="navbarNav">
                <ul class="navbarnav">
                    <li class="navitem">
                        <a class="navlink" href="{{route('gotopage', ["pagename" => "frontpage"])}}">Home</a>
                    </li>
                    <li class="navitem">
                        <a class="navlink" href="{{route('gotopage', ["pagename" => "projectpage"])}}">Projects</a>
                    </li>
                    <li class="navitem">
                        <a class="navlink" href="#">Downloads</a>
                    </li>
                    <li class="navitem">
                        <a class="navlink" href="{{route('gotopage', ["pagename" => "subscribtionPage"])}}">Login</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</div>
