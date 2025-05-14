<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chef Dashboard</title>
 
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
 
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      crossorigin="anonymous"
    />
  </head>
 
  <body class="bg-gray-50">
    <!-- TOP NAVBAR -->
    <nav class="bg-white shadow-md p-6 flex items-center justify-between">
      <!-- Logo -->
      <div class="w-1/4">
        <img
          src="https://cdn.pixabay.com/photo/2014/02/26/03/47/hard-rock-cafe-274809_960_720.jpg"
          alt="Logo"
          class="h-20 w-auto mx-auto"
        />
      </div>
 
      <!-- Center Title -->
      <div class="w-2/4 text-center">
        <h1 class="text-xl font-semibold text-gray-800">
          MEXING POT RESTAURANT
        </h1>
      </div>
 
      <!-- User Info -->
      <div class="w-1/4 flex justify-end items-center gap-4">
        <img
          src="https://cdn.pixabay.com/photo/2015/05/20/14/23/baby-775503_1280.jpg"
          alt="User"
          class="w-14 h-14 rounded-full object-cover"
        />
        <div class="text-sm text-right">
          <div class="font-semibold text-gray-800">Adam Go</div>
          <div class="text-gray-500 text-xs">Head Chef</div>
          <button class="text-orange-500 text-xs mt-1 hover:underline">
            Log Out
          </button>
        </div>
      </div>
    </nav>
 
    <!-- SECOND BAR (Tabs + Icons) -->
    <div class="bg-white shadow-sm border-t border-gray-200 mt-6">
      <div class="flex flex-wrap items-center justify-between px-6 py-3">
        <!-- Tab -->
        <div>
          <button class="px-4 py-1 border rounded text-orange-500 border-orange-300 font-semibold text-sm shadow-sm">
            Statistics
          </button>
        </div>
 
        <!-- Icon Row -->
        <div class="flex gap-4 flex-wrap justify-end text-xl">
          <button class="p-2 hover:bg-gray-100 rounded-full text-orange-500" title="Delivery">
            <i class="fas fa-motorcycle"></i>
          </button>
          <button class="p-2 hover:bg-gray-100 rounded-full text-blue-600" title="Calendar">
            <i class="fas fa-calendar-alt"></i>
          </button>
          <button class="p-2 hover:bg-gray-100 rounded-full text-green-600" title="Meal">
            <i class="fas fa-utensils"></i>
          </button>
          <button class="p-2 hover:bg-gray-100 rounded-full text-yellow-600" title="Ingredients">
            <i class="fas fa-list"></i>
          </button>
          <button class="p-2 hover:bg-gray-100 rounded-full text-purple-600" title="Task">
            <i class="fas fa-tasks"></i>
          </button>
          <button class="p-2 hover:bg-gray-100 rounded-full text-pink-600" title="Cart">
            <i class="fas fa-shopping-cart"></i>
          </button>
        </div>
      </div>
 
      <!-- Button Grid Section -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 px-6 py-10 max-w-4xl mx-auto">
        <button class="bg-orange-500 text-white py-4 rounded-xl shadow-lg hover:bg-orange-600 text-lg font-semibold transition duration-300">
          Admin
        </button>
        <button class="bg-orange-500 text-white py-4 rounded-xl shadow-lg hover:bg-orange-600 text-lg font-semibold transition duration-300">
          My Kitchen
        </button>
        <button class="bg-orange-500 text-white py-4 rounded-xl shadow-lg hover:bg-orange-600 text-lg font-semibold transition duration-300">
          Suppliers
        </button>
        <button class="bg-orange-500 text-white py-4 rounded-xl shadow-lg hover:bg-orange-600 text-lg font-semibold transition duration-300">
          Orders
        </button>
      </div>
    </div>
  </body>
</html>