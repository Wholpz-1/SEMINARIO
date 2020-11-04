<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Cita;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

             view()->composer('layouts.app', function ($view) {
                 $fecha= Carbon::now()->format('yy-m-d');
                 $pivote = DB::table('citas')->where('estado','=', 'Solicitada')->where('fecha', '<', $fecha)->get();
                 

                 foreach ($pivote as $pivot) {
                  $cita=Cita::find($pivot->id);
                  $cita->estado='Cancelada'; 
                  $hora=$cita->horaventanilla;
                  $hora->estado='Libre';
                  $cita->save();
                  $hora->save();
                 }




             });


    }
}
