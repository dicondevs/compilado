<?php

// =============================================
// Autor                Alexander Eliseo Olivieri
// Creado               lunes, 21 de agosto de 2023 14:22:54
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.6
// =============================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @SWG\Swagger(
 *     basePath="",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Tiendax"
 *     )
 * )
 */
class ApiDocumentController extends Controller
{
    /**
     * Index Action of the Controller.
     */
    public function index(Request $request)
    {
        $swagger = \Swagger\scan(dirname(__FILE__));
        header('Content-type: application/json');
        echo $swagger;
    }
}
