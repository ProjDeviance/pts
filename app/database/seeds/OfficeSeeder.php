<?php
class OfficeSeeder extends Seeder {

    public function run()
    {
        Office::truncate();
        
        Office::create([
            'id'        => '1',
            'officeName'    => 'BAC',
            'subscriber_id'        => '1',
        ]);
    }
}