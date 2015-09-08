if (!Object.prototype.hasOwnProperty) {
	Object.prototype.hasOwnProperty = function(p) {
		return this.constructor.prototype[p] === undefined;
	}
}

if(!this.JSON)this.JSON={};
(function(){function l(b){return b<10?"0"+b:b}function o(b){p.lastIndex=0;return p.test(b)?'"'+b.replace(p,function(f){var c=r[f];return typeof c==="string"?c:"\\u"+("0000"+f.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+b+'"'}function m(b,f){var c,d,g,j,i=h,e,a=f[b];if(a&&typeof a==="object"&&typeof a.toJSON==="function")a=a.toJSON(b);if(typeof k==="function")a=k.call(f,b,a);switch(typeof a){case "string":return o(a);case "number":return isFinite(a)?String(a):"null";case "boolean":case "null":return String(a);
case "object":if(!a)return"null";h+=n;e=[];if(Object.prototype.toString.apply(a)==="[object Array]"){j=a.length;for(c=0;c<j;c+=1)e[c]=m(c,a)||"null";g=e.length===0?"[]":h?"[\n"+h+e.join(",\n"+h)+"\n"+i+"]":"["+e.join(",")+"]";h=i;return g}if(k&&typeof k==="object"){j=k.length;for(c=0;c<j;c+=1){d=k[c];if(typeof d==="string")if(g=m(d,a))e.push(o(d)+(h?": ":":")+g)}}else for(d in a)if(Object.hasOwnProperty.call(a,d))if(g=m(d,a))e.push(o(d)+(h?": ":":")+g);g=e.length===0?"{}":h?"{\n"+h+e.join(",\n"+h)+
"\n"+i+"}":"{"+e.join(",")+"}";h=i;return g}}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+l(this.getUTCMonth()+1)+"-"+l(this.getUTCDate())+"T"+l(this.getUTCHours())+":"+l(this.getUTCMinutes())+":"+l(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()}}var q=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
p=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,h,n,r={"\u0008":"\\b","\t":"\\t","\n":"\\n","\u000c":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},k;if(typeof JSON.stringify!=="function")JSON.stringify=function(b,f,c){var d;n=h="";if(typeof c==="number")for(d=0;d<c;d+=1)n+=" ";else if(typeof c==="string")n=c;if((k=f)&&typeof f!=="function"&&(typeof f!=="object"||typeof f.length!=="number"))throw Error("JSON.stringify");return m("",
{"":b})};if(typeof JSON.parse!=="function")JSON.parse=function(b,f){function c(g,j){var i,e,a=g[j];if(a&&typeof a==="object")for(i in a)if(Object.hasOwnProperty.call(a,i)){e=c(a,i);if(e!==undefined)a[i]=e;else delete a[i]}return f.call(g,j,a)}var d;b=String(b);q.lastIndex=0;if(q.test(b))b=b.replace(q,function(g){return"\\u"+("0000"+g.charCodeAt(0).toString(16)).slice(-4)});if(/^[\],:{}\s]*$/.test(b.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){d=eval("("+b+")");return typeof f==="function"?c({"":d},""):d}throw new SyntaxError("JSON.parse");}})();

// reload instrumentation

var __r = -1;
for(var i=0, ca = document.cookie.split(";") ;i < ca.length;i++) {
	var c = ca[i];
	while (c.charAt(0)==' ') c = c.substring(1,c.length);
	if (c.indexOf("r=") == 0) __r = c.substring(2,c.length);
}

document.cookie = "r="+(parseInt(__r)+1)+"; expires=Sun, 12 Jan 2031 18:22:31 GMT; path=/";


// Disable image toolbar for IE6
if (/msie|MSIE 6/.test(navigator.userAgent) || true) {
	document.write('<META HTTP-EQUIV="imagetoolbar" CONTENT="no">');
}

var ____loadingSlide;
if (document.createElement &&
	(____loadingSlide = document.createElement('div'))) {
		
	____loadingSlide.id = "____loading_slide";
	____loadingSlide.className = "slide";
	____loadingSlide.style.display = "none";
	____loadingSlide.style.backgroundColor = "white";
	____loadingSlide.style.textAlign = "center";
	____loadingSlide.innerHTML = "<div style='padding-top: 20px; font-weight: bold'>Working...</div>";
	setTimeout(function() { document.body.appendChild(____loadingSlide); }, 1000);
	window.onbeforeunload = (typeof showSlide != "undefined") ? function() {
			showSlide('____loading_slide');
	} : null;
		
}

// base64 stuff
/* Copyright (C) 1999 Masanao Izumo <iz@onicos.co.jp>
 * Version: 1.0
 * LastModified: Dec 25 1999
 * This library is free.  You can redistribute it and/or modify it.
 */

/*
 * Interfaces:
 * b64 = base64encode(data);
 * data = base64decode(b64);
 */


var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
var base64DecodeChars = new Array(
    -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
    -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
    -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63,
    52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1,
    -1,  0,  1,  2,  3,  4,  5,  6,  7,  8,  9, 10, 11, 12, 13, 14,
    15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1,
    -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
    41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1);

function urlsafedecode(s) {
	s = s.replace(/\!/g,"/").replace(/-/g,"+").replace(/\./g,"=");
	return base64decode(s);
}

function getPastResults(test) {
	return RawDeflate.inflate(urlsafedecode(readCookie("t."+test)));
}

function base64encode(str) {
    var out, i, len;
    var c1, c2, c3;

    len = str.length;
    i = 0;
    out = "";
    while(i < len) {
	c1 = str.charCodeAt(i++) & 0xff;
	if(i == len)
	{
	    out += base64EncodeChars.charAt(c1 >> 2);
	    out += base64EncodeChars.charAt((c1 & 0x3) << 4);
	    out += "==";
	    break;
	}
	c2 = str.charCodeAt(i++);
	if(i == len)
	{
	    out += base64EncodeChars.charAt(c1 >> 2);
	    out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
	    out += base64EncodeChars.charAt((c2 & 0xF) << 2);
	    out += "=";
	    break;
	}
	c3 = str.charCodeAt(i++);
	out += base64EncodeChars.charAt(c1 >> 2);
	out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
	out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >>6));
	out += base64EncodeChars.charAt(c3 & 0x3F);
    }
    return out;
}

