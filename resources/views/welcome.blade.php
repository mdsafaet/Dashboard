<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
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
    <nav class="bg-white shadow-md p-6 flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
      <!-- Logo -->
      <div class="md:w-1/4">
        <img
          src="https://cdn.pixabay.com/photo/2014/02/26/03/47/hard-rock-cafe-274809_960_720.jpg"
          alt="Logo"
          class="h-20 w-auto mx-auto md:mx-0"
        />
      </div>

      <!-- Restaurant Title -->
      <div class="md:w-2/4">
        <h1 class="text-xl text-center font-semibold text-gray-800">MEXING POT RESTAURANT</h1>
      </div>

      <!-- User Info -->
      <div class="md:w-1/4 flex items-center justify-center md:justify-end gap-4">
        <img
          src="https://cdn.pixabay.com/photo/2015/05/20/14/23/baby-775503_1280.jpg"
          alt="User"
          class="w-14 h-14 rounded-full object-cover"
        />
        <div class="text-sm text-left">
          <div class="font-semibold text-gray-800">Adam Go</div>
          <div class="text-gray-500 text-xs">Head Chef</div>
          <button class="text-orange-500 text-xs mt-1 hover:underline">Log Out</button>
        </div>
      </div>
    </nav>

    <!-- SECOND NAVBAR: Tabs and Icons -->
    <div class="bg-white shadow-sm border-t border-gray-200 mt-6">
      <div class="flex flex-col lg:flex-row items-center justify-between px-6 py-3 gap-4">
        <!-- Tab -->
        <div>
          <button class="px-4 py-1 border rounded text-orange-500 border-orange-300 font-semibold text-sm shadow-sm">
            Statistics
          </button>
        </div>

        <!-- Icons -->
        <div class="flex gap-4 flex-wrap justify-center lg:justify-end text-xl">
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
          <button class="p-2 hover:bg-gray-100 rounded-full text-purple-600" title="Tasks">
            <i class="fas fa-tasks"></i>
          </button>
          <button class="p-2 hover:bg-gray-100 rounded-full text-pink-600" title="Cart">
            <i class="fas fa-shopping-cart"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- BUTTON GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-6 py-10 max-w-6xl mx-auto">
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
  </body>
</html>
