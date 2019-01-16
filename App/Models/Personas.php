<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personas {
        protected $table = 'jobs';

        public function getDurationAsString() {
            $years = floor($this->months / 12);
            $extraMonths = $this->months % 12;
            if($years == 0) {
              return "$extraMonths months";
            } elseif($extraMonths == 0) {
              return "$years years";
            } elseif ($extraMonths > 0 && $years > 0) {
            return "Job duration: $years years $extraMonths months";
            }
          }
}