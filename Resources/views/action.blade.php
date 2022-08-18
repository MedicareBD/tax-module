<div class="btn-group btn-group-sm">
    @can('taxs-update')
        <a href="{{ route('admin.taxs.edit', $id) }}" class="btn btn-success">
            <i class="fas fa-edit"></i>
        </a>
    @endcan

    @can('taxs-delete')
        <a href="{{ route('admin.taxs.destroy', $id) }}" class="btn btn-danger confirm-delete">
            <i class="fas fa-trash"></i>
        </a>
    @endcan
</div>
