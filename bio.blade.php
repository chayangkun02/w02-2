@extends('layouts.app')

@section('title', 'Bio - ประวัติผู้จัดทำ')

@section('banner')
    <h1 class="text-7xl font-bold text-blue-600">Bio</h1>
    <p class="text-gray-500 mt-2">ประวัติส่วนตัวของผู้จัดทำเว็บไซต์</p>
@endsection

@section('content')
    <div class="sriracha-regular space-y-3 text-lg text-gray-700">
        <h2 class="text-2xl text-blue-700 mb-4">ข้อมูลผู้จัดทำ</h2>
        <p><span class="text-gray-900">ชื่อ-นามสกุล:</span> นายชยางกูร (Chayangkun)</p>
        <p><span class="text-gray-900">สาขาวิชา:</span> เทคโนโลยีสารสนเทศ / วิทยาการคอมพิวเตอร์</p>
        <p><span class="text-gray-900">ความสนใจ:</span> การพัฒนาเว็บแอปพลิเคชันด้วย Laravel และระบบสารสนเทศภูมิศาสตร์</p>
    </div>
@endsection