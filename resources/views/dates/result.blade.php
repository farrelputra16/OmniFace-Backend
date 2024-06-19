@extends('layouts.app')

@section('title', 'Weekend Dates')

@push('style')

@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Weekend Dates</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Dates</a></div>
                    <div class="breadcrumb-item">Weekend Dates</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Weekend Dates</h2>
                <p class="section-lead">
                    Here are the weekend dates within the selected range.
                </p>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <ul>
                                    @foreach($weekends as $weekend)
                                        <li>{{ $weekend['day'] }} - {{ $weekend['date'] }}</li>
                                    @endforeach
                                </ul>
                                <a href="{{ route('dates.form') }}" class="btn btn-secondary">Back</a>
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
