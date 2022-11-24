<?php
namespace App\Services;
use Yajra\DataTables\EloquentDataTable;

class UserDatatableBuilder extends EloquentDataTable implements DatatableBuilderInterface
{
    public function columnEdit()
    {
        $this->addColumn('edit', function($row){
            return route('users.edit', [$row->id]);
        });
    }

    public function columnDelete()
    {
        $this->addColumn('delete', function($row){
            return route('users.delete', [$row->id]);
        });
    }
}
