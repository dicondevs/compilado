<?php

// =============================================
// Autor                Alexander Eliseo Olivieri
// Creado               lunes, 21 de agosto de 2023 14:22:54
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.6
// =============================================

namespace App;

/**
 * TB_PRODUCTO - TB_PRODUCTO.
 */
class tbf76586750f8e4c97a3deffd24fadad6f extends \Eloquent
{
    protected $table = 'tb_productos';
    protected $primaryKey = 'PK_PRODUCTO';
    protected $connection = 'conn0a14ea93830f4813be11c92f6fdf225f';
    public $timestamps = false;

    /* FK_CATEGORIA - FK_CATEGORIA */
    public function fl9dca352fcee04bedb2870e773a75561f()
    {
        return $this->belongsTo('App\tb223b2de2475845758668eb04a6bd4380', 'FK_CATEGORIA', 'PK_CATEGORIA');
    }
}
