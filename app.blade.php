<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - รายวิชา GIS</title>

        <!-- Google Fonts: Sriracha -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

        <style>
            .sriracha-regular {
                font-family: "Sriracha", cursive;
                font-weight: 400;
                font-style: normal;
            }
        </style>

        <!-- Tailwind CSS -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] flex flex-col min-h-screen">
        
        <!-- แถบเมนูนำทาง (Navbar) -->
        <nav class="bg-white border-b border-gray-200 shadow-sm">
            <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
                <a href="{{ url('/gis') }}" class="font-bold text-xl text-amber-600">GIS Course</a>
                <div class="space-x-6 text-base font-medium text-gray-700">
                    <a href="{{ url('/gis') }}" class="hover:text-amber-600 transition">GIS (หน้าแนะนำ)</a>
                    <a href="{{ url('/bio') }}" class="hover:text-amber-600 transition">Bio (ประวัติผู้จัดทำ)</a>
                    <a href="{{ url('/assignment') }}" class="hover:text-amber-600 transition">Assignment (รายการงาน)</a>
                </div>
            </div>
        </nav>

        <!-- เนื้อหาหลัก -->
        <main class="flex-1 max-w-4xl w-full mx-auto p-6 lg:p-8 space-y-6">
            <!-- ส่วนแสดง Banner -->
            <div class="border-b border-gray-200 pb-4">
                @yield('banner')
            </div>

            <!-- ส่วนแสดงเนื้อหาหลัก -->
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                @yield('content')
            </div>
        </main>

        <!-- ส่วนท้ายเว็บ (Footer) -->
        <footer class="border-t border-gray-200 py-4 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} จัดทำโดย Chayangkun | รายวิชา Geographic Information System (GIS)
        </footer>

    </body>
</html>