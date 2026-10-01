<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>تسجيل الدخول · 2026 Redesign Preview</title>
    <script>
        ! function() {
            try {
                var t = localStorage.getItem("dash26-theme"),
                    e = window.matchMedia("(prefers-color-scheme: dark)").matches;

                document.documentElement.setAttribute(
                    "data-theme",
                    t || (e ? "dark" : "light")
                );
            } catch (t) {
                document.documentElement.setAttribute("data-theme", "light");
            }
        }();
    </script>

    <script defer src="{{ asset('js/runtime.js') }}"></script>
    <script defer src="{{ asset('js/vendor-fullcalendar.js') }}"></script>
    <script defer src="{{ asset('js/vendor-chartjs.js') }}"></script>
    <script defer src="{{ asset('js/vendors.js') }}"></script>
    <script defer src="{{ asset('js/2026.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
</head>

<body>
    <div class="auth-shell">
        <main class="auth-main">
            <div class="auth-card">

                <h2>مرحباً بك مجدداً</h2>

                <p class="sub">
                    قم بتسجيل الدخول إلى Dinevo لإدارة عمليات مطعمك بكل سهولة.
                </p>

                <form class="auth-form" method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="field">
                        <label class="field-label" for="email">
                            Email
                        </label>

                        <div class="input-icon">
                            <span class="ico">
                                <svg viewBox="0 0 24 24">
                                    <rect x="3" y="5" width="18" height="14" rx="2" />
                                    <path d="m3 7 9 6 9-6" />
                                </svg>
                            </span>

                            <input id="email" name="email" class="input" type="email"
                                value="{{ old('email') }}" placeholder="you@company.com" autocomplete="email" required>
                        </div>

                        @error('email')
                            <span class="error">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="field">

                        <div class="field-row">
                            <label class="field-label" for="password">
                                Password
                            </label>

                            <a href="#">
                                نسيت كلمة المرور؟
                            </a>
                        </div>

                        <div class="input-icon">
                            <span class="ico">
                                <svg viewBox="0 0 24 24">
                                    <rect x="3" y="11" width="18" height="11" rx="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                            </span>

                            <input id="password" name="password" class="input" type="password" placeholder="••••••••"
                                autocomplete="current-password" required>
                        </div>

                        @error('password')
                            <span class="error">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    {{-- Remember Me --}}
                    <label class="check">
                        <input type="checkbox" name="remember" value="1">

                        <span class="box"></span>

                        تذكرني لمدة 30 يوماً
                    </label>

                    {{-- Submit --}}
                    <button class="btn btn--primary auth-submit" type="submit">
                        تسجيل الدخول

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>
                    </button>

                </form>

            </div>
        </main>
    </div>
</body>

</html>
