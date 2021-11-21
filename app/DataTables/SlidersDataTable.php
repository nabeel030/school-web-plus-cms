<?php

namespace App\DataTables;

use App\Slider;
use Yajra\DataTables\Services\DataTable;

class SlidersDataTable extends DataTable
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
            ->editColumn('img', function ($object) {
                return '<img src="' . url($object->img) . '" alt="Image" style="border-radius: 50%" width="50px" height="50px">';
            })
            ->addColumn('action', function ($object) {
                $actions = '<a href="'. route("slider.edit", [$object->id]) .'" class="btn btn-outline-success"><i class="far fa-edit"></i></a>&nbsp;';
                $actions .= '<a href="'. route("slider.delete", [$object->id]) .'" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>';

                return $actions;
            })
            ->rawColumns(['img','action'])
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
        $sliders = Slider::all();
        return $this->applyScopes($sliders);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('sliders-table')
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
                'data' => 'img',
                'name' => 'img',
                'title' => 'Image',
            ],

            [
                'data' => 'title',
                'name' => 'title',
                'title' => 'Caption',
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
