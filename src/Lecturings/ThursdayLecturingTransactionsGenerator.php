<?php

namespace BukuMasjid\DemoData\Lecturings;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ThursdayLecturingTransactionsGenerator
{
    public function generate(Carbon $date)
    {
        $incentiveCategory = DB::table('categories')->where('name', 'Insentif Kajian')->first();
        DB::table('transactions')->insert([
            'date' => $date->format('Y-m-d'),
            'category_id' => $incentiveCategory->id,
            'amount' => 400000,
            'description' => 'Insentif kajian subuh Kamis',
            'in_out' => 0,
            'book_id' => 1,
            'creator_id' => 1,
        ]);
        $lecturingInfaqCategory = DB::table('categories')->where('name', 'Kotak Infaq Kajian')->first();
        DB::table('transactions')->insert([
            'date' => $date->format('Y-m-d'),
            'category_id' => $lecturingInfaqCategory->id,
            'amount' => 500000,
            'description' => 'Kotak infaq kajian subuh Kamis',
            'in_out' => 1,
            'book_id' => 1,
            'creator_id' => 1,
        ]);
        $dailyInfaqCategory = DB::table('categories')->where('name', 'Kotak Infaq Harian')->first();
        DB::table('transactions')->insert([
            'date' => $date->format('Y-m-d'),
            'category_id' => $dailyInfaqCategory->id,
            'amount' => 350000,
            'description' => 'Kotak infaq harian',
            'in_out' => 1,
            'book_id' => 1,
            'creator_id' => 1,
        ]);
    }
}