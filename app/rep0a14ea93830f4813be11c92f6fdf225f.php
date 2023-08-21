<?php

// =============================================
// Autor                Alexander Eliseo Olivieri
// Creado               lunes, 21 de agosto de 2023 14:22:54
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.6
// =============================================

namespace App;

/**
 * Predeterminado - Elemento generado en forma automática por Codium.
 */
class rep0a14ea93830f4813be11c92f6fdf225f
{
    /**
     * TB_CATEGORIA - TB_CATEGORIA.
     *
     * @param key Primary key of the field
     *
     * @return Data category object of tb223b2de2475845758668eb04a6bd4380
     */
    public static function mt223b2de2475845758668eb04a6bd4380($key)
    {
        return tb223b2de2475845758668eb04a6bd4380::find($key);
    }

    /**
     * TB_PRODUCTO - TB_PRODUCTO.
     *
     * @param key Primary key of the field
     *
     * @return Data category object of tbf76586750f8e4c97a3deffd24fadad6f
     */
    public static function mtf76586750f8e4c97a3deffd24fadad6f($key)
    {
        return tbf76586750f8e4c97a3deffd24fadad6f::find($key);
    }

    /**
     * TB_USUARIOS - TB_USUARIOS.
     *
     * @param key Primary key of the field
     *
     * @return Data category object of tb348c5cfbb35345d7b91fc2713d0bc745
     */
    public static function mt348c5cfbb35345d7b91fc2713d0bc745($key)
    {
        return tb348c5cfbb35345d7b91fc2713d0bc745::find($key);
    }

    /**
     * Eliminar Producto - Eliminar Producto.
     *
     * @param par53c5cb8c9f084a488389762bad3feb0c PK_PRODUCTOS
     */
    public static function mt7eb1819235e1415eb79f892e4f00787f($par53c5cb8c9f084a488389762bad3feb0c = null)
    {
        tbf76586750f8e4c97a3deffd24fadad6f::select()->whereRaw("  tb_productos.PK_PRODUCTO='$par53c5cb8c9f084a488389762bad3feb0c' ")->delete();
    }

    /**
     * Estatus - Estatus.
     */
    public static function mt1a5ba2e9cb2f46a28d11b6daea24dc94()
    {
    }

    /**
     * Lista Categoria - Lista Categoria.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List
     */
    public static function mtcff51f8ff2be4b21bac46a431d7717b5($page, $pageSize, $orderColumn, $orderType)
    {
        if (0 == $page) {
            $page = 1;
        }
        if (0 == $pageSize) {
            $pageSize = PHP_INT_MAX;
        }

        if (null == $orderColumn || '' == $orderColumn || '-' == $orderColumn) {
            $result = tb223b2de2475845758668eb04a6bd4380::select('tb_categoria.FL_NOMBRE AS C1', 'tb_categoria.PK_CATEGORIA AS C2')->whereRaw('   tb_categoria.PK_CATEGORIA is not null ')->orderby('tb_categoria.FL_NOMBRE', 'ASC')->skip(($page - 1) * $pageSize)->take($pageSize);
        } else {
            $result = tb223b2de2475845758668eb04a6bd4380::select('tb_categoria.FL_NOMBRE AS C1', 'tb_categoria.PK_CATEGORIA AS C2')->whereRaw('   tb_categoria.PK_CATEGORIA is not null ');
            switch ($orderColumn.$orderType) {
          default:
            break;
          }
            $result = $result->skip(($page - 1) * $pageSize)->take($pageSize);
        }
        $result = tbcff51f8ff2be4b21bac46a431d7717b5::on('conn0a14ea93830f4813be11c92f6fdf225f')->fromQuery($result->toSql(), []);

        return $result->toArray();
    }

    /**
     * Lista Categoria - Lista Categoria.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return Count
     */
    public static function mtcff51f8ff2be4b21bac46a431d7717b5Count($page, $pageSize, $orderColumn, $orderType)
    {
        return tb223b2de2475845758668eb04a6bd4380::select(\DB::Raw('1'))->whereRaw('   tb_categoria.PK_CATEGORIA is not null ')->get()->count();
    }

