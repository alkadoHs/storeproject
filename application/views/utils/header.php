<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css") ?>">
      <script src="<?php echo base_url("assets/libs/jquery/jquery.js") ?>"></script>
      <script src="<?php echo base_url("assets/libs/charts/charts.js") ?>"></script>
      <script src="<?php echo base_url("assets/libs/Datatables/datatable.js") ?>"></script>
      <script src="<?php echo base_url("assets/libs/select2/select2.js") ?>"></script>
      <title>Homepage</title>
      <style>
         tbody tr {
            border-bottom: 1px solid #cbd5e1 !important;
         }

         .dataTables_wrapper {
            display: grid;
            width: 100%;
            grid-template-columns: auto auto;
            justify-content: space-between;
            position: relative;
         }

         .dataTables_filter input, .dataTables_length select {
               border: 1px solid #cbd5e1;
               border-radius: 5px;
               outline: none !important;
         }

         .dataTables_filter input:focus {
            border: 1px solid #cbd5e1 !important;
            outline: 2px solid #cbd5e1 !important;
         }

         .dataTables_paginate {
            display: flex;
            align-items: center;
            gap: 0.7rem;
         }

         .dataTables_paginate a, .dataTables_paginate span {
            background-color: #6366f1;
            border: none;
            border-radius: 4px;
            padding: 7px 10px;
            color: white;
            cursor: pointer;
         }

         .dataTables_paginate a:hover {
            background-color: #818cf8;
            font-weight: 600;
         }

         table {
            grid-column: 1/span 2;
         }
      </style>
   </head>
<body class="bg-gradient-to-r from-indigo-600 to-violet-500">
<nav class="fixed top-0 z-50 w-full bg-white border-b border-slate-500 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-slate-300 hover:text-orange-600 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 mr-3 stroke-orange-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
         </svg>
         <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">Store</span>
        </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ml-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-indigo-500 font-semibold" role="none">
                  Kado Hs
                </p>
                <p class="text-sm text-slate-800 font-semibold truncate dark:text-gray-300" role="none">
                  alkadosichone@gmail.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="<?= site_url('dashboard') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-300 hover:text-orange-600 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="<?= site_url('account') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-300 hover:text-orange-600 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Account</a>
                </li>
                <li>
                  <a href="<?= site_url('logout') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-300 hover:text-orange-600 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-inherit border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-inherit dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li class="bg-white rounded-lg">
            <a href="<?= site_url('') ?>" class="flex items-center p-2 text-slate-800 rounded-lg hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700 group">
               <svg class="w-5 h-5 text-gray-500 stroke-indigo-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-800 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li class="bg-white rounded-lg">
            <a href="<?= site_url('sell') ?>" class="flex items-center p-2 text-slate-800 rounded-lg hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700 group">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
               </svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Release Item</span>
               <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
            </a>
         </li>
         <li class="bg-white rounded-lg">
            <button type="button" class="flex items-center w-full p-2 text-base text-slate-800 transition duration-150 rounded-lg group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                  </svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap">Users</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                  </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                  <li>
                     <a href="<?= site_url('user/register') ?>" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--Register</a>
                  </li>
                  <li>
                     <a href="<?= site_url('user/pyroll') ?>" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--Payrol</a>
                  </li> 
            </ul>
         </li>
         <li class="bg-white rounded-lg">
             <button type="button" class="flex items-center w-full p-2 text-base text-slate-800 transition duration-150 rounded-lg group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700" aria-controls="dropdown-product" data-collapse-toggle="dropdown-product">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                  </svg>


                  <span class="flex-1 ml-3 text-left whitespace-nowrap">Manage Items</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                  </svg>
            </button>
            <ul id="dropdown-product" class="hidden py-2 space-y-2">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--New Items</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--Add Expired Item</a>
                  </li> 
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--All Items</a>
                  </li>
            </ul>
         </li>
         <li class="bg-white rounded-lg">
            <button type="button" class="flex items-center w-full p-2 text-base text-slate-800 transition duration-150 rounded-lg group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700" aria-controls="dropdown-store" data-collapse-toggle="dropdown-store">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                  </svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap">Store</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                  </svg>
            </button>
            <ul id="dropdown-store" class="hidden py-2 space-y-2">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-200 dark:hover:bg-gray-700">--All Store Items</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">-- Expired Items</a>
                  </li> 
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--Returned Items</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--Items Categories</a>
                  </li>
            </ul>
         </li>
         <li class="bg-white rounded-lg">
            <button type="button" class="flex items-center w-full p-2 text-base text-slate-800 transition duration-150 rounded-lg group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700" aria-controls="dropdown-product" data-collapse-toggle="dropdown-todaysales">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                  </svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap">Today's Report</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                  </svg>
            </button>
            <ul id="dropdown-todaysales" class="hidden py-2 space-y-2">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--General Released</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--Released today</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--Returned Today</a>
                  </li>  
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">--Inventory Report</a>
                  </li> 
            </ul>
         </li>
         <li class="bg-white rounded-lg">
            <a href="#" class="flex items-center p-2 text-slate-800 rounded-lg hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700 group">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
               </svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Inventory System</span>
            </a>
         </li>
         
         <li class="bg-white rounded-lg">
            <a href="#" class="flex items-center p-2 text-slate-800 rounded-lg hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700 group">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
               </svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Add Expenses</span>
            </a>
         </li>

         <li class="bg-white rounded-lg">
            <button type="button" class="flex items-center w-full p-2 text-base text-slate-800 transition duration-150 rounded-lg group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700" aria-controls="dropdown-report" data-collapse-toggle="dropdown-report">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                  </svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap">Reports</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-indigo-500">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                  </svg>
            </button>
            <ul id="dropdown-report" class="hidden py-2 space-y-2">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-200 dark:hover:bg-gray-700">-- Today's Sales</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">-- General Sales</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">-- Today's Expenses</a>
                  </li> 
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">-- General Expenses</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-slate-800 transition duration-75 rounded-lg pl-11 group hover:bg-slate-300 hover:text-orange-600 dark:hover:bg-gray-700">-- Out of Stock</a>
                  </li>
            </ul>
         </li>
      </ul>
   </div>
</aside>

