/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
console.log('plugins');

/*!
 * jQuery Tools v1.2.7 - The missing UI library for the Web
 *
 * toolbox/toolbox.flashembed.js
 *
 * NO COPYRIGHTS OR LICENSES. DO WHAT YOU LIKE.
 *
 * http://flowplayer.org/tools/
 *
 */
(function () {
  var a = document.all, b = "http://www.adobe.com/go/getflashplayer", c = typeof jQuery == "function", d = /(\d+)[^\d]+(\d+)[^\d]*(\d*)/, e = {width: "100%", height: "100%", id: "_" + ("" + Math.random()).slice(9), allowfullscreen: !0, allowscriptaccess: "always", quality: "high", version: [3, 0], onFail: null, expressInstall: null, w3c: !1, cachebusting: !1};
  window.attachEvent && window.attachEvent("onbeforeunload", function () {
    __flash_unloadHandler = function () {
    }, __flash_savedUnloadHandler = function () {
    }
  });
  function f(a, b) {
    if (b)
      for (var c in b)
        b.hasOwnProperty(c) && (a[c] = b[c]);
    return a
  }
  function g(a, b) {
    var c = [];
    for (var d in a)
      a.hasOwnProperty(d) && (c[d] = b(a[d]));
    return c
  }
  window.flashembed = function (a, b, c) {
    typeof a == "string" && (a = document.getElementById(a.replace("#", "")));
    if (a) {
      typeof b == "string" && (b = {src: b});
      return new j(a, f(f({}, e), b), c)
    }
  };
  var h = f(window.flashembed, {conf: e, getVersion: function () {
      var a, b;
      try {
        b = navigator.plugins["Shockwave Flash"].description.slice(16)
      } catch (c) {
        try {
          a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7"), b = a && a.GetVariable("$version")
        } catch (e) {
          try {
            a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6"), b = a && a.GetVariable("$version")
          } catch (f) {
          }
        }
      }
      b = d.exec(b);
      return b ? [b[1], b[3]] : [0, 0]
    }, asString: function (a) {
      if (a === null || a === undefined)
        return null;
      var b = typeof a;
      b == "object" && a.push && (b = "array");
      switch (b) {
        case"string":
          a = a.replace(new RegExp("([\"\\\\])", "g"), "\\$1"), a = a.replace(/^\s?(\d+\.?\d*)%/, "$1pct");
          return"\"" + a + "\"";
        case"array":
          return"[" + g(a, function (a) {
            return h.asString(a)
          }).join(",") + "]";
        case"function":
          return"\"function()\"";
        case"object":
          var c = [];
          for (var d in a)
            a.hasOwnProperty(d) && c.push("\"" + d + "\":" + h.asString(a[d]));
          return"{" + c.join(",") + "}"
      }
      return String(a).replace(/\s/g, " ").replace(/\'/g, "\"")
    }, getHTML: function (b, c) {
      b = f({}, b);
      var d = "<object width=\"" + b.width + "\" height=\"" + b.height + "\" id=\"" + b.id + "\" name=\"" + b.id + "\"";
      b.cachebusting && (b.src += (b.src.indexOf("?") != -1 ? "&" : "?") + Math.random()), b.w3c || !a ? d += " data=\"" + b.src + "\" type=\"application/x-shockwave-flash\"" : d += " classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\"", d += ">";
      if (b.w3c || a)
        d += "<param name=\"movie\" value=\"" + b.src + "\" />";
      b.width = b.height = b.id = b.w3c = b.src = null, b.onFail = b.version = b.expressInstall = null;
      for (var e in b)
        b[e] && (d += "<param name=\"" + e + "\" value=\"" + b[e] + "\" />");
      var g = "";
      if (c) {
        for (var i in c)
          if (c[i]) {
            var j = c[i];
            g += i + "=" + encodeURIComponent(/function|object/.test(typeof j) ? h.asString(j) : j) + "&"
          }
        g = g.slice(0, -1), d += "<param name=\"flashvars\" value='" + g + "' />"
      }
      d += "</object>";
      return d
    }, isSupported: function (a) {
      return i[0] > a[0] || i[0] == a[0] && i[1] >= a[1]
    }}), i = h.getVersion();
  function j(c, d, e) {
    if (h.isSupported(d.version))
      c.innerHTML = h.getHTML(d, e);
    else if (d.expressInstall && h.isSupported([6, 65]))
      c.innerHTML = h.getHTML(f(d, {src: d.expressInstall}), {MMredirectURL: location.href, MMplayerType: "PlugIn", MMdoctitle: document.title});
    else {
      c.innerHTML.replace(/\s/g, "") || (c.innerHTML = "<h2>Flash version " + d.version + " or greater is required</h2><h3>" + (i[0] > 0 ? "Your version is " + i : "You have no flash plugin installed") + "</h3>" + (c.tagName == "A" ? "<p>Click here to download latest version</p>" : "<p>Download latest version from <a href='" + b + "'>here</a></p>"), c.tagName == "A" && (c.onclick = function () {
        location.href = b
      }));
      if (d.onFail) {
        var g = d.onFail.call(this);
        typeof g == "string" && (c.innerHTML = g)
      }
    }
    a && (window[d.id] = document.getElementById(d.id)), f(this, {getRoot: function () {
        return c
      }, getOptions: function () {
        return d
      }, getConf: function () {
        return e
      }, getApi: function () {
        return c.firstChild
      }})
  }
  c && (jQuery.tools = jQuery.tools || {version: "v1.2.7"}, jQuery.tools.flashembed = {conf: e}, jQuery.fn.flashembed = function (a, b) {
    return this.each(function () {
      jQuery(this).data("flashembed", flashembed(this, a, b))
    })
  })
})();



