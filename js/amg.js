(function(){var K="ad.amgdgt.com";var W="ads";var S=false;var e="amgdgt_";var c=window;var k=document;var B="";function X(d){return c[e+d]||null}function l(d,m){c[e+d]=m;O("set "+d+"="+m)}function A(d){try{delete c[e+d]}catch(m){c[e+d]=null}}function g(d){if(encodeURIComponent){return encodeURIComponent(d)}else{return escape(d)}}function a(d){if(decodeURIComponent){return decodeURIComponent(d)}else{return unescape(d)}}function Y(m){var q="_unencoded";var n="_encoded";var p=X(m+q);if(p){A(m+q);var o=g(p);l(m,o)}var d=X(m+n);if(d){A(m+n);o=d;l(m,o)}}function H(){var d=X("scheme");if(d){return d}else{if("https:"==document.location.protocol){return"https"}else{return"http"}}}function Q(){var m=(k.domain).split(".");var d=m.length;return(d>1?("."+m[d-2]+"."+m[d-1]):(k.domain))}function J(n,o,d){o=g(o);var m=new Date();if(d){m.setMinutes(m.getMinutes()+Number(d))}else{m.setMonth(m.getMonth()+6)}k.cookie=n+"="+o+";domain="+Q()+";path=/;expires="+m.toGMTString()}function F(n){var m=k.cookie;var d=m.indexOf(" "+n+"=");if(d==-1){d=m.indexOf(n+"=")}if(d==-1){return null}d=m.indexOf("=",d)+1;var o=m.indexOf(";",d);if(o==-1){o=m.length}return a(m.substring(d,o))}function L(){var d="cookieTest";var m="OK";J(d,m,1);return(F(d)==m)}function C(d,m){if(d>0&&m>0){if(X("sa")||X("ca")||X("step")||X("cu")||X("v")||X("oid")){G("conversion vars, fcapping OFF");return false}else{if(L()){G("frequency="+d+" period="+m+" minutes, fcapping ON");return true}else{G("cookies disabled, fcapping OFF");return false}}}else{return false}}function P(n){var t=Number(X("frequency"));var s=Number(X("period"));A("frequency");A("period");if(!C(t,s)){return true}var d=0;var o=F(n);if(o){var r=o.split(".");var q=Number(r[0]);d=Number(r[1]);var p=d-new Date().getTime();if(p>0){q=q+1;O("current fcapping count="+q);if(q>t){G("fcap reached");return false}else{J(n,String(q)+"."+String(d),2*s);return true}}}var m=new Date();m.setMinutes(m.getMinutes()+s);d=m.getTime();J(n,"1."+String(d),2*s);return true}function f(d){return(d!=null&&typeof d==="object"&&typeof d.length==="number"&&d.length>0)}function Z(m){if(m==null||typeof m!=="string"||m.length==0){return false}var d=/[a-zA-Z0-9 _-]+=[a-zA-Z0-9 _-]+/;return(d.exec(m)==m)}function h(d){return(d!=null&&typeof d==="string"&&typeof d.length==="number"&&d.length>0)}function I(m){if(!h(m)){return null}var d=m.replace(/^\s+/,"").replace(/\s+$/,"");if(h(d)){return d}else{return null}}function U(){var t=[];var u=X("kw");if(h(u)){u=[u]}if(f(u)){for(var o=0;o<u.length;o++){var r=I(u[o]);if(r){var n="kw="+r;if(Z(n)){t.push(n)}}}}var d=X("kvp");if(h(d)){d=[d]}if(f(d)){for(var o=0;o<d.length;o++){var n=I(d[o]);if(n){if(Z(n)){t.push(n)}}}}var s=(c.wlrcmd||c.WLRCMD||null);if(h(s)){var v=s.split(";");for(var o=0;o<v.length;o++){var n=I(v[o]);if(n){if(Z(n)){t.push(n)}}}}if(c.amgdgt&&f(c.amgdgt.kvp)){var w=c.amgdgt.kvp;for(var o=0;o<w.length;o++){var n=I(w[o]);if(n){if(Z(n)){t.push(n)}}}}if(t.length>0){var m=t.join(";");O(m);var p="kvp";var q=g(m);O("param "+p+"="+q);B+="&"+p+"="+q}}function N(d){Y(d);var m=X(d);if(d&&m){O("param "+d+"="+m);B+="&"+d+"="+m}}function R(){N("g");N("yb");N("z");N("xuid");N("info");A("info");var d=Math.random()*100000000000000000;l("rnd",d);N("rnd")}function V(d){var m=d+"count";if(X(m)){l(m,X(m)+1)}else{l(m,1)}}function i(){var n=X("p");var d=X("pl");var m=X("r");if(m){if(!P(e+"R"+m)){return false}}else{if(n&&d){if(!P(e+"P"+n+"PL"+d)){return false}}}if((n&&d)||m){N("p");N("pl");N("r");R();N("optout");N("nmv");N("nrsz");N("vid");A("vid");N("vnid");A("vnid");U();N("pce");A("pce");N("clkurl");A("clkurl");return true}else{j("missing "+e+"p or "+e+"pl");return false}}function M(){var d=X("ctr");if(d){if(!P(e+"C"+d)){return false}N("ctr");N("sa");A("sa");N("ca");A("ca");N("step");A("step");N("cu");A("cu");N("v");A("v");N("oid");A("oid");R();l("container",true);return true}else{j("missing "+e+"ctr");return false}}function T(){var d=X("t");if(d){B="t="+d+"&f=j";if(d=="i"){V(d);return i()}else{if(d=="x"){V(d);return M()}}}j("invalid "+e+"t :"+d);return false}function j(d){E("ERROR",d)}function G(d){E("INFO ",d)}function O(d){if(S){E("DEBUG",d)}}function E(m,d){if(typeof (c.console)=="object"&&c.console.firebug){c.console.log(m+": "+d)}}function b(){var n=X("container_urls");if(n&&n instanceof Array){if(n.length>0){try{var o=new Array();for(var d=0;d<n.length;d++){o[d]=new Image();o[d].src=n[d];G("fired: "+n[d])}}catch(m){j("error in firing:"+m)}}else{G("no 3rd party pixels to be fired")}}else{j("invalid response")}}function D(){if(X("container_urls")&&X("container")){var o=new b();A("container_urls");A("container")}else{var n=X("test_hostname");var d=X("test_webapp_name");if(n){K=n}if(d){W=d}if(T()){var m=H()+"://"+K+"/"+W+"/?"+B;G("request url: "+m);k.write('<script type="text/javascript" src="'+m+'"><\/script>')}}}D()})();
