<!-- resources/views/rooms/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section('title', 'Daftar Room')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Room</h1>

    @if (session('success'))
        <div class="text-green-600 mb-4">{{ session('success') }}</div>
    @endif

    <a href="{{ route('rooms.create') }}" class="text-blue-600 underline">+ Tambah Room</a>

    <ul class="mt-4 space-y-2">
        @foreach ($rooms as $room)
            <li class="p-4 bg-white rounded shadow">
                <strong>{{ $room->name }}</strong> - {{ $room->date }}<br>
                Link: <a href="{{ $room->googleMeet->link }}" class="text-blue-500 underline" target="_blank">{{ $room->googleMeet->link }}</a>
            </li>
        @endforeach
    </ul>
@endsection
