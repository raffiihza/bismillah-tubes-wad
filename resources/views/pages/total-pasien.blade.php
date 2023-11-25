@extends('layouts.app')

@section('content')
    <div class="flex flex-col pb-8">
        <x-announcement  />

        <div class="m-8">
            <h1 class="text-lg font-bold mb-4">Total Antrian</h1>

            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Pasien</th>
                            <th>Nomor Whatsapp</th>
                            <th>Tanggal Masuk</th>
                            <th>Tipe Pasien</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col gap-2 lg:gap-0 lg:flex-row justify-center lg:justify-between mt-4 items-center">
                <p class="text-sm">Showing 1 sampai 6 dari 6 data</p>

                <x-pagination />
            </div>
        </div>
    </div>
@endsection