function base64decode(str) {
    var c1, c2, c3, c4;
    var i, len, out;

    len = str.length;
    i = 0;
    out = "";
    while(i < len) {
	/* c1 */
	do {
	    c1 = base64DecodeChars[str.charCodeAt(i++) & 0xff];
	} while(i < len && c1 == -1);
	if(c1 == -1)
	    break;

	/* c2 */
	do {
	    c2 = base64DecodeChars[str.charCodeAt(i++) & 0xff];
	} while(i < len && c2 == -1);
	if(c2 == -1)
	    break;

	out += String.fromCharCode((c1 << 2) | ((c2 & 0x30) >> 4));

	/* c3 */
	do {
	    c3 = str.charCodeAt(i++) & 0xff;
	    if(c3 == 61)
		return out;
	    c3 = base64DecodeChars[c3];
	} while(i < len && c3 == -1);
	if(c3 == -1)
	    break;

	out += String.fromCharCode(((c2 & 0XF) << 4) | ((c3 & 0x3C) >> 2));

	/* c4 */
	do {
	    c4 = str.charCodeAt(i++) & 0xff;
	    if(c4 == 61)
		return out;
	    c4 = base64DecodeChars[c4];
	} while(i < len && c4 == -1);
	if(c4 == -1)
	    break;
	out += String.fromCharCode(((c3 & 0x03) << 6) | c4);
    }
    return out;
}

