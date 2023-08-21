@extends('layouts.mt9f6db8edc741443f8e0d102a7ebc0195')
    @section('dzContenidoPag')
<form method="POST" enctype="multipart/form-data" id="frm9eec71f45bc548aeb81370cbefa4c6e7"><input type="hidden" name="hid9eec71f45bc548aeb81370cbefa4c6e7" id="hid9eec71f45bc548aeb81370cbefa4c6e7" value="9eec71f45bc548aeb81370cbefa4c6e7" />{!! csrf_field() !!}<div class="row"><div class="col-md-4"><div class="form-group"><label for="ctl6de877eb22f748848892b6b422376982_9eec71f45bc548aeb81370cbefa4c6e7"><?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg27ecdc1c8d794f0a84e33e12371e3876'); ?> </label><input type="text" tabindex="1" id="ctl6de877eb22f748848892b6b422376982_9eec71f45bc548aeb81370cbefa4c6e7" name="ctl6de877eb22f748848892b6b422376982_9eec71f45bc548aeb81370cbefa4c6e7" class="form-control"  /></div></div><div class="col-md-3"><button tabindex="2" type="submit" id="ctl4abe39ab8dcd40df8f7b8ba7891aee90_9eec71f45bc548aeb81370cbefa4c6e7" name="ctl4abe39ab8dcd40df8f7b8ba7891aee90_9eec71f45bc548aeb81370cbefa4c6e7" class="btn btn-default" ><?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg82837b4bb9724c83b6f51edace342ea6'); ?></button></div></div></form><div class="ov9b3ce3647df14130a6dc81e0759e6e20" style="display:none;background-color:rgba(255,255,255,0.5);"></div><div class="lo9b3ce3647df14130a6dc81e0759e6e20" style="display:none"><img src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///5AA/+TC/qxC/pAA/7pi/siC/s+S/iH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" /></div>
<div class="modal fade" id="mdl9b3ce3647df14130a6dc81e0759e6e20Captcha" tabindex="-1" role="dialog" aria-labelledby="mdlLabel9b3ce3647df14130a6dc81e0759e6e20Captcha">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClose9b3ce3647df14130a6dc81e0759e6e20Captcha" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabel9b3ce3647df14130a6dc81e0759e6e20Captcha">[[00000000-0000-0000-0000-000000000000]]</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnClose9b3ce3647df14130a6dc81e0759e6e20Captcha" data-dismiss="modal">[[00000000-0000-0000-0000-000000000000]]</button>
      </div>
    </div>
  </div>
</div>
  <span class="reccc32bb0d6c2740d78c31331ec21d8f8a" style="display:none;">
@if ($ve41c1e2b32a14b258a79f72bad26ef61 == null || count($ve41c1e2b32a14b258a79f72bad26ef61) == 0)

@else
    @foreach ($ve41c1e2b32a14b258a79f72bad26ef61 as $item)
<span class="rec6fc3d349c6264991929008579122a438">{!! $item["fl6fc3d349c6264991929008579122a438"] !!}</span>
    @endforeach
@endif

</span>
@endsection
@section('dzFooter')

@endsection
@section('dzLogoMG')

@endsection
@section('dzMenuNavigation')
{!! str_replace("{Extra}","",$vd034bf0f52524ba7a8177a794c7aadb3) !!}

@endsection
@section('dzMenuUser')

@endsection
@section('dzTitleEncabezadoPagina')

