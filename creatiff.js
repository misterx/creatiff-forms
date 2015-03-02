Ext.onReady(function(){
	Ext.override(Ext.form.field.Tag, {
		getSubmitData: function() {
			var me = this,
				val = me.callParent(arguments);
			val[me.name+'[]'] = val[me.name];
			delete(val[me.name]);
			return val;
		}
	});
});