


<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <title>Kılıç İklimlendirme</title>
</head>
<body>

<div class="topnav">
    <div class="container-fluid">
  <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    <a class="navbar-brand" href="/">Kılıç İklimlendirme</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnav-menu-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="topnav-menu-content">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::is('/') ? 'active-item' : '' }}">
            <a class="nav-link arrow-none" href="/ " id="topnav-dashboard" role="button">
                <span data-key="t-dashboard" class="text-uppercase">@lang('translation.index')</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('hakkimizda') ? 'active-item' : '' }}">
            <a class="nav-link arrow-none" href="/hakkimizda " id="topnav-dashboard" role="button">
                <span data-key="t-about" class="text-uppercase">@lang('translation.about')</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('domainler') || Request::is('domainler/arama') ? 'active-item' : '' }}">
            <a class="nav-link arrow-none" href="/domainler " id="topnav-dashboard" role="button">
                <span data-key="t-domains" class="text-uppercase">@lang('translation.domains')</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('iletisim') ? 'active-item' : '' }}">
            <a class="nav-link arrow-none" href="/iletisim " id="topnav-dashboard" role="button">
                <span data-key="t-contact" class="text-uppercase">@lang('translation.contact')</span>
            </a>
        </li>
      </ul>
    </div>
  </nav>
    </div>
</div>
</body>
</html>
