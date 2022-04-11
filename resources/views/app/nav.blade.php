<!-- header -->
<header class="header my-8 ">
  <!-- container -->
  <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto ">
      <!-- header wrapper -->
          <div class="header-wrapper flex items-center justify-between ">

              <!-- header logo -->
              <div class="header-logo">
                  <h1 class="font-semibold text-black leading-relaxed"><a href="{{ route('accueil')}}"><img class="h-16 w-auto" src="https://cdn.discordapp.com/attachments/864926984659140659/958099384002830356/Fox.png" alt="FoxLogo"></a></h1>
              </div>

              <!-- mobile toggle -->
              <div class="toggle md:hidden">
                  <button @click=" isOpen = true" @keydown.escape=" isOpen = false">
                      <svg 
                          class="h-6 w-6 fill-current text-black"
                          fill="none" stroke-linecap="round" 
                          stroke-linejoin="round" stroke-width="2" 
                          viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M4 6h16M4 12h16M4 18h16"></path>
                      </svg>
                  </button>
              </div>

              <!-- Navbar -->
              <navbar class="navbar hidden md:block ">
                  <ul class="flex space-x-8 text-sm font-semibold">
                      <li><a href="{{ route('accueil') }}" class="active border-b-2 border-orange-500 pb-2">Accueil</a></li>
                      <li><a href="{{ route('articles.index') }}" class="hover:text-orange-500">Articles</a></li>
                      <li><a href="{{ route('tutoriels.index') }}" class="hover:text-orange-500">Tutoriels</a></li>
                      <li><a href="{{ route('contact') }}" class="hover:text-orange-500">Fiche de contact</a></li>
                      <li><a href="{{ route('cv') }}" class="hover:text-orange-500">CV/Compétences</a></li>
                      <li><a href="{{ route('login') }}" class="cta bg-orange-500 hover:bg-orange-600 px-3 py-2 rounded text-white font-normal">Accès administrateur</a></li>
                  </ul>
              </navbar>

          </div>
  </div>

</header>
