@extends('layout')
@section('content')
<div class="gdlr-page-title-wrapper">
   <div class="gdlr-page-title-overlay"></div>
   <div class="gdlr-page-title-container container">
      <h1 class="gdlr-page-title">Đặt phòng</h1>
   </div>
</div>
<div class="content-wrapper">
   <div class="gdlr-content">
      <div class="with-sidebar-wrapper">
         <div class="with-sidebar-container container gdlr-class-no-sidebar">
            <div class="with-sidebar-left twelve columns">
               <div class="with-sidebar-content twelve columns">
                  <div class="gdlr-item gdlr-item-start-content" id="gdlr-single-booking-content" data-ajax="https://demo.goodlayers.com/hotelmaster/dark/wp-admin/admin-ajax.php">
                     <form class="gdlr-reservation-bar" id="gdlr-reservation-bar" data-action="gdlr_hotel_booking"  >
                        <div class="gdlr-reservation-bar-title">Đặt phòng của bạn</div>
                        <div class="gdlr-reservation-bar-summary-form" id="gdlr-reservation-bar-summary-form"></div>
                        <div class="gdlr-reservation-bar-room-form" id="gdlr-reservation-bar-room-form"></div>
                        <div class="gdlr-reservation-bar-date-form" id="gdlr-reservation-bar-date-form">
                           <div class="gdlr-reservation-field gdlr-resv-datepicker">
                              <span class="gdlr-reservation-field-title">Check In</span>
                              <div class="gdlr-datepicker-wrapper"><input type="text"  id="gdlr-check-in" class="gdlr-datepicker" data-current-date="2024-05-29" autocomplete="off" data-dfm="d M yy" data-block="[]" value="2024-05-29" /><input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off" value="2024-05-29" /></div>
                           </div>
                           <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-resv-night">
                              <span class="gdlr-reservation-field-title">Đêm</span>
                              <div class="gdlr-combobox-wrapper">
                                 <select name="gdlr-night" id="gdlr-night" >
                                    <option value="1" selected >1</option>
                                    <option value="2"  >2</option>
                                    <option value="3"  >3</option>
                                    <option value="4"  >4</option>
                                    <option value="5"  >5</option>
                                    <option value="6"  >6</option>
                                    <option value="7"  >7</option>
                                    <option value="8"  >8</option>
                                    <option value="9"  >9</option>
                                 </select>
                              </div>
                           </div>
                           <div class="clear"></div>
                           <div class="gdlr-reservation-field gdlr-resv-datepicker">
                              <span class="gdlr-reservation-field-title">Check Out</span>
                              <div class="gdlr-datepicker-wrapper"><input type="text"  id="gdlr-check-out" class="gdlr-datepicker" data-current-date="2024-05-29" autocomplete="off" data-min-night="1" data-dfm="d M yy" data-block="[]" value="2024-05-30" /><input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-out" autocomplete="off" value="2024-05-30" /></div>
                           </div>
                           <div class="clear"></div>
                           <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number">
                              <span class="gdlr-reservation-field-title">Số lượng phòng</span>
                              <div class="gdlr-combobox-wrapper">
                                 <select name="gdlr-room-number" id="gdlr-room-number" >
                                    <option value="1" selected >1</option>
                                    <option value="2"  >2</option>
                                    <option value="3"  >3</option>
                                    <option value="4"  >4</option>
                                    <option value="5"  >5</option>
                                    <option value="6"  >6</option>
                                    <option value="7"  >7</option>
                                    <option value="8"  >8</option>
                                    <option value="9"  >9</option>
                                 </select>
                              </div>
                           </div>
                           <div class="clear"></div>
                           <div class="gdlr-reservation-people-amount-wrapper" id="gdlr-reservation-people-amount-wrapper" >
                              <div class="gdlr-reservation-people-amount">
                                 <div class="gdlr-reservation-people-title" >Phòng <span>1</span></div>
                                 <div class="gdlr-reservation-field gdlr-resv-combobox ">
                                    <span class="gdlr-reservation-field-title">Người lớn</span>
                                    <div class="gdlr-combobox-wrapper">
                                       <select name="gdlr-adult-number[]" >
                                          <option value="1"  >1</option>
                                          <option value="2" selected >2</option>
                                          <option value="3"  >3</option>
                                          <option value="4"  >4</option>
                                          <option value="5"  >5</option>
                                          <option value="6"  >6</option>
                                          <option value="7"  >7</option>
                                          <option value="8"  >8</option>
                                          <option value="9"  >9</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="gdlr-reservation-field gdlr-resv-combobox ">
                                    <span class="gdlr-reservation-field-title">Trẻ em</span>
                                    <div class="gdlr-combobox-wrapper">
                                       <select name="gdlr-children-number[]" >
                                          <option value="0"  >0</option>
                                          <option value="1"  >1</option>
                                          <option value="2"  >2</option>
                                          <option value="3"  >3</option>
                                          <option value="4"  >4</option>
                                          <option value="5"  >5</option>
                                          <option value="6"  >6</option>
                                          <option value="7"  >7</option>
                                          <option value="8"  >8</option>
                                          <option value="9"  >9</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="clear"></div>
                              </div>
                           </div>
                           <div class="clear"></div>
                           {{-- href="{{route('choose1')}}" --}}
                           <a id="btn_kiemTra" class="gdlr-reservation-bar-button gdlr-button with-border"  >Kiểm tra</a>
                           <div class="clear"></div>
                        </div>
                        <div class="gdlr-reservation-bar-service-form" id="gdlr-reservation-bar-service-form"></div>
                     </form>
                     <div class="gdlr-booking-content">
                        <div class="gdlr-booking-process-bar" id="gdlr-booking-process-bar" data-state="1" >
                           <div data-process="1" class="gdlr-booking-process gdlr-active">1. Chọn thời gian</div>
                           <div data-process="2" class="gdlr-booking-process">2. Chọn phòng</div>
                           <div data-process="3" class="gdlr-booking-process">3. Đặt phòng</div>
                           <div data-process="4" class="gdlr-booking-process">4. Xác nhận</div>
                        </div>
                        <div class="gdlr-booking-content-wrapper" >
                           <div class="gdlr-booking-content-inner" id="gdlr-booking-content-inner" >
                              <div class="gdlr-datepicker-range-wrapper" >
                                 <div class="gdlr-datepicker-range" data-current-date="2024-05-29" id="gdlr-datepicker-range" data-dfm="d M yy" data-block="[]"  ></div>
                              </div>
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
      </div>
   </div>
   <div class="clear" ></div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript"></script>
