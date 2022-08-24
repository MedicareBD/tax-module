@extends('core::layouts.admin.app', [
    'hasModal' => true
])

@section('title', __('Manage Taxes'))

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Tax List') }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.taxes.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> {{ __('Add tax') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('pageScripts')
    {{ $dataTable->scripts() }}
@endpush
