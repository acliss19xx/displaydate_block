ccmValidateBlockForm = function() {
	
	if ($('select[name=dateflag]').val() == '' || $('select[name=dateflag]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 表示日付');
	}

	if ($('select[name=dateformat]').val() == '' || $('select[name=dateformat]').val() == 0) {
		ccm_addError('要求された選択肢がありません: 表示フォーマット');
	}


	return false;
}
