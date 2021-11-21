<?php

namespace App\DataTables;

use App\Teacher;
use Yajra\DataTables\Services\DataTable;

class TeachersDataTable extends DataTable
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
                $actions = '<a href="'. route("teacher.edit", [$object->id]) .'" class="btn btn-success"><i class="far fa-edit"></i></a>&nbsp;';
                $actions .= '<a href="'. route("teacher.delete", [$object->id]) .'" class="btn btn-danger"><i class="fa fa-trash"></i></a>';

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
        $teachers= Teacher::all();
        return $this->applyScopes($teachers);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('adminusersdatatable-table')
            ->columns($this->getColumns())
            ->addAction()
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
                'data' => 'img',
                'name' => 'img',
                'title' => 'Image',
                'width' => '17%',
            ],

            [
                'data' => 'name',
                'name' => 'name',
                'title' => 'Name',
                'width' => '17%',
            ],
            [
                'data' => 'subject',
                'name' => 'subject',
                'title' => 'Subject',
                'width' => '17%'
            ],
            [
                'data' => 'qualification',
                'name' => 'qualification',
                'title' => 'Qualification',
                'width' => '17%'
            ],
//            Column::make('Image'),
//            Column::make('Name'),
//            Column::make('Subject'),
//            Column::make('Qualification'),
//            Column::make('Action'),
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