<?php

namespace App\Http\Resources;

use Illuminate\Database\Eloquent\Collection;

interface ExportableResourceInterface{

    /**
     * set collection to export
     */
    public function setData(Collection $collection): void;

    /**
     * returns file name
     */
    public function export(string $format): string;
}
