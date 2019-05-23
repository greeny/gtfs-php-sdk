<?php

namespace Trafiklab\Gtfs\Model\Files;


use Trafiklab\Gtfs\Model\Entities\Agency;
use Trafiklab\Gtfs\Model\GtfsArchive;
use Trafiklab\Gtfs\Util\GtfsParserUtil;

class GtfsAgencyFile
{
    private $dataRows;

    public function __construct(GtfsArchive $parent, string $filePath)
    {
        $this->dataRows = GtfsParserUtil::deserializeCSV($parent, $filePath,
            Agency::class, 'trip_id');
    }

    /**
     * Get the file data as an array of its rows.
     *
     * @return Agency[]
     */
    public function getData(): array
    {
        return $this->dataRows;
    }
}