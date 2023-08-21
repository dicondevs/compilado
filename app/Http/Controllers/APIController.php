<?php

// =============================================
// Autor                Alexander Eliseo Olivieri
// Creado               lunes, 21 de agosto de 2023 14:22:54
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.6
// =============================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * API Controller.
 */
class APIController extends Controller
{
    /**
     * Constructor of the Controller.
     */
    public function __construct()
    {
    }

    /**
     * Eliminar Producto.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/7eb1819235e1415eb79f892e4f00787f/{par53c5cb8c9f084a488389762bad3feb0c}",
     *     description="Eliminar Producto",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par53c5cb8c9f084a488389762bad3feb0c",
     *         in="path",
     *         description="PK_PRODUCTOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Eliminar Producto - Eliminar Producto.
     *
     * @param par53c5cb8c9f084a488389762bad3feb0c PK_PRODUCTOS
     */
    public function mt7eb1819235e1415eb79f892e4f00787f(Request $request, $par53c5cb8c9f084a488389762bad3feb0c = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        \App\rep0a14ea93830f4813be11c92f6fdf225f::mt7eb1819235e1415eb79f892e4f00787f($par53c5cb8c9f084a488389762bad3feb0c);

        return '';
    }

    /**
     * Estatus.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/1a5ba2e9cb2f46a28d11b6daea24dc94",
     *     description="Estatus",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Estatus - Estatus.
     */
    public function mt1a5ba2e9cb2f46a28d11b6daea24dc94(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        \App\rep0a14ea93830f4813be11c92f6fdf225f::mt1a5ba2e9cb2f46a28d11b6daea24dc94();

        return '';
    }

    /**
     * Lista Categoria.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/cff51f8ff2be4b21bac46a431d7717b5/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Lista Categoria",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbcff51f8ff2be4b21bac46a431d7717b5"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Categoria - Lista Categoria.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbcff51f8ff2be4b21bac46a431d7717b5
     */
    public function mtcff51f8ff2be4b21bac46a431d7717b5(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\rep0a14ea93830f4813be11c92f6fdf225f::mtcff51f8ff2be4b21bac46a431d7717b5($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Lista Categoria.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/cff51f8ff2be4b21bac46a431d7717b5Count",
     *     description="Lista Categoria - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Lista Categoria - Lista Categoria.
     *
     * @return Count of tbcff51f8ff2be4b21bac46a431d7717b5
     */
    public function mtcff51f8ff2be4b21bac46a431d7717b5Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\rep0a14ea93830f4813be11c92f6fdf225f::mtcff51f8ff2be4b21bac46a431d7717b5Count(0, 0, '', ''));
    }

