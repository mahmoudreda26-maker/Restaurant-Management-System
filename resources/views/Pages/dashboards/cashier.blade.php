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
                    <span class="accent">الكاشير</span>
                </h1>

                <p class="hero-sub">
                    إليك ملخص المدفوعات والفواتير اليوم.
                    يمكنك متابعة الطلبات الجاهزة للدفع،
                    المدفوعات، والفواتير من لوحة التحكم.
                </p>

            </div>

            <div class="hero-actions">

                <button class="btn btn--ghost">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 12h18M12 3l9 9-9 9" />
                    </svg>

                    المدفوعات
                </button>

                <button class="btn btn--primary">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 5v14M5 12h14" />
                    </svg>

                    فاتورة جديدة
                </button>

            </div>

        </section>


        <!-- =========================
             KPI Cards
        ========================== -->

        <section class="kpi-grid">


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
                        +12%
                    </span>

                </div>

                <div class="kpi-value">
                    24,850
                    <sup>ج.م</sup>
                </div>

                <div class="kpi-compare">
                    مقارنة بـ
                    <strong>22,150 ج.م</strong>
                    <span class="sep">·</span>
                    أمس
                </div>

            </article>


            <!-- Invoices -->
            <article class="kpi-card c-success">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon success">

                            <svg viewBox="0 0 24 24">
                                <path d="M5 3h14v18H5z" />
                                <path d="M8 7h8M8 11h8M8 15h5" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            الفواتير اليوم
                        </div>

                    </div>

                    <span class="kpi-pill up">
                        +8%
                    </span>

                </div>

                <div class="kpi-value">
                    186
                </div>

                <div class="kpi-compare">
                    <strong>178</strong>
                    مكتملة
                    <span class="sep">·</span>
                    اليوم
                </div>

            </article>


            <!-- Pending Payments -->
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
                            في انتظار الدفع
                        </div>

                    </div>

                    <span class="kpi-pill down">
                        تحتاج متابعة
                    </span>

                </div>

                <div class="kpi-value">
                    8
                </div>

                <div class="kpi-compare">
                    <strong>5</strong>
                    داخل المطعم
                    <span class="sep">·</span>
                    <strong>3</strong>
                    استلام
                </div>

            </article>


            <!-- Average -->
            <article class="kpi-card c-purple">

                <div class="kpi-top">

                    <div class="kpi-identity">

                        <div class="kpi-icon purple">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 19h16" />
                                <path d="M6 16l4-4 3 3 5-7" />
                            </svg>

                        </div>

                        <div class="kpi-label">
                            متوسط قيمة الفاتورة
                        </div>

                    </div>

                    <span class="kpi-pill flat">
                        اليوم
                    </span>

                </div>

                <div class="kpi-value">
                    134
                    <sup>ج.م</sup>
                </div>

                <div class="kpi-compare">
                    <strong>+6%</strong>
                    عن أمس
                    <span class="sep">·</span>
                    186 فاتورة
                </div>

            </article>

        </section>


        <!-- =========================
             Dashboard Grid
        ========================== -->

        <div class="grid">


            <!-- Pending Payments -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            الفواتير
                        </span>

                        <h2 class="card-title">
                            الطلبات في انتظار الدفع
                        </h2>

                    </div>

                    <a class="card-action" href="#">
                        عرض الكل
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>
                    </a>

                </div>


                <table class="table">

                    <thead>

                        <tr>
                            <th>الطلب</th>
                            <th>الطاولة</th>
                            <th>الإجمالي</th>
                            <th>الإجراء</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td class="cell-name">#1048</td>
                            <td>Table 08</td>
                            <td class="cell-price pos">520 ج.م</td>
                            <td>
                                <button class="btn btn--primary">
                                    دفع
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1046</td>
                            <td>Table 12</td>
                            <td class="cell-price pos">740 ج.م</td>
                            <td>
                                <button class="btn btn--primary">
                                    دفع
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1043</td>
                            <td>Table 03</td>
                            <td class="cell-price pos">315 ج.م</td>
                            <td>
                                <button class="btn btn--primary">
                                    دفع
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">#1041</td>
                            <td>Table 06</td>
                            <td class="cell-price pos">890 ج.م</td>
                            <td>
                                <button class="btn btn--primary">
                                    دفع
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </section>


            <!-- Payment Overview -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            المدفوعات
                        </span>

                        <h2 class="card-title">
                            ملخص اليوم
                        </h2>

                    </div>

                    <span class="card-action">
                        اليوم
                    </span>

                </div>


                <div class="sv-regions">

                    <div class="sv-region">

                        <div class="sv-region-head">

                            <span class="marker"
                                style="background:var(--success)">
                            </span>

                            Cash

                        </div>

                        <div class="sv-region-value">

                            14,430

                            <span class="pct">
                                58%
                            </span>

                        </div>

                        <div class="sv-region-bar">

                            <div class="sv-region-bar-fill"
                                style="width:58%;background:var(--success)">
                            </div>

                        </div>

                    </div>


                    <div class="sv-region">

                        <div class="sv-region-head">

                            <span class="marker"
                                style="background:var(--purple)">
                            </span>

                            Card

                        </div>

                        <div class="sv-region-value">

                            10,420

                            <span class="pct">
                                42%
                            </span>

                        </div>

                        <div class="sv-region-bar">

                            <div class="sv-region-bar-fill"
                                style="width:42%;background:var(--purple)">
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
                                    stroke-dashoffset="25" />

                            </svg>

                            <span class="pct">
                                88%
                            </span>

                        </div>

                        <div class="sv-radial-text">

                            <div class="sv-radial-name">
                                نسبة الدفع
                            </div>

                            <div class="sv-radial-caption">
                                من الطلبات المكتملة
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
                                    stroke-dashoffset="65" />

                            </svg>

                            <span class="pct">
                                68%
                            </span>

                        </div>

                        <div class="sv-radial-text">

                            <div class="sv-radial-name">
                                Cash
                            </div>

                            <div class="sv-radial-caption">
                                من المدفوعات
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
                                    stroke-dashoffset="85" />

                            </svg>

                            <span class="pct">
                                42%
                            </span>

                        </div>

                        <div class="sv-radial-text">

                            <div class="sv-radial-name">
                                Card
                            </div>

                            <div class="sv-radial-caption">
                                من المدفوعات
                            </div>

                        </div>

                    </div>

                </div>

            </section>


            <!-- Recent Payments -->
            <section class="col-12 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            المعاملات
                        </span>

                        <h2 class="card-title">
                            آخر المدفوعات
                        </h2>

                    </div>

                    <a class="card-action" href="#">
                        جميع المدفوعات
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 5l7 7-7 7" />
                        </svg>
                    </a>

                </div>


                <table class="table">

                    <thead>

                        <tr>
                            <th>الفاتورة</th>
                            <th>الطاولة</th>
                            <th>المبلغ</th>
                            <th>طريقة الدفع</th>
                            <th>الوقت</th>
                            <th>الحالة</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td class="cell-name">#INV-1048</td>
                            <td>Table 08</td>
                            <td class="cell-price pos">520 ج.م</td>
                            <td>Cash</td>
                            <td>08:42 م</td>
                            <td>
                                <span class="tag t-new">مدفوعة</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">#INV-1047</td>
                            <td>Table 03</td>
                            <td class="cell-price pos">315 ج.م</td>
                            <td>Card</td>
                            <td>08:35 م</td>
                            <td>
                                <span class="tag t-new">مدفوعة</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="cell-name">#INV-1046</td>
                            <td>Table 12</td>
                            <td class="cell-price pos">740 ج.م</td>
                            <td>Cash</td>
                            <td>08:21 م</td>
                            <td>
                                <span class="tag t-new">مدفوعة</span>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </section>


            <!-- Quick Actions -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            التشغيل
                        </span>

                        <h2 class="card-title">
                            إجراءات سريعة
                        </h2>

                    </div>

                </div>


                <ul class="todo-list">

                    <li class="todo-item">
                        <span class="todo-text">
                            مراجعة الطلبات في انتظار الدفع
                        </span>

                        <span class="todo-badge urgent">
                            8
                        </span>
                    </li>

                    <li class="todo-item">
                        <span class="todo-text">
                            مراجعة المدفوعات النقدية
                        </span>

                        <span class="todo-badge upcoming">
                            اليوم
                        </span>
                    </li>

                    <li class="todo-item">
                        <span class="todo-text">
                            إغلاق وردية الكاشير
                        </span>

                        <span class="todo-badge warn">
                            لاحقاً
                        </span>
                    </li>

                    <li class="todo-item">
                        <span class="todo-text">
                            مراجعة الفواتير الملغاة
                        </span>

                        <span class="todo-badge low">
                            2
                        </span>
                    </li>

                </ul>

            </section>


            <!-- Cashier Activity -->
            <section class="col-6 card">

                <div class="card-head">

                    <div class="card-title-wrap">

                        <span class="eyebrow">
                            النظام
                        </span>

                        <h2 class="card-title">
                            آخر النشاطات
                        </h2>

                    </div>

                </div>


                <div class="chat-frame">

                    <div class="chat-messages">

                        <div class="chat-row">

                            <div class="chat-avatar">
                                CA
                            </div>

                            <div class="chat-stack">

                                <div class="chat-bubble">
                                    تم دفع الفاتورة
                                    <strong>#INV-1048</strong>
                                    بقيمة 520 ج.م.
                                </div>

                                <div class="chat-ts">
                                    منذ 5 دقائق
                                </div>

                            </div>

                        </div>


                        <div class="chat-row">

                            <div class="chat-avatar">
                                CA
                            </div>

                            <div class="chat-stack">

                                <div class="chat-bubble">
                                    تم إنشاء فاتورة جديدة للطلب
                                    <strong>#1047</strong>.
                                </div>

                                <div class="chat-ts">
                                    منذ 12 دقيقة
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </main>
@endsection