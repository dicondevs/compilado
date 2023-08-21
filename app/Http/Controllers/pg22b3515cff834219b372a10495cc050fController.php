<?php

// =============================================
// Autor                Alexander Eliseo Olivieri
// Creado               lunes, 21 de agosto de 2023 14:22:30
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.6
// =============================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * catalogosGrid - catalogosGrid.
 */
class pg22b3515cff834219b372a10495cc050fController extends Controller
{
    /**
     * Constructor of the Controller.
     */
    public function __construct()
    {
    }

    /**
     * Post Action of the Controller.
     */
    public function post(Request $request)
    {
        $current_params = \Route::current()->parameters();

        $input = $request->all();

        foreach ($current_params as $key => $value) {
            $input[$key] = $current_params[$key];
        }

        $request->replace($input);

        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        //Assign predefined value to username
        if (!$request->session()->has('sesf97309aa460e454c9bb07facbfc0c02f')) {
            $request->session()->put('sesf97309aa460e454c9bb07facbfc0c02f', 0);
        }

        return null;
    }

    /**
     * Index Action of the Controller.
     *
     * @param request Request object
     */
    public function index(Request $request)
    {
        $current_params = \Route::current()->parameters();

        $input = $request->all();

        foreach ($current_params as $key => $value) {
            $input[$key] = $current_params[$key];
        }

        $request->replace($input);

        //Set Local from browser
        $browser_lang = $request->server('HTTP_ACCEPT_LANGUAGE');
        //Change current localization
        if (isset($_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'])) {
            $browser_lang = $_COOKIE['lang29d45da59f8342fabeb6f23fb9623832'];
        }
        App::setLocale($browser_lang);

        //Assign predefined value to username
        if (!$request->session()->has('sesf97309aa460e454c9bb07facbfc0c02f')) {
            $request->session()->put('sesf97309aa460e454c9bb07facbfc0c02f', 0);
        }

        $title = '';
        $arrWiths = [];

        // Catalagos - Catalagos

        $par500fd74266e24544a42d54ed2ec3c5421 = $request->input('tipo');

        if (null == $par500fd74266e24544a42d54ed2ec3c5421) {
            $par500fd74266e24544a42d54ed2ec3c5421 = '0';
        }

        $par6185a7056560433494dba94e9ae5910769e2026d5c374dfba24c17785c5f01bf = $request->input('p');

        if (null == $par6185a7056560433494dba94e9ae5910769e2026d5c374dfba24c17785c5f01bf) {
            $par6185a7056560433494dba94e9ae5910769e2026d5c374dfba24c17785c5f01bf = '1';
        }

        $par0a0ce2af85ab462a808e0270326fb86069e2026d5c374dfba24c17785c5f01bf = $request->input('c');

        if (null == $par0a0ce2af85ab462a808e0270326fb86069e2026d5c374dfba24c17785c5f01bf) {
            $par0a0ce2af85ab462a808e0270326fb86069e2026d5c374dfba24c17785c5f01bf = '10';
        }

        $par5551ae677d6b488ebd38625d0f5d9fce69e2026d5c374dfba24c17785c5f01bf = '';

        if ('-' == $par5551ae677d6b488ebd38625d0f5d9fce69e2026d5c374dfba24c17785c5f01bf) {
            $par5551ae677d6b488ebd38625d0f5d9fce69e2026d5c374dfba24c17785c5f01bf = null;
        }

        if (null == $par5551ae677d6b488ebd38625d0f5d9fce69e2026d5c374dfba24c17785c5f01bf) {
            $par5551ae677d6b488ebd38625d0f5d9fce69e2026d5c374dfba24c17785c5f01bf = '';
        }

        $par8fce8a73ac264e4a8f3b56d8b991b8a569e2026d5c374dfba24c17785c5f01bf = '';

        if ('-' == $par8fce8a73ac264e4a8f3b56d8b991b8a569e2026d5c374dfba24c17785c5f01bf) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a569e2026d5c374dfba24c17785c5f01bf = null;
        }

        if (null == $par8fce8a73ac264e4a8f3b56d8b991b8a569e2026d5c374dfba24c17785c5f01bf) {
            $par8fce8a73ac264e4a8f3b56d8b991b8a569e2026d5c374dfba24c17785c5f01bf = '';
        }

        $v69e2026d5c374dfba24c17785c5f01bf = \App\rep0a14ea93830f4813be11c92f6fdf225f::mt67d9819e69444c4d92a8304b1cfebfea($par500fd74266e24544a42d54ed2ec3c5421, $par6185a7056560433494dba94e9ae5910769e2026d5c374dfba24c17785c5f01bf, $par0a0ce2af85ab462a808e0270326fb86069e2026d5c374dfba24c17785c5f01bf, $par5551ae677d6b488ebd38625d0f5d9fce69e2026d5c374dfba24c17785c5f01bf, $par8fce8a73ac264e4a8f3b56d8b991b8a569e2026d5c374dfba24c17785c5f01bf);

        $v69e2026d5c374dfba24c17785c5f01bfAjax = \URL::to('/').'/api/67d9819e69444c4d92a8304b1cfebfea/'.(null == $par500fd74266e24544a42d54ed2ec3c5421 ? '-' : ('' == $par500fd74266e24544a42d54ed2ec3c5421 ? '-' : $par500fd74266e24544a42d54ed2ec3c5421)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Catalagos - Catalagos

        $v69e2026d5c374dfba24c17785c5f01bfCount = \App\rep0a14ea93830f4813be11c92f6fdf225f::mt67d9819e69444c4d92a8304b1cfebfeaCount($par500fd74266e24544a42d54ed2ec3c5421, $par6185a7056560433494dba94e9ae5910769e2026d5c374dfba24c17785c5f01bf, $par0a0ce2af85ab462a808e0270326fb86069e2026d5c374dfba24c17785c5f01bf, $par5551ae677d6b488ebd38625d0f5d9fce69e2026d5c374dfba24c17785c5f01bf, $par8fce8a73ac264e4a8f3b56d8b991b8a569e2026d5c374dfba24c17785c5f01bf);

        //$v69e2026d5c374dfba24c17785c5f01bfCountAjax =  \URL::to('/')."/api/67d9819e69444c4d92a8304b1cfebfeaCount{ParametersAjax}/{page}/{pagesize}/{orderColumn}/{orderType}";

        // sp_catalogo_title - sp_catalogo_title

        $parb8b30b925dd7422fba0c5b3a13ce6f1a1 = $request->input('tipo');

        if (null == $parb8b30b925dd7422fba0c5b3a13ce6f1a1) {
            $parb8b30b925dd7422fba0c5b3a13ce6f1a1 = '0';
        }

        $vf72618e2c4ad420181de23b3d289bd96 = \App\rep0a14ea93830f4813be11c92f6fdf225f::mtb2bc0e1cf4684a169cde132708d1ab6b($parb8b30b925dd7422fba0c5b3a13ce6f1a1);

        $vf72618e2c4ad420181de23b3d289bd96Ajax = \URL::to('/').'/api/b2bc0e1cf4684a169cde132708d1ab6b/'.(null == $parb8b30b925dd7422fba0c5b3a13ce6f1a1 ? '-' : ('' == $parb8b30b925dd7422fba0c5b3a13ce6f1a1 ? '-' : $parb8b30b925dd7422fba0c5b3a13ce6f1a1)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // sp_menu - sp_menu

        $vd034bf0f52524ba7a8177a794c7aadb3 = \App\rep0a14ea93830f4813be11c92f6fdf225f::mt67309883c39d4233af415438fcf3e927();

        $vd034bf0f52524ba7a8177a794c7aadb3Ajax = \URL::to('/').'/api/67309883c39d4233af415438fcf3e927/{page}/{pagesize}/{orderColumn}/{orderType}';

        // Paginador Catalogos - Paginador Catalogos
      $pgBe31a3cfb5d4a4d01ab4547d55260a93a = 0; // Page bottom
      $pgTe31a3cfb5d4a4d01ab4547d55260a93a = 0; // Page top
      $pgRe31a3cfb5d4a4d01ab4547d55260a93a = (isset($v69e2026d5c374dfba24c17785c5f01bfCount) ? $v69e2026d5c374dfba24c17785c5f01bfCount : 0); // Total rows
      $pgAe31a3cfb5d4a4d01ab4547d55260a93a = $par6185a7056560433494dba94e9ae5910769e2026d5c374dfba24c17785c5f01bf; // Current page
      $pgSe31a3cfb5d4a4d01ab4547d55260a93a = $par0a0ce2af85ab462a808e0270326fb86069e2026d5c374dfba24c17785c5f01bf; // Page size
      $pgHe31a3cfb5d4a4d01ab4547d55260a93a = 5; // Pages to show
      $pgPe31a3cfb5d4a4d01ab4547d55260a93a = ceil((isset($v69e2026d5c374dfba24c17785c5f01bfCount) ? $v69e2026d5c374dfba24c17785c5f01bfCount : 0) / $pgSe31a3cfb5d4a4d01ab4547d55260a93a); // Total pages
      $rese31a3cfb5d4a4d01ab4547d55260a93a = '';

        if ($pgPe31a3cfb5d4a4d01ab4547d55260a93a > 0 && $pgPe31a3cfb5d4a4d01ab4547d55260a93a >= $pgAe31a3cfb5d4a4d01ab4547d55260a93a) {
            $pgBe31a3cfb5d4a4d01ab4547d55260a93a = $pgAe31a3cfb5d4a4d01ab4547d55260a93a - (int) ($pgHe31a3cfb5d4a4d01ab4547d55260a93a / 2);

            if ($pgBe31a3cfb5d4a4d01ab4547d55260a93a <= 1) {
                $pgBe31a3cfb5d4a4d01ab4547d55260a93a = 0;
            }

            $pgTe31a3cfb5d4a4d01ab4547d55260a93a = $pgBe31a3cfb5d4a4d01ab4547d55260a93a + $pgHe31a3cfb5d4a4d01ab4547d55260a93a;

            if ($pgTe31a3cfb5d4a4d01ab4547d55260a93a >= $pgPe31a3cfb5d4a4d01ab4547d55260a93a) {
                $pgTe31a3cfb5d4a4d01ab4547d55260a93a = $pgPe31a3cfb5d4a4d01ab4547d55260a93a;
                $pgBe31a3cfb5d4a4d01ab4547d55260a93a = $pgPe31a3cfb5d4a4d01ab4547d55260a93a - $pgHe31a3cfb5d4a4d01ab4547d55260a93a;
            }

            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<li';
            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a > 1) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '';
            } else {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= ' class="disabled" ';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '>';
            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a > 1) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<a href="';
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= \URL::to('/').str_replace('{pagesize}', $pgSe31a3cfb5d4a4d01ab4547d55260a93a, str_replace('{pagenumber}', '1', '/catalogosGrid/'.(null == $request->input('tipo') ? '-' : $request->input('tipo')).'/{pagenumber}/{pagesize}'));
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '">';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= str_replace('{Localization}', \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgda98a111f9414a93af8d7983ea0f77b8'), '<span aria-hidden="true">&laquo; {Localization}</span>');

            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a > 1) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '</a>';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '</li>';

            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<li';
            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a > 1) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '';
            } else {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= ' class="disabled" ';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '>';
            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a > 1) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<a href="';
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= \URL::to('/').str_replace('{pagesize}', $pgSe31a3cfb5d4a4d01ab4547d55260a93a, str_replace('{pagenumber}', ($pgAe31a3cfb5d4a4d01ab4547d55260a93a - 1), '/catalogosGrid/'.(null == $request->input('tipo') ? '-' : $request->input('tipo')).'/{pagenumber}/{pagesize}'));
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '">';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= str_replace('{Localization}', \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg4013675161484dcbaaf9100f50ff3e12'), '<span aria-hidden="true">&laquo; {Localization}</span>');

            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a > 1) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '</a>';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '</li>';

