<?php
namespace App\Helpers;
class Rupiah {
    
        /**
         * Format a number to Rupiah currency format.
         *
         * @param float $value
         * @return string
         */
        public static function formatRupiah($value)
        {
            return 'Rp ' . number_format($value, 2, ',', '.');
        }
}