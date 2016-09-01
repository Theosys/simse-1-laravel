<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use App\User;

class migracionUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $usuarios = Usuario::all();
      foreach ($usuarios as $item) {
        if ($item->i_usumod == null) {
          $item->i_usumod = $item->i_usureg;
        }
        User::create([
          'name' => $item->v_usuario,
          'email' => $item->persona->v_email,
          'i_codpersona' => $item->i_codpersona,
          'i_codrol' => $item->i_codrol,
          'v_ubigeo' => $item->v_ubigeo,
          'i_usureg' => $item->i_usureg,
          'i_usumod' => $item->i_usumod,
          'i_codarchivo' => $item->i_codarchivo,
          'i_estreg' => $item->i_estreg,
          'password' => Hash::make('123456')
        ]);
      }
    }
}
