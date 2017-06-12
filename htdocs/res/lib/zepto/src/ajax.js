//     Zepto.js
//     (c) 2010-2014 Thomas Fuchs
//     Zepto.js may be freely distributed under the MIT license.

;(function($){
  var jsonpID = 0,
      document = window.document,
      key,
      name,
      rscript = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,
      scriptTypeRE = /^(?:text|application)\/javascript/i,
      xmlTypeRE = /^(?:text|application)\/xml/i,
      jsonType = 'application/json',
      htmlType = 'text/html',
      blankRE = /^\s*$/

  // trigger a custom event and return false if it was cancelled
  function triggerAndReturn(context, eventName, data) {
    var event = $.Event(eventName)
    $(context).trigger(event, data)
    return !event.isDefaultPrevented()
  }

  // trigger an Ajax "global" event
  function triggerGlobal(settings, context, eventName, data) {
    if (settings.global) return triggerAndReturn(context || document, eventName, data)
  }

  // Number of active Ajax requests
  $.active = 0

  function ajaxStart(settings) {
    if (settings.global && $.active++ === 0) triggerGlobal(settings, null, 'ajaxStart')
  }
  function ajaxStop(settings) {
    if (settings.global && !(--$.active)) triggerGlobal(settings, null, 'ajaxStop')
  }

  // triggers an extra global event "ajaxBeforeSend" that's like "ajaxSend" but cancelable
  function ajaxBeforeSend(xhr, settings) {
    var context = settings.context
    if (settings.beforeSend.call(context, xhr, settings) === false ||
        triggerGlobal(settings, context, 'ajaxBeforeSend', [xhr, settings]) === false)
      return false

    triggerGlobal(settings, context, 'ajaxSend', [xhr, settings])
  }
  function ajaxSuccess(data, xhr, settings, deferred) {
    var context = settings.context, status = 'success'
    settings.success.call(context, data, status, xhr)
    if (deferred) deferred.resolveWith(context, [data, status, xhr])
    triggerGlobal(settings, context, 'ajaxSuccess', [xhr, settings, data])
    ajaxComplete(status, xhr, settings)
  }
  // type: "timeout", "error", "abort", "parsererror"
  function ajaxError(error, type, xhr, settings, deferred) {
    var context = settings.context
    settings.error.call(context, xhr, type, error)
    if (deferred) deferred.rejectWith(context, [xhr, type, error])
    triggerGlobal(settings, context, 'ajaxError', [xhr, settings, error || type])
    ajaxComplete(type, xhr, settings)
  }
  // status: "success", "notmodified", "error", "timeout", "abort", "parsererror"
  function ajaxComplete(status, xhr, settings) {
    var context = settings.context
    settings.complete.call(context, xhr, status)
    triggerGlobal(settings, context, 'ajaxComplete', [xhr, settings])
    ajaxStop(settings)
  }

  // Empty function, used as default callback
  function empty() {}

  $.ajaxJSONP = function(options, deferred){
    if (!('type' in options)) return $.ajax(options)

    var _callbackName = options.jsonpCallback,
      callbackName = ($.isFunction(_callbackName) ?
        _callbackName() : _callbackName) || ('jsonp' + (++jsonpID)),
      script = document.createElement('script'),
      originalCallback = window[callbackName],
      responseData,
      abort = function(errorType) {
        $(script).triggerHandler('error', errorType || 'abort')
      },
      xhr = { abort: abort }, abortTimeout

    if (deferred) deferred.promise(xhr)

    $(script).on('load error', function(e, errorType){
      clearTimeout(abortTimeout)
      $(script).off().remove()

      if (e.type == 'error' || !responseData) {
        ajaxError(null, errorType || 'error', xhr, options, deferred)
      } else {
        ajaxSuccess(responseData[0], xhr, options, deferred)
      }

      window[callbackName] = originalCallback
      if (responseData && $.isFunction(originalCallback))
        originalCallback(responseData[0])

      originalCallback = responseData = undefined
    })

    if (ajaxBeforeSend(xhr, options) === false) {
      abort('abort')
      return xhr
    }

    window[callbackName] = function(){
      responseData = arguments
    }

    script.src = options.url.replace(/\?(.+)=\?/, '?$1=' + callbackName)
    document.head.appendChild(script)

    if (options.timeout > 0) abortTimeout = setTimeout(function(){
      abort('timeout')
    }, options.timeout)

    return xhr
  }

  $.ajaxSettings = {
    // Default type of request
    type: 'GET',
    // Callback that is executed before request
    beforeSend: empty,
    // Callback that is executed if the request succeeds
    success: empty,
    // Callback that is executed the the server drops error
    error: empty,
    // Callback that is executed on request complete (both: error and success)
    complete: empty,
    // The context for the callbacks
    context: null,
    // Whether to trigger "global" Ajax events
    global: true,
    // Transport
    xhr: function () {
      return new window.XMLHttpRequest()
    },
    // MIME types mapping
    // IIS returns Javascript as "application/x-javascript"
    accepts: {
      script: 'text/javascript, application/javascript, application/x-javascript',
      json:   jsonType,
      xml:    'application/xml, text/xml',
      html:   htmlType,
      text:   'text/plain'
    },
    // Whether the request is to another domain
    crossDomain: false,
    // Default timeout
    timeout: 0,
    // Whether data should be serialized to string
    processData: true,
    // Whether the browser should be allowed to cache GET responses
    cache: true
  }

  function mimeToDataType(mime) {
    if (mime) mime = mime.split(';', 2)[0]
    return mime && ( mime == htmlType ? 'html' :
      mime == jsonType ? 'json' :
      scriptTypeRE.test(mime) ? 'script' :
      xmlTypeRE.test(mime) && 'xml' ) || 'text'
  }

  function appendQuery(url, query) {
    if (query == '') return url
    return (url + '&' + query).replace(/[&?]{1,2}/, '?')
  }

  // serialize payload and append it to the URL for GET requests
  function serializeData(options) {
    if (options.processData && options.data && $.type(options.data) != "string")
      options.data = $.param(options.data, options.traditional)
    if (options.data && (!options.type || options.type.toUpperCase() == 'GET'))
      options.url = appendQuery(options.url, options.data), options.data = undefined
  }

  $.ajax = function(options){
    var settings = $.extend({}, options || {}),
        deferred = $.Deferred && $.Deferred()
    for (key in $.ajaxSettings) if (settings[key] === undefined) settings[key] = $.ajaxSettings[key]

    ajaxStart(settings)

    if (!settings.crossDomain) settings.crossDomain = /^([\w-]+:)?\/\/([^\/]+)/.test(settings.url) &&
      RegExp.$2 != window.location.host

    if (!settings.url) settings.url = window.location.toString()
    serializeData(settings)

    var dataType = settings.dataType, hasPlaceholder = /\?.+=\?/.test(settings.url)
    if (hasPlaceholder) dataType = 'jsonp'

    if (settings.cache === false || (
         (!options || options.cache !== true) &&
         ('script' == dataType || 'jsonp' == dataType)
        ))
      settings.url = appendQuery(settings.url, '_=' + Date.now())

    if ('jsonp' == dataType) {
      if (!hasPlaceholder)
        settings.url = appendQuery(settings.url,
          settings.jsonp ? (settings.jsonp + '=?') : settings.jsonp === false ? '' : 'callback=?')
      return $.ajaxJSONP(settings, deferred)
    }

    var mime = settings.accepts[dataType],
        headers = { },
        setHeader = function(name, value) { headers[name.toLowerCase()] = [name, value] },
        protocol = /^([\w-]+:)\/\//.test(settings.url) ? RegExp.$1 : window.location.protocol,
        xhr = settings.xhr(),
        nativeSetHeader = xhr.setRequestHeader,
        abortTimeout

    if (deferred) deferred.promise(xhr)

    if (!settings.crossDomain) setHeader('X-Requested-With', 'XMLHttpRequest')
    setHeader('Accept', mime || '*/*')
    if (mime = settings.mimeType || mime) {
      if (mime.indexOf(',') > -1) mime = mime.split(',', 2)[0]
      xhr.overrideMimeType && xhr.overrideMimeType(mime)
    }
    if (settings.contentType || (settings.contentType !== false && settings.data && settings.type.toUpperCase() != 'GET'))
      setHeader('Content-Type', settings.contentType || 'application/x-www-form-urlencoded')

    if (settings.headers) for (name in settings.headers) setHeader(name, settings.headers[name])
    xhr.setRequestHeader = setHeader

    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4) {
        xhr.onreadystatechange = empty
        clearTimeout(abortTimeout)
        var result, error = false
        if ((xhr.status >= 200 && xhr.status < 300) || xhr.status == 304 || (xhr.status == 0 && protocol == 'file:')) {
          dataType = dataType || mimeToDataType(settings.mimeType || xhr.getResponseHeader('content-type'))
          result = xhr.responseText

          try {
            // http://perfectionkills.com/global-eval-what-are-the-options/
            if (dataType == 'script')    (1,eval)(result)
            else if (dataType == 'xml')  result = xhr.responseXML
            else if (dataType == 'json') result = blankRE.test(result) ? null : $.parseJSON(result)
          } catch (e) { error = e }

          if (error) ajaxError(error, 'parsererror', xhr, settings, deferred)
          else ajaxSuccess(result, xhr, settings, deferred)
        } else {
          ajaxError(xhr.statusText || null, xhr.status ? 'error' : 'abort', xhr, settings, deferred)
        }
      }
    }

    if (ajaxBeforeSend(xhr, settings) === false) {
      xhr.abort()
      ajaxError(null, 'abort', xhr, settings, deferred)
      return xhr
    }

    if (settings.xhrFields) for (name in settings.xhrFields) xhr[name] = settings.xhrFields[name]

    var async = 'async' in settings ? settings.async : true
    xhr.open(settings.type, settings.url, async, settings.username, settings.password)

    for (name in headers) nativeSetHeader.apply(xhr, headers[name])

    if (settings.timeout > 0) abortTimeout = setTimeout(function(){
        xhr.onreadystatechange = empty
        xhr.abort()
        ajaxError(null, 'timeout', xhr, settings, deferred)
      }, settings.timeout)

    // avoid sending empty string (#319)
    xhr.send(settings.data ? settings.data : null)
    return xhr
  }

  // handle optional data/success arguments
  function parseArguments(url, data, success, dataType) {
    if ($.isFunction(data)) dataType = success, success = data, data = undefined
    if (!$.isFunction(success)) dataType = success, success = undefined
    return {
      url: url
    , data: data
    , success: success
    , dataType: dataType
    }
  }

  $.get = function(/* url, data, success, dataType */){
    return $.ajax(parseArguments.apply(null, arguments))
  }

  $.post = function(/* url, data, success, dataType */){
    var options = parseArguments.apply(null, arguments)
    options.type = 'POST'
    return $.ajax(options)
  }

  $.getJSON = function(/* url, data, success */){
    var options = parseArguments.apply(null, arguments)
    options.dataType = 'json'
    return $.ajax(options)
  }

  $.fn.load = function(url, data, success){
    if (!this.length) return this
    var self = this, parts = url.split(/\s/), selector,
        options = parseArguments(url, data, success),
        callback = options.success
    if (parts.length > 1) options.url = parts[0], selector = parts[1]
    options.success = function(response){
      self.html(selector ?
        $('<div>').html(response.replace(rscript, "")).find(selector)
        : response)
      callback && callback.apply(self, arguments)
    }
    $.ajax(options)
    return this
  }

  var escape = encodeURIComponent

  function serialize(params, obj, traditional, scope){
    var type, array = $.isArray(obj), hash = $.isPlainObject(obj)
    $.each(obj, function(key, value) {
      type = $.type(value)
      if (scope) key = traditional ? scope :
        scope + '[' + (hash || type == 'object' || type == 'array' ? key : '') + ']'
      // handle data in serializeArray() format
      if (!scope && array) params.add(value.name, value.value)
      // recurse into nested objects
      else if (type == "array" || (!traditional && type == "object"))
        serialize(params, value, traditional, key)
      else params.add(key, value)
    })
  }

  $.param = function(obj, traditional){
    var params = []
    params.add = function(k, v){ this.push(escape(k) + '=' + escape(v)) }
    serialize(params, obj, traditional)
    return params.join('&').replace(/%20/g, '+')
  }
})(Zepto)

