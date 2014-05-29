var LangCorrect = function(config) {
	config = config || {};
	LangCorrect.superclass.constructor.call(this,config);
};
Ext.extend(LangCorrect,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('langcorrect',LangCorrect);

LangCorrect = new LangCorrect();