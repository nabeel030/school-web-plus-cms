<?php

namespace App\DataTables;

use App\Parents;
use Yajra\DataTables\Services\DataTable;

class ReviewsDataTable extends DataTable
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
                return '<img src="' . url($object->img ? $object->img : asset('images/placeholder.png')) . '" alt="Image" style="border-radius: 50%" width="50px" height="50px">';
            })
            ->addColumn('action', function ($object) {
                $actions = '<a href="'. route("parent.edit", [$object->id]) .'" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></a>&nbsp;';
                $actions .= '<a href="'. route("parent.delete", [$object->id]) .'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>';

                return $actions;
            })
            ->rawColumns(['img','action'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Parents $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $parents = Parents::all();
        return $this->applyScopes($parents);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('reviews-table')
            ->columns($this->getColumns())
            ->addAction(['class' => 'text-center', 'width' => '20%'])
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1,'desc');
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
                'data' => 'name',
                'name' => 'name',
                'title' => 'Name',
            ],
            [
                'data' => 'relation',
                'name' => 'relation',
                'title' => 'Relation',
            ],
        ];
    }

}
