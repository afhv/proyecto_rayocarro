<?php

namespace App;

class RayoCarroHelper
{
    public static function MostrarMenu($perfil, $menu)
    {
        $opciones = $perfil->opcions->where('menu',$menu);
        return ($opciones->count() > 0);
    }

    public static function MostrarSubmenu($perfil, $menu, $submenu)
    {
        $opciones = $perfil->opcions->where('menu',$menu)->where('submenu',$submenu);
        return ($opciones->count() > 0);
    }
}
