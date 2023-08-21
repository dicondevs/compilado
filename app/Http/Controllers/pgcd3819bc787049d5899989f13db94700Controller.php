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
 * reportePDF - Reportes PDF.
 */
class pgcd3819bc787049d5899989f13db94700Controller extends Controller
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

        // sp_reportes - sp_reportes

        $par7230c1fab98f4672a8bdd633cc3e4fc11 = $request->session()->get('sesf97309aa460e454c9bb07facbfc0c02f');

        if (null == $par7230c1fab98f4672a8bdd633cc3e4fc11) {
            $par7230c1fab98f4672a8bdd633cc3e4fc11 = '0';
        }

        $parb968ac36ef0a4b0d8ac12ee1179f3f0e1 = $request->input('registro');

        if (null == $parb968ac36ef0a4b0d8ac12ee1179f3f0e1) {
            $parb968ac36ef0a4b0d8ac12ee1179f3f0e1 = '0';
        }

        $parfbaa4349d38444859ced49cd7a88c24f1 = $request->input('tipo');

        if (null == $parfbaa4349d38444859ced49cd7a88c24f1) {
            $parfbaa4349d38444859ced49cd7a88c24f1 = '0';
        }

        $vfc57f454b995468982a3e267d0f2f520 = \App\rep0a14ea93830f4813be11c92f6fdf225f::mt6d7b058bcc474a80a182eb68c745895b($par7230c1fab98f4672a8bdd633cc3e4fc11, $parb968ac36ef0a4b0d8ac12ee1179f3f0e1, $parfbaa4349d38444859ced49cd7a88c24f1);

        $vfc57f454b995468982a3e267d0f2f520Ajax = \URL::to('/').'/api/6d7b058bcc474a80a182eb68c745895b/'.(null == $par7230c1fab98f4672a8bdd633cc3e4fc11 ? '-' : ('' == $par7230c1fab98f4672a8bdd633cc3e4fc11 ? '-' : $par7230c1fab98f4672a8bdd633cc3e4fc11)).'/'.(null == $parb968ac36ef0a4b0d8ac12ee1179f3f0e1 ? '-' : ('' == $parb968ac36ef0a4b0d8ac12ee1179f3f0e1 ? '-' : $parb968ac36ef0a4b0d8ac12ee1179f3f0e1)).'/'.(null == $parfbaa4349d38444859ced49cd7a88c24f1 ? '-' : ('' == $parfbaa4349d38444859ced49cd7a88c24f1 ? '-' : $parfbaa4349d38444859ced49cd7a88c24f1)).'/{page}/{pagesize}/{orderColumn}/{orderType}';

        // sp_menu - sp_menu

        $vd034bf0f52524ba7a8177a794c7aadb3 = \App\rep0a14ea93830f4813be11c92f6fdf225f::mt67309883c39d4233af415438fcf3e927();

        $vd034bf0f52524ba7a8177a794c7aadb3Ajax = \URL::to('/').'/api/67309883c39d4233af415438fcf3e927/{page}/{pagesize}/{orderColumn}/{orderType}';

        //reporte pdf - reporte pdf
        if ('1' == $request->input('Excel')) {
            $content = '<html><head></head><body>'.$vfc57f454b995468982a3e267d0f2f520.'</body></html>';
            $headers = [
                  'Content-type' => 'application/vnd.ms-excel;charset=utf-8',
                  'Content-Disposition' => 'attachment; filename="'.\Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgb4e8484015404118a01a6d62a0dd7f7c').'.xls"',
              ];

            return \Response::make($content, 200, $headers);
        } else {
            $imgConv6353d2348d7843fba92c5ab39014b3af = new \Mpdf\Mpdf([
            'format' => 'letter',
            'orientation' => 'P',
          ]);
            $imgConv6353d2348d7843fba92c5ab39014b3af->SetDisplayMode('fullpage');
            $imgConv6353d2348d7843fba92c5ab39014b3af->keep_table_proportions = true;
            $imgConv6353d2348d7843fba92c5ab39014b3af->SetTitle(\Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgb4e8484015404118a01a6d62a0dd7f7c'));
            $imgConv6353d2348d7843fba92c5ab39014b3af->SetSubject(\Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgb4e8484015404118a01a6d62a0dd7f7c'));
            $imgConv6353d2348d7843fba92c5ab39014b3af->SetAuthor('Codium 1.1.8333.17559');
            $imgConv6353d2348d7843fba92c5ab39014b3af->SetCreator('Codium 1.1.8333.17559');
            $imgConv6353d2348d7843fba92c5ab39014b3af->SetHTMLHeader('');
            $imgConv6353d2348d7843fba92c5ab39014b3af->SetHTMLFooter('');
            $imgConv6353d2348d7843fba92c5ab39014b3af->WriteHTML('<html><head></head><body>'.$vfc57f454b995468982a3e267d0f2f520.'</body></html>');
            $imgConv6353d2348d7843fba92c5ab39014b3af->Output(\Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgb4e8484015404118a01a6d62a0dd7f7c').'.pdf', 'I');
        }

        $arrWiths['vfc57f454b995468982a3e267d0f2f520'] = isset($vfc57f454b995468982a3e267d0f2f520) ? $vfc57f454b995468982a3e267d0f2f520 : '';
        $arrWiths['vd034bf0f52524ba7a8177a794c7aadb3'] = isset($vd034bf0f52524ba7a8177a794c7aadb3) ? $vd034bf0f52524ba7a8177a794c7aadb3 : '';
        $arrWiths['v6353d2348d7843fba92c5ab39014b3af'] = isset($v6353d2348d7843fba92c5ab39014b3af) ? $v6353d2348d7843fba92c5ab39014b3af : '';
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
        $response = new \Illuminate\Http\Response(view('cd3819bc787049d5899989f13db94700.Index', $arrWiths)->with('title', $arrWiths['title'])->with('vSessionTimeout', \Config::get('session.lifetime') * 60));

        return $response;
    }
}
