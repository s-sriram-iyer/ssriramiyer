<footer class="footer">
  <div class="container">&copy; 2026 Sriram Iyer</div>
</footer>
<button class="scroll-top" aria-label="Scroll to top" title="Scroll to top">
  <svg
    aria-hidden="true"
    xmlns="http://www.w3.org/2000/svg"
    width="18"
    height="18"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
  >
    <polyline points="18 15 12 9 6 15" />
  </svg>
</button>
<script>
  (function () {
    var toggle = document.querySelector(".theme-toggle");
    if (toggle) {
      toggle.addEventListener("click", function () {
        var next =
          document.documentElement.dataset.theme === "dark"
            ? "light"
            : "dark";
        document.documentElement.dataset.theme = next;
        localStorage.setItem("theme", next);
      });
    }
    var scrollBtn = document.querySelector(".scroll-top");
    if (scrollBtn) {
      window.addEventListener(
        "scroll",
        function () {
          scrollBtn.classList.toggle("visible", window.scrollY > 400);
        },
        { passive: true },
      );
      scrollBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    }
    var header = document.getElementById("site-header");
    if (header) {
      window.addEventListener(
        "scroll",
        function () {
          header.classList.toggle("scrolled", window.scrollY > 10);
        },
        { passive: true },
      );
    }
    if (typeof CSS === "undefined" || !CSS.supports("animation-timeline", "scroll()")) {
      document.documentElement.classList.add("no-scroll-timeline");
      var bar = document.querySelector(".progress-bar");
      if (bar) {
        window.addEventListener(
          "scroll",
          function () {
            var h =
              document.documentElement.scrollHeight - window.innerHeight;
            bar.style.transform =
              "scaleX(" + (h > 0 ? window.scrollY / h : 0) + ")";
          },
          { passive: true },
        );
      }
    }
  })();
</script>