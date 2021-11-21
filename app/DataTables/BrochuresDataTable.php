<?php

namespace App\DataTables;

use App\Brochure;
use Yajra\DataTables\Services\DataTable;

class BrochuresDataTable extends DataTable
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
            ->editColumn('image', function ($object) {
                return '<img src="' . url($object->image) . '" alt="Image" style="border-radius: 50%" width="50px" height="50px">';
            })
            ->addColumn('action', function ($object) {
                $btnText = $object->active ? 'Disable' : 'Enable';
                $actions = '<a href="'. route("brochure.enable", [$object->id]) .'" class="btn btn-sm btn-outline-success">'.$btnText.'</a>&nbsp;';
                $actions .= '<a href="'. route("brochure.delete", [$object->id]) .'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>';

                return $actions;
            })
            ->rawColumns(['image','action'])
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
        $brochures = Brochure::all();
        return $this->applyScopes($brochures);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('brochures-table')
            ->columns($this->getColumns())
            ->addAction(['class' => 'text-center'])
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1);
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
                'data' => 'image',
                'name' => 'image',
                'title' => 'Image',
            ],

            [
                'data' => 'title',
                'name' => 'title',
                'title' => 'Title',
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'AdminUsers_' . date('YmdHis');
    }
}
