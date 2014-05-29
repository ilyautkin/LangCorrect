LangCorrect.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('langcorrect')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('langcorrect_items')
				,items: [{
					html: _('langcorrect_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'langcorrect-grid-items'
					,preventRender: true
				}]
			}]
		}]
	});
	LangCorrect.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(LangCorrect.panel.Home,MODx.Panel);
Ext.reg('langcorrect-panel-home',LangCorrect.panel.Home);
