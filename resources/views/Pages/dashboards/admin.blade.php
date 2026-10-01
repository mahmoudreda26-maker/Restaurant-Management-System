@extends('layouts.app')

@section('content')
    <main class="content">

        <!-- =========================
             Hero
        ========================== -->
        <section class="hero">

            <div class="hero-text">

                <span class="eyebrow" id="heroDate">
                    الخميس · ٢٣ أبريل · ٢٠٢٦
                </span>

                <h1 class="hero-title">
                    مرحباً بك مجدداً،
                    <span class="accent">مدير النظام</span>
                </h1>

                <p class="hero-sub">
                    إليك ملخص أداء المطعم اليوم.
                    يمكنك متابعة الطلبات والمبيعات والطاولات والمطبخ
                    والمخزون من لوحة التحكم.
                </p>

            </div>

            <div class="hero-actions">

                <button class="btn btn--ghost">

                    <svg viewBox="0 0 24 24">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <path d="M7 10l5 5 5-5" />
                        <path d="M12 15V3" />
                    </svg>

                    تصدير التقرير

                </button>

                <button class="btn btn--primary">

                    <svg viewBox="0 0 24 24">
                        <path d="M12 5v14M5 12h14" />
                    </svg>

                    تقرير جديد

                </button>

            </div>

        </section>


        <!-- =========================
             KPI Cards
        ========================== -->

        <section class="kpi-grid" aria-label="إحصائيات المطعم">


            <!-- Orders -->
            <article class="kpi-card c-success">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon success">

                            <svg viewBox="0 0 24 24">
                                <path d="M3 3h18v18H3z" />
                                <path d="M7 7h10M7 12h10M7 17h6" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            إجمالي الطلبات اليوم
                        </div>

                    </div>

                    <span class="kpi-pill up">

                        <svg viewBox="0 0 24 24">
                            <path d="M7 17l10-10M7 7h10v10" />
                        </svg>

                        +12%

                    </span>

                </div>

                <div class="kpi-value">
                    248
                </div>

                <div class="kpi-compare">

                    <svg class="up" viewBox="0 0 24 24">
                        <path d="M7 17l10-10M7 7h10v10" />
                    </svg>

                    مقارنة بـ
                    <strong>221</strong>

                    <span class="sep">·</span>

                    أمس

                </div>

            </article>


            <!-- Sales -->
            <article class="kpi-card c-primary">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon primary">

                            <svg viewBox="0 0 24 24">

                                <circle cx="12" cy="12" r="9" />

                                <path d="M12 7v10M9 10h4a2 2 0 0 1 0 4H9" />

                            </svg>

                        </div>

                        <div class="kpi-label">
                            مبيعات اليوم
                        </div>

                    </div>

                    <span class="kpi-pill up">

                        <svg viewBox="0 0 24 24">
                            <path d="M7 17l10-10M7 7h10v10" />
                        </svg>

                        +8%

                    </span>

                </div>

                <div class="kpi-value">
                    18,450
                    <sup>ج.م</sup>
                </div>

                <div class="kpi-compare">

                    <svg class="up" viewBox="0 0 24 24">
                        <path d="M7 17l10-10M7 7h10v10" />
                    </svg>

                    مقارنة بـ
                    <strong>17,050 ج.م</strong>

                    <span class="sep">·</span>

                    أمس

                </div>

            </article>


            <!-- Pending Orders -->
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
                            الطلبات المعلقة
                        </div>

                    </div>

                    <span class="kpi-pill down">

                        <svg viewBox="0 0 24 24">
                            <path d="M7 7l10 10M7 17h10V7" />
                        </svg>

                        تحتاج متابعة

                    </span>

                </div>

                <div class="kpi-value">
                    17
                </div>

                <div class="kpi-compare">

                    <strong>8</strong>
                    في المطبخ

                    <span class="sep">·</span>

                    <strong>9</strong>
                    قيد التجهيز

                </div>

            </article>


            <!-- Employees -->
            <article class="kpi-card c-purple">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon purple">

                            <svg viewBox="0 0 24 24">

                                <circle cx="12" cy="8" r="4" />

                                <path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8" />

                            </svg>

                        </div>

                        <div class="kpi-label">
                            الموظفون النشطون
                        </div>

                    </div>

                    <span class="kpi-pill flat">

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14" />
                        </svg>

                        اليوم

                    </span>

                </div>

                <div class="kpi-value">
                    24
                </div>

                <div class="kpi-compare">

                    <strong>4</strong>
                    نُوبات عمل

                    <span class="sep">·</span>

                    جميع الأقسام

                </div>

            </article>

        </section>


        <!-- =========================
             Dashboard Grid
        ========================== -->

        <div class="grid">


            <!-- =========================
                 Tables Overview
            ========================== -->

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
                        عرض الطاولات

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>

                    </a>

                </div>


                <div class="sv-regions">


                    <div class="sv-region">

                        <div class="sv-region-head">

                            <span class="marker" style="background: var(--success)">
                            </span>

                            متاحة

                        </div>

                        <div class="sv-region-value">

                            18

                            <span class="pct">
                                45%
                            </span>

                        </div>

                        <div class="sv-region-bar">

                            <div class="sv-region-bar-fill" style="width:45%; background:var(--success)">
                            </div>

                        </div>

                    </div>


                    <div class="sv-region">

                        <div class="sv-region-head">

                            <span class="marker" style="background:var(--purple)">
                            </span>

                            مشغولة

                        </div>

                        <div class="sv-region-value">

                            14

                            <span class="pct">
                                35%
                            </span>

                        </div>

                        <div class="sv-region-bar">

                            <div class="sv-region-bar-fill" style="width:35%; background:var(--purple)">
                            </div>

                        </div>

                    </div>


                    <div class="sv-region">

                        <div class="sv-region-head">

                            <span class="marker" style="background:var(--info)">
                            </span>

                            محجوزة

                        </div>

                        <div class="sv-region-value">

                            6

                            <span class="pct">
                                15%
                            </span>

                        </div>

                        <div class="sv-region-bar">

                            <div class="sv-region-bar-fill" style="width:15%; background:var(--info)">
                            </div>

                        </div>

                    </div>


                    <div class="sv-region">

                        <div class="sv-region-head">

                            <span class="marker" style="background:#64748b">
                            </span>

                            خارج الخدمة

                        </div>

                        <div class="sv-region-value">

                            2

                            <span class="pct">
                                5%
                            </span>

                        </div>

                        <div class="sv-region-bar">

                            <div class="sv-region-bar-fill" style="width:5%; background:#64748b">
                            </div>

                        </div>

                    </div>


                </div>


                <div class="sv-divider"></div>


                <div class="sv-radials">


                    <div class="sv-radial">

                        <div class="sv-radial-chart">

                            <svg viewBox="0 0 80 80">

                                <circle class="radial-track" cx="40" cy="40" r="32" />

                                <circle class="radial-fill success" cx="40" cy="40" r="32"
                                    stroke-dasharray="201.06" stroke-dashoffset="70" />

                            </svg>

                            <span class="pct">
                                65%
                            </span>

                        </div>

                        <div class="sv-radial-text">

                            <div class="sv-radial-name">
                                إشغال المطعم
                            </div>

                            <div class="sv-radial-caption">
                                خلال ساعات الذروة
                            </div>

                        </div>

                    </div>


                    <div class="sv-radial">

                        <div class="sv-radial-chart">

                            <svg viewBox="0 0 80 80">

                                <circle class="radial-track" cx="40" cy="40" r="32" />

                                <circle class="radial-fill info" cx="40" cy="40" r="32"
                                    stroke-dasharray="201.06" stroke-dashoffset="100" />

                            </svg>

                            <span class="pct">
                                50%
                            </span>

                        </div>

                        <div class="sv-radial-text">

                            <div class="sv-radial-name">
                                متوسط الإشغال
                            </div>

                            <div class="sv-radial-caption">
                                اليوم
                            </div>

                        </div>

                    </div>


                    <div class="sv-radial">

                        <div class="sv-radial-chart">

                            <svg viewBox="0 0 80 80">

                                <circle class="radial-track" cx="40" cy="40" r="32" />

                                <circle class="radial-fill warning" cx="40" cy="40" r="32"
                                    stroke-dasharray="201.06" stroke-dashoffset="35" />

                            </svg>

                            <span class="pct">
                                82%
                            </span>

                        </div>

                        <div class="sv-radial-text">

                            <div class="sv-radial-name">
                                كفاءة التشغيل
                            </div>

                            <div class="sv-radial-caption">
                                أداء اليوم
                            </div>

                        </div>

                    </div>


                </div>

            </section>


            <!-- =========================
                 Monthly Sales
            ========================== -->

            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            الأداء
                        </span>

                        <h2 class="card-title">
                            المبيعات الشهرية
                        </h2>

                    </div>

                    <span class="card-action">
                        أبريل 2026
                    </span>

                </div>


                <div class="chart-canvas-wrap" style="height: 240px">

                    <canvas data-chart-key="dashboard-monthly">
                    </canvas>

                </div>


                <div class="monthly-footer">


                    <div class="stat-cell">

                        <div class="stat-cell-label">
                            إجمالي المبيعات
                        </div>

                        <div class="stat-cell-value">

                            425K ج.م

                            <svg class="trend-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">

                                <path d="M7 17l10-10M7 7h10v10" />

                            </svg>

                        </div>

                    </div>


                    <div class="stat-cell">

                        <div class="stat-cell-label">
                            متوسط الطلب
                        </div>

                        <div class="stat-cell-value">
                            185 ج.م
                        </div>

                    </div>


                    <div class="stat-cell">

                        <div class="stat-cell-label">
                            نمو المبيعات
                        </div>

                        <div class="stat-cell-value">

                            18%

                            <svg class="trend-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">

                                <path d="M7 17l10-10M7 7h10v10" />

                            </svg>

                        </div>

                    </div>


                    <div class="stat-cell">

                        <div class="stat-cell-label">
                            صافي الأرباح
                        </div>

                        <div class="stat-cell-value">

                            128K ج.م

                        </div>

                    </div>


                </div>

            </section>


            <!-- =========================
                 Tasks
            ========================== -->

            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            الإدارة
                        </span>

                        <h2 class="card-title">
                            مهام اليوم
                        </h2>

                    </div>

                    <a class="card-action" href="#">

                        إضافة مهمة

                        <svg viewBox="0 0 24 24">
                            <path d="M12 5v14M5 12h14" />
                        </svg>

                    </a>

                </div>


                <ul class="todo-list">


                    <li class="todo-item">

                        <input type="checkbox" class="todo-check" id="td1">

                        <label for="td1" class="todo-text">

                            مراجعة تقرير المبيعات اليومية

                        </label>

                        <span class="todo-badge urgent">
                            عاجل
                        </span>

                    </li>


                    <li class="todo-item">

                        <input type="checkbox" class="todo-check" id="td2">

                        <label for="td2" class="todo-text">

                            مراجعة مخزون المطبخ

                        </label>

                        <span class="todo-badge upcoming">
                            اليوم
                        </span>

                    </li>


                    <li class="todo-item">

                        <input type="checkbox" class="todo-check" id="td3">

                        <label for="td3" class="todo-text">

                            متابعة طلبات الموردين

                        </label>

                        <span class="todo-badge warn">
                            متوسطة
                        </span>

                    </li>


                    <li class="todo-item">

                        <input type="checkbox" class="todo-check" id="td4">

                        <label for="td4" class="todo-text">

                            مراجعة جدول الموظفين

                        </label>

                        <span class="todo-badge low">
                            لاحقاً
                        </span>

                    </li>


                    <li class="todo-item is-done">

                        <input type="checkbox" class="todo-check" id="td5" checked>

                        <label for="td5" class="todo-text">

                            إغلاق تقرير أمس

                        </label>

                        <span class="todo-badge done">
                            مكتمل
                        </span>

                    </li>


                </ul>

            </section>


            <!-- =========================
                 Recent Orders
            ========================== -->

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

                </div>


                <div class="sales-summary">

                    <div class="sales-summary-label">

                        <span class="eyebrow">
                            اليوم
                        </span>

                        <h4>
                            إجمالي الطلبات
                        </h4>

                    </div>

                    <div class="sales-summary-total">
                        18,450
                        <sup>ج.م</sup>
                    </div>

                </div>


                <table class="table">

                    <thead>

                        <tr>

                            <th>
                                الطلب
                            </th>

                            <th>
                                الحالة
                            </th>

                            <th>
                                الوقت
                            </th>

                            <th style="text-align:right">
                                الإجمالي
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td class="cell-name">
                                #1024
                            </td>

                            <td>
                                <span class="tag t-new">
                                    جديد
                                </span>
                            </td>

                            <td class="cell-date">
                                10:35 ص
                            </td>

                            <td class="cell-price pos">
                                450 ج.م
                            </td>

                        </tr>


                        <tr>

                            <td class="cell-name">
                                #1023
                            </td>

                            <td>
                                <span class="tag t-used">
                                    مكتمل
                                </span>
                            </td>

                            <td class="cell-date">
                                10:21 ص
                            </td>

                            <td class="cell-price pos">
                                320 ج.م
                            </td>

                        </tr>


                        <tr>

                            <td class="cell-name">
                                #1022
                            </td>

                            <td>
                                <span class="tag t-new">
                                    قيد التحضير
                                </span>
                            </td>

                            <td class="cell-date">
                                10:15 ص
                            </td>

                            <td class="cell-price pos">
                                680 ج.م
                            </td>

                        </tr>


                        <tr>

                            <td class="cell-name">
                                #1021
                            </td>

                            <td>
                                <span class="tag t-unavail">
                                    ملغي
                                </span>
                            </td>

                            <td class="cell-date">
                                09:58 ص
                            </td>

                            <td class="cell-price neg">
                                -210 ج.م
                            </td>

                        </tr>


                    </tbody>

                </table>


                <div class="sales-all">

                    <a href="#">

                        عرض جميع الطلبات

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>

                    </a>

                </div>

            </section>


            <!-- =========================
                 Kitchen Status
            ========================== -->

            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            المطبخ
                        </span>

                        <h2 class="card-title">
                            حالة المطبخ
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

                                <path d="M12 20h40M18 12h28M18 28h28" />

                                <path d="M16 36h32v16H16z" />

                            </svg>

                        </div>

                        <div>

                            <div class="wx-temp">
                                18
                                <sup>طلب</sup>
                            </div>

                            <div class="wx-condition">

                                <strong>
                                    المطبخ يعمل
                                </strong>

                                · متوسط التحضير 18 دقيقة

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
                            طلبات جديدة
                        </div>

                        <div class="wx-stat-value">
                            6
                        </div>

                    </div>


                    <div>

                        <div class="wx-stat-label">
                            قيد التحضير
                        </div>

                        <div class="wx-stat-value">
                            8
                        </div>

                    </div>


                    <div>

                        <div class="wx-stat-label">
                            جاهزة
                        </div>

                        <div class="wx-stat-value">
                            4
                        </div>

                    </div>


                </div>


                <div class="wx-forecast">


                    <div class="wx-day is-today">

                        <div class="wx-day-name">
                            جديد
                        </div>

                        <div class="wx-day-icon">
                            +
                        </div>

                        <div class="wx-day-temp">
                            6
                        </div>

                    </div>


                    <div class="wx-day">

                        <div class="wx-day-name">
                            تحضير
                        </div>

                        <div class="wx-day-icon">
                            ◷
                        </div>

                        <div class="wx-day-temp">
                            8
                        </div>

                    </div>


                    <div class="wx-day">

                        <div class="wx-day-name">
                            جاهز
                        </div>

                        <div class="wx-day-icon">
                            ✓
                        </div>

                        <div class="wx-day-temp">
                            4
                        </div>

                    </div>


                </div>

            </section>


            <!-- =========================
                 Inventory
            ========================== -->

            <section class="col-12 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            المخزون
                        </span>

                        <h2 class="card-title">
                            تنبيهات المخزون
                        </h2>

                    </div>

                    <a class="card-action" href="#">

                        إدارة المخزون

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>

                    </a>

                </div>


                <table class="table">

                    <thead>

                        <tr>

                            <th>
                                المنتج
                            </th>

                            <th>
                                التصنيف
                            </th>

                            <th>
                                الكمية الحالية
                            </th>

                            <th>
                                الحد الأدنى
                            </th>

                            <th>
                                الحالة
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td class="cell-name">
                                زيت الطهي
                            </td>

                            <td>
                                مواد أساسية
                            </td>

                            <td>
                                8 لتر
                            </td>

                            <td>
                                15 لتر
                            </td>

                            <td>

                                <span class="tag t-unavail">
                                    منخفض
                                </span>

                            </td>

                        </tr>


                        <tr>

                            <td class="cell-name">
                                صدور الدجاج
                            </td>

                            <td>
                                لحوم
                            </td>

                            <td>
                                12 كجم
                            </td>

                            <td>
                                20 كجم
                            </td>

                            <td>

                                <span class="tag t-unavail">
                                    منخفض
                                </span>

                            </td>

                        </tr>


                        <tr>

                            <td class="cell-name">
                                أرز بسمتي
                            </td>

                            <td>
                                مواد غذائية
                            </td>

                            <td>
                                35 كجم
                            </td>

                            <td>
                                20 كجم
                            </td>

                            <td>

                                <span class="tag t-new">
                                    جيد
                                </span>

                            </td>

                        </tr>


                    </tbody>

                </table>

            </section>


            <!-- =========================
                 Recent Activity
            ========================== -->

            <section class="col-12 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            النظام
                        </span>

                        <h2 class="card-title">
                            آخر النشاطات
                        </h2>

                    </div>

                    <a class="card-action" href="#">

                        سجل النشاطات

                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>

                    </a>

                </div>


                <div class="chat-frame">

                    <div class="chat-messages">


                        <div class="chat-row">

                            <div class="chat-avatar">
                                MA
                            </div>
                            <div class="chat-stack">
                                <div class="chat-bubble">
                                    قام مدير النظام بإضافة موظف جديد إلى النظام.
                                </div>
                                <div class="chat-ts">
                                    منذ 10 دقائق
                                </div>
                            </div>
                        </div>
                        <div class="chat-row">
                            <div class="chat-avatar">
                                AH
                            </div>
                            <div class="chat-stack">
                                <div class="chat-bubble">
                                    تم إنشاء الطلب
                                    <strong>#1024</strong>
                                    بقيمة 450 ج.م.
                                </div>
                                <div class="chat-ts">
                                    منذ 18 دقيقة
                                </div>
                            </div>
                        </div>
                        <div class="chat-row">
                            <div class="chat-avatar">
                                MK
                            </div>
                            <div class="chat-stack">
                                <div class="chat-bubble">
                                    تم تحديث حالة الطلب
                                    <strong>#1022</strong>
                                    إلى قيد التحضير.
                                </div>
                                <div class="chat-ts">
                                    منذ 25 دقيقة
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
