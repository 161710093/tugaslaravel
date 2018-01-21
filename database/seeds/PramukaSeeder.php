<?php

use Illuminate\Database\Seeder;

class PramukaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a=[
				['nama'=>'Robert Stephenson Smyth Baden Powell','tempat_lahir'=>'Paddington London Inggris','tanggal_lahir'=>'1857-02-22','tokoh'=>'bapak pandu pramuka dunia'],
				['nama'=>'Sri Sultan Hamangkubuwono IX ','tempat_lahir'=>'Yogyakarta','tanggal_lahir'=>'1912-04-12','tokoh'=>'bapak pramuka indonesia'],
				['nama'=>'Prof.Dr.dr.H.Azrul Azwar MPH','tempat_lahir'=>'Nangroe Aceh Darusallam','tanggal_lahir'=>'1945-06-06','tokoh'=>'ketua kwartir nasional'],
                ['nama'=>'K.H Agus Salim ','tempat_lahir'=>'Nangroe Aceh Darusallam','tanggal_lahir'=>'1945-06-06','tokoh'=>'bapak pandu indonesia'],
                ['nama'=>'Meyjen dr Roebiono Kertopati ','tempat_lahir'=>'Ciamis','tanggal_lahir'=>'1914-04-11','tokoh'=>'bapak persandian indonesia']
       
        ];

        //memasukan data ke table di database
        DB::table('pramukas')->insert($a);
    }
}
