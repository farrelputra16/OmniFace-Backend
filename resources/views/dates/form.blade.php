@extends('layouts.app')

@section('title', 'Select Date Range')

@push('style')
    <!-- Tambahkan CSS khusus jika diperlukan -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Select Date Range</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Dates</a></div>
                    <div class="breadcrumb-item">Select Date Range</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Select Date Range</h2>
                <p class="section-lead">
                    menemukan weekend diantara tanggal tersebut
                </p>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('dates.weekends') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="start_date">Start Date:</label>
                                        <input type="date" id="start_date" name="start_date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">End Date:</label>
                                        <input type="date" id="end_date" name="end_date" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- Tambahkan JS khusus jika diperlukan -->
@endpush
