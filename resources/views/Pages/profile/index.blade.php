@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero-text">
        <span class="eyebrow">الحساب · ٠١</span>

        <h1 class="hero-title">الملف الشخصي</h1>

        <p class="hero-sub">
            إدارة بيانات الحساب الشخصي ومعلومات المستخدم وتحديث إعدادات الأمان.
        </p>
    </div>

    <div class="hero-actions">
        <button
            type="reset"
            form="profile-form"
            class="btn btn--ghost"
        >
            إلغاء
        </button>

        <button
            type="submit"
            form="profile-form"
            class="btn btn--primary"
        >
            حفظ التغييرات
        </button>
    </div>
</section>


<div class="grid">

    {{-- Personal Information --}}
    <section class="col-12 card">

        <div class="card-head">
            <div class="card-title-wrap">
                <span class="eyebrow">معلومات الحساب</span>

                <h2 class="card-title">
                    البيانات الشخصية
                </h2>
            </div>

            <span class="badge solid">
                مدير النظام
            </span>
        </div>


        <form
            id="profile-form"
            action="#"
            method="POST"
        >

            <div class="form-grid">

                {{-- Name --}}
                <div class="field">

                    <label
                        class="field-label"
                        for="name"
                    >
                        الاسم
                        <span class="req">*</span>
                    </label>

                    <input
                        id="name"
                        name="name"
                        class="input"
                        type="text"
                        value="Mahmoud Reda"
                        required
                    >

                </div>


                {{-- Email --}}
                <div class="field">

                    <label
                        class="field-label"
                        for="email"
                    >
                        البريد الإلكتروني
                        <span class="req">*</span>
                    </label>

                    <input
                        id="email"
                        name="email"
                        class="input"
                        type="email"
                        value="mahmoud@example.com"
                        required
                    >

                    <div class="field-help">
                        يُستخدم لتسجيل الدخول وإشعارات الحساب.
                    </div>

                </div>


                {{-- Phone --}}
                <div class="field">

                    <label
                        class="field-label"
                        for="phone"
                    >
                        رقم الهاتف
                    </label>

                    <input
                        id="phone"
                        name="phone"
                        class="input"
                        type="text"
                        value="01012345678"
                    >

                </div>


                {{-- Role --}}
                <div class="field">

                    <label
                        class="field-label"
                        for="role"
                    >
                        الدور
                    </label>

                    <input
                        id="role"
                        class="input"
                        type="text"
                        value="مدير النظام"
                        readonly
                    >

                    <div class="field-help">
                        يتم تحديد الدور بواسطة إدارة النظام.
                    </div>

                </div>

            </div>


            <div class="form-actions">

                <span class="badge dot success">
                    الحساب نشط
                </span>

                <span class="spacer"></span>

                <button
                    type="reset"
                    class="btn btn--ghost"
                >
                    إلغاء
                </button>

                <button
                    type="submit"
                    class="btn btn--primary"
                >
                    حفظ البيانات
                </button>

            </div>

        </form>

    </section>


    {{-- Password --}}
    <section class="col-12 card">

        <div class="card-head">

            <div class="card-title-wrap">

                <span class="eyebrow">
                    الأمان
                </span>

                <h2 class="card-title">
                    تغيير كلمة المرور
                </h2>

            </div>

            <span class="badge solid">
                حماية الحساب
            </span>

        </div>


        <form
            id="password-form"
           action="{{ route('profile.password.update') }}"
            method="POST"
        >

            <div class="form-grid">

                {{-- Current Password --}}
                <div class="field span-2">

                    <label
                        class="field-label"
                        for="current-password"
                    >
                        كلمة المرور الحالية
                        <span class="req">*</span>
                    </label>

                    <input
                        id="current-password"
                        name="current_password"
                        class="input"
                        type="password"
                        placeholder="أدخل كلمة المرور الحالية"
                        required
                    >

                </div>


                {{-- New Password --}}
                <div class="field">

                    <label
                        class="field-label"
                        for="new-password"
                    >
                        كلمة المرور الجديدة
                        <span class="req">*</span>
                    </label>

                    <input
                        id="new-password"
                        name="new_password"
                        class="input"
                        type="password"
                        placeholder="أدخل كلمة المرور الجديدة"
                        required
                    >

                </div>


                {{-- Confirm Password --}}
                <div class="field">

                    <label
                        class="field-label"
                        for="password-confirmation"
                    >
                        تأكيد كلمة المرور
                        <span class="req">*</span>
                    </label>

                    <input
                        id="password-confirmation"
                        name="new_password_confirmation"
                        class="input"
                        type="password"
                        placeholder="أعد إدخال كلمة المرور الجديدة"
                        required
                    >

                </div>

            </div>


            <div class="form-actions">

                <span class="field-help">
                    استخدم كلمة مرور قوية تحتوي على أحرف وأرقام ورموز.
                </span>

                <span class="spacer"></span>

                <button
                    type="reset"
                    class="btn btn--ghost"
                >
                    مسح
                </button>

                <button
                    type="submit"
                    class="btn btn--primary"
                >
                    تحديث كلمة المرور
                </button>

            </div>

        </form>

    </section>

</div>

@endsection