<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookezly</title>
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
  <div class="h-20"></div>

  <!-- Hero Section -->
  <main class="min-h-[300px] bg-blue-500 bg-opacity-60">
    <div class="max-w-7xl mx-auto px-4 py-16 text-white flex flex-col md:flex-row items-start gap-8">
      <div class="md:w-1/2">
        <img src="/image/2.png" alt="Books" class="rounded shadow-lg w-full object-cover">
      </div>
      <div class="md:w-1/2">
        <h1 class="text-3xl font-bold mb-4">Welcome to Bookezly</h1>
        <div class="space-y-2 text-lg">
          <p>Book appointments with ease and speed.</p>
          <p>Manage your schedule in one dashboard.</p>
          <p>Receive timely notifications and updates.</p>
          <p>Access anytime, anywhere.</p>
        </div>
      </div>
    </div>
  </main>

  <!-- Services -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Our Services</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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

  <!-- Contact Form -->
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
