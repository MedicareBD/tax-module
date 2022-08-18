@extends('core::layouts.admin.app')

@section('title', __('Edit taxs'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __("Edit tax") }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.languages.index') }}" class="btn btn-primary">
                            <i class="fas fa-list"></i> {{ __('tax List') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.taxs.update', $tax->id) }}" method="post" class="instant_reload_form">
                        @method('PUT')

                        <button class="btn btn-primary waves-effect waves-light float-right submit-button mt-3">
                            <i class="fas fa-save"></i>
                            {{ __("Update") }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
