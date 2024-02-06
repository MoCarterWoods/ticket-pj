! function(e, t) {
    if ("object" == typeof exports && "object" == typeof module) module.exports = t();
    else if ("function" == typeof define && define.amd) define([], t);
    else {
        var a = t();
        for (var n in a)("object" == typeof exports ? exports : e)[n] = a[n]
    }
}(self, (function() {
    return function() {
        var e = {
                8518: function() {
                    ! function(e) {
                        "use strict";
                        e.event.special.destroyed || (e.event.special.destroyed = {
                            remove: function(e) {
                                e.handler && e.handler()
                            }
                        }), e.fn.extend({
                            maxlength: function(t, a) {
                                var n = e("body");

                                function o(e) {
                                    var t = e.charCodeAt();
                                    return t ? t < 128 ? 1 : t < 2048 ? 2 : 3 : 0
                                }

                                function s(e) {
                                    return e.split("").map(o).concat(0).reduce((function(e, t) {
                                        return e + t
                                    }))
                                }

                                function r(e) {
                                    var a = e.val();
                                    a = t.twoCharLinebreak ? a.replace(/\r(?!\n)|\n(?!\r)/g, "\r\n") : a.replace(/(?:\r\n|\r|\n)/g, "\n");
                                    var n = 0;
                                    return n = t.utf8 ? s(a) : a.length, "file" === e.prop("type") && "" !== e.val() && (n -= 12), n
                                }

                                function i(e, t) {
                                    return t - r(e)
                                }

                                function l(e, t) {
                                    t.css({
                                        display: "block"
                                    }), e.trigger("maxlength.shown")
                                }

                                function c(e, a, n) {
                                    var o = "";
                                    return t.message ? o = "function" == typeof t.message ? t.message(e, a) : t.message.replace("%charsTyped%", n).replace("%charsRemaining%", a - n).replace("%charsTotal%", a) : (t.preText && (o += t.preText), t.showCharsTyped ? o += n : o += a - n, t.showMaxLength && (o += t.separator + a), t.postText && (o += t.postText)), o
                                }

                                function f(e, a, n, o) {
                                    var s, i, f, p;
                                    o && (o.html(c(a.val(), n, n - e)), e > 0 ? (s = a, i = t.threshold, f = n, p = !0, !t.alwaysShow && f - r(s) > i && (p = !1), p ? l(a, o.removeClass(t.limitReachedClass + " " + t.limitExceededClass).addClass(t.warningClass)) : function(e, a) {
                                        t.alwaysShow || (a.css({
                                            display: "none"
                                        }), e.trigger("maxlength.hidden"))
                                    }(a, o)) : t.limitExceededClass ? l(a, 0 === e ? o.removeClass(t.warningClass + " " + t.limitExceededClass).addClass(t.limitReachedClass) : o.removeClass(t.warningClass + " " + t.limitReachedClass).addClass(t.limitExceededClass)) : l(a, o.removeClass(t.warningClass).addClass(t.limitReachedClass))), t.customMaxAttribute && (e < 0 ? a.addClass(t.customMaxClass) : a.removeClass(t.customMaxClass))
                                }

                                function p(a, n) {
                                    var o = function(t) {
                                        var a = t[0];
                                        return e.extend({}, "function" == typeof a.getBoundingClientRect ? a.getBoundingClientRect() : {
                                            width: a.offsetWidth,
                                            height: a.offsetHeight
                                        }, t.offset())
                                    }(a);
                                    if ("function" !== e.type(t.placement))
                                        if (e.isPlainObject(t.placement)) ! function(a, n) {
                                            if (a && n) {
                                                var o = {};
                                                e.each(["top", "bottom", "left", "right", "position"], (function(e, a) {
                                                    var n = t.placement[a];
                                                    void 0 !== n && (o[a] = n)
                                                })), n.css(o)
                                            }
                                        }(t.placement, n);
                                        else {
                                            var s = a.outerWidth(),
                                                r = n.outerWidth(),
                                                i = n.width(),
                                                l = n.height();
                                            switch (t.appendToParent && (o.top -= a.parent().offset().top, o.left -= a.parent().offset().left), t.placement) {
                                                case "bottom":
                                                    n.css({
                                                        top: o.top + o.height,
                                                        left: o.left + o.width / 2 - i / 2
                                                    });
                                                    break;
                                                case "top":
                                                    n.css({
                                                        top: o.top - l,
                                                        left: o.left + o.width / 2 - i / 2
                                                    });
                                                    break;
                                                case "left":
                                                    n.css({
                                                        top: o.top + o.height / 2 - l / 2,
                                                        left: o.left - i
                                                    });
                                                    break;
                                                case "right":
                                                    n.css({
                                                        top: o.top + o.height / 2 - l / 2,
                                                        left: o.left + o.width
                                                    });
                                                    break;
                                                case "bottom-right":
                                                    n.css({
                                                        top: o.top + o.height,
                                                        left: o.left + o.width
                                                    });
                                                    break;
                                                case "top-right":
                                                    n.css({
                                                        top: o.top - l,
                                                        left: o.left + s
                                                    });
                                                    break;
                                                case "top-left":
                                                    n.css({
                                                        top: o.top - l,
                                                        left: o.left - r
                                                    });
                                                    break;
                                                case "bottom-left":
                                                    n.css({
                                                        top: o.top + a.outerHeight(),
                                                        left: o.left - r
                                                    });
                                                    break;
                                                case "centered-right":
                                                    n.css({
                                                        top: o.top + l / 2,
                                                        left: o.left + s - r - 3
                                                    });
                                                    break;
                                                case "bottom-right-inside":
                                                    n.css({
                                                        top: o.top + o.height,
                                                        left: o.left + o.width - r
                                                    });
                                                    break;
                                                case "top-right-inside":
                                                    n.css({
                                                        top: o.top - l,
                                                        left: o.left + s - r
                                                    });
                                                    break;
                                                case "top-left-inside":
                                                    n.css({
                                                        top: o.top - l,
                                                        left: o.left
                                                    });
                                                    break;
                                                case "bottom-left-inside":
                                                    n.css({
                                                        top: o.top + a.outerHeight(),
                                                        left: o.left
                                                    })
                                            }
                                        }
                                    else t.placement(a, n, o)
                                }

                                function u(e) {
                                    var a = e.attr("maxlength") || t.customMaxAttribute;
                                    if (t.customMaxAttribute && !t.allowOverMax) {
                                        var n = e.attr(t.customMaxAttribute);
                                        (!a || n < a) && (a = n)
                                    }
                                    return a || (a = e.attr("size")), a
                                }
                                return e.isFunction(t) && !a && (a = t, t = {}), t = e.extend({
                                    showOnReady: !1,
                                    alwaysShow: !0,
                                    threshold: 0,
                                    warningClass: "small form-text text-muted",
                                    limitReachedClass: "small form-text text-danger",
                                    limitExceededClass: "",
                                    separator: " / ",
                                    preText: "",
                                    postText: "",
                                    showMaxLength: !0,
                                    placement: "bottom-right-inside",
                                    message: null,
                                    showCharsTyped: !0,
                                    validate: !1,
                                    utf8: !1,
                                    appendToParent: !1,
                                    twoCharLinebreak: !0,
                                    customMaxAttribute: null,
                                    customMaxClass: "overmax",
                                    allowOverMax: !1,
                                    zIndex: 1099
                                }, t), this.each((function() {
                                    var a, r, l = e(this);

                                    function d() {
                                        var o = c(l.val(), a, "0");
                                        a = u(l), r || (r = e('<span class="bootstrap-maxlength"></span>').css({
                                            display: "none",
                                            position: "absolute",
                                            whiteSpace: "nowrap",
                                            zIndex: t.zIndex
                                        }).html(o)), l.is("textarea") && (l.data("maxlenghtsizex", l.outerWidth()), l.data("maxlenghtsizey", l.outerHeight()), l.mouseup((function() {
                                            l.outerWidth() === l.data("maxlenghtsizex") && l.outerHeight() === l.data("maxlenghtsizey") || p(l, r), l.data("maxlenghtsizex", l.outerWidth()), l.data("maxlenghtsizey", l.outerHeight())
                                        }))), t.appendToParent ? (l.parent().append(r), l.parent().css("position", "relative")) : n.append(r), f(i(l, u(l)), l, a, r), p(l, r)
                                    }
                                    e(window).resize((function() {
                                        r && p(l, r)
                                    })), t.showOnReady ? l.ready((function() {
                                        d()
                                    })) : l.focus((function() {
                                        d()
                                    })), l.on("maxlength.reposition", (function() {
                                        p(l, r)
                                    })), l.on("destroyed", (function() {
                                        r && r.remove()
                                    })), l.on("blur", (function() {
                                        r && !t.showOnReady && r.remove()
                                    })), l.on("input", (function() {
                                        var e = u(l),
                                            n = i(l, e),
                                            c = !0;
                                        return t.validate && n < 0 ? (function(e, a) {
                                            var n = e.val();
                                            if (t.twoCharLinebreak && "\n" === (n = n.replace(/\r(?!\n)|\n(?!\r)/g, "\r\n"))[n.length - 1] && (a -= n.length % 2), t.utf8) {
                                                for (var r = n.split("").map(o), i = 0, l = s(n) - a; i < l; i += r.pop());
                                                a -= a - r.length
                                            }
                                            e.val(n.substr(0, a))
                                        }(l, e), c = !1) : f(n, l, a, r), c
                                    }))
                                }))
                            }
                        })
                    }(jQuery)
                }
            },
            t = {};

        function a(n) {
            var o = t[n];
            if (void 0 !== o) return o.exports;
            var s = t[n] = {
                exports: {}
            };
            return e[n](s, s.exports, a), s.exports
        }
        a.n = function(e) {
            var t = e && e.__esModule ? function() {
                return e.default
            } : function() {
                return e
            };
            return a.d(t, {
                a: t
            }), t
        }, a.d = function(e, t) {
            for (var n in t) a.o(t, n) && !a.o(e, n) && Object.defineProperty(e, n, {
                enumerable: !0,
                get: t[n]
            })
        }, a.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }, a.r = function(e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                value: "Module"
            }), Object.defineProperty(e, "__esModule", {
                value: !0
            })
        };
        var n = {};
        return function() {
            "use strict";
            a.r(n), a(8518)
        }(), n
    }()
}));