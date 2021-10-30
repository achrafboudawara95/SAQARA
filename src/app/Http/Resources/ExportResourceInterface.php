<?php

namespace App\Http\Resources;

interface ExportResourceInterface{

    /**
     * Returns file name
     */
    public function export(array $data, array $dataHeaders= []): string;
}
