@extends('layouts.app')

@section('page-title')
    Dashboard
@endsection

@section('page-content')
    @switch(Auth::user()->role)
        @case('admin')
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="bi bi-person-badge-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <h6 class="text-muted font-semibold">Staff</h6>
                                    <h6 class="font-extrabold mb-0">{{ number_format($staff_count) }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <h6 class="text-muted font-semibold">Pelanggan</h6>
                                    <h6 class="font-extrabold mb-0">{{ number_format($pelanggan_count) }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="bi bi-handbag-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <h6 class="text-muted font-semibold">Produk</h6>
                                    <h6 class="font-extrabold mb-0">{{ number_format($produk_count) }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @break

        @case('staff')
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <h6 class="text-muted font-semibold">Pelanggan</h6>
                                    <h6 class="font-extrabold mb-0">{{ number_format($pelanggan_count) }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="bi bi-handbag-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <h6 class="text-muted font-semibold">Produk</h6>
                                    <h6 class="font-extrabold mb-0">{{ number_format($produk_count) }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="bi bi-basket3-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <h6 class="text-muted font-semibold">Pesanan</h6>
                                    <h6 class="font-extrabold mb-0">{{ number_format($pesanan_count) }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @break

        @default
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="bi bi-basket3-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-7">
                                    <h6 class="text-muted font-semibold">Pesanan</h6>
                                    <h6 class="font-extrabold mb-0">{{ number_format($pesanan_count) }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endswitch
@endsection
