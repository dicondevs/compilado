<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
* WebService Implementation
*/
class WebServiceImpl{

}

Route::get('qrcode/{value}', function ($value) 
{
  return QRCode::url($value)->setSize(10)->setMargin(0)->png();    
});
Route::get('api/swagger/docs/v1', array('as' => 'apiDocument', 'uses' => 'ApiDocumentController@index'));
Route::get('/', array('as' => 'homeSolution', 'uses' => 'pg159526b479604919a41187c0bb21a5aeController@index'));

Route::any('WebService', function() {
	$baseUrl = (stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/';
	if (isset($_GET['wsdl'])) { 
		$wsdl = new \Laminas\Soap\AutoDiscover(); // It generates the WSDL
		$wsdl->setUri($baseUrl . 'WebService')->setServiceName('WebService');
		$wsdl->setClass('WebServiceImpl');
		return \Response::make($wsdl->generate()->toXml(), 200, array('Content-type' => 'text/xml; charset=UTF8'));
	}else{
		$server = new \Laminas\Soap\Server($baseUrl . 'WebService?wsdl');
		$server->setClass('WebServiceImpl');
		return \Response::make($server->handle(), 200, array('Content-type' => 'text/xml; charset=UTF8')); 
	}
});
Route::get('api/7eb1819235e1415eb79f892e4f00787f/{par53c5cb8c9f084a488389762bad3fe}', array('as' => 'mt7eb1819235e1415eb79f892e4f00787f', 'uses' => 'APIController@mt7eb1819235e1415eb79f892e4f00787f'));
Route::get('api/1a5ba2e9cb2f46a28d11b6daea24dc94', array('as' => 'mt1a5ba2e9cb2f46a28d11b6daea24dc94', 'uses' => 'APIController@mt1a5ba2e9cb2f46a28d11b6daea24dc94'));
Route::any('api/cff51f8ff2be4b21bac46a431d7717b5/{page}/{pageSize}/{orderColumn}/{orderType}', array('as' => 'mtcff51f8ff2be4b21bac46a431d7717b5', 'uses' => 'APIController@mtcff51f8ff2be4b21bac46a431d7717b5'));
Route::any('api/cff51f8ff2be4b21bac46a431d7717b5Count', array('as' => 'mtcff51f8ff2be4b21bac46a431d7717b5', 'uses' => 'APIController@mtcff51f8ff2be4b21bac46a431d7717b5Count'));
Route::any('api/2af49a9bd05a40ffa34fbd9d578d2432/{par8a38608f30864332a52f8d0d6ba57}/{parf4920fdf13be4c77875f8b135691d}/{page}/{pageSize}/{orderColumn}/{orderType}', array('as' => 'mt2af49a9bd05a40ffa34fbd9d578d2432', 'uses' => 'APIController@mt2af49a9bd05a40ffa34fbd9d578d2432'));
Route::any('api/2af49a9bd05a40ffa34fbd9d578d2432Count/{par8a38608f30864332a52f8d0d6ba57}/{parf4920fdf13be4c77875f8b135691d}', array('as' => 'mt2af49a9bd05a40ffa34fbd9d578d2432', 'uses' => 'APIController@mt2af49a9bd05a40ffa34fbd9d578d2432Count'));
Route::any('api/aa35a6815e6f49e993c3d795e2ba17f2/{page}/{pageSize}/{orderColumn}/{orderType}', array('as' => 'mtaa35a6815e6f49e993c3d795e2ba17f2', 'uses' => 'APIController@mtaa35a6815e6f49e993c3d795e2ba17f2'));
Route::any('api/aa35a6815e6f49e993c3d795e2ba17f2Count', array('as' => 'mtaa35a6815e6f49e993c3d795e2ba17f2', 'uses' => 'APIController@mtaa35a6815e6f49e993c3d795e2ba17f2Count'));
Route::any('api/9b96d308848f492f88dec1647ff64904/{parf8dcb85c62524850a4438540588d2}/{page}/{pageSize}/{orderColumn}/{orderType}', array('as' => 'mt9b96d308848f492f88dec1647ff64904', 'uses' => 'APIController@mt9b96d308848f492f88dec1647ff64904'));
Route::any('api/9b96d308848f492f88dec1647ff64904Count/{parf8dcb85c62524850a4438540588d2}', array('as' => 'mt9b96d308848f492f88dec1647ff64904', 'uses' => 'APIController@mt9b96d308848f492f88dec1647ff64904Count'));
Route::any('api/3d113fe1c4664c5faf23248cb00d410f/{par0f6b13f543a14f43934d960cedb38}/{page}/{pageSize}/{orderColumn}/{orderType}', array('as' => 'mt3d113fe1c4664c5faf23248cb00d410f', 'uses' => 'APIController@mt3d113fe1c4664c5faf23248cb00d410f'));
Route::any('api/3d113fe1c4664c5faf23248cb00d410fCount/{par0f6b13f543a14f43934d960cedb38}', array('as' => 'mt3d113fe1c4664c5faf23248cb00d410f', 'uses' => 'APIController@mt3d113fe1c4664c5faf23248cb00d410fCount'));
Route::any('api/b2bc0e1cf4684a169cde132708d1ab6b/{parb8b30b925dd7422fba0c5b3a13ce1}', array('as' => 'mtb2bc0e1cf4684a169cde132708d1ab6b', 'uses' => 'APIController@mtb2bc0e1cf4684a169cde132708d1ab6b'));
Route::any('api/67d9819e69444c4d92a8304b1cfebfea/{par500fd74266e24544a42d54ed2ec31}/{page}/{pageSize}/{orderColumn}/{orderType}', array('as' => 'mt67d9819e69444c4d92a8304b1cfebfea', 'uses' => 'APIController@mt67d9819e69444c4d92a8304b1cfebfea'));
Route::any('api/67d9819e69444c4d92a8304b1cfebfeaCount/{par500fd74266e24544a42d54ed2ec31}', array('as' => 'mt67d9819e69444c4d92a8304b1cfebfea', 'uses' => 'APIController@mt67d9819e69444c4d92a8304b1cfebfeaCount'));
Route::any('api/67309883c39d4233af415438fcf3e927', array('as' => 'mt67309883c39d4233af415438fcf3e927', 'uses' => 'APIController@mt67309883c39d4233af415438fcf3e927'));
Route::any('api/6d7b058bcc474a80a182eb68c745895b/{par7230c1fab98f4672a8bdd633cc3e1}/{parb968ac36ef0a4b0d8ac12ee1179f1}/{parfbaa4349d38444859ced49cd7a881}', array('as' => 'mt6d7b058bcc474a80a182eb68c745895b', 'uses' => 'APIController@mt6d7b058bcc474a80a182eb68c745895b'));
Route::get('pg3b0022a479ba486195c72618f4617470', array('as' => 'pg3b0022a479ba486195c72618f4617470', 'uses' => 'pg3b0022a479ba486195c72618f4617470Controller@index'));
Route::post('pg3b0022a479ba486195c72618f4617470', array('as' => 'pg3b0022a479ba486195c72618f4617470Post', 'uses' => 'pg3b0022a479ba486195c72618f4617470Controller@post'));
Route::get('pg2c8f0d678fd84082b746b275f7cd2fed', array('as' => 'pg2c8f0d678fd84082b746b275f7cd2fed', 'uses' => 'pg2c8f0d678fd84082b746b275f7cd2fedController@index'));
Route::post('pg2c8f0d678fd84082b746b275f7cd2fed', array('as' => 'pg2c8f0d678fd84082b746b275f7cd2fedPost', 'uses' => 'pg2c8f0d678fd84082b746b275f7cd2fedController@post'));
Route::get('productosForm/{u}', array('as' => 'pg3468c39adbc6471c98f5c1a41afd3640', 'uses' => 'pg2c8f0d678fd84082b746b275f7cd2fedController@index'));
Route::post('productosForm/{u}Main', array('as' => 'pg3468c39adbc6471c98f5c1a41afd3640', 'uses' => 'pg2c8f0d678fd84082b746b275f7cd2fedController@index'));
Route::post('productosForm/{u}', array('as' => 'pg3468c39adbc6471c98f5c1a41afd3640Post', 'uses' => 'pg2c8f0d678fd84082b746b275f7cd2fedController@post'));
Route::get('pg22b3515cff834219b372a10495cc050f', array('as' => 'pg22b3515cff834219b372a10495cc050f', 'uses' => 'pg22b3515cff834219b372a10495cc050fController@index'));
Route::post('pg22b3515cff834219b372a10495cc050f', array('as' => 'pg22b3515cff834219b372a10495cc050fPost', 'uses' => 'pg22b3515cff834219b372a10495cc050fController@post'));
Route::get('catalogosGrid/{tipo}/{p}/{c}', array('as' => 'pg5cc695a971d24cccbf1a3974030903fa', 'uses' => 'pg22b3515cff834219b372a10495cc050fController@index'));
Route::post('catalogosGrid/{tipo}/{p}/{c}Main', array('as' => 'pg5cc695a971d24cccbf1a3974030903fa', 'uses' => 'pg22b3515cff834219b372a10495cc050fController@index'));
Route::post('catalogosGrid/{tipo}/{p}/{c}', array('as' => 'pg5cc695a971d24cccbf1a3974030903faPost', 'uses' => 'pg22b3515cff834219b372a10495cc050fController@post'));
Route::get('pgd21168bbfbaa4e438375f1a32d9a1b19', array('as' => 'pgd21168bbfbaa4e438375f1a32d9a1b19', 'uses' => 'pgd21168bbfbaa4e438375f1a32d9a1b19Controller@index'));
Route::post('pgd21168bbfbaa4e438375f1a32d9a1b19', array('as' => 'pgd21168bbfbaa4e438375f1a32d9a1b19Post', 'uses' => 'pgd21168bbfbaa4e438375f1a32d9a1b19Controller@post'));
Route::get('categoriasForm/{u}', array('as' => 'pg890938a779f543c88d6a0e7ea4cb94ff', 'uses' => 'pgd21168bbfbaa4e438375f1a32d9a1b19Controller@index'));
Route::post('categoriasForm/{u}Main', array('as' => 'pg890938a779f543c88d6a0e7ea4cb94ff', 'uses' => 'pgd21168bbfbaa4e438375f1a32d9a1b19Controller@index'));
Route::post('categoriasForm/{u}', array('as' => 'pg890938a779f543c88d6a0e7ea4cb94ffPost', 'uses' => 'pgd21168bbfbaa4e438375f1a32d9a1b19Controller@post'));
Route::get('pgcd3819bc787049d5899989f13db94700', array('as' => 'pgcd3819bc787049d5899989f13db94700', 'uses' => 'pgcd3819bc787049d5899989f13db94700Controller@index'));
Route::post('pgcd3819bc787049d5899989f13db94700', array('as' => 'pgcd3819bc787049d5899989f13db94700Post', 'uses' => 'pgcd3819bc787049d5899989f13db94700Controller@post'));
Route::get('reportePDF/{registro}/{tipo}', array('as' => 'pg8ea76fe6a88c42669542073bc359f875', 'uses' => 'pgcd3819bc787049d5899989f13db94700Controller@index'));
Route::post('reportePDF/{registro}/{tipo}Main', array('as' => 'pg8ea76fe6a88c42669542073bc359f875', 'uses' => 'pgcd3819bc787049d5899989f13db94700Controller@index'));
Route::post('reportePDF/{registro}/{tipo}', array('as' => 'pg8ea76fe6a88c42669542073bc359f875Post', 'uses' => 'pgcd3819bc787049d5899989f13db94700Controller@post'));
Route::get('pg159526b479604919a41187c0bb21a5ae', array('as' => 'pg159526b479604919a41187c0bb21a5ae', 'uses' => 'pg159526b479604919a41187c0bb21a5aeController@index'));
Route::post('pg159526b479604919a41187c0bb21a5ae', array('as' => 'pg159526b479604919a41187c0bb21a5aePost', 'uses' => 'pg159526b479604919a41187c0bb21a5aeController@post'));

