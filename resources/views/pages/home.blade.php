@extends('layouts.app')

@section('content')
<div class="flex flex-col min-h-screen">
    <x-hero />

    <div class="flex-auto bg-error">
        <div class="grid md:grid-cols-3 gap-10 mx-10 -translate-y-[10%] lg:-translate-y-1/2">
            <x-card cardTitle="Antrian" cardLink="{{ route('antrian') }}" cardImage="/antrian.png"/>
            <x-card cardTitle="Total Pasien" cardLink="{{ route('total-pasien') }}" cardImage="/total-pasien.png"/>
            <x-card cardTitle="Informasi" cardLink="{{ route('informasi') }}" cardImage="/informasi.png"/>
        </div>
    </div>
</div>
@endsection
