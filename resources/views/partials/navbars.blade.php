<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="#">My App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active': '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Artikel") ? 'active': '' }}" href="/artikel">Artikel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Pengaduan") ? 'active': '' }}" href="/pengaduan">Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Contact") ? 'active': '' }}" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Tentang") ? 'active': '' }}" href="/tentang">Tentang</a>
        </li>
    </ul>
</div>
    </div>
  </nav>
  