/*!CK:369158307!*//*1449519938,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["71V1j"]); }

__d('AccessibilityLogger',['AsyncSignal','Cookie'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h={COOKIE:'a11y',DECAY_MS:6*60*60*1000,DEFAULT:{sr:0,'sr-ts':Date.now(),jk:0,'jk-ts':Date.now(),kb:0,'kb-ts':Date.now(),hcm:0,'hcm-ts':Date.now()},getCookie:function(){var i=h.DEFAULT,j=c('Cookie').get(h.COOKIE);if(j){j=JSON.parse(j);for(var k in i)if(k in j)i[k]=j[k];}return i;},logKey:function(i,j){var k=h.getCookie();k[i]++;var l=Date.now();if(l-k[i+'-ts']>h.DECAY_MS){new (c('AsyncSignal'))('/ajax/accessibilitylogging',{eventName:j,times_pressed:k[i]}).send();k[i+'-ts']=l;k[i]=0;}c('Cookie').set(h.COOKIE,JSON.stringify(k));},logHCM:function(){h.logKey('hcm','hcm_users');},logSRKey:function(){h.logKey('sr','sr_users');},logJKKey:function(){h.logKey('jk','jk_users');},logFocusIn:function(){h.logKey('kb','kb_users');}};f.exports=h;},null);