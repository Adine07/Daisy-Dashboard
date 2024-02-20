<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TailwindCSS DaisyUI Dashboard Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    @vite('resources/css/app.css')
  </head>

  <body>
    <div class="drawer lg:drawer-open">
      <input id="drawer-toggle" type="checkbox" class="drawer-toggle" />
      <main class="drawer-content flex flex-col items-center lg:p-8 p-4 space-y-8 bg-base-200 min-h-screen">
        <!-- Page content here -->
        <div class="navbar bg-base-100 rounded-box shadow-md">
          <label for="drawer-toggle" class="drawer-button lg:hidden">
            <i class="uil uil-subject text-2xl text-gray-500"></i>
          </label>
          <div class="flex-1">
            <a class="btn btn-ghost text-xl">daisyUI</a>
          </div>
          <div class="flex-none">
            
            <div class="dropdown dropdown-end">
              <label tabindex="0" class="btn btn-ghost btn-square rounded-box">
                <i class="uil uil-swatchbook text-2xl text-gray-500"></i>
              </label>
              <ul tabindex="0" class="menu menu-compact dropdown-content mt-5 p-2 shadow bg-base-100 rounded-box w-40 max-h-64 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300">
                <li><a data-set-theme="light">light</a></li>
                <li><a data-set-theme="dark">dark</a></li>
                <li><a data-set-theme="cupcake">cupcake</a></li>
              </ul>
            </div>

            <div class="dropdown dropdown-end">
              <div tabindex="0" role="button" class="btn btn-ghost btn-square rounded-box">
                <div class="indicator">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                  <span class="badge badge-sm indicator-item">8</span>
                </div>
              </div>
              <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                <div class="card-body">
                  <span class="font-bold text-lg">8 Items</span>
                  <span class="text-info">Subtotal: $999</span>
                  <div class="card-actions">
                    <button class="btn btn-primary btn-block">View cart</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="dropdown dropdown-end">
              <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar mt-2 mx-2 shadow">
                <div class="w-12 rounded-full">
                  <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
              </div>
              <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                  <a class="justify-between">
                    Profile
                    <span class="badge">New</span>
                  </a>
                </li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      
      </main> 

      {{-- Sidebar --}}
      <aside class="drawer-side">
        <label for="drawer-toggle" aria-label="close sidebar" class="drawer-overlay"></label>
        <div class="scrollbar-thin scrollbar-thumb-gray-300 overflow-y-auto overflow-x-hidden border-r border-base-300 w-64 min-h-full bg-base-200">
          <h2 class="text-center mt-12 mb-16 text-3xl font-black"><span class="text-primary">Your</span> Logo</h2>

          <h6 class="font-semibold ml-6">General</h6>

          <ul class="menu p-2 text-gray-500 font-semibold mb-8">
            <!-- Sidebar content here -->
            <li class="active"><a href="#" class=""><i class="uil uil-airplay"></i>Home</a></li>
            <li><a><i class="uil uil-table"></i>Tables</a></li>
            <li><a><i class="uil uil-file-edit-alt"></i>Forms</a></li>
            <li><a><i class="uil uil-toggle-on"></i>Buttons</a></li>
            <li>
              <details class="collapse collapse-arrow">
                <summary class="collapse-title">
                  <i class="uil uil-trees"></i> Menus
                </summary>
                <div class="collapse-content ">
                  <ul class="menu w-full">
                    <li><a><i class="uil uil-angle-double-right"></i>Example 1</a></li>
                    <li><a><i class="uil uil-angle-double-right"></i>Example 2</a></li>
                  </ul> 
                </div>
              </details>
            </li>
          </ul>

        </div>
      
      </aside>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
  </body>
</html>