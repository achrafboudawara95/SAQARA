<?php

namespace App\Http\Resources;

use Illuminate\Database\Eloquent\Collection;

class ExportResource implements ExportableResourceInterface
{
    /**
     * @var ExportResourceInterface
     */
    protected $exportResource;
    protected $data;
    protected $dataHeaders;

    public function setData(Collection $collection): void
    {
        $this->data = $collection->toArray();
    }

    public function export(string $format): string{
        $this->exportResource = ExportResourceFormatFactory::make($format);
        return $this->exportResource->export($this->data, $this->dataHeaders);
    }
}