$.CLICK = 'click';

// tips
(function($){
    // 模板结构
    var BOX_HTML = '<div class="msg-mode hide"><div class="msg-text text-center" data-key="content"></div></div>';
    var LOADING_HTML = '<img src="data:image/gif;base64,R0lGODlhEAAQAIAAAP///////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAAABACwAAAEADQAOAAACH4wfAMimnVZ0Mq6n6jwPwqwxoEd6HYVkk4puZxo2bwEAIfkECQAAAQAsAAABAA8ADgAAAiGMHwDIqH1eWpOp9W6ThsM/eZ12UY4GgiJEmhu1sq46BwUAIfkECQAAAQAsAAABAA8ADAAAAh6MHwDIqH1eWpOp9W6ThsM/eZ12UY4Ggp4Ynua4UQUAIfkECQAAAQAsAAABAA8ADgAAAiGMHwDIqH1eWpOp9W6ThsM/eZ12UY4GppYJZeI5gm/LGgUAIfkECQAAAQAsAwABAAwADgAAAh6MA3B7yaigcVC5FGXLr3fMLaDHUFOGSalGmRupLQUAIfkECQAAAQAsAAABAA8ADgAAAiGMHwDIqA1fWnBOWo3MVe3jLWEzch1mMZ61OpT0qWgWBwUAIfkECQAAAQAsAAADAA8ADAAAAh2MAaaBy61QcvBMh7G8Ub7agdkIit9zLtDKUS35FgAh+QQJAAABACwAAAEADwAOAAACIIwfAMiofV5acC5Zcd1MaeNdXhNym/ZZk+pQUhpRZloAADs=" />';
    var guid = function(){
        var r = parseInt(Math.random()*100000, 10),
            t = (new Date()).getTime();

        t = t.toString();
        r = r.toString();
        return t + r;
    };

    function Tips(){
        // 弹层窗口浮层
        this._wrap = $(BOX_HTML).attr({
            id: 'tips_guid_' + guid()
        }).appendTo('body');
    }

    Tips.prototype = {
        show: function(title){
            var str = title || '';
            // this._wrap.show();
            this._$('content').html(str);
            this._wrap.removeClass('hide').addClass('show');
            setTimeout(function(){
                $.tips.hide();
            }, 2500);
        },
        hide: function(){
            this._$('content').html('');
            this._wrap.removeClass('show').addClass('hide');
            // this._wrap.hide();
        },
        error: function(o){
            var cfg = {
                retcode: 0,
                retmsg: 'ok'
            };
            
            if($.isPlainObject(o)){
                $.extend(cfg, o);
            }

            var str = '[' + cfg.retcode + ']' + cfg.retmsg;
            this.show(str);
        },
        showLoading: function(title){
            var str = LOADING_HTML + (title || '加载中...');
            Tips.loading.show(str);
        },
        hideLoading: function(){
            Tips.loading.hide();
        },
        _$: function(key){
            return this._wrap.find('[data-key=' + key + ']');
        }
    };

    // 静态方法
    Tips.loading = new Tips();

    // 注册到zepto
    $.tips = new Tips();
})(Zepto);

