function toggleTabIndex(n) {
    n.attr("tabindex") == -1 ? setTabIndex(n, 0) : setTabIndex(n, -1)
  }
  
  function setTabIndex(n, t) {
    n.attr("tabindex", t)
  }
  
  function setContactFormTabIndex(n) {
    n ? ($("#billingDistrict").is(":disabled") || setTabIndex($("#select2-billingDistrict-container").parent(), -1), $("#billingWard").is(":disabled") || setTabIndex($("#select2-billingWard-container").parent(), -1), setTabIndex($("#shipping-address input"), 0), $("#shippingProvince").is(":disabled") || setTabIndex($("#select2-shippingProvince-container").parent(), 0), $("#shippingDistrict").is(":disabled") || setTabIndex($("#select2-shippingDistrict-container").parent(), 0), $("#shippingWard").is(":disabled") || setTabIndex($("#select2-shippingWard-container").parent(), 0)) : ($("#billingDistrict").is(":disabled") || setTabIndex($("#select2-billingDistrict-container").parent(), 0), $("#billingWard").is(":disabled") || setTabIndex($("#select2-billingWard-container").parent(), 0), setTabIndex($("#shipping-address input"), -1), $("#shippingProvince").is(":disabled") || setTabIndex($("#select2-shippingProvince-container").parent(), -1), $("#shippingDistrict").is(":disabled") || setTabIndex($("#select2-shippingDistrict-container").parent(), -1), $("#shippingWard").is(":disabled") || setTabIndex($("#select2-shippingWard-container").parent(), -1))
  }
  
  function checkErrorToScroll() {
    var n = document.querySelector(".field--error");
    n && n.scrollIntoView({
      block: "center",
      behavior: "smooth"
    })
  } (function (n) {
    function h(n, t) {
      var u, f, r;
      if ($province = $("select[data-address-type='province'][data-address-zone='" + n + "']"), $province) {
        for (u = ['<option value="" hidden>---<\/option>'], f = 0; f < i.length; f++) {
          if (r = i[f], r.id == t) {
            u.push("<option value='" + r.id + "' selected>" + r.name + "<\/option>");
            continue
          }
          u.push("<option value='" + r.id + "'>" + r.name + "<\/option>")
        }
        $province.html(u.join(""))
      }
    }
  
    function s(n, t, i) {
      var r = $("select[data-address-type='district'][data-address-zone='" + n + "']"),
        s, e, o, u;
      if (r) {
        if (!t) {
          r.val("");
          r.attr("disabled", "disabled");
          r.html("");
          return
        }
        for (s = f.filter(function (n) {
          return n.province_id == t
        }), e = ['<option value="" hidden>---<\/option>'], o = 0; o < s.length; o++) {
          if (u = s[o], u.id == i) {
            e.push("<option value='" + u.id + "' selected>" + u.name + "<\/option>");
            continue
          }
          e.push("<option value='" + u.id + "'>" + u.name + "<\/option>")
        }
        r.removeAttr("disabled");
        r.html(e.join(""))
      }
    }
  
    function r(n, t, i) {
      var r = $("select[data-address-type='ward'][data-address-zone='" + n + "']"),
        f, s, o, u;
      if (r) {
        if (!t) {
          r.val("");
          r.attr("disabled", "disabled");
          r.html("");
          return
        }
        for (f = ['<option value="" hidden>---<\/option>'], s = e.filter(function (n) {
          return n.district_id == t
        }), o = 0; o < s.length; o++) {
          if (u = s[o], u.id == i) {
            f.push("<option value='" + u.id + "' selected>" + u.name + "<\/option>");
            continue
          }
          f.push("<option value='" + u.id + "'>" + u.name + "<\/option>")
        }
        r.removeAttr("disabled");
        r.html(f.join(""))
      }
    }
  
    function c() {
      return o ? {
        then: function (n) {
          return n()
        }
      } : fetch("asset/js/addresses.json").then(function (n) {
        return n.json()
      }).then(function (n) {
        i = n.provinces;
        f = n.districts;
        e = n.wards;
        o = !0
      })
    }
  
    function u() { }
  
    function t(n, t) {
      $('select[data-address-type="' + t + '"][data-address-zone="' + n + '"]').trigger("address:change")
    }
    var i = [],
      f = [],
      e = [],
      o = !1;
    u.prototype.bind = function () {
      $("body").on("change", "select[data-address-type]", function (n) {
        var u = n.target.getAttribute("data-address-type"),
          i = n.target.getAttribute("data-address-zone");
        u === "province" ? (t(i, "province"), s(i, n.target.value, undefined), t(i, "district"), r(i, "", undefined), t(i, "ward")) : u === "district" && (t(i, "district"), r(i, n.target.value, undefined), t(i, "ward"))
      });
      return this
    };
    u.prototype.refresh = function (n) {
      var i = {},
        u;
      ($("[data-address-zone]").each(function () {
        var n = $(this),
          r = n.data("address-type"),
          t, u;
        r && (t = n.data("address-zone"), u = i[t] || (i[t] = {}), u[r] = n.val() || n.attr("value"))
      }), u = Object.keys(i), u.length != 0) && c().then(function () {
        u.forEach(function (n) {
          var u = i[n];
          h(n, u.province);
          t(n, "province");
          s(n, u.province, u.district);
          t(n, "district");
          r(n, u.district, u.ward);
          t(n, "ward")
        });
        n && n()
      })
    };
    n.Address = new u;
    n.onRecaptchaValid = function () {
      $("#grecaptchaBox .field").removeClass("field--error")
    }
  })(window);
  window.Bizweb || (window.Bizweb = {});
  $(function () {
    $("body").on("click", "[data-toggle]", function () {
      var n = $(this);
      n.toggleClass("toggled");
      $(n.attr("data-toggle")).toggleClass(n.attr("data-toggle-class"))
    }).on("focus", ".field__label+input[type=text].field__input,textarea.field__input", function () {
      $(this).closest(".field").addClass("field--show-floating-label")
    }).on("blur", ".field__label+input[type=text].field__input,textarea.field__input", function () {
      this.value || $(this).closest(".field").removeClass("field--show-floating-label")
    }).on("change", ".field.field--error  .field__input", function () {
      $(this).closest(".field").removeClass("field--error")
    }).on("keypress", "#checkoutForm input", function (n) {
      n.keyCode == 13 && n.preventDefault()
    }).on("click", "#differenceAddress", function (n) {
      setContactFormTabIndex(n.target.checked)
    });
    $(document).keyup(function (n) {
      n.which === 27 && $(".modal-wrapper").addClass("hide")
    }).on("page:load", function () {
      checkErrorToScroll()
    })
  });
  $(function () {
    function r(t) {
      if (t)
        for (var i = 0; i < t.length; i++) Twine.bind(t[i]);
      else Twine.reset(n).bind();
      Twine.refreshImmediately()
    }
  
    function u() {
      var n = /iPhone|iPad|iPod/.test(navigator.userAgent) && !window.MSStream;
      n || $("select[data-address-type]").select2({
        width: "100%",
        language: {
          noResults: function () {
            return "KhĂ´ng tĂ¬m tháº¥y káº¿t quáº£"
          }
        }
      })
    }
  
    function t(n, t) {
      return n && t ? !0 : n == t
    }
  
    function i(n) {
      return n.differenceAddress ? f(n) : e(n)
    }
  
    function f(n) {
      return n.shipping.province && !n.requireDistrict && !n.requireWard || n.shipping.province && n.shipping.district && !n.requireWard || n.shipping.province && n.shipping.district && n.shipping.ward
    }
  
    function e(n) {
      return n.billing.province && !n.requireDistrict && !n.requireWard || n.billing.province && n.billing.district && !n.requireWard || n.billing.province && n.billing.district && n.billing.ward
    }
    Address.bind().refresh();
    u();
    setTimeout(function () {
      setContactFormTabIndex($("#differenceAddress").is(":checked"))
    }, 100);
    var n = {
      billing: {},
      shipping: {},
      isLoadingShippingMethod: !1,
      isLoadingShippingError: !1,
      isLoadingReductionCode: !1,
      isLoadingReductionCodeError: !1,
      isSubmitingCheckout: !1,
      isSubmitingCheckoutError: !1,
      shouldSaveCheckoutAbandon: !1,
      isBoundingToSaveCheckoutAbandon: !1,
      handleCheckoutKeyPress: function () {
        this.isBoundingToSaveCheckoutAbandon && this.setJobToSaveCheckoutAbandon(this.deadline - Date.now() + 200)
      },
      handleCheckoutChange: function (t) {
        var e = t.delegateTarget,
          r = t.target,
          u = r.dataset.addressType,
          f = r.dataset.addressZone,
          o;
        this.requireShipping && ["province", "district", "ward"].indexOf(u) >= 0 && (u == "province" && f == "billing" ? (this.billing.district = "", this.billing.ward = "") : u == "district" && f == "billing" ? this.billing.ward = "" : u == "province" && f == "shipping" ? (this.shipping.district = "", this.shipping.ward = "") : u == "district" && f == "shipping" && (this.shipping.ward = ""), i(n) ? (this.isLoadingShippingMethod = !0, this.isAddressSelecting = !1, o = this, setTimeout(function () {
          o.refreshShippingMethod(e)
        }, 0)) : this.isAddressSelecting = !0);
        r.name == "email" && this.shouldSaveCheckoutAbandon ? this.setJobToSaveCheckoutAbandon(5e3) : this.isBoundingToSaveCheckoutAbandon && this.setJobToSaveCheckoutAbandon(Math.max(this.deadline - Date.now(), 3e3));
        r.name == "differenceAddress" && this.handleToggleDifferenceAddress(e);
        r.id == "customer-address" && this.handleCustomerAddressChange(t, e);
        this.customerAddress && ["billingName", "billingAddress", "billingPhone", "billingProvince", "billingDisitrict", "billingWard"].indexOf(r.name) >= 0 && (this.customerAddress = 0)
      },
      setJobToSaveCheckoutAbandon: function (n) {
        this.deadline = Date.now() + n;
        this.saveAbandonJobId && clearTimeout(this.saveAbandonJobId);
        this.isBoundingToSaveCheckoutAbandon = !0;
        this.saveAbandonJobId = setTimeout(this.submitCheckoutAbandon.bind(this), n)
      },
      submitCheckoutAbandon: function () {
        if (this.isBoundingToSaveCheckoutAbandon = !1, this.shouldSaveCheckoutAbandon = !1, this.saveAbandonJobId = null, !this.isSubmitingCheckout) {
          var n = $("#checkoutForm");
          $.post(n.attr("action"), n.find(":not(input[name=reductionCode])").serialize())
        }
      },
      handleCheckoutSubmit: function (t) {
        var r, i, u;
        if (n["onepayConfirm" + n.paymentMethod] === !1) {
          alert($("#onepayConfirmAlert-" + n.paymentMethod).text());
          return
        }
        r = t.target;
        this.isSubmitingCheckout = !0;
        this.isSubmitingCheckoutError = !1;
        this.isLoadingReductionCodeError = !1;
        this.isLoadingShippingError = !1;
        i = this;
        u = {
          refreshOnSuccess: "checkout",
          refreshOnError: "checkout",
          exceptKeys: ["_method", "reductionCode"],
          success: function () {
            i.isSubmitingCheckout = !1;
            i.shouldRefreshAddress = !0
          },
          fail: function () {
            i.isSubmitingCheckout = !1;
            i.isSubmitingCheckoutError = !0;
            Twine.refresh()
          }
        };
        this.sendCheckoutForm(r, u)
      },
      handleReductionCodeKeyPress: function (n) {
        n.keyCode == 13 && (n.preventDefault(), n.target.value) && this.applyReductionCode()
      },
      handleShippingMethodErrorRetry: function () {
        this.isLoadingShippingMethod = !0;
        this.isLoadingReductionCodeError = !1;
        this.refreshShippingMethod(document.forms.checkoutForm)
      },
      applyReductionCode: function () {
        var r = document.forms.checkoutForm,
          n = ["_method", "reductionCode", "email", "differenceAddress"],
          t, i;
        this.differenceAddress ? n.push("shippingProvince", "shippingDistrict", "shippingWard") : n.push("billingProvince", "billingDistrict", "billingWard");
        this.requireShipping && n.push("shippingMethod");
        this.isLoadingReductionCode = !0;
        this.isLoadingReductionCodeError = !1;
        t = this;
        i = {
          refreshOnSuccess: "refreshDiscount refreshOrderTotalPrice refreshShipping refreshError",
          refreshOnError: "refreshDiscount",
          onlyKeys: n,
          success: function () {
            t.isLoadingReductionCode = !1
          },
          fail: function () {
            t.isLoadingReductionCode = !1;
            t.isLoadingReductionCodeError = !0;
            Twine.refresh()
          }
        };
        this.sendCheckoutForm(r, i)
      },
      removeReductionCode: function () {
        var i = document.forms.checkoutForm,
          t, n, r;
        i.elements.reductionCode.value = null;
        this.isLoadingReductionCode = !0;
        t = ["_method", "reductionCode", "email"];
        this.requireShipping && t.push("shippingMethod");
        n = this;
        this.isLoadingReductionCodeError = !1;
        r = {
          refreshOnSuccess: "refreshDiscount refreshOrderTotalPrice refreshShipping refreshError",
          refreshOnError: "refreshDiscount",
          onlyKeys: t,
          success: function () {
            n.isLoadingReductionCode = !1
          },
          fail: function () {
            n.isLoadingReductionCode = !1;
            n.isLoadingReductionCodeError = !0;
            Twine.refresh()
          }
        };
        this.sendCheckoutForm(i, r)
      },
      refreshShippingMethod: function (n) {
        var i = this,
          t, r;
        this.isLoadingShippingError = !1;
        t = ["_method", "shippingMethod", "differenceAddress"];
        this.differenceAddress ? t.push("shippingProvince", "shippingDistrict", "shippingWard") : t.push("billingProvince", "billingDistrict", "billingWard");
        r = {
          refreshOnSuccess: "refreshOrderTotalPrice refreshDiscount refreshShipping refreshError",
          refreshOnError: "refreshShipping",
          onlyKeys: t,
          success: function () {
            i.isLoadingShippingMethod = !1
          },
          fail: function () {
            i.isLoadingShippingMethod = !1;
            i.isLoadingShippingError = !0;
            Twine.refresh()
          }
        };
        this.sendCheckoutForm(n, r)
      },
      getTextShippingPrice: function () {
        if (!this.shippingMethods) return "-";
        for (var n = 0; n < this.shippingMethods.length; n++)
          if (this.shippingMethods[n].name === this.shippingMethod) return this.shippingMethods[n].textPrice;
        return "-"
      },
      getTextTotalPrice: function () {
        if (!this.shippingMethods) return this.subTotalPriceText;
        for (var n = 0; n < this.shippingMethods.length; n++)
          if (this.shippingMethods[n].name === this.shippingMethod) return this.shippingMethods[n].subtotalPriceWithShippingFee;
        return this.subTotalPriceText
      },
      loadRecaptcha: function () {
        $.ajax({
          url: "https://www.google.com/recaptcha/api.js",
          dataType: "script",
          "async": !0
        })
      },
      handleToggleDifferenceAddress: function (r) {
        if ((!t(this.billing.province, this.shipping.province) || !t(this.billing.district, this.shipping.district) || !t(this.billing.ward, this.shipping.ward)) && (this.shipping.province || this.shipping.district || this.shipping.ward)) {
          if (!i(n)) {
            this.isAddressSelecting = !0;
            return
          }
          this.isLoadingShippingMethod = !0;
          this.isAddressSelecting = !1;
          this.refreshShippingMethod(r)
        }
      },
      handleCustomerAddressChange: function (n, t) {
        var u = n.target.options[n.target.selectedIndex].dataset,
          r;
        this.billing.name = u.name || "";
        this.billing.address = u.address || "";
        this.billing.phone = u.phone || "";
        this.billing.province = u.province || "";
        this.billing.district = u.district || "";
        this.billing.ward = u.ward || "";
        t.billingProvince && (t.billingProvince.value = this.billing.province, t.billingProvince.setAttribute("value", this.billing.province));
        t.billingDistrict && (t.billingDistrict.value = this.billing.district, t.billingDistrict.setAttribute("value", this.billing.district));
        t.billingWard && (t.billingWard.value = this.billing.ward, t.billingWard.setAttribute("value", this.billing.ward));
        r = this;
        Address.refresh(function () {
          r.requireShipping && !r.differenceAddress && (i(r) ? (r.isLoadingShippingMethod = !0, r.isAddressSelecting = !1, r.refreshShippingMethod(t)) : r.isAddressSelecting = !0)
        })
      },
      startPollingCheckoutStatus: function (n, t, i, r) {
        function f(i) {
          fetch(n, {
            headers: {
              "X-Requested-With": "FetchApiRequest"
            }
          }).then(function (n) {
            var r = n.headers.get("X-Next-Redirect");
            r && Page.visit(r, {
              reload: !0
            });
            i > 0 ? (setTimeout(function () {
              f(i - 1)
            }, 1e3), --u.pollSeconds, Twine.refresh()) : Page.visit(t, {
              reload: !0
            })
          }).catch(function () {
            setTimeout(function () {
              f(i - 1)
            }, 1e3);
            --u.pollSeconds;
            Twine.refresh()
          })
        }
        var u = this;
        u.pollSeconds = r;
        f(r)
      },
      sendCheckoutForm: function (n, t) {
        for (var c, i, e, s = [].slice.call(n.querySelectorAll("input:not([type='reset']):not([type='button']):not([type='submit']):not([type='image']), select, textarea")), u = "", f = 0; f < s.length; f++) {
          var r = s[f],
            v = !r.disabled && (t.onlyKeys && t.onlyKeys.indexOf(r.name) >= 0 || t.exceptKeys && t.exceptKeys.indexOf(r.name) < 0 || !t.onlyKeys && !t.exceptKeys),
            h = r.type == "checkbox" || r.type == "radio";
          v && r.name && (h && r.checked || !h) && (u.length && (u += "&"), u += encodeURIComponent(r.name) + "=" + encodeURIComponent(r.value))
        }
        c = n.getAttribute("action");
        i = new XMLHttpRequest;
        i.open("POST", c, !0);
        i.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        i.setRequestHeader("Accept", "text/html, application/xhtml+xml, application/xml");
        i.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
        i.setRequestHeader("X-XHR-Referer", document.location.href);
        e = CSRFToken.get().token;
        e && i.setRequestHeader("X-CSRF-Token", e);
        var o = this,
          y = t.refreshOnSuccess && t.refreshOnSuccess.split(" "),
          l = t.refreshOnError && t.refreshOnError.split(" "),
          p = t.refreshOnSuccessExcept && t.refreshOnSuccessExcept.split(" "),
          a = t.refreshOnErrorExcept && t.refreshOnErrorExcept.split(" ");
        i.addEventListener("error", function () {
          t.fail && t.fail(i);
          o.onError(i, l, a)
        });
        i.addEventListener("load", function () {
          if (i.status < 400) {
            t.success && t.success();
            o.onSuccess(i, y, p)
          } else {
            t.fail && t.fail(i);
            o.onError(i, l, a)
          }
        });
        i.send(u)
      },
      onSuccess: function (n, t, i) {
        var r = n.getResponseHeader("X-Next-Redirect");
        if (r) {
          Page.visit(r, {
            reload: !0
          });
          return
        }
        t ? Page.refresh({
          response: n,
          onlyKeys: t
        }) : i ? Page.refresh({
          response: n,
          exceptKeys: i
        }) : Page.refresh({
          response: n
        })
      },
      onError: function (n, t, i) {
        t ? Page.refresh({
          response: n,
          onlyKeys: t
        }) : i ? Page.refresh({
          response: n,
          exceptKeys: i
        }) : Page.refresh({
          response: n
        })
      }
    };
    r();
    n.email && n.shouldSaveCheckoutAbandon && n.setJobToSaveCheckoutAbandon(5e3);
    document.addEventListener("page:before-partial-replace", function (n) {
      var i = n.data,
        t;
      if (i)
        for (t = 0; t < i.length; t++) Twine.unbind(i[t])
    });
    document.addEventListener("page:load", function (t) {
      r(t.data);
      n.shouldRefreshAddress && (Address.refresh(), u(), n.shouldRefreshAddress = !1)
    })
  });
