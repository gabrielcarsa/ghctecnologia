  <!--FOOTER-->
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 p-5 border-top">
      <div class="col mb-3">
          <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              <img src="images/logo.png" alt="GHC Tecnologia" width="150px">
          </a>
          <p class="text-secondary">© 2024</p>
      </div>

      <div class="col mb-3">

      </div>

      <div class="col mb-3">
          <h5>Dúvidas Frequentes</h5>
          <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Quanto custa um aplicativo
                      mobile?</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Quanto custa um
                      sistema?</a>
              </li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Quanto tempo demora para
                      desenvolver um aplicativo?</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Quanto tempo demora para
                      desenvolver um sistema?</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Outras dúvidas</a></li>
          </ul>
      </div>

      <div class="col mb-3">
          <h5>Contato</h5>
          <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">67 98136-8324</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">contato@ghctecnologia.com</a>
              </li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Instagram</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Facebook</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Sobre</a></li>
              @if (Route::has('login'))
              @auth
              <li class="nav-item mb-2"><a href="{{ url('/dashboard') }}" class="nav-link p-0 text-secondary">Dashboard
                      - Interno</a></li>
              @else
              <li class="nav-item mb-2"><a href="{{ route('login') }}" class="nav-link p-0 text-secondary">Entrar -
                      Interno</a></li>
              @endauth
              @endif

          </ul>
      </div>
  </footer>