<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$this->addLocation('49.1705822 123.9387571', 'Maffeo Sutton Park');
    }
    protected function addLocation($coords, $desc) {
	DB::table('location')->insert([
		'coordinates' => DB::raw("ST_GeomFromText('POINT(" . $coords . ")')"),
		'description' => $desc,
	]);
    }
}
