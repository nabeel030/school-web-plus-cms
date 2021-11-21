<?php

namespace App\DataTables;

use App\Course;
use Yajra\DataTables\Services\DataTable;

class ClassesDataTable extends DataTable
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
                $actions = '<a href="'. route("course.edit", [$object->id]) .'" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></a>&nbsp;';
                $actions .= '<a href="'. route("course.delete", [$object->id]) .'" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>';

                return $actions;
            })
            ->rawColumns(['img','action'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Course $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $courses = Course::all();
        return $this->applyScopes($courses);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('classes-table')
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
                'data' => 'title',
                'name' => 'title',
                'title' => 'Subject',
            ],
        ];
    }

}
