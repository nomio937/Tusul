/*!CK:3451285492!*//*1458052938,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["Lg2l2"]); }

__d('UFIUIEvents',[],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h='UFIUIEvents/ufiActionAddComment',i='UFIUIEvents/ufiActionLinkLike',j='ufi/blur',k='ufi/changed',l='ufi/comment',m='CommentUFI.Pager',n='ufi/focus',o='ufi/inputHeightChanged',p='ufi/page_cleared',q='ufi/photoPreviewHightChanged',r='ufi/translationRendered',s='ufi/reactionButtonClicked',t={ActionAddComment:h,ActionLinkLike:i,Blur:j,Changed:k,Comment:l,CommentPager:m,Focus:n,InputHeightChanged:o,PageCleared:p,PhotoPreviewHeightChanged:q,TranslationRendered:r,ReactionButtonClicked:s};f.exports=t;},null);
__d('LoadingIndicator.react',['cx','ix','React','Image.react','keyMirror','joinClasses'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j=c('keyMirror')({white:true,blue:true,black:true}),k=c('keyMirror')({small:true,medium:true,large:true}),l={white:{large:i('/images/loaders/indicator_blue_large.gif'),medium:i('/images/loaders/indicator_blue_medium.gif'),small:i('/images/loaders/indicator_blue_small.gif')},blue:{large:i('/images/loaders/indicator_white_large.gif'),small:i('/images/loaders/indicator_white_small.gif')},black:{large:i('/images/loaders/indicator_black.gif')}},m=c('React').createClass({displayName:'LoadingIndicator',render:function(){var n=this.props.color,o=this.props.size;if(!l[n])return c('React').createElement('span',null);if(!l[n][o])return c('React').createElement('span',null);var p=this.props.showonasync?"uiLoadingIndicatorAsync":'',q=l[n][o];return (c('React').createElement(c('Image.react'),babelHelpers['extends']({},this.props,{src:q,className:c('joinClasses')(this.props.className,p)})));}});m.SIZES=k;m.COLORS=j;f.exports=m;},null);
__d('ContentTranslationStrings',['fbt'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();var i={SEE_TRANSLATION:h._("See Translation"),SEE_TRANSLATION_TIP:h._("Translate this comment"),NO_TRANSLATION_AVAILABLE:h._("No translation available"),AUTOMATICALLY_TRANSLATED:h._("Automatically Translated"),HIDE_ORIGINAL:h._("Hide Original"),SEE_ORIGINAL:h._("See Original"),REPORT_LANGUAGE_DIALOG_TY:h._("Thank you for letting us know about this error. Your feedback improves translation for everyone on Facebook."),UNDO:h._("Undo"),CANCEL:h._("Cancel"),SUBMIT:h._("Submit"),DONE:h._("Done"),CLOSE:h._("Close"),ENTER_TRANSLATION:h._("Enter your translation"),EDIT_TRANSLATION_THANKS:h._("Thank you! We are constantly working to improve our translation quality. Your feedback helps us to train better models."),EDIT_TRANSLATION_DIALOG_TITLE_NORMAL:h._("Edit Translation"),EDIT_TRANSLATION_DIALOG_TITLE_ERROR:h._("Submission Unsuccessful"),EDIT_TRANSLATION_ERROR:h._("There was a problem with the submission. Please try again later. Thanks for the good work!"),EDIT_TRANSLATION_MENU:h._("I have a better translation"),getTranslatedFromTo:function(j,k){return h._("Translated from {source language} to {target language}",[h.param('source language',j),h.param('target language',k)]);},getTranslatedFrom:function(j){return h._("Translated from {source language}",[h.param('source language',j)]);},getReportLanguageDialogHeader:function(j){return h._("This wasn't in {language}",[h.param('language',j)]);},getReportLanguage:function(j){return h._("Post was not in {language}",[h.param('language',j)]);},getNeverTranslate:function(j){return h._("Never Translate {language}",[h.param('language',j)]);},getNeverTranslateDialog:function(j){return h._("Posts in {language} won't be translated for you.",[h.param('language',j)]);},getDisableAutoTranslate:function(j){return h._("Disable automatic translation for {dialect}",[h.param('dialect',j)]);},getDisableAutoTranslateDialog:function(j){return h._("Posts in {dialect} won't be automatically translated for you.",[h.param('dialect',j)]);}};f.exports=i;},null);
__d("XLtgPostTranslationController",["XController"],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/intl\/see_translation\/",{ftid:{type:"String",required:true},text_size:{type:"Enum",defaultValue:"medium",enumType:1}});},null);
__d('highlight',['Animation','Style'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();function h(i,j,k,l){new (c('Animation'))(i).from('background',l||'#fff9d7').to('background',k||'#fff').ease(c('Animation').ease.both).duration(2000).ondone(function(){c('Style').set(i,'background','');j&&j();}).go();}f.exports=h;},null);
__d('LtgPostTranslation',['cx','Arbiter','AsyncRequest','ContentTranslationStrings','DOM','Event','highlight','LoadingIndicator.react','React','ReactDOM','UFIUIEvents','XLtgPostTranslationController'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();function i(k,l){var m=c('DOM').create('div',{'class':"_49k0"},l||c('ContentTranslationStrings').NO_TRANSLATION_AVAILABLE);c('DOM').replace(k,m);if(l)c('highlight')(m);}var j={bindListener:function(k,l){c('Event').listen(k,'click',function(event){event.prevent();c('ReactDOM').render(c('React').createElement(c('LoadingIndicator.react'),{size:'small',color:'white'}),k);var m=c('XLtgPostTranslationController').getURIBuilder().setString('ftid',l).getURI();new (c('AsyncRequest'))().setURI(m).setHandler(function(n){var o=n.getPayload();i(k,o&&o.text);c('Arbiter').inform(c('UFIUIEvents').TranslationRendered);}).setErrorHandler(function(){i(k,null);}).send();});}};f.exports=j;},null);