    /**
     * MODELADOR LOGIN - MODELADOR LOGIN.
     *
     * @param par8a38608f30864332a52f8d0d6ba57af0 FL_CORREO
     * @param parf4920fdf13be4c77875f8b135691dfdf FL_CONTRASENA
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List
     */
    public static function mt2af49a9bd05a40ffa34fbd9d578d2432($par8a38608f30864332a52f8d0d6ba57af0 = null, $parf4920fdf13be4c77875f8b135691dfdf = null, $page, $pageSize, $orderColumn, $orderType)
    {
        if (0 == $page) {
            $page = 1;
        }
        if (0 == $pageSize) {
            $pageSize = PHP_INT_MAX;
        }

        if (null == $par8a38608f30864332a52f8d0d6ba57af0) {
            $par8a38608f30864332a52f8d0d6ba57af0 = 'null';
        }

        if (null == $parf4920fdf13be4c77875f8b135691dfdf) {
            $parf4920fdf13be4c77875f8b135691dfdf = 'null';
        }

        if (null == $orderColumn || '' == $orderColumn || '-' == $orderColumn) {
            $result = tb348c5cfbb35345d7b91fc2713d0bc745::select('tb_usuarios.PK_USUARIOS AS C1')->whereRaw("  tb_usuarios.FL_CORREO='$par8a38608f30864332a52f8d0d6ba57af0'  AND  tb_usuarios.FL_CONTRASENA='$parf4920fdf13be4c77875f8b135691dfdf'  AND   tb_usuarios.PK_USUARIOS is not null ")->orderby('tb_usuarios.PK_USUARIOS', 'ASC')->skip(($page - 1) * $pageSize)->take($pageSize);
        } else {
            $result = tb348c5cfbb35345d7b91fc2713d0bc745::select('tb_usuarios.PK_USUARIOS AS C1')->whereRaw("  tb_usuarios.FL_CORREO='$par8a38608f30864332a52f8d0d6ba57af0'  AND  tb_usuarios.FL_CONTRASENA='$parf4920fdf13be4c77875f8b135691dfdf'  AND   tb_usuarios.PK_USUARIOS is not null ");
            switch ($orderColumn.$orderType) {
          default:
            break;
          }
            $result = $result->skip(($page - 1) * $pageSize)->take($pageSize);
        }
        $result = tb2af49a9bd05a40ffa34fbd9d578d2432::on('conn0a14ea93830f4813be11c92f6fdf225f')->fromQuery($result->toSql(), []);

        return $result->toArray();
    }

    /**
     * MODELADOR LOGIN - MODELADOR LOGIN.
     *
     * @param par8a38608f30864332a52f8d0d6ba57af0 FL_CORREO
     * @param parf4920fdf13be4c77875f8b135691dfdf FL_CONTRASENA
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return Count
     */
    public static function mt2af49a9bd05a40ffa34fbd9d578d2432Count($par8a38608f30864332a52f8d0d6ba57af0 = null, $parf4920fdf13be4c77875f8b135691dfdf = null, $page, $pageSize, $orderColumn, $orderType)
    {
        if (null == $par8a38608f30864332a52f8d0d6ba57af0) {
            $par8a38608f30864332a52f8d0d6ba57af0 = 'null';
        }

        if (null == $parf4920fdf13be4c77875f8b135691dfdf) {
            $parf4920fdf13be4c77875f8b135691dfdf = 'null';
        }

        return tb348c5cfbb35345d7b91fc2713d0bc745::select(\DB::Raw('1'))->whereRaw("  tb_usuarios.FL_CORREO='$par8a38608f30864332a52f8d0d6ba57af0'  AND  tb_usuarios.FL_CONTRASENA='$parf4920fdf13be4c77875f8b135691dfdf'  AND   tb_usuarios.PK_USUARIOS is not null ")->get()->count();
    }

