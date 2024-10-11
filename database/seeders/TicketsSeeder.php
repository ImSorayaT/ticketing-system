<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tickets')->insert([
            'title' => Str::random(10),
            'status' => 'open',
            'assigner' => 1,
            'assignee' => 3,
            'priority' => 'high',
            'request_content' => '<p>Orci fermentum convallis proin risus feugiat taciti convallis cubilia. Aenean gravida aliquet, cursus rutrum ad in tempor cras? Suscipit felis lacinia ultricies eros nascetur litora aliquet posuere. Lacus malesuada lacinia nisi platea nisi. Egestas maecenas blandit ornare eleifend massa orci vitae dui. Sed vitae integer ipsum vehicula morbi mollis et dui sit. Justo justo potenti est ultricies fames dui eros velit. Morbi maecenas posuere convallis pretium integer venenatis sem sapien quisque. Interdum elit augue; sed lorem dapibus dui tellus.</p><p>Fermentum vivamus quam sit nulla consectetur maecenas a. Magnis fermentum maecenas eros aliquam quam montes id. Dictumst urna quisque lacus quisque sem consequat blandit. Inceptos elit justo sed gravida cubilia laoreet torquent. Eleifend torquent euismod mus gravida; risus primis. Egestas duis aenean mollis; laoreet taciti praesent venenatis phasellus eu. Hendrerit fusce velit torquent porta per phasellus ultrices nec. Porttitor per accumsan justo risus lectus mollis finibus rhoncus ad.</p>',            
        ]);
    }
}
