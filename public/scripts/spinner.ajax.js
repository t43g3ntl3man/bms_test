!function(n){n.nette.ext("spinner",{init:function(){},start:function(){this.counter++,1===this.counter&&this.spinner.show(this.speed)},complete:function(){this.counter--,this.counter<=0&&this.spinner.hide(this.speed)}},{spinner:n(".ajax-loading"),speed:void 0,counter:0})}(jQuery);
//# sourceMappingURL=spinner.ajax.js.map
