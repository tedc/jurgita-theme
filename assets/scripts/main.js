!function(e,t){"function"==typeof define&&define.amd?define(t):"object"==typeof exports?module.exports=t():e.ScrollMagic=t()}(this,function(){"use strict";var e=function(){o.log(2,"(COMPATIBILITY NOTICE) -> As of ScrollMagic 2.0.0 you need to use 'new ScrollMagic.Controller()' to create a new controller instance. Use 'new ScrollMagic.Scene()' to instance a scene.")};e.version="2.0.5",window.addEventListener("mousewheel",function(){});var t="data-scrollmagic-pin-spacer";e.Controller=function(i){var r,l,s="ScrollMagic.Controller",a="FORWARD",c="REVERSE",u="PAUSED",f=n.defaults,d=this,g=o.extend({},f,i),p=[],h=!1,v=0,m=u,w=!0,y=0,S=!0,b=function(){for(var t in g)f.hasOwnProperty(t)||(P(2,'WARNING: Unknown option "'+t+'"'),delete g[t]);if(g.container=o.get.elements(g.container)[0],!g.container)throw P(1,"ERROR creating object "+s+": No valid scroll container supplied"),s+" init failed.";w=g.container===window||g.container===document.body||!document.body.contains(g.container),w&&(g.container=window),y=C(),g.container.addEventListener("resize",F),g.container.addEventListener("scroll",F),g.refreshInterval=parseInt(g.refreshInterval)||f.refreshInterval,E(),P(3,"added new "+s+" controller (v"+e.version+")")},E=function(){g.refreshInterval>0&&(l=window.setTimeout(O,g.refreshInterval))},R=function(){return g.vertical?o.get.scrollTop(g.container):o.get.scrollLeft(g.container)},C=function(){return g.vertical?o.get.height(g.container):o.get.width(g.container)},x=this._setScrollPos=function(e){g.vertical?w?window.scrollTo(o.get.scrollLeft(),e):g.container.scrollTop=e:w?window.scrollTo(e,o.get.scrollTop()):g.container.scrollLeft=e},T=function(){if(S&&h){var e=o.type.Array(h)?h:p.slice(0);h=!1;var t=v;v=d.scrollPos();var n=v-t;0!==n&&(m=n>0?a:c),m===c&&e.reverse(),e.forEach(function(t,n){P(3,"updating Scene "+(n+1)+"/"+e.length+" ("+p.length+" total)"),t.update(!0)}),0===e.length&&g.loglevel>=3&&P(3,"updating 0 Scenes (nothing added to controller)")}},z=function(){r=o.rAF(T)},F=function(e){P(3,"event fired causing an update:",e.type),"resize"==e.type&&(y=C(),m=u),h!==!0&&(h=!0,z())},O=function(){if(!w&&y!=C()){var e;try{e=new Event("resize",{bubbles:!1,cancelable:!1})}catch(t){e=document.createEvent("Event"),e.initEvent("resize",!1,!1)}g.container.dispatchEvent(e)}p.forEach(function(e,t){e.refresh()}),E()},P=this._log=function(e,t){g.loglevel>=e&&(Array.prototype.splice.call(arguments,1,0,"("+s+") ->"),o.log.apply(window,arguments))};this._options=g;var A=function(e){if(e.length<=1)return e;var t=e.slice(0);return t.sort(function(e,t){return e.scrollOffset()>t.scrollOffset()?1:-1}),t};return this.addScene=function(t){if(o.type.Array(t))t.forEach(function(e,t){d.addScene(e)});else if(t instanceof e.Scene){if(t.controller()!==d)t.addTo(d);else if(p.indexOf(t)<0){p.push(t),p=A(p),t.on("shift.controller_sort",function(){p=A(p)});for(var n in g.globalSceneOptions)t[n]&&t[n].call(t,g.globalSceneOptions[n]);P(3,"adding Scene (now "+p.length+" total)")}}else P(1,"ERROR: invalid argument supplied for '.addScene()'");return d},this.removeScene=function(e){if(o.type.Array(e))e.forEach(function(e,t){d.removeScene(e)});else{var t=p.indexOf(e);t>-1&&(e.off("shift.controller_sort"),p.splice(t,1),P(3,"removing Scene (now "+p.length+" left)"),e.remove())}return d},this.updateScene=function(t,n){return o.type.Array(t)?t.forEach(function(e,t){d.updateScene(e,n)}):n?t.update(!0):h!==!0&&t instanceof e.Scene&&(h=h||[],h.indexOf(t)==-1&&h.push(t),h=A(h),z()),d},this.update=function(e){return F({type:"resize"}),e&&T(),d},this.scrollTo=function(n,i){if(o.type.Number(n))x.call(g.container,n,i);else if(n instanceof e.Scene)n.controller()===d?d.scrollTo(n.scrollOffset(),i):P(2,"scrollTo(): The supplied scene does not belong to this controller. Scroll cancelled.",n);else if(o.type.Function(n))x=n;else{var r=o.get.elements(n)[0];if(r){for(;r.parentNode.hasAttribute(t);)r=r.parentNode;var l=g.vertical?"top":"left",s=o.get.offset(g.container),a=o.get.offset(r);w||(s[l]-=d.scrollPos()),d.scrollTo(a[l]-s[l],i)}else P(2,"scrollTo(): The supplied argument is invalid. Scroll cancelled.",n)}return d},this.scrollPos=function(e){return arguments.length?(o.type.Function(e)?R=e:P(2,"Provided value for method 'scrollPos' is not a function. To change the current scroll position use 'scrollTo()'."),d):R.call(d)},this.info=function(e){var t={size:y,vertical:g.vertical,scrollPos:v,scrollDirection:m,container:g.container,isDocument:w};return arguments.length?void 0!==t[e]?t[e]:void P(1,'ERROR: option "'+e+'" is not available'):t},this.loglevel=function(e){return arguments.length?(g.loglevel!=e&&(g.loglevel=e),d):g.loglevel},this.enabled=function(e){return arguments.length?(S!=e&&(S=!!e,d.updateScene(p,!0)),d):S},this.destroy=function(e){window.clearTimeout(l);for(var t=p.length;t--;)p[t].destroy(e);return g.container.removeEventListener("resize",F),g.container.removeEventListener("scroll",F),o.cAF(r),P(3,"destroyed "+s+" (reset: "+(e?"true":"false")+")"),null},b(),d};var n={defaults:{container:window,vertical:!0,globalSceneOptions:{},loglevel:2,refreshInterval:100}};e.Controller.addOption=function(e,t){n.defaults[e]=t},e.Controller.extend=function(t){var n=this;e.Controller=function(){return n.apply(this,arguments),this.$super=o.extend({},this),t.apply(this,arguments)||this},o.extend(e.Controller,n),e.Controller.prototype=n.prototype,e.Controller.prototype.constructor=e.Controller},e.Scene=function(n){var r,l,s="ScrollMagic.Scene",a="BEFORE",c="DURING",u="AFTER",f=i.defaults,d=this,g=o.extend({},f,n),p=a,h=0,v={start:0,end:0},m=0,w=!0,y=function(){for(var e in g)f.hasOwnProperty(e)||(b(2,'WARNING: Unknown option "'+e+'"'),delete g[e]);for(var t in f)O(t);z()},S={};this.on=function(e,t){return o.type.Function(t)?(e=e.trim().split(" "),e.forEach(function(e){var n=e.split("."),i=n[0],o=n[1];"*"!=i&&(S[i]||(S[i]=[]),S[i].push({namespace:o||"",callback:t}))})):b(1,"ERROR when calling '.on()': Supplied callback for '"+e+"' is not a valid function!"),d},this.off=function(e,t){return e?(e=e.trim().split(" "),e.forEach(function(e,n){var i=e.split("."),o=i[0],r=i[1]||"",l="*"===o?Object.keys(S):[o];l.forEach(function(e){for(var n=S[e]||[],i=n.length;i--;){var o=n[i];!o||r!==o.namespace&&"*"!==r||t&&t!=o.callback||n.splice(i,1)}n.length||delete S[e]})}),d):(b(1,"ERROR: Invalid event name supplied."),d)},this.trigger=function(t,n){if(t){var i=t.trim().split("."),o=i[0],r=i[1],l=S[o];b(3,"event fired:",o,n?"->":"",n||""),l&&l.forEach(function(t,i){r&&r!==t.namespace||t.callback.call(d,new e.Event(o,t.namespace,d,n))})}else b(1,"ERROR: Invalid event name supplied.");return d},d.on("change.internal",function(e){"loglevel"!==e.what&&"tweenChanges"!==e.what&&("triggerElement"===e.what?C():"reverse"===e.what&&d.update())}).on("shift.internal",function(e){E(),d.update()});var b=this._log=function(e,t){g.loglevel>=e&&(Array.prototype.splice.call(arguments,1,0,"("+s+") ->"),o.log.apply(window,arguments))};this.addTo=function(t){return t instanceof e.Controller?l!=t&&(l&&l.removeScene(d),l=t,z(),R(!0),C(!0),E(),l.info("container").addEventListener("resize",x),t.addScene(d),d.trigger("add",{controller:l}),b(3,"added "+s+" to controller"),d.update()):b(1,"ERROR: supplied argument of 'addTo()' is not a valid ScrollMagic Controller"),d},this.enabled=function(e){return arguments.length?(w!=e&&(w=!!e,d.update(!0)),d):w},this.remove=function(){if(l){l.info("container").removeEventListener("resize",x);var e=l;l=void 0,e.removeScene(d),d.trigger("remove"),b(3,"removed "+s+" from controller")}return d},this.destroy=function(e){return d.trigger("destroy",{reset:e}),d.remove(),d.off("*.*"),b(3,"destroyed "+s+" (reset: "+(e?"true":"false")+")"),null},this.update=function(e){if(l)if(e)if(l.enabled()&&w){var t,n=l.info("scrollPos");t=g.duration>0?(n-v.start)/(v.end-v.start):n>=v.start?1:0,d.trigger("update",{startPos:v.start,endPos:v.end,scrollPos:n}),d.progress(t)}else P&&p===c&&_(!0);else l.updateScene(d,!1);return d},this.refresh=function(){return R(),C(),d},this.progress=function(e){if(arguments.length){var t=!1,n=p,i=l?l.info("scrollDirection"):"PAUSED",o=g.reverse||e>=h;if(0===g.duration?(t=h!=e,h=e<1&&o?0:1,p=0===h?a:c):e<0&&p!==a&&o?(h=0,p=a,t=!0):e>=0&&e<1&&o?(h=e,p=c,t=!0):e>=1&&p!==u?(h=1,p=u,t=!0):p!==c||o||_(),t){var r={progress:h,state:p,scrollDirection:i},s=p!=n,f=function(e){d.trigger(e,r)};s&&n!==c&&(f("enter"),f(n===a?"start":"end")),f("progress"),s&&p!==c&&(f(p===a?"start":"end"),f("leave"))}return d}return h};var E=function(){v={start:m+g.offset},l&&g.triggerElement&&(v.start-=l.info("size")*g.triggerHook),v.end=v.start+g.duration},R=function(e){if(r){var t="duration";F(t,r.call(d))&&!e&&(d.trigger("change",{what:t,newval:g[t]}),d.trigger("shift",{reason:t}))}},C=function(e){var n=0,i=g.triggerElement;if(l&&i){for(var r=l.info(),s=o.get.offset(r.container),a=r.vertical?"top":"left";i.parentNode.hasAttribute(t);)i=i.parentNode;var c=o.get.offset(i);r.isDocument||(s[a]-=l.scrollPos()),n=c[a]-s[a]}var u=n!=m;m=n,u&&!e&&d.trigger("shift",{reason:"triggerElementPosition"})},x=function(e){g.triggerHook>0&&d.trigger("shift",{reason:"containerResize"})},T=o.extend(i.validate,{duration:function(e){if(o.type.String(e)&&e.match(/^(\.|\d)*\d+%$/)){var t=parseFloat(e)/100;e=function(){return l?l.info("size")*t:0}}if(o.type.Function(e)){r=e;try{e=parseFloat(r())}catch(t){e=-1}}if(e=parseFloat(e),!o.type.Number(e)||e<0)throw r?(r=void 0,['Invalid return value of supplied function for option "duration":',e]):['Invalid value for option "duration":',e];return e}}),z=function(e){e=arguments.length?[e]:Object.keys(T),e.forEach(function(e,t){var n;if(T[e])try{n=T[e](g[e])}catch(t){n=f[e];var i=o.type.String(t)?[t]:t;o.type.Array(i)?(i[0]="ERROR: "+i[0],i.unshift(1),b.apply(this,i)):b(1,"ERROR: Problem executing validation callback for option '"+e+"':",t.message)}finally{g[e]=n}})},F=function(e,t){var n=!1,i=g[e];return g[e]!=t&&(g[e]=t,z(e),n=i!=g[e]),n},O=function(e){d[e]||(d[e]=function(t){return arguments.length?("duration"===e&&(r=void 0),F(e,t)&&(d.trigger("change",{what:e,newval:g[e]}),i.shifts.indexOf(e)>-1&&d.trigger("shift",{reason:e})),d):g[e]})};this.controller=function(){return l},this.state=function(){return p},this.scrollOffset=function(){return v.start},this.triggerPosition=function(){var e=g.offset;return l&&(e+=g.triggerElement?m:l.info("size")*d.triggerHook()),e};var P,A;d.on("shift.internal",function(e){var t="duration"===e.reason;(p===u&&t||p===c&&0===g.duration)&&_(),t&&L()}).on("progress.internal",function(e){_()}).on("add.internal",function(e){L()}).on("destroy.internal",function(e){d.removePin(e.reset)});var _=function(e){if(P&&l){var t=l.info(),n=A.spacer.firstChild;if(e||p!==c){var i={position:A.inFlow?"relative":"absolute",top:0,left:0},r=o.css(n,"position")!=i.position;A.pushFollowers?g.duration>0&&(p===u&&0===parseFloat(o.css(A.spacer,"padding-top"))?r=!0:p===a&&0===parseFloat(o.css(A.spacer,"padding-bottom"))&&(r=!0)):i[t.vertical?"top":"left"]=g.duration*h,o.css(n,i),r&&L()}else{"fixed"!=o.css(n,"position")&&(o.css(n,{position:"fixed"}),L());var s=o.get.offset(A.spacer,!0),f=g.reverse||0===g.duration?t.scrollPos-v.start:Math.round(h*g.duration*10)/10;s[t.vertical?"top":"left"]+=f,o.css(A.spacer.firstChild,{top:s.top,left:s.left})}}},L=function(){if(P&&l&&A.inFlow){var e=p===c,t=l.info("vertical"),n=A.spacer.firstChild,i=o.isMarginCollapseType(o.css(A.spacer,"display")),r={};A.relSize.width||A.relSize.autoFullWidth?e?o.css(P,{width:o.get.width(A.spacer)}):o.css(P,{width:"100%"}):(r["min-width"]=o.get.width(t?P:n,!0,!0),r.width=e?r["min-width"]:"auto"),A.relSize.height?e?o.css(P,{height:o.get.height(A.spacer)-(A.pushFollowers?g.duration:0)}):o.css(P,{height:"100%"}):(r["min-height"]=o.get.height(t?n:P,!0,!i),r.height=e?r["min-height"]:"auto"),A.pushFollowers&&(r["padding"+(t?"Top":"Left")]=g.duration*h,r["padding"+(t?"Bottom":"Right")]=g.duration*(1-h)),o.css(A.spacer,r)}},I=function(){l&&P&&p===c&&!l.info("isDocument")&&_()},N=function(){l&&P&&p===c&&((A.relSize.width||A.relSize.autoFullWidth)&&o.get.width(window)!=o.get.width(A.spacer.parentNode)||A.relSize.height&&o.get.height(window)!=o.get.height(A.spacer.parentNode))&&L()},k=function(e){l&&P&&p===c&&!l.info("isDocument")&&(e.preventDefault(),l._setScrollPos(l.info("scrollPos")-((e.wheelDelta||e[l.info("vertical")?"wheelDeltaY":"wheelDeltaX"])/3||30*-e.detail)))};this.setPin=function(e,n){var i={pushFollowers:!0,spacerClass:"scrollmagic-pin-spacer"};if(n=o.extend({},i,n),e=o.get.elements(e)[0],!e)return b(1,"ERROR calling method 'setPin()': Invalid pin element supplied."),d;if("fixed"===o.css(e,"position"))return b(1,"ERROR calling method 'setPin()': Pin does not work with elements that are positioned 'fixed'."),d;if(P){if(P===e)return d;d.removePin()}P=e;var r=P.parentNode.style.display,l=["top","left","bottom","right","margin","marginLeft","marginRight","marginTop","marginBottom"];P.parentNode.style.display="none";var s="absolute"!=o.css(P,"position"),a=o.css(P,l.concat(["display"])),c=o.css(P,["width","height"]);P.parentNode.style.display=r,!s&&n.pushFollowers&&(b(2,"WARNING: If the pinned element is positioned absolutely pushFollowers will be disabled."),n.pushFollowers=!1),window.setTimeout(function(){P&&0===g.duration&&n.pushFollowers&&b(2,"WARNING: pushFollowers =",!0,"has no effect, when scene duration is 0.")},0);var u=P.parentNode.insertBefore(document.createElement("div"),P),f=o.extend(a,{position:s?"relative":"absolute",boxSizing:"content-box",mozBoxSizing:"content-box",webkitBoxSizing:"content-box"});if(s||o.extend(f,o.css(P,["width","height"])),o.css(u,f),u.setAttribute(t,""),o.addClass(u,n.spacerClass),A={spacer:u,relSize:{width:"%"===c.width.slice(-1),height:"%"===c.height.slice(-1),autoFullWidth:"auto"===c.width&&s&&o.isMarginCollapseType(a.display)},pushFollowers:n.pushFollowers,inFlow:s},!P.___origStyle){P.___origStyle={};var p=P.style,h=l.concat(["width","height","position","boxSizing","mozBoxSizing","webkitBoxSizing"]);h.forEach(function(e){P.___origStyle[e]=p[e]||""})}return A.relSize.width&&o.css(u,{width:c.width}),A.relSize.height&&o.css(u,{height:c.height}),u.appendChild(P),o.css(P,{position:s?"relative":"absolute",margin:"auto",top:"auto",left:"auto",bottom:"auto",right:"auto"}),(A.relSize.width||A.relSize.autoFullWidth)&&o.css(P,{boxSizing:"border-box",mozBoxSizing:"border-box",webkitBoxSizing:"border-box"}),window.addEventListener("scroll",I),window.addEventListener("resize",I),window.addEventListener("resize",N),P.addEventListener("mousewheel",k),P.addEventListener("DOMMouseScroll",k),b(3,"added pin"),_(),d},this.removePin=function(e){if(P){if(p===c&&_(!0),e||!l){var n=A.spacer.firstChild;if(n.hasAttribute(t)){var i=A.spacer.style,r=["margin","marginLeft","marginRight","marginTop","marginBottom"];margins={},r.forEach(function(e){margins[e]=i[e]||""}),o.css(n,margins)}A.spacer.parentNode.insertBefore(n,A.spacer),A.spacer.parentNode.removeChild(A.spacer),P.parentNode.hasAttribute(t)||(o.css(P,P.___origStyle),delete P.___origStyle)}window.removeEventListener("scroll",I),window.removeEventListener("resize",I),window.removeEventListener("resize",N),P.removeEventListener("mousewheel",k),P.removeEventListener("DOMMouseScroll",k),P=void 0,b(3,"removed pin (reset: "+(e?"true":"false")+")")}return d};var D,M=[];return d.on("destroy.internal",function(e){d.removeClassToggle(e.reset)}),this.setClassToggle=function(e,t){var n=o.get.elements(e);return 0!==n.length&&o.type.String(t)?(M.length>0&&d.removeClassToggle(),D=t,M=n,d.on("enter.internal_class leave.internal_class",function(e){var t="enter"===e.type?o.addClass:o.removeClass;M.forEach(function(e,n){t(e,D)})}),d):(b(1,"ERROR calling method 'setClassToggle()': Invalid "+(0===n.length?"element":"classes")+" supplied."),d)},this.removeClassToggle=function(e){return e&&M.forEach(function(e,t){o.removeClass(e,D)}),d.off("start.internal_class end.internal_class"),D=void 0,M=[],d},y(),d};var i={defaults:{duration:0,offset:0,triggerElement:void 0,triggerHook:.5,reverse:!0,loglevel:2},validate:{offset:function(e){if(e=parseFloat(e),!o.type.Number(e))throw['Invalid value for option "offset":',e];return e},triggerElement:function(e){if(e=e||void 0){var t=o.get.elements(e)[0];if(!t)throw['Element defined in option "triggerElement" was not found:',e];e=t}return e},triggerHook:function(e){var t={onCenter:.5,onEnter:1,onLeave:0};if(o.type.Number(e))e=Math.max(0,Math.min(parseFloat(e),1));else{if(!(e in t))throw['Invalid value for option "triggerHook": ',e];e=t[e]}return e},reverse:function(e){return!!e},loglevel:function(e){if(e=parseInt(e),!o.type.Number(e)||e<0||e>3)throw['Invalid value for option "loglevel":',e];return e}},shifts:["duration","offset","triggerHook"]};e.Scene.addOption=function(t,n,o,r){t in i.defaults?e._util.log(1,"[static] ScrollMagic.Scene -> Cannot add Scene option '"+t+"', because it already exists."):(i.defaults[t]=n,i.validate[t]=o,r&&i.shifts.push(t))},e.Scene.extend=function(t){var n=this;e.Scene=function(){return n.apply(this,arguments),this.$super=o.extend({},this),t.apply(this,arguments)||this},o.extend(e.Scene,n),e.Scene.prototype=n.prototype,e.Scene.prototype.constructor=e.Scene},e.Event=function(e,t,n,i){i=i||{};for(var o in i)this[o]=i[o];return this.type=e,this.target=this.currentTarget=n,this.namespace=t||"",this.timeStamp=this.timestamp=Date.now(),this};var o=e._util=function(e){var t,n={},i=function(e){return parseFloat(e)||0},o=function(t){return t.currentStyle?t.currentStyle:e.getComputedStyle(t)},r=function(t,n,r,l){if(n=n===document?e:n,n===e)l=!1;else if(!p.DomElement(n))return 0;t=t.charAt(0).toUpperCase()+t.substr(1).toLowerCase();var s=(r?n["offset"+t]||n["outer"+t]:n["client"+t]||n["inner"+t])||0;if(r&&l){var a=o(n);s+="Height"===t?i(a.marginTop)+i(a.marginBottom):i(a.marginLeft)+i(a.marginRight)}return s},l=function(e){return e.replace(/^[^a-z]+([a-z])/g,"$1").replace(/-([a-z])/g,function(e){return e[1].toUpperCase()})};n.extend=function(e){for(e=e||{},t=1;t<arguments.length;t++)if(arguments[t])for(var n in arguments[t])arguments[t].hasOwnProperty(n)&&(e[n]=arguments[t][n]);return e},n.isMarginCollapseType=function(e){return["block","flex","list-item","table","-webkit-box"].indexOf(e)>-1};var s=0,a=["ms","moz","webkit","o"],c=e.requestAnimationFrame,u=e.cancelAnimationFrame;for(t=0;!c&&t<a.length;++t)c=e[a[t]+"RequestAnimationFrame"],u=e[a[t]+"CancelAnimationFrame"]||e[a[t]+"CancelRequestAnimationFrame"];c||(c=function(t){var n=(new Date).getTime(),i=Math.max(0,16-(n-s)),o=e.setTimeout(function(){t(n+i)},i);return s=n+i,o}),u||(u=function(t){e.clearTimeout(t)}),n.rAF=c.bind(e),n.cAF=u.bind(e);var f=["error","warn","log"],d=e.console||{};for(d.log=d.log||function(){},t=0;t<f.length;t++){var g=f[t];d[g]||(d[g]=d.log)}n.log=function(e){(e>f.length||e<=0)&&(e=f.length);var t=new Date,n=("0"+t.getHours()).slice(-2)+":"+("0"+t.getMinutes()).slice(-2)+":"+("0"+t.getSeconds()).slice(-2)+":"+("00"+t.getMilliseconds()).slice(-3),i=f[e-1],o=Array.prototype.splice.call(arguments,1),r=Function.prototype.bind.call(d[i],d);o.unshift(n),r.apply(d,o)};var p=n.type=function(e){return Object.prototype.toString.call(e).replace(/^\[object (.+)\]$/,"$1").toLowerCase()};p.String=function(e){return"string"===p(e)},p.Function=function(e){return"function"===p(e)},p.Array=function(e){return Array.isArray(e)},p.Number=function(e){return!p.Array(e)&&e-parseFloat(e)+1>=0},p.DomElement=function(e){return"object"==typeof HTMLElement?e instanceof HTMLElement:e&&"object"==typeof e&&null!==e&&1===e.nodeType&&"string"==typeof e.nodeName};var h=n.get={};return h.elements=function(t){var n=[];if(p.String(t))try{t=document.querySelectorAll(t)}catch(e){return n}if("nodelist"===p(t)||p.Array(t))for(var i=0,o=n.length=t.length;i<o;i++){var r=t[i];n[i]=p.DomElement(r)?r:h.elements(r)}else(p.DomElement(t)||t===document||t===e)&&(n=[t]);return n},h.scrollTop=function(t){return t&&"number"==typeof t.scrollTop?t.scrollTop:e.pageYOffset||0},h.scrollLeft=function(t){return t&&"number"==typeof t.scrollLeft?t.scrollLeft:e.pageXOffset||0},h.width=function(e,t,n){return r("width",e,t,n)},h.height=function(e,t,n){return r("height",e,t,n)},h.offset=function(e,t){var n={top:0,left:0};if(e&&e.getBoundingClientRect){var i=e.getBoundingClientRect();n.top=i.top,n.left=i.left,t||(n.top+=h.scrollTop(),n.left+=h.scrollLeft())}return n},n.addClass=function(e,t){t&&(e.classList?e.classList.add(t):e.className+=" "+t)},n.removeClass=function(e,t){t&&(e.classList?e.classList.remove(t):e.className=e.className.replace(new RegExp("(^|\\b)"+t.split(" ").join("|")+"(\\b|$)","gi")," "))},n.css=function(e,t){if(p.String(t))return o(e)[l(t)];if(p.Array(t)){var n={},i=o(e);return t.forEach(function(e,t){n[e]=i[l(e)]}),n}for(var r in t){var s=t[r];s==parseFloat(s)&&(s+="px"),e.style[l(r)]=s}},n}(window||{});return e.Scene.prototype.addIndicators=function(){return e._util.log(1,"(ScrollMagic.Scene) -> ERROR calling addIndicators() due to missing Plugin 'debug.addIndicators'. Please make sure to include plugins/debug.addIndicators.js"),this},e.Scene.prototype.removeIndicators=function(){return e._util.log(1,"(ScrollMagic.Scene) -> ERROR calling removeIndicators() due to missing Plugin 'debug.addIndicators'. Please make sure to include plugins/debug.addIndicators.js"),this},e.Scene.prototype.setTween=function(){return e._util.log(1,"(ScrollMagic.Scene) -> ERROR calling setTween() due to missing Plugin 'animation.gsap'. Please make sure to include plugins/animation.gsap.js"),this},e.Scene.prototype.removeTween=function(){return e._util.log(1,"(ScrollMagic.Scene) -> ERROR calling removeTween() due to missing Plugin 'animation.gsap'. Please make sure to include plugins/animation.gsap.js"),this},e.Scene.prototype.setVelocity=function(){return e._util.log(1,"(ScrollMagic.Scene) -> ERROR calling setVelocity() due to missing Plugin 'animation.velocity'. Please make sure to include plugins/animation.velocity.js"),this},e.Scene.prototype.removeVelocity=function(){return e._util.log(1,"(ScrollMagic.Scene) -> ERROR calling removeVelocity() due to missing Plugin 'animation.velocity'. Please make sure to include plugins/animation.velocity.js"),this},e}),function(e){function t(){e("[data-reveal]").each(function(){var t=e(this).attr("data-reveal");e(this).on("click",function(n){n.preventDefault(),e(t).toggleClass("opened"),e(this).toggleClass("active")})})}function n(){e(".quantity").find(".number_controlls").each(function(){e(this).on("click",function(){var t=e(this).parent().find('input[type="number"]'),n=parseInt(t.val()),i=0;if(e(this).hasClass("plus"))var o=n+1;else var o=n>i?n-1:n;t.val(o)})})}function i(){e(".awards").each(function(){var t=e(this).find(".carousel_list"),n=e(this).find(".carousel_content");t.owlCarousel({items:5,responsiveClass:!0,loop:!0,mouseDrag:!1,touchDrag:!1,pullDrag:!1,center:!0,responsive:{0:{items:1},600:{items:3,margin:15},1e3:{items:5}}}),n.owlCarousel({autoHeight:!0,items:1,loop:!0,center:!0,mouseDrag:!1,touchDrag:!1,pullDrag:!1});var i=e(this).find(".carousel_list"),o=e(this).find(".carousel_content");e(this).find(".next").click(function(){i.trigger("next.owl.carousel"),o.trigger("next.owl.carousel")}),e(this).find(".prev").click(function(){i.trigger("prev.owl.carousel"),o.trigger("prev.owl.carousel")})})}function o(){e(".switcher").each(function(){var t=e(this).find(".dragger");Draggable.create(t,{bounds:e(this),onDrag:function(e){console.log(e)}})})}var r={common:{init:function(){t(),n(),s.init(),i(),o()}}},l={fire:function(e,t,n){var i,o=r;t=void 0===t?"init":t,i=""!==e,i=i&&o[e],i=i&&"function"==typeof o[e][t],i&&o[e][t](n)},loadEvents:function(){l.fire("common"),e.each(document.body.className.replace(/-/g,"_").split(/\s+/),function(e,t){l.fire(t),l.fire(t,"finalize")}),l.fire("common","finalize")}};e(document).ready(l.loadEvents);var s={init:function(){this.styleSelect()},styleSelect:function(){var t=this;e("select").each(function(){var n=e(this),i=n.find("option:selected").text(),o='<div class="select"><span class="select-value">'+i+'</span><ul class="select-list">';n.find("option").each(function(){o+='<li class="select-list-item" data-value="'+e(this).val()+'">'+e(this).text()+"</li>"}),o+="</ul></div>",e(o).insertAfter(n),t.createSelect(n)})},createSelect:function(t){var n=t.attr("name");e(".select-list-item").each(function(){e(this).on("click",function(){var t=e(this).attr("data-value");e(this).text();window.location.href=window.location.origin+window.location.pathname+"?"+n+"="+t})})}}}(jQuery);
//# sourceMappingURL=main.js.map
