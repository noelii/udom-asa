<nav class="header navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="home collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link underline" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link underline" aria-current="page" href="#">Report a problem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link underline" href="/target">Target</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link underline dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register & <br> Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="nav-link active" href="{{route('login')}}">login</a></li>
            <li><a class="nav-link active" href="#">Register</a></li>
           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>