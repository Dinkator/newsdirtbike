<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GanCotTin_KD extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listT = DB::table('tin') -> select('idTin','TieuDe')->get();
        for ($i=0; $i< count($listT); $i++){
            $idTin = $listT[$i]->idTin;
            $TieuDe = $listT[$i]->TieuDe;
            $kd = Str::slug($TieuDe,'-');
            DB::table('tin')->where('idTin',$idTin)->update(['Tin_KD' => $kd]);
        };
    }
}
