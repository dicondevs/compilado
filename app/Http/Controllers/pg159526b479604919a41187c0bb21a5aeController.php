<?php

// =============================================
// Autor                Alexander Eliseo Olivieri
// Creado               lunes, 21 de agosto de 2023 14:22:36
// Descripción          Laravel - MySQL®
// Versión              1.0.0.0.6
// =============================================

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * login - login.
 */
class pg159526b479604919a41187c0bb21a5aeController extends Controller
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

        // Seguridad interna - Seguridad interna
        if (null != $request->input('hid6201e017352445d485ee47631eb4bc74') && '6201e017352445d485ee47631eb4bc74' == $request->input('hid6201e017352445d485ee47631eb4bc74')) {
            $par8a38608f30864332a52f8d0d6ba57af0 = $request->input('ctl8f83e33b27b842d4991380a50d03c685_6201e017352445d485ee47631eb4bc74');

            if ('-' == $par8a38608f30864332a52f8d0d6ba57af0) {
                $par8a38608f30864332a52f8d0d6ba57af0 = null;
            }

            if (null == $par8a38608f30864332a52f8d0d6ba57af0) {
                $par8a38608f30864332a52f8d0d6ba57af0 = '';
            }

            $parf4920fdf13be4c77875f8b135691dfdf = hash('sha1', $request->input('ctlca3c4295343545d3ab60dde11f4714f4_6201e017352445d485ee47631eb4bc74'));

            if ('-' == $parf4920fdf13be4c77875f8b135691dfdf) {
                $parf4920fdf13be4c77875f8b135691dfdf = null;
            }

            if (null == $parf4920fdf13be4c77875f8b135691dfdf) {
                $parf4920fdf13be4c77875f8b135691dfdf = '';
            }

            $lst = \App\rep0a14ea93830f4813be11c92f6fdf225f::mt2af49a9bd05a40ffa34fbd9d578d2432($par8a38608f30864332a52f8d0d6ba57af0, $parf4920fdf13be4c77875f8b135691dfdf, 1, 1, '-', '-');
            if (count($lst) > 0) {
                $tb = $lst[0];
                $request->session()->put('sesf97309aa460e454c9bb07facbfc0c02f', $tb['fl34ac913b7a8e4931ac3cce1734e7727c']); // username
            }
            $response = \Response::json($lst);

            return $response;
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
        $response = new \Illuminate\Http\Response(view('159526b479604919a41187c0bb21a5ae.Index', $arrWiths)->with('title', $arrWiths['title'])->with('vSessionTimeout', \Config::get('session.lifetime') * 60));

        return $response;
    }
}
