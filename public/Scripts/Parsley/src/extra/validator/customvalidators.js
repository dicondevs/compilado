window.Parsley
  .addValidator('notequalto', {
    requirementType: 'string',
    validateString: function(value, requirement) {
		if ($(requirement).val()!='')
		{
			return value != $(requirement).val();
		}else{
			return true;
		}
    }
  });
window.Parsley
  .addValidator('lessthandate', {
    requirementType: 'string',
    validateString: function(value, requirement) {
		if ($(requirement).val()!='')
		{
			return moment(value,currentSystemOriginalShortDatetimeFormat) < moment($(requirement).val(),currentSystemOriginalShortDatetimeFormat);
		}else{
			return true;
		}
    }
  });
window.Parsley
  .addValidator('lessorequalthandate', {
    requirementType: 'string',
    validateString: function(value, requirement) {
		if ($(requirement).val()!='')
		{
			return moment(value,currentSystemOriginalShortDatetimeFormat) <= moment($(requirement).val(),currentSystemOriginalShortDatetimeFormat);
		}else{
			return true;
		}
    }
  });
window.Parsley
  .addValidator('greaterthandate', {
    requirementType: 'string',
    validateString: function(value, requirement) {
		if ($(requirement).val()!='')
		{
			return moment(value,currentSystemOriginalShortDatetimeFormat) > moment($(requirement).val(),currentSystemOriginalShortDatetimeFormat);
		}else{
			return true;
		}
    }
  });
window.Parsley
  .addValidator('greaterorequalthandate', {
    requirementType: 'string',
    validateString: function(value, requirement) {
		if ($(requirement).val()!='')
		{
			return moment(value,currentSystemOriginalShortDatetimeFormat) >= moment($(requirement).val(),currentSystemOriginalShortDatetimeFormat);
		}else{
			return true;
		}
    }
  });