window.addEventListener("load", () => {
  const t = document.querySelectorAll("[data-hs-theme-click-value]");
  let e = document.querySelector("html");
  t.forEach((r) => {
    r.addEventListener("click", () => {
      e.classList.contains("dark")
        ? (e.classList.remove("dark"),
          localStorage.removeItem("layout-theme"),
          localStorage.removeItem("ynexdarktheme"),
          localStorage.removeItem("ynexMenu"),
          localStorage.removeItem("ynexHeader"),
          localStorage.removeItem("darkBgRGB"),
          localStorage.removeItem("bodyBgRGB"),
          e.setAttribute("data-menu-styles", "dark"),
          e.setAttribute("data-header-styles", "light"),
          e.style.removeProperty("--body-bg"),
          e.style.removeProperty("--dark-bg"),
          e.style.removeProperty("--body-bg-rgb"),
          e.style.removeProperty("--body-bg-rgb2"),
          e.style.removeProperty("--light"),
          e.style.removeProperty("--form-control-bg"),
          e.style.removeProperty("--input-border"),
          localStorage.getItem("ynexlayout") == "horizontal" &&
            e.setAttribute("data-menu-styles", "light"),
          document.querySelector("#hs-overlay-switcher") &&
            (document.getElementById("switcher-light-theme").checked = !0))
        : (document.querySelector("#hs-overlay-switcher") &&
            (document.getElementById("switcher-dark-theme").checked = !0),
          e.setAttribute("class", "dark"),
          localStorage.setItem("layout-theme", "dark"),
          e.setAttribute("data-header-styles", "dark"),
          e.setAttribute("data-menu-styles", "dark"),
          localStorage.removeItem("ynexMenu"),
          localStorage.removeItem("ynexHeader"),
          localStorage.setItem("ynexdarktheme", !0),
          localStorage.removeItem("ynexlighttheme"),
          localStorage.setItem("ynexMenu", "dark"),
          localStorage.setItem("ynexHeader", "dark"));
    });
  });
});
