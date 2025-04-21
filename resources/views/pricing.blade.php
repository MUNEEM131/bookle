@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-16 text-center">
  <h1 class="text-4xl font-bold text-blue-700 mb-8">Choose Your Plan</h1>

  <div class="grid md:grid-cols-3 gap-8">
    <!-- Basic Plan -->
    <div class="bg-white p-6 rounded-lg shadow-md border">
      <h2 class="text-xl font-semibold mb-2">Basic</h2>
      <p class="text-2xl font-bold mb-4">$9/mo</p>
      <ul class="text-left mb-6 space-y-2 text-gray-700">
        <li>✅ 1 User</li>
        <li>✅ Basic Support</li>
        <li>✅ Access to Core Features</li>
        <li>✅ Email Notifications</li>
        <li>✅ 1 GB Storage</li>
        <li>✅ Mobile Access</li>
      </ul>
      <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Start Free</a>
    </div>

    <!-- Pro Plan -->
    <div class="bg-blue-100 p-6 rounded-lg shadow-lg border-2 border-blue-500">
      <h2 class="text-xl font-semibold mb-2">Pro</h2>
      <p class="text-2xl font-bold mb-4">$29/mo</p>
      <ul class="text-left mb-6 space-y-2 text-gray-700">
        <li>✅ 5 Users</li>
        <li>✅ Priority Support</li>
        <li>✅ All Features Included</li>
        <li>✅ Calendar Integration</li>
        <li>✅ Advanced Analytics</li>
        <li>✅ 10 GB Storage</li>
        <li>✅ Team Collaboration Tools</li>
      </ul>
      <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Start Now</a>
    </div>

    <!-- Enterprise Plan -->
    <div class="bg-white p-6 rounded-lg shadow-md border">
      <h2 class="text-xl font-semibold mb-2">Enterprise</h2>
      <p class="text-2xl font-bold mb-4">Contact Us</p>
      <ul class="text-left mb-6 space-y-2 text-gray-700">
        <li>✅ Unlimited Users</li>
        <li>✅ Dedicated Account Manager</li>
        <li>✅ Custom Integrations</li>
        <li>✅ API Access</li>
        <li>✅ 24/7 Premium Support</li>
        <li>✅ Unlimited Storage</li>
        <li>✅ Onboarding & Training</li>
      </ul>
      <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Contact Sales</a>
    </div>
  </div>
</div>
@endsection
