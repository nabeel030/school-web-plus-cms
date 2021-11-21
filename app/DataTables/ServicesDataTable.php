<?php

namespace App\DataTables;

use App\Service;
use Yajra\DataTables\Services\DataTable;

class ServicesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     * @throws \Exception
     */
    public function ajax()
    {
        return datatables()
            ->of($this->query())
            ->addColumn('action', function ($object) {
                $actions = '<a href="'. route("edit.service", [$object->id]) .'" class="btn btn-outline-success"><i class="far fa-edit"></i></a>&nbsp;';
                $actions .= '<a href="'. route("services.delete", [$object->id]) .'" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>';

                return $actions;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Teacher $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $services = Service::all();
        return $this->applyScopes($services);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('services-table')
            ->columns($this->getColumns())
            ->addAction(['class' => 'text-center', 'width' => '20%'])
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(0);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                'data' => 'title',
                'name' => 'title',
                'title' => 'Title',
            ],
            [
                'data' => 'description',
                'name' => 'description',
                'title' => 'Description',
            ],
        ];
    }

}