    /**
     * Modelador Productos - Modelador Productos.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List
     */
    public static function mtaa35a6815e6f49e993c3d795e2ba17f2($page, $pageSize, $orderColumn, $orderType)
    {
        if (0 == $page) {
            $page = 1;
        }
        if (0 == $pageSize) {
            $pageSize = PHP_INT_MAX;
        }

        if (null == $orderColumn || '' == $orderColumn || '-' == $orderColumn) {
            $result = tbf76586750f8e4c97a3deffd24fadad6f::select('tb_productos.FL_NOMBRE AS C1', 'tb_productos.PK_PRODUCTO AS C2')->whereRaw('   tb_productos.PK_PRODUCTO is not null ')->orderby('tb_productos.PK_PRODUCTO', 'ASC')->skip(($page - 1) * $pageSize)->take($pageSize);
        } else {
            $result = tbf76586750f8e4c97a3deffd24fadad6f::select('tb_productos.FL_NOMBRE AS C1', 'tb_productos.PK_PRODUCTO AS C2')->whereRaw('   tb_productos.PK_PRODUCTO is not null ');
            switch ($orderColumn.$orderType) {
          default:
            break;
          }
            $result = $result->skip(($page - 1) * $pageSize)->take($pageSize);
        }
        $result = tbaa35a6815e6f49e993c3d795e2ba17f2::on('conn0a14ea93830f4813be11c92f6fdf225f')->fromQuery($result->toSql(), []);

        return $result->toArray();
    }

    /**
     * Modelador Productos - Modelador Productos.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return Count
     */
    public static function mtaa35a6815e6f49e993c3d795e2ba17f2Count($page, $pageSize, $orderColumn, $orderType)
    {
        return tbf76586750f8e4c97a3deffd24fadad6f::select(\DB::Raw('1'))->whereRaw('   tb_productos.PK_PRODUCTO is not null ')->get()->count();
    }

    /**
     * Recuperar Categoria - Recuperar Categoria.
     *
     * @param parf8dcb85c62524850a4438540588d2a55 PK_CATEGORIA
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List
     */
    public static function mt9b96d308848f492f88dec1647ff64904($parf8dcb85c62524850a4438540588d2a55 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        if (0 == $page) {
            $page = 1;
        }
        if (0 == $pageSize) {
            $pageSize = PHP_INT_MAX;
        }

        if (null == $parf8dcb85c62524850a4438540588d2a55) {
            $parf8dcb85c62524850a4438540588d2a55 = 'null';
        }

        if (null == $orderColumn || '' == $orderColumn || '-' == $orderColumn) {
            $result = tb223b2de2475845758668eb04a6bd4380::select('tb_categoria.FL_NOMBRE AS C1', 'tb_categoria.PK_CATEGORIA AS C2')->whereRaw("   tb_categoria.PK_CATEGORIA is not null  AND  tb_categoria.PK_CATEGORIA='$parf8dcb85c62524850a4438540588d2a55' ")->orderby('tb_categoria.PK_CATEGORIA', 'ASC')->skip(($page - 1) * $pageSize)->take($pageSize);
        } else {
            $result = tb223b2de2475845758668eb04a6bd4380::select('tb_categoria.FL_NOMBRE AS C1', 'tb_categoria.PK_CATEGORIA AS C2')->whereRaw("   tb_categoria.PK_CATEGORIA is not null  AND  tb_categoria.PK_CATEGORIA='$parf8dcb85c62524850a4438540588d2a55' ");
            switch ($orderColumn.$orderType) {
          default:
            break;
          }
            $result = $result->skip(($page - 1) * $pageSize)->take($pageSize);
        }
        $result = tb9b96d308848f492f88dec1647ff64904::on('conn0a14ea93830f4813be11c92f6fdf225f')->fromQuery($result->toSql(), []);

        return $result->toArray();
    }

    /**
     * Recuperar Categoria - Recuperar Categoria.
     *
     * @param parf8dcb85c62524850a4438540588d2a55 PK_CATEGORIA
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return Count
     */
    public static function mt9b96d308848f492f88dec1647ff64904Count($parf8dcb85c62524850a4438540588d2a55 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        if (null == $parf8dcb85c62524850a4438540588d2a55) {
            $parf8dcb85c62524850a4438540588d2a55 = 'null';
        }

        return tb223b2de2475845758668eb04a6bd4380::select(\DB::Raw('1'))->whereRaw("   tb_categoria.PK_CATEGORIA is not null  AND  tb_categoria.PK_CATEGORIA='$parf8dcb85c62524850a4438540588d2a55' ")->get()->count();
    }

