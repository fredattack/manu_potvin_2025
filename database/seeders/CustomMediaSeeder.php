<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomMedia;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;

class CustomMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable query logging for performance
        DB::disableQueryLog();

        // Path to the CSV file
        $csvFilePath = database_path('seeders/achievement_media.csv');

        // Open the CSV file
        $csv = Reader::createFromPath($csvFilePath, 'r');
        $csv->setHeaderOffset(0); // Set the CSV header offset

        // Get the records from the CSV file
        $records = $csv->getRecords();

        // Loop through each record and insert into the database
        foreach ($records as $record) {
            CustomMedia::create([
                'id' => $record['id'],
                'model_type' => $record['model_type'],
                'model_id' => $record['model_id'],
                'uuid' => $record['uuid'],
                'collection_name' => $record['collection_name'],
                'name' => $record['name'],
                'file_name' => $record['file_name'],
                'mime_type' => $record['mime_type'],
                'disk' => $record['disk'],
                'conversions_disk' => $record['conversions_disk'],
                'size' => $record['size'],
                'manipulations' => $record['manipulations'],
                'custom_properties' => $record['custom_properties'],
                'generated_conversions' => $record['generated_conversions'],
                'responsive_images' => $record['responsive_images'],
                'order_column' => $record['order_column'],
                'created_at' => $record['created_at'],
                'updated_at' => $record['updated_at'],
            ]);
        }
    }
}
