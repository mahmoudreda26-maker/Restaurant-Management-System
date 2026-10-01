<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>لوحة التحكم · معاينة تصميم 2026</title>
  <script>
    !(function () {
      try {
        var t = localStorage.getItem("dash26-theme"),
          e = window.matchMedia("(prefers-color-scheme: dark)").matches;
        document.documentElement.setAttribute(
          "data-theme",
          t || (e ? "dark" : "light"),
        );
      } catch (t) {
        document.documentElement.setAttribute("data-theme", "light");
      }
    })();
  </script>
<script defer src="{{ asset('js/runtime.js') }}"></script>
<script defer src="{{ asset('js/vendor-fullcalendar.js') }}"></script>
<script defer src="{{ asset('js/vendor-chartjs.js') }}"></script>
<script defer src="{{ asset('js/vendors.js') }}"></script>
<script defer src="{{ asset('js/2026.js') }}"></script>

<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/rtl.css') }}" rel="stylesheet">
</head>