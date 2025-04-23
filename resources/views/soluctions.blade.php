@extends('layouts.app')

@section('soluctions')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <h1 class="text-4xl font-bold text-blue-700 mb-12 text-center">Our Solutions</h1>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    <!-- Left Side: Small Solution Cards -->
    <div class="space-y-6">
      <!-- Card 1: Dashboard -->
      <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Dashboard</h3>
        <p class="text-gray-700 text-sm">
          Welcome to your Dashboard! This section provides an overview of key metrics and activities for both Admin and Regular Users:
        </p>
        <ul class="list-disc pl-5 text-gray-700 text-sm">
          <li><strong>Total Bookings:</strong> Displays the total number of bookings made.</li>
          <li><strong>Active Users:</strong> Number of users currently booking spaces or working in the system.</li>
          <li><strong>Available Spaces:</strong> Shows the number of spaces that are available to book.</li>
          <li><strong>Revenue This Month:</strong> Total revenue earned from bookings this month.</li>
          <li><strong>Upcoming Bookings:</strong> Displays a list of upcoming space reservations.</li>
        </ul>
      </div>

      <!-- Card 2: Space Management -->
      <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Space</h3>
        <p class="text-gray-700 text-sm">
          Manage your workspaces and bookings with ease. Here's what you can do:
        </p>
        <ul class="list-disc pl-5 text-gray-700 text-sm">
          <li><strong>Add New Venue:</strong> Add a new space or venue with details like capacity, price per hour, space type (e.g., hot desk, private office), and available amenities.</li>
          <li><strong>Edit Venue Information:</strong> Update existing venues to reflect changes in space layout, pricing, or availability.</li>
          <li><strong>Set Availability:</strong> Set hours for each venue (e.g., from 9 AM to 6 PM) and customize availability for specific events or weekends.</li>
          <li><strong>Manage Pricing:</strong> Configure pricing based on space types (e.g., private office, meeting room) and booking duration (hourly, daily, etc.).</li>
          <li><strong>Amenities Management:</strong> List amenities like Wi-Fi, printers, whiteboards, coffee machines, projectors, etc., for each venue.</li>
          <li><strong>Booking History:</strong> Track booking data to review past reservations, space usage, and revenue.</li>
        </ul>
      </div>

      <!-- Card 3: Venue Management -->
      <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Venue</h3>
        <p class="text-gray-700 text-sm">
          Manage your venues and spaces effectively. This section allows admins to oversee all the co-working spaces, ensuring proper setup and smooth operations.
        </p>
        <ul class="list-disc pl-5 text-gray-700 text-sm">
          <li><strong>Add New Venue:</strong> Add new venues with all necessary details like capacity, price per hour, and available amenities.</li>
          <li><strong>Edit Venue Information:</strong> Update space details like pricing, layout, and availability.</li>
          <li><strong>Set Availability:</strong> Customize space hours to suit business hours or special events.</li>
          <li><strong>Manage Pricing:</strong> Set pricing rules based on venue type and booking length.</li>
          <li><strong>Amenities Management:</strong> List out facilities like Wi-Fi, projectors, and more for each venue.</li>
        </ul>
      </div>

      <!-- Card 4: User Management -->
      <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold text-blue-600 mb-2">Users</h3>
        <p class="text-gray-700 text-sm">
          Manage users and their access to various spaces. This section enables you to oversee user activity and ensure appropriate access to resources.
        </p>
        <ul class="list-disc pl-5 text-gray-700 text-sm">
          <li><strong>View All Users:</strong> Access a list of all users, their activity status, and membership details.</li>
          <li><strong>Assign Roles:</strong> Assign specific roles to users (Admin, Regular User, etc.) with appropriate permissions.</li>
          <li><strong>Manage User Access:</strong> Grant or revoke access to particular spaces or services based on user roles and memberships.</li>
          <li><strong>Track User Activity:</strong> Monitor the frequency and types of spaces booked by users to ensure proper resource management.</li>
          <li><strong>Send Notifications:</strong> Communicate directly with users to send reminders, updates, and announcements regarding bookings or system updates.</li>
        </ul>
      </div>
    </div>

    <!-- Right Side: Large Feature Card with Additional Cards and Images Section -->
    <div class="lg:col-span-2 bg-blue-50 rounded-xl shadow-lg p-8">

      <!-- Account Settings Section -->
      <div class="mb-8">
        <h2 class="text-3xl font-bold text-blue-800 mb-4">Account Settings</h2>
        <p class="text-gray-700 text-base mb-6">
          We provide comprehensive digital solutions that cover every stage of your online journey — from idea to deployment. Whether you're starting fresh or looking to enhance an existing platform, our expert team is here to help.
        </p>
        <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition font-medium">
          Learn More
        </a>
      </div>

      <!-- Cards and Additional Content Section -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Card 1: Flexible Booking -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
          <div class="flex items-center gap-4">
            <img src="/image/booking-feature1.png" alt="Booking Feature" class="w-16 h-16 rounded-full object-cover">
            <div>
              <h3 class="text-xl font-semibold text-blue-600">Flexible Booking</h3>
              <p class="text-gray-700 text-sm">
                Our software provides flexible booking options, allowing users to book workspaces on an hourly, daily, or weekly basis with ease.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 2: User-Friendly Interface -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
          <div class="flex items-center gap-4">
            <img src="/image/booking-feature2.png" alt="User Interface" class="w-16 h-16 rounded-full object-cover">
            <div>
              <h3 class="text-xl font-semibold text-blue-600">User-Friendly Interface</h3>
              <p class="text-gray-700 text-sm">
                The user-friendly interface ensures smooth navigation and ease of use for both admins and customers booking spaces.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 3: Real-Time Availability -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
          <div class="flex items-center gap-4">
            <img src="/image/booking-feature3.png" alt="Real-Time Availability" class="w-16 h-16 rounded-full object-cover">
            <div>
              <h3 class="text-xl font-semibold text-blue-600">Real-Time Availability</h3>
              <p class="text-gray-700 text-sm">
                Get real-time updates about available spaces, so users can book or reserve the space they need instantly without delays.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 4: Secure Payments -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
          <div class="flex items-center gap-4">
            <img src="/image/booking-feature4.png" alt="Secure Payments" class="w-16 h-16 rounded-full object-cover">
            <div>
              <h3 class="text-xl font-semibold text-blue-600">Secure Payments</h3>
              <p class="text-gray-700 text-sm">
                Ensure secure payment processing with multiple payment methods and full transaction history for users and admins.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 5: Customizable Pricing -->
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
          <div class="flex items-center gap-4">
            <img src="/image/booking-feature5.png" alt="Custom Pricing" class="w-16 h-16 rounded-full object-cover">
            <div>
              <h3 class="text-xl font-semibold text-blue-600">Custom Pricing</h3>
              <p class="text-gray-700 text-sm">
                Set your own pricing model with flexibility for different workspace types and booking durations.
              </p>
            </div>
          </div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
            <div class="flex items-center gap-4">
              <img src="/image/booking-feature5.png" alt="Custom Pricing" class="w-16 h-16 rounded-full object-cover">
              <div>
                <h3 class="text-xl font-semibold text-blue-600"> Pricing</h3>
                <p class="text-gray-700 text-sm">
                  Set your own pricing model with flexibility for different workspace types and booking durations.
                </p>
              </div>
            </div>
          </div>
      </div>

      <!-- Image after the cards section -->
      <div class="mt-8">
        <img src="/image/1.png" alt="Booking Software Overview" class="w-full rounded-lg shadow-lg">
      </div>
      <h1 class="text-3xl font-bold text-center text-blue-800">Test</h1>
      <div class="mt-8">
        <img src="/image/4.png" alt="Booking Software Overview" class="w-full rounded-lg shadow-lg">
      </div>
    </div>
  </div>
</div>
@endsection