    /**
     * Recuperar Productor - Recuperar Productor.
     *
     * @param par0f6b13f543a14f43934d960cedb38ddf PK_PRODUCTOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List
     */
    public static function mt3d113fe1c4664c5faf23248cb00d410f($par0f6b13f543a14f43934d960cedb38ddf = null, $page, $pageSize, $orderColumn, $orderType)
    {
        if (0 == $page) {
            $page = 1;
        }
        if (0 == $pageSize) {
            $pageSize = PHP_INT_MAX;
        }

        if (null == $par0f6b13f543a14f43934d960cedb38ddf) {
            $par0f6b13f543a14f43934d960cedb38ddf = 'null';
        }

        if (null == $orderColumn || '' == $orderColumn || '-' == $orderColumn) {
            $result = tbf76586750f8e4c97a3deffd24fadad6f::select('tb_productos.FK_CATEGORIA AS C1', 'tb_productos.FL_NOMBRE AS C2', 'tb_productos.PK_PRODUCTO AS C3')->whereRaw("   tb_productos.PK_PRODUCTO is not null  AND  tb_productos.PK_PRODUCTO='$par0f6b13f543a14f43934d960cedb38ddf' ")->orderby('tb_productos.PK_PRODUCTO', 'ASC')->skip(($page - 1) * $pageSize)->take($pageSize);
        } else {
            $result = tbf76586750f8e4c97a3deffd24fadad6f::select('tb_productos.FK_CATEGORIA AS C1', 'tb_productos.FL_NOMBRE AS C2', 'tb_productos.PK_PRODUCTO AS C3')->whereRaw("   tb_productos.PK_PRODUCTO is not null  AND  tb_productos.PK_PRODUCTO='$par0f6b13f543a14f43934d960cedb38ddf' ");
            switch ($orderColumn.$orderType) {
          default:
            break;
          }
            $result = $result->skip(($page - 1) * $pageSize)->take($pageSize);
        }
        $result = tb3d113fe1c4664c5faf23248cb00d410f::on('conn0a14ea93830f4813be11c92f6fdf225f')->fromQuery($result->toSql(), []);

        return $result->toArray();
    }

    /**
     * Recuperar Productor - Recuperar Productor.
     *
     * @param par0f6b13f543a14f43934d960cedb38ddf PK_PRODUCTOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return Count
     */
    public static function mt3d113fe1c4664c5faf23248cb00d410fCount($par0f6b13f543a14f43934d960cedb38ddf = null, $page, $pageSize, $orderColumn, $orderType)
    {
        if (null == $par0f6b13f543a14f43934d960cedb38ddf) {
            $par0f6b13f543a14f43934d960cedb38ddf = 'null';
        }

        return tbf76586750f8e4c97a3deffd24fadad6f::select(\DB::Raw('1'))->whereRaw("   tb_productos.PK_PRODUCTO is not null  AND  tb_productos.PK_PRODUCTO='$par0f6b13f543a14f43934d960cedb38ddf' ")->get()->count();
    }

    /**
     * sp_catalogo_title - sp_catalogo_title.
     *
     * @param parb8b30b925dd7422fba0c5b3a13ce6f1a1 prm_tipo
     *
     * @return string with result
     */
    public static function mtb2bc0e1cf4684a169cde132708d1ab6b($parb8b30b925dd7422fba0c5b3a13ce6f1a1 = null)
    {
        $result = '';

        $arr = [];

        $arr[0] = $parb8b30b925dd7422fba0c5b3a13ce6f1a1;

        $arrResult = get_object_vars(\DB::connection('conn0a14ea93830f4813be11c92f6fdf225f')->select('call sp_catalogo_title( ?)', $arr)[0]);
        $result = array_values($arrResult)[0];

        return $result;
    }