@endsection
@section('styles')
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.6.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.css" />
@endsection
@section('scripts')
<script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/dist/parsley.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/Parsley/src/extra/validator/customvalidators.js" ></script><script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew9eec71f45bc548aeb81370cbefa4c6e7=true;var monThousands=''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();function validFunc9eec71f45bc548aeb81370cbefa4c6e7(){if ($('.isNumber').length>0){$('.isNumber').each(function(){$(this).val($(this).val().replace(''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgMoneySymbol'); ?>'+'','').replace(new RegExp(monThousands,'g'),''));});}$('#frm9eec71f45bc548aeb81370cbefa4c6e7').parsley().destroy();$('#frm9eec71f45bc548aeb81370cbefa4c6e7').parsley();Parsley.on('field:validated',function(fieldInstance){if(fieldInstance.$element.is(":hidden")&&!fieldInstance.$element.hasClass("autoCompleteSelect")){fieldInstance._ui.$errorsWrapper.css('display','none');fieldInstance.validationResult=true;return true;}});var validated=$('#frm9eec71f45bc548aeb81370cbefa4c6e7').parsley().validate();return validated;}function errFunc9eec71f45bc548aeb81370cbefa4c6e7(){if ($('.isMoney').length>0){$('.isMoney').maskMoney('mask');}}var alreadySended9b3ce3647df14130a6dc81e0759e6e20=false;$('#ctl4abe39ab8dcd40df8f7b8ba7891aee90_9eec71f45bc548aeb81370cbefa4c6e7').click(function(){validated=validFunc9eec71f45bc548aeb81370cbefa4c6e7();if (!validated){errFunc9eec71f45bc548aeb81370cbefa4c6e7();}else{console.log(alreadySended9b3ce3647df14130a6dc81e0759e6e20);if(alreadySended9b3ce3647df14130a6dc81e0759e6e20){return false;}alreadySended9b3ce3647df14130a6dc81e0759e6e20=true;$('#ctl4abe39ab8dcd40df8f7b8ba7891aee90_9eec71f45bc548aeb81370cbefa4c6e7').attr('disabled','disabled');$('.ov9b3ce3647df14130a6dc81e0759e6e20').css('top','0px');$('.ov9b3ce3647df14130a6dc81e0759e6e20').css('left','0px');$('.ov9b3ce3647df14130a6dc81e0759e6e20').css('position','fixed');$('.ov9b3ce3647df14130a6dc81e0759e6e20').css('z-index','100000');$('.ov9b3ce3647df14130a6dc81e0759e6e20').css('height','100%');$('.ov9b3ce3647df14130a6dc81e0759e6e20').css('width','100%');$('.ov9b3ce3647df14130a6dc81e0759e6e20').show();$('.lo9b3ce3647df14130a6dc81e0759e6e20').css('top','50%');$('.lo9b3ce3647df14130a6dc81e0759e6e20').css('left','50%');$('.lo9b3ce3647df14130a6dc81e0759e6e20').css('position','fixed');$('.lo9b3ce3647df14130a6dc81e0759e6e20').css('z-index','100001');$('.lo9b3ce3647df14130a6dc81e0759e6e20').show();$('.lo9b3ce3647df14130a6dc81e0759e6e20').css('margin-left','-16px');$('.lo9b3ce3647df14130a6dc81e0759e6e20').css('margin-top','-16px');if (window.FormData){formdata=new FormData($('#frm9eec71f45bc548aeb81370cbefa4c6e7')[0]);formdata.append('ctl4abe39ab8dcd40df8f7b8ba7891aee90_9eec71f45bc548aeb81370cbefa4c6e7','1');if(fromButton!=''){formdata.append(fromButton,'1');}$.ajax({url:'{!! Request::fullUrl() !!}',type:'POST',data:formdata,success:function(data,textStatus,jqXHR){$('#ctl4abe39ab8dcd40df8f7b8ba7891aee90_9eec71f45bc548aeb81370cbefa4c6e7').removeAttr('disabled');$('.ov9b3ce3647df14130a6dc81e0759e6e20').hide();$('.lo9b3ce3647df14130a6dc81e0759e6e20').hide();if (data=='NotExists'){alreadySended9b3ce3647df14130a6dc81e0759e6e20=false;}if (data=='AlreadyExists'){alreadySended9b3ce3647df14130a6dc81e0759e6e20=false;}if (data=='InvalidCaptcha'){alreadySended9b3ce3647df14130a6dc81e0759e6e20=false;$('#mdl9b3ce3647df14130a6dc81e0759e6e20Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/catalogosGrid/2/-/-';},processData:false,contentType:false});}else{var  iframeId='unique'+(new Date().getTime());var iframe=$('<iframe src="javascript:false;" name="'+iframeId+'" />');iframe.hide();$('#frm9eec71f45bc548aeb81370cbefa4c6e7').attr('target',iframeId);$('#frm9eec71f45bc548aeb81370cbefa4c6e7').attr('action','{!! Request::fullUrl() !!}');iframe.appendTo('body');iframe.load(function(e){$('#ctl4abe39ab8dcd40df8f7b8ba7891aee90_9eec71f45bc548aeb81370cbefa4c6e7').removeAttr('disabled');$('.ov9b3ce3647df14130a6dc81e0759e6e20').hide();$('.lo9b3ce3647df14130a6dc81e0759e6e20').hide();var doc=getDoc9b3ce3647df14130a6dc81e0759e6e20(iframe[0]);var docRoot=doc.body?doc.body:doc.documentElement;var data = docRoot.innerHTML;if (data=='AlreadyExists'){}if (data=='InvalidCaptcha'){$('#mdl9b3ce3647df14130a6dc81e0759e6e20Captcha').modal('show');return;}if ((typeof data)=='string'){data=JSON.parse(data);}location='<?php echo URL::to("/") ?>/catalogosGrid/2/-/-';});$('#frm9eec71f45bc548aeb81370cbefa4c6e7').submit();}}return false;});function getDoc9b3ce3647df14130a6dc81e0759e6e20(frame) {var doc=null;try {if (frame.contentWindow){doc = frame.contentWindow.document;}} catch(err) {}if (doc){return doc;}try {doc = frame.contentDocument ? frame.contentDocument : frame.document;} catch(err) {doc = frame.document;}return doc;}if($('.reccc32bb0d6c2740d78c31331ec21d8f8a').children().length>0){isNew9eec71f45bc548aeb81370cbefa4c6e7=false;if($('.rec6fc3d349c6264991929008579122a438').length>0){$('#ctl6de877eb22f748848892b6b422376982_9eec71f45bc548aeb81370cbefa4c6e7').val($('.rec6fc3d349c6264991929008579122a438').html());$('#ctl6de877eb22f748848892b6b422376982_9eec71f45bc548aeb81370cbefa4c6e7').change();}}</script>
@endsection
