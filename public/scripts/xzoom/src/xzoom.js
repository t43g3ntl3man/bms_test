function detect_old_ie(){var o;return!!/MSIE (\d+\.\d+);/.test(navigator.userAgent)&&(!(9<=(o=new Number(RegExp.$1)))&&(8<=o||(7<=o||(6<=o||(5<=o||void 0)))))}window.requestAnimFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(o){window.setTimeout(o,20)},function(Mo){function n(s,o){this.xzoom=!0;var i,a,p,h,f,u,n,l,t,e,v,m,g,w,x,b,d,z,y,C,k,r,O,M,A,S,H,W,F,I,T,X,Y,R,q,E,L,D,Z,_,j,N,Q,$,B,G,J,K,P,U,c=this,V={},oo=(new Array,new Array),to=0,eo=0,io=0,so=0,no=0,ao=0,po=0,lo=0,ro=0,co=0,ho=0,fo=0,uo=0,vo=detect_old_ie(),mo=/MSIE (\d+\.\d+);/.test(navigator.userAgent),go="";function wo(){var o=document.documentElement;return{left:(window.pageXOffset||o.scrollLeft)-(o.clientLeft||0),top:(window.pageYOffset||o.scrollTop)-(o.clientTop||0)}}function xo(){var o;"circle"==c.options.lensShape&&"lens"==c.options.position&&(o=((M=A=Math.max(M,A))+2*Math.max(F,W))/2,r.css({"-moz-border-radius":o,"-webkit-border-radius":o,"border-radius":o}))}function bo(o,t,e,i){"lens"==c.options.position?(k.css({top:-(t-n)*T+A/2,left:-(o-l)*I+M/2}),c.options.bg&&(r.css({"background-image":"url("+k.attr("src")+")","background-repeat":"no-repeat","background-position":-(o-l)*I+M/2+"px "+(-(t-n)*T+A/2)+"px"}),e&&i&&r.css({"background-size":e+"px "+i+"px"}))):k.css({top:-H*T,left:-S*I})}function zo(o,t){var e,i;1<(io=io<-1?-1:io)&&(io=1),X<Y?i=(e=h*(X-(X-1)*io))/R:e=(i=f*(Y-(Y-1)*io))*R,L?(so=o,no=t,ao=e,po=i):(lo=ao=e,ro=po=i,M=h/(I=e/a),A=f/(T=i/p),xo(),Co(o,t),k.width(e),k.height(i),r.width(M),r.height(A),r.css({top:H-F,left:S-W}),O.css({top:-H,left:-S}),bo(o,t,e,i))}function yo(){var o=co,t=ho,e=fo,i=uo,s=lo,n=ro;o+=(so-o)/c.options.smoothLensMove,t+=(no-t)/c.options.smoothLensMove,e+=(so-e)/c.options.smoothZoomMove,i+=(no-i)/c.options.smoothZoomMove,s+=(ao-s)/c.options.smoothScale,n+=(po-n)/c.options.smoothScale,M=h/(I=s/a),A=f/(T=n/p),xo(),Co(o,t),k.width(s),k.height(n),r.width(M),r.height(A),r.css({top:H-F,left:S-W}),O.css({top:-H,left:-S}),Co(e,i),bo(o,t,s,n),co=o,ho=t,fo=e,uo=i,lo=s,ro=n,L&&requestAnimFrame(yo)}function Co(o,t){S=(o-=l)-M/2,H=(t-=n)-A/2,"lens"!=c.options.position&&c.options.lensCollision&&(S<0&&(S=0),M<=a&&a-M<S&&(S=a-M),a<M&&(S=a/2-M/2),H<0&&(H=0),A<=p&&p-A<H&&(H=p-A),p<A&&(H=p/2-A/2))}function ko(){void 0!==x&&x.remove(),void 0!==d&&d.remove(),void 0!==N&&N.remove()}function Oo(o){var t=o.attr("title"),o=o.attr("xtitle");return o||t||""}this.adaptive=function(){0!=B&&0!=G||(s.css("width",""),s.css("height",""),B=s.width(),G=s.height()),ko(),Q=Mo(window).width(),$=Mo(window).height(),J=s.width(),K=s.height(),B<J&&(J=B),G<K&&(K=G),(Q<B||$<G?!0:!1)?s.width("100%"):0!=B&&s.width(B),"fullscreen"!=P&&(!function(){var o=s.offset();h="auto"==c.options.zoomWidth?J:c.options.zoomWidth;f="auto"==c.options.zoomHeight?K:c.options.zoomHeight;"#"==c.options.position.substr(0,1)?V=Mo(c.options.position):V.length=0;if(0!=V.length)return!0;switch(P){case"lens":case"inside":return!0;case"top":n=o.top,l=o.left,t=n-f,e=l;break;case"left":n=o.top,l=o.left,t=n,e=l-h;break;case"bottom":n=o.top,l=o.left,t=n+K,e=l;break;default:n=o.top,l=o.left,t=n,e=l+J}return!(Q<e+h||e<0)}()?c.options.position=c.options.mposition:c.options.position=P),c.options.lensReverse||(U=c.options.adaptiveReverse&&c.options.position==c.options.mposition)},this.xscroll=function(o){var t,e;g=o.pageX||o.originalEvent.pageX,w=o.pageY||o.originalEvent.pageY,o.preventDefault(),o.xscale?(io=o.xscale,zo(g,w)):(o=-o.originalEvent.detail||o.originalEvent.wheelDelta||o.xdelta,t=g,e=w,vo&&(t=D,e=Z),io+=o=0<o?-.05:.05,zo(t,e))},this.openzoom=function(o){switch(g=o.pageX,w=o.pageY,c.options.adaptive&&c.adaptive(),io=c.options.defaultScale,L=!1,x=Mo("<div></div>"),""!=c.options.sourceClass&&x.addClass(c.options.sourceClass),x.css("position","absolute"),z=Mo("<div></div>"),""!=c.options.loadingClass&&z.addClass(c.options.loadingClass),z.css("position","absolute"),b=Mo('<div style="position: absolute; top: 0; left: 0;"></div>'),x.append(z),d=Mo("<div></div>"),""!=c.options.zoomClass&&"fullscreen"!=c.options.position&&d.addClass(c.options.zoomClass),d.css({position:"absolute",overflow:"hidden",opacity:1}),c.options.title&&""!=go&&(N=Mo("<div></div>"),j=Mo("<div></div>"),N.css({position:"absolute",opacity:1}),c.options.titleClass&&j.addClass(c.options.titleClass),j.html("<span>"+go+"</span>"),N.append(j),c.options.fadeIn&&N.css({opacity:0})),r=Mo("<div></div>"),""!=c.options.lensClass&&r.addClass(c.options.lensClass),r.css({position:"absolute",overflow:"hidden"}),c.options.lens&&((lenstint=Mo("<div></div>")).css({position:"absolute",background:c.options.lens,opacity:c.options.lensOpacity,width:"100%",height:"100%",top:0,left:0,"z-index":9999}),r.append(lenstint)),p="fullscreen"==c.options.position?(a=Mo(window).width(),Mo(window).height()):(a=s.width(),s.height()),z.css({top:p/2-z.height()/2,left:a/2-z.width()/2}),(u=c.options.rootOutput||"fullscreen"==c.options.position?s.offset():s.position()).top=Math.round(u.top),u.left=Math.round(u.left),c.options.position){case"fullscreen":n=wo().top,l=wo().left,e=t=0;break;case"inside":n=u.top,l=u.left,e=t=0;break;case"top":n=u.top,l=u.left,t=n-f,e=l;break;case"left":n=u.top,l=u.left,t=n,e=l-h;break;case"bottom":n=u.top,l=u.left,t=n+p,e=l;break;default:n=u.top,l=u.left,t=n,e=l+a}n-=x.outerHeight()/2,l-=x.outerWidth()/2,"#"==c.options.position.substr(0,1)?V=Mo(c.options.position):V.length=0,0==V.length&&"inside"!=c.options.position&&"fullscreen"!=c.options.position?(c.options.adaptive&&B&&G||(B=a,G=p),h="auto"==c.options.zoomWidth?a:c.options.zoomWidth,f="auto"==c.options.zoomHeight?p:c.options.zoomHeight,t+=c.options.Yoffset,e+=c.options.Xoffset,d.css({width:h+"px",height:f+"px",top:t,left:e}),"lens"!=c.options.position&&i.append(d)):"inside"==c.options.position||"fullscreen"==c.options.position?(h=a,f=p,d.css({width:h+"px",height:f+"px"}),x.append(d)):(h=V.width(),f=V.height(),c.options.rootOutput?(t=V.offset().top,e=V.offset().left,i.append(d)):(t=V.position().top,e=V.position().left,V.parent().append(d)),t+=(V.outerHeight()-f-d.outerHeight())/2,e+=(V.outerWidth()-h-d.outerWidth())/2,d.css({width:h+"px",height:f+"px",top:t,left:e})),c.options.title&&""!=go&&("inside"==c.options.position||"lens"==c.options.position||"fullscreen"==c.options.position?(v=t,m=e,x.append(N)):(v=t+(d.outerHeight()-f)/2,m=e+(d.outerWidth()-h)/2,i.append(N)),N.css({width:h+"px",height:f+"px",top:v,left:m})),x.css({width:a+"px",height:p+"px",top:n,left:l}),b.css({width:a+"px",height:p+"px"}),c.options.tint&&"inside"!=c.options.position&&"fullscreen"!=c.options.position?b.css("background-color",c.options.tint):vo&&b.css({"background-image":"url("+s.attr("src")+")","background-color":"#fff"}),j=new Image;o="";switch(mo&&(o="?r="+(new Date).getTime()),j.src=s.attr("xoriginal")+o,(k=Mo(j)).css("position","absolute"),(j=new Image).src=s.attr("src"),(O=Mo(j)).css("position","absolute"),O.width(a),c.options.position){case"fullscreen":case"inside":d.append(k);break;case"lens":r.append(k),c.options.bg&&k.css({display:"none"});break;default:d.append(k),r.append(O)}switch("inside"!=c.options.position&&"fullscreen"!=c.options.position?((c.options.tint||vo)&&x.append(b),c.options.fadeIn&&(b.css({opacity:0}),r.css({opacity:0}),d.css({opacity:0}))):c.options.fadeIn&&d.css({opacity:0}),i.append(x),c.eventmove(x),c.eventleave(x),c.options.position){case"inside":t-=(d.outerHeight()-d.height())/2,e-=(d.outerWidth()-d.width())/2;break;case"top":t-=d.outerHeight()-d.height(),e-=(d.outerWidth()-d.width())/2;break;case"left":t-=(d.outerHeight()-d.height())/2,e-=d.outerWidth()-d.width();break;case"bottom":e-=(d.outerWidth()-d.width())/2;break;case"right":t-=(d.outerHeight()-d.height())/2}d.css({top:t,left:e}),k.xon("load",function(o){if(z.remove(),!c.options.openOnSmall&&(k.width()<h||k.height()<f))return c.closezoom(),o.preventDefault(),!1;c.options.scroll&&c.eventscroll(x),"inside"!=c.options.position&&"fullscreen"!=c.options.position?(x.append(r),c.options.fadeIn?(b.fadeTo(300,c.options.tintOpacity),r.fadeTo(300,1),d.fadeTo(300,1)):(b.css({opacity:c.options.tintOpacity}),r.css({opacity:1}),d.css({opacity:1}))):c.options.fadeIn?d.fadeTo(300,1):d.css({opacity:1}),c.options.title&&""!=go&&(c.options.fadeIn?N.fadeTo(300,1):N.css({opacity:1})),q=k.width(),E=k.height(),c.options.adaptive&&(a<B||p<G)&&(O.width(a),O.height(p),q*=a/B,E*=p/G,k.width(q),k.height(E)),lo=ao=q,ro=po=E,R=q/E,X=q/h,Y=E/f;for(var t,e=["padding-","border-"],i=F=W=0;i<e.length;i++)t=parseFloat(r.css(e[i]+"top-width")),F+=t!=t?0:t,t=parseFloat(r.css(e[i]+"bottom-width")),F+=t!=t?0:t,t=parseFloat(r.css(e[i]+"left-width")),W+=t!=t?0:t,t=parseFloat(r.css(e[i]+"right-width")),W+=t!=t?0:t;F/=2,W/=2,fo=co=so=g,uo=ho=no=w,zo(g,w),c.options.smooth&&(L=!0,requestAnimFrame(yo)),c.eventclick(x)})},this.movezoom=function(o){g=o.pageX,w=o.pageY,vo&&(D=g,Z=w);var t=g-l,e=w-n;U&&(o.pageX-=2*(t-a/2),o.pageY-=2*(e-p/2)),(t<0||a<t||e<0||p<e)&&x.trigger("mouseleave"),c.options.smooth?(so=o.pageX,no=o.pageY):(xo(),Co(o.pageX,o.pageY),r.css({top:H-F,left:S-W}),O.css({top:-H,left:-S}),bo(o.pageX,o.pageY,0,0))},this.eventdefault=function(){c.eventopen=function(o){o.xon("mouseenter",c.openzoom)},c.eventleave=function(o){o.xon("mouseleave",c.closezoom)},c.eventmove=function(o){o.xon("mousemove",c.movezoom)},c.eventscroll=function(o){o.xon("mousewheel DOMMouseScroll",c.xscroll)},c.eventclick=function(o){o.xon("click",function(o){s.trigger("click")})}},this.eventunbind=function(){s.xoff("mouseenter"),c.eventopen=function(o){},c.eventleave=function(o){},c.eventmove=function(o){},c.eventscroll=function(o){},c.eventclick=function(o){}},this.init=function(o){c.options=Mo.extend({},Mo.fn.xzoom.defaults,o),i=c.options.rootOutput?Mo("body"):s.parent(),P=c.options.position,U=c.options.lensReverse&&"inside"==c.options.position,c.options.smoothZoomMove<1&&(c.options.smoothZoomMove=1),c.options.smoothLensMove<1&&(c.options.smoothLensMove=1),c.options.smoothScale<1&&(c.options.smoothScale=1),c.options.adaptive&&Mo(window).xon("load",function(){B=s.width(),G=s.height(),c.adaptive(),Mo(window).resize(c.adaptive)}),c.eventdefault(),c.eventopen(s)},this.destroy=function(){c.eventunbind()},this.closezoom=function(){L=!1,c.options.fadeOut?(c.options.title&&""!=go&&N.fadeOut(299),"inside"==c.options.position&&"fullscreen"==c.options.position||d.fadeOut(299),x.fadeOut(300,function(){ko()})):ko()},this.gallery=function(){for(var o=new Array,t=0,e=eo;e<oo.length;e++)o[t]=oo[e],t++;for(e=0;e<eo;e++)o[t]=oo[e],t++;return{index:eo,ogallery:oo,cgallery:o}},this.xappend=function(e){var i=e.parent();function o(o){ko(),o.preventDefault(),c.options.activeClass&&(_.removeClass(c.options.activeClass),(_=e).addClass(c.options.activeClass)),eo=Mo(this).data("xindex"),c.options.fadeTrans&&((C=new Image).src=s.attr("src"),(y=Mo(C)).css({position:"absolute",top:s.offset().top,left:s.offset().left,width:s.width(),height:s.height()}),Mo(document.body).append(y),y.fadeOut(200,function(){y.remove()}));var o=i.attr("href"),t=e.attr("xpreview")||e.attr("src");go=Oo(e),e.attr("title")&&s.attr("title",e.attr("title")),s.attr("xoriginal",o),s.removeAttr("style"),s.attr("src",t),c.options.adaptive&&(B=s.width(),G=s.height())}oo[to]=i.attr("href"),i.data("xindex",to),0==to&&c.options.activeClass&&(_=e).addClass(c.options.activeClass),0==to&&c.options.title&&(go=Oo(e)),to++,c.options.hover&&i.xon("mouseenter",i,o),i.xon("click",i,o)},this.init(o)}Mo.fn.xon=Mo.fn.on||Mo.fn.bind,Mo.fn.xoff=Mo.fn.off||Mo.fn.bind,Mo.fn.xzoom=function(t){var e,i;if(this.selector){var o,s=this.selector.split(",");for(o in s)s[o]=Mo.trim(s[o]);this.each(function(o){if(1==s.length)if(0==o){if(void 0!==(e=Mo(this)).data("xzoom"))return e.data("xzoom");e.x=new n(e,t)}else void 0!==e.x&&(i=Mo(this),e.x.xappend(i));else if(Mo(this).is(s[0])&&0==o){if(void 0!==(e=Mo(this)).data("xzoom"))return e.data("xzoom");e.x=new n(e,t)}else void 0===e.x||Mo(this).is(s[0])||(i=Mo(this),e.x.xappend(i))})}else this.each(function(o){if(0==o){if(void 0!==(e=Mo(this)).data("xzoom"))return e.data("xzoom");e.x=new n(e,t)}else void 0!==e.x&&(i=Mo(this),e.x.xappend(i))});return void 0!==e&&(e.data("xzoom",e.x),Mo(e).trigger("xzoom_ready"),e.x)},Mo.fn.xzoom.defaults={position:"right",mposition:"inside",rootOutput:!0,Xoffset:0,Yoffset:0,fadeIn:!0,fadeTrans:!0,fadeOut:!1,smooth:!0,smoothZoomMove:3,smoothLensMove:1,smoothScale:6,defaultScale:0,scroll:!0,tint:!1,tintOpacity:.5,lens:!1,lensOpacity:.5,lensShape:"box",lensCollision:!0,lensReverse:!1,openOnSmall:!0,zoomWidth:"auto",zoomHeight:"auto",sourceClass:"xzoom-source",loadingClass:"xzoom-loading",lensClass:"xzoom-lens",zoomClass:"xzoom-preview",activeClass:"xactive",hover:!1,adaptive:!0,adaptiveReverse:!1,title:!1,titleClass:"xzoom-caption",bg:!1}}(jQuery);
//# sourceMappingURL=xzoom.js.map
