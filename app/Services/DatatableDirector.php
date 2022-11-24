<?php

namespace App\Services;
use Yajra\DataTables\EloquentDataTable;

//patron de disenho builder
class DatatableDirector{
    private $builder;

    public function __construct(EloquentDataTable $builder)
    {
        $this->builder = $builder;
    }


    public static function makeFrom(EloquentDataTable $builder){
        return (new static($builder))->make();
    }


    public function make()
    {
        $this->builder->columnEdit();
        $this->builder->columnDelete();
        return $this->builder->make();
    }




}
