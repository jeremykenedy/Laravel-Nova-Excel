<?php

namespace Maatwebsite\LaravelNovaExcel\Interactions;

use Maatwebsite\Excel\Excel;
use Laravel\Nova\Fields\Select;

trait AskForWriterType
{
    /**
     * Ask the user for a filename.
     *
     * @param array|null  $options
     * @param string|null $label
     *
     * @return $this
     */
    public function askForWriterType(array $options = null, string $label = null)
    {
        $options = $options ?: [
            Excel::XLS  => 'XLS',
            Excel::XLSX => 'XLSX',
            Excel::CSV  => 'CSV',
        ];

        $this->actionFields[] = Select::make(__($label ?: 'Type'), 'writer_type')->options($options);

        return $this;
    }
}