// Ajax Extent
(function($) {
    // 常量配置
    var CONST_LOCK = 'lock',
        CONST_XHR_STATUS = 'xhr-status',
        CONST_DEFAULT_TEXT = 'default-text';

    // Zepto Ajax
    var $_ajax = $.ajax;

    function ajax(o) {
        var node = null,
            fn = null,
            xhr_status = '';

        if (o && o.lock) {

            node = (typeof o.lock === 'string') ? $(o.lock) : o.lock;
            xhr_status = node.data(CONST_XHR_STATUS);

            if (xhr_status === CONST_LOCK) {
                return false;
            }

            lock(node);

            // 串行请求时在success方法解锁
            if ($.isFunction(o.success)) {
                fn = o.success;
                o.success = function(data, status, xhr){
                    fn.apply(o.context, [data, status, xhr]);
                    unlock(node);
                }
            }else{
                o.success = function(data, status, xhr){
                    unlock(node);
                }
            }

            // 请求完成后解锁
            if ($.isFunction(o.complete)) {
                fn = o.complete;
                o.complete = function(xhr, status) {
                    fn.apply(o.context, [xhr, status]);
                    unlock(node);
                };
            } else {
                o.complete = function(xhr, status) {
                    unlock(node);
                };
            }

        }else{
            
            // 全局监听事件
            $(document).one('ajaxStart', function(e) {
                // loading 显示
                $.tips.showLoading();
            }).one('ajaxStop', function(e) {
                // loading 消失
                $.tips.hideLoading();
            });

        }

        // 锁定
        function lock(elem) {
            var node = (typeof elem === 'string') ? $(elem) : elem,
                val = node.is('input') ? 'val' : 'html',
                loading_txt = node.data('loading-text') || '请求中...',
                default_txt = node[val]();

            node.data(CONST_XHR_STATUS, CONST_LOCK).data(CONST_DEFAULT_TEXT, default_txt).prop('disabled', true).addClass('btn-disabled');
            !!loading_txt && node[val](loading_txt);
        }

        // 解锁
        function unlock(elem) {
            var node = (typeof elem === 'string') ? $(elem) : elem,
                val = node.is('input') ? 'val' : 'html',
                default_txt = node.data(CONST_DEFAULT_TEXT);

            node.data(CONST_XHR_STATUS, null).prop('disabled', false).removeClass('btn-disabled');
            node[val](default_txt);
        }

        // on error
        if(!o['error']){
            o['error'] = function(xhr, errorType, error){
                var retcode = errorType || 'error',
                    retmsg = error || 'the request failed';
                    
                $.tips.error({retcode: retcode, retmsg: retmsg});
                console && console.log(xhr, errorType, error);
            };
        }

        return $_ajax(o);
    }

    /**
     * Ajax
     * @param  string type 请求类型GET,POST
     * @return function
     */
    function factory(type) {
        return function(url, data, success, dataType, lock) {
            // 兼容无参数模式
            if($.isFunction(data)){
                dataType = success;
                success = data;
                data = null;
            }

            return ajax({
                url: url,
                data: data,
                type: type || 'POST',
                success: success || function() {},
                dataType: dataType || 'json',
                lock: lock || null
            });
        };
    }

    $.ajax = ajax;
    $.get = factory('GET');
    $.post = factory('POST');

    // 获取select元素选中的option
    $.fn.option = function(){
        return (0 in this) ? $(this[0]).find('option').filter(function(){return this.selected;}) : null;
    };
})(Zepto);

