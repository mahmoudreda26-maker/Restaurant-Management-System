@extends('layouts.app')

@section('content')
    <main class="content">

        <!-- =========================
             Hero
        ========================== -->
        <section class="hero">

            <div class="hero-text">

                <span class="eyebrow">
                    الخميس · ٢٣ أبريل · ٢٠٢٦
                </span>

                <h1 class="hero-title">
                    مرحباً بك مجدداً،
                    <span class="accent">فريق المطبخ</span>
                </h1>

                <p class="hero-sub">
                    إليك حالة المطبخ والطلبات الحالية.
                    يمكنك متابعة الطلبات الجديدة وتحديث حالة
                    الطلبات أثناء التحضير.
                </p>

            </div>

            <div class="hero-actions">

                <button class="btn btn--ghost">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 4v6h6M20 20v-6h-6" />
                        <path d="M20 9a8 8 0 0 0-14-4L4 10M4 15a8 8 0 0 0 14 4l2-5" />
                    </svg>

                    تحديث الطلبات

                </button>

                <button class="btn btn--primary">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 5v14M5 12h14" />
                    </svg>

                    الطلبات الجديدة

                </button>

            </div>

        </section>


        <!-- =========================
             KPI Cards
        ========================== -->

        <section class="kpi-grid">


            <!-- New -->
            <article class="kpi-card c-danger">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon danger">

                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 2" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            طلبات جديدة
                        </div>

                    </div>

                    <span class="kpi-pill down">
                        تحتاج تحضير
                    </span>

                </div>

                <div class="kpi-value">
                    6
                </div>

                <div class="kpi-compare">
                    <strong>3</strong>
                    منذ أقل من 5 دقائق
                    <span class="sep">·</span>
                    <strong>3</strong>
                    أقدم
                </div>

            </article>


            <!-- Preparing -->
            <article class="kpi-card c-primary">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon primary">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 4h16v16H4z" />
                                <path d="M8 8h8M8 12h6M8 16h4" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            قيد التحضير
                        </div>

                    </div>

                    <span class="kpi-pill flat">
                        نشط
                    </span>

                </div>

                <div class="kpi-value">
                    11
                </div>

                <div class="kpi-compare">
                    <strong>7</strong>
                    طلبات رئيسية
                    <span class="sep">·</span>
                    <strong>4</strong>
                    مشروبات
                </div>

            </article>


            <!-- Ready -->
            <article class="kpi-card c-success">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon success">

                            <svg viewBox="0 0 24 24">
                                <path d="M5 12l4 4L19 6" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            جاهزة للتقديم
                        </div>

                    </div>

                    <span class="kpi-pill up">
                        جاهز
                    </span>

                </div>

                <div class="kpi-value">
                    5
                </div>

                <div class="kpi-compare">
                    <strong>3</strong>
                    تنتظر الـWaiter
                    <span class="sep">·</span>
                    <strong>2</strong>
                    جديدة
                </div>

            </article>


            <!-- Preparation Time -->
            <article class="kpi-card c-purple">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon purple">

                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 2" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            متوسط التحضير
                        </div>

                    </div>

                    <span class="kpi-pill flat">
                        اليوم
                    </span>

                </div>

                <div class="kpi-value">
                    18
                    <sup>دقيقة</sup>
                </div>

                <div class="kpi-compare">
                    مقارنة بـ
                    <strong>21 دقيقة</strong>
                    <span class="sep">·</span>
                    أمس
                </div>

            </article>

        </section>


        <div class="grid">


            <!-- Kitchen Status -->
            <section class="col-12 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            التشغيل
                        </span>

                        <h2 class="card-title">
                            حالة المطبخ
                        </h2>

                    </div>

                    <span class="card-action">
                        الخميس · اليوم
                    </span>

                </div>


                <div class="sv-regions">


                    <div class="sv-region">

                        <div class="sv-region-head">

                            <span class="marker"
                                style="background:var(--danger)">
                            </span>

                            طلبات جديدة

                        </div>

                        <div class="sv-region-value">

                            6

                            <span class="pct">
                                27%
                            </span>

                        </div>

                        <div class="sv-region-bar">

                            <div class="sv-region-bar-fill"
                                style="width:27%;background:var(--danger)">
                            </div>

                        </div>

                    </div>


                    <div class="sv-region">

                        <div class="sv-region-head">

                            <span class="marker"
                                style="background:var(--purple)">
                            </span>

                            قيد التحضير

                        </div>

                        <div class="sv-region-value">

                            11

                            <span class="pct">
                                50%
                            </span>

                        </div>

                        <div class="sv-region-bar">

                            <div class="sv-region-bar-fill"
                                style="width:50%;background:var(--purple)">
                            </div>

                        </div>

                    </div>


                    <div class="sv-region">

                        <div class="sv-region-head">

                            <span class="marker"
                                style="background:var(--success)">
                            </span>

                            جاهزة

                        </div>

                        <div class="sv-region-value">

                            5

                            <span class="pct">
                                23%
                            </span>

                        </div>

                        <div class="sv-region-bar">

                            <div class="sv-region-bar-fill"
                                style="width:23%;background:var(--success)">
                            </div>

                        </div>

                    </div>

                </div>


                <div class="sv-divider"></div>


                <div class="sv-radials">


                    <div class="sv-radial">

                        <div class="sv-radial-chart">

                            <svg viewBox="0 0 80 80">

                                <circle class="radial-track"
                                    cx="40" cy="40" r="32" />

                                <circle class="radial-fill success"
                                    cx="40" cy="40" r="32"
                                    stroke-dasharray="201.06"
                                    stroke-dashoffset="35" />

                            </svg>

                            <span class="pct">
                                82%
                            </span>

                        </div>

                        <div class="sv-radial-text">

                            <div class="sv-radial-name">
                                كفاءة المطبخ
                            </div>

                            <div class="sv-radial-caption">
                                خلال اليوم
                            </div>

                        </div>

                    </div>


                    <div class="sv-radial">

                        <div class="sv-radial-chart">

                            <svg viewBox="0 0 80 80">

                                <circle class="radial-track"
                                    cx="40" cy="40" r="32" />

                                <circle class="radial-fill info"
                                    cx="40" cy="40" r="32"
                                    stroke-dasharray="201.06"
                                    stroke-dashoffset="55" />

                            </svg>

                            <span class="pct">
                                73%
                            </span>

                        </div>

                        <div class="sv-radial-text">

                            <div class="sv-radial-name">
                                سرعة التحضير
                            </div>

                            <div class="sv-radial-caption">
                                مقارنة بالهدف
                            </div>

                        </div>

                    </div>


                    <div class="sv-radial">

                        <div class="sv-radial-chart">

                            <svg viewBox="0 0 80 80">

                                <circle class="radial-track"
                                    cx="40" cy="40" r="32" />

                                <circle class="radial-fill warning"
                                    cx="40" cy="40" r="32"
                                    stroke-dasharray="201.06"
                                    stroke-dashoffset="20" />

                            </svg>

                            <span class="pct">
                                90%
                            </span>

                        </div>

                        <div class="sv-radial-text">

                            <div class="sv-radial-name">
                                الطلبات المكتملة
                            </div>

                            <div class="sv-radial-caption">
                                بدون تأخير
                            </div>

                        </div>

                    </div>

                </div>

            </section>


            <!-- New Orders -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            جديد
                        </span>

                        <h2 class="card-title">
                            الطلبات الجديدة
                        </h2>

                    </div>

                    <a class="card-action" href="#">
                        عرض الكل
                    </a>

                </div>


                <table class="table">

                    <thead>

                        <tr>
                            <th>الطلب</th>
                            <th>الطاولة</th>
                            <th>الوقت</th>
                            <th>الحالة</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td class="cell-name">#1048</td>
                            <td>Table 08</td>
                            <td class="cell-date">10:35 م</td>
                            <td>
                                <span class="tag t-unavail">
                                    جديد
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1049</td>
                            <td>Table 11</td>
                            <td class="cell-date">10:31 م</td>
                            <td>
                                <span class="tag t-unavail">
                                    جديد
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1050</td>
                            <td>Table 02</td>
                            <td class="cell-date">10:27 م</td>
                            <td>
                                <span class="tag t-unavail">
                                    جديد
                                </span>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </section>


            <!-- Preparing Orders -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            التحضير
                        </span>

                        <h2 class="card-title">
                            الطلبات قيد التجهيز
                        </h2>

                    </div>

                    <a class="card-action" href="#">
                        عرض الكل
                    </a>

                </div>


                <table class="table">

                    <thead>

                        <tr>
                            <th>الطلب</th>
                            <th>الطاولة</th>
                            <th>منذ</th>
                            <th>الحالة</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td class="cell-name">#1046</td>
                            <td>Table 12</td>
                            <td>12 دقيقة</td>
                            <td>
                                <span class="tag t-new">
                                    تحضير
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1045</td>
                            <td>Table 05</td>
                            <td>18 دقيقة</td>
                            <td>
                                <span class="tag t-new">
                                    تحضير
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1042</td>
                            <td>Table 07</td>
                            <td>21 دقيقة</td>
                            <td>
                                <span class="tag t-new">
                                    تحضير
                                </span>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </section>


            <!-- Kitchen Tasks -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            التشغيل
                        </span>

                        <h2 class="card-title">
                            مهام المطبخ
                        </h2>

                    </div>

                </div>


                <ul class="todo-list">

                    <li class="todo-item">

                        <input type="checkbox"
                            class="todo-check"
                            id="kitchen1">

                        <label for="kitchen1"
                            class="todo-text">
                            مراجعة الطلبات الجديدة
                        </label>

                        <span class="todo-badge urgent">
                            عاجل
                        </span>

                    </li>


                    <li class="todo-item">

                        <input type="checkbox"
                            class="todo-check"
                            id="kitchen2">

                        <label for="kitchen2"
                            class="todo-text">
                            تجهيز الطلبات المتأخرة
                        </label>

                        <span class="todo-badge warn">
                            مهم
                        </span>

                    </li>


                    <li class="todo-item">

                        <input type="checkbox"
                            class="todo-check"
                            id="kitchen3">

                        <label for="kitchen3"
                            class="todo-text">
                            مراجعة ملاحظات الطلبات
                        </label>

                        <span class="todo-badge upcoming">
                            اليوم
                        </span>

                    </li>


                    <li class="todo-item is-done">

                        <input type="checkbox"
                            class="todo-check"
                            id="kitchen4"
                            checked>

                        <label for="kitchen4"
                            class="todo-text">
                            تجهيز منطقة العمل
                        </label>

                        <span class="todo-badge done">
                            مكتمل
                        </span>

                    </li>

                </ul>

            </section>


            <!-- Kitchen Performance -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            الأداء
                        </span>

                        <h2 class="card-title">
                            أداء المطبخ
                        </h2>

                    </div>

                    <span class="card-action">
                        اليوم
                    </span>

                </div>


                <div class="wx-hero">

                    <div class="wx-temp-block">

                        <div class="wx-icon">

                            <svg viewBox="0 0 64 64">
                                <path d="M20 45h24" />
                                <path d="M24 45V28h16v17" />
                                <path d="M28 28v-8h8v8" />
                                <path d="M20 20h24" />
                            </svg>

                        </div>

                        <div>

                            <div class="wx-temp">
                                18
                                <sup>دقيقة</sup>
                            </div>

                            <div class="wx-condition">

                                <strong>
                                    أداء جيد
                                </strong>

                                · متوسط وقت التحضير

                            </div>

                        </div>

                    </div>


                    <div class="wx-date">

                        <h5>
                            الخميس
                        </h5>

                        <p>
                            ٢٣ أبريل، ٢٠٢٦
                        </p>

                    </div>

                </div>


                <div class="wx-stats">

                    <div>
                        <div class="wx-stat-label">
                            جديد
                        </div>

                        <div class="wx-stat-value">
                            6
                        </div>
                    </div>

                    <div>
                        <div class="wx-stat-label">
                            تحضير
                        </div>

                        <div class="wx-stat-value">
                            11
                        </div>
                    </div>

                    <div>
                        <div class="wx-stat-label">
                            جاهز
                        </div>

                        <div class="wx-stat-value">
                            5
                        </div>
                    </div>

                </div>


                <div class="wx-forecast">

                    <div class="wx-day is-today">
                        <div class="wx-day-name">جديد</div>
                        <div class="wx-day-icon">+</div>
                        <div class="wx-day-temp">6</div>
                    </div>

                    <div class="wx-day">
                        <div class="wx-day-name">تحضير</div>
                        <div class="wx-day-icon">◷</div>
                        <div class="wx-day-temp">11</div>
                    </div>

                    <div class="wx-day">
                        <div class="wx-day-name">جاهز</div>
                        <div class="wx-day-icon">✓</div>
                        <div class="wx-day-temp">5</div>
                    </div>

                </div>

            </section>

        </div>

    </main>
@endsection