            for ($i = 1; $i <= $pgPe31a3cfb5d4a4d01ab4547d55260a93a; ++$i) {
                if ($i > $pgBe31a3cfb5d4a4d01ab4547d55260a93a && $i <= $pgTe31a3cfb5d4a4d01ab4547d55260a93a) {
                    $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<li';
                    if ($i == $pgAe31a3cfb5d4a4d01ab4547d55260a93a) {
                        $rese31a3cfb5d4a4d01ab4547d55260a93a .= ' class="active" ';
                    } else {
                        $rese31a3cfb5d4a4d01ab4547d55260a93a .= '';
                    }
                    $rese31a3cfb5d4a4d01ab4547d55260a93a .= '>';
                    $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<a href="';
                    $rese31a3cfb5d4a4d01ab4547d55260a93a .= \URL::to('/').str_replace('{pagesize}', $pgSe31a3cfb5d4a4d01ab4547d55260a93a, str_replace('{pagenumber}', $i, '/catalogosGrid/'.(null == $request->input('tipo') ? '-' : $request->input('tipo')).'/{pagenumber}/{pagesize}'));
                    $rese31a3cfb5d4a4d01ab4547d55260a93a .= '">';
                    $rese31a3cfb5d4a4d01ab4547d55260a93a .= $i;
                    $rese31a3cfb5d4a4d01ab4547d55260a93a .= '</a></li>';
                }
            }

            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<li';
            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a < $pgPe31a3cfb5d4a4d01ab4547d55260a93a) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '';
            } else {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= ' class="disabled" ';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '>';
            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a < $pgPe31a3cfb5d4a4d01ab4547d55260a93a) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<a href="';
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= \URL::to('/').str_replace('{pagesize}', $pgSe31a3cfb5d4a4d01ab4547d55260a93a, str_replace('{pagenumber}', ($pgAe31a3cfb5d4a4d01ab4547d55260a93a + 1), '/catalogosGrid/'.(null == $request->input('tipo') ? '-' : $request->input('tipo')).'/{pagenumber}/{pagesize}'));
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '">';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= str_replace('{Localization}', \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg9cab9f8f57af4a8a982567e2a91bfd78'), '<span aria-hidden="true">{Localization} &raquo;</span>');

            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a < $pgPe31a3cfb5d4a4d01ab4547d55260a93a) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '</a>';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '</li>';

            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<li';
            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a < $pgPe31a3cfb5d4a4d01ab4547d55260a93a) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '';
            } else {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= ' class="disabled" ';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '>';
            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a < $pgPe31a3cfb5d4a4d01ab4547d55260a93a) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '<a href="';
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= \URL::to('/').str_replace('{pagesize}', $pgSe31a3cfb5d4a4d01ab4547d55260a93a, str_replace('{pagenumber}', $pgPe31a3cfb5d4a4d01ab4547d55260a93a, '/catalogosGrid/'.(null == $request->input('tipo') ? '-' : $request->input('tipo')).'/{pagenumber}/{pagesize}'));
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '">';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= str_replace('{Localization}', \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgcadfffcd0667423aa046c716d7f5c6b6'), '<span aria-hidden="true">{Localization} &raquo;</span>');

            if ($pgAe31a3cfb5d4a4d01ab4547d55260a93a < $pgPe31a3cfb5d4a4d01ab4547d55260a93a) {
                $rese31a3cfb5d4a4d01ab4547d55260a93a .= '</a>';
            }
            $rese31a3cfb5d4a4d01ab4547d55260a93a .= '</li>';
        }

        $ve31a3cfb5d4a4d01ab4547d55260a93a = $rese31a3cfb5d4a4d01ab4547d55260a93a;
        $ve31a3cfb5d4a4d01ab4547d55260a93aLink = \URL::to('/').'/catalogosGrid/'.(null == $request->input('tipo') ? '-' : $request->input('tipo')).'/{pagenumber}/{pagesize}';
        $ve31a3cfb5d4a4d01ab4547d55260a93aChange = $pgPe31a3cfb5d4a4d01ab4547d55260a93a.','.$pgAe31a3cfb5d4a4d01ab4547d55260a93a;
        $ve31a3cfb5d4a4d01ab4547d55260a93aCurrent = $pgSe31a3cfb5d4a4d01ab4547d55260a93a;
        $ve31a3cfb5d4a4d01ab4547d55260a93aActual = $pgAe31a3cfb5d4a4d01ab4547d55260a93a;
        $ve31a3cfb5d4a4d01ab4547d55260a93aTotal = $pgRe31a3cfb5d4a4d01ab4547d55260a93a;
        $ve31a3cfb5d4a4d01ab4547d55260a93aAjax = (isset($v69e2026d5c374dfba24c17785c5f01bfAjax) ? $v69e2026d5c374dfba24c17785c5f01bfAjax : '');
        $ve31a3cfb5d4a4d01ab4547d55260a93aOrder = $par5551ae677d6b488ebd38625d0f5d9fce69e2026d5c374dfba24c17785c5f01bf.'|'.$par8fce8a73ac264e4a8f3b56d8b991b8a569e2026d5c374dfba24c17785c5f01bf;

        $arrWiths['v69e2026d5c374dfba24c17785c5f01bf'] = isset($v69e2026d5c374dfba24c17785c5f01bf) ? $v69e2026d5c374dfba24c17785c5f01bf : '';
        $arrWiths['v69e2026d5c374dfba24c17785c5f01bfCount'] = isset($v69e2026d5c374dfba24c17785c5f01bfCount) ? $v69e2026d5c374dfba24c17785c5f01bfCount : '';
        $arrWiths['v69e2026d5c374dfba24c17785c5f01bfAjax'] = isset($v69e2026d5c374dfba24c17785c5f01bfAjax) ? $v69e2026d5c374dfba24c17785c5f01bfAjax : '';
        $arrWiths['vf72618e2c4ad420181de23b3d289bd96'] = isset($vf72618e2c4ad420181de23b3d289bd96) ? $vf72618e2c4ad420181de23b3d289bd96 : '';
        $arrWiths['vd034bf0f52524ba7a8177a794c7aadb3'] = isset($vd034bf0f52524ba7a8177a794c7aadb3) ? $vd034bf0f52524ba7a8177a794c7aadb3 : '';
        $arrWiths['ve31a3cfb5d4a4d01ab4547d55260a93a'] = isset($ve31a3cfb5d4a4d01ab4547d55260a93a) ? $ve31a3cfb5d4a4d01ab4547d55260a93a : '';
        $arrWiths['ve31a3cfb5d4a4d01ab4547d55260a93aLink'] = isset($ve31a3cfb5d4a4d01ab4547d55260a93aLink) ? $ve31a3cfb5d4a4d01ab4547d55260a93aLink : '';
        $arrWiths['ve31a3cfb5d4a4d01ab4547d55260a93aChange'] = isset($ve31a3cfb5d4a4d01ab4547d55260a93aChange) ? $ve31a3cfb5d4a4d01ab4547d55260a93aChange : '';
        $arrWiths['ve31a3cfb5d4a4d01ab4547d55260a93aCurrent'] = isset($ve31a3cfb5d4a4d01ab4547d55260a93aCurrent) ? $ve31a3cfb5d4a4d01ab4547d55260a93aCurrent : '';
        $arrWiths['ve31a3cfb5d4a4d01ab4547d55260a93aActual'] = isset($ve31a3cfb5d4a4d01ab4547d55260a93aActual) ? $ve31a3cfb5d4a4d01ab4547d55260a93aActual : '';
        $arrWiths['ve31a3cfb5d4a4d01ab4547d55260a93aTotal'] = isset($ve31a3cfb5d4a4d01ab4547d55260a93aTotal) ? $ve31a3cfb5d4a4d01ab4547d55260a93aTotal : '';
        $arrWiths['ve31a3cfb5d4a4d01ab4547d55260a93aAjax'] = isset($ve31a3cfb5d4a4d01ab4547d55260a93aAjax) ? $ve31a3cfb5d4a4d01ab4547d55260a93aAjax : '';
        $arrWiths['ve31a3cfb5d4a4d01ab4547d55260a93aOrder'] = isset($ve31a3cfb5d4a4d01ab4547d55260a93aOrder) ? $ve31a3cfb5d4a4d01ab4547d55260a93aOrder : '';
        $arrWiths['v208149de52964657ac23ac150e14c667'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg208149de52964657ac23ac150e14c667');
        $arrWiths['v701d5d854e584ff5ad53a585f2458dc9'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg701d5d854e584ff5ad53a585f2458dc9');
        $arrWiths['ve7c662ccbe7d4576b56605a23bc752fe'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msge7c662ccbe7d4576b56605a23bc752fe');
        $arrWiths['v4013675161484dcbaaf9100f50ff3e12'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg4013675161484dcbaaf9100f50ff3e12');
        $arrWiths['ve8037b8fe393420bab464b21aa37d77a'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msge8037b8fe393420bab464b21aa37d77a');
        $arrWiths['v87fb8e1283274563b23c275107111b39'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg87fb8e1283274563b23c275107111b39');
        $arrWiths['vfea1f43fa89c4971b465cf7422e346ad'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgfea1f43fa89c4971b465cf7422e346ad');
        $arrWiths['v4f3b5667237d4c198ca616811064b488'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg4f3b5667237d4c198ca616811064b488');
        $arrWiths['vb4193214e50e40c39f06ca1762b43e67'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgb4193214e50e40c39f06ca1762b43e67');
        $arrWiths['vb2b91c74907b41cfa889de618fdf52e9'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgb2b91c74907b41cfa889de618fdf52e9');
        $arrWiths['vf12b47434a7247ada271a67e43db8c5a'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgf12b47434a7247ada271a67e43db8c5a');
        $arrWiths['vf1a38ea4d86a473986005737b9151b2c'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgf1a38ea4d86a473986005737b9151b2c');
        $arrWiths['v955a0dc0869b4dee98df22419aa573b4'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg955a0dc0869b4dee98df22419aa573b4');
        $arrWiths['v69f79f0e4cd74ed99b4e6795259caf52'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg69f79f0e4cd74ed99b4e6795259caf52');
        $arrWiths['v82837b4bb9724c83b6f51edace342ea6'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg82837b4bb9724c83b6f51edace342ea6');
        $arrWiths['v4b5a927d8db549e4a71635818f183207'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg4b5a927d8db549e4a71635818f183207');
        $arrWiths['vf93438116076472c8f39d5228e01bdf6'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgf93438116076472c8f39d5228e01bdf6');
        $arrWiths['v0d31730eae0c40e59a6a743135cc51f7'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg0d31730eae0c40e59a6a743135cc51f7');
        $arrWiths['v29e5333999964818bf37dee7da45d286'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg29e5333999964818bf37dee7da45d286');
        $arrWiths['v27ecdc1c8d794f0a84e33e12371e3876'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg27ecdc1c8d794f0a84e33e12371e3876');
        $arrWiths['v3c58bf129bb547849ea299c31f29535a'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg3c58bf129bb547849ea299c31f29535a');
        $arrWiths['vf644fa77bf6744c492ee18eb4e4b031f'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgf644fa77bf6744c492ee18eb4e4b031f');
        $arrWiths['v89136f49f93347d4856454ef324f41d4'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg89136f49f93347d4856454ef324f41d4');
        $arrWiths['v28ba9194dfd64831a19b100cd0c9e980'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg28ba9194dfd64831a19b100cd0c9e980');
        $arrWiths['vda98a111f9414a93af8d7983ea0f77b8'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgda98a111f9414a93af8d7983ea0f77b8');
        $arrWiths['v182440a4cf8a4d9db38798344313012b'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg182440a4cf8a4d9db38798344313012b');
        $arrWiths['v0932b5c470c04540987f47f6a4c4a0a8'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg0932b5c470c04540987f47f6a4c4a0a8');
        $arrWiths['vb4e8484015404118a01a6d62a0dd7f7c'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgb4e8484015404118a01a6d62a0dd7f7c');
        $arrWiths['v653fa8af930d47a9bd218d52d924875a'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg653fa8af930d47a9bd218d52d924875a');
        $arrWiths['v7aa947521c5d46e8bbd3fbca5ba36e93'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg7aa947521c5d46e8bbd3fbca5ba36e93');
        $arrWiths['v9cab9f8f57af4a8a982567e2a91bfd78'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg9cab9f8f57af4a8a982567e2a91bfd78');
        $arrWiths['v03c294eb8e924c8cb2af9e48c16f2bac'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg03c294eb8e924c8cb2af9e48c16f2bac');
        $arrWiths['v408eb50752cd49d687b143dd3aa4709c'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg408eb50752cd49d687b143dd3aa4709c');
        $arrWiths['vcadfffcd0667423aa046c716d7f5c6b6'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgcadfffcd0667423aa046c716d7f5c6b6');
        $arrWiths['vf97309aa460e454c9bb07facbfc0c02f'] = $request->session()->get('sesf97309aa460e454c9bb07facbfc0c02f');
        $arrWiths['v51b8542ce9d54e7584a626255b03c57b'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg51b8542ce9d54e7584a626255b03c57b');
        $arrWiths['v039f6c3401bf41fb976ab190024441f3'] = \Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg039f6c3401bf41fb976ab190024441f3');

        $arrWiths['title'] = $title;
        $response = new \Illuminate\Http\Response(view('22b3515cff834219b372a10495cc050f.Index', $arrWiths)->with('title', $arrWiths['title'])->with('vSessionTimeout', \Config::get('session.lifetime') * 60));

        return $response;
    }
}
