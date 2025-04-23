<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookezly</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bookezly:wght@400;600&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    .main-bg {
      background-image: url('https://via.placeholder.com/1600x900.png?text=Your+Background+Image');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
  </style>

  <script defer>
    function toggleMenu() {
      document.getElementById('mobileMenu').classList.toggle('hidden');
    }

    function openModal(imageSrc) {
      const modal = document.getElementById('imageModal');
      const modalImage = document.getElementById('modalImage');
      modalImage.src = imageSrc;
      modal.classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('imageModal').classList.add('hidden');
    }
  </script>
</head>
<body class="bg-blue-50">

  <!-- ✅ Laravel Header Include -->
  @include('layouts.header')

  <!-- ✅ Spacer -->
  <div class="h-2"></div>

  <!-- Hero Section -->
  <main class="min-h-[300px] bg-blue-500 bg-opacity-60">
    <div class="max-w-7xl mx-auto px-4 py-16 text-white flex flex-col md:flex-row items-start gap-8">
      <div class="md:w-1/2">
        <img src="/image/2.png" alt="Books" class="rounded shadow-lg w-full object-cover">
      </div>
      <div class="md:w-1/2">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Welcome to Bookezly</h1>
        <div class="space-y-2 text-lg">
          <p>Book appointments with ease and speed.</p>
          <p>Manage your schedule in one dashboard.</p>
          <p>Receive timely notifications and updates.</p>
          <p>Access anytime, anywhere.</p>
        </div>
      </div>
    </div>
  </main>

  <!-- Customer Platform Section -->
  <div class="max-w-7xl mx-auto py-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8 items-center px-4">
    <div>
      <h2 class="text-4xl font-bold text-blue-700 mb-4">Bookezly CUSTOMER PLATFORM</h2>
      <p class="text-lg text-gray-700 mb-6">
        Bookezly helps you unify your bookings, clients, and communications all in one platform.
        Powered by smart tools and automation, it streamlines your business workflows.
        Turn better customer experiences into your biggest growth advantage.
      </p>

      <div class="flex flex-wrap gap-4 mb-4">
        <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">Get a demo</a>
        <a href="#" class="bg-gray-200 text-gray-800 px-5 py-2 rounded hover:bg-gray-300 transition">Get started free</a>
      </div>

      <p class="text-sm text-gray-600">Get a demo of our premium software, or get started with free tools.</p>
    </div>

    <!-- Right Image -->
    <div class="text-center">
        <img src="/image/2.png" alt="Bookezly Logo" class="w-full object-cover">
    </div>
  </div>

  <!-- Services Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Our Bookezly Services</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="bg-blue-100 p-6 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-blue-800">Room Booking</h3>
          <p class="text-gray-600 mb-4">Book rooms quickly and easily online.</p>
          <a href="#" class="text-blue-600 hover:underline">Learn More</a>
        </div>
        <div class="bg-blue-100 p-6 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-blue-800">Time Scheduling</h3>
          <p class="text-gray-600 mb-4">Efficient time slots and reminders.</p>
          <a href="#" class="text-blue-600 hover:underline">Learn More</a>
        </div>
        <div class="bg-blue-100 p-6 rounded-lg text-center">
          <h3 class="text-xl font-semibold text-blue-800">Customer Reviews</h3>
          <p class="text-gray-600 mb-4">Build trust through user feedback.</p>
          <a href="#" class="text-blue-600 hover:underline">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Introduction Section -->
  <div class="max-w-7xl mx-auto py-12 text-center px-4">
    <h2 class="text-4xl font-bold text-blue-700 mb-4">Introducing Bookezly — Booking your needed time</h2>
    <p class="text-lg text-gray-700 mb-6">
      Bookezly digital workers that extend your team to scale support, automate prospecting, and create content faster.
    </p>
  </div>

  <!-- Card Section -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4">
    <!-- Card 1 - Account Setting -->
    <article class="bg-white p-6 rounded-lg shadow-md border">
      <h3 class="text-xl font-semibold text-blue-700 mb-2 text-center">Account Setting</h3>
      <img src="image/1.png" alt="Illustration for Account Settings" class="mx-auto mb-4 rounded">
      <p class="text-gray-700 mb-4 text-center">Scale support and resolve half of customer inquiries 24/7.</p>
      <a href="#" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-5 py-2 rounded-full shadow-md hover:from-purple-700 hover:to-blue-700 transition block  mx-auto text-center font-medium">
        Explore Settings
      </a>
    </article>

    <!-- Card 2 - Welcome -->
    <article class="bg-white p-6 rounded-lg shadow-md border">
      <h3 class="text-xl font-semibold text-blue-700 mb-2 text-center">Welcome</h3>
      <img src="image/2.png" alt="Welcome Illustration" class="mx-auto mb-4 rounded">
      <p class="text-gray-700 mb-4 text-center">Scale support and resolve half of customer inquiries 24/7.</p>
      <a href="#" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-5 py-2 rounded-full shadow-md hover:from-purple-700 hover:to-blue-700 transition block mx-auto text-center font-medium">
        Explore Settings
      </a>
    </article>

    <!-- Card 3 - Space -->
    <article class="bg-white p-6 rounded-lg shadow-md border">
      <h3 class="text-xl font-semibold text-blue-700 mb-2 text-center">Space</h3>
      <img src="image/3.png" alt="Illustration for Space Features" class="mx-auto mb-4 rounded">
      <p class="text-gray-700 mb-4 text-center">Scale support and resolve half of customer inquiries 24/7.</p>
      <a href="#" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-5 py-2 rounded-full shadow-md hover:from-purple-700 hover:to-blue-700 transition block mx-auto text-center font-medium">
        Explore Settings
      </a>
    </article>
  </div>

  <!-- Final Call to Action -->
  <div class="max-w-7xl mx-auto py-12 text-center px-4">
    <h2 class="text-4xl font-bold text-blue-700 mb-4">Bookezly is the Ultimate Solution for Your Business</h2>
    <p class="text-lg text-gray-700 mb-4">
      Use Bookezly to assist with customer inquiries, Breeze Agents to automate your work, Breeze Intelligence to enrich your data, and a growing list of Breeze features to help you get work done faster.
    </p>
    <div>
      <a href="#" class="bg-blue-700 text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition">
        Learn More
      </a>
    </div>
  </div>

  <!-- Results After 1 Year -->
  <div class="max-w-7xl mx-auto py-12 text-center px-4">
    <h2 class="text-4xl font-bold text-blue-700 mb-8">Bookezly Customer’s Results After 1 Year</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-md border">
        <div class="text-blue-600 mb-4">
          <i class="fas fa-percent text-4xl"></i>
        </div>
        <h3 class="text-2xl font-semibold text-blue-700 mb-2">114%</h3>
        <p class="text-lg text-gray-700 mb-4">More Web Traffic</p>
        <a href="#" class="bg-light-blue-100 text-blue-600 px-6 py-2 rounded-lg hover:bg-blue-200 transition block mx-auto text-center">
          See ROI report
        </a>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md border">
        <div class="text-blue-600 mb-4">
          <i class="fas fa-percent text-4xl"></i>
        </div>
        <h3 class="text-2xl font-semibold text-blue-700 mb-2">55%</h3>
        <p class="text-lg text-gray-700 mb-4">More Deals</p>
        <a href="#" class="bg-light-blue-100 text-blue-600 px-6 py-2 rounded-lg hover:bg-blue-200 transition block mx-auto text-center">
          See ROI report
        </a>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md border">
        <div class="text-blue-600 mb-4">
          <i class="fas fa-percent text-4xl"></i>
        </div>
        <h3 class="text-2xl font-semibold text-blue-700 mb-2">43%</h3>
        <p class="text-lg text-gray-700 mb-4">More Tickets Resolved</p>
        <a href="#" class="bg-light-blue-100 text-blue-600 px-6 py-2 rounded-lg hover:bg-blue-200 transition block mx-auto text-center">
          See ROI report
        </a>
      </div>
    </div>

    <p class="text-lg text-gray-700 mt-8">
      Bookezly customers see improvement across their customer journey. What could your ROI be?
    </p>
  </div>

  <!-- Contact Form Section -->
  <section class="py-16 bg-gray-100">
    <div class="max-w-4xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">Get a Free Quote</h2>
      <form class="space-y-4 bg-white p-6 rounded-lg shadow-md">
        <input type="text" placeholder="Your Name" class="w-full border border-gray-300 p-3 rounded" required />
        <input type="email" placeholder="Your Email" class="w-full border border-gray-300 p-3 rounded" required />
        <textarea placeholder="Describe your project..." rows="4" class="w-full border border-gray-300 p-3 rounded" required></textarea>
        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Send Inquiry</button>
      </form>
    </div>
  </section>

  <!-- ✅ Laravel Footer Include -->
  @include('layouts.footer')

</body>
</html>
