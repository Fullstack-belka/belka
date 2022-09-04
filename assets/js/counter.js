/*
Counter.js
https://github.com/tombruijn/counter.js

Version: 0.0.3
Copyright (c) 2014 Tom de Bruijn

Counter.js is licensed under the MIT license.
https://github.com/tombruijn/counter.js/LICENSE
*/
!function(){!function($){var Counter,defaults,pluginName;return pluginName="counter",defaults={autoStart:!0,duration:1500,countFrom:void 0,countTo:void 0,runOnce:!1,placeholder:void 0,easing:"easeOutQuad",onStart:function(){},onComplete:function(){},numberFormatter:function(number){return Math.round(number)}},Counter=function(){function Counter(element,options){this.element=element,this.options=$.extend(!0,{},defaults,options),this.init()}return Counter}(),Counter.prototype.init=function(){var givenNumber;if(givenNumber=parseFloat(this.element.innerHTML),null==givenNumber||isNaN(givenNumber)||(this.options.countFrom<givenNumber?this.options.countTo=givenNumber:this.options.countFrom=givenNumber),void 0===this.options.countFrom&&(this.options.countFrom=0),void 0===this.options.countTo&&(this.options.countTo=0),null!=this.options.placeholder&&(this.element.innerHTML=this.options.placeholder),this.options.autoStart)return this.start()},Counter.prototype.start=function(){var self;if(this.options.runOnce&&this.runCount()>=1)return!1;if(!this.running)return this.running=!0,this.updateRunCount(),this.options.onStart(),self=this,jQuery({count:this.options.countFrom}).animate({count:this.options.countTo},{duration:this.options.duration,easing:this.options.easing,step:function(){return self.setNumber(this.count)},complete:function(){return self.setNumber(self.options.countTo),self.running=!1,self.options.onComplete()}})},Counter.prototype.updateRunCount=function(){return $(this.element).data("counterRunCount",(this.runCount()||0)+1)},Counter.prototype.runCount=function(){return $(this.element).data("counterRunCount")},Counter.prototype.setNumber=function(number){return this.element.innerHTML=this.options.numberFormatter(number)},$.fn.counter=function(options){var self;return self=this,this.each(function(){var plugin;if(!(plugin=$(this).data("plugin_"+pluginName)))return $(this).data("plugin_"+pluginName,new Counter(this,options));if("string"==typeof options)switch(options){case"start":return plugin.start()}})}}(jQuery)}.call(this);

