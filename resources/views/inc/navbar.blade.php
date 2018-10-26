<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" date-toggle="collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SwingSwing</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Strona Główna</a></li>
        <li class="{{Request::is('timetable') ? 'active' : ''}}"><a href="/timetable">Harmonogram</a></li>
        <li class="{{Request::is('registration') ? 'active' : ''}}"><a href="/registration">Rejestracja</a></li>
      </ul>
    </div>
  </div>
</nav>
