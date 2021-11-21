<?php

namespace App\DataTables;

use App\Post;
use Yajra\DataTables\Services\DataTable;

class PostsDataTable extends DataTable
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
                $actions = '<a href="'. route("post.edit", [$object->id]) .'" class="btn btn-outline-success"><i class="far fa-edit"></i></a>&nbsp;';
                $actions .= '<a href="'. route("post.delete", [$object->id]) .'" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>';

                return $actions;
            })
            ->rawColumns(['image','action'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $posts = Post::all();
        return $this->applyScopes($posts);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('posts-table')
            ->columns($this->getColumns())
            ->addAction(['class' => 'text-center'])
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
}
