<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class GanCotTenLT_KD extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listLT = DB::table('loaitin') -> select('idLT','Ten')->get();
        for ($i=0; $i< count($listLT); $i++){
            $idLT = $listLT[$i]->idLT;
            $Ten = $listLT[$i]->Ten;
            $kd = Str::slug($Ten,'-');
            DB::table('loaitin')->where('idLT',$idLT)->update(['TenLT_KD' => $kd]);
        };
    }
}