<script type="text/javascript" src="https://demo.goodlayers.com/hotelmaster/dark/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="https://demo.goodlayers.com/hotelmaster/dark/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.2" id="jquery-ui-datepicker-js"></script>
<script type="text/javascript" id="jquery-ui-datepicker-js-after">
   jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["Su","Mo","Tu","We","Th","Fr","Sa"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type="text/javascript" id="hotel-script-js-extra">
   var objectL10n = {"closeText":"Done","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"monthStatus":"Show a different month","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["Su","Mo","Tu","We","Th","Fr","Sa"],"firstDay":"1"};
</script>
<script type="text/javascript" src="https://demo.goodlayers.com/hotelmaster/dark/wp-content/plugins/gdlr-hotel/gdlr-hotel.js?ver=1.0.0" id="hotel-script-js"></script>
<script type="text/javascript" id="rocket-browser-checker-js-after">
   "use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script type="text/javascript" id="rocket-preload-links-js-extra">
   var RocketPreloadLinksConfig = {"excludeUris":"\/hotelmaster\/dark(\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$))|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/demo.goodlayers.com\/hotelmaster\/dark","onHoverDelay":"100","rateThrottle":"3"};
</script>
<script type="text/javascript" id="rocket-preload-links-js-after">
   (function() {
   "use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
   }());
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
      $('#btn_kiemTra').click(function(){
         var formData = {
         checkIn: $('#gdlr-check-in').val(),
         checkOut: $('#gdlr-check-out').val(),
         nights: $('#gdlr-night').val(),
         roomNumber: $('#gdlr-room-number').val(),
         adultNumber: $("select[name='gdlr-adult-number[]']").val(),
         childrenNumber: $("select[name='gdlr-children-number[]']").val()
         };

         $.ajax({
            url: 'ajax/ajax_info_booking.php',
            type: 'POST',
            data: formData,
            success: function(res) {
               console.log(res);
            }
         });
      });
   });
</script>
@endsection