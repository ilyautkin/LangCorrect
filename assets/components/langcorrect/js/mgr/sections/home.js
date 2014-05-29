LangCorrect.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'langcorrect-panel-home'
			,renderTo: 'langcorrect-panel-home-div'
		}]
	}); 
	LangCorrect.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(LangCorrect.page.Home,MODx.Component);
Ext.reg('langcorrect-page-home',LangCorrect.page.Home);