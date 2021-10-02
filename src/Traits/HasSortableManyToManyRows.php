<?php

namespace Msouto\NovaSortable\Traits;

trait HasSortableManyToManyRows
{
    use HasSortableRows;

    public $disableSortOnIndex = true;
}
