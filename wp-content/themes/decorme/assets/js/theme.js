! function(e, t) {
    "use strict";
    ({
        customID: "decormeScript",
        $document: e(document),
        $window: e(window),
        $body: e("body"),
        classes: {
            overlayActive: "overlay-enabled",
            collapsed: "collapsed",
            mainHeaderMenuActive: "header-menu-active",
            searchPopUpActive: "header-search-active"
        },
        init: function() {
            this.$document.on("ready", this.documentIsReady.bind(this)), this.$document.on("ready", this.autoHeightSetOnHeader.bind(this)), this.$document.on("ready", this.mobileMainMenuRightClone.bind(this)), this.$document.on("ready", this.mobileMainMenuClone.bind(this)), this.$window.on("ready", this.documentIsReady.bind(this))
        },
        documentIsReady: function() {
            this.$document.on("click." + this.customID, ".menu-collapsed", this.mainMenuCollapse.bind(this)).on("click." + this.customID, ".header-close-menu", this.mainMenuCollapse.bind(this)).on("click." + this.customID, this.mainMenuHideMobilePopup.bind(this)).on("click." + this.customID, ".mobile-collapsed", this.mobileSubMenuCollapse.bind(this)).on("click." + this.customID, ".header-close-menu", this.resetMobileMenuCollapse.bind(this)).on("mainMenuHideMobilePopup." + this.customID, this.resetMobileMenuCollapse.bind(this)).on("resize." + this.customID, this.autoHeightSetOnHeader.bind(this)).on("click." + this.customID, ".header-search-toggle", this.searchPopUpToggle.bind(this)).on("click." + this.customID, ".header-search-close", this.searchPopUpToggle.bind(this)), this.$window.on("load." + this.customID, this.MainMenuFocusAccessibility.bind(this)).on("load." + this.customID, this.autoHeightSetOnHeader.bind(this)).on("resize." + this.customID, this.autoHeightSetOnHeader.bind(this))
        },
        autoHeightSetOnHeader: function(t) {
            var i = e(".navigation-wrapper"),
                s = e(".navigation-wrapper > .main-mobile-nav"),
                n = e(".navigation-wrapper > .main-navigation-area *:not(.logo):not(.header_btn):not(.cart-wrapper *):not(.menu-item-has-children *):not(.search-button *):not(.header-search-popup)"),
                o = 0;
            e("body").find("div").hasClass("is-sticky-on") && ("block" == e("div.main-mobile-nav").css("display") ? (s.each(function() {
                var t = e(this).outerHeight(!0);
                t > o && (o = t)
            }), i.css("min-height", o)) : (n.each(function() {
                var t = e(this).outerHeight(!0);
                t > o && (o = t)
            }), i.css("min-height", o)))
        },
        mobileMainMenuRightClone: function(t) {
            e(".header-wrap-right").clone().appendTo(".mobile-menu-right")
        },
        mobileMainMenuClone: function(t) {
            e(".main-navbar .main-menu").clone().appendTo(".main-mobile-build")
        },
        MainMenuFocusAccessibility: function(t) {
            e(".main-navbar, .widget_nav_menu").find("a").on("focus blur", function() {
                e(this).parents("ul, li").toggleClass("focus")
            })
        },
        mainMenuCollapse: function(t) {
            var i = e(".menu-collapsed");
            this.$body.toggleClass(this.classes.mainHeaderMenuActive), this.$body.toggleClass(this.classes.overlayActive), i.toggleClass(this.classes.collapsed), this.$body.hasClass(this.classes.mainHeaderMenuActive) ? e(".header-close-menu").focus() : i.focus(), this.mainMenuAccessibility()
        },
        mainMenuAccessibility: function() {
            var e, t, i, s = document.querySelector(".main-mobile-build");
            let n = document.querySelector(".header-close-menu"),
                o = s.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'),
                a = o[o.length - 1];
            if (!s) return !1;
            for (t = 0, i = (e = s.getElementsByTagName("a")).length; t < i; t++) e[t].addEventListener("focus", c, !0), e[t].addEventListener("blur", c, !0);

            function c() {
                for (var e = this; - 1 === e.className.indexOf("main-mobile-build");) "li" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace(" focus", "") : e.className += " focus"), e = e.parentElement
            }
            document.addEventListener("keydown", function(e) {
                ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === n && (a.focus(), e.preventDefault()) : document.activeElement === a && (n.focus(), e.preventDefault()))
            })
        },
        mainMenuHideMobilePopup: function(t) {
            var i = e(".menu-collapsed"),
                s = e(".main-mobile-build");
            e(t.target).closest(i).length || e(t.target).closest(s).length || this.$body.hasClass(this.classes.mainHeaderMenuActive) && (this.$body.removeClass(this.classes.mainHeaderMenuActive), this.$body.removeClass(this.classes.overlayActive), i.removeClass(this.classes.collapsed), this.$document.trigger("mainMenuHideMobilePopup." + this.customID), t.stopPropagation())
        },
        mobileSubMenuCollapse: function(t) {
            t.preventDefault();
            var i = e(t.currentTarget),
                s = (i.closest(".main-mobile-build .main-menu"), i.parents(".dropdown-menu").length);
            this.isRTL;
            setTimeout(function() {
                i.parent().toggleClass("current"), i.next().slideToggle()
            }, 250)
        },
        resetMobileMenuCollapse: function(t) {
            e(".main-mobile-build .main-menu");
            var i = e(".main-mobile-build  .menu-item"),
                s = e(".main-mobile-build .dropdown-menu");
            setTimeout(function() {
                i.removeClass("current"), s.hide()
            }, 250)
        },
        searchPopUpToggle: function(t) {
            var i = e(".header-search-toggle"),
                s = e(".header-search-field");
            this.$body.toggleClass(this.classes.searchPopUpActive), this.$body.hasClass(this.classes.searchPopUpActive) ? s.focus() : i.focus(), this.searchPopupAccessibility()
        },
        searchPopupAccessibility: function() {
            var e, t, i, s = document.querySelector(".header-search-popup");
            let n = document.querySelector(".header-search-field"),
                o = s.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'),
                a = o[o.length - 1];
            if (!s) return !1;
            for (t = 0, i = (e = s.getElementsByTagName("button")).length; t < i; t++) e[t].addEventListener("focus", c, !0), e[t].addEventListener("blur", c, !0);

            function c() {
                for (var e = this; - 1 === e.className.indexOf("header-search-popup");) "input" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace("focus", "") : e.className += " focus"), e = e.parentElement
            }
            document.addEventListener("keydown", function(e) {
                ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === n && (a.focus(), e.preventDefault()) : document.activeElement === a && (n.focus(), e.preventDefault()))
            })
        }
    }).init()
}(jQuery, window.decormeCustomize);