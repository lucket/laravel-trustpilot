<?php
namespace McCaulay\Trustpilot;

use McCaulay\Trustpilot\API\BusinessUnit\BusinessUnit;
use McCaulay\Trustpilot\API\BusinessUnit\BusinessUnitApi;
use McCaulay\Trustpilot\API\Category\CategoryApi;
use McCaulay\Trustpilot\Query\Builder;

class Trustpilot
{
    /**
     * Get the business unit query builder.
     *
     * @return \McCaulay\Trustpilot\Query\Builder
     */
    public function businessUnits(): Builder
    {
        return new Builder(new BusinessUnitApi());
    }

    /**
     * Get the default business unit.
     *
     * @return \McCaulay\Trustpilot\API\BusinessUnit\BusinessUnit
     */
    public function businessUnit(): BusinessUnit
    {
        return new BusinessUnit();
    }

    /**
     * Get the category query builder.
     *
     * @return \McCaulay\Trustpilot\Query\Builder
     */
    public function categories(): Builder
    {
        return new Builder(new CategoryApi());
    }
}
