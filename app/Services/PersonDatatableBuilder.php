<?php
namespace App\Services;
use Yajra\DataTables\EloquentDataTable;

class PersonDatatableBuilder extends EloquentDataTable implements DatatableBuilderInterface
{
    public function columnEdit()
    {
        $this->addColumn('edit', function($row){
            return route('persons.edit', [$row->id]);
        });
    }

    public function columnDelete()
    {
        $this->addColumn('delete', function($row){
            return route('persons.delete', [$row->id]);
        });
    }
}
