<header>
      <nav class="navbar navbar-expand-lg bg-light">
          <div class="container">
            <div>
          <a href="home"><img class="logo"  src="{{asset('asset/image/logo.png')}}"></a>
          <a   class="navbar-brand " style="font-size:20px" href="home" ><strong>&nbsp; &nbsp;Relasjonsoverblikk</strong></a>
            </div>

          <span class="navbar-toggler navbar-toggler-icon" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"></span>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li  class="nav-item">
                  <a  href="home" class="nav-link {{ request()->routeIs('no.home') ? 'active' : '' }}" aria-current="page" href="#">HJEM</a>
                </li>
                <li class="nav-item">
                  <a href="dialogues" class="nav-link {{ request()->routeIs('no.dialogues') ? 'active' : '' }}" href="#">  DIALOGER</a>
                <li class="nav-item">
                  <a href="influences"class="nav-link {{ request()->routeIs('no.influences') ? 'active' : '' }}" href="#">INNFLYTELSER</a>
                </li>
                <li class="nav-item">
                  <a href="resources"class="nav-link {{ request()->routeIs('no.resources') ? 'active' : '' }}" href="#">RESSURSER</a>
                </li>
                <li class="nav-item">
                  <a href="gapfinder" class="nav-link {{ request()->routeIs('no.gapfinder') ? 'active' : '' }}" href="#">GAPFINDER</a>
                </li>
                <li class="nav-item">
                  <a href="contact" class="nav-link {{ request()->routeIs('no.contact') ? 'active' : '' }}" href="#">KONTAKT</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  OM
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a href="about" class="dropdown-item" href="#">OM</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 LANGUAGE
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a href="/lang/en" class="dropdown-item" href="#"><img class="icon-link" src="{{asset('asset/images/us.png')}}" alt=""> ENG</a></li>
                    <li><a href="/lang/no" class="dropdown-item" href="#"><img class="icon-link" src="{{asset('asset/images/norway.png')}}" alt=""> NOR</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
  </header>