    /**
     * MODELADOR LOGIN.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2af49a9bd05a40ffa34fbd9d578d2432/{par8a38608f30864332a52f8d0d6ba57af0}/{parf4920fdf13be4c77875f8b135691dfdf}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="MODELADOR LOGIN",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8a38608f30864332a52f8d0d6ba57af0",
     *         in="path",
     *         description="FL_CORREO",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="parf4920fdf13be4c77875f8b135691dfdf",
     *         in="path",
     *         description="FL_CONTRASENA",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb2af49a9bd05a40ffa34fbd9d578d2432"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

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
     * @return List of tb2af49a9bd05a40ffa34fbd9d578d2432
     */
    public function mt2af49a9bd05a40ffa34fbd9d578d2432(Request $request, $par8a38608f30864332a52f8d0d6ba57af0 = null, $parf4920fdf13be4c77875f8b135691dfdf = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt2af49a9bd05a40ffa34fbd9d578d2432($par8a38608f30864332a52f8d0d6ba57af0, $parf4920fdf13be4c77875f8b135691dfdf, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * MODELADOR LOGIN.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/2af49a9bd05a40ffa34fbd9d578d2432Count/{par8a38608f30864332a52f8d0d6ba57af0}/{parf4920fdf13be4c77875f8b135691dfdf}",
     *     description="MODELADOR LOGIN - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par8a38608f30864332a52f8d0d6ba57af0",
     *         in="path",
     *         description="FL_CORREO",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Parameter(
     *         name="parf4920fdf13be4c77875f8b135691dfdf",
     *         in="path",
     *         description="FL_CONTRASENA",
     *         required=true,
     *         type="string"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * MODELADOR LOGIN - MODELADOR LOGIN.
     *
     * @param par8a38608f30864332a52f8d0d6ba57af0 FL_CORREO
     * @param parf4920fdf13be4c77875f8b135691dfdf FL_CONTRASENA
     *
     * @return Count of tb2af49a9bd05a40ffa34fbd9d578d2432
     */
    public function mt2af49a9bd05a40ffa34fbd9d578d2432Count(Request $request, $par8a38608f30864332a52f8d0d6ba57af0 = null, $parf4920fdf13be4c77875f8b135691dfdf = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt2af49a9bd05a40ffa34fbd9d578d2432Count($par8a38608f30864332a52f8d0d6ba57af0, $parf4920fdf13be4c77875f8b135691dfdf, 0, 0, '', ''));
    }

    /**
     * Modelador Productos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/aa35a6815e6f49e993c3d795e2ba17f2/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Modelador Productos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tbaa35a6815e6f49e993c3d795e2ba17f2"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Productos - Modelador Productos.
     *
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tbaa35a6815e6f49e993c3d795e2ba17f2
     */
    public function mtaa35a6815e6f49e993c3d795e2ba17f2(Request $request, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\rep0a14ea93830f4813be11c92f6fdf225f::mtaa35a6815e6f49e993c3d795e2ba17f2($page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Modelador Productos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/aa35a6815e6f49e993c3d795e2ba17f2Count",
     *     description="Modelador Productos - Count",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Modelador Productos - Modelador Productos.
     *
     * @return Count of tbaa35a6815e6f49e993c3d795e2ba17f2
     */
    public function mtaa35a6815e6f49e993c3d795e2ba17f2Count(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\rep0a14ea93830f4813be11c92f6fdf225f::mtaa35a6815e6f49e993c3d795e2ba17f2Count(0, 0, '', ''));
    }

    /**
     * Recuperar Categoria.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9b96d308848f492f88dec1647ff64904/{parf8dcb85c62524850a4438540588d2a55}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Categoria",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parf8dcb85c62524850a4438540588d2a55",
     *         in="path",
     *         description="PK_CATEGORIA",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb9b96d308848f492f88dec1647ff64904"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Categoria - Recuperar Categoria.
     *
     * @param parf8dcb85c62524850a4438540588d2a55 PK_CATEGORIA
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb9b96d308848f492f88dec1647ff64904
     */
    public function mt9b96d308848f492f88dec1647ff64904(Request $request, $parf8dcb85c62524850a4438540588d2a55 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt9b96d308848f492f88dec1647ff64904($parf8dcb85c62524850a4438540588d2a55, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Categoria.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/9b96d308848f492f88dec1647ff64904Count/{parf8dcb85c62524850a4438540588d2a55}",
     *     description="Recuperar Categoria - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parf8dcb85c62524850a4438540588d2a55",
     *         in="path",
     *         description="PK_CATEGORIA",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Categoria - Recuperar Categoria.
     *
     * @param parf8dcb85c62524850a4438540588d2a55 PK_CATEGORIA
     *
     * @return Count of tb9b96d308848f492f88dec1647ff64904
     */
    public function mt9b96d308848f492f88dec1647ff64904Count(Request $request, $parf8dcb85c62524850a4438540588d2a55 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt9b96d308848f492f88dec1647ff64904Count($parf8dcb85c62524850a4438540588d2a55, 0, 0, '', ''));
    }

    /**
     * Recuperar Productor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3d113fe1c4664c5faf23248cb00d410f/{par0f6b13f543a14f43934d960cedb38ddf}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="Recuperar Productor",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par0f6b13f543a14f43934d960cedb38ddf",
     *         in="path",
     *         description="PK_PRODUCTOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb3d113fe1c4664c5faf23248cb00d410f"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Productor - Recuperar Productor.
     *
     * @param par0f6b13f543a14f43934d960cedb38ddf PK_PRODUCTOS
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb3d113fe1c4664c5faf23248cb00d410f
     */
    public function mt3d113fe1c4664c5faf23248cb00d410f(Request $request, $par0f6b13f543a14f43934d960cedb38ddf = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt3d113fe1c4664c5faf23248cb00d410f($par0f6b13f543a14f43934d960cedb38ddf, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * Recuperar Productor.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/3d113fe1c4664c5faf23248cb00d410fCount/{par0f6b13f543a14f43934d960cedb38ddf}",
     *     description="Recuperar Productor - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par0f6b13f543a14f43934d960cedb38ddf",
     *         in="path",
     *         description="PK_PRODUCTOS",
     *         required=true,
     *         type="number"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * Recuperar Productor - Recuperar Productor.
     *
     * @param par0f6b13f543a14f43934d960cedb38ddf PK_PRODUCTOS
     *
     * @return Count of tb3d113fe1c4664c5faf23248cb00d410f
     */
    public function mt3d113fe1c4664c5faf23248cb00d410fCount(Request $request, $par0f6b13f543a14f43934d960cedb38ddf = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt3d113fe1c4664c5faf23248cb00d410fCount($par0f6b13f543a14f43934d960cedb38ddf, 0, 0, '', ''));
    }

    /**
     * sp_catalogo_title.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/b2bc0e1cf4684a169cde132708d1ab6b/{parb8b30b925dd7422fba0c5b3a13ce6f1a1}",
     *     description="sp_catalogo_title",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="parb8b30b925dd7422fba0c5b3a13ce6f1a1",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_catalogo_title - sp_catalogo_title.
     *
     * @param parb8b30b925dd7422fba0c5b3a13ce6f1a1 prm_tipo
     *
     * @return string with result
     */
    public function mtb2bc0e1cf4684a169cde132708d1ab6b(Request $request, $parb8b30b925dd7422fba0c5b3a13ce6f1a1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\rep0a14ea93830f4813be11c92f6fdf225f::mtb2bc0e1cf4684a169cde132708d1ab6b($parb8b30b925dd7422fba0c5b3a13ce6f1a1));
    }

    /**
     * sp_catologos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/67d9819e69444c4d92a8304b1cfebfea/{par500fd74266e24544a42d54ed2ec3c5421}/{page}/{pageSize}/{orderColumn}/{orderType}",
     *     description="sp_catologos",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par500fd74266e24544a42d54ed2ec3c5421",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *       name="page",
     *       in="path",
     *       description="Number of Page",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="pageSize",
     *       in="path",
     *       description="Page size",
     *       required=true,
     *       type="integer"
     *     ),
     *     @SWG\Parameter(
     *       name="orderColumn",
     *       in="path",
     *       description="Column to order",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Parameter(
     *       name="orderType",
     *       in="path",
     *       description="Order type",
     *       required=true,
     *       type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="List of tb67d9819e69444c4d92a8304b1cfebfea"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_catologos - sp_catologos.
     *
     * @param par500fd74266e24544a42d54ed2ec3c5421 prm_tipo
     * @param page Number of page
     * @param pageSize Page size of results
     * @param orderColumn Order Column
     * @param orderType Order Type
     *
     * @return List of tb67d9819e69444c4d92a8304b1cfebfea
     */
    public function mt67d9819e69444c4d92a8304b1cfebfea(Request $request, $par500fd74266e24544a42d54ed2ec3c5421 = null, $page, $pageSize, $orderColumn, $orderType)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);
        $json = json_encode(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt67d9819e69444c4d92a8304b1cfebfea($par500fd74266e24544a42d54ed2ec3c5421, $page, $pageSize, $orderColumn, $orderType), JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_IGNORE);

        return response($json)->header('Content-Type', 'application/json');
    }

    /**
     * sp_catologos.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/67d9819e69444c4d92a8304b1cfebfeaCount/{par500fd74266e24544a42d54ed2ec3c5421}",
     *     description="sp_catologos - Count",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par500fd74266e24544a42d54ed2ec3c5421",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="Integer"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_catologos - sp_catologos.
     *
     * @param par500fd74266e24544a42d54ed2ec3c5421 prm_tipo
     *
     * @return Count of tb67d9819e69444c4d92a8304b1cfebfea
     */
    public function mt67d9819e69444c4d92a8304b1cfebfeaCount(Request $request, $par500fd74266e24544a42d54ed2ec3c5421 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt67d9819e69444c4d92a8304b1cfebfeaCount($par500fd74266e24544a42d54ed2ec3c5421, 0, 0, '', ''));
    }

    /**
     * sp_menu.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/67309883c39d4233af415438fcf3e927",
     *     description="sp_menu",
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_menu - sp_menu.
     *
     * @return string with result
     */
    public function mt67309883c39d4233af415438fcf3e927(Request $request)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt67309883c39d4233af415438fcf3e927());
    }

    /**
     * sp_reportes.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/6d7b058bcc474a80a182eb68c745895b/{par7230c1fab98f4672a8bdd633cc3e4fc11}/{parb968ac36ef0a4b0d8ac12ee1179f3f0e1}/{parfbaa4349d38444859ced49cd7a88c24f1}",
     *     description="sp_reportes",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="par7230c1fab98f4672a8bdd633cc3e4fc11",
     *         in="path",
     *         description="prm_username",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parb968ac36ef0a4b0d8ac12ee1179f3f0e1",
     *         in="path",
     *         description="prm_registro",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Parameter(
     *         name="parfbaa4349d38444859ced49cd7a88c24f1",
     *         in="path",
     *         description="prm_tipo",
     *         required=true,
     *         type="integer"
     *     ),

     *     @SWG\Response(
     *         response=200,
     *         description="String"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    /**
     * sp_reportes - sp_reportes.
     *
     * @param par7230c1fab98f4672a8bdd633cc3e4fc11 prm_username
     * @param parb968ac36ef0a4b0d8ac12ee1179f3f0e1 prm_registro
     * @param parfbaa4349d38444859ced49cd7a88c24f1 prm_tipo
     *
     * @return string with result
     */
    public function mt6d7b058bcc474a80a182eb68c745895b(Request $request, $par7230c1fab98f4672a8bdd633cc3e4fc11 = null, $parb968ac36ef0a4b0d8ac12ee1179f3f0e1 = null, $parfbaa4349d38444859ced49cd7a88c24f1 = null)
    {
        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        return \Response::json(\App\rep0a14ea93830f4813be11c92f6fdf225f::mt6d7b058bcc474a80a182eb68c745895b($par7230c1fab98f4672a8bdd633cc3e4fc11, $parb968ac36ef0a4b0d8ac12ee1179f3f0e1, $parfbaa4349d38444859ced49cd7a88c24f1));
    }
}
