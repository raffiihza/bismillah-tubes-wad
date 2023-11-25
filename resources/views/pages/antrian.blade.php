@extends('layouts.app')

@section('content')
    <div class="flex flex-col pb-8">
        <x-announcement text="Refresh untuk memperbarui nomor antrian" />

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
            <div class="card card-compact card-side bg-base-100 shadow-xl">
                <div class="flex items-center w-full">
                    <div class="card-body">
                        <h2 class="text-error mt-2 lg:text-3xl text-2xl font-bold">
                            6
                        </h2>
                        <p>
                            Jumlah Antrian
                        </p>
                    </div>

                    <i class="bi bi-people-fill text-5xl lg:text-7xl mr-3 text-error"></i>
                </div>
            </div>

            <div class="card card-compact card-side bg-base-100 shadow-xl">
                <div class="flex items-center w-full">
                    <div class="card-body">
                        <h2 class="text-success mt-2 lg:text-3xl text-2xl font-bold">
                            004
                        </h2>
                        <p>
                            Antrian Sekarang
                        </p>
                    </div>

                    <i class="bi bi-person-check-fill text-5xl lg:text-7xl mr-3 text-success"></i>
                </div>
            </div>

            <div class="card card-compact card-side bg-base-100 shadow-xl">
                <div class="flex items-center w-full">
                    <div class="card-body">
                        <h2 class="text-info mt-2 lg:text-3xl text-2xl font-bold">
                            005
                        </h2>
                        <p>
                            Antrian Selanjutnya
                        </p>
                    </div>

                    <i class="bi bi-person-plus-fill text-5xl lg:text-7xl mr-3 text-info"></i>
                </div>
            </div>

            <div class="card card-compact card-side bg-base-100 shadow-xl">
                <div class="flex items-center w-full">
                    <div class="card-body">
                        <h2 class="text-purple-600 mt-2 lg:text-3xl text-2xl font-bold">
                            006
                        </h2>
                        <p>
                            Sisa Antrian
                        </p>
                    </div>

                    <i class="bi bi-person-fill text-5xl lg:text-7xl mr-3 text-purple-600"></i>
                </div>
            </div>
        </div>

        <div class="divider mx-4"></div>

        <div class="flex flex-col lg:flex-row 2 mx-4">
            <div class="grid gap-4 grid-cols-2 lg:grid-cols-1 w-full lg:w-1/3">
                <div class="card lg:card-side bg-base-100 shadow-xl">
                    <div class="flex items-center justify-center bg-error p-10 rounded-l-xl">
                        <p class="text-white font-bold text-xl">
                            003
                        </p>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title uppercase">
                            Loket 1
                        </h2>
                        <progress class="progress progress-error w-56" value="40" max="100"></progress>
                    </div>
                </div>

                <div class="card lg:card-side bg-base-100 shadow-xl">
                    <div class="flex items-center justify-center bg-success p-10 rounded-l-xl">
                        <p class="text-white font-bold text-xl">
                            004
                        </p>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title uppercase">
                            Loket 2
                        </h2>
                        <progress class="progress progress-success w-56" value="40" max="100"></progress>
                    </div>
                </div>

                <div class="card lg:card-side bg-base-100 shadow-xl">
                    <div class="flex items-center justify-center bg-info p-10 rounded-l-xl">
                        <p class="text-white font-bold text-xl">
                            005
                        </p>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title uppercase">
                            Loket 3
                        </h2>
                        <progress class="progress progress-info w-56" value="40" max="100"></progress>
                    </div>
                </div>
            </div>

            <div class="flex-1 px-5 mt-8 lg:mt-0">
                <div class="flex flex-row justify-between mb-4 items-center">
                    <h1 class="text-lg font-bold">Panggilan Antrian</h1>

                    <button class="bg-warning px-2.5 py-1 rounded">
                        <i class="bi bi-arrow-clockwise text-lg"></i>
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="table table-zebra w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>Nomor Antrian</th>
                                <th>Loket</th>
                                <th>Panggil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>006</th>
                                <td></td>
                                <td>
                                    <button class="text-error">
                                        <i class="bi bi-bell hover:bg-error hover:text-white px-2.5 py-1 rounded transition text-lg"
                                            id="panggil-button"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th>005</th>
                                <td>Loket 3</td>
                                <td>
                                    <button class="text-error">
                                        <i class="bi bi-bell hover:bg-error hover:text-white px-2.5 py-1 rounded transition text-lg"
                                            id="panggil-button"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th>004</th>
                                <td>Loket 2</td>
                                <td>
                                    <button class="text-error">
                                        <i class="bi bi-bell hover:bg-error hover:text-white px-2.5 py-1 rounded transition text-lg"
                                            id="panggil-button"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th>003</th>
                                <td>Loket 1</td>
                                <td>
                                    <button class="text-error">
                                        <i class="bi bi-bell hover:bg-error hover:text-white px-2.5 py-1 rounded transition text-lg"
                                            id="panggil-button"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th>002</th>
                                <td>Loket 2</td>
                                <td>
                                    <button class="text-error">
                                        <i class="bi bi-bell hover:bg-error hover:text-white px-2.5 py-1 rounded transition text-lg"
                                            id="panggil-button"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th>001</th>
                                <td>Loket 1</td>
                                <td>
                                    <button class="text-error">
                                        <i class="bi bi-bell hover:bg-error hover:text-white px-2.5 py-1 rounded transition text-lg"
                                            id="panggil-button"></i>
                                    </button>
                                </td>
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

    </div>
@endsection
