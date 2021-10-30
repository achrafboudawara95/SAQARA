<?php

namespace App\Http\Resources\Csv;

use App\Http\Resources\ExportResourceInterface;
use Carbon\Carbon;

class ExportCsvResource implements ExportResourceInterface
{
    public function export(array $data, array $dataHeaders= []): string
    {
        if (!empty($dataHeaders)) {
            array_unshift($data,$dataHeaders);
        }
        $filename = tempnam(sys_get_temp_dir(), 'csv_'.Carbon::now()->timestamp);
        $file = fopen($filename, 'w');
        foreach($data as $row){
            fputcsv($file, $row, ';');
        }
        fclose($file);
        return $filename;
    }
}
