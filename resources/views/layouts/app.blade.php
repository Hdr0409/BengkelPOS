<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Admin</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }

        .glass-sidebar {
            background: rgba(2, 6, 23, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .active-menu {
            background: #4f46e5;
            box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.4);
        }

        .content-gradient {
            background: radial-gradient(circle at top right, #f8fafc, #f1f5f9);
        }
    </style>
</head>
<body class="content-gradient min-h-screen text-slate-900">

    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path></svg>
    </button>

    <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-4 py-6 overflow-y-auto glass-sidebar border-r border-slate-800 flex flex-col justify-between">

            <div>
                <div class="flex items-center gap-3 px-4 mb-10">
                    <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <div>
                        <h1 class="text-white font-bold text-xl tracking-tight leading-none">test admin</h1>
                        <span class="text-slate-500 text-xs font-medium uppercase tracking-widest">Admin</span>
                    </div>
                </div>

                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="/admin/dashboard" class="flex items-center gap-3 px-4 py-3 text-slate-300 rounded-xl transition-all duration-200 hover:bg-slate-800 hover:text-white hover:translate-x-1 {{ request()->routeIs('dashboard') ? 'active-menu text-white' : '' }}">
                            <span class="text-lg">📊</span>
                            <span>Dasboard</span>
                        </a>
                    </li>
                </ul>
            </div>

            @if(Auth::check())
            <div class="mt-auto pt-6 border-t border-slate-800">
                <div class="flex items-center justify-between px-2">
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <img class="w-10 h-10 rounded-full border-2 border-slate-700 shadow-sm" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=6366f1&color=fff" alt="User">
                            <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-slate-900 rounded-full"></div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-semibold text-white truncate w-24">{{ Auth::user()->name }}</span>
                            <span class="text-[10px] text-slate-500 font-medium uppercase tracking-tight">Administrator</span>
                        </div>
                    </div>

                         <a href="" class="inline-flex items-center justify-center rounded-xl bg-rose-50 px-5 py-2.5 text-sm font-bold text-rose-600 transition-all duration-300 hover:bg-rose-600 hover:text-white">
                            Logout
                        </a>
                </div>
            </div>
            @endif
        </div>
    </aside>

    <div class="sm:ml-72">
        <nav class="sticky top-0 z-30 bg-white/80 backdrop-blur-md border-b border-gray-200 px-8 py-4">
            <div class="flex items-center justify-between max-w-7xl mx-auto">
                <div>
                    <h2 class="text-lg font-bold text-slate-800">
                        @yield('page_title', 'Dashboard')
                    </h2>
                    <p class="text-xs text-slate-500 font-medium">Welcome back, {{ Auth::user()->name }} 👋</p>
                </div>

                <div class="flex items-center gap-4">
                    <div class="hidden md:block relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 block w-64 ps-10 p-2" placeholder="Cari sesuatu...">
                    </div>

                    <button class="p-2 text-slate-400 hover:bg-slate-100 rounded-xl transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </button>
                </div>
            </div>
        </nav>

        <main class="p-8 max-w-7xl mx-auto">
            @if(session('success'))
                <div id="alert-3" class="flex items-center p-4 mb-6 text-green-800 rounded-xl bg-green-50 border border-green-100" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg>
                    <div class="ms-3 text-sm font-medium">{{ session('success') }}</div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
                    </button>
                </div>
            @endif

            <div class="animate-fadeIn">
                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
        // Smooth transition effect
        document.addEventListener('DOMContentLoaded', () => {
            const main = document.querySelector('main');
            main.style.opacity = '0';
            main.style.transition = 'opacity 0.4s ease-in-out';
            setTimeout(() => main.style.opacity = '1', 50);
        });
    </script>
</body>
</html>
