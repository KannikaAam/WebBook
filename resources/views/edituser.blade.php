@extends('layouts.Backend.master')

@section('content')
{{-- การส่ง id เข้าไปที่ componen --}}
@livewire('edituser' ,['id'=>$id])
@endsection
