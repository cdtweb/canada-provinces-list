<?php declare(strict_types=1);

namespace Cdtweb;

class CanadaProvincesList
{
    protected static $provinces = [
        'ON' => 'Ontario',
        'QC' => 'Quebec',
        'NS' => 'Nova Scotia',
        'NB' => 'New Brunswick',
        'MB' => 'Manitoba',
        'BC' => 'British Columbia',
        'PE' => 'Prince Edward Island',
        'SK' => 'Saskatchewan',
        'AB' => 'Alberta',
        'NL' => 'Newfoundland and Labrador',
        'NT' => 'Northwest Territories',
        'YT' => 'Yukon',
        'NU' => 'Nunavut'
    ];

    /**
     * Get array of Canadian provinces and territories with 2-character abbreviation as
     * the array key and the full name as the value.
     *
     * @return array
     */
    public static function all(): array
    {
        return self::$provinces;
    }

    /**
     * Get array of Canadian province abbreviations.
     *
     * @return array
     */
    public static function abbreviations(): array
    {
        return array_keys(self::$provinces);
    }

    /**
     * Get array of Canadian province names.
     *
     * @return array
     */
    public static function names(): array
    {
        return array_values(self::$provinces);
    }
}
