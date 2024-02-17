<script>
    import {inertia} from '@inertiajs/svelte'
</script>

<main>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mx-auto">
        <div class="container-fluid">
          <a use:inertia class="navbar-brand" href="/">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a use:inertia class="nav-link active" aria-current="page" href="/">Home</a>
              <a use:inertia class="nav-link" href="/customers">Customers</a>
            </div>
          </div>
        </div>
      </nav>
</main>