@extends('layouts.app')

@section('title', 'GIS - หน้าแนะนำรายวิชา')

@section('banner')
    <h1 class="text-7xl font-bold text-amber-600">GIS</h1>
    <p class="text-gray-500 mt-2">Geographic Information System (ระบบสารสนเทศภูมิศาสตร์)</p>
@endsection

@section('content')
    <div class="sriracha-regular space-y-4 text-lg leading-relaxed text-gray-700">
        <h2 class="text-2xl text-amber-700">ยินดีต้อนรับสู่เว็บไซต์ประจำรายวิชา GIS</h2>
        <p>
            เว็บไซต์นี้จัดทำขึ้นเพื่อรวบรวมข้อมูลแนะนำรายวิชาระบบสารสนเทศภูมิศาสตร์ (GIS) 
            ประวัติของผู้จัดทำ และรายการชิ้นงาน/แบบฝึกหัดที่ได้รับมอบหมายตลอดภาคการศึกษา 
            โดยพัฒนาโครงสร้างเว็บไซต์ด้วย Laravel Blade Template
        </p>
    </div>
@endsection