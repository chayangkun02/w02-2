@extends('layouts.app')

@section('title', 'Assignment - รายการงาน')

@section('banner')
    <h1 class="text-7xl font-bold text-emerald-600">Assignment</h1>
    <p class="text-gray-500 mt-2">รายการงานและแบบฝึกหัดประจำรายวิชา</p>
@endsection

@section('content')
    <div class="sriracha-regular space-y-4 text-lg text-gray-700">
        <h2 class="text-2xl text-emerald-700">รายการชิ้นงานที่ได้รับมอบหมาย</h2>
        <ul class="list-disc list-inside space-y-2">
            <li><span class="text-gray-900">งานที่ 1:</span> การติดตั้งและตั้งค่าสภาพแวดล้อม Laravel Framework</li>
            <li><span class="text-gray-900">งานที่ 2:</span> การสร้าง Route และ View เบื้องต้น</li>
            <li><span class="text-gray-900">งานที่ 3:</span> การสร้างเลย์เอาท์เว็บด้วย Blade Template (GIS, Bio, Assignment)</li>
        </ul>
    </div>
@endsection