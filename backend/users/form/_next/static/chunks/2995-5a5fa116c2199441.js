(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
  [2995],
  {
    82755: function (e, t, n) {
      "use strict";
      n.d(t, {
        h: function () {
          return d;
        },
      });
      var r = n(47568),
        i = n(26042),
        o = n(69396),
        a = n(97582),
        s = n(85893),
        l = (n(67294), n(10416)),
        c = n(96701),
        _ = n(16252),
        u = n.n(_),
        g = function () {
          return (0, s.jsxs)("svg", {
            width: "16",
            height: "16",
            viewBox: "0 0 25 26",
            fill: "none",
            children: [
              (0, s.jsx)("path", {
                d: "M17.1864 0C15.8536 0.0958744 14.2958 0.983119 13.388 2.13849C12.5599 3.18661 11.8786 4.74335 12.1443 6.25621C13.6005 6.30334 15.1052 5.39497 15.977 4.2201C16.7927 3.12648 17.4098 1.57949 17.1864 0Z",
                fill: "#0F1D37",
              }),
              (0, s.jsx)("path", {
                d: "M22.4528 8.7233C21.1731 7.05443 19.3747 6.08594 17.6763 6.08594C15.4341 6.08594 14.4857 7.20231 12.9279 7.20231C11.3216 7.20231 10.1013 6.08919 8.16227 6.08919C6.25759 6.08919 4.22948 7.29981 2.94355 9.37004C1.13575 12.2853 1.44512 17.7664 4.37479 22.435C5.42322 24.1055 6.82321 25.9839 8.65445 26.0002C10.2841 26.0164 10.7435 24.9131 12.9513 24.9017C15.1591 24.8887 15.5778 26.0148 17.2044 25.9969C19.0372 25.9823 20.5138 23.9007 21.5622 22.2302C22.3137 21.0326 22.5934 20.4297 23.1762 19.0777C18.9372 17.3991 18.2575 11.1299 22.4528 8.7233Z",
                fill: "#0F1D37",
              }),
            ],
          });
        },
        d = function (e) {
          var t = e.onSuccess;
          function n() {
            return (n = (0, r.Z)(function (e) {
              var n;
              return (0, a.__generator)(this, function (r) {
                try {
                  t(
                    null === e ||
                      void 0 === e ||
                      null === (n = e.authorization) ||
                      void 0 === n
                      ? void 0
                      : n.id_token,
                    "apple"
                  );
                } catch (i) {
                  console.log(i.message);
                }
                return [2];
              });
            })).apply(this, arguments);
          }
          return (0, s.jsx)(c.ZP, {
            authOptions: {
              clientId: "com.ForexRover.secure.sid",
              redirectURI: "https://secure.ForexRover.com",
              scope: "email name",
              state: "state",
              nonce: "nonce",
              usePopup: !0,
            },
            onSuccess: function (e) {
              return n.apply(this, arguments);
            },
            onError: function (e) {
              console.error(e);
            },
            skipScript: !1,
            render: function (e) {
              return (0, s.jsxs)(
                l.Z,
                (0, o.Z)(
                  (0, i.Z)(
                    {
                      className: u().button,
                      style: {
                        border: "1px solid",
                        display: "flex",
                        justifyContent: "center",
                      },
                    },
                    e
                  ),
                  {
                    icon: "apple",
                    label: "APPLE",
                    children: [
                      (0, s.jsx)(g, {}),
                      (0, s.jsx)("div", {
                        style: { margin: "0 0 0 8px" },
                        children: "APPLE",
                      }),
                    ],
                  }
                )
              );
            },
          });
        };
    },
    72202: function (e, t, n) {
      "use strict";
      n.d(t, {
        J: function () {
          return _;
        },
      });
      var r = n(47568),
        i = n(97582),
        o = n(85893),
        a = (n(67294), n(10416)),
        s = n(16252),
        l = n.n(s),
        c = n(49126),
        _ = function (e) {
          var t = e.onSuccess,
            n = (0, c.f0)(),
            s = n.login,
            _ = n.isLoading;
          function u() {
            return (u = (0, r.Z)(function () {
              var e, n;
              return (0, i.__generator)(this, function (r) {
                switch (r.label) {
                  case 0:
                    return r.trys.push([0, 2, , 3]), [4, s({ scope: "email" })];
                  case 1:
                    return (
                      (e = r.sent()),
                      t(e.authResponse.accessToken, "facebook"),
                      [3, 3]
                    );
                  case 2:
                    return (n = r.sent()), console.log(n.message), [3, 3];
                  case 3:
                    return [2];
                }
              });
            })).apply(this, arguments);
          }
          return (0, o.jsx)(a.Z, {
            className: l().button,
            style: { border: "1px solid" },
            icon: "facebook",
            label: "FACEBOOK",
            disabled: _,
            onClick: function () {
              return u.apply(this, arguments);
            },
          });
        };
    },
    65926: function (e, t, n) {
      "use strict";
      n.d(t, {
        k: function () {
          return l;
        },
      });
      var r = n(85893),
        i = (n(67294), n(10416)),
        o = n(16252),
        a = n.n(o),
        s = n(86426),
        l = function (e) {
          var t = e.onSuccess,
            n = (0, s.Nq)({
              onSuccess: function (e) {
                t(e.access_token, "google");
              },
            });
          return (0, r.jsx)(i.Z, {
            className: a().button,
            style: { border: "1px solid" },
            icon: "google",
            label: "GOOGLE",
            onClick: n,
          });
        };
    },
    77191: function (e, t, n) {
      "use strict";
      n.d(t, {
        b: function () {
          return h;
        },
      });
      var r = n(85893),
        i = (n(67294), n(34736)),
        o = n(67413),
        a = n(84117),
        s = n(52344),
        l = n.n(s),
        c = n(828),
        _ = n(96486),
        u = n.n(_),
        g = n(21520),
        d = (n(96562), n(37039)),
        p = function (e) {
          var t = e.step,
            n = e.length,
            i = e.index,
            o = (0, d.$G)().t,
            a = (0, c.Z)((0, d.cQ)(), 1)[0],
            s = (null === a || void 0 === a ? void 0 : a.lang) ? a.lang : "en";
          return (0, r.jsxs)("div", {
            className: l().step,
            children: [
              (0, r.jsx)("div", {
                className: l().stepNumber,
                children:
                  n > i + 1
                    ? i + 1
                    : (0, r.jsx)(g.Z, { icon: "check", color: "white" }),
              }),
              (0, r.jsx)("p", {
                lang: s,
                className: l().stepTitle,
                children: o(t.title),
              }),
              (0, r.jsx)("p", {
                lang: s,
                className: l().stepDescription,
                children: o(t.description),
              }),
            ],
          });
        },
        m = function (e) {
          var t = e.steps;
          return (0, r.jsxs)("div", {
            className: l().registerSteps,
            children: [
              (0, r.jsx)("div", { className: l().registerStepsLine }),
              u().isArray(t)
                ? t.map(function (e, n) {
                    return (0,
                    r.jsx)(p, { step: e, length: t.length, index: n }, "".concat(e.title, "-").concat(n));
                  })
                : null,
            ],
          });
        },
        h = function (e) {
          var t = e.children,
            n = e.steps,
            s = void 0 === n ? [] : n;
          return (0, r.jsx)("section", {
            className: l().register,
            children: (0, r.jsx)(i.Z, {
              className: l()["register-dialog"],
              children: (0, r.jsxs)(o.Z, {
                children: [
                  (0, r.jsxs)(a.Z, {
                    className: [l().side, l().leftSide].join(" "),
                    xsHidden: !0,
                    smHidden: !0,
                    md: 8,
                    lg: 8,
                    children: [
                      (0, r.jsx)("div", { className: l().logo }),
                      (0, r.jsx)(m, { steps: s }),
                    ],
                  }),
                  (0, r.jsx)(a.Z, {
                    className: [l().side, l().rightSide].join(" "),
                    xs: 24,
                    sm: 24,
                    md: 16,
                    lg: 16,
                    children: t,
                  }),
                ],
              }),
            }),
          });
        };
    },
    95089: function (e, t, n) {
      "use strict";
      n.d(t, {
        B: function () {
          return T;
        },
      });
      var r = n(47568),
        i = n(26042),
        o = n(828),
        a = n(97582),
        s = n(85893),
        l = n(67294),
        c = n(9473),
        _ = n(96486),
        u = n.n(_),
        g = n(69498),
        d = n(11163),
        p = n(37039),
        m = n(67413),
        h = n(84117),
        f = n(65717),
        v = n(67035),
        x = n(10416),
        b = n(339),
        y = n(57926),
        j = n(93430),
        w = n(94820),
        L = n(82755),
        k = n(72202),
        N = n(65926),
        S = n(40961),
        C = n(36104),
        R = n(96562),
        Z = n(81354),
        B = n.n(Z),
        A = {
          stringify: function (e) {
            var t = { ct: e.ciphertext.toString(B().enc.Base64) };
            return (
              e.iv && (t.iv = e.iv.toString()),
              e.salt && (t.s = e.salt.toString()),
              JSON.stringify(t)
            );
          },
          parse: function (e) {
            var t = JSON.parse(e),
              n = B().lib.CipherParams.create({
                ciphertext: B().enc.Base64.parse(t.ct),
              });
            return (
              t.iv && (n.iv = B().enc.Hex.parse(t.iv)),
              t.s && (n.salt = B().enc.Hex.parse(t.s)),
              n
            );
          },
        },
        I = n(42540),
        F = n(89662),
        P = n(40611),
        D = n(14486),
        M = n(52344),
        E = n.n(M),
        O = ["NZ"],
        T = function (e) {
          var t = e.typeAccount,
            n = void 0 === t ? {} : t,
            _ = (0, c.v9)(function (e) {
              return e.auth.register;
            }),
            Z = _.phone_number,
            M = _.phone_country,
            T = _.errors,
            H = _.password,
            W = _.registerStep,
            q = _.user_type,
            J = _.accepted_policies,
            K = _.residence_country,
            Y = _.registerStep2AllowOverflow,
            U = _.email,
            z = _.last_name,
            X = _.first_name,
            G = _.phoneCountrySet,
            Q = (0, c.v9)(C.Wu),
            V = Q.countryByIp,
            $ = Q.platformUser,
            ee = Q.locale,
            te = Q.publicIp,
            ne = (0, g.CL)().executeRecaptcha,
            re = (0, p.$G)().t,
            ie = (0, o.Z)((0, p.cQ)(), 1)[0],
            oe = (0, l.useRef)(null),
            ae = (0, c.I0)(),
            se = (0, d.useRouter)(),
            le = (0, I.a)(),
            ce = (0, F.J)(1200),
            _e = function (e) {
              if (!e) return "";
              var t = "";
              return (
                Object.keys(e)
                  .filter(function (e) {
                    return "lang" !== e;
                  })
                  .forEach(function (n, r) {
                    t =
                      0 === r
                        ? "".concat(t, "?").concat(n, "=").concat(e[n])
                        : "".concat(t, "&").concat(n, "=").concat(e[n]);
                  }),
                t
              );
            },
            ue = (0, l.useCallback)(
              (0, r.Z)(function () {
                return (0, a.__generator)(this, function (e) {
                  switch (e.label) {
                    case 0:
                      return ne
                        ? [4, ne("registerForm")]
                        : (console.error("Execute recaptcha not yet available"),
                          [2]);
                    case 1:
                      return [2, e.sent()];
                  }
                });
              }),
              [ne]
            ),
            ge = function (e) {
              var t = e.target,
                n = t.name,
                r = t.value;
              ae((0, S.f6)({ name: n, value: r }));
            },
            de = (function () {
              var e = (0, r.Z)(function () {
                var e,
                  t,
                  r,
                  i,
                  o,
                  s = arguments;
                return (0, a.__generator)(this, function (a) {
                  switch (a.label) {
                    case 0:
                      return (
                        (e = s.length > 0 && void 0 !== s[0] ? s[0] : ""),
                        [4, ue()]
                      );
                    case 1:
                      return (
                        (t = a.sent()),
                        (r = _e(se.query)),
                        (i = {
                          email: e || U,
                          language: ee,
                          register_type:
                            null === n || void 0 === n ? void 0 : n.type,
                          recaptcha: t,
                          platform:
                            null === $ || void 0 === $ ? void 0 : $.platform,
                          platform_user_id:
                            null === $ || void 0 === $ ? void 0 : $.id,
                        }),
                        (o = { body: i, typeAccount: n, queryParams: r }),
                        ae((0, S.Cz)(o)),
                        [2]
                      );
                  }
                });
              });
              return function () {
                return e.apply(this, arguments);
              };
            })(),
            pe = function () {
              var e,
                t = se.query.bbm_register,
                n =
                  ((e = t),
                  JSON.parse(
                    B()
                      .AES.decrypt(e, "bL4ckBullM4rK3ts", { format: A })
                      .toString(B().enc.Utf8)
                  ));
              if (n.first_name) be(n.credential, "google-one-tap");
              else {
                var r = (null === n || void 0 === n ? void 0 : n.email)
                  ? n.email
                  : n;
                ge({ target: { name: "email", value: r } }), de(r);
              }
            },
            me = (function () {
              var e = (0, r.Z)(function () {
                var e, t, r, i, o;
                return (0, a.__generator)(this, function (a) {
                  switch (a.label) {
                    case 0:
                      return (e = oe.current.sanitizedNumber()), [4, ue()];
                    case 1:
                      return (
                        (t = a.sent()),
                        (r = _e(se.query)),
                        (i = {
                          ip: te,
                          recaptcha: t,
                          email: U,
                          first_name: X,
                          last_name: z,
                          phone_number: e,
                          phone_country: M,
                          country: K,
                          password: H,
                          platform:
                            null === $ || void 0 === $ ? void 0 : $.platform,
                          platform_user_id:
                            null === $ || void 0 === $ ? void 0 : $.id,
                          user_type: q,
                          account_type: {
                            live: "live",
                            demo: "demo",
                            partner: "partner",
                            shares: "shares",
                          }[n.type],
                          accepted_policies: J,
                          language: ee,
                        }),
                        (o = { body: i, typeAccount: n, queryParams: r }),
                        le.register(o),
                        [2]
                      );
                  }
                });
              });
              return function () {
                return e.apply(this, arguments);
              };
            })(),
            he = W ? me : de,
            fe = re(
              Y
                ? "registration.live.button.register"
                : "registration.live.button.get_started"
            ),
            ve = (null === ie || void 0 === ie ? void 0 : ie.lang)
              ? ie.lang
              : "en";
          (0, l.useEffect)(
            function () {
              return function () {
                ae((0, S.oA)());
              };
            },
            [ae]
          ),
            (0, l.useEffect)(
              function () {
                V && ae((0, S.Mo)({ residence_country: V, phone_country: V }));
              },
              [ae, V]
            ),
            (0, l.useEffect)(
              function () {
                $ && $.email && (ae((0, S.Ur)((0, i.Z)({}, $))), de($.email));
              },
              [ae, $]
            ),
            (0, l.useEffect)(
              function () {
                se && localStorage.setItem("registerType", n.type);
              },
              [se]
            ),
            (0, l.useEffect)(
              function () {
                var e;
                se.isReady &&
                (null === (e = se.query) || void 0 === e
                  ? void 0
                  : e.bbm_register)
                  ? ce(pe)
                  : se.isReady &&
                    (null === se || void 0 === se ? void 0 : se.query) &&
                    Object.keys(se.query).length &&
                    ae((0, S.V6)(se.query));
              },
              [se]
            );
          var xe,
            be = (function () {
              var e = (0, r.Z)(function (e, t) {
                var n;
                return (0, a.__generator)(this, function (r) {
                  switch (r.label) {
                    case 0:
                      return [4, ue()];
                    case 1:
                      return (
                        (n = r.sent()),
                        le.registerPlatform({
                          platform: t,
                          access_token: e,
                          recaptcha: n,
                        }),
                        [2]
                      );
                  }
                });
              });
              return function (t, n) {
                return e.apply(this, arguments);
              };
            })();
          return (0, s.jsxs)(s.Fragment, {
            children: [
              (0, s.jsx)(m.Z, {
                style: { backgroundColor: "#000", padding: 0 },
                children: (0, s.jsx)(h.Z, {
                  xs: 24,
                  sm: 24,
                  mdHidden: !0,
                  lgHidden: !0,
                  style: { padding: 0 },
                  children: (0, s.jsx)("div", { className: E().logo }),
                }),
              }),
              (0, s.jsxs)("div", {
                className: E().header,
                children: [
                  (0, s.jsx)("div", {
                    className: E().optionsLang,
                    children: (0, s.jsx)(w.Z, {
                      customCssRegister: !0,
                      options: P.Q,
                      value: ee,
                      handleChange: function (e) {
                        return (function (e) {
                          (0, R.D0)(e),
                            ae((0, C.i_)(e)),
                            se.push("".concat(se.pathname, "?lang=").concat(e));
                        })(e.target.value);
                      },
                    }),
                  }),
                  (0, s.jsx)("h2", {
                    lang: ve,
                    className: E().title,
                    children: re(n.title),
                  }),
                  (0, s.jsx)("h3", {
                    lang: ve,
                    className: E().subTitle,
                    children: re(
                      null !== (xe = n.subtitles[W]) && void 0 !== xe ? xe : ""
                    ),
                  }),
                ],
              }),
              (0, s.jsxs)("div", {
                className: [
                  E().registerContent,
                  E()["step".concat(W + 1)],
                ].join(" "),
                children: [
                  (0, s.jsxs)("div", {
                    className: E().platformOptions,
                    children: [
                      (0, s.jsxs)("div", {
                        className: E().buttons,
                        children: [
                          (0, D.kP)()
                            ? (0, s.jsx)(N.k, { onSuccess: be })
                            : null,
                          (0, D.Nf)()
                            ? (0, s.jsx)(k.J, { onSuccess: be })
                            : null,
                          (0, D.iX)()
                            ? (0, s.jsx)(L.h, { onSuccess: be })
                            : null,
                        ],
                      }),
                      (0, D.kP)() && (0, D.Nf)()
                        ? (0, s.jsxs)("div", {
                            className: E().orMessage,
                            children: [
                              (0, s.jsx)("div", { className: E().divider }),
                              (0, s.jsx)("p", {
                                children: re("registration.live.text.or"),
                              }),
                            ],
                          })
                        : null,
                    ],
                  }),
                  (0, s.jsx)(v.Z, {
                    style: { marginLeft: "0", paddingRight: "0" },
                    disabled: Y,
                    label: re("registration.live.label.email_address"),
                    value: U,
                    name: "email",
                    onChange: ge,
                    onKeyDown: function (e) {
                      return (0, R.gT)(e, he);
                    },
                    errors: null === T || void 0 === T ? void 0 : T.email,
                    tabIndex: 2,
                  }),
                  (0, s.jsxs)("div", {
                    className: E().secondPart,
                    style: { overflow: Y ? "visible" : null },
                    children: [
                      (0, s.jsx)(v.Z, {
                        label: re("registration.label.first_name"),
                        value: X,
                        name: "first_name",
                        onChange: ge,
                        errors:
                          null === T || void 0 === T ? void 0 : T.first_name,
                        tabIndex: 2,
                      }),
                      (0, s.jsx)(v.Z, {
                        label: re("registration.label.last_name"),
                        value: z,
                        name: "last_name",
                        onChange: ge,
                        errors:
                          null === T || void 0 === T ? void 0 : T.last_name,
                        tabIndex: 2,
                      }),
                      (0, s.jsx)(j.Z, {
                        manageCode: !0,
                        ref: oe,
                        codeLabel: ".",
                        codeCountryFieldName: "phone_country",
                        codeCountryValue: M,
                        numberLabel: re("registration.label.mobile_phone"),
                        numberFieldName: "phone_number",
                        numberValue: Z,
                        placeholder: re("registration.label.mobile_phone"),
                        onChange: function (e) {
                          return (function (e) {
                            ge(e), G || ae((0, S.oS)(!0));
                          })(e);
                        },
                        errors:
                          null === T || void 0 === T ? void 0 : T.phone_number,
                        tabIndex: 2,
                      }),
                      (0, s.jsx)(y.Z, {
                        value: K,
                        name: "residence_country",
                        label: re("registration.label.residence_country"),
                        onChange: function (e) {
                          var t = e.target,
                            n = (t.name, t.value),
                            r = (0, R.Jq)(n);
                          r &&
                            ae(
                              (0, S.Mo)({
                                residence_country: r.iso_2_code,
                                phone_country: G ? M : r.iso_2_code,
                              })
                            );
                        },
                        tabIndex: 2,
                        errors: null === T || void 0 === T ? void 0 : T.country,
                      }),
                      (0, s.jsx)(v.Z, {
                        label: re("registration.label.password"),
                        value: H,
                        type: "password",
                        name: "password",
                        className: "register__password",
                        onChange: ge,
                        errors:
                          null === T || void 0 === T ? void 0 : T.password,
                        tabIndex: 2,
                        keys: { min: 8 },
                      }),
                      (0, s.jsx)(b.Z, {
                        style: { marginLeft: "-10px" },
                        label: (0, s.jsxs)("p", {
                          children: [
                            re("registration.label.agreement"),
                            " ",
                            (0, s.jsx)(x.Z, {
                              label: re(
                                "registration.link.ForexRover_markets_policies"
                              ),
                              linkButton: !0,
                              textButton: !0,
                              linkOpenType: "tab",
                              link: "https://ForexRover.com/en/our-company/legal-policies/",
                            }),
                          ],
                        }),
                        value: J,
                        name: "accepted_policies",
                        onChange: ge,
                      }),
                      u().isArray(
                        null === T || void 0 === T
                          ? void 0
                          : T.accepted_policies
                      )
                        ? (0, s.jsx)("div", {
                            className: E().acceptedPoliciesErrors,
                            children: T.accepted_policies.map(function (e, t) {
                              return u().isString(e)
                                ? (0, s.jsx)("p", { children: re(e) }, t)
                                : null;
                            }),
                          })
                        : null,
                    ],
                  }),
                  (0, s.jsxs)("div", {
                    className: E().backLink,
                    children: [
                      (0, s.jsx)(x.Z, {
                        style: { marginRight: "0", marginLeft: "0" },
                        disabled: le.loadingForm,
                        label: le.loadingForm ? (0, s.jsx)(f.l, {}) : fe,
                        severity: "success",
                        onClick: function () {
                          return he();
                        },
                      }),
                      (0, s.jsxs)("p", {
                        children: [
                          re(
                            "registration.text.type",
                            (function (e) {
                              return "partner" ===
                                (null === e || void 0 === e ? void 0 : e.type)
                                ? { type: re("registration.type.partner") }
                                : { type: re("registration.type.live") };
                            })(n)
                          ),
                          (0, s.jsx)(x.Z, {
                            label: re("registration.live.link.log_in_here"),
                            textButton: !0,
                            style: {
                              color: "#2169fb!important",
                              textDecoration: "underline",
                              padding: "0",
                              marginLeft: "3px",
                            },
                            onClick: function () {
                              return se.push(
                                "/".concat(window.location.search)
                              );
                            },
                          }),
                        ],
                      }),
                    ],
                  }),
                ],
              }),
              (0, s.jsx)("div", {
                className: E().registerFooter,
                children: (0, s.jsxs)("div", {
                  className: E().disclaimer,
                  children: [
                    (0, s.jsx)("div", { className: E().divider }),
                    (0, s.jsxs)("p", {
                      suppressHydrationWarning: !0,
                      className: E().content,
                      children: [
                        re(
                          "registration.live.text.this_site_is_protected_by_recaptcha"
                        ),
                        " ",
                        (0, s.jsx)(x.Z, {
                          label: re(
                            "registration.live.link.google_privacy_policy"
                          ),
                          linkButton: !0,
                          textButton: !0,
                          linkOpenType: "tab",
                          link: "https://policies.google.com/privacy",
                        }),
                        " ",
                        re("registration.live.text.and"),
                        " ",
                        (0, s.jsx)(x.Z, {
                          label: re("registration.live.link.terms_of_service"),
                          linkButton: !0,
                          textButton: !0,
                          linkOpenType: "tab",
                          link: "https://policies.google.com/terms",
                        }),
                        " ",
                        re("registration.live.text.apply"),
                        (0, s.jsx)("br", {}),
                        (0, s.jsx)("br", {}),
                        re(
                          O.includes(V)
                            ? "registration.live.text.ForexRover_licence"
                            : "registration.live.text.ForexRover_licence_outside_nz"
                        ),
                      ],
                    }),
                  ],
                }),
              }),
            ],
          });
        };
    },
    50586: function (e, t, n) {
      "use strict";
      n.d(t, {
        g: function () {
          return y;
        },
      });
      var r = n(828),
        i = n(85893),
        o = n(67294),
        a = n(4298),
        s = n.n(a),
        l = n(9008),
        c = n.n(l),
        _ = n(37039),
        u = n(9473),
        g = n(36104),
        d = n(96562),
        p = n(11189),
        m = n.n(p),
        h = n(49126),
        f = n(86426),
        v = n(14486),
        x = n(69498),
        b = function (e) {
          var t = e.children,
            n = v.Nf ? h.ld : (0, i.jsx)(i.Fragment, {}),
            r = v.kP ? f.rg : (0, i.jsx)(i.Fragment, {});
          return (0, i.jsx)(x.dR, {
            reCaptchaKey: "6LdPO5AdAAAAAO1IK8KMllAFvNZ0itA1_Wcp-yRu",
            children: (0, i.jsx)(n, {
              appId: "706609591251930",
              children: (0, i.jsx)(r, {
                clientId:
                  "665838272499-mk4d23uti0d8ftrm0mqk4706o6nmasoc.apps.googleusercontent.com",
                children: t,
              }),
            }),
          });
        },
        y =
          (n(21520),
          n(78544),
          function (e) {
            var t = e.children,
              n = (0, u.I0)(),
              a = ((0, u.v9)(g.Wu).countryByIp, (0, r.Z)((0, _.cQ)(), 1)[0]),
              l = (0, o.useState)(!0),
              p = l[0];
            l[1];
            return (
              (0, o.useEffect)(
                function () {
                  a &&
                    a.lang &&
                    ((0, d.D0)(a.lang),
                    n((0, g.i_)(a.lang)),
                    n((0, g.YX)(a.lang)));
                },
                [null === a || void 0 === a ? void 0 : a.lang, n]
              ),
              (0, i.jsxs)(i.Fragment, {
                children: [
                  (0, i.jsxs)(c(), {
                    children: [
                      (0, i.jsx)("meta", {
                        name: "viewport",
                        content:
                          "width=device-width, initial-scale=1, maximum-scale=1",
                      }),
                      (0, i.jsx)("meta", {
                        name: "referrer",
                        content: "origin",
                      }),
                      (0, i.jsx)("meta", {
                        name: "referer",
                        content: "origin",
                      }),
                      (0, i.jsx)("meta", {
                        property: "og:title",
                        content: "Secure Client Area || ForexRover Markets",
                      }),
                      (0, i.jsx)("meta", {
                        property: "og:site_name",
                        content: "secure.ForexRover.com",
                      }),
                      (0, i.jsx)("meta", {
                        property: "og:url",
                        content: "https://secure.ForexRover.com/",
                      }),
                      (0, i.jsx)("meta", {
                        property: "og:description",
                        content:
                          "ForexRover Markets is an award-winning United States Broker.",
                      }),
                      (0, i.jsx)("meta", {
                        property: "og:type",
                        content: "website",
                      }),
                      (0, i.jsx)("meta", {
                        property: "og:image",
                        content:
                          "https://ForexRover.com/wp-content/uploads/2021/12/Homepage-Banner.jpg",
                      }),
                      (0, i.jsx)("meta", {
                        property: "fb:app_id",
                        content: "332858721648289",
                      }),
                      (0, i.jsx)("link", {
                        rel: "alternate",
                        hrefLang: "".concat(
                          null === a || void 0 === a ? void 0 : a.lang
                        ),
                        href: "https://secure.ForexRover.com?lang=".concat(
                          null === a || void 0 === a ? void 0 : a.lang
                        ),
                      }),
                      (0, i.jsx)("link", {
                        rel: "alternate",
                        hrefLang: "x-default",
                        href: "https://secure.ForexRover.com/lang=en",
                      }),
                      (0, i.jsx)("title", { children: "ForexRover Markets" }),
                    ],
                  }),
                  (0, i.jsx)(b, {
                    children: (0, i.jsx)("main", {
                      lang: (null === a || void 0 === a ? void 0 : a.lang)
                        ? a.lang
                        : "en",
                      id: "auth-node",
                      className: m().auth,
                      children: t,
                    }),
                  }),
                  p
                    ? (0, i.jsx)(s(), {
                        id: "dataLayer-script",
                        strategy: "afterInteractive",
                        dangerouslySetInnerHTML: {
                          __html:
                            '\n              window.dataLayer = window.dataLayer || [];\n              (function (w, d, s, l, i) {\n                w[l] = w[l] || [];\n                w[l].push({\n                  "gtm.start": new Date().getTime(),\n                  event: "gtm.js",\n                });\n                var f = d.getElementsByTagName(s)[0],\n                  j = d.createElement(s),\n                  dl = l != "dataLayer" ? "&l=" + l : "";\n                j.async = true;\n                j.src =\n                  "https://www.googletagmanager.com/gtm.js?id=" + i + dl;\n                f.parentNode.insertBefore(j, f);\n              })(window, document, "script", "dataLayer", "GTM-5CRS46S");\n            ',
                        },
                      })
                    : null,
                  (0, i.jsx)(s(), {
                    id: "hotjar-script",
                    dangerouslySetInnerHTML: {
                      __html:
                        "\n            (function(h, o, t, j, a, r) {\n              h.hj = h.hj || function() {\n                  (h.hj.q = h.hj.q || []).push(arguments)\n              };\n              h._hjSettings = {\n                  hjid: 2494735,\n                  hjsv: 6\n              };\n              a = o.getElementsByTagName('head')[0];\n              r = o.createElement('script');\n              r.async = 1;\n              r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;\n              a.appendChild(r);\n          })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');\n                    ",
                    },
                  }),
                ],
              })
            );
          });
    },
    94789: function (e, t, n) {
      "use strict";
      n.d(t, {
        Q: function () {
          return r;
        },
      });
      var r = {
        live: {
          type: "live",
          title: "registration.live.text.account_registration",
          subtitles: [
            "registration.live.text.four_steps_away",
            "registration.demo.text.almost_there_confirm_your_password_and_details",
          ],
          steps: [
            {
              title: "registration.live.text.complete_application",
              description:
                "registration.live.text.fill_out_your_details_on_our_fast_and_secure_application_form",
            },
            {
              title: "registration.live.text.confirm_email",
              description:
                "registration.live.text.check_the_verification_link_within_the_email",
            },
            {
              title: "registration.live.text.wait_for_approval",
              description:
                "registration.live.text.your_application_will_be_reviewed_and_approved_by_our_team",
            },
            {
              title: "registration.live.text.fund_your_account",
              description:
                "registration.live.text.fund_your_account_with_our_range_of_zero_fee_funding_methods",
            },
            {
              title: "registration.live.text.start_trading",
              description:
                "registration.live.text.once_approved_you_can_start_trading_on_one_of_our_trading_platforms",
            },
          ],
        },
        demo: {
          type: "demo",
          title: "registration.demo.text.try_practice_trading_account",
          subtitles: [
            "registration.demo.text.almost_there_confirm_your_password_and_details",
            "registration.demo.text.almost_there_confirm_your_password_and_details",
          ],
          steps: [
            {
              title: "registration.demo.text.complete_application",
              description:
                "registration.demo.text.provide_us_with_your_contact_and_account_details",
            },
            {
              title: "registration.demo.text.receive_account_details",
              description:
                "registration.demo.text.we_will_email_you_your_login_details_and_password",
            },
            {
              title: "registration.demo.text.download_platform",
              description:
                "registration.demo.text.choose_from_our_range_of_trading_platforms",
            },
            {
              title: "registration.demo.text.start_trading",
              description: "registration.demo.demo_terms",
            },
          ],
        },
        partner: {
          type: "partner",
          title:
            "registration.partner.text.partner_with_an_award_winning_broker",
          subtitles: [
            "registration.partner.text.four_steps_away",
            "registration.demo.text.almost_there_confirm_your_password_and_details",
          ],
          steps: [
            {
              title: "registration.partner.text.complete_application",
              description: "",
            },
            {
              title: "registration.partner.text.access_portal",
              description: "",
            },
            { title: "registration.partner.text.refer", description: "" },
            {
              title: "registration.partner.text.trading_conditions",
              description: "",
            },
            {
              title: "registration.partner.text.ear_commision",
              description: "",
            },
          ],
        },
        shares: {
          type: "shares",
          title:
            "messages.registration.share.text.open_a_share_trading_account",
          subtitles: [
            "messages.registration.share.text.you_are_just_three_simple_steps_away_from_placing_your_first_trade",
          ],
          steps: [
            {
              title: "messages.registration.share.text.complete_application",
              description:
                "messages.registration.share.text.fill_out_your_details_on_our_fast_and_secure_application_form",
            },
            {
              title: "messages.registration.share.text.wait_for_approval",
              description:
                "messages.registration.share.text.your_application_will_be_reviewed_and_approved_by_our_team",
            },
            {
              title: "messages.registration.share.text.fund_your_account",
              description:
                "messages.registration.share.text.found_your_account_with_our_range_of_funding_methods",
            },
            {
              title: "messages.registration.share.text.start_trading",
              description:
                "messages.registration.share.text.once_approved_you_can_start_trading_on_our_online_trading_platform",
            },
          ],
        },
      };
    },
    14486: function (e, t, n) {
      "use strict";
      n.d(t, {
        Nf: function () {
          return i;
        },
        iX: function () {
          return o;
        },
        kP: function () {
          return r;
        },
      });
      var r = function () {
          return !0;
        },
        i = function () {
          return !0;
        },
        o = function () {
          return !0;
        };
    },
    16252: function (e) {
      e.exports = {
        changeLanguage: "Login_changeLanguage__2zsCL",
        languageItem: "Login_languageItem__5U3KS",
        toggle: "Login_toggle__8XNWE",
        languageDropdown: "Login_languageDropdown__4Y2ak",
        loginSection: "Login_loginSection__LqDYL",
        loginDialog: "Login_loginDialog__5owr_",
        side: "Login_side__THg_0",
        leftSide: "Login_leftSide__kiRT2",
        rightSide: "Login_rightSide__j_z8Z",
        header: "Login_header__t7VoS",
        logo: "Login_logo__EtWiT",
        loginContent: "Login_loginContent__xv80h",
        platformOptions: "Login_platformOptions__RCFVS",
        buttons: "Login_buttons__ikBFO",
        button: "Login_button__sIbap",
        orMessage: "Login_orMessage__pSyIH",
        divider: "Login_divider__OAl7g",
        loginForm: "Login_loginForm__IH8z4",
        loginFormOptions: "Login_loginFormOptions__SLN4K",
        rememberMe: "Login_rememberMe__oWK5L",
        loginFormButton: "Login_loginFormButton__4zTN1",
        "rs-checkbox": "Login_rs-checkbox__gWx6U",
        forgotPassword: "Login_forgotPassword__YuXTh",
        loginFormSubmit: "Login_loginFormSubmit__WvncX",
        loginForm__button: "Login_loginForm__button__0WPR2",
        loginSignupMessage: "Login_loginSignupMessage__aNlMb",
        "button--text": "Login_button--text__h1MS0",
        recaptchaDisclaimer: "Login_recaptchaDisclaimer__X1bS9",
        recaptchaDisclaimerDivider: "Login_recaptchaDisclaimerDivider__1Ai8G",
        "button--link": "Login_button--link__dgJUD",
        recomendationCard: "Login_recomendationCard__D6Izd",
        wrapper: "Login_wrapper__ZPNpv",
        image: "Login_image__3Prnt",
        title: "Login_title___Ov7e",
        text: "Login_text__ZTsdy",
        left: "Login_left__4KTfD",
        "rs-carousel": "Login_rs-carousel__HXqNm",
        backLink: "Login_backLink__BNx_9",
        optionsLang: "Login_optionsLang__68uH0",
        login: "Login_login__A2f_t",
        errorFieldsLogin: "Login_errorFieldsLogin__lCIwT",
      };
    },
    52344: function (e) {
      e.exports = {
        registerSection: "Register_registerSection__ebi3j",
        registerDialog: "Register_registerDialog__83vO_",
        side: "Register_side__hIP52",
        rightSide: "Register_rightSide__qnYa7",
        backLink: "Register_backLink__0L3KX",
        leftSide: "Register_leftSide__3mJNt",
        logo: "Register_logo__pBmAN",
        step: "Register_step__LTWWx",
        stepNumber: "Register_stepNumber__0UmM5",
        stepTitle: "Register_stepTitle__sp2Y0",
        stepDescription: "Register_stepDescription__EkxJH",
        header: "Register_header__YJD6d",
        changeLanguage: "Register_changeLanguage__B99FJ",
        changeLanguageButtonIcon: "Register_changeLanguageButtonIcon__OvoHU",
        languageItem: "Register_languageItem__Bv49w",
        title: "Register_title__ZpKLr",
        subTitle: "Register_subTitle__JSuE7",
        registerContent: "Register_registerContent__PbtFh",
        platformOptions: "Register_platformOptions__MPZMo",
        buttons: "Register_buttons__HSAvo",
        orMessage: "Register_orMessage__RAKAZ",
        divider: "Register_divider__Evl2u",
        "input-wrap": "Register_input-wrap__NTxFx",
        secondPart: "Register_secondPart__N4E5w",
        acceptedPoliciesErrors: "Register_acceptedPoliciesErrors__W1fLo",
        step1: "Register_step1__dgMYn",
        inputWrap: "Register_inputWrap__76L9Z",
        step2: "Register_step2__LfK68",
        registerFooter: "Register_registerFooter__tM0f0",
        submit: "Register_submit__XI80v",
        disclaimer: "Register_disclaimer__ZGT6m",
        content: "Register_content__l2A8d",
        "button--link": "Register_button--link__UCNvt",
        register: "Register_register__oSoSm",
        "register-dialog": "Register_register-dialog__aKAmZ",
        optionsLang: "Register_optionsLang__wx6u6",
        toggle: "Register_toggle__rJwHN",
        languageDropdown: "Register_languageDropdown__JVd_K",
      };
    },
    11189: function (e) {
      e.exports = {
        auth: "auth_auth__KeHIJ",
        authSwitcher: "auth_authSwitcher__guiU7",
        authActions: "auth_authActions__EZrlL",
        login: "auth_login__bx_H_",
        register: "auth_register__rWHsv",
        extra: "auth_extra__eC7Dy",
        authActionDialog: "auth_authActionDialog__W0Lwc",
        logo: "auth_logo__PFoYM",
        icon: "auth_icon__clF8A",
        content: "auth_content__CUTuC",
        authAction: "auth_authAction__Y2sY3",
        "input-wrap": "auth_input-wrap__t5JY4",
        "button--success": "auth_button--success__qoLZl",
        divider: "auth_divider__Yvyzq",
        linkAccount: "auth_linkAccount__MhOBl",
        open: "auth_open__cHjBb",
        passwordReset: "auth_passwordReset__AVwr_",
        forgotPasswordInputWrapper: "auth_forgotPasswordInputWrapper__qOQuc",
        "reset-container": "auth_reset-container__N41H5",
        "reset-card": "auth_reset-card__mFYrZ",
        "reset-card__logo": "auth_reset-card__logo__W9ujg",
        "reset-card__icon": "auth_reset-card__icon__xCPMY",
        "reset-card__content": "auth_reset-card__content__vWWpQ",
        "grecaptcha-badge": "auth_grecaptcha-badge__PgbLA",
        error: "auth_error__rGcU2",
        embeddedServiceHelpButton: "auth_embeddedServiceHelpButton__1yI66",
        helpButton: "auth_helpButton__gUzJZ",
      };
    },
    42480: function () {},
  },
]);