(function(){var A,u,O=null,U,P,H,I,B,M,q,J,C,S,v,F,Q,T,ba=Array(0,1,3,7,15,31,63,127,255,511,1023,2047,4095,8191,16383,32767,65535),V=Array(3,4,5,6,7,8,9,10,11,13,15,17,19,23,27,31,35,43,51,59,67,83,99,115,131,163,195,227,258,0,0),W=Array(0,0,0,0,0,0,0,0,1,1,1,1,2,2,2,2,3,3,3,3,4,4,4,4,5,5,5,5,0,99,99),X=Array(1,2,3,4,5,7,9,13,17,25,33,49,65,97,129,193,257,385,513,769,1025,1537,2049,3073,4097,6145,8193,12289,16385,24577),Y=Array(0,0,0,0,1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8,9,9,10,10,11,11,12,12,13,13),
Z=Array(16,17,18,0,8,7,9,6,10,5,11,4,12,3,13,2,14,1,15),$=function(){this.list=this.next=null},aa=function(){this.n=this.b=this.e=0;this.t=null},N=function(g,h,i,b,a,k){this.BMAX=16;this.N_MAX=288;this.status=0;this.root=null;this.m=0;var l=Array(this.BMAX+1),j,c,x,f,d,e,y,z=Array(this.BMAX+1),w,t,r,p=new aa,G=Array(this.BMAX);f=Array(this.N_MAX);var s,D=Array(this.BMAX+1),K,E,L;L=this.root=null;for(d=0;d<l.length;d++)l[d]=0;for(d=0;d<z.length;d++)z[d]=0;for(d=0;d<G.length;d++)G[d]=null;for(d=0;d<
f.length;d++)f[d]=0;for(d=0;d<D.length;d++)D[d]=0;j=h>256?g[256]:this.BMAX;w=g;t=0;d=h;do{l[w[t]]++;t++}while(--d>0);if(l[0]==h){this.root=null;this.status=this.m=0}else{for(e=1;e<=this.BMAX;e++)if(l[e]!=0)break;y=e;if(k<e)k=e;for(d=this.BMAX;d!=0;d--)if(l[d]!=0)break;x=d;if(k>d)k=d;for(K=1<<e;e<d;e++,K<<=1)if((K-=l[e])<0){this.status=2;this.m=k;return}if((K-=l[d])<0){this.status=2;this.m=k}else{l[d]+=K;D[1]=e=0;w=l;t=1;for(r=2;--d>0;)D[r++]=e+=w[t++];w=g;d=t=0;do if((e=w[t++])!=0)f[D[e]++]=d;while(++d<
h);h=D[x];D[0]=d=0;w=f;t=0;f=-1;s=z[0]=0;r=null;for(E=0;y<=x;y++)for(g=l[y];g-- >0;){for(;y>s+z[1+f];){s+=z[1+f];f++;E=(E=x-s)>k?k:E;if((c=1<<(e=y-s))>g+1){c-=g+1;for(r=y;++e<E;){if((c<<=1)<=l[++r])break;c-=l[r]}}if(s+e>j&&s<j)e=j-s;E=1<<e;z[1+f]=e;r=Array(E);for(c=0;c<E;c++)r[c]=new aa;L=L==null?this.root=new $:L.next=new $;L.next=null;L.list=r;G[f]=r;if(f>0){D[f]=d;p.b=z[f];p.e=16+e;p.t=r;e=(d&(1<<s)-1)>>s-z[f];G[f-1][e].e=p.e;G[f-1][e].b=p.b;G[f-1][e].n=p.n;G[f-1][e].t=p.t}}p.b=y-s;if(t>=h)p.e=
99;else if(w[t]<i){p.e=w[t]<256?16:15;p.n=w[t++]}else{p.e=a[w[t]-i];p.n=b[w[t++]-i]}c=1<<y-s;for(e=d>>s;e<E;e+=c){r[e].e=p.e;r[e].b=p.b;r[e].n=p.n;r[e].t=p.t}for(e=1<<y-1;(d&e)!=0;e>>=1)d^=e;for(d^=e;(d&(1<<s)-1)!=D[f];){s-=z[f];f--}}this.m=z[1];this.status=K!=0&&x!=1?1:0}}},n=function(g){for(;I<g;){var h=H,i;i=Q.length==T?-1:Q.charCodeAt(T++)&255;H=h|i<<I;I+=8}},o=function(g){return H&ba[g]},m=function(g){H>>=g;I-=g},R=function(g,h,i){var b,a,k;if(i==0)return 0;for(k=0;;){n(v);a=C.list[o(v)];for(b=
a.e;b>16;){if(b==99)return-1;m(a.b);b-=16;n(b);a=a.t[o(b)];b=a.e}m(a.b);if(b==16){u&=32767;g[h+k++]=A[u++]=a.n}else{if(b==15)break;n(b);q=a.n+o(b);m(b);n(F);a=S.list[o(F)];for(b=a.e;b>16;){if(b==99)return-1;m(a.b);b-=16;n(b);a=a.t[o(b)];b=a.e}m(a.b);n(b);J=u-a.n-o(b);for(m(b);q>0&&k<i;){q--;J&=32767;u&=32767;g[h+k++]=A[u++]=A[J++]}}if(k==i)return i}B=-1;return k},ca=function(g,h,i){var b,a,k,l,j,c,x,f=Array(316);for(b=0;b<f.length;b++)f[b]=0;n(5);c=257+o(5);m(5);n(5);x=1+o(5);m(5);n(4);b=4+o(4);m(4);
if(c>286||x>30)return-1;for(a=0;a<b;a++){n(3);f[Z[a]]=o(3);m(3)}for(;a<19;a++)f[Z[a]]=0;v=7;a=new N(f,19,19,null,null,v);if(a.status!=0)return-1;C=a.root;v=a.m;l=c+x;for(b=k=0;b<l;){n(v);j=C.list[o(v)];a=j.b;m(a);a=j.n;if(a<16)f[b++]=k=a;else if(a==16){n(2);a=3+o(2);m(2);if(b+a>l)return-1;for(;a-- >0;)f[b++]=k}else{if(a==17){n(3);a=3+o(3);m(3)}else{n(7);a=11+o(7);m(7)}if(b+a>l)return-1;for(;a-- >0;)f[b++]=0;k=0}}v=9;a=new N(f,c,257,V,W,v);if(v==0)a.status=1;if(a.status!=0)return-1;C=a.root;v=a.m;
for(b=0;b<x;b++)f[b]=f[b+c];F=6;a=new N(f,x,0,X,Y,F);S=a.root;F=a.m;if(F==0&&c>257)return-1;if(a.status!=0)return-1;return R(g,h,i)},da=function(g,h,i){var b,a;for(b=0;b<i;){if(M&&B==-1)return b;if(q>0){if(B!=0)for(;q>0&&b<i;){q--;J&=32767;u&=32767;g[h+b++]=A[u++]=A[J++]}else{for(;q>0&&b<i;){q--;u&=32767;n(8);g[h+b++]=A[u++]=o(8);m(8)}if(q==0)B=-1}if(b==i)return b}if(B==-1){if(M)break;n(1);if(o(1)!=0)M=true;m(1);n(2);B=o(2);m(2);C=null;q=0}switch(B){case 0:a=g;var k=h+b,l=i-b,j=void 0;j=I&7;m(j);
n(16);j=o(16);m(16);n(16);if(j!=(~H&65535))a=-1;else{m(16);q=j;for(j=0;q>0&&j<l;){q--;u&=32767;n(8);a[k+j++]=A[u++]=o(8);m(8)}if(q==0)B=-1;a=j}break;case 1:if(C!=null)a=R(g,h+b,i-b);else a:{a=g;k=h+b;l=i-b;if(O==null){var c=void 0;j=Array(288);c=void 0;for(c=0;c<144;c++)j[c]=8;for(;c<256;c++)j[c]=9;for(;c<280;c++)j[c]=7;for(;c<288;c++)j[c]=8;P=7;c=new N(j,288,257,V,W,P);if(c.status!=0){alert("HufBuild error: "+c.status);a=-1;break a}O=c.root;P=c.m;for(c=0;c<30;c++)j[c]=5;zip_fixed_bd=5;c=new N(j,
30,0,X,Y,zip_fixed_bd);if(c.status>1){O=null;alert("HufBuild error: "+c.status);a=-1;break a}U=c.root;zip_fixed_bd=c.m}C=O;S=U;v=P;F=zip_fixed_bd;a=R(a,k,l)}a=a;break;case 2:a=C!=null?R(g,h+b,i-b):ca(g,h+b,i-b);break;default:a=-1;break}if(a==-1){if(M)return 0;return-1}b+=a}return b};window.RawDeflate||(RawDeflate={});RawDeflate.inflate=function(g){var h;if(A==null)A=Array(65536);I=H=u=0;B=-1;M=false;q=J=0;C=null;Q=g;T=0;for(var i=Array(1024),b=[];(g=da(i,0,i.length))>0;){var a=Array(g);for(h=0;h<
g;h++)a[h]=String.fromCharCode(i[h]);b[b.length]=a.join("")}Q=null;return b.join("")}})();