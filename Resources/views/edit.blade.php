<form action="{{ route('admin.taxes.update', $tax->id) }}" method="post" class="datatable_modal_form">
    @method('PUT')

    <div class="row">
        <div class="col-md-4 form-group">
            <label for="start_amount" class="required">{{ __("Start Amount") }}</label>
            <input type="number" step="any" name="start_amount" id="start_amount" value="{{ $tax->start_amount }}" class="form-control" placeholder="{{ __('Enter tax start amount from') }}" required>
        </div>
        <div class="col-md-4 form-group">
            <label for="end_amount" class="required">{{ __("End Amount") }}</label>
            <input type="number" step="any" name="end_amount" id="end_amount" value="{{ $tax->end_amount }}" class="form-control" placeholder="{{ __('Enter tax end amount') }}" required>
        </div>
        <div class="col-md-4 form-group">
            <label for="rate" class="required">{{ __("End Amount") }}</label>
            <input type="number" step="any" name="rate" id="rate" value="{{ $tax->rate }}" class="form-control" placeholder="{{ __('Enter tax rate in percentage') }}" required>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary float-right submit-button">
            <i class="fas fa-save"></i>
            {{ __("Update") }}
        </button>
    </div>
</form>