    /**
     * sp_catologos - sp_catologos.
     *
     * @param par500fd74266e24544a42d54ed2ec3c5421 prm_tipo
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List
     */
    public static function mt67d9819e69444c4d92a8304b1cfebfea($par500fd74266e24544a42d54ed2ec3c5421 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        if (0 == $page) {
            $page = 1;
        }
        if (0 == $pageSize) {
            $pageSize = PHP_INT_MAX;
        }

        $arr = [];

        $arr[0] = $par500fd74266e24544a42d54ed2ec3c5421;
        $arr[1] = $page;
        $arr[2] = $pageSize;

        if ('pgsql' == \DB::connection('conn0a14ea93830f4813be11c92f6fdf225f')->getPdo()->getAttribute(\PDO::ATTR_DRIVER_NAME)) {
            \DB::connection('conn0a14ea93830f4813be11c92f6fdf225f')->beginTransaction();
            $cursorName = tb67d9819e69444c4d92a8304b1cfebfea::on('conn0a14ea93830f4813be11c92f6fdf225f')->fromQuery('call sp_catologos( ?, ?, ?)', $arr);
            $result = tb67d9819e69444c4d92a8304b1cfebfea::on('conn0a14ea93830f4813be11c92f6fdf225f')->fromQuery('FETCH ALL IN "'.$cursorName[0]['sp_catologos'].'"', []);
            \DB::connection('conn0a14ea93830f4813be11c92f6fdf225f')->commit();
        } else {
            $result = tb67d9819e69444c4d92a8304b1cfebfea::on('conn0a14ea93830f4813be11c92f6fdf225f')->fromQuery('call sp_catologos( ?, ?, ?)', $arr);
        }

        return $result->toArray();
    }

    /**
     * sp_catologos - sp_catologos.
     *
     * @param par500fd74266e24544a42d54ed2ec3c5421 prm_tipo
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return Count
     */
    public static function mt67d9819e69444c4d92a8304b1cfebfeaCount($par500fd74266e24544a42d54ed2ec3c5421 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        $arr = [];

        $arr[0] = $par500fd74266e24544a42d54ed2ec3c5421;
        $arr[1] = $page;
        $arr[2] = $pageSize;

        $arrResult = get_object_vars(\DB::connection('conn0a14ea93830f4813be11c92f6fdf225f')->select('call sp_catologos_count( ?, ?, ?)', $arr)[0]);

        return array_values($arrResult)[0];
    }

    /**
     * sp_menu - sp_menu.
     *
     * @return string with result
     */
    public static function mt67309883c39d4233af415438fcf3e927()
    {
        $result = '';

        $arr = [];

        $arrResult = get_object_vars(\DB::connection('conn0a14ea93830f4813be11c92f6fdf225f')->select('call sp_menu()', $arr)[0]);
        $result = array_values($arrResult)[0];

        return $result;
    }

    /**
     * sp_reportes - sp_reportes.
     *
     * @param par7230c1fab98f4672a8bdd633cc3e4fc11 prm_username
     * @param parb968ac36ef0a4b0d8ac12ee1179f3f0e1 prm_registro
     * @param parfbaa4349d38444859ced49cd7a88c24f1 prm_tipo
     *
     * @return string with result
     */
    public static function mt6d7b058bcc474a80a182eb68c745895b($par7230c1fab98f4672a8bdd633cc3e4fc11 = null, $parb968ac36ef0a4b0d8ac12ee1179f3f0e1 = null, $parfbaa4349d38444859ced49cd7a88c24f1 = null)
    {
        $result = '';

        $arr = [];

        $arr[0] = $par7230c1fab98f4672a8bdd633cc3e4fc11;

        $arr[1] = $parb968ac36ef0a4b0d8ac12ee1179f3f0e1;

        $arr[2] = $parfbaa4349d38444859ced49cd7a88c24f1;

        $arrResult = get_object_vars(\DB::connection('conn0a14ea93830f4813be11c92f6fdf225f')->select('call sp_reportes( ?, ?, ?)', $arr)[0]);
        $result = array_values($arrResult)[0];

        return $result;
    }
}
