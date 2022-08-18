@extends('core::layouts.admin.app')

@section('title', __('Create tax'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __("Add tax") }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.taxs.index') }}" class="btn btn-primary">
                            <i class="fas fa-list"></i> {{ __('tax List') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.taxs.store') }}" method="post" class="instant_reload_form">
                        <div class="form-group">
                            <label for="tax" class="required">{{ __("tax Name") }}</label>
                            <input type="text" name="tax" id="tax" class="form-control" placeholder="{{ __("Enter tax") }}"/>
                        </div>

                        <button class="btn btn-primary waves-effect waves-light float-right submit-button">
                            <i class="fas fa-save"></i>
                            {{ __("Save") }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
