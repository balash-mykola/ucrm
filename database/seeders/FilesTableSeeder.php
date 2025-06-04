<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FilesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('files')->insert([
            [
                'file_path' => 'uploads/docs/summary2025.docx',
                'file_type' => 'docx',
                'size' => 158000,
                'date_created' => now()->toDateString(),
                'hash' => Str::uuid()->toString(),
            ],
            [
                'file_path' => 'media/uploads/screenshot_01.png',
                'file_type' => 'png',
                'size' => 204800,
                'date_created' => now()->subDays(2)->toDateString(),
                'hash' => Str::uuid()->toString(),
            ],
            [
                'file_path' => 'storage/files/contract_final.pdf',
                'file_type' => 'pdf',
                'size' => 310500,
                'date_created' => now()->subDays(7)->toDateString(),
                'hash' => Str::uuid()->toString(),
            ],
        ]);
    }
}
