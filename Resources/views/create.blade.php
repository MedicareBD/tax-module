@extends('core::layouts.admin.app')

@section('title', __('Create Tax'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card repeater">
                <div class="card-header">
                    <h4>{{ __('Add Tax') }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.taxes.index') }}" class="btn btn-primary">
                            <i class="fas fa-list"></i> {{ __('Tax List') }}
                        </a>
                        <button class="btn btn-dark" data-repeater-create>
                            <i class="fas fa-plus"></i> {{ __('Add More') }}
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.taxes.store') }}" method="post" class="instant_reload_form">
                        @csrf
                        <div data-repeater-list="taxes">
                            <div data-repeater-item>
                                <div class="row" >
                                    <div class="col-md-4 form-group">
                                        <label for="start_amount" class="required">{{ __("Start Amount") }}</label>
                                        <input type="text" step="any" name="start_amount" id="start_amount" class="form-control" placeholder="{{ __('Enter tax start amount from') }}" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="end_amount" class="required">{{ __("End Amount") }}</label>
                                        <input type="text" step="any" name="end_amount" id="end_amount" class="form-control" placeholder="{{ __('Enter tax end amount') }}" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="rate" class="required">{{ __("End Amount") }}</label>
                                        <div class="input-group mb-3">
                                            <input type="text" step="any" name="rate" id="rate" class="form-control" placeholder="{{ __('Enter tax rate in percentage') }}" required>
                                            <div class="input-group-append" data-repeater-delete>
                                                <button class="btn btn-danger" type="button">
                                                    <i class="fas fa-remove"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary float-right submit-button">
                                <i class="fas fa-save"></i>
                                {{ __("Save") }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('vendorScripts')
    <script src="{{ asset('plugins/jquery.repeater/jquery.repeater.min.js') }}"></script>
@endpush

@push('pageScripts')
    <script>
        $(document).ready(function () {
            $('.repeater').repeater({
                initEmpty: false,
                defaultValues: {
                    'start_amount': null,
                    'end_amount': null,
                    'rate': null,
                },
                show: function () {
                    $(this).slideDown();
                    $(this).find("#start_amount, #end_amount, #rate").attr('type', 'number');
                },
                hide: function (deleteElement) {
                    let $this = $(this);
                    $.confirm({
                        title: '{{ __("Heads Up!") }}',
                        content:'{{ __("Are you sure?") }}',
                        icon: 'fas fa-trash',
                        theme: 'modern',
                        closeIcon: true,
                        animation: 'scale',
                        type: 'red',
                        scrollToPreviousElement: false,
                        scrollToPreviousElementAnimate: false,
                        buttons: {
                            confirm: {
                                btnClass: 'btn-red',
                                action: function () {
                                    $this.slideUp(deleteElement);
                                }
                            },
                            close: {
                                action: function () {
                                    this.buttons.close.hide()
                                }
                            }
                        }
                    });
                },
                ready: function (setIndexes) {
                    $("#start_amount, #end_amount, #rate").attr('type', 'number');
                },
                isFirstItemUndeletable: true
            })
        });
    </script>
@endpush
