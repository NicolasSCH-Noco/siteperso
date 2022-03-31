<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
      <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
        </svg>

        <img class="h-14 w-auto" src="https://cdn.discordapp.com/attachments/864926984659140659/958099384002830356/Fox.png" alt="Small Logo">
        <a href=" {{ route('accueil')}} "><span class="font-semibold text-xl tracking-tight">{{ config('app.name')}}</span></a>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
   
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
     
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Articles
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
        Tutoriels
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white ml-4">
        Tags
      </a>
    </div>
    <div>
      <div class="pt-2 relative mx-auto text-gray-600">
          <img src="https://cdn.discordapp.com/attachments/925840909067776010/958832131788906506/screenshot.jpg" alt="LogoUser" class="rounded-full h-8 w-8 mr-2">
        </div>
      </div>
  </div>
</nav>