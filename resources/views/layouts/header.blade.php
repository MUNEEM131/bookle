<nav class="bg-blue-600 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <!-- Logo Section -->
        <div class="flex-shrink-0">
          <a href="/" class="flex items-center space-x-2">
            <img src="/image/logoo.png" alt="Bookezly Logo" class="h-14 w-36" />
          </a>
        </div>
        <!-- Nav Links -->
        <nav class="bg-blue-600 shadow-md fixed top-0 left-0 w-full z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                  <a href="/" class="flex items-center space-x-2">
                    <img src="/image/logoo.png" alt="Bookezly Logo" class="h-14 w-36" />
                  </a>
                </div>

                <!-- Nav Links -->
                <div class="hidden md:flex space-x-8 text-white font-medium">
                  <a href="/" class="hover:text-gray-200 transition">Home</a>
                  <a href="#" class="hover:text-gray-200 transition">Products</a>
                  <a href="#" class="hover:text-gray-200 transition">Solutions</a>
                  <a href="{{ url('/pricing') }}" class="hover:text-gray-200 transition">Pricing</a> <!-- ✅ this line -->
                </div>

                <!-- CTA Buttons -->
                <div class="hidden md:flex space-x-4 items-center">
                  <a href="#" class="text-white hover:text-gray-200 font-medium">Get a demo</a>
                  <a href="#" class="bg-white text-blue-600 px-4 py-2 rounded hover:bg-gray-100 transition">Get started free</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                  <button onclick="toggleMenu()" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Mobile Menu -->
              <div id="mobileMenu" class="md:hidden hidden mt-2 space-y-2 text-white">
                <a href="/" class="block px-2 py-2 hover:bg-blue-700 rounded">Home</a>
                <a href="#" class="block px-2 py-2 hover:bg-blue-700 rounded">Products</a>
                <a href="#" class="block px-2 py-2 hover:bg-blue-700 rounded">Solutions</a>
                <a href="{{ url('/pricing') }}" class="block px-2 py-2 hover:bg-blue-700 rounded">Pricing</a> <!-- ✅ -->
                <hr class="border-blue-500">
                <a href="#" class="block px-2 py-2 hover:bg-blue-700 rounded">Get a demo</a>
                <a href="#" class="block px-2 py-2 bg-white text-blue-600 text-center rounded hover:bg-gray-100">Get started free</a>
              </div>
            </div>
          </nav>

        <!-- Buttons -->
        <div class="hidden md:flex space-x-4 items-center">
          <a href="#" class="text-white hover:text-gray-200 font-medium">Get a demo</a>
          <a href="#" class="bg-white text-blue-600 px-4 py-2 rounded hover:bg-gray-100 transition">Get started free</a>
        </div>
        <!-- Mobile Toggle -->
        <div class="md:hidden">
          <button onclick="toggleMenu()" class="text-white focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
      <!-- Mobile Menu -->
      <div id="mobileMenu" class="md:hidden hidden mt-2 space-y-2 text-white">
        <a href="#" class="block px-2 py-2 hover:bg-blue-700 rounded">HubSpot</a>
        <a href="#" class="block px-2 py-2 hover:bg-blue-700 rounded">Products</a>
        <a href="#" class="block px-2 py-2 hover:bg-blue-700 rounded">Solutions</a>
        <a href="#" class="block px-2 py-2 hover:bg-blue-700 rounded">Pricing</a>
        <hr class="border-blue-500">
        <a href="#" class="block px-2 py-2 hover:bg-blue-700 rounded">Get a demo</a>
        <a href="#" class="block px-2 py-2 bg-white text-blue-600 text-center rounded hover:bg-gray-100">Get started free</a>
      </div>
    </div>
  </nav>
