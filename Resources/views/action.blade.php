<div class="btn-group btn-group-sm">
    @can('taxes-update')
        <a
            href="{{ route('admin.taxes.edit', $id) }}"
            class="btn btn-success preview-modal"
            data-title="{{ __("Edit Tax") }}"
        >
            <i class="fas fa-edit"></i>
        </a>
    @endcan

    @can('taxes-delete')
        <a href="{{ route('admin.taxes.destroy', $id) }}" class="btn btn-danger confirm-delete">
            <i class="fas fa-trash"></i>
        </a>
    @endcan
</div>
