@extends('core::layouts.admin.app')

@section('title', __('Edit taxs'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Edit tax') }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.languages.index') }}" class="btn btn-primary">
                            <i class="fas fa-list"></i> {{ __('Tax List') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-sm-11 col-md-10">
                            <form action="{{ route('admin.taxs.update', $tax->id) }}" method="post" class="instant_reload_form">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label for="start_amount" class="col-sm-3 col-form-label">{{ __('Start Amount') }}<span class="text-danger"> *</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="start_amount" class="form-control valid_number" id="start_amount" value="300000.00">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="end_amount" class="col-sm-3 col-form-label">{{ __('End Amount') }} <span class="text-danger"> *</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="end_amount" class="form-control valid_number" id="end_amount" value="500000.00">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rate" class="col-sm-3 col-form-label">{{ __('Tax Rate') }} <span class="text-danger"> *</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="rate" class="form-control valid_number" id="rate" value="3.00">
                                    </div>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-success w-md m-b-5">{{ __('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
