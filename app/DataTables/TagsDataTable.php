<?php

namespace App\DataTables;

use App\Tag;
use Yajra\DataTables\Services\DataTable;

class TagsDataTable extends DataTable
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
                $actions = '<a href="'. route("tag.edit", [$object->id]) .'" class="btn btn-outline-success"><i class="far fa-edit"></i></a>&nbsp;';
                $actions .= '<a href="'. route("tag.delete", [$object->id]) .'" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>';

                return $actions;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Tag $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $tags = Tag::all();
        return $this->applyScopes($tags);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('tags-table')
            ->columns($this->getColumns())
            ->addAction(['class' => 'text-center'])
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
                'data' => 'tag',
                'name' => 'tag',
                'title' => 'Tag',
            ],
        ];
    }

}
