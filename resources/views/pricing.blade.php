@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-10">
  <h1 class="text-4xl sm:text-5xl font-bold text-blue-700 mb-12">Choose Your Plan</h1>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Basic Plan -->
    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-200 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-blue-400 hover:bg-blue-50 cursor-pointer flex flex-col justify-between min-h-[560px]">
      <div>
        <h2 class="text-2xl font-semibold mb-2 text-blue-700">Basic</h2>
        <p class="text-3xl font-bold mb-6 text-gray-900">$9<span class="text-base font-medium">/mo</span></p>
        <ul class="text-left mb-6 space-y-3 text-gray-700 text-sm sm:text-base">
          <li>✅ 1 User</li>
          <li>✅ Basic Support</li>
          <li>✅ Access to Core Features</li>
          <li>✅ Email Notifications</li>
          <li>✅ 1 GB Storage</li>
          <li>✅ Mobile Access</li>
        </ul>
      </div>
      <a href="#" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full hover:from-purple-700 hover:to-blue-700 transition font-medium">
        Start Free
      </a>
    </div>

    <!-- Pro Plan -->
    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-200 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-blue-400 hover:bg-blue-50 cursor-pointer flex flex-col justify-between min-h-[560px]">
      <div>
        <h2 class="text-2xl font-semibold mb-2 text-blue-700">Pro</h2>
        <p class="text-3xl font-bold mb-6 text-gray-900">$29<span class="text-base font-medium">/mo</span></p>
        <ul class="text-left mb-6 space-y-3 text-gray-700 text-sm sm:text-base">
          <li>✅ 5 Users</li>
          <li>✅ Priority Support</li>
          <li>✅ All Features Included</li>
          <li>✅ Calendar Integration</li>
          <li>✅ Advanced Analytics</li>
          <li>✅ 10 GB Storage</li>
          <li>✅ Team Collaboration Tools</li>
        </ul>
      </div>
      <a href="#" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full hover:from-purple-700 hover:to-blue-700 transition font-medium">
        Start Now
      </a>
    </div>

    <!-- Enterprise Plan -->
    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg border border-gray-200 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-blue-400 hover:bg-blue-50 cursor-pointer flex flex-col justify-between min-h-[560px]">
      <div>
        <h2 class="text-2xl font-semibold mb-2 text-blue-700">Enterprise</h2>
        <p class="text-3xl font-bold mb-6 text-gray-900">Contact Us</p>
        <ul class="text-left mb-6 space-y-3 text-gray-700 text-sm sm:text-base">
          <li>✅ Unlimited Users</li>
          <li>✅ Dedicated Account Manager</li>
          <li>✅ Custom Integrations</li>
          <li>✅ API Access</li>
          <li>✅ 24/7 Premium Support</li>
          <li>✅ Unlimited Storage</li>
          <li>✅ Onboarding & Training</li>
        </ul>
      </div>
      <a href="#" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full hover:from-purple-700 hover:to-blue-700 transition font-medium">
        Contact Sales
      </a>
    </div>
  </div>
</div>
@endsection
