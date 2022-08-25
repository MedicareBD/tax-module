<?php

namespace Modules\Tax\DataTables;

use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Modules\Tax\Entities\Tax;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class TaxDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->editColumn('rate', fn ($model) => __(':percentage%', ['percentage' => $model->rate]))
            ->editColumn('created_at', fn ($model) => format_date($model->created_at))
            ->editColumn('updated_at', fn ($model) => format_date($model->updated_at))
            ->addColumn('action', 'tax::action')
            ->setRowId('id');
    }

    public function query(Tax $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('tax-datatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom(config('custom.table.dom'))
            ->orderBy(1)
            ->stateSave()
            ->autoWidth()
            ->responsive()
            ->addTableClass(config('custom.table.class'))
            ->parameters([
                'scrollY' => true,
            ]);
    }

    protected function getColumns(): array
    {
        return [
            Column::make('id')
                ->data('DT_RowIndex')
                ->printable(false)
                ->exportable(false)
                ->orderable(false)
                ->title('#'),
            Column::make('start_amount')->title(__('Start Amount')),
            Column::make('end_amount')->title(__('End Amount')),
            Column::make('rate')->title(__('Rate')),
            Column::make('created_at')->title(__('Created At')),
            Column::make('updated_at')->title(__('Updated At')),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->orderable(false)
                ->width(60)
                ->addClass('text-center')
                ->title('Action'),
        ];
    }

    protected function filename(): string
    {
        return 'Taxes_'.date('YmdHis');
    }
}
