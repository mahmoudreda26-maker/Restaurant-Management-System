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
                    <span class="accent">موظف الخدمة</span>
                </h1>

                <p class="hero-sub">
                    تابع الطاولات والطلبات والحجوزات الخاصة بك.
                    يمكنك إنشاء الطلبات ومتابعة حالة المطبخ
                    وخدمة العملاء من لوحة التحكم.
                </p>

            </div>

            <div class="hero-actions">

                <button class="btn btn--ghost">

                    <svg viewBox="0 0 24 24">
                        <path d="M4 12h16M12 4l8 8-8 8" />
                    </svg>

                    الحجوزات

                </button>

                <button class="btn btn--primary">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 5v14M5 12h14" />
                    </svg>

                    طلب جديد

                </button>

            </div>

        </section>


        <!-- =========================
             KPI Cards
        ========================== -->

        <section class="kpi-grid">


            <!-- Available Tables -->
            <article class="kpi-card c-success">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon success">

                            <svg viewBox="0 0 24 24">
                                <rect x="4" y="7" width="16" height="10" rx="2" />
                                <path d="M8 7V4M16 7V4M8 17v3M16 17v3" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            الطاولات المتاحة
                        </div>

                    </div>

                    <span class="kpi-pill up">
                        متاحة
                    </span>

                </div>

                <div class="kpi-value">
                    18
                </div>

                <div class="kpi-compare">
                    من أصل
                    <strong>40</strong>
                    طاولة
                </div>

            </article>


            <!-- Occupied Tables -->
            <article class="kpi-card c-purple">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon purple">

                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="3" />
                                <path d="M5 21c0-4 3-7 7-7s7 3 7 7" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            الطاولات المشغولة
                        </div>

                    </div>

                    <span class="kpi-pill flat">
                        35%
                    </span>

                </div>

                <div class="kpi-value">
                    14
                </div>

                <div class="kpi-compare">
                    <strong>14</strong>
                    طاولة مشغولة
                    <span class="sep">·</span>
                    الآن
                </div>

            </article>


            <!-- Active Orders -->
            <article class="kpi-card c-danger">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon danger">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 4h16v16H4z" />
                                <path d="M8 8h8M8 12h8M8 16h5" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            الطلبات المفتوحة
                        </div>

                    </div>

                    <span class="kpi-pill down">
                        متابعة
                    </span>

                </div>

                <div class="kpi-value">
                    9
                </div>

                <div class="kpi-compare">
                    <strong>5</strong>
                    قيد التحضير
                    <span class="sep">·</span>
                    <strong>4</strong>
                    جاهزة
                </div>

            </article>


            <!-- Reservations -->
            <article class="kpi-card c-primary">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon primary">

                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="16" rx="2" />
                                <path d="M7 3v4M17 3v4M3 10h18" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            حجوزات اليوم
                        </div>

                    </div>

                    <span class="kpi-pill up">
                        +2
                    </span>

                </div>

                <div class="kpi-value">
                    7
                </div>

                <div class="kpi-compare">
                    <strong>5</strong>
                    مؤكدة
                    <span class="sep">·</span>
                    <strong>2</strong>
                    قادمة
                </div>

            </article>

        </section>


        <div class="grid">


            <!-- Tables -->
            <section class="col-12 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            التشغيل
                        </span>

                        <h2 class="card-title">
                            حالة الطاولات
                        </h2>

                    </div>

                    <a class="card-action" href="#">
                        عرض كل الطاولات
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>
                    </a>

                </div>


                <div class="sv-regions">

                    <div class="sv-region">

                        <div class="sv-region-head">
                            <span class="marker"
                                style="background:var(--success)">
                            </span>
                            متاحة
                        </div>

                        <div class="sv-region-value">
                            18
                            <span class="pct">45%</span>
                        </div>

                        <div class="sv-region-bar">
                            <div class="sv-region-bar-fill"
                                style="width:45%;background:var(--success)">
                            </div>
                        </div>

                    </div>


                    <div class="sv-region">

                        <div class="sv-region-head">
                            <span class="marker"
                                style="background:var(--purple)">
                            </span>
                            مشغولة
                        </div>

                        <div class="sv-region-value">
                            14
                            <span class="pct">35%</span>
                        </div>

                        <div class="sv-region-bar">
                            <div class="sv-region-bar-fill"
                                style="width:35%;background:var(--purple)">
                            </div>
                        </div>

                    </div>


                    <div class="sv-region">

                        <div class="sv-region-head">
                            <span class="marker"
                                style="background:var(--info)">
                            </span>
                            محجوزة
                        </div>

                        <div class="sv-region-value">
                            6
                            <span class="pct">15%</span>
                        </div>

                        <div class="sv-region-bar">
                            <div class="sv-region-bar-fill"
                                style="width:15%;background:var(--info)">
                            </div>
                        </div>

                    </div>


                    <div class="sv-region">

                        <div class="sv-region-head">
                            <span class="marker"
                                style="background:#64748b">
                            </span>
                            تنظيف
                        </div>

                        <div class="sv-region-value">
                            2
                            <span class="pct">5%</span>
                        </div>

                        <div class="sv-region-bar">
                            <div class="sv-region-bar-fill"
                                style="width:5%;background:#64748b">
                            </div>
                        </div>

                    </div>

                </div>

            </section>


            <!-- Orders -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            الطلبات
                        </span>

                        <h2 class="card-title">
                            آخر الطلبات
                        </h2>

                    </div>

                    <a class="card-action" href="#">
                        جميع الطلبات
                    </a>

                </div>


                <table class="table">

                    <thead>

                        <tr>
                            <th>الطلب</th>
                            <th>الطاولة</th>
                            <th>الحالة</th>
                            <th>الوقت</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td class="cell-name">#1048</td>
                            <td>Table 08</td>
                            <td>
                                <span class="tag t-new">
                                    قيد التحضير
                                </span>
                            </td>
                            <td class="cell-date">10:35 م</td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1047</td>
                            <td>Table 03</td>
                            <td>
                                <span class="tag t-used">
                                    جاهز
                                </span>
                            </td>
                            <td class="cell-date">10:21 م</td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1046</td>
                            <td>Table 12</td>
                            <td>
                                <span class="tag t-new">
                                    تم التقديم
                                </span>
                            </td>
                            <td class="cell-date">10:15 م</td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1045</td>
                            <td>Table 05</td>
                            <td>
                                <span class="tag t-used">
                                    مكتمل
                                </span>
                            </td>
                            <td class="cell-date">09:58 م</td>
                        </tr>

                    </tbody>

                </table>

            </section>


            <!-- Reservations -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            الحجوزات
                        </span>

                        <h2 class="card-title">
                            حجوزات اليوم
                        </h2>

                    </div>

                    <a class="card-action" href="#">
                        عرض الحجوزات
                    </a>

                </div>


                <table class="table">

                    <thead>

                        <tr>
                            <th>العميل</th>
                            <th>الطاولة</th>
                            <th>الوقت</th>
                            <th>الحالة</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td class="cell-name">محمد أحمد</td>
                            <td>Table 04</td>
                            <td>07:30 م</td>
                            <td>
                                <span class="tag t-new">مؤكد</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">أحمد علي</td>
                            <td>Table 09</td>
                            <td>08:00 م</td>
                            <td>
                                <span class="tag t-used">قادم</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">سارة محمود</td>
                            <td>Table 02</td>
                            <td>09:00 م</td>
                            <td>
                                <span class="tag t-new">مؤكد</span>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </section>


            <!-- Tasks -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            الخدمة
                        </span>

                        <h2 class="card-title">
                            مهام اليوم
                        </h2>

                    </div>

                </div>


                <ul class="todo-list">

                    <li class="todo-item">

                        <input type="checkbox"
                            class="todo-check"
                            id="waiter1">

                        <label for="waiter1"
                            class="todo-text">
                            تجهيز الطاولات للحجوزات
                        </label>

                        <span class="todo-badge urgent">
                            عاجل
                        </span>

                    </li>


                    <li class="todo-item">

                        <input type="checkbox"
                            class="todo-check"
                            id="waiter2">

                        <label for="waiter2"
                            class="todo-text">
                            متابعة الطلبات الجاهزة
                        </label>

                        <span class="todo-badge upcoming">
                            الآن
                        </span>

                    </li>


                    <li class="todo-item">

                        <input type="checkbox"
                            class="todo-check"
                            id="waiter3">

                        <label for="waiter3"
                            class="todo-text">
                            متابعة الحجوزات القادمة
                        </label>

                        <span class="todo-badge warn">
                            اليوم
                        </span>

                    </li>


                    <li class="todo-item is-done">

                        <input type="checkbox"
                            class="todo-check"
                            id="waiter4"
                            checked>

                        <label for="waiter4"
                            class="todo-text">
                            تجهيز Table 04
                        </label>

                        <span class="todo-badge done">
                            مكتمل
                        </span>

                    </li>

                </ul>

            </section>


            <!-- Service Status -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            الخدمة
                        </span>

                        <h2 class="card-title">
                            حالة الخدمة
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
                                <circle cx="32" cy="20" r="8" />
                                <path d="M16 52c0-9 7-16 16-16s16 7 16 16" />
                            </svg>
                        </div>

                        <div>

                            <div class="wx-temp">
                                18
                                <sup>طاولة</sup>
                            </div>

                            <div class="wx-condition">
                                <strong>الخدمة مستقرة</strong>
                                · متوسط خدمة الطاولة 14 دقيقة
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
                            متاحة
                        </div>

                        <div class="wx-stat-value">
                            18
                        </div>
                    </div>

                    <div>
                        <div class="wx-stat-label">
                            مشغولة
                        </div>

                        <div class="wx-stat-value">
                            14
                        </div>
                    </div>

                    <div>
                        <div class="wx-stat-label">
                            محجوزة
                        </div>

                        <div class="wx-stat-value">
                            6
                        </div>
                    </div>

                </div>


                <div class="wx-forecast">

                    <div class="wx-day is-today">
                        <div class="wx-day-name">متاحة</div>
                        <div class="wx-day-icon">✓</div>
                        <div class="wx-day-temp">18</div>
                    </div>

                    <div class="wx-day">
                        <div class="wx-day-name">مشغولة</div>
                        <div class="wx-day-icon">●</div>
                        <div class="wx-day-temp">14</div>
                    </div>

                    <div class="wx-day">
                        <div class="wx-day-name">محجوزة</div>
                        <div class="wx-day-icon">+</div>
                        <div class="wx-day-temp">6</div>
                    </div>

                </div>

            </section>

        </div>

    </main>
@endsection