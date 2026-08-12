<?php
if(isset($_GET['c']) && $_GET['c'] == 1) {
    echo "<div class=\"headline\"><span class=\"f10 c5\"><?=INS10?></span></div><br>";
}
?>
<div class="b-articlesmall" style="direction: rtl; text-align: right; background: #f7fafc; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #e2e8f0;">
    <h3 style="margin-top:0; color: #2b6cb0;">📅 ابزار تبدیل تاریخ و زمان دلخواه به تایم‌استمپ (تاریخ شمسی / میلادی)</h3>
    <p style="font-size: 13px; color: #4a5568;">
        شما می‌توانید تاریخ و زمان دقیق شروع سرور و کتیبه‌ها را به صورت تقویم انتخابی یا متن تاریخ (مثلاً <code style="background:#edf2f7; padding:2px 5px;">2026-08-25 18:00</code>) وارد کنید. سیستم به صورت خودکار آن را به تایم‌استمپ تبدیل خواهد کرد.
    </p>
</div>

<form action="process.php" method="post" id="dataform" style="direction: rtl; text-align: right;">

    <h3>تنظیمات اصلی سرور</h3>
    <table cellpadding="4">
        <tr>
            <td><span class="f9 c6">نام سرور:</span></td>
            <td><input type="text" name="servername" id="servername" value="تراوین آنلاین"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">سرعت سرور (Speed):</span></td>
            <td><input name="speed" type="text" id="speed" value="100" size="4"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">سرعت نیروها (Troop Speed):</span></td>
            <td><input type="text" name="incspeed" id="incspeed" value="100" size="4"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">ظرفیت تجار (Trader Capacity):</span></td>
            <td><input type="text" name="tradercap" id="tradercap" value="1" size="4"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">ظرفیت مخفیگاه (Cranny Capacity):</span></td>
            <td><input type="text" name="cranny" id="cranny" value="1" size="4"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">اندازه نقشه:</span></td>
            <td>
                <select name="wmax">
                    <option value="25">25 x 25</option>
                    <option value="50">50 x 50</option>
                    <option value="100" selected="selected">100 x 100</option>
                    <option value="200">200 x 200</option>
                    <option value="400">400 x 400</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">آدرس دامنه سایت (Homepage):</span></td>
            <td><input name="homepage" type="text" id="homepage" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">زمان حمایت تازه واردین (ثانیه):</span></td>
            <td>
                <select name="beginner">
                    <option value="7200">2 ساعت</option>
                    <option value="43200">12 ساعت</option>
                    <option value="86400" selected="selected">24 ساعت (1 روز)</option>
                    <option value="172800">48 ساعت (2 روز)</option>
                    <option value="259200">72 ساعت (3 روز)</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><span class="f9 c6">ضریب انبارها:</span></td>
            <td><input type="text" name="storage_multiplier" id="storage_multiplier" value="1"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">طلا اولیه ثبت نام:</span></td>
            <td><input type="text" name="defgold" id="defgold" value="100"></td>
        </tr>
    </table>

    <br />
    <h3 style="color:#2c3e50; border-bottom: 2px solid #e2e8f0; padding-bottom: 5px;">📍 تنظیم زمان‌بندی رویدادهای سرور (انتخاب تاریخ و زمان آسان)</h3>
    <p style="font-size: 12px; color: #718096;">می‌توانید تاریخ و زمان دقیق شروع را با تقویم یا فرمت <code>YYYY-MM-DDTHH:MM</code> مشخص کنید.</p>

    <table cellpadding="6">
        <tr>
            <td><strong>زمان شروع سرور (Opening Time):</strong></td>
            <td>
                <input type="datetime-local" name="opening_date" value="<?php echo date('Y-m-d\TH:i', time()); ?>" style="padding: 5px; font-size: 14px;">
            </td>
        </tr>
        <tr>
            <td><strong>زمان آزاد شدن کتیبه‌ها (Artefacts Release):</strong></td>
            <td>
                <input type="datetime-local" name="ARTEFACTS_date" value="<?php echo date('Y-m-d\TH:i', time() + 86400*3); ?>" style="padding: 5px; font-size: 14px;">
            </td>
        </tr>
        <tr>
            <td><strong>زمان ظهور شگفتی جهان (WW Time):</strong></td>
            <td>
                <input type="datetime-local" name="WW_TIME_date" value="<?php echo date('Y-m-d\TH:i', time() + 86400*5); ?>" style="padding: 5px; font-size: 14px;">
            </td>
        </tr>
        <tr>
            <td><strong>زمان آزاد شدن نقشه ساخت شگفتی (WW Plans):</strong></td>
            <td>
                <input type="datetime-local" name="WW_PLAN_date" value="<?php echo date('Y-m-d\TH:i', time() + 86400*6); ?>" style="padding: 5px; font-size: 14px;">
            </td>
        </tr>
    </table>

    <br />
    <h3 style="color:#2c3e50; border-bottom: 2px solid #e2e8f0; padding-bottom: 5px;">🗄️ تنظیمات دیتابیس (مخصوص این سرور)</h3>
    <table cellpadding="4">
        <tr>
            <td><span class="f9 c6">آدرس سرور دیتابیس (Host):</span></td>
            <td><input name="sserver" type="text" id="sserver" value="localhost"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">نام کاربری دیتابیس (DB User):</span></td>
            <td><input name="suser" type="text" id="suser" value="root"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">رمز عبور دیتابیس (DB Pass):</span></td>
            <td><input type="password" name="spass" id="spass"></td>
        </tr>
        <tr>
            <td><span class="f9 c6">نام دیتابیس (DB Name):</span></td>
            <td><input type="text" name="sdb" id="sdb" value="travian_s1"></td>
        </tr>
    </table>

    <br />
    <center style="margin-top: 20px;">
        <input type="submit" name="Submit" id="Submit" value="تایید و نصب اسکریپت" style="background: #3182ce; color: white; border: none; padding: 10px 25px; border-radius: 6px; font-weight: bold; cursor: pointer; font-size: 15px;">
        <input type="hidden" name="subconst" value="1">
    </center>
</form>
