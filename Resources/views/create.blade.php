@extends('core::layouts.admin.app')

@section('title', __('Create tax'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Add tax') }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.taxs.index') }}" class="btn btn-primary">
                            <i class="fas fa-list"></i> {{ __('Tax List') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-sm-11 col-md-10">
                            <form action="{{ route('admin.taxs.store') }}" method="post" class="instant_reload_form">
                                @csrf
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">Sl</td>
                                            <td class="text-center">Start Amount<strong><i class="text-danger">*</i></strong></td>
                                            <td class="text-center">End Amount<strong><i class="text-danger">*</i></strong></td>
                                            <td class="text-center">Tax Rate<strong><i class="text-danger">*</i></strong></td>
                                            <td class="text-center">Delete?</td>
                                            <td>Add More?</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <input type="text" class="form-control valid_number" id="start_amount" name="start_amount[]" required="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control valid_number" id="end_amount" name="end_amount[]" required="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control valid_number" id="rate" name="rate[]" required="">
                                            </td>
                                            <td class="paddin5ps"><button type="button" id="delPOIbutton" class="btn btn-danger ml-2" value="Delete" onclick="deleteTaxRow(this)">
                                                <i class="far fa-trash-alt"></i></button>
                                            </td>
                                            <td class="paddin5ps">
                                                <button type="button" id="addmorePOIbutton" class="btn btn-success" value="Add More POIs" onclick="TaxinsRow()"><i class="fa fa-plus-circle"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <div class="form-group text-center">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
                                        {{ __('Reset') }}
                                    </button>
                                    <button class="btn btn-primary waves-effect waves-light submit-button">
                                        <i class="fas fa-save"></i>
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
