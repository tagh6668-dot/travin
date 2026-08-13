<?php
	require_once('UI/Login.php');
	require_once('UI/Register.php');
	require_once('UI/Footer.php');
	require_once('UI/ToolBar.php');
	require_once('UI/Support.php');
	require_once('UI/Admin.php');
	require_once('UI/Errors.php');
	require_once('UI/Build.php');
	require_once('UI/News.php');
	require_once('UI/Plus.php');
	require_once('UI/Options.php');
	require_once('UI/Manual.php');

	define("BUILDING_BUILDING","ساختمان‌ها:");
define("BUILDING_COMPLETE","تکمیل فوری");
define("BUILDING_LEVEL","سطح");
define("BUILDING_QUEUE","صف");
define("BUILDING_TIMER","ساعت. پایان در ");
define("BUILDING_ARCHITECT","ساختمان");

define("SIDEINFO_HERO1","قهرمان شما مرده است");
define("SIDEINFO_HERO2","قهرمان سالم است");
define("SIDEINFO_HERO3","قهرمان در دهکده اصلی خود است");
define("SIDEINFO_HERO4","قهرمان شما در دهکده شما است");
define("SIDEINFO_HERO5","در راه");
define("SIDEINFO_HERO5H","در دهکده");
define("SIDEINFO_HERO6","دهکده اصلی قهرمان");
define("SIDEINFO_HERO7","هیچ قهرمانی وجود ندارد");
define("SIDEINFO_HERO8","نمای کلی");
define("SIDEINFO_HERO9","ماجراجویی‌ها");
define("SIDEINFO_HERO10","ماجراجویی‌های موجود");
define("SIDEINFO_HERO11","درمان");
define("SIDEINFO_HERO12","تجربه");


//exchange gold and silver
define("exchange0","مبدل نقره");
define("exchange1","تبدیل");
define("exchange2","طلای کافی نداری");
define("exchange3","نقرهٔ کافی نداری");
define("exchange4","مقدار طلایی برای تبدیل وارد نشده");
define("exchange5","انتقال طلا");
define("exchange6","طلای کافی نداری");
define("exchange7","مبدل نقره");
define("exchange8","تبدیل نقره به طلا");
define("exchange9","ادامه");
define("exchange10","ماجراجویی انجام بده تا حراجی باز شود!");


	define("LANG_UR","en");
	define("DIRECTION","ltr");
	define("DIRECTION_2","left");
	define("LOCATION_NAME","Global - EN");

	define("INCLUDED","");
define("INS0","تغییر سطح دسترسی پوشه‌ها (CHMOD)");
define("INS1","پس از نصب");
define("INS2","پوشه install را حذف کنید");
define("INS3","سطح دسترسی پوشه GameEngine را دوباره روی 644 قرار دهید");
define("INS4","با نصب یا استفاده از این بازی، شما کاملاً مسئول هرگونه پیامد قانونی ناشی از انتشار محتوای بدون مجوز توسط نسخهٔ خود از این بازی خواهید بود.");
define("INS5","نه تیم سازنده این اسکریپت و نه تیمی که آن را سفارشی‌سازی کرده است مسئول هیچ‌گونه خسارت وارد شده به سیستم کامپیوتر یا سرور شما نخواهند بود.");
define("INS6","تمام کدها هنگام انتشار توسط تیم سازنده بدون مشکل اجرا شده و هیچ خطر امنیتی شناخته‌شده‌ای در آن زمان مشاهده نشده است. همین موضوع درباره تیم سفارشی‌سازی‌کننده این نسخه نیز صدق می‌کند.");
define("INS7","از کاربران خواسته می‌شود کدها را شخصاً بررسی کنند.");
define("INS8","شما اجازه ویرایش اعلان‌های کپی‌رایت یا ادعای مالکیت این اسکریپت را ندارید.");
define("INS9","و در نهایت، لذت ببرید.");
define("INS10","خطا در ایجاد فایل constant.php، سطح دسترسی (CHMOD) را بررسی کنید.");
define("INS11","ماه");
define("INS12","روز");
define("INS13","سال");
define("INS14","ساعت");
define("INS15","دقیقه");
define("INS16","ثانیه");
define("INS17","نام سرور:");
define("INS18","سرعت سرور:");
define("INS19","سرعت حرکت نیروها:");
define("INS20","ظرفیت بازار (1 = 1x):");
define("INS21","اندازه نقشه:");
define("INS21M","25x25");
define("INS22","50x50");
define("INS23","100x100");
define("INS24","150x150");
define("INS25","200x200");
define("INS26","250x250");
define("INS27","300x300");
define("INS28","350x350");
define("INS29","400x400");
define("INS30","صفحه اصلی:");
define("INS31","حفاظت بازیکن تازه‌کار");
define("INS31M","2 ساعت");
define("INS32","3 ساعت");
define("INS33","5 ساعت");
define("INS34","8 ساعت");
define("INS35","10 ساعت");
define("INS36","12 ساعت");
define("INS37","24 ساعت (1 روز)");
define("INS38","48 ساعت (2 روز)");
define("INS39","72 ساعت (3 روز)");
define("INS40","120 ساعت (5 روز)");
define("INS41","ظرفیت انبار:");
define("INS42","فعال شدن میدان تمرین (بعد از چند خانه):");
define("INS43","مدیر");
define("INS44","نمایش مدیر در صفحه:");
define("INS45","بله");
define("INS46","خیر");
define("INS47","تنظیمات پایگاه داده (SQL)");
define("INS48","نام هاست:");
define("INS49","نام کاربری:");
define("INS50","رمز عبور:");
define("INS51","نام پایگاه داده:");
define("INS52","تنظیمات تراوین پلاس");
define("INS53","مدت زمان تراوین پلاس:");
define("INS54","12 ساعت");
define("INS55","1 روز");
define("INS56","2 روز");
define("INS57","3 روز");
define("INS58","4 روز");
define("INS59","5 روز");
define("INS60","6 روز");
define("INS61","7 روز");
define("INS62","بونوس +25٪:");
define("INS63","12 ساعت");
define("INS64","1 روز");
define("INS65","2 روز");
define("INS66","3 روز");
define("INS67","4 روز");
define("INS68","5 روز");
define("INS69","6 روز");
define("INS70","7 روز");
define("INS71","آیا منابع قابل فروش باشند؟");
define("INS72","بله");
define("INS73","خیر");
define("INS74","آیا امتیاز فرهنگی قابل فروش باشد؟");
define("INS75","بله");
define("INS76","خیر");
define("INS77","چه مقدار منبع فروخته شود؟");
define("INS78","هزینه منابع");
define("INS79","قیمت امتیاز فرهنگی");
define("INS80","چه مقدار امتیاز فرهنگی؟");
define("INS81","مقدار پیش‌فرض طلا");
define("INS82","تعداد دهکده‌های ارجاعی");
define("INS83","طلای دعوت");
define("INS84","تنظیمات سرور");
define("INS85","شروع سرور:");
define("INS86","تاریخ به صورت Timestamp (تولید از UTC+0 انجام می‌شود)");
define("INS87","آرتیفکت‌ها:");
define("INS88","(تاریخ Timestamp)");
define("INS89","دهکده‌های شگفتی دنیا:");
define("INS90","تاریخ Timestamp");
define("INS91","اسکرول‌ها:");
define("INS92","تاریخ Timestamp");
define("INS92M","مقدار امتیاز فرهنگی:");
define("INS93","زیاد");
define("INS94","کم");
define("INS95","ماموریت‌ها");
define("INS96","بله");
define("INS97","خیر");
define("INS98","حداکثر تعداد تصاویر کش نقشه");
define("INS99","حداکثر تعداد تصاویر کش قهرمان");
define("INS100","کیفیت نقشه");
define("INS101","ساخت فوری نیروها");
define("INS102","بله");
define("INS103","خیر");
define("INS104","زمان حراج");
define("INS105","نرخ واحه‌ها");
define("INS106","مدت حفاظت تازه‌کار هر 12 ساعت افزایش می‌یابد ...(بر حسب ثانیه)");
define("INS107","اگر هاست شما فضای زیادی ندارد لطفاً توجه کنید!");
define("INS108","1000 تصویر ≈ حدود 80MB");
define("INS109","اگر هاست شما رم زیادی ندارد لطفاً توجه کنید");
define("INS110","1000 تصویر ≈ حدود 2.60GB");
define("INS111","کیفیت عالی = 100 ، متوسط = 75 (تصویر حدود 3 برابر ضعیف‌تر از حداکثر خواهد بود)");
define("INS112","پر کردن واحه‌ها");
define("INS113","هشدار");
define("INS114",": این کار ممکن است کمی زمان ببرد. کلیک نکنید و صبر کنید تا صفحه بعدی بارگذاری شود!");
define("INS115","ایجاد حساب Multihunter");
define("INS116","نام:");
define("INS117","رمز عبور:");
define("INS118","توجه: این رمز را به خاطر بسپارید! برای پنل مدیریت (ACP) به آن نیاز دارید");
define("INS119","خطا در ایجاد wdata. تنظیمات یا فایل را بررسی کنید.");
define("INS120","ایجاد داده‌های جهان");
define("INS121","هشدار");
define("BUILDING_CANCEL","لغو");
define("INS122",": این کار ممکن است کمی زمان ببرد. کلیک نکنید و صبر کنید تا صفحه بعدی بارگذاری شود!");
define("INS123","از نصب این اسکریپت متشکریم.");
define("INS124","لطفاً پوشه نصب را حذف یا تغییر نام دهید.");
define("INS125","تمام فایل‌ها قرار داده شدند و پایگاه داده ایجاد شد. اکنون می‌توانید در سرور تراوین خود بازی را شروع کنید.");
define("INS126","خطا در وارد کردن پایگاه داده. تنظیمات را بررسی کنید.");
define("INS127","ایجاد ساختار SQL");
define("INS128","هشدار: این کار ممکن است کمی زمان ببرد. کلیک نکنید و منتظر بمانید تا صفحه بعدی بارگذاری شود");
define("INS129","روزانه چند ماجراجویی داده شود؟");


	define("CLANG","انتخاب زبان:");
define("MULTI_RULES","ممنوع:<br/>ثبت بیش از یک اکانت با یک IP.<br/>اینکه با برادر/خواهر/خانواده بازی می‌کنید اهمیتی ندارد: یک IP = یک اکانت.<br/>
ثبت اکانت با کمک دوستان یا IPهای جعلی ممنوع است.<br/>اکانت‌های این‌چنینی شناسایی شده و جریمه خواهند شد:<br/>برای مثال حذف 50٪ از نیروها.<br />صادق باشید و منصفانه بازی کنید.");
define("OK","تأیید");
define("CROPFINDER","جستجوی گندم");
define("MAP","نقشه");
define("MINIMAP","نقشه کوچک");
define("GO","برو");
define("GO_TO","برو به");
define("PLEASE_WAIT","لطفاً صبر کنید");

define("CATEGORY","دسته‌بندی");
define("EDITPROFILE","ویرایش پروفایل");
define("COORDIANTES","مختصات");
define("POPULATION","جمعیت");
define("WOOD","چوب");
define("ABONDENDVALLY","دره متروکه");
define("UNOCCUPIEDOASES","واحه‌های خالی");
define("UNOCCUPIEDOASIS","واحه خالی");
define("OCCUPIEDOASES","واحه‌های اشغال‌شده");
define("OCCUPIEDOASIS","واحه اشغال‌شده");
define("ABANDONEDVALLEY","دره متروکه");
define("BUILDRALLYPOINTTORAID","(ساخت میدان تجمع)");
define("PLAYER","بازیکن");
define("TRIBE","قبیله");
define("VILLAGE","دهکده");
define("ALLIANCE","اتحاد");
define("SIDEINFO_ADVENTURES","ماجراجویی");
define("SIDEINFO_AUCTIONS","حراج");
define("SIDEINFO_PROFILE","پروفایل");
define("SIDEINFO_ALLIANCE","اتحاد");
define("SIDEINFO_ALLY_FORUM","انجمن اتحاد");
define("SIDEINFO_CHANGE_TITLE","برای تغییر عنوان کلیک کنید");
define("SIDEINFO_CHANGEVIL_TITLE","تغییر نام دهکده");
define("SIDEINFO_CHANGEVIL_LABEL","نام جدید دهکده");
define("SIDEINFO_CHANGEVIL_BTN","تأیید");
define("HEADER_MESSAGE_NEW","جدید");



	define("MAINMENU","Main Menu");


	define("POPUALTION","جمعیت");
	//MAIN MENU
	define("TRIBE1","رومی‌ها");
	define("TRIBE2","واکینگ ها");
	define("TRIBE3","گول ها");
	define("TRIBE4","طبیعت");
	define("TRIBE5","ناتارها");
	define("TRIBE6","مصری‌ها");
	define("TRIBE7","هون‌ها");
	define("PRISONERS","زندانی‌ها");
	define("PRISONERSIN","زندانی در");
	define("PRISONERSFROM","زندانی از");
	define("HOME","صفحه اصلی");
	define("PW_ER","رمز عبور اشتباهه");
	define("INSTRUCT","راهنما");
	define("ADMIN_PANEL","پنل مدیریت");
	define("MASS_MESSAGE","پیام همگانی");
	define("LOGOUT","خروج");
	define("PROFILE","پروفایل");
	define("SUPPORT","پشتیبانی");
	define("RULES","قوانین");


	define("P","P");
define("L","l");
define("U","u");
define("S","s");
define("UPDATE_T_10","به‌روزرسانی 10 بازیکن برتر");
define("SYSTEM_MESSAGE","پیام سیستم");
define("TRAVIAN_PLUS","تراوین <b><font color=\"#71D000\">P</font><font color=\"#FF6F0F\">l</font><font color=\"#71D000\">u</font><font color=\"#FF6F0F\">s</font></b>");
define("CONTACT","تماس با ما");
define("HEADER_MESSAGES_NEW","جدید");

define("HEADER_PLUS","پلاس");
define("HEADER_ADMIN","مدیریت");
define("HEADER_PLUSMENU","منوی پلاس");

define("HEADER_DORF1","منابع");
define("HEADER_DORF2","مرکز دهکده");
define("HEADER_STATS","آمار");
define("HEADER_MAP","نقشه");
define("HEADER_NOTICES","گزارش‌ها");
define("HEADER_MESSAGES","پیام‌ها");

define("HEADER_GOLD","طلا");
define("HEADER_SILVER","نقره");
define("HEADER_NIGHT","شب");
define("HEADER_DAY","روز");
define("HEADER_NOTICES_NEW","گزارش جدید");
define("NO_PERMISSION","دسترسی ندارید");



	define("LOGOUT_TITLE","خروج با موفقیت انجام شد!");
define("LOGOUT_H4","از بازدید شما متشکریم");
define("LOGOUT_DESC","اگر افراد دیگری هم از این کامپیوتر استفاده می‌کنند، برای امنیت بیشتر کوکی‌های خود را پاک کنید:");
define("LOGOUT_LINK","پاک کردن کوکی‌ها");
define("PREREG1","سرعت حرکت نیروها");
define("PREREG2","مدیر");
define("PREREG3","مدال‌ها در ");
define("PREREG4","سرور شروع می‌شود در: ");
define("PREREG5","تا شروع: ");

define("LOGIN_PW_SENT","پیام بازیابی رمز عبور برای شما ارسال شد.");

define("REGISTER_USERINFO","ثبت‌نام");
define("REGISTER_USERNAME","نام کاربری");
define("REGISTER_EMAIL","ایمیل");
define("REGISTER_PASSWORD","رمز عبور");
define("REGISTER_STARTER","");
define("REGISTER_SELECT_TRIBE","انتخاب قبیله");
define("REGISTER_LOCATION","موقعیت");
define("REGISTER_NE","شمال‌شرق");
define("REGISTER_NW","شمال‌غرب");
define("REGISTER_SE","جنوب‌شرق");
define("REGISTER_SW","جنوب‌غرب");
define("REGISTER_RANDOM","تصادفی");
define("REGISTER_MOREINFO","قوانین و شرایط");
define("REGISTER_CLOSED","ثبت‌نام بسته است. در حال حاضر نمی‌توانید در این سرور ثبت‌نام کنید.");
define("newmsg","پیام جدید:");

	//MENU
define("REG","ثبت‌نام");
define("FORUM","انجمن");
define("CHAT","چت");
define("IMPRINT","درباره ما");
define("MORE_LINKS","لینک‌های بیشتر");
define("TOUR","معرفی بازی");

	//PLUS
define("PLUS0","امکانات پلاس");
define("PLUS1","نمای کلی");
define("PLUS2","مدت زمان");
define("PLUS3","طلا");
define("PLUS4","عملکرد");
define("PLUS5","شما دارید ");
define("PLUS6","سکه طلایی");
define("PLUS7","مانده:");
define("PLUS8","روز");
define("PLUS9","ساعت");
define("PLUS10","دقیقه");
define("PLUS11","طلا");
define("PLUS12","فعال‌سازی");
define("PLUS13","تمدید");
define("PLUS14","طلای کافی نداری");
define("PLUS15","تولید: چوب");
define("PLUS16","تولید: سفال");
define("PLUS17","تولید: آهن");
define("PLUS18","تولید: گندم");
define("PLUS19","بازار NPC");
define("PLUS20","اکنون");
define("PLUS21","به بازار!");
define("PLUS22","تبدیل طلا و نقره");
define("PLUS23","تبدیل");
define("PLUS24","تکمیل همه ساخت‌وسازها و پژوهش‌ها");
define("PLUS25","تکمیل");
define("PLUS26","خرید");
define("PLUS27","امتیاز فرهنگی");
define("PLUS28","خرید");
define("PLUS29","انواع منابع");
define("PLUS30","روز");
define("PLUS31","باشگاه طلایی");
define("PLUS32","امکانات باشگاه طلایی:");
define("PLUS33","۱. لیست فارم‌ها");
define("PLUS34","۲. مسیرهای تجاری");
define("PLUS35","۳. پناه خودکار نیروها");
define("PLUS36","۴. جست‌وجوگر گندم");
define("PLUS37","۵. استاد سازنده");
define("PLUS38","۶. تجارت x3");
define("PLUS39","تمام قابلیت‌ها رایگان هستند!");
define("PLUS40","کل بازی");
define("PLUS41","فعال شد");




	//active
define("ACTIV1","سلام");
define("ACTIV2","ثبت‌نام با موفقیت انجام شد. در چند دقیقه آینده ایمیلی حاوی اطلاعات ورود برای شما ارسال می‌شود.<br /><br /> ایمیل به این آدرس فرستاده خواهد شد:");
define("ACTIV3","برای فعال‌سازی حساب خود، کد فعال‌سازی را وارد کنید یا روی لینک موجود در ایمیل کلیک کنید.");
define("ACTIV4","کد فعال‌سازی");
define("ACTIV5","ایمیلی دریافت نکردی؟");
define("ACTIV6","گاهی اوقات ایمیل به پوشه اسپم منتقل می‌شود. برای دریافت راهنمایی بیشتر کلیک کن ");
define("ACTIV7","اینجا");
define("ACTIV8","می‌توانی ثبت‌نام را لغو کرده و دوباره با <u>آدرس ایمیل جدید</u> ثبت‌نام کنی. در این صورت کد فعال‌سازی مجدداً ارسال خواهد شد.");
define("ACTIV9","حساب کاربری‌ات با موفقیت فعال شد.</p><p class=\"f9\">برای ورود روی این لینک کلیک کن: <a href=\"login.php\">ورود</a>");
define("ACTIV10","یا رمز عبور اشتباه است یا ثبت‌نام قبلاً حذف شده است.");

//ERRORS
define("USRNM_EMPTY","(نام کاربری وارد نشده)");
define("USRNM_TAKEN","(نام کاربری قبلاً استفاده شده است)");
define("USRNM_SHORT","(حداقل ۳ کاراکتر)");
define("USRNM_CHAR","(کاراکترهای نامعتبر، فقط از حروف و اعداد استفاده کن: А-Я, A-Z, 0-9)");
define("PW_EMPTY","(رمز عبور وارد نشده)");
define("PW_SHORT","(حداقل ۴ کاراکتر)");
define("PW_INSECURE","(رمز عبور ناامن است. لطفاً رمزی قوی‌تر انتخاب کن.)");
define("EMAIL_EMPTY","(ایمیل وارد نشده)");
define("EMAIL_INVALID","(آدرس ایمیل نامعتبر است)");
define("EMAIL_TAKEN","(این ایمیل قبلاً استفاده شده است)");
define("TRIBE_EMPTY","<li>لطفاً یک قبیله انتخاب کن.</li>");
define("AGREE_ERROR","<li>برای ثبت‌نام باید با قوانین و شرایط بازی موافقت کنی.</li>");
define("LOGIN_USR_EMPTY","نام کاربری را وارد کن.");
define("LOGIN_PASS_EMPTY","رمز عبور را وارد کن.");
define("EMAIL_ERROR","ایمیل با حساب موجود مطابقت ندارد.");
define("PASS_MISMATCH","رمزهای عبور مطابقت ندارند.");
define("ALLI_OWNER","قبل از حذف، لطفاً یک رهبر برای اتحاد تعیین کن.");
define("SIT_ERROR","بازیکن مراقب (Sitter) از قبل تنظیم شده است.");
define("USR_NT_FOUND","نام کاربری پیدا نشد.");
define("LOGIN_PW_ERROR","رمز عبور اشتباه است.");
define("WEL_TOPIC","نکات مفید و اطلاعات کاربردی");
define("ATAG_EMPTY","تگ وارد نشده");
define("ANAME_EMPTY","نام وارد نشده");
define("ATAG_EXIST","تگ قبلاً استفاده شده است");
define("ANAME_EXIST","نام قبلاً استفاده شده است");

define("CUR_PROD","تولید فعلی");
define("NEXT_PROD","تولید در سطح ");
//BUILDINGS
define("B1","چوب‌بُر");
define("B1_DESC","چوب‌بُر درختان را قطع می‌کند تا چوب تولید شود. هرچه سطح این ساختمان بالاتر برود، میزان تولید چوب بیشتر می‌شود.");
define("B2","خاک‌رس‌دان");
define("B2_DESC","خاک‌رس در اینجا تولید می‌شود. با افزایش سطح آن، تولید خاک‌رس هم بیشتر می‌شود.");
define("B3","معدن آهن");
define("B3_DESC","در اینجا معدن‌کاران منبع ارزشمند آهن را استخراج می‌کنند. با افزایش سطح معدن، تولید آهن بیشتر می‌شود.");
define("B4","زمین کشاورزی");
define("B4_DESC","غذای جمعیت شما در اینجا تولید می‌شود. با افزایش سطح مزرعه، تولید گندم افزایش می‌یابد.");

//DORF1
define("LUMBER","چوب");
define("CLAY","خاک‌رس");
define("IRON","آهن");
define("CROP","گندم");
define("LEVEL","سطح");
define("CROP_COM",CROP." مصرف");
define("PER_HR","در ساعت");
define("PROD_HEADER","تولید");
define("ANNOUNCEMENT","اعلان");
define("GO2MY_VILLAGE","برو به دهکده من");
define("VILLAGE_CENTER","مرکز دهکده");
define("FINISH_GOLD","آیا می‌خواهی همه ساخت‌وسازها و پژوهش‌های این دهکده را فوراً با ۲ طلا تکمیل کنی؟");
define("WAITING_LOOP","(در انتظار)");
define("HRS","(ساعت)");
define("DONE_AT","اتمام در");
define("CANCEL","لغو");
define("LOYALTY","وفاداری");
define("CALCULATED_IN","محاسبه در");
define("SEVER_TIME","زمان سرور:");



	//======================================================//
	//================ UNITS - DO NOT EDIT! ================//
	//======================================================//
	define("U0","قهرمان");

//ROMAN UNITS
define("U1","لژیونر");
define("U2","پریتوریَن");
define("U3","ایمپریان");
define("U4","سواره‌نظام لگاتی");
define("U5","سواره‌نظام ایمپراتوریس");
define("U6","سواره‌نظام سزار");
define("U7","دژکوب");
define("U8","منجنیق آتشین");
define("U9","سناتور");
define("U10","مهاجر");

//TEUTON UNITS
define("U11","چماق‌دار");
define("U12","نیزه‌دار");
define("U13","تبرزن");
define("U14","کاوشگر");
define("U15","پالادین");
define("U16","شوالیه توتونیک");
define("U17","دژکوب");
define("U18","منجنیق");
define("U19","رئیس قبیله");
define("U20","مهاجر");

//GAUL UNITS
define("U21","نیزه دار");
define("U22","شمشیرزن");
define("U23","ردیاب");
define("U24","رعد تئوتاتس");
define("U25","سوار دروید");
define("U26","هیدوئن");
define("U27","دژکوب");
define("U28","تریبوشت");
define("U29","رئیس قبیله");
define("U30","مهاجر");
define("U99","تله");

//NATURE UNITS
define("U31","موش");
define("U32","عنکبوت");
define("U33","مار");
define("U34","خفاش");
define("U35","گراز وحشی");
define("U36","گرگ");
define("U37","خرس");
define("U38","تمساح");
define("U39","ببر");
define("U40","فیل");

//NATARS UNITS
define("U41","نیزه‌دار");
define("U42","جنگجوی خاردار");
define("U43","نگهبان");
define("U44","پرندگان شکاری");
define("U45","تبرسوار");
define("U46","شوالیه ناتار");
define("U47","فیل جنگی");
define("U48","بالیستا");
define("U49","امپراتور ناتار");
define("U50","مهاجر ناتار");

//Egyptian UNITS
define("U51","شبه‌نظامی برده");
define("U52","نگهبان خاکستر");
define("U53","جنگجوی خوپش");
define("U54","کاوشگر سوپدو");
define("U55","نگهبان انهور");
define("U56","ارابه رشپ");
define("U57","دژکوب");
define("U58","منجنیق سنگی");
define("U59","نومارخ");
define("U60","مهاجر");

//Huns UNITS
define("U61","مزدور");
define("U62","کماندار");
define("U63","ردیاب");
define("U64","سوار استپ");
define("U65","تیرانداز ماهر");
define("U66","غارتگر");
define("U67","دژکوب");
define("U68","منجنیق");
define("U69","لوگادس");
define("U70","مهاجر");

define("U99","تله");

	//INDEX.php

define("PLAYER_STATISTICS","آمار بازیکنان");

define("P_ONLINE","بازیکنان آنلاین: ");
define("P_TOTAL","تعداد کل بازیکنان: ");
define("CHOOSE","لطفاً یک سرور انتخاب کنید.");
//define("STARTED"," The server started ". round((time()-COMMENCE)/86400) ." days ago.");

//ANMELDEN.php
define("NICKNAME","نام کاربری");

define("INVITED","دعوت شده توسط (در صورت وجود)");
define("EMAIL","ایمیل");
define("PASSWORD","رمز عبور");
define("ROMANS","رومی‌ها");
define("TEUTONS","توتون‌ها");
define("GAULS","گول‌ها");
define("NW","شمال‌غرب");
define("NE","شمال‌شرق");
define("SW","جنوب‌غرب");
define("SE","جنوب‌شرق");
define("RANDOM","تصادفی");
define("ACCEPT_RULES"," قوانین بازی و <a href='rules.php' target='_blank'>شرایط</a> را می‌پذیرم.");
define("ONE_PER_SERVER","هر بازیکن تنها می‌تواند یک حساب در هر سرور داشته باشد.");
define("BEFORE_REGISTER","قبل از ثبت‌نام بهتر است <a href='../anleitung.php' target='_blank'>قوانین</a> را مطالعه کنید.");
define("MULTIBAN","یک کامپیوتر = یک حساب. تمام چندحسابی‌ها مسدود خواهند شد!");
define("HOURS","ساعت");
define("SIGN1","ثبت‌نام");
define("SIGN2","انتخاب قبیله");
define("SIGN3","انتخاب ناحیه");
define("SIGN4","صفحه اصلی");
define("SIGN5","ثبت‌نام");
define("SIGN6","ورود");
define("SIGN7","فعال‌سازی حساب");
define("SIGN8","بانک");

	//QUESTS
define("QST0","ماموریت");
define("QST1","وظیفه");
define("QST2","چوب‌بُر");
define("QST3","ساخت چوب‌بُر سطح <b>5</b>");
define("QST4","زمین کشاورزی");
define("QST5","ساخت زمین کشاورزی سطح <b>3</b>");
define("QST6","آهن و خاک‌رس");
define("QST7","ساخت معدن آهن و خاک‌رس‌دان تا سطح <b>4</b>");
define("QST8","ساختمان اصلی");
define("QST9","ساخت ساختمان اصلی سطح <b>8</b>");
define("QST10","اقتصادی");
define("QST11","ساخت انبار و انبار غله سطح <b>4</b>، بازارچه سطح <b>1</b>");
define("QST12","نظامی‌سازی");
define("QST13","ساخت میدان تجمع سطح <b>1</b>، پادگان سطح <b>3</b>");
define("QST14","حفاظت قابل اعتماد");
define("QST15","آموزش 100 نیرو و ساخت دیوار سطح <b>8</b>");
define("QST16","اولین خون");
define("QST17","کسب <b>1000</b> امتیاز حمله.");
define("QST18","زنده باد سوسیوم!");
define("QST19","از یکی از گروه‌های ما بازدید کنید");
define("QST20","پایان وظایف!");
define("QST21","در حال حاضر ماموریت دیگری وجود ندارد. در آینده ماموریت‌های بیشتری اضافه خواهد شد، اما فعلاً بازی خوبی داشته باشید! :)");
define("QST22","عالیه! جایزه شما:");
define("QST23","به ماموریت بعدی!");

//ATTACKS ETC.
define("TROOP_MOVEMENTS","حرکت نیروها:");
define("ARRIVING_REINF_TROOPS","نیروهای کمکی در حال رسیدن");
define("ARRIVING_REINF_TROOPS_SHORT","کمکی");
define("OWN_ATTACKING_TROOPS","نیروهای در حال حمله شما");
define("ATTACK","حمله");
define("OWN_REINFORCING_TROOPS","نیروهای کمکی شما");
define("TROOPS_DORF","نیروها:");



	//LOGIN.php
define("COOKIES","برای ورود باید کوکی‌های مرورگر فعال باشند. اگر این کامپیوتر را با دیگران استفاده می‌کنید، برای امنیت بیشتر پس از هر بار بازی از حساب خود خارج شوید.");
define("NAME","نام");
define("PW_FORGOTTEN","رمز عبور را فراموش کرده‌اید؟");
define("PW_REQUEST","می‌توانید درخواست رمز جدید بدهید تا به ایمیل شما ارسال شود.");
define("PW_GENERATE","همه فیلدها الزامی هستند");
define("EMAIL_NOT_VERIFIED","ایمیل تأیید نشده است!");
define("EMAIL_FOLLOW","برای فعال‌سازی حساب خود این لینک را دنبال کنید.");
define("VERIFY_EMAIL","تأیید ایمیل");
define("LOGIN_SERVER_START","شروع سرور در:");
define("LOGIN_FOR_GAME","ورود");

//404.php
define("NOTHING_HERE","اینجا چیزی نیست!");
define("WE_LOOKED","ما حتی 404 بار هم گشتیم، اما چیزی پیدا نکردیم!");

//TIME RELATED
define("CALCULATED","محاسبه شده در");
define("SERVER_TIME","زمان سرور:");

//MASSMESSAGE.php
define("MASS","متن پیام");
define("MASS_SUBJECT","موضوع:");
define("MASS_COLOR","رنگ پیام:");
define("MASS_REQUIRED","همه فیلدها الزامی هستند");
define("MASS_UNITS","تصاویر (واحدها):");
define("MASS_SHOWHIDE","نمایش/مخفی");
define("MASS_READ","توجه: بعد از افزودن شکلک، باید بعد از شماره کلمه left یا right را اضافه کنید، در غیر این صورت تصویر نمایش داده نمی‌شود");
define("MASS_CONFIRM","تأیید");
define("MASS_REALLY","آیا واقعاً می‌خواهید MassIGM ارسال کنید؟");
define("MASS_ABORT","لغو عملیات");
define("MASS_SENT","Mass IGM ارسال شد");

// Menu items
define("GAME_TOUR","گردش در بازی");

define("FORUM_LINK","http://forum.travian.com");
define("MORE_GAMES","بازی‌های بیشتر");
define("REGISTER","ثبت‌نام");
define("LOGIN","ورود");
define("MANUAL","راهنما");
define("TUTORIAL","آموزش");

define("FAQ","سؤالات متداول");
define("SPIELREGELN","قوانین بازی");
define("AGB","شرایط استفاده");

define("LINKS","لینک‌ها");

define("INSTRUCTIONS","دستورالعمل‌ها");
define("MULTIHUNTER_PANEL","پنل مولتی‌هانتر");
define("UPDATE_TOP_TEN","به‌روزرسانی 10 نفر برتر");

define("HELP","کمک");

// Index


//profile
define("PROFHEAD","");
define("ACC1","تغییر رمز عبور");
define("ACC2","رمز عبور فعلی");
define("ACC3","رمز عبور جدید");
define("ACC4","تغییر ایمیل");
define("ACC5","لطفاً ایمیل قدیمی و ایمیل جدید خود را وارد کنید. سپس یک کد تأیید به هر دو ایمیل ارسال می‌شود که باید آن را در اینجا وارد کنید.");
define("ACC6","ایمیل قدیمی");
define("ACC7","ایمیل جدید");
define("ACC8","سیتِرهای حساب");
define("ACC9","سیتِر می‌تواند با استفاده از نام شما و رمز عبور خودش وارد حساب شما شود. شما می‌توانید حداکثر دو سیتِر داشته باشید.");
define("ACC10","نام سیتِر");
define("ACC11","شما هیچ سیتری ندارید.");
define("ACC12","<td class=\"note\" colspan=\"2\">برای حذف سیتِر روی <img class=\"del\" src=\"img/x.gif\" title=\"حذف\" alt=\"حذف\"> کلیک کنید</td>");
define("ACC13","حذف حساب");
define("ACC14","می‌توانید حساب خود را از اینجا حذف کنید. پس از شروع فرآیند حذف، تکمیل آن 24 ساعت زمان می‌برد. شما می‌توانید این فرآیند را در 12 ساعت اول لغو کنید. مدیریت حذف حساب را لغو نخواهد کرد.");
define("ACC15","حذف حساب؟");
define("ACC16","رمز عبور خود را وارد کنید:");
define("ACC17","بله");
define("ACC18","خیر");
define("ACC19","حذف پس از:");
define("ACC20","این‌ها حساب‌هایی هستند که شما سیتِر آن‌ها هستید");
define("ACC21","سیتِر");
define("SAVE","ذخیره");

//menu prof
define("PROFM1","نمای کلی");
define("PROFM2","پروفایل");
define("PROFM3","لینک‌ها");
define("PROFM4","حساب کاربری");
define("PROFM5","نشست‌ها");
define("PROFM6","وضعیت");
define("PROFM7","چه کسی");
define("PROFM8","فعالیت‌های اخیر");
define("PROFM9","مالک");
define("PROFM10","معاون");
define("PROFM11","دوال");
define("PROFM12","شما");

//OVERVIEW
define("OVERVIEW1","بازیکن");
define("OVERVIEW2","جزئیات");
define("OVERVIEW3","توضیحات");
define("OVERVIEW4","رتبه");
define("OVERVIEW5","قبیله");
define("OVERVIEW6","اتحاد");
define("OVERVIEW7","دهکده");
define("OVERVIEW8","جمعیت");
define("OVERVIEW9","سن");
define("OVERVIEW10","مرد");
define("OVERVIEW11","زن");
define("OVERVIEW12","جنسیت");
define("OVERVIEW13","موقعیت");
define("OVERVIEW14","پروفایل");
define("OVERVIEW15","ارسال پیام");
define("OVERVIEW16","دهکده");
define("OVERVIEW17","نام");
define("OVERVIEW18","جمعیت");
define("OVERVIEW19","مختصات");
define("OVERVIEW20","پایتخت");
define("OVERVIEW21","مسدود شده");
define("OVERVIEW22","تاریخ تولد");
define("OVERVIEW23","ژانویه");
define("OVERVIEW24","فوریه");
define("OVERVIEW25","مارس");
define("OVERVIEW26","آوریل");
define("OVERVIEW27","مه");
define("OVERVIEW28","ژوئن");
define("OVERVIEW29","ژوئیه");
define("OVERVIEW30","اوت");
define("OVERVIEW31","سپتامبر");
define("OVERVIEW32","نوامبر");
define("OVERVIEW33","دسامبر");
define("OVERVIEW35","مدال‌ها");
define("OVERVIEW36","دسته‌بندی");
define("OVERVIEW37","هفته");
define("OVERVIEW38","کد");
define("OVERVIEW39","مرد");
define("OVERVIEW40","زن");

//medals
define("MEDAL1","حمله‌کننده‌ی ");
define("MEDAL2","مدافعِ ");
define("MEDAL3","رشددهنده‌ی جمعیتِ ");
define("MEDAL4","غارتگرِ ");
define("MEDAL5","در بین 10 نفر برترِ حمله‌کننده و مدافع");
define("MEDAL6","در بین 3 حمله‌کننده‌ی برترِ ");
define("MEDAL7","در بین 3 مدافعِ برترِ ");
define("MEDAL8","در بین 3 رشددهنده‌ی جمعیتِ برترِ ");
define("MEDAL9","در بین 3 غارتگرِ برترِ ");
define("MEDAL10","صعودکننده‌ی رتبه‌ی ");
define("MEDAL11","در بین 3 صعودکننده‌ی رتبه‌ی برترِ ");
define("MEDAL12","در بین 10 حمله‌کننده‌ی برترِ ");
define("MEDAL20","روز");
define("DNYA","روز");
define("TIMES","بار");
define("MEDAL15","");
define("MEDAL16","");
define("MEDAL17","قهرمانِ ");
define("MEDAL18","تاجرِ ");
define("MEDAL19","پشت سر هم");
define("BONUS","پاداش");

//statistic
define("STATISTIC1","آمار بازیکنان");
define("STATISTIC2","بازیکن یافت نشد");
define("STATISTIC3","یافت نشد");
define("STATISTIC4","آمار اتحادها");
define("STATISTIC5","اتحاد یافت نشد");
define("STATISTIC6","امتیاز");
define("STATISTIC7","آمار اتحادها (حمله)");
define("STATISTIC8","آمار اتحادها (دفاع)");
define("STATISTIC9","برترین‌ها");
define("STATISTIC10","آمار قهرمانان");
define("STATISTIC11","تجربه");
define("STATISTIC12","قهرمان یافت نشد");
define("STATISTIC13","آمار بازیکنان (حمله)");
define("STATISTIC14","آمار بازیکنان (دفاع)");
define("STATISTIC15","آمار بازیکنان (رومیان)");
define("STATISTIC16","آمار بازیکنان (توتن‌ها)");
define("STATISTIC17","آمار بازیکنان (گاول‌ها)");
define("STATISTIC18","منابع");
define("STATISTIC19","بازیکنان");
define("STATISTIC20","تعداد کل ثبت‌نام‌شده");
define("STATISTIC21","بازیکنان فعال");
define("STATISTIC22","بازیکنان آنلاین");
define("STATISTIC23","قبایل");
define("STATISTIC24","قبیله");
define("STATISTIC25","ثبت‌نام‌شده");
define("STATISTIC26","درصد");
define("STATISTIC27","شگفتی جهان");
define("STATISTIC28","بازیکنان");
define("STATISTIC29","اتحادها");
define("STATISTIC30","قهرمانان");
define("STATISTIC31","عمومی");
define("STATISTIC32","آمار");
define("STATISTIC33","یا");
define("STATISTIC34","بازگشت");
define("STATISTIC35","بعدی");
define("STATISTIC36","آمار بازیکنان (هیولاها)");
define("STATISTIC37","دفاع");
define("STATISTIC38","دهکده");
define("STATISTIC39","جوایز");
define("STATISTIC40","دهکده‌ها");

//alliance
define("ALLIANCE1","تنظیمات");
define("ALLIANCE2","اختصاص به سمت");
define("ALLIANCE3","تغییر نام");
define("ALLIANCE4","اخراج بازیکن");
define("ALLIANCE5","تغییر توضیحات");
define("ALLIANCE6","دیپلماسی");
define("ALLIANCE7","دعوت بازیکن");
define("ALLIANCE8","اخراج از اتحاد");
define("ALLIANCE9","رویدادهای اتحاد");
define("ALLIANCE10","رویداد");
define("ALLIANCE11","تاریخ");
define("ALLIANCE12","برای خروج از اتحاد، به دلایل امنیتی باید رمز عبور خود را دوباره وارد کنید.");
define("ALLIANCE13","دیپلماسی اتحاد");
define("ALLIANCE14"," پیشنهاد اتحاد");
define("ALLIANCE15"," پیشنهاد پیمان عدم تجاوز");
define("ALLIANCE16"," اعلام جنگ");
define("ALLIANCE17","راهنما");
define("ALLIANCE18","اگر می‌خواهید ارتباطات دیپلماسی در توضیحات اتحاد به‌صورت خودکار نمایش داده شود، عبارت <span class=\"e\">[diplomatie]</span> را در توضیحات وارد کنید. همچنین می‌توانید از <span class=\"e\">[ally]</span>، <span class=\"e\">[nap]</span> و <span class=\"e\">[war]</span> استفاده کنید.");
define("ALLIANCE19","پیشنهادهای شما");
define("ALLIANCE20","پیشنهادهای دریافتی");
define("ALLIANCE21","روابط موجود");
define("ALLIANCE22","اتحاد");
define("ALLIANCE23","پیمان عدم تجاوز");
define("ALLIANCE24","جنگ");
define("ALLIANCE25","سمت");
define("ALLIANCE26","افزودن دسترسی");
define("ALLIANCE27","پیام گروهی");
define("ALLIANCE28","در اینجا می‌توانید به بازیکنان اتحاد خود دسترسی‌ها و سمت‌ها را اختصاص دهید.");
define("ALLIANCE29","حملات");
define("ALLIANCE30","در اینجا می‌توانید بازیکنان را از اتحاد اخراج کنید.");
define("ALLIANCE31","دعوت شده");
define("ALLIANCE32","اتحادهای هم‌پیمان");
define("ALLIANCE33"," دعوت شده توسط ");
define("ALLIANCE34"," دعوت را رد کرد");
define("ALLIANCE35"," دعوت برای  را حذف کرد");
define("ALLIANCE36"," به اتحاد پیوست");
define("ALLIANCE37","تعداد اعضای اتحاد بیش از حد مجاز است");
define("ALLIANCE38","بنیان‌گذار اتحاد");
define("ALLIANCE39","این اتحاد توسط  تأسیس شده است");
define("ALLIANCE40"," نام اتحاد را تغییر داد");
define("ALLIANCE41"," به اتحاد پیوست");
define("ALLIANCE42"," توضیحات اتحاد را تغییر داد");
define("ALLIANCE43"," دسترسی‌ها را تغییر داد");
define("ALLIANCE44"," از اتحاد خارج شد");
define("ALLIANCE45"," پیشنهاد اتحاد به ");
define("ALLIANCE46"," پیشنهاد پیمان عدم تجاوز به ");
define("ALLIANCE47"," اعلام جنگ به ");
define("ALLIANCE48","دعوت ارسال شد");
define("ALLIANCE49","شما قبلاً برای آن‌ها دعوت ارسال کرده‌اید");
define("ALLIANCE50","هکر؟ جدی؟");
define("ALLIANCE51","اتحاد وجود ندارد");

//crop finder
define("FINDER1","در اینجا می‌توانید دهکده‌های دارای 9 و 15 مزرعه گندم به همراه مزارع گندم را جستجو کنید.");
define("FINDER2","جستجو");
define("FINDER3","موقعیت شروع");
define("FINDER4","نوع");
define("FINDER5","مزارع");
define("FINDER6","اشغال نشده");
define("FINDER7","اشغال نشده");
define("FINDER8","فاصله");
define("FINDER9","موقعیت");
define("FINDER10","اشغال شده توسط");
define("FINDER11","جستجوی دهکده‌های دارای 9 و 15 مزرعه گندم");
define("FINDER12","مزارع");
define("FINDER13","");
define("FINDER14","");
define("FINDER15","");
define("FINDER16","");
define("FINDER17","");

//send troops
define("OTPRAV1","ارسال نیرو");
define("OTPRAV2","نیروی کمکی");
define("OTPRAV3","حمله");
define("OTPRAV4","غارت");
define("OTPRAV5","جاسوسی");
define("OTPRAV6","ارسال نیروی کمکی به");
define("OTPRAV7","حمله به");
define("OTPRAV8","غارت به");
define("OTPRAV9","جاسوسی");
define("OTPRAV10","جاسوسی منابع و نیروها<br>");
define("OTPRAV11","جاسوسی نیروها و استحکامات دفاعی");
define("OTPRAV12","هدف");
define("OTPRAV13","تصادفی");
define("OTPRAV14","شما جشن آبجو دارید. فقط اهداف تصادفی.");
define("OTPRAV15","(با منجنیق هدف قرار خواهد گرفت)");
define("OTPRAV16","آرتیفکت");
define("OTPRAV17","رسید");
define("OTPRAV18","این بازیکن در حال حاضر تحت حفاظت مبتدیان است");
define("OTPRAV19","هرگونه حمله به بازیکن دیگر باعث غیرفعال شدن حفاظت مبتدیان شما می‌شود");
define("OTPRAV20","");


//Artefacts
define("ART1","راز کوچک معماران");
define("ART2","راز بزرگ معماران");
define("ART3","راز منحصربه‌فرد معماران");
define("ART4","چکمه‌های کوچک تایتان");
define("ART5","چکمه‌های بزرگ تایتان");
define("ART6","چکمه‌های منحصربه‌فرد تایتان");
define("ART7","چشمان کوچک عقاب");
define("ART8","چشمان بزرگ عقاب");
define("ART9","چشمان منحصربه‌فرد عقاب");
define("ART10","استعداد کوچک مربی");
define("ART11","استعداد بزرگ مربی");
define("ART12","استعداد منحصربه‌فرد مربی");
define("ART13","نقشه‌ مادر انبار");
define("ART14","نقشه‌ ساخت شگفتی جهان");
define("ART15","دسترسی به ساختمان");
define("ART16","این آرتیفکت دهکده شما را در برابر منجنیق و دژکوب محافظت می‌کند. به لطف آن، تمام ساختمان‌ها و دیوار مقاوم‌تر می‌شوند.");
define("ART17","این آرتیفکت سرعت حرکت نیروهای شما را افزایش می‌دهد.");
define("ART18","این آرتیفکت جاسوس‌های شما را قوی‌تر می‌کند. تمام جاسوس‌ها چه در دهکده باشند و چه برای جاسوسی به دهکده‌ای دیگر اعزام شوند، این پاداش را دریافت می‌کنند. همچنین هنگام حمله به شما، می‌توانید نوع نیروهای دشمن را در میدان تجمع مشاهده کنید.");
define("ART19","این آرتیفکت زمان آموزش نیروها در سربازخانه، اصطبل و کارگاه را کاهش می‌دهد.");
define("ART20","این آرتیفکت به شما اجازه ساخت انبار بزرگ و انبار غله بزرگ را می‌دهد. همچنین برای ارتقای هر دو ساختمان نیز لازم است.");
define("ART21","این آرتیفکت برای ساخت شگفتی جهان ضروری است.");

//map / world
define("BAN","مسدود شده");
define("KAR1","دره متروکه");
define("KAR2","واحه خالی");
define("KAR3","واحه اشغال‌شده");
define("KAR4","اطلاعاتی در دسترس نیست<br>");
define("KAR5","تأسیس دهکده جدید");
define("KAR6","امتیاز فرهنگی");
define("KAR7","مهاجران");
define("KAR8","ساخت میدان تجمع");
define("KAR9","ارسال نیرو");
define("KAR10","حفاظت مبتدیان");
define("KAR11","ارسال تاجر(ها)");
define("KAR12","افزودن به فارم‌لیست");
define("KAR13","افزودن به فارم‌لیست (قبلاً اضافه شده)");
define("KAR14","افزودن به فارم‌لیست (حداکثر ظرفیت)");
define("KAR15","توزیع زمین");
define("KAR16","مرکز کردن نقشه");
define("KAR17","ساخت بازار");
define("KAR18","نقشه");
define("KAR19","جستجو");
define("KAR20","لیست اهداف مورد علاقه");
define("KAR21","مختصات");
define("KAR22","آخرین حمله");
define("KAR23","کشته‌ها");
define("KAR24","غنیمت");


//لینک‌ها
define("LINK1","لینک");
define("LINK2","آدرس");
define("LINK3","");
define("LINK4","");

//قوانین بازی
define("RULES1","قوانین بازی");
define("RULES2","این قوانین توسط تیم مدیریت xtravian.net تنظیم شده‌اند. در صورت مسدود شدن حساب کاربری یا برای درک بهتر تخلفات، لطفاً به مولتی‌هنتر مراجعه کنید، بند §3.<br>دور زدن قوانین بازی تخلف محسوب می‌شود. این قوانین برای همه بازیکنان الزامی است، حتی برای کسانی که قصد حذف حساب خود را دارند یا در حال انجام آن هستند.");
define("RULES3","§ 1 حساب کاربری");
define("RULES4","§1.1. هر بازیکن تنها مجاز به داشتن یک حساب در هر سرور بازی است.");
define("RULES5","§1.2. مالک یک حساب کاربری، شخصی است که آدرس ایمیل او در تنظیمات حساب ثبت شده است. تغییر آدرس ایمیل در بخش پروفایل (پروفایل » حساب کاربری) امکان‌پذیر است.");
define("RULES6","§1.3. اشتراک‌گذاری رمز عبور با بازیکنان دیگر در همان سرور مجاز نیست. همچنین ورود به حساب بازیکنان دیگر با استفاده از رمز آن‌ها نیز تخلف است و به عنوان داشتن بیش از یک حساب در سرور تلقی می‌شود.");
define("RULES7","بازی چند بازیکن روی یک حساب تنها در صورتی مجاز است که هیچ‌یک از آن‌ها در همان سرور حساب دیگری نداشته یا در آن بازی نکند.");
define("RULES8","استفاده از رمزهای عبور یکسان در حساب‌های مختلف هنگام بازی روی یک رایانه مشترک یا در حالت جانشینی ممنوع است.");
define("RULES9","§1.4. مالک حساب مسئول کامل هرگونه فعالیتی در حساب خود است.");
define("RULES10","§ 2 قوانین رفتاری در بازی");
define("RULES11","§2.1. فروش یا خرید حساب، نیروها، منابع یا هرگونه خدمت مرتبط با بازی ممنوع است. این مورد شامل زمان صرف‌شده در بازی نیز می‌شود.");
define("RULES12","§2.2. توهین، تحقیر یا هرگونه رفتار ناپسند نسبت به سایر بازیکنان در هر بخش از بازی (هر فرم، پیام یا چت) ممنوع است. استفاده از الفاظ رکیک یا تهدیدهای مربوط به زندگی واقعی نیز تخلف محسوب می‌شود.");
define("RULES13","§2.3. تقلید از تیم رسمی xtravian.net یا استفاده از نام‌ها و عناوین توهین‌آمیز، سیاسی یا غیراخلاقی ممنوع است.");
define("RULES14","§2.4. متن پروفایل‌ بازیکنان و اتحادها فقط باید به زبان روسی یا انگلیسی باشد.");
define("RULES15","§2.5. هرگونه تبلیغ، اسپم یا ارسال زنجیره‌ای ممنوع است.");
define("RULES16","§2.6. انتشار پیام‌های مربوط به بازیکنان، نامه‌های مولتی‌هنتر یا مدیران انجمن در بازی مجاز نیست.");
define("RULES17","§2.7. تشویق سایر بازیکنان به نقض قوانین، حذف حساب، واگذاری رمز عبور، بازی مشترک یا واگذاری حساب ممنوع است.");
define("RULES18","§2.8. استفاده از خطاهای بازی برای کسب سود، یا استفاده از برنامه‌هایی که عملکرد بازیکن را شبیه‌سازی یا تسریع می‌کنند، و همین‌طور هرگونه تغییر در ظاهر بازی، ممنوع است. تنها مورد استثناء استفاده از بسته‌های گرافیکی مورد تأیید است.");
define("RULES19","§ 3 مقررات مدیریتی");
define("RULES20","§3.1. نحوهٔ اعمال جریمه در صورت تخلف، توسط مولتی‌هنتر یا تیم مدیریت تعیین می‌شود. هرگونه سود ناشی از تخلف با جریمه‌ای بیشتر از بین خواهد رفت. تمام حساب‌های مرتبط با تخلف بدون استثناء مجازات می‌شوند. منابع، ساختمان‌ها، روستاها یا نیروهای از دست رفته در طول مسدودی جبران نخواهند شد. طلای از دست‌رفته یا زمان فعال‌سازی اکانت پلاس در زمان مسدودی نیز بازگردانده نمی‌شود. بازیکنانی که طلا خریده‌اند هیچ امتیاز خاصی در بررسی و تعیین مجازات نخواهند داشت.");
define("RULES21","§3.2. مولتی‌هنتر تنها مرجع رسمی برای رسیدگی به تخلفات است. بازیکنان می‌توانند مدارک و توضیحات خود را از طریق پیام به او ارسال کنند. در صورت عدم توافق با تصمیم مولتی‌هنتر، بازیکن می‌تواند با بخش مدیریت تماس بگیرد.");
define("RULES22","تمام مسائل مربوط به تخلفات و مجازات‌ها فقط با مالک حساب بررسی خواهد شد.");
define("RULES23","§3.3. تیم xtravian.net حق تغییر قوانین بازی را در هر زمان برای خود محفوظ می‌دارد.");
define("PERC","درصد");
$lang['header'] = array (
    0 => 'منابع',
    1 => 'مرکز دهکده',
    2 => 'نقشه',
    3 => 'آمار',
    4 => 'گزارش‌ها',
    5 => 'پیام‌ها',
    6 => 'منوی پلاس'
);

$lang['buildings'] = array (
    1 => "چوب‌بُر",
    2 => "معدن خاک‌رس",
    3 => "معدن آهن",
    4 => "مزرعه گندم",
    5 => "کارگاه چوب‌بری",
    6 => "کارگاه آجرپزی",
    7 => "ذوب‌آهن",
    8 => "آسیاب",
    9 => "نانوایی",
    10 => "انبار",
    11 => "انبار غله",
    12 => "آهنگری",
    14 => "میدان مسابقه",
    15 => "ساختمان اصلی",
    16 => "میدان تجمع",
    17 => "بازار",
    18 => "سفارت‌خانه",
    19 => "سربازخانه",
    20 => "اصطبل",
    21 => "کارگاه",
    22 => "آکادمی",
    23 => "مخفیگاه",
    24 => "تالار شهر",
    25 => "اقامتگاه",
    26 => "قصر",
    27 => "خزانه",
    28 => "دفتر بازرگانی",
    29 => "سربازخانه بزرگ",
    30 => "اصطبل بزرگ",
    31 => "دیوار سنگی (رومی)",
    32 => "دیوار خاکی (توتونی)",
    33 => "حصار چوبی (گل)",
    34 => "سنگ‌تراش",
    35 => "میخانه",
    36 => "تله‌گذار",
    37 => "میخانه (نسخه دیگر)",
    38 => "انبار بزرگ",
    39 => "انبار غله بزرگ",
    40 => "شگفتی جهان",
    41 => "حوض اسب",
    42 => "دیوار سنگی",
    43 => "دیوار موقتی",
    44 => "مرکز فرماندهی",
    45 => "آب‌انبار"
);

$lang['desc'][1]  = array(0 => 'چوب‌بُر درختان را قطع می‌کند تا چوب تولید شود. با ارتقای سطح این ساختمان، تولید چوب افزایش می‌یابد.');
$lang['desc'][2]  = array(0 => 'در اینجا خاک‌رس تولید می‌شود. با افزایش سطح ساختمان، میزان تولید رس بالا می‌رود.');
$lang['desc'][3]  = array(0 => 'در این معدن، کارگران آهن استخراج می‌کنند. با افزایش سطح معدن، تولید آهن بیشتر می‌شود.');
$lang['desc'][4]  = array(0 => 'غذای جمعیت دهکده در مزرعه تولید می‌شود. با ارتقای سطح آن، تولید گندم افزایش می‌یابد.');
$lang['desc'][5]  = array(0 => 'کارگاه چوب‌بری چوب خام را پردازش می‌کند. با ارتقای سطح آن، تولید چوب تا 25٪ افزایش می‌یابد.');
$lang['desc'][6]  = array(0 => 'در آجرپزی، از خاک‌رس آجر ساخته می‌شود. با ارتقای سطح آن، تولید رس تا 25٪ افزایش پیدا می‌کند.');
$lang['desc'][7]  = array(0 => 'در ذوب‌آهن، آهن پردازش و تقویت می‌شود. با ارتقای سطح ساختمان، تولید آهن تا 25٪ افزایش می‌یابد.');
$lang['desc'][8]  = array(0 => 'در آسیاب، گندم به آرد تبدیل می‌شود. ارتقای آن می‌تواند تولید گندم را تا 25٪ افزایش دهد.');
$lang['desc'][9]  = array(0 => 'در نانوایی، آرد به نان تبدیل می‌شود. با ارتقای نانوایی و آسیاب به‌طور همزمان، تولید گندم تا 50٪ افزایش می‌یابد.');
$lang['desc'][10] = array(0 => 'چوب، رس و آهن در انبار ذخیره می‌شوند. با افزایش سطح انبار، ظرفیت ذخیره‌سازی بیشتر می‌شود.');
$lang['desc'][11] = array(0 => 'گندم در انبار غله ذخیره می‌شود. هرچه سطح آن بالاتر باشد، ظرفیت بیشتری فراهم می‌کند.');
$lang['desc'][12] = array(0 => 'در آهنگری، می‌توان سلاح‌های بهتر برای نیروها ساخت. با ارتقای سطح آن، حداکثر سطح ارتقای سلاح‌ها افزایش می‌یابد.');
$lang['desc'][13] = array(0 => 'در زره‌سازی می‌توان زره نیروها را ارتقا داد. با پیشرفت ساختمان، حداکثر سطح ارتقای زره افزایش پیدا می‌کند.');
$lang['desc'][14] = array(0 => 'در میدان مسابقه، نیروهای شما تمرین استقامت می‌کنند. با ارتقای آن، سرعت حرکت نیروها در مسافت‌های بیش از 20 خانه بیشتر می‌شود.');
$lang['desc'][15] = array(0 => 'معماران دهکده در ساختمان اصلی کار می‌کنند. هرچه سطح آن بالاتر باشد، ساخت‌وساز سایر ساختمان‌ها سریع‌تر انجام می‌شود.');
$lang['desc'][16] = array(0 => 'تمام نیروهای دهکده در میدان تجمع جمع می‌شوند. از اینجا می‌توانید نیروها را برای حمایت، حمله یا غارت بفرستید.');
$lang['desc'][17] = array(0 => 'در بازار می‌توانید با سایر بازیکنان تجارت کنید. هرچه سطح بازار بالاتر باشد، تعداد بازرگانان بیشتری در دسترس خواهد بود.');
$lang['desc'][18] = array(0 => 'سفارت محل روابط دیپلماتیک است. در سطح 1 می‌توانید به اتحاد بپیوندید و در سطح 3 می‌توانید یک اتحاد تأسیس کنید.');
$lang['desc'][19] = array(0 => 'در سربازخانه، نیروهای پیاده‌نظام آموزش می‌بینند. با ارتقای سطح ساختمان، زمان آموزش کاهش پیدا می‌کند.');
$lang['desc'][20] = array(0 => 'در اصطبل، نیروهای سواره‌نظام آموزش داده می‌شوند. با افزایش سطح آن، زمان آموزش کمتر می‌شود.');
$lang['desc'][21] = array(0 => 'در کارگاه می‌توان تجهیزات محاصره مثل منجنیق و دژکوب ساخت. با ارتقای سطح آن، زمان ساخت تجهیزات کاهش می‌یابد.');
$lang['desc'][22] = array(0 => 'در آکادمی می‌توان انواع جدید نیروها را تحقیق و آزاد کرد. با ارتقای سطح آکادمی، تعداد واحدهای قابل تحقیق افزایش می‌یابد.');
$lang['desc'][23] = array(0 => 'در صورت حمله، منابع توسط اهالی در مخفیگاه پنهان می‌شود. منابع داخل مخفیگاه قابل غارت نیستند.');
$lang['desc'][24] = array(0 => 'در تالار شهر می‌توانید جشن برگزار کنید و امتیاز فرهنگی دهکده را افزایش دهید.');
$lang['desc'][25] = array(0 => 'اقامتگاه خانه‌ای کوچک برای پادشاه یا ملکه هنگام بازدید از دهکده است. اقامتگاه از دهکده در برابر تلاش برای تصرف دفاع می‌کند.');
$lang['desc'][26] = array(0 => 'قصر محل زندگی پادشاه یا ملکه است. تنها یک قصر در امپراتوری ساخته می‌شود و در آن می‌توان پایتخت را تعیین کرد.');
$lang['desc'][27] = array(0 => 'خزانه محل نگهداری گنجینه‌هاست. هر خزانه می‌تواند یک آرتیفکت نگهداری کند. اثر آرتیفکت پس از 24 ساعت (یا 12 ساعت در سرور سرعتی) فعال می‌شود.');
$lang['desc'][28] = array(0 => 'در دفتر بازرگانی می‌توان ظرفیت حمل بازرگانان را افزایش داد. با ارتقای ساختمان، مقدار باری که هر تاجر می‌تواند حمل کند بیشتر می‌شود.');
$lang['desc'][29] = array(0 => 'سربازخانه بزرگ امکان آموزش نیروهای بیشتر را فراهم می‌کند، اما هزینه آموزش سه برابر است. نمی‌توان آن را در پایتخت ساخت.');
$lang['desc'][30] = array(0 => 'اصطبل بزرگ امکان آموزش سواره‌نظام بیشتر را فراهم می‌کند، اما هزینه آموزش سه برابر است. ساخت آن در پایتخت مجاز نیست.');
$lang['desc'][31] = array(0 => 'دیوار شهر از دهکده در برابر حملات محافظت می‌کند. هرچه سطح آن بالاتر باشد، نیروهای مدافع بهتر عمل می‌کنند.');
$lang['desc'][32] = array(0 => 'دیوار خاکی از دهکده در برابر حملات دفاع می‌کند. با افزایش سطح، دفاع در برابر حملات دشمن آسان‌تر می‌شود.');
$lang['desc'][33] = array(0 => 'حصار گل‌ها از دهکده دفاع می‌کند. با ارتقای سطح آن، دفاع دهکده قوی‌تر می‌شود.');
$lang['desc'][34] = array(0 => 'سنگ‌تراش متخصص تقویت ساختمان‌هاست. با ارتقای سطح آن، استحکام همه ساختمان‌های دهکده افزایش می‌یابد.');
$lang['desc'][35] = array(0 => 'در میخانه نوشیدنی تولید می‌شود که سربازان را شجاع‌تر و قوی‌تر می‌کند؛ اما رهبران در حمله به دهکده‌های دشمن کارایی کمتری خواهند داشت و منجنیق‌ها فقط به اهداف تصادفی شلیک می‌کنند. میخانه تنها در پایتخت ساخته می‌شود.');
$lang['desc'][36] = array(0 => 'تله‌گذار از دهکده با تله‌های پنهان محافظت می‌کند. نیروهای دشمن گرفتار می‌شوند و آسیبی نمی‌زنند و همچنان از گندم دهکده خودشان مصرف می‌کنند.');
$lang['desc'][37] = array(0 => 'در عمارت قهرمان می‌توانید واحه‌های اطراف را مشاهده کنید. از سطح 10 می‌توانید با قهرمان خود واحه‌ها را تصرف کرده و تولید منابع دهکده را افزایش دهید.');
$lang['desc'][38] = array(0 => 'انبار بزرگ سه برابر یک انبار معمولی ظرفیت ذخیره‌سازی دارد.');
$lang['desc'][39] = array(0 => 'انبار غله بزرگ سه برابر یک انبار غله معمولی ظرفیت دارد.');
$lang['desc'][40] = array(0 => 'شگفتی جهان اوج تمدن است. تنها قدرتمندترین امپراتوری‌ها قادر به ساخت و دفاع از آن هستند.');
$lang['desc'][41] = array(0 => 'حوض اسب باعث سلامتی بیشتر اسب‌ها و آموزش سریع‌تر نیروهای سواره می‌شود و مصرف گندم آن‌ها را کاهش می‌دهد.');
$lang['desc'][42] = array(0 => 'با ساخت دیوار سنگی، دهکده بهتر در برابر حملات دشمن محافظت می‌شود. این دیوار مخصوص مصری‌هاست و دفاع آن شبیه حصار گل‌ها و استحکامش شبیه دیوار خاکی توتونی‌هاست.');
$lang['desc'][43] = array(0 => 'دیوار موقتی مخصوص هون‌هاست و از دهکده در برابر حملات محافظت می‌کند. دفاع آن مانند دیوار خاکی و استحکامش مانند دیوار شهر رومی‌هاست.');
$lang['desc'][44] = array(0 => 'مرکز فرماندهی از دهکده در برابر تصرف محافظت می‌کند. در هر دهکده فقط یک مرکز فرماندهی می‌توان ساخت و مهاجر و رئیس/سناتور/قبایل خاص در اینجا آموزش داده می‌شوند.');
$lang['desc'][45] = array(0 => 'آب‌انبار جریان آب واحه‌ها را تنظیم می‌کند و به رشد محصولات، معادن و کارگران کمک می‌کند. این ساختمان اثر واحه‌ها را تا دو برابر افزایش می‌دهد و فقط توسط مصری‌ها قابل ساخت است.');

$lang['descs'][5]=array(0=>array(1,10),array(15,5));
$lang['descs'][6]=array(0=>array(2,10),array(15,5));
$lang['descs'][7]=array(0=>array(3,10),array(15,5));
$lang['descs'][8]=array(0=>array(4,5));
$lang['descs'][9]=array(0=>array(4,10),array(15,5));
$lang['descs'][12]=array(0=>array(22,1),array(15,3));
$lang['descs'][13]=array(0=>array(22,1),array(15,3));
$lang['descs'][14]=array(0=>array(16,15));
$lang['descs'][17]=array(0=>array(15,3),array(10,1),array(11,1));
$lang['descs'][19]=array(0=>array(16,1),array(15,3));
$lang['descs'][20]=array(0=>array(22,5),array(12,3));
$lang['descs'][21]=array(0=>array(22,10),array(15,5));
$lang['descs'][22]=array(0=>array(19,3),array(15,3));
$lang['descs'][24]=array(0=>array(15,10),array(22,10));
$lang['descs'][25]=array(0=>array(15,5));
$lang['descs'][26]=array(0=>array(18,1),array(15,5));
$lang['descs'][27]=array(0=>array(15,10));
$lang['descs'][28]=array(0=>array(17,20),array(20,10));
$lang['descs'][29]=array(0=>array(19,20));
$lang['descs'][30]=array(0=>array(20,20));
$lang['descs'][34]=array(0=>array(26,3),array(15,5));
$lang['descs'][35]=array(0=>array(11,20),array(16,10));
$lang['descs'][36]=array(array(16,1));
$lang['descs'][37]=array(0=>array(16,1),array(15,3));
$lang['descs'][38]=array(0=>array(15,10));
$lang['descs'][39]=array(0=>array(15,10));
$lang['descs'][41]=array(0=>array(20,20),array(16,10));
$lang['fields'] = array (
    0 => 'سطح',
    1 => 'سطح چوب‌بُر',
    2 => 'سطح معدن رس',
    3 => 'سطح معدن آهن',
    4 => 'سطح مزرعه گندم',
    5 => 'محل ساخت بیرونی',
    6 => 'محل ساخت',
    7 => 'محل ساخت میدان تجمع'
);

$lang['npc'] = array (
    0 => 'بازرگانان NPC'
);

$lang['upgrade'] = array (
    0 => 'این ساختمان به حداکثر سطح رسیده است',
    1 => 'در حال ساخت بالاترین سطح این ساختمان است',
    2 => 'ساختمان در حال تخریب است',
    3 => '<b>هزینه</b> ارتقا تا سطح&nbsp;',
    4 => 'کارگران مشغول هستند.',
    5 => 'گندم کافی نیست. مزرعه‌ها را ارتقا دهید.',
    6 => 'یک انبار بسازید.',
    7 => 'یک انبار غله بسازید.',
    8 => 'منابع کافی در دسترس خواهد بود&nbsp;',
    9 => '&nbsp;در&nbsp;&nbsp;',
    10 => 'ارتقا به سطح ',
    11 => 'امروز',
    12 => 'فردا'
);

$lang['movement'] = array (
    0 => 'در&nbsp;'
);

$lang['troops'] = array (
    0 => 'هیچ',
    1 => 'قهرمان'
);

// Player statics

define("PLAYERS_ACTIVE","بازیکنان فعال");
define("PLAYERS_ONLINE","بازیکنان آنلاین");
define("PLAYERS","بازیکنان");
define("ACTIVE","فعال");
define("ONLINE","آنلاین");


//NOTICES
define("REPORT_SUBJECT","موضوع:");
define("REPORT_ATTACKER","حمله‌کننده");
define("REPORT_DEFENDER","مدافع");
define("REPORT_RESOURCES","منابع");
define("REPORT_FROM_VIL","از دهکده");
define("REPORT_FROM_ALLY","از متحد");
define("REPORT_SENT","ارسال شده در:");
define("REPORT_SENDER","فرستنده");
define("REPORT_RECEIVER","دریافت‌کننده");
define("REPORT_AT","در");
define("REPORT_TO","به");
define("REPORT_SEND_RES","ارسال منابع");
define("REPORT_DEL_BTN","حذف گزارش");
define("REPORT_DEL_QST","آیا مطمئن هستید که می‌خواهید این گزارش را حذف کنید؟");
define("REPORT_WARSIM","شبیه‌ساز نبرد");
define("REPORT_ATK_AGAIN","حمله مجدد");
define("REPORT_TROOPS","نیروها");
define("REPORT_REINF","نیروهای کمکی");
define("REPORT_CASUALTIES","تلفات");
define("REPORT_INFORMATION","اطلاعات");
define("REPORT_BOUNTY","غنیمت");
define("REPORT_CLOCK","زمان");
define("REPORT_UPKEEP","مصرف گندم");
define("REPORT_PER_HOURS","در ساعت");
define("REPORT_SEND_REINF_TO","ارسال نیروی کمکی به دهکده");
define("REPORT_NO","هیچ گزارشی موجود نیست.");
define("REPORT1","کاوش ");
define("REPORT2","حمله ");

define ("NGZ2", "زمان ساخت فعلی");
define ("NGZ3", "زمان ساخت در سطح");



//CTENA
define ("C1", "سطح دیوار شهر");
define ("C2", "با ساخت دیوار شهر می‌توانید دهکده خود را در برابر حملات دشمنان محافظت کنید. هرچه سطح دیوار بالاتر باشد، پاداش دفاعی نیروهای شما بیشتر خواهد بود.");
define ("C3", "پاداش دفاعی");
define ("C4", "پاداش دفاعی در سطح");
define ("C5", " ");
define ("C6", " ");
define ("C7", "سطح دیوار خاکی");
define ("C8", "سطح حصار چوبی");
define ("C9", "سطح دیوار شهر");

//CKLAD
define ("CK0", "سطح انبار ");
define ("CK", " منابع چوب، رس و آهن در انبار ذخیره می‌شوند. هرچه سطح انبار بالاتر باشد، ظرفیت ذخیره منابع بیشتر خواهد بود. ");


//AMBAR
define ("AM", " سطح انبار غله ");
define ("AM1", " گندم تولید شده در مزارع در انبار غله ذخیره می‌شود. هرچه سطح آن بالاتر باشد، ظرفیت ذخیره‌سازی بیشتر خواهد بود.");

define ("AM4", "ظرفیت در سطح");

define("CAPACITY","ظرفیت");
define("CAPACITYA","ظرفیت در سطح");


//upgrade.php
define("UPG0","ساختمان به حداکثر سطح رسیده است.");
define("UPG1","در حال ساخت حداکثر سطح هستیم.");
define("UPG2","ساختمان در حال تخریب است.");
define("UPG3","هزینه");
define("UPG4","ارتقا به سطح");
define("UPG5","تمام کارگران مشغول هستند.");
define("UPG6","تمام کارگران مشغول هستند. (صف ساخت)");
define("UPG7","گندم کافی نیست. مزرعه‌ها را ارتقا دهید.");
define("UPG8","انبار را ارتقا دهید.");
define("UPG9","انبار غله را ارتقا دهید.");
define("UPG10","منابع کافی - هرگز");
define("UPG11","ارتقا به سطح ");
define("UPG12","ساخت با استاد معمار");


// ارسال نیروها
define("nap0","نیروی کمکی");
define("nap1","حمله عادی");
define("nap2","غارت");

define ("PY1", "حرکت‌ها به دهکده ");
define ("PY2", "نمای کلی ");
define ("PY3", "ارسال نیرو ");
define ("PY5", "نیروهای داخل دهکده ");
define ("PY6", "دهکده");
define ("PY7", "نیروهای خودی");
define ("PY8", "نیروها ");
define ("PY9", "مصرف گندم ");
define ("PY10", "در ساعت ");
define ("PY11", "بازگرداندن ");
define ("PY12", "نیروها در دهکده‌های دیگر ");
define ("PY13", "نیروی کمکی برای ");
define ("PY14", "بازپس‌گیری ");
define ("PY15", "حرکت نیروهای شما ");
define ("PY16", "فرار");
define ("PY17", "لیست فارم");
define ("PY18", "واحه");
define ("PY19", "نیروها در واحه‌ها ");
define ("GOLDC","باشگاه طلایی");

//KAZARMA
define ("KA", " سطح سربازخانه ");
define ("KA1", " تمامی نیروهای پیاده‌نظام در سربازخانه آموزش می‌بینند. هرچه سطح سربازخانه بالاتر باشد، زمان آموزش نیروها کوتاه‌تر خواهد شد.");
define ("KA2", "سربازخانه");
define ("KA3", "آموزش نیروها پس از تکمیل سربازخانه آغاز می‌شود.");

//RYNOK
define ("RY", " سطح بازار ");
define ("RY1", " در بازار می‌توانید با سایر بازیکنان منابع معامله کنید. هرچه سطح بازار بالاتر باشد، مقدار منابع قابل حمل در یک زمان بیشتر خواهد بود.");

//DVOREZ
define ("DV", " سطح قصر ");
define ("DV1", " پادشاه کشور در قصر زندگی می‌کند. قصر فقط در پایتخت قابل ساخت است. هرچه سطح آن بالاتر باشد، تصرف دهکده توسط دشمنان سخت‌تر می‌شود.");
define("dvrc0","رمز عبور اشتباه است");
define("dvrc1","برای تأسیس دهکده جدید به قصر سطح 10، 15 یا 20 و 3 مهاجر نیاز دارید. برای تصرف دهکده جدید به قصر سطح 10، 15 یا 20 و یک سناتور، رئیس یا سردار نیاز دارید.");
define("dvrc2","این پایتخت شماست");
define("dvrc3","آیا مطمئن هستید که می‌خواهید پایتخت خود را تغییر دهید؟");
define("dvrc4","این عمل قابل بازگشت نیست!");
define("dvrc5","برای امنیت، باید رمز عبور خود را برای تأیید وارد کنید:");
define("dvrc6","تغییر");
define("dvrc7","قصر در حال ساخت است");
define("dvrc8","رمز عبور:");
define("dvrc9","نام");
define("dvrc10","تعداد");
define("dvrc11","حداکثر");

//POSOLBSTVO
define("posl0","اتحاد");
define("posl1","تگ");
define("posl2","نام");
define("posl3","به اتحاد");
define("posl4","دعوت‌ها");
define("posl5","پذیرفتن");
define("posl6","هیچ دعوتی موجود نیست");
define("posl7","تأسیس اتحاد");
define("posl8","ایجاد");

//masterskaya
define("mastr0","واحدها باید ابتدا تحقیق شوند");
define("mastr1","آموزش");
define("mastr2","در حال آموزش");
define("mastr3","مدت زمان");
define("mastr4","پایان یافته");
define("mastr5","مجموع");

//REZA
define ("RE", " سطح اقامتگاه ");
define ("RE1", " اقامتگاه قصری کوچک است که پادشاه هنگام بازدید در آن اقامت می‌کند. اقامتگاه از دهکده در برابر تصرف توسط دشمنان محافظت می‌کند. ");
define ("RE2", "این پایتخت شماست");
define ("RE3", "اقامتگاه");
define ("RE4", "آموزش");
define ("RE5", "امتیاز فرهنگی");
define ("RE6", "وفاداری");
define ("RE7", "گسترش");
define("RE8","برای گسترش قلمرو خود به امتیاز فرهنگی نیاز دارید. این امتیازها به مرور زمان از ساختمان‌ها جمع می‌شوند و در سطوح بالاتر سریع‌تر تولید می‌شوند.");
define("RE9","تولید این دهکده:");
define("RE10","امتیاز فرهنگی در روز");
define("RE11","تولید همه دهکده‌ها:");
define("RE12","دهکده‌های شما در مجموع تولید کرده‌اند");
define("RE13","امتیاز. برای تأسیس یا تصرف یک دهکده جدید به");
define("RE14","امتیاز نیاز دارید");
define("RE15","با حمله توسط سناتورها، رؤسا یا سرداران می‌توان وفاداری یک دهکده را کاهش داد. اگر وفاداری به صفر برسد، دهکده به قلمرو مهاجم می‌پیوندد. وفاداری این دهکده در حال حاضر");
define("RE16","دهکده‌هایی که توسط این دهکده تأسیس یا تصرف شده‌اند");
define("RE17","دهکده");
define("RE18","بازیکن");
define("RE19","جمعیت");
define("RE20","مختصات");
define("RE21","تاریخ");
define("RE22","هنوز هیچ دهکده‌ای توسط این دهکده تأسیس یا تصرف نشده است.");
define("RE23","در حال آموزش");
define("RE24","مدت زمان");
define("RE25","آماده");
define("RE26","آموزش");
define("RE27","برای تأسیس دهکده جدید به اقامتگاه سطح 10 یا 20 و 3 مهاجر نیاز دارید. برای تصرف دهکده جدید به اقامتگاه سطح 10 یا 20 و یک سناتور، رئیس یا سردار نیاز دارید.");
//AKADEM
define ("AK", " سطح آکادمی ");
define ("AK1", " در آکادمی می‌توانید انواع جدیدی از نیروها را تحقیق کنید. با افزایش سطح آن، امکان تحقیق نیروهای قوی‌تر فراهم می‌شود. ");
define ("AK2", "آکادمی");
define ("AK3", "هیچ تحقیقی در دسترس نیست");
define ("AK4", "عملیات");
define ("AK5", "پیش‌نیازها");
define ("AK6", "نمایش بیشتر");
define ("AK7", "نمایش کمتر");
define ("AK8", "تحقیق");

//MELNIZA
define ("ME", " سطح آسیاب ");
define ("ME1", " در آسیاب گندم به آرد تبدیل می‌شود. بسته به سطح ساختمان، آسیاب می‌تواند تولید گندم را تا 25٪ افزایش دهد ");
define ("ME2", "");
define ("ME3", "");

//KON
define ("KO", " سطح اصطبل ");
define ("KO1", " تمام نیروهای سواره‌نظام در اصطبل آموزش داده می‌شوند. هرچه سطح آن بالاتر باشد، سرعت آموزش نیروها بیشتر می‌شود. ");
define("KO2","هیچ نیرویی در دسترس نیست. ابتدا در آکادمی تحقیق کنید");
define("KO3", "آموزش زمانی آغاز می‌شود که اصطبل بزرگ تکمیل شده باشد.");
define("KZ333", "آموزش زمانی آغاز می‌شود که سربازخانه بزرگ تکمیل شده باشد.");

//GLAVNOE ZDANIE
define("gz0","تخریب ساختمان:");
define("gz1","اگر دیگر به ساختمانی نیاز ندارید، می‌توانید دستور تخریب آن را بدهید.");
define("gz2","تخریب");
define("gz3","آیا می‌خواهید تمام ساخت‌وسازها و تحقیقات این دهکده فوراً با 2 طلا تمام شوند؟");
define("gz4","تخریب ساختمان");

//COKRA
define ("CO", " سطح خزانه ");
define ("CO1", " ثروت امپراتوری شما در خزانه نگهداری می‌شود. خزانه شما فقط برای یک گنجایش جا دارد. پس از تصرف یک آرتیفکت، در سرور معمولی 24 ساعت و در سرور 3x دوازده ساعت طول می‌کشد تا آرتیفکت فعال شود.");
define ("CO2", "");
define ("CO3", "");
define ("CO4", "");

//GHYGYN
define ("GH", " سطح ریخته‌گری آهن ");
define ("GH1", " در ریخته‌گری آهن، آهن ذوب می‌شود. بسته به سطح ساختمان، تولید آهن می‌تواند تا 25٪ افزایش یابد.");
define ("GH2", "پاداش فعلی آهن");
define ("GH3", "پاداش آهن در سطح");
define ("GH4", "");

//KIRPIGH
define ("KI", " سطح آجرپزی ");
define ("KI1", " در آجرپزی، خاک رس به آجر تبدیل می‌شود. بسته به سطح ساختمان، تولید خاک رس می‌تواند تا 25٪ افزایش یابد.");
define ("KI2", "پاداش فعلی خاک رس");
define ("KI3", "پاداش خاک رس در سطح");
define ("KI4", "");
define ("KI5", "");
define ("KI6", "");

define ("CURB", "پاداش فعلی");
define ("CURBL", "پاداش در سطح");
define("NOTDONEU","ساختمان هنوز تکمیل نشده است.");
define("SPEEDB","پاداش سرعت فعلی");
define("SPEEDBL","پاداش سرعت در سطح");

//ратуша
define("ratusha0","جشن‌ها زمانی شروع می‌شوند که تالار شهر تکمیل شده باشد.");
define("ratusha1","جشن‌ها");
define("ratusha2","عملیات");
define("ratusha3","جشن");
define("ratusha4","در حال برگزاری");
define("ratusha5","تولید گندم منفی است، بنابراین هرگز به منابع موردنیاز نخواهید رسید");
define("ratusha6","خیلی کم");
define("ratusha7","منابع");
define("ratusha8","نگه دارید");
define("ratusha9","جشن بزرگ (2000 امتیاز فرهنگی)");
define("ratusha10","منابع کافی");
define("ratusha11","امتیاز فرهنگی");
define("ratusha12","مدت زمان");
define("ratusha13","پایان");
define("ratusha14","جشن کوچک");
define("ratusha15","");
define("ratusha16","");
define("ratusha17","");
define("ratusha18","");
define("ratusha19","");
define("ratusha20","");

//ARENA
define ("AR", " سطح میدان مسابقات ");
define ("AR1", " در میدان مسابقات، نیروهای شما استقامت بیشتری پیدا می‌کنند. هرچه سطح آن بالاتر باشد، وقتی فاصله حرکت نیروها بیش از 30 خانه باشد، سرعت حرکت آن‌ها بیشتر می‌شود.");
define ("AR2", "");
define ("AR3", "");
define ("AR4", "");

//MASTERSKAI
define ("MA", " سطح کارگاه محاصره ");
define ("MA1", " سلاح‌های محاصره مانند منجنیق و دژکوب در کارگاه محاصره ساخته می‌شوند. هرچه سطح ساختمان بالاتر باشد، سرعت تولید این واحدها بیشتر خواهد بود. ");
define ("MA2", "");
define ("MA3", "");
define ("MA4", "");

//PEKARNIA
define ("PE", " سطح نانوایی ");
define ("PE1", " در نانوایی، آرد تولید شده در آسیاب به نان تبدیل می‌شود. در ترکیب با آسیاب، نانوایی می‌تواند تولید گندم را تا 50٪ افزایش دهد. ");
define ("PE2", "");
define ("PE3", "");
define ("PE4", "");

//RATYSHA
define ("RAT", " سطح تالار شهر ");
define ("RAT1", " در تالار شهر می‌توانید برای شهروندان خود جشن‌های باشکوه برگزار کنید. این جشن‌ها تعداد امتیازهای فرهنگی شما را افزایش می‌دهند.");
define ("RAT2", "");
define ("RAT3", "");
define ("RAT4", "");


//PALATA
define ("PAL", " سطح دفتر تجارت ");
define ("PAL1", " گاری‌های تجاری بازار شما در دفتر تجارت بهبود پیدا می‌کنند. هرچه سطح آن بالاتر باشد، هر تاجر می‌تواند منابع بیشتری حمل کند. ");
define ("PAL2", "");
define ("PAL3", "");
define ("PAL4", "");

//VODOPOI
define ("VO", " سطح آبشخور اسب ");
define ("VO1", " آبشخور اسب از سلامت اسب‌های شما مراقبت می‌کند، مصرف گندم آن‌ها را کاهش می‌دهد و آموزششان را سریع‌تر می‌کند. با هر سطح، زمان آموزش در اصطبل کاهش می‌یابد. ");
define ("VO2", "");
define ("VO3", "");
define ("VO4", "");

//BA
define ("BA", " سطح انبار بزرگ گندم ");
define ("BA1", " در انبار گندم، محصول گندم تولید شده در مزارع ذخیره می‌شود. انبار بزرگ گندم فضای بسیار بیشتری برای نگهداری ایمن و خشک گندم فراهم می‌کند. ");
define ("BA2", "");
define ("BA3", "");
define ("BA4", "");

//BK
define ("BK", " سطح انبار بزرگ منابع ");
define ("BK1", " در انبار شما منابع چوب، خاک رس و آهن نگهداری می‌شوند. انبار بزرگ فضای بیشتری برای نگهداری امن و خشک منابع فراهم می‌کند. ");
define ("BK2", "");
define ("BK3", "");
define ("BK4", "");
define ("BK5", "");

//PIVO
define ("PI", " سطح آبجوسازی ");
define ("PI1", " در آبجوسازی نوشیدنی مخصوصی تهیه می‌شود که بعداً سربازان در جشن‌ها از آن می‌نوشند. ");
define ("PI2", "");
define ("PI3", "");
define ("PI4", "");

//CHYDO
define ("CHY", " سطح عجایب دنیا ");
define ("CHY1", " عجایب دنیا نماد اوج شکوه ساخت‌وساز است. تنها قدرتمندترین و ثروتمندترین بازیکنان می‌توانند چنین شاهکاری را بسازند و از آن در برابر دشمنان حسود دفاع کنند. ");
define ("CHY2", "");
define ("CHY3", "");
define ("CHY4", "");
define ("CHY5", "");

//KAZARMA BIG
define ("BIG", " سطح سربازخانه بزرگ ");
define ("BIG1", " سربازخانه بزرگ به شما اجازه می‌دهد همزمان نیروهای بیشتری بسازید، اما هزینه آن‌ها سه برابر مقدار معمول خواهد بود. ");
define ("BIG2", "");
define ("BIG3", "");
define ("BIG4", "");

//KONI BIG
define ("KONI ", " سطح اصطبل بزرگ ");
define ("KONI1", " اصطبل بزرگ به شما اجازه می‌دهد همزمان نیروهای بیشتری آموزش دهید، اما هزینه آن‌ها سه برابر مقدار معمول خواهد بود. ");
define ("KONI2", "");
define ("KONI3", "");
define ("KONI4", "");

//KAPKAN
define ("KAP", " سطح تله‌گذار ");
define ("KAP1", " تله‌گذار با تله‌های مخفی از دهکده شما محافظت می‌کند. دشمنان بی‌احتیاط در این تله‌ها گرفتار شده و دیگر نمی‌توانند به دهکده شما آسیب بزنند. ");
define ("KAP2", "");
define ("KAP3", "");
define ("KAP4", "");

//KYZNIA
define ("KY", " سطح زره‌سازی ");
define ("KY1", " در کوره‌های زره‌سازی، زره جنگجویان شما تقویت می‌شود. با افزایش سطح آن می‌توانید زره‌های قوی‌تری برای نیروهای خود بسازید.");
define ("KY2", "");
define ("KY3", "");
define ("KY4", "");

//KYZNIZA
define ("KZ", " سطح آهنگری ");
define ("KZ1", " در کوره‌های آهنگری سلاح‌های جنگجویان شما تقویت می‌شوند. با افزایش سطح آن می‌توانید ساخت سلاح‌های بهتر را سفارش دهید.");
define ("KZ2", "ارتقا");
define ("KZ3", "آهنگری");
define ("KZ4", "عملیات");
define ("KZ5", "در حال ارتقا");
define ("KZ6", "مدت زمان");
define ("KZ7", "پایان");
define ("KZ8", "ارتقا<br>آهنگری");
define ("KZ9", "ارتقا<br>در حال انجام");

define ("oasis", "واحه‌ها");
define ("Namet", "نام");
define ("Quantityе", "تعداد");
define ("Maxе", "حداکثر");
define ("Avaliablet", "در دسترس");
define ("TRA1", "آموزش");
define ("TRA2", "مدت زمان");
define ("TRA3", "پایان");
define ("Workshop", "کارگاه");
define ("RallyPoint", "میدان تجمع");
define ("Blacksmith", "آهنگری");
define ("Armoury", "زره‌سازی");
define ("Stable", "اصطبل");
define ("SendResouces", "ارسال منابع");
define ("Buyma", "خرید");
define ("Offerma", "پیشنهاد");
define ("ONPCtrading", "مبادله با NPC");
define ("ilior", "یا");
define ("markgo", "برو");
define ("Constructnewbuilding", "ساخت ساختمان جدید");
define ("SOCR", "گنجینه‌های امپراتوری شما در خزانه نگهداری می‌شوند. هر خزانه فقط می‌تواند یک اثر باستانی را نگهداری کند. <br><br> برای اثر باستانی کوچک به خزانه سطح 10 و برای اثر باستانی بزرگ به خزانه سطح 20 نیاز دارید.");
define ("mesotkogo", "فرستنده:");
define ("mestena", "موضوع:");
define ("meskomy", "گیرنده:");

//Самая жопа avaliable
define ("avaAcademy", "آکادمی");
define ("avaAcademy1", "در آکادمی می‌توانید نوع‌های جدیدی از نیروها را پژوهش کنید. با افزایش سطح آن می‌توانید تحقیق نیروهای بهتری را آغاز کنید.");
define ("avaArmoury", "زره‌سازی");
define ("avaArmoury1", "در کوره‌های زره‌سازی، زره جنگجویان شما تقویت می‌شود. با افزایش سطح آن می‌توانید ساخت زره‌های بهتر را سفارش دهید.");
define ("avaCityWall", "دیوار شهر");
define ("avaCityWall1", "با ساخت دیوار شهر می‌توانید دهکده خود را در برابر حملات دشمنان محافظت کنید. هرچه سطح دیوار بالاتر باشد، پاداش دفاعی نیروهای شما بیشتر خواهد شد.");
define("ITEM0","کلاه آگاهی");
define("IEFF0","+15% تجربه بیشتر");

define("ITEM1","کلاه روشن‌بینی");
define("IEFF1","+20% تجربه بیشتر");

define("ITEM2","کلاه خرد");
define("IEFF2","+25% تجربه بیشتر");

define("ITEM3","کلاه بازسازی");
define("IEFF3","+10 امتیاز سلامتی در روز");

define("ITEM4","کلاه تندرستی");
define("IEFF4","+15 امتیاز سلامتی در روز");

define("ITEM5","کلاه درمان");
define("IEFF5","+20 امتیاز سلامتی در روز");

define("ITEM6","کلاه گلادیاتور");
define("IEFF6","+100 امتیاز فرهنگی در روز");

define("ITEM7","کلاه تریبون");
define("IEFF7","+400 امتیاز فرهنگی در روز");

define("ITEM8","کلاه کنسول");
define("IEFF8","+800 امتیاز فرهنگی در روز");

define("ITEM9","کلاه سوارکار");
define("IEFF9","زمان آموزش در اصطبل 10٪ کاهش می‌یابد");

define("ITEM10","کلاه سواره‌نظام");
define("IEFF10","زمان آموزش در اصطبل 15٪ کاهش می‌یابد");

define("ITEM11","کلاه سواره‌نظام سنگین");
define("IEFF11","زمان آموزش در اصطبل 20٪ کاهش می‌یابد");

define("ITEM12","کلاه مزدور");
define("IEFF12","زمان آموزش در سربازخانه 10٪ کاهش می‌یابد");

define("ITEM13","کلاه جنگجو");
define("IEFF13","زمان آموزش در سربازخانه 15٪ کاهش می‌یابد");

define("ITEM14","کلاه آرخون");
define("IEFF14","زمان آموزش در سربازخانه 20٪ کاهش می‌یابد");

define("ITEM15","زره بازسازی");
define("IEFF15","+20 بازیابی سلامتی در روز");

define("ITEM16","زره سلامت");
define("IEFF16","+30 بازیابی سلامتی در روز");

define("ITEM17","زره درمان");
define("IEFF17","+40 بازیابی سلامتی در روز");

define("ITEM18","زره پولکی سبک");
define("IEFF18","کاهش آسیب به میزان 4 امتیاز سلامتی + 10 بازیابی سلامتی");

define("ITEM19","زره پولکی");
define("IEFF19","کاهش آسیب به میزان 6 امتیاز سلامتی + 15 بازیابی سلامتی");

define("ITEM20","زره پولکی سنگین");
define("IEFF20","کاهش آسیب به میزان 8 امتیاز سلامتی + 20 بازیابی سلامتی");

define("ITEM21","سینه‌پوش سبک");
define("IEFF21","+500 قدرت مبارزه برای قهرمان");

define("ITEM22","سینه‌پوش");
define("IEFF22","+1000 قدرت مبارزه برای قهرمان");

define("ITEM23","سینه‌پوش سنگین");
define("IEFF23","+1500 قدرت مبارزه برای قهرمان");

define("ITEM24","زره قطعه‌ای سبک");
define("IEFF24","کاهش آسیب 3+ ؛ +250 قدرت مبارزه برای قهرمان");

define("ITEM25","زره قطعه‌ای");
define("IEFF25","کاهش آسیب 4+ ؛ +500 قدرت مبارزه برای قهرمان");

define("ITEM26","زره قطعه‌ای سنگین");
define("IEFF26","کاهش آسیب 5+ ؛ +750 قدرت مبارزه برای قهرمان");

define("ITEM27","نقشه کوچک");
define("IEFF27","30٪ بازگشت سریع‌تر");

define("ITEM28","نقشه");
define("IEFF28","40٪ بازگشت سریع‌تر");

define("ITEM29","نقشه بزرگ");
define("IEFF29","50٪ بازگشت سریع‌تر");

define("ITEM30","پرچم کوچک");
define("IEFF30","30٪ حرکت سریع‌تر نیروها بین دهکده‌های خودی");

define("ITEM31","پرچم");
define("IEFF31","40٪ حرکت سریع‌تر نیروها بین دهکده‌های خودی");

define("ITEM32","پرچم بزرگ");
define("IEFF32","50٪ حرکت سریع‌تر نیروها بین دهکده‌های خودی");

define("ITEM33","نشان کوچک");
define("IEFF33","15٪ حرکت سریع‌تر نیروها بین اعضای اتحاد");

define("ITEM34","نشان");
define("IEFF34","20٪ حرکت سریع‌تر نیروها بین اعضای اتحاد");

define("ITEM35","نشان بزرگ");
define("IEFF35","25٪ حرکت سریع‌تر نیروها بین اعضای اتحاد");

define("ITEM36","کیسه دزد");
define("IEFF36","+10٪ پاداش غارت");

define("ITEM37","کیف دزد");
define("IEFF37","+15٪ پاداش غارت");

define("ITEM38","گونی دزد");
define("IEFF38","+20٪ پاداش غارت");

define("ITEM39","سپر کوچک");
define("IEFF39","+500 قدرت قهرمان");

define("ITEM40","سپر");
define("IEFF40","+1000 قدرت قهرمان");

define("ITEM41","سپر بزرگ");
define("IEFF41","+1500 قدرت قهرمان");

define("ITEM42","شیپور کوچک ناتارها");
define("IEFF42","+20٪ قدرت مبارزه در برابر ناتارها");

define("ITEM43","شیپور ناتارها");
define("IEFF43","+25٪ قدرت مبارزه در برابر ناتارها");

define("ITEM44","شیپور بزرگ ناتارها");
define("IEFF44","+30٪ قدرت مبارزه در برابر ناتارها");

define("ITEM45","شمشیر کوتاه لژیونر");
define("IEFF45","+500 قدرت قهرمان ؛ برای هر لژیونر: +3 حمله و +3 دفاع");

define("ITEM46","شمشیر لژیونر");
define("IEFF46","+1000 قدرت قهرمان ؛ برای هر لژیونر: +4 حمله و +4 دفاع");

define("ITEM47","شمشیر بلند لژیونر");
define("IEFF47","+1500 قدرت قهرمان ؛ برای هر لژیونر: +5 حمله و +5 دفاع");

define("ITEM48","شمشیر کوتاه پرتورین");
define("IEFF48","+500 قدرت قهرمان ؛ برای هر پرتورین: +3 حمله و +3 دفاع");

define("ITEM49","شمشیر پرتورین");
define("IEFF49","+1000 قدرت قهرمان ؛ برای هر پرتورین: +4 حمله و +4 دفاع");

define("ITEM50","شمشیر بلند پرتورین");
define("IEFF50","+1500 قدرت قهرمان ؛ برای هر پرتورین: +5 حمله و +5 دفاع");

define("ITEM51","شمشیر کوتاه ایمپریان");
define("IEFF51","+500 قدرت قهرمان ؛ برای هر ایمپریان: +3 حمله و +3 دفاع");

define("ITEM52","شمشیر ایمپریان");
define("IEFF52","+1000 قدرت قهرمان ؛ برای هر ایمپریان: +4 حمله و +4 دفاع");

define("ITEM53","شمشیر بلند ایمپریان");
define("IEFF53","+1500 قدرت قهرمان ؛ برای هر ایمپریان: +5 حمله و +5 دفاع");

define("ITEM54","Short sword of the Imperatoris");
define("IEFF54","+500 to hero strength For every Equites Imperatoris: +9 attack and +9 defence");
define("ITEM55","Sword of the Imperatoris");
define("IEFF55","+1000 to hero strength For every Equites Imperatoris: +12 attack and +12 defence");
define("ITEM56","Long sword of the Imperatoris");
define("IEFF56","+1500 to hero strength For every Equites Imperatoris: +15 attack and +15 defence");
define("ITEM57","Light lance of the Caesaris");
define("IEFF57","+500 to hero strength For every Equites Caesaris: +12 attack and +12 defence");
define("ITEM58","Lance of the Caesaris");
define("IEFF58","+1000 to hero strength For every Equites Caesaris: +16 attack and +16 defence");
define("ITEM59","Heavy lance of the Caesaris");
define("IEFF59","+1500 to hero strength For every Equites Caesaris: +20 attack and +20 defence");
define("ITEM60","Spear of the Phalanx");
define("IEFF60","+500 to hero strength For every Phalanx: +3 attack and +3 defence");
define("ITEM61","Pike of the Phalanx");
define("IEFF61","+1000 to hero strength For every Phalanx: +4 attack and +4 defence");
define("ITEM62","Lance of the Phalanx");
define("IEFF62","+1500 to hero strength For every Phalanx: +5 attack and +5 defence");
define("ITEM63","Short sword of the Swordsman");
define("IEFF63","+500 to hero strength For every Swordsman: +3 attack and +3 defence");
define("ITEM64","Sword of the Swordsman");
define("IEFF64","+1000 to hero strength For every Swordsman: +4 attack and +4 defence");
define("ITEM65","Long sword of the Swordsman");
define("IEFF65","+1500 to hero strength For every Swordsman: +5 attack and +5 defence");
define("ITEM66","Short-bow of the Theutates");
define("IEFF66","+500 to hero strength For every Theutates Thunder: +6 attack and +6 defence");
define("ITEM67","Bow of the Theutates");
define("IEFF67","+1000 to hero strength For every Theutates Thunder: +8 attack and +8 defence");
define("ITEM68","Long-bow of the Theutates");
define("IEFF68","+1500 to hero strength For every Theutates Thunder: +10 attack and +10 defence");
define("ITEM69","Staff of the Druidrider");
define("IEFF69","+500 to hero strength For every Druidrider: +6 attack and +6 defence");
define("ITEM70","Great staff of the Druidrider");
define("IEFF70","+1000 to hero strength For every Druidrider: +8 attack and +8 defence");
define("ITEM71","Fighting-staff of the Druidrider");
define("IEFF71","+1500 to hero strength For every Druidrider: +10 attack and +10 defence");
define("ITEM72","Light lance of the Haeduan");
define("IEFF72","+500 to hero strength For every Haeduan: +9 attack and +9 defence");
define("ITEM73","Lance of the Haeduan");
define("IEFF73","+1000 to hero strength For every Haeduan: +12 attack and +12 defence");
define("ITEM74","Heavy lance of the Haeduan");
define("IEFF74","+1500 to hero strength For every Haeduan: +15 attack and +15 defence");
define("ITEM75","Club of the Clubswinger");
define("IEFF75","+500 to hero strength For every Maceman: +3 attack and +3 defence");
define("ITEM76","Mace of the Clubswinger");
define("IEFF76","+1000 to hero strength For every Maceman: +4 attack and +4 defence");
define("ITEM77","Morning star of the Clubswinger");
define("IEFF77","+1500 to hero strength For every Maceman: +5 attack and +5 defence");
define("ITEM78","Spear of the Spearman");
define("IEFF78","+500 to hero strength For every Spearman: +3 attack and +3 defence");
define("ITEM79","Spike of the Spearman");
define("IEFF79","+1000 to hero strength For every Spearman: +4 attack and +4 defence");
define("ITEM80","Lance of the Spearman");
define("IEFF80","+1500 to hero strength For every Spearman: +5 attack and +5 defence");
define("ITEM81","Hatchet of the Axeman");
define("IEFF81","+500 to hero strength For every Axeman: +3 attack and +3 defence");
define("ITEM82","Axe of the Axeman");
define("IEFF82","+1000 to hero strength For every Axeman: +4 attack and +4 defence");
define("ITEM83","Battle axe of the Axeman");
define("IEFF83","+1500 to hero strength For every Axeman: +5 attack and +5 defence");
define("ITEM84","Light hammer of the Paladin");
define("IEFF84","+500 to hero strength For every Paladin: +6 attack and +6 defence");
define("ITEM85","Hammer of the Paladin");
define("IEFF85","+1000 to hero strength For every Paladin: +8 attack and +8 defence");
define("ITEM86","Heavy hammer of the Paladin");
define("IEFF86","+1500 to hero strength For every Paladin: +10 attack and +10 defence");
define("ITEM87","Short sword of the Teutonic Knight");
define("IEFF87","+500 to hero strength For every Teutonic Knight: +9 attack and +9 defence");
define("ITEM88","Sword of the Teutonic Knight");
define("IEFF88","+1000 to hero strength For every Teutonic Knight: +12 attack and +12 defence");
define("ITEM89","Long sword of the Teutonic Knight");
define("IEFF89","+1500 to hero strength For every Teutonic Knight: +15 attack and +15 defence");
define("ITEM90","Boots of Regeneration");
define("IEFF90","+10 health points/day");
define("ITEM91","Boots of Healthiness");
define("IEFF91","+15 health points/day");
define("ITEM92","Boots of Healing");
define("IEFF92","+20 health points/day");
define("ITEM93","Boots of the Mercenary");
define("IEFF93","+25% armys speed");
define("ITEM94","Boots of the Warrior");
define("IEFF94","+50% armys speed");
define("ITEM95","Boots of the Archon");
define("IEFF95","+75% armys speed");
define("ITEM96","Small spurs");
define("IEFF96","hero speed +3");
define("ITEM97","Spurs");
define("IEFF97","hero speed +4");
define("ITEM98","Nasty spurs");
define("IEFF98","hero speed +5");
define("ITEM99","Gelding");
define("IEFF99","Hero speed is 14");
define("ITEM100","Thoroughbred");
define("IEFF100","Hero speed is 17");
define("ITEM101","Warhorse");
define("IEFF101","Hero speed is 20");
define("ITEM102","Small bandage");
define("IEFF102","Can be healed , max 25%  Stackable");
define("ITEM103","Bandage");
define("IEFF103","Can be healed , max 33% Stackable");
define("ITEM104","Cage");
define("IEFF104","Animal can be caught in oasis Stackable");
define("ITEM105","Scroll");
define("IEFF105","Gives hero 10 experience Stackable");
define("ITEM106","Ointment");
define("IEFF106","Instantly heals hero by 1% Stackable");
define("ITEM107","Bucket");
define("IEFF107","Instantly ressurect your hero");
define("ITEM108","Book of Wisdom");
define("IEFF108","Redistributes hero skills");
define("ITEM109","Tablet of Law");
define("IEFF109","+1% loyalty in village, max 125% Stackable");
define("ITEM110","Artwork");
define("IEFF110","Instantly gives amount of CP, equal to daily production, but not more than 5000 Stackable");
define("ITEM111","");
define("IEFF111","");
define("ITEM112","");
define("IEFF112","");
define("ITEM113","");
define("IEFF113","");
define("ITEM114","");



// iRedux - New tribes items
define("ITEM115","نیزه شبه‌نظامی بردگان");
define("IEFF115","+500 قدرت قهرمان ؛ برای هر Mulch Thinner: +3 حمله و +3 دفاع");

define("ITEM116","عصای فرمانده مارشا");
define("IEFF116","+1000 قدرت قهرمان ؛ برای هر Mulch Thinner: +4 حمله و +4 دفاع");

define("ITEM117","ستاره جنگی Mulcha");
define("IEFF117","+1500 قدرت قهرمان ؛ برای هر Mulch Thinner: +5 حمله و +5 دفاع");

define("ITEM118","تبر نگهبان خاکستر");
define("IEFF118","+500 قدرت قهرمان ؛ برای هر Ash Guard: +3 حمله و +3 دفاع");

define("ITEM119","تبر پیشرفته نگهبان خاکستر");
define("IEFF119","+1000 قدرت قهرمان ؛ برای هر Ash Guard: +4 حمله و +4 دفاع");

define("ITEM120","تبر جنگی نگهبان خاکستر");
define("IEFF120","+1500 قدرت قهرمان ؛ برای هر Ash Guard: +5 حمله و +5 دفاع");

define("ITEM121","خپش کوتاه جنگجو");
define("IEFF121","+500 قدرت قهرمان ؛ برای هر Khopesh Warrior: +3 حمله و +3 دفاع");

define("ITEM122","خپش جنگجو");
define("IEFF122","+1000 قدرت قهرمان ؛ برای هر Khopesh Warrior: +4 حمله و +4 دفاع");

define("ITEM123","خپش بلند جنگجو");
define("IEFF123","+1500 قدرت قهرمان ؛ برای هر Khopesh Warrior: +5 حمله و +5 دفاع");

define("ITEM124","نیزه نگهبان آنهور");
define("IEFF124","+500 قدرت قهرمان ؛ برای هر Anhur Guard: +6 حمله و +6 دفاع");

define("ITEM125","نیزه نگهبان آنهور");
define("IEFF125","+1000 قدرت قهرمان ؛ برای هر Anhur Guard: +8 حمله و +8 دفاع");

define("ITEM126","نیزه بلند نگهبان آنهور");
define("IEFF126","+1500 قدرت قهرمان ؛ برای هر Anhur Guard: +10 حمله و +10 دفاع");

define("ITEM127","کمان کوتاه ارابه رشِف");
define("IEFF127","+500 قدرت قهرمان ؛ برای هر Resheph Chariot: +9 حمله و +9 دفاع");

define("ITEM128","کمان ارابه رشِف");
define("IEFF128","+1000 قدرت قهرمان ؛ برای هر Resheph Chariot: +12 حمله و +12 دفاع");

define("ITEM129","کمان بلند ارابه رشِف");
define("IEFF129","+1500 قدرت قهرمان ؛ برای هر Resheph Chariot: +15 حمله و +15 دفاع");

define("ITEM130","تبر مزدور");
define("IEFF130","+500 قدرت قهرمان ؛ برای هر Mercenary: +3 حمله و +3 دفاع");

define("ITEM131","تبر جنگی مزدور");
define("IEFF131","+1000 قدرت قهرمان ؛ برای هر Mercenary: +4 حمله و +4 دفاع");

define("ITEM132","تبر نبرد مزدور");
define("IEFF132","+1500 قدرت قهرمان ؛ برای هر Mercenary: +5 حمله و +5 دفاع");

define("ITEM133","کمان مرکب کوتاه کماندار");
define("IEFF133","+500 قدرت قهرمان ؛ برای هر Bowman: +3 حمله و +3 دفاع");

define("ITEM134","کمان مرکب کماندار");
define("IEFF134","+1000 قدرت قهرمان ؛ برای هر Bowman: +4 حمله و +4 دفاع");

define("ITEM135","کمان مرکب بلند کماندار");
define("IEFF135","+1500 قدرت قهرمان ؛ برای هر Bowman: +5 حمله و +5 دفاع");

define("ITEM136","شمشیر اسپاتا کوتاه سوار استپی");
define("IEFF136","+500 قدرت قهرمان ؛ برای هر Steppe Rider: +6 حمله و +6 دفاع");

define("ITEM137","شمشیر اسپاتا سوار استپی");
define("IEFF137","+1000 قدرت قهرمان ؛ برای هر Steppe Rider: +8 حمله و +8 دفاع");

define("ITEM138","شمشیر اسپاتا بلند سوار استپی");
define("IEFF138","+1500 قدرت قهرمان ؛ برای هر Steppe Rider: +10 حمله و +10 دفاع");

define("ITEM139","کمان مرکب کوتاه تیرانداز حرفه‌ای");
define("IEFF139","+500 قدرت قهرمان ؛ برای هر Marksman: +6 حمله و +6 دفاع");

define("ITEM140","کمان مرکب تیرانداز حرفه‌ای");
define("IEFF140","+1000 قدرت قهرمان ؛ برای هر Marksman: +8 حمله و +8 دفاع");

define("ITEM141","کمان مرکب بلند تیرانداز حرفه‌ای");
define("IEFF141","+1500 قدرت قهرمان ؛ برای هر Marksman: +10 حمله و +10 دفاع");

define("ITEM142","شمشیر اسپاتا کوتاه غارتگر");
define("IEFF142","+500 قدرت قهرمان ؛ برای هر Marauder: +9 حمله و +9 دفاع");

define("ITEM143","شمشیر اسپاتا غارتگر");
define("IEFF143","+500 قدرت قهرمان ؛ برای هر Marauder: +12 حمله و +12 دفاع");
define("ITEM144","شمشیر اسپاتا بلند غارتگر");
define("IEFF144","+500 قدرت قهرمان ؛ برای هر Marauder: +15 حمله و +15 دفاع");
define("HEROI0","ویژگی‌ها");
define("HEROI1","امتیاز");
define("HEROI2","راهنمای قدرت");
define("HEROI3","قدرت مبارزه با حمله و دفاع قهرمان ترکیب می‌شود. هرچه این مقدار بیشتر باشد، عملکرد قهرمان در نبرد بهتر خواهد بود.");
define("HEROI4","قدرت مبارزه:");
define("HEROI5","از قهرمان");
define("HEROI6","To the adventure.");
define("HEROA7","جنگل");
define("HEROI7","قدرت مبارزه با حمله و دفاع قهرمان ترکیب می‌شود. هرچه این مقدار بیشتر باشد، عملکرد قهرمان در نبرد بهتر خواهد بود.");
define("HEROI8","قدرت مبارزه:");
define("HEROI9","از قهرمان +");
define("HEROA10","اقیانوس");
define("HEROA8","دریاچه");
define("HEROA6","ماجراجویی.");
define("HEROA0","محل");
define("HEROA1","زمان");
define("HEROA2"," سختی");
define("HEROA3","زمان رسیدن");
define("HEROAC28","Select all");
define("HEROAC0","Filter for Helmets");
define("HEROAC1","Filter for Body Items");
define("HEROAC2","Filter for Left-Hand Items");
define("HEROAC3","Filter for Right-Hand Items");
define("HEROAC4","Filter for Shoes");
define("HEROAC5","Filter for Horses");
define("HEROAC6","Filter for small Bandages");
define("HEROAC7","Filter for Bandages");
define("HEROAC8","Filter for Cages");
define("HEROAC9","Filter for Scrolls");
define("HEROAC10","Filter for Ointments");
define("HEROAC11","Filter for Buckets");
define("HEROAC12","Filter for Book of Wisdom");
define("HEROAC13","Filter for Tablets of Law");
define("HEROAC14","Filter for Artworks");
define("HEROAC15","Items not found.");
define("HEROAC16","Opened");
define("HEROAC17","Closed");
define("HEROAC18","Silver Shortage");
define("HEROAC19","Current bid:");
define("HEROAC20","The highest bidder:");
define("HEROAC21","پیشنهاد جدید:");
define("HEROAC22","پیشنهاد");
define("HEROAC23","حراج ها");
define("HEROAC24","No Bids Found.");
define("HEROAC25","زمان");
define("HEROAC26","Won");
define("HEROAC27","Finished auctions");

define("HEROAC29","No Items Available.");
define("HEROAC30","خرید");
define("HEROAC31","فروش");
define("HEROAC32","پیشنهاد");
define("HEROAC33","ایتم ندارید");
define("HEROAC34","For each unit");
define("HEROAC35","شما دارید");
define("HEROAC36","فقط 5 مورد میتونی برای فروش بذاری");
define("HEROAC37","Finished auctions.");
define("HEROAC38","No sales found.");
define("HEROAC39","Really sell this item?");
define("HEROAC40","Sell &lt");
define("HEROAC41","مقدار");
define("HEROAC42","تغییر");
define("HEROAC43","Add bid");
define("HEROAC44","Per unit");
define("HEROA4","لینک");
define("HEROI11","قدرت مبارزه");
define("HEROI12","حداکثر");
define("HEROI13","پاداش حمله هنگام حمله کردن اعمال می‌شود.");
define("HEROI14","پاداش حمله");
define("HEROI15","پاداش دفاع هنگام دفاع در برابر حمله اعمال می‌شود.");
define("HEROI16","پاداش دفاع");
define("HEROI17","قهرمان همچنین منابع جمع‌آوری می‌کند؛ هرچه سطح او بالاتر باشد، منابع بیشتری جمع می‌کند.");
define("HEROI18","پاداش منابع:");
define("HEROI19","منابع");
define("HEROI20","توزیع");
define("HEROI21","تغییر تولید منابع قهرمان");
define("HEROI22","همه منابع");
define("HEROI23","بازیابی قهرمان شما:");
define("HEROI24","در روز");
define("HEROI25","سلامتی:");
define("HEROI26","قهرمان در این دهکده زنده خواهد شد");
define("HEROI27","منابع کافی برای زنده کردن قهرمان وجود ندارد");
define("HEROI28","احیا");
define("HEROI29","قهرمان آماده می‌شود در");
define("HEROI30","مدت زمان");
define("HEROI31","قهرمان شما به");
define("HEROI32","تجربه بیشتر نیاز دارد تا به سطح");
define("HEROI33","تجربه:");
define("HEROI34","هرچه سطح قهرمان بالاتر باشد، امتیاز بیشتری دریافت می‌کنید.");
define("HEROI35","سطح قهرمان");
define("HEROI36","سرعت قهرمان تعیین می‌کند در هر ساعت چند خانه حرکت می‌کند");
define("HEROI37","سرعت:");
define("HEROI38","خانه در ساعت");
define("HEROI39","قهرمان همیشه همراه نیروها خواهد بود.");
define("HEROI40","قهرمان هنگام حمله به دهکده اصلی مخفی می‌شود.");
define("HEROI41","مخفی کردن قهرمان:");
define("HEROI43","تولید قهرمان:");
define("HEROI44","بازیابی فعلی قهرمان: 20٪ در روز");
define("HEROI45","سرعت");
define("HEROI46","سرعت قهرمان شما");
define("HEROI47","تولید فعلی قهرمان:");
define("HEROI48","ویژگی‌ها:");
define("HEROI49","لطفاً تغییرات خود را ذخیره کنید.");
define("HEROI50","امتیاز آزاد:");
define("HEROI51","ذخیره تغییرات");
define("HEROI53","منابع موردنیاز برای احیای قهرمان:");

define("PRODUCTION_OVERVIEW","نمای کلی تولید");
define("PRODUCTION_BONUS","پاداش تولید");
define("PRODUCTION_TOTAL_BONUS","مجموع پاداش");
define("PRODUCTION_FIELD","منبع");
define("PRODUCTION","تولید");
define("PRODUCTION_BONUS2","پاداش");
define("PRODUCTION_HP","تولید قهرمان");
define("PRODUCTION_BALANCE","تراز موقت");
define("PRODUCTION_P25","+25٪ تولید");
define("PRODUCTION_INACTIVE","غیرفعال");
define("PRODUCTION_TOTAL","مجموع");
define("PRODUCTION_PROD_TOTAL","کل تولید در هر ساعت:");
define("PRODUCTION_PROD_S1","سطح گودال رس");
define("PRODUCTION_PROD_S2","سطح چوب‌بُر");
define("PRODUCTION_PROD_S3","سطح معدن آهن");
define("PRODUCTION_PROD_S4","سطح مزرعه گندم");
define("PRODUCTION_PROD_S5","تولید ساعتی با احتساب پاداش تولید:");
define("PRODUCTION_PROD_S6","پاداش تولید باعث افزایش تولید این منبع در <span class=\"underlined\">تمام</span> دهکده‌های شما می‌شود.");
define("PRODUCTION_PROD_T1","سطح چوب‌بُری پیشرفته (Sawmill)");
define("PRODUCTION_PROD_T2","واحه");
define("PRODUCTION_PROD_T3","سطح آجرپزی (Brickyard)");
define("PRODUCTION_PROD_T4","سطح ذوب‌آهن (Iron Foundry)");
define("PRODUCTION_PROD_T5","سطح آسیاب گندم");
define("PRODUCTION_PROD_T6","سطح نانوایی");

define("ESCAPE_GORIZ","فرار");
define("CAPTCHA_1","برای دریافت تصویر جدید روی تصویر کلیک کنید");
define("PLUS_TIME_ENABLE","<p>حساب پلاس شما برای <b><span id=\"timer100\">%s</span></b> روز فعال است.</p>");
define("RENEW","تمدید");
define("USERS_ACTIVE","کاربران فعال");
define("USERS_ONLINE","کاربران آنلاین");
define("USERS_TOTAL","کل کاربران");
define("dorf1_links","لیست لینک‌ها");
define("dorf1_activateplus","فعال‌سازی حساب پلاس");
define("dorf1_villageNameBox_1","بازار وجود ندارد");
define("dorf1_villageNameBox_2","ساخت بازار");
define("dorf1_villageNameBox_3","پادگان وجود ندارد");
define("dorf1_villageNameBox_4","ساخت پادگان");
define("dorf1_villageNameBox_5","اصطبل وجود ندارد");
define("dorf1_villageNameBox_6","ساخت اصطبل");
define("dorf1_villageNameBox_7","در این دهکده کارگاه وجود ندارد");
define("dorf1_villageNameBox_8","کارگاه وجود ندارد");
define("dorf1_villageNameBox_9","رفتن به بازار");
define("dorf1_villageNameBox_10","رفتن به پادگان");
define("dorf1_villageNameBox_11","آموزش در حال انجام است");
define("dorf1_villageNameBox_11n","هیچ آموزشی در حال انجام نیست");
define("dorf1_villageNameBox_12","رفتن به اصطبل");
define("dorf1_villageNameBox_13","آموزش در حال انجام است");
define("dorf1_villageNameBox_14","رفتن به کارگاه");
define("dorf1_villageNameBox_15","آموزش در حال انجام است");
define("dorf1_villageNameBox_16","تغییر نام دهکده");
define("dorf1_villageNameBox2_1","آمار دهکده‌ها");
define("dorf1_villageNameBox2_2","نمایش مختصات");
define("dorf1_villageNameBox2_4","مخفی کردن مختصات");
define("dorf1_villageNameBox2_3","دهکده‌ها");
define("dorf1_villageNameBox2_5","امتیاز فرهنگی تولید شده برای تصرف دهکده جدید:");

define("Link_desc_text_1" , "Travian Plus به شما اجازه می‌دهد یک لیست لینک بسازید.");
define("infobox_desc_text_1" , "جعبه اطلاعات");
define("Questbox_desc_text_1" , "خوش آمدید");
define("Questbox_desc_text_2" , "شروع مأموریت");

define("LVL",'سطح');

define("SIDE_I_1","آرتیفکت‌ها منتشر می‌شوند در");
define("SIDE_I_2","");
define("SIDE_I_3","آرتیفکت‌ها منتشر شدند");
define("SIDE_I_4","<font style='font-size:11px;'>نقشه‌های ساخت منتشر می‌شوند در</font>");
define("SIDE_I_5","نقشه‌های ساخت منتشر شدند");
define("SIDE_I_6","مدال‌ها داده می‌شوند در");
define("SIDE_I_7","");

define("CS","محل ساخت‌وساز");
define("UPGRADECOST","هزینه ارتقا به سطح %s ");
define("SERVER_INFO","اطلاعات سرور");

define("MORE_ADVS_1","باید به ماجراجویی بروی");
define("MORE_ADVS_2","بار دیگر تا بتوانی آیتم بخری");

define("WORLDWONDER","شگفتی جهان");
define("WAREHOUSE","انبار");

define("NO_FARM","هنوز هیچ فارم لیستی وجود ندارد!");

define("FARMLIST_FOOTER","<small>
منابع فارم‌ها تقریباً هر ~30 ثانیه محاسبه می‌شوند.<br>
ظرفیت انبار و گندم در فارم‌ها برابر در نظر گرفته می‌شود.<br>
لیست بر اساس زمان ایجاد هر مورد مرتب شده است.<br>
</small>");

define("PROTECTION_TIME","شما تا <b><span class=\"timer\" counting=\"down\" value=\"%s\">%s</span></b> تحت حفاظت مبتدیان خواهید بود.");
define("ACCOUNT_DELETION","حساب شما تا <b><span id=\"timer100\">%s</span></b> حذف خواهد شد");

define("Ally_dorf1","اتحاد");
define("DIRECT_LINK","لینک مستقیم");

define("NO_PLUS_ESI","این گزینه نیاز به حساب پلاس فعال دارد");
define("NO_PLUS_ESI2","رفتن به فروشگاه");
define("NO_PLUS_ESI3","رفتن به بازار");

define("plus_goldcount","طلا");

define("buygold_DESC_1","موقعیت");
define("buygold_DESC_2","موقعیت خود را انتخاب کنید:");
define("buygold_DESC_3","تغییر");
define("buygold_DESC_4","بسته‌های طلا:");
define("buygold_DESC_5","یک بسته انتخاب کنید");
define("buygold_DESC_7","درگاه‌های پرداخت");
define("buygold_DESC_8","باید انتخاب شود");
define("buygold_DESC_9","قیمت‌ها به‌صورت نهایی مشخص شده‌اند");
define("buygold_DESC_10","پرداخت بلافاصله انجام می‌شود");
define("buygold_DESC_11","خرید طلا");
define("buygold_DESC2_1","یک بسته دیگر انتخاب کنید");
define("buygold_DESC_6","مرحله 2 - انتخاب بسته");

define("first_desc1" , "یک قبیله انتخاب کنید");
define("first_desc2" , "از فعال‌سازی حساب خود متشکریم");
define("first_desc3" , "یک قبیله برای بازی در این سرور انتخاب کنید");
define("first_desc4" , "اگر اولین تجربه شما در تراوین است، ما گل‌ها را پیشنهاد می‌کنیم");

define("first_Gauls_desc1" , "گل‌ها");
define("first_Gauls_desc2" , "ویژگی‌ها:");
define("first_Gauls_desc3" , "زمان کمی برای یادگیری نیاز دارند.");
define("first_Gauls_desc4" , "از همان ابتدای بازی در برابر غارت بهتر دفاع می‌کنند.");
define("first_Gauls_desc5" , "سیستم جاده‌ای عالی و سریع‌ترین نیروهای بازی را دارند.");
define("first_Gauls_desc6" , "بهترین انتخاب برای بازیکنان جدید.");

define("first_Roman_desc1" , "رومی‌ها");
define("first_Roman_desc2" , "ویژگی‌ها:");
define("first_Roman_desc3" , "مدیریت زمان در آن‌ها بسیار مهم است.");
define("first_Roman_desc4" , "می‌توانند سریع‌تر از سایر قبایل دهکده خود را توسعه دهند.");
define("first_Roman_desc5" , "ارتشی قدرتمند دارند اما هزینه‌بر هستند؛ سیستم‌های ساختمانی بسیار قدرتمندی دارند.");
define("first_Roman_desc6" , "اوایل بازی با این قبیله سخت است و برای بازیکنان تازه‌کار توصیه نمی‌شود.");

define("first_Teutons_desc1" , "توتون‌ها");
define("first_Teutons_desc2" , "ویژگی‌ها:");
define("first_Teutons_desc3" , "برای بازیکنان تهاجمی بسیار مناسب هستند.");
define("first_Teutons_desc4" , "نیروها ارزان هستند، سریع آموزش می‌بینند و برای غارت عالی‌اند.");
define("first_Teutons_desc5" , "مناسب بازیکنان تهاجمی و باتجربه.");

define("first_page_second_step_desc1" , "دهکده در محل انتخابی شما ساخته خواهد شد.");

define("first_page_tribe1","رومی‌ها");
define("first_page_tribe2","توتون‌ها");
define("first_page_tribe3","گل‌ها");

define("first_page_tribe1_lead","Kvyntvs");
define("first_page_tribe2_lead","Henrik");
define("first_page_tribe3_lead","Ambyvryks");

define("first_Gauls_chosen_desc1" , "شما %s را انتخاب کردید. از این به بعد راهنمای شما %s خواهد بود.");
define("first_Romans_chosen_desc1" , "شما %s را انتخاب کردید. از این به بعد راهنمای شما %s خواهد بود.");
define("first_Teutons_chosen_desc1" , "شما %s را انتخاب کردید. از این به بعد راهنمای شما %s خواهد بود.");

define("first_page_second_step_desc2" , "تغییر قبیله");
define("first_page_second_step_desc3" , "با کلیک روی نقشه می‌توانید محل ساخت دهکده خود را تغییر دهید.");
define("first_page_second_step_desc4" , "شما در شمال غربی شروع خواهید کرد");
define("first_page_second_step_desc5" , "شما در شمال شرقی شروع خواهید کرد");
define("first_page_second_step_desc6" , "شما در جنوب غربی شروع خواهید کرد");
define("first_page_second_step_desc7" , "شما در جنوب شرقی شروع خواهید کرد");
define("first_page_second_step_desc8" , "ساخت دهکده");

define("BUILDINGS","مرکز دهکده");

define("CHANGING_YOUR_VILLAGE_NAME","تغییر نام دهکده");
define("NEW_NAME","نام جدید دهکده");

define("IS_ON_ADVENTURE","در ماجراجویی است");

define("MOVING_FROM","حرکت از");
define("LN_TO","به");

define("SOME_CHANGES_DONE","تغییرات شما ذخیره نشده‌اند. آیا مطمئن هستید که می‌خواهید خارج شوید؟");

define("MORE_INFO_25_BUTTON","اطلاعات بیشتر درباره 25٪ تولید بیشتر منابع");

define("HEROFULLLVL","قهرمان شما به حداکثر سطح رسیده است.");

define("LN_QUEST","ماموریت");
define("SHOW_HINTS_PANEL","نمایش پنل راهنما");

define("JR_CONSTRUCTION_PLANS_TITLE","نقشه ساخت شگفتی جهان");
define("JR_CONSTRUCTION_PLANS_VNAME","دهکده نقشه ساخت");
define("JR_CONSTRUCTION_PLANS_DESC","با استفاده از این نقشه ساخت باستانی می‌توانید شگفتی جهان را تا سطح 50 بسازید. برای ساخت در سطوح بالاتر، اتحاد شما باید حداقل دو نقشه در اختیار داشته باشد.");

define("JR_CONSTRUCTION_PLANS_RELEASE_TITLE","نقشه‌های ساخت");

define("JR_CONSTRUCTION_PLANS_RELEASE_DESC","چندین دهه پیش قبایل تراوین از بازگشت ناگهانی ناتارها شگفت‌زده شدند. این قبیله باستانی با دانش و قدرت عظیم خود بار دیگر قصد داشت مردم آزاد را تهدید کند. بنابراین همه تلاش‌ها برای آماده‌سازی جنگ نهایی علیه ناتارها آغاز شد. بسیاری به سازه‌ای افسانه‌ای به نام «شگفتی جهان» به‌عنوان راه‌حل فکر کردند.");

define("JR_CONSTRUCTION_PLANS_RELEASE_TREASURY_DESC","اما برای ساخت چنین بنایی نیاز به نقشه‌های ساخت است. به همین دلیل معماران راه‌هایی هوشمندانه برای نگهداری امن آن‌ها طراحی کردند. به‌زودی ساختمان‌هایی شبیه معبد در شهرها ظاهر شد که خزانه نام داشتند.");

define("JR_CONSTRUCTION_PLANS_RELEASE_MYTHS_DESC","متأسفانه هیچ‌کس — حتی خردمندترین افراد — نمی‌دانست این نقشه‌ها کجا هستند. هرچه مردم بیشتر جستجو کردند، بیشتر شبیه افسانه به نظر می‌رسید.");

define("JR_CONSTRUCTION_PLANS_RELEASE_DISCOVERED_DESC","اما امروز این راز کشف شده است. پیشاهنگان قبایل مختلف محل این نقشه‌ها را پیدا کرده‌اند. این نقشه‌ها که توسط ناتارها محافظت می‌شوند در واحه‌های مختلف سرزمین تراوین پنهان شده‌اند. تنها شجاع‌ترین قهرمانان می‌توانند آن‌ها را به دست آورند و به دهکده خود بازگردانند تا ساخت آغاز شود.");

define("JR_CONSTRUCTION_PLANS_RELEASE_LINK_DESC","تمام اطلاعات درباره نحوه کار نقشه‌های ساخت را می‌توانید در سرورها مشاهده کنید.");

define("JR_HERE","اینجا");
define("JR_travian_TEAM","تیم تراوین");
define("JR_CONTINUE","ادامه");

define("JR_ATTACK_COMBAT_MODEL","مدل نبرد");
define("JR_ATTACK_NORMAL","حمله عادی");
define("JR_ATTACK_RAID","غارت");

define("JR_WARSIM_ATTACKER","مهاجم");
define("JR_WARSIM_DEFENDERS","مدافعان");
define("JR_WARSIM_ATTACKCONFIG","تنظیمات حمله");
define("JR_WARSIM_SIMULATE","شبیه‌سازی");

define("JR_POWERED_BY","قدرت گرفته از mehran");
define("JR_RIGHTS","تمام حقوق محفوظ است");
define("JR_ZRAVIANX","mehran");
define("JR_COPYYEAR","&copy; 2011 - 2012");

define("JR_FOOTER_SPECIAL_S","<b>توسعه توسط: <a href=\"404/\" target=\"_blank\" style=\"color:purple\">mehran</a> (توسعه‌دهنده، مترجم و طراح)</b> <br/><br/> با تشکر ویژه از <a style=\"color:green\">Mehran EBDa (Developer)، Papa Grumps (مترجم انگلیسی) و akshay9 (Developer)</a>");

define("JR_NOT_ADMIN","دسترسی رد شد: شما مدیر نیستید!");

define("JR_ART_BPTTL","نقشه ساخت باستانی");
define("JR_ART_BPVN","نقشه ساخت شگفتی جهان");
define("JR_ART_BPDES",'با استفاده از این نقشه ساخت باستانی می‌توانید شگفتی جهان را تا سطح 50 بسازید. برای ادامه ساخت، اتحاد شما باید حداقل دو نقشه در اختیار داشته باشد.');

define('WILLACTIN','فعال خواهد شد در');

define("JR_CATEGORY","دسته‌بندی");
define("JR_SELECT","انتخاب");

define("JR_GENERALQUESTIONS","سوالات عمومی");
define("JR_ICANNOTLOGIN","نمی‌توانم وارد حساب شوم");
define("JR_ICANNOTREGISTER","نمی‌توانم ثبت‌نام کنم");

define("JR_SEND","ارسال");
define("JR_REGISTERFIRST","لطفاً ابتدا یک حساب ثبت کنید.");

define("JR_HEROATTRIBUTES","ویژگی‌ها");
define("JR_HEROAPPEARANCE","ظاهر");
define("JR_HEROADVENTURE","ماجراجویی");
define("JR_HEROAUCTION","حراج");

define("JR_HEROHEAD","سر");
define("JR_HEROHAIRCOLOR","رنگ مو");
define("JR_HEROHAIRSTYLE","مدل مو");
define("JR_HEROEARS","گوش‌ها");
define("JR_HEROEYEBROWS","ابروها");
define("JR_HEROEYES","چشم‌ها");
define("JR_HERONOSE","بینی");
define("JR_HEROMOUTH","دهان");
define("JR_HEROBEARD","ریش");

define("JR_HEROLOCATION","موقعیت");
define("JR_HEROTIME","مدت زمان");
define("JR_HERODIFFICULTY","درجه سختی");
define("JR_HEROTIMELEFT","زمان باقی‌مانده");
define("JR_HEROLINK","لینک");

define("JR_HEROBIDERROR1","سکه نقره کافی برای خرید این آیتم ندارید. حداقل باید داشته باشید");
define("JR_HEROBIDERROR2","سکه");
define("JR_HEROBIDERROR3","سکه نقره کافی برای ثبت پیشنهاد ندارید.");
define("JR_HEROBIDERROR4","پیشنهاد بالاتری ثبت شده است.");
define("JR_HEROBIDERROR5","حراج به پایان رسیده است.");
define("JR_HEROBIDERROR6","این حراج وجود ندارد.");

define("JR_HEROEVASION","در صورت فعال بودن، قهرمان هنگام حمله به دهکده مخفی می‌شود.");

define("JR_HERODEADORNOTHERE","قهرمان شما مرده است یا در این دهکده حضور ندارد، بنابراین نمی‌توانید از این آیتم استفاده کنید.");

define("HEROISDEAD","قهرمان مرده است");

define("JR_HEROBUYITEMS","خرید آیتم");
define("JR_HEROSELLITEMS","فروش آیتم");

define("JR_HEROEXP","تجربه");
define("JR_HEROEXPGROW","افزایش تجربه");
define("JR_HEROEXPWILLBE","پس از استفاده، تجربه خواهد شد");

define("JR_HEROCURRENTCP","امتیاز فرهنگی فعلی");
define("JR_HEROCPVALUE","امتیاز فرهنگی");
define("JR_HEROCPAFTERUSE","امتیاز فرهنگی پس از استفاده");

define("JR_HEROWANNAWEAR","آیا واقعاً می‌خواهید این آیتم را بپوشید؟");

define("JR_HEROTIU","مجموع آیتم‌های استفاده شده");


define("JR_SAVE","ذخیره");

define("JR_FOREST","جنگل");
define("JR_FIELD","دشت");
define("JR_MOUNTAIN","کوه");
define("JR_SEA","دریا");
define("JR_OK","باشه");

define("JR_CANCEL","لغو");
define("JR_YES","بله");
define("JR_NO","خیر");
define("NUM","شماره");
define("JR_NOTFINISHED","تکمیل نشده");
define("JR_CONSUMPTION","مصرف");

define("JR_MOW","مدال‌های هفته");
define("JR_MEDALSCONFIRM","تأیید برای اعطای مدال‌ها");
define("JR_MEDALSCONFIRMNOTE","نکته: این کار ممکن است کمی زمان ببرد");
define("JR_CONFIRM","تأیید");
define("GENDER","جنسیت");
define("GENDER0","مشخص نشده");
define("GENDER1","مرد");
define("GENDER2","زن");

//logint4.4
define("logint40","نقشه بزرگ‌تر||برای استفاده از این قابلیت باید Travian Plus فعال باشد.");
define("logint41","اشغال شده");
define("logint42","اشغال نشده");
define("logint43","بیابان");
define("logint410","مرکز نقشه");
define("logint411","تأسیس دهکده جدید");
define("logint412","گزارش‌ها");
define("logint413","بازیکن");
define("logint414","قبیله");
define("logint415","اتحاد");
define("logint416","مالک");
define("logint417","جمعیت");
define("logint418","توزیع");
define("logint419","ارسال نیرو");

//pluspalladiys
define("pluss0","برای خرید طلا از روش‌های دیگر (qiwi، webmoney، paypal) با");
define("pluss1","مدیر");
define("pluss2","تماس بگیرید. پس از خرید طلا باید به بخش");
define("pluss3","بانک");
define("pluss4","بروید. در آنجا می‌توانید طلا را به هر حسابی در سرور به‌صورت کامل یا جزئی منتقل کنید.");
define("pluss5","خرید طلا");
define("pluss6","قابلیت پلاس");
define("pluss7","توضیحات");
define("pluss8","مدت زمان");
define("pluss9","طلا");
define("pluss10","عملیات");
define("pluss11","حساب");
define("pluss12","باقی‌مانده");
define("pluss13","روز");
define("pluss14","صرافی");
define("pluss15","مقدار طلا یا نقره‌ای که می‌خواهید تبدیل کنید را وارد کنید.");
define("pluss16","نرخ تبدیل");
define("pluss17","1 طلا : 100 نقره");
define("pluss18","2000 نقره : 1 طلا");
define("pluss19","تبدیل");
define("pluss20","خطاااااااااااااااا");
define("pluss21","خرید طلا");
define("pluss22","قابلیت");
define("pluss23","ساخت طلا");
define("pluss24","تبدیل طلا و نقره");
define("pluss25","فعال‌سازی");
define("pluss26","تمدید");
define("pluss27","نیاز به طلا");
define("pluss28","باقی‌مانده");
define("pluss29","روز");
define("pluss30","ساعت");
define("pluss31","دقیقه");
define("pluss32","شما دارید");
define("pluss33","طلا");
define("pluss34","تولید: چوب");
define("pluss35","تولید: خاک رس");
define("pluss36","تولید: آهن");
define("pluss37","تولید: گندم");
define("pluss38","NPC 1:1");
define("pluss39","");
define("pluss40","");
define("pluss41","");
define("pluss42","");
define("pluss43","");
define("pluss44","");
define("pluss45","");

//herohome
define("herohero0","ویژگی‌ها");
define("herohero1","ظاهر");
define("herohero2","ماجراجویی");
define("herohero3","حراج‌ها");
define("herohero4","خرید آیتم");
define("herohero5","فروش آیتم");
define("herohero6","تصادفی");

//ban_msg.tpl
define("yubnd","شما مسدود شده‌اید. لطفاً به مولتی‌هانتر پیام دهید.");

define("SOKI_1", "ماجراجویی");
define("SOKI_2", "نیروها");
define("SOKI_3", "زمان رسیدن");
define("SOKI_4", "شروع ماجراجویی");
define("SOKI_5", "هشدار");
define("SOKI_6", "طومارها ظاهر شدند");

define("attack1", "منابع");
define("attack2", "زیرساخت");
define("attack3", "نیروها");
define("attack4", "منابع");
define("attack5", "زیرساخت");
define("attack6", "نیروها");
define("attack7", "اسکنه الماسی");
define("attack8", "چکش مرمری غول‌پیکر");
define("attack9", "طومارهای هِمون");
define("attack10", "نعل اسب اوپال");
define("attack11", "ارابه طلایی");
define("attack12", "صندل‌های فیدیپیدس");
define("attack13", "داستان یک موش");
define("attack14", "نامه ژنرال");
define("attack15", "دفترچه خاطرات سون تزو");
define("attack16", "سوگندنامه سرباز نوشته شده");
define("attack17", "اعلام جنگ");
define("attack18", "خاطرات اسکندر کبیر");
define("attack19", "نقشه انبار بزرگ یا انبار غله بزرگ!");
define("attack20", "سازندگان شگفتی جهان!");
define("attack21", "تأیید");

define("newdorf1", "تأسیس دهکده جدید");
define("newdorf2", "جدید");
define("newdorf3", "تأسیس دهکده جدید");
define("newdorf4", "نیروها");
define("newdorf5", "مدت زمان");
define("newdorf6", "منابع");
define("newdorf7", "تأیید");
define("newdorf8", "امتیاز فرهنگی");

define("search1", "نیروی کمکی");
define("search2", "حمله عادی");
define("search3", "غارت");
define("search4", "مختصات");
define("search5", "X");
define("search6", "Y");
define("search7", "تأیید");

define("sendback1", "بازگرداندن");
define("sendback2", "این نیروها را بازگردان");
define("sendback3", "نیروها");
define("sendback4", "زمان");
define("sendback5", "در");
define("sendback6", "به");
define("sendback7", "تأیید");

define("startraid1", "نیروهای کافی ندارید!");

define("activated1", "ثبت‌نام برای بازی");
define("activated2", "ثبت‌نام");

define("delete", "ثبت‌نام برای بازی");
define("delete2", "حذف");

define("allimenu1", "فعال");
define("allimenu2", "عادی");
define("allimenu3", "اخبار");
define("allimenu4", "حملات");
define("allimenu5", "تنظیمات");

define("allidesc1", "انبار");

define("assignpos1", "اختصاص");

define("attacker1", "هیچ گزارشی موجود نیست");

define("defender1", "هیچ گزارشی موجود نیست");

define("attacks1", "رویدادهای نظامی");
define("attacks2", "مدافع");
define("attacks3", "مهاجم");

define("changepos0", "نام");
define("changepos1", "اختصاص");
define("changepos2", "اخراج");
define("changepos3", "تغییر توضیحات");
define("changepos4", "دیپلماسی اتحاد");
define("changepos5", "ارسال پیام گروهی به کل اتحاد");
define("changepos6", "دعوت");
define("changepos7", "نام سمت");

define("changediplo1", "هیچ");

define("invite1", "دعوتی وجود ندارد");
define("invite2", "رد شده");
define("invite3", "دعوت شده");

define("kick1", "انجام");

define("option1", "انجام");

define("overvieww1", "جزئیات");
define("overvieww2", "سمت");
define("overvieww", "اعضا");

define("quitally1", "خروج");

define("bids1", "برای هر واحد");
define("bids2", "پیشنهادها");
define("bids3", "نقره");
define("bids4", "زمان");
define("bids5", "حذف");

define("buy1", "نقره");
define("buy2", "برای هر واحد");
define("buy3", "پیشنهاد جدید");
define("buy4", "پیشنهاد");
define("build1","ارتقای انبار");
define("build2","ارتقای انبار غله");
define("build3","منابع کافی");
define("build4","تولید گندم منفی است، بنابراین هرگز منابع کافی نخواهید داشت");
define("build5","منابع کم");
define("build6","کاملاً توسعه یافته");
define("build7","ارتقای آهنگری");
define("build8","تحقیق در حال انجام است");
define("build9","توسعه");
define("build10","واحد");
define("build11","زمان باقی‌مانده");
define("build12","پایان یافت");
define("build13","تخریب ساختمان");
define("build14","اگر دیگر به ساختمانی نیاز ندارید، می‌توانید دستور تخریب آن را بدهید");
define("build15","تخریب");
define("build16","تمام ساخت‌وساز و تحقیقات این دهکده فوراً با 2 طلا تمام شود؟");
define("build17","نابود کردن ساختمان");
define("build18","حذف");
define("build19","لیست فارم رایگان است، اما فقط زمانی که کلاب طلایی فعال باشد.");
define("build20","تنظیمات فرار نیروها");
define("build21","فعال‌سازی فرار نیروها برای پایتخت شما");
define("build22","حمله به ");
define("build23","غارت ");
define("build24","نیروی کمکی برای ");
define("build25","نیروها");
define("build26","زمان رسیدن");
define("build27","در");
define("build28","بازگشت از ");
define("build29","نیروی کمکی برای ");
define("build30","بازگشت از ");
define("build31","بازگشت از ");
define("build32","بازگشت از پوشش ");
define("build33","واحه");
define("build34","پوشش");
define("build35","بازگشت از ");
define("build36","نیروها");
define("build37","غارت شده");
define("build38","زمان رسیدن");
define("build39","حمله به ");
define("build40","واحه");
define("build41","نیروها");
define("build42","زمان رسیدن");
define("build43","در");
define("build44","نیروها");
define("build45","مصرف");
define("build46","در ساعت");
define("build47","نیروی کمکی برای");
define("build48","جاسوسی");
define("build49","حمله به");
define("build50","غارت");
define("build51","تأسیس دهکده");
define("build52","ماجراجویی");
define("build53","واحه");
define("build54","نیروها");
define("build55","تاجران");
define("build56","چوب");
define("build57","آهن");
define("build58","گندم");
define("build59","مختصات");
define("build60","بازیکن");
define("build61","مدت زمان");
define("build62","تاجران");
define("build63","ارسال تاجران");
define("build64","گندم");
define("build65","مختصات");
define("build66","هر تاجر می‌تواند حمل کند");
define("build67","ارسال منابع");
define("build68","هیچ مختصاتی انتخاب نشده است");
define("build69","نمی‌توانید منابع را به همان دهکده ارسال کنید");
define("build70","بازیکن مسدود شده است. نمی‌توانید برای او منابع ارسال کنید.");
define("build71","منابع انتخاب نشده‌اند");
define("build72","مختصات یا نام دهکده را وارد کنید");
define("build73","تاجران کافی نیستند");
define("build74","تاجران در راه هستند");
define("build75","انتقال از");
define("build76","رسیدن در");
define("build77","تاجران شما در راه هستند");
define("build78","انتقال به");
define("build79","رسیدن در");
define("build80","منبع");
define("build81","بازگشت تاجران");
define("build82","بازگشت از");
define("build83","رسیدن در");
define("build84","منبع");
define("build85","در جستجو");
define("build86","پیشنهاد می‌دهم");
define("build87","پیشنهادات در بازار");
define("build88","پیشنهاد شده");
define("build89","به من");
define("build90","درخواست شده");
define("build91","از من");
define("build92","بازیکن");
define("build93","مدت زمان");
define("build94","عملیات");
define("build95","منابع کافی نیست");
define("build96","تاجر کافی نیست");
define("build97","پذیرفتن پیشنهاد");
define("build98","هیچ پیشنهادی در بازار موجود نیست");
define("build99","در حال پیشنهاد");
define("build100","چوب");
define("build101","خاک رس");
define("build102","آهن");
define("build103","گندم");
define("build104","حداکثر زمان حمل‌ونقل");
define("build105","ساعت");
define("build106","در حال جستجو");
define("build107","فقط اتحاد خودی");
define("build108","تاجران");
define("build109","فروش");
define("build110","پیشنهاد");
define("build111","اتحاد");
define("build112","مدت زمان");
define("build113"," ساعت");
define("build114","همه");
define("build115","تجارت NPC تکمیل شد");
define("build116","هزینه ۳");
define("build117","بازگشت به ساختمان");
define("build118","تجارت NPC");
define("build119","تبادل منابع (مرحله ۲ از ۲)");
define("build120","هزینه‌ها");
define("build121","امکان استفاده از تجارت NPC در دهکده WW وجود ندارد.");
define("build122","شروع");
define("build123","تاجران");
define("build124","عملیات");
define("build125","هیچ مسیر تجاری فعالی وجود ندارد");
define("build126","ویرایش");
define("build127","ایجاد مسیر تجاری جدید");
define("build128","ایجاد مسیر تجاری");
define("build129","دهکده هدف");
define("build130","منابع");
define("build131","زمان شروع");
define("build132","تعداد ارسال");
define("build133","ویرایش مسیر تجاری");
define("build134","منابع");
define("build135","زمان شروع");
define("build136","تعداد ارسال");
define("build137","اتحاد");
define("build138","برچسب");
define("build139","نام");
define("build140","دعوت‌نامه‌ها");
define("build141","پذیرفتن");
define("build142","هیچ دعوت‌نامه‌ای موجود نیست");
define("build143","ایجاد اتحاد");
define("build144","برچسب");
define("build145","نام");
define("build146","ایجاد");
define("build147","آموزش");
define("build148","در حال آموزش");
define("build149","هیچ واحدی در دسترس نیست. ابتدا در آکادمی تحقیق کنید");
define("build150","در دسترس");
define("build151","همه");
define("build152","واحدها باید تحقیق شوند");
define("build153","آموزش");
define("build154","واحدها باید تحقیق شوند");
define("build155","در حال آموزش");
define("build156","مدت زمان");
define("build157","پایان یافت");
define("build158","تحقیقات زمانی امکان‌پذیر است که آکادمی تکمیل شود");
define("build159","گسترش انبار");
define("build160","گسترش<br>انبار");
define("build161","گسترش انبار غله");
define("build162","گسترش<br>انبار غله");
define("build163","منابع کافی");
define("build164","تولید گندم منفی است، بنابراین هرگز به منابع مورد نیاز نخواهید رسید");
define("build165","خیلی کم");
define("build166","منابع");
define("build167","تحقیق در حال انجام است");
define("build168","در حال تحقیق");
define("build169","مدت زمان");
define("build170","تکمیل");
define("build171","ساعت");
define("build172","تعداد واحدهای مخفی در هر منبع فعلی");
define("build173","واحدهای مخفی در هر منبع در سطح");
define("build174","جشن‌ها زمانی آغاز می‌شوند که تالار شهر تکمیل شود.");
define("build175","جشن‌ها");
define("build176","عملیات");
define("build177","در حال انجام");
define("build178","در");
define("build179","برگزار کن");
define("build180","جشن بزرگ (۲۰۰۰ امتیاز فرهنگی)");
define("build181","پایان");
define("build182","جشن");
define("build183","برای گسترش قلمرو خود به امتیاز فرهنگی نیاز دارید. این امتیازها به‌مرور زمان از ساختمان‌های شما تولید می‌شوند و در سطوح بالاتر سریع‌تر افزایش می‌یابند.");
define("build184","تولید این دهکده");
define("build185","امتیاز فرهنگی در روز");
define("build186","تولید تمام دهکده‌ها");
define("build187","امتیاز فرهنگی در روز");
define("build188","دهکده‌های شما تاکنون تولید کرده‌اند");
define("build189","امتیاز در مجموع. برای تأسیس یا فتح یک دهکدهٔ جدید به");
define("build190","امتیاز نیاز دارید.");
define("build191","با حمله توسط سناتورها، رئیس‌ها یا سرداران، وفاداری دهکده کاهش می‌یابد. اگر به صفر برسد، دهکده به قلمرو مهاجم می‌پیوندد. وفاداری فعلی این دهکده برابر است با");
define("build192","درصد");
define("build193","دهکده‌هایی که توسط این دهکده تأسیس یا فتح شده‌اند");
define("build194","دهکده");
define("build195","بازیکن");
define("build196","جمعیت");
define("build197","مختصات");
define("build198","تاریخ");
define("build199","تاکنون هیچ دهکده‌ای توسط این دهکده تأسیس یا فتح نشده است.");
define("build200","آموزش");
define("build201","دوره");
define("build202","آماده");
define("build203","در");
define("build204","آموزش");
define("build205","برای تأسیس دهکدهٔ جدید به اقامتگاه سطح ۱۰ یا ۲۰ و ۳ مهاجر نیاز دارید. برای فتح دهکدهٔ جدید به اقامتگاه سطح ۱۰ یا ۲۰ و یک سناتور، رئیس یا سردار نیاز است.");
define("build206","رمز عبور نادرست است");
define("build207","این پایتخت شماست");
define("build208","تغییر پایتخت");
define("build209","آیا مطمئن هستید که می‌خواهید پایتخت خود را تغییر دهید؟<br/><b>این عمل قابل بازگشت نیست!</b><br/>برای امنیت، لطفاً رمز عبور خود را وارد کنید");
define("build210","تغییر");
define("build211","کاخ در حال ساخت است");
define("build212","برای تأسیس دهکدهٔ جدید به کاخ سطح ۱۰، ۱۵ یا ۲۰ و ۳ مهاجر نیاز دارید. برای فتح دهکدهٔ جدید به کاخ سطح ۱۰، ۱۵ یا ۲۰ و یک سناتور، رئیس یا سردار نیاز است.");
define("build213","آرتیفکت‌های شما");
define("build214","عنوان");
define("build215","دهکده");
define("build216","تصرف شده");
define("build217","شما هیچ آرتیفکتی ندارید");
define("build218","اسکنهٔ الماس");
define("build219","ساختمان‌ها در برابر حملات منجنیق و دژکوب مقاوم‌تر می‌شوند. این اثر برای شگفتی جهان اعمال نمی‌شود، اما نوع سراسری حساب و نوع یکتا برای سایر ساختمان‌ها در دهکدهٔ شگفتی جهان اعمال می‌شود.");
define("build220","چکش مرمرین غول‌آسا");
define("build221","ساختمان‌ها در برابر حملات منجنیق و دژکوب مقاوم‌تر می‌شوند. این اثر برای شگفتی جهان اعمال نمی‌شود، اما نوع سراسری حساب و نوع یکتا برای سایر ساختمان‌ها در دهکدهٔ شگفتی جهان اعمال می‌شود.");
define("build222","طومارهای همون");
define("build223","ساختمان‌ها در برابر حملات منجنیق و دژکوب مقاوم‌تر می‌شوند. این اثر برای شگفتی جهان اعمال نمی‌شود، اما نوع سراسری حساب و نوع یکتا برای سایر ساختمان‌ها در دهکدهٔ شگفتی جهان اعمال می‌شود.");
define("build224","نعل اسب اوپال");
define("build225","نیروها سریع‌تر حرکت می‌کنند.");
define("build226","ارابهٔ طلایی");
define("build227","نیروها سریع‌تر حرکت می‌کنند.");
define("build228","صندل‌های فیدیپیدس");
define("build229","نیروها سریع‌تر حرکت می‌کنند.");
define("build230","داستان یک موش");
define("build231","جاسوس‌ها، Equites Legati و Pathfinders در جاسوسی و دفاع در برابر جاسوسی قوی‌تر می‌شوند. همهٔ جاسوس‌های دهکده/حساب و همچنین تمام جاسوس‌هایی که از این دهکده/حساب اعزام می‌شوند تحت تأثیر هستند؛ اما جاسوس‌هایی که به‌عنوان نیروی کمکی به دهکده‌هایی خارج از پوشش آرتیفکت اعزام شده‌اند، تحت تأثیر نیستند. همچنین می‌توانید نوع نیروهای مهاجم را در میدان تجمع ببینید، اما تعداد آن‌ها را نه.");
define("build232","نامهٔ ژنرال");
define("build233","جاسوس‌ها، Equites Legati و Pathfinders در جاسوسی و دفاع در برابر جاسوسی قوی‌تر می‌شوند. همهٔ جاسوس‌های دهکده/حساب و همچنین تمام جاسوس‌هایی که از این دهکده/حساب اعزام می‌شوند تحت تأثیر هستند؛ اما جاسوس‌هایی که به‌عنوان نیروی کمکی به دهکده‌هایی خارج از پوشش آرتیفکت اعزام شده‌اند، تحت تأثیر نیستند. همچنین می‌توانید نوع نیروهای مهاجم را در میدان تجمع ببینید، اما تعداد آن‌ها را نه.");
define("build234","خاطرات سون تزو");
define("build235","جاسوس‌ها، Equites Legati و Pathfinders در جاسوسی و دفاع در برابر جاسوسی قوی‌تر می‌شوند. همهٔ جاسوس‌های دهکده/حساب و همچنین تمام جاسوس‌هایی که از این دهکده/حساب اعزام می‌شوند تحت تأثیر هستند؛ اما جاسوس‌هایی که به‌عنوان نیروی کمکی به دهکده‌هایی خارج از پوشش آرتیفکت اعزام شده‌اند، تحت تأثیر نیستند. همچنین می‌توانید نوع نیروهای مهاجم را در میدان تجمع ببینید، اما تعداد آن‌ها را نه.");
define("build236","سینی نقره‌ای");
define("build237","نیروها گندم کمتری مصرف می‌کنند.");
define("build238","کمان مقدس شکار");
define("build239","نیروها گندم کمتری مصرف می‌کنند.");
define("build240","جام شاه آرتور");
define("build241","نیروها گندم کمتری مصرف می‌کنند.");
define("build242","سوگندنامهٔ سرباز مکتوب");
define("build243","نیروها سریع‌تر آموزش داده می‌شوند.");
define("build244","اعلام جنگ");
define("build245","نیروها سریع‌تر آموزش داده می‌شوند.");
define("build246","خاطرات اسکندر مقدونی");
define("build247","نیروها سریع‌تر آموزش داده می‌شوند.");
define("build248","نقشهٔ انبار بزرگ یا انبار غلهٔ بزرگ");
define("build249","امکان ساخت انبار بزرگ یا انبار غلهٔ بزرگ را فراهم می‌کند.");
define("build250","دسترسی به ساختمان‌ها");
define("build251","نقشهٔ غارهای مخفی");
define("build252","آرتیفکت ظرفیت مخفیگاه را افزایش می‌دهد و همچنین باعث می‌شود حملات منجنیق دشمن به‌صورت تصادفی شلیک شوند. شگفتی جهان همیشه قابل هدف‌گیری و اصابت است.");
define("build253","کیسهٔ بی‌انتها");
define("build254","آرتیفکت ظرفیت مخفیگاه را افزایش می‌دهد و همچنین باعث می‌شود حملات منجنیق دشمن به‌صورت تصادفی شلیک شوند. شگفتی جهان همیشه قابل هدف‌گیری و اصابت است.");
define("build255","اسب تروا");
define("build256","آرتیفکت ظرفیت مخفیگاه را افزایش می‌دهد و همچنین باعث می‌شود حملات منجنیق دشمن به‌صورت تصادفی شلیک شوند. شگفتی جهان همیشه قابل هدف‌گیری و اصابت است.");
define("build257","آویز شیطنت");
define("build258","این آرتیفکت هر ۲۴ ساعت اثر خود را تغییر می‌دهد و می‌تواند هر یک از اثرهای سایر آرتیفکت‌ها (به‌جز نقشه‌های ساخت شگفتی جهان، انبار غلهٔ بزرگ و انبار بزرگ) را داشته باشد. همچنین محدودهٔ اثر هر ۲۴ ساعت به‌صورت تصادفی بین سراسری حساب یا سراسری دهکده تعیین می‌شود.");
define("build259","تصادفی");
define("build260","دست‌نوشتهٔ ممنوعه");
define("build261","این آرتیفکت هر ۲۴ ساعت اثر خود را تغییر می‌دهد و می‌تواند هر یک از اثرهای سایر آرتیفکت‌ها (به‌جز نقشه‌های ساخت شگفتی جهان، انبار غلهٔ بزرگ و انبار بزرگ) را داشته باشد. همچنین محدودهٔ اثر هر ۲۴ ساعت به‌صورت تصادفی بین سراسری حساب یا سراسری دهکده تعیین می‌شود.");
define("build262","تصادفی");
define("build263","طومار ساخت شگفتی جهان");
define("build264","آرتیفکت موردنیاز برای ساخت شگفتی");
define("build265","دسترسی به ساختمان‌ها");
define("build266","دهکده");
define("build267","حساب");
define("build268","خزانه");
define("build269","نفوذ");
define("build270","نزدیک‌ترین آرتیفکت‌ها");
define("build271","عنوان");
define("build272","بازیکن");
define("build273","فاصله");
define("build274","هیچ آرتیفکت نزدیکی وجود ندارد.");
define("build275","اسکنهٔ الماس");
define("build276","چکش مرمرین غول‌آسا");
define("build277","طومارهای همون");
define("build278","نعل اسب اوپال");
define("build279","ارابهٔ طلایی");
define("build280","صندل‌های فیدیپیدس");
define("build281","داستان یک موش");
define("build282","نامهٔ ژنرال");
define("build283","خاطرات سون تزو");
define("build284","سوگندنامهٔ سرباز مکتوب");
define("build285","اعلام جنگ");
define("build286","خاطرات اسکندر مقدونی");
define("build287","نقشهٔ انبار بزرگ یا انبار غلهٔ بزرگ");
define("build288","دسترسی به ساختمان‌ها");
define("build289","طومار ساخت شگفتی جهان");
define("build290","دسترسی به ساختمان‌ها");
define("build291","دهکده");
define("build292", "حساب");
define("build293", "فاصله");
define("build294", "اثر");
define("build295", "آرتیفکت‌های کوچک");
define("build296", "عنوان");
define("build297", "بازیکن");
define("build298", "اتحاد");
define("build299", "هیچ آرتیفکتی وجود ندارد.");
define("build300", "اسکنه الماس");
define("build301", "نعل اسب اوپال");
define("build302", "داستان یک موش");
define("build303", "سوگندنامه سرباز مکتوب");
define("build304", "نقشه انبار بزرگ یا انبار غله بزرگ");
define("build305", "دسترسی به ساختمان‌ها");
define("build306", "طومار ساخت شگفتی جهان");
define("build307", "دسترسی به ساختمان‌ها");
define("build308", "خزانه");
define("build309", "اثر");
define("build310", "دهکده");
define("build311", "آرتیفکت‌های بزرگ");
define("build312", "عنوان");
define("build313", "بازیکن");
define("build314", "اتحاد");
define("build315", "چکش مرمرین غول‌آسا");
define("build316", "طومارهای همون");
define("build317", "ارابه طلایی");
define("build318", "صندل‌های فیدیپیدس");
define("build319", "نامه ژنرال");
define("build320", "خاطرات سون تزو");
define("build321", "اعلام جنگ");
define("build322", "خاطرات اسکندر مقدونی");
define("build323", "نقشه انبار بزرگ یا انبار غله بزرگ");
define("build324", "دسترسی به ساختمان‌ها");
define("build325", "حساب");
define("build326", "هیچ آرتیفکتی وجود ندارد.");
define("build327", "خزانه");
define("build328", "اثر");
define("build329", "آرتیفکت‌های کوچک");
define("build330", "آرتیفکت‌های بزرگ");
define("build331", "دهکده");
define("build332", "حساب");
define("build333", "غیرفعال");
define("build334", "فعال");
define("build335", "اسکنه الماس");
define("build336", "ساختمان‌ها در برابر حملات منجنیق و دژکوب مقاوم‌تر می‌شوند. این اثر برای شگفتی جهان اعمال نمی‌شود، اما نوع سراسری حساب و یکتا برای سایر ساختمان‌ها در دهکده شگفتی جهان اعمال می‌شود.");
define("build337", "چکش مرمرین غول‌آسا");
define("build338", "ساختمان‌ها در برابر حملات منجنیق و دژکوب مقاوم‌تر می‌شوند. این اثر برای شگفتی جهان اعمال نمی‌شود، اما نوع سراسری حساب و یکتا برای سایر ساختمان‌ها در دهکده شگفتی جهان اعمال می‌شود.");
define("build339", "طومارهای همون");
define("build340", "ساختمان‌ها در برابر حملات منجنیق و دژکوب مقاوم‌تر می‌شوند. این اثر برای شگفتی جهان اعمال نمی‌شود، اما نوع سراسری حساب و یکتا برای سایر ساختمان‌ها در دهکده شگفتی جهان اعمال می‌شود.");
define("build341", "نعل اسب اوپال");
define("build342", "نیروها سریع‌تر حرکت می‌کنند.");
define("build343", "ارابه طلایی");
define("build344", "نیروها سریع‌تر حرکت می‌کنند.");
define("build345", "صندل‌های فیدیپیدس");
define("build346", "نیروها سریع‌تر حرکت می‌کنند.");
define("build347", "داستان یک موش");
define("build348", "جاسوس‌ها، Equites Legati و Pathfinders در جاسوسی و دفاع در برابر جاسوسی قوی‌تر می‌شوند. تمام جاسوس‌های دهکده/حساب و همچنین همه جاسوس‌هایی که از این دهکده/حساب برای جاسوسی اعزام می‌شوند تحت تأثیر قرار می‌گیرند. با این حال جاسوس‌هایی که به عنوان نیروی کمکی به دهکده‌هایی خارج از محدوده آرتیفکت اعزام شده‌اند تحت تأثیر نیستند. همچنین می‌توانید نوع نیروهای مهاجم را در میدان تجمع ببینید اما تعداد آن‌ها را نه.");
define("build349", "نامه ژنرال");
define("build350", "جاسوس‌ها، Equites Legati و Pathfinders در جاسوسی و دفاع در برابر جاسوسی قوی‌تر می‌شوند. تمام جاسوس‌های دهکده/حساب و همچنین همه جاسوس‌هایی که از این دهکده/حساب برای جاسوسی اعزام می‌شوند تحت تأثیر قرار می‌گیرند. با این حال جاسوس‌هایی که به عنوان نیروی کمکی به دهکده‌هایی خارج از محدوده آرتیفکت اعزام شده‌اند تحت تأثیر نیستند. همچنین می‌توانید نوع نیروهای مهاجم را در میدان تجمع ببینید اما تعداد آن‌ها را نه.");
define("build351", "خاطرات سون تزو");
define("build352", "جاسوس‌ها، Equites Legati و Pathfinders در جاسوسی و دفاع در برابر جاسوسی قوی‌تر می‌شوند. تمام جاسوس‌های دهکده/حساب و همچنین همه جاسوس‌هایی که از این دهکده/حساب برای جاسوسی اعزام می‌شوند تحت تأثیر قرار می‌گیرند. با این حال جاسوس‌هایی که به عنوان نیروی کمکی به دهکده‌هایی خارج از محدوده آرتیفکت اعزام شده‌اند تحت تأثیر نیستند. همچنین می‌توانید نوع نیروهای مهاجم را در میدان تجمع ببینید اما تعداد آن‌ها را نه.");
define("build353", "سوگندنامه سرباز مکتوب");
define("build354", "نیروها سریع‌تر آموزش داده می‌شوند.");
define("build355", "اعلام جنگ");
define("build356", "خاطرات اسکندر مقدونی");
define("build357", "نقشه انبار بزرگ یا انبار غله بزرگ");
define("build358", "امکان ساخت انبار بزرگ یا انبار غله بزرگ را فراهم می‌کند.");
define("build359", "دسترسی به ساختمان‌ها");
define("build360", "طومار ساخت شگفتی جهان");
define("build361", "آرتیفکت موردنیاز برای ساخت شگفتی جهان");
define("build362", "دسترسی به ساختمان‌ها");
define("build363", "مالک");
define("build364", "دهکده");
define("build365", "اتحاد");
define("build366", "اثر");
define("build367", "پاداش");
define("build368", "فعالیت");
define("build369", "نگهداری شده در");
define("build370", "خزانه");
define("build371", "سطح");
define("build372", "تصرف شده");
define("build373", "ظرفیت فعلی بار تاجر");
define("build374", "ظرفیت بار تاجر در سطح");
define("build375", "ظرفیت بار تاجر در سطح ۲۰");
define("build376", "آموزش");
define("build377", "آموزش زمانی آغاز می‌شود که سربازخانه بزرگ تکمیل شده باشد.");
define("build378", "موجود");
define("build379", "آموزش زمانی آغاز می‌شود که اصطبل بزرگ تکمیل شده باشد.");
define("build380", "در حال آموزش");
define("build381", "مدت زمان");
define("build382", "پایان");
define("build383", "ابتدا واحدهای سواره‌نظام را در آکادمی آموزش دهید.");
define("build384", "پاداش پایداری فعلی");
define("build385", "پاداش واقعی");
define("build386", "پاداش در سطح");
define("build387", "جشن");
define("build388", "اقدام");
define("build389", "جشن");
define("build390", "در طول");
define("build391", "منابع کافی خواهند بود");
define("build392", "گندم کافی نیست.");
define("build393", "کافی نیست");
define("build394", "منابع");
define("build395", "برگزاری");
define("build396", "جشن به مدت");
define("build397", "تکمیل خواهد شد");
define("build398", "حداکثر تله قابل آموزش در حال حاضر");
define("build399", "تله‌ها");
define("build400", "حداکثر تله قابل آموزش در سطح");
define("build401", "حداکثر تله قابل آموزش در سطح ۲۰");
define("build402", "در حال حاضر شما دارید");
define("build403", "موجود");
define("build404", "ساخت");
define("build405", "ساخت زمانی آغاز می‌شود که تله‌گذار تکمیل شده باشد.");
define("build406", "اُئیسی که توسط آن اشغال شده است");
define("build407", "دهکده");
define("build408", "نوع");
define("build409", "وفاداری");
define("build410", "تصرف شده");
define("build411", "مختصات");
define("build412", "منابع");
define("build413", "۱. اُئیسی بعدی از عمارت قهرمان سطح ۱۰");
define("build414", "۲. اُئیسی بعدی از عمارت قهرمان سطح ۱۵");
define("build415", "۳. اُئیسی بعدی از عمارت قهرمان سطح ۲۰");
define("build416", "۲. اُئیسی بعدی از عمارت قهرمان سطح ۱۵");
define("build417", "۳. اُئیسی بعدی از عمارت قهرمان سطح ۲۰");
define("build418", "۳. اُئیسی بعدی از عمارت قهرمان سطح ۲۰");
define("build419", "سایر اُئیسی‌ها");
define("build420", "مالک");
define("build421", "دهکده");
define("build422", "مختصات");
define("build423", "منبع");
define("build424", "ظرفیت فعلی");
define("build425", "واحد");
define("build426", "ظرفیت در سطح");
define("build427", "هزینه");
define("build428", "کارگران مشغول کار هستند");
define("build429", "کمبود غذا: ابتدا زمین‌های گندم را ارتقا دهید!");
define("build430", "انبار را ارتقا دهید.");
define("build431", "انبار غله را ارتقا دهید.");
define("build432", "منابع کافی در");
define("build433", "ساخت ساختمان");
define("build434", "صف ساخت");
define("build435", "ساخت ساختمان");
define("build436", "معمار");
define("build437", "ساخت ساختمان جدید");
define("build438", "مشاهده ساختمان‌هایی که به‌زودی در دسترس خواهند بود");
define("build439", "موردنیاز");
define("build440", "سطح");
define("build441", "این ساختمان در حداکثر سطح قرار دارد.");
define("build442", "حداکثر سطح ساخته شده است.");
define("build443", "این ساختمان در حال تخریب است.");
define("build444", "هزینه‌ها");
define("build445", "برای ساخت تا سطح");
define("build446", "تمام کارگران مشغول هستند");
define("build447", "تمام کارگران مشغول هستند. (صف)");
define("build448", "کمبود غذا. مزارع بیشتری بسازید.");
define("build449", "انبار بسازید.");
define("build450", "انبار غله بسازید.");
define("build451", "هرگز منابع کافی نخواهد بود");
define("build452", "منابع کافی");
define("build453", "افزایش سطح");
define("build454", "نوبت");
define("build455", "معمار");
define("build456", "شگفتی جهان");
define("build457", "سطح");
define("build459", "برای تغییر نام شگفتی جهان باید سطح آن حداقل ۱ باشد.");
define("build460", "نام شگفتی جهان");
define("build461", "پس از سطح ۱۰ نمی‌توانید نام شگفتی جهان را تغییر دهید.");
define("build462", "نام تغییر یافت.");
define("build463", "این ساختمان در حداکثر سطح قرار دارد.");
define("build464", "حداکثر سطح ساخته شده است.");
define("build465", "این ساختمان در حال تخریب است.");
define("build466", "هزینه‌ها");
define("build467", "برای ساخت تا سطح");
define("build468", "تمام کارگران مشغول هستند.");
define("build469", "تمام کارگران مشغول هستند. (صف)");
define("build470", "کمبود غذا. مزارع بیشتری بسازید.");
define("build471", "انبار بسازید.");
define("build472", "انبار غله بسازید.");
define("build473", "منابع کافی");
define("build474", "در");
define("build475", "افزایش سطح");
define("build476", "معمار");
define("build477", "به نقشه ساخت شگفتی جهان نیاز دارید.");
define("build478", "به نقشه‌های بیشتری برای ساخت شگفتی جهان نیاز دارید.");

define("dorf31", "دهکده");
define("dorf32", "دهکده");
define("dorf33", "ساختمان");
define("dorf34", "نیروها");
define("dorf35", "تاجران");
define("dorf36", "منابع");
define("dorf37", "مجموع");
define("dorf38", "انبار");
define("dorf39", "امتیاز فرهنگی");
define("dorf310", "امتیاز فرهنگی در روز");
define("dorf311", "جشن‌ها");
define("dorf312", "نیروها");
define("dorf313", "جایگاه‌ها");
define("dorf314", "نیروهای خودی");
define("dorf315", "امتیاز فرهنگی");
define("dorf316", "حملات");

define("gclub0", "دهکده");
define("gclub1", "در");
define("gclub2", "فاصله");
define("gclub3", "نیروها");
define("gclub4", "آخرین غارت");
define("gclub5", "هیچ لیست غارتی وجود ندارد.");
define("gclub6", "اُئیسی");
define("gclub7", "ویرایش");
define("gclub8", "انتخاب همه");
define("gclub9", "افزودن غارت");
define("gclub10", "شروع غارت");
define("gclub11", "آیا مطمئن هستید که می‌خواهید این لیست را حذف کنید؟");
define("gclub12", "جزئیات");
define("gclub13", "ایجاد لیست جدید");
define("gclub14", "نام");
define("gclub15", "دهکده");
define("gclub16", "ایجاد");
define("gclub17", "در این مختصات هیچ دهکده‌ای وجود ندارد.");
define("gclub18", "نمی‌توانید دهکده‌ای را که خودتان در آن هستید به لیست اضافه کنید.");
define("gclub19", "هیچ نیرویی انتخاب نشده است.");
define("gclub20", "مختصات صحیح را وارد کنید.");
define("gclub21", "افزودن اسلات");
define("gclub22", "نام فارم");
define("gclub23", "انتخاب هدف");
define("gclub24", "این لیست متعلق به شما نیست!");
define("gclub25", "در این مختصات هیچ دهکده‌ای وجود ندارد.");
define("gclub26", "نمی‌توانید دهکده‌ای را که خودتان در آن هستید به لیست اضافه کنید.");
define("gclub27", "مختصات صحیح را وارد کنید.");
define("gclub28", "هیچ نیرویی انتخاب نشده است.");
define("gclub29", "مختصات صحیح را وارد کنید.");
define("gclub30", "حذف");

define("map1", "مرکز نقشه");
define("map2", "تأسیس دهکده جدید");
define("map3", "ارسال نیرو");
define("map4", "توزیع:");
define("map5", "نیروها");
define("map6", "بازیکن");
define("map7", "قبیله");
define("map8", "اتحاد");
define("map9", "مالک");
define("map10", "جمعیت");
define("map11", "گزارش‌ها");

define("msg0", "موضوع");
define("msg1", "بازیکن");
define("msg2", "ارسال شده");
define("msg3", "هیچ پیامی موجود نیست.");
define("msg4", "انتخاب همه");
define("msg5", "حذف");
define("msg6", "صندوق ورودی");
define("msg7", "نوشتن پیام");
define("msg8", "ارسالی‌ها");
define("msg9", "هیچ پیامی وجود ندارد.");
define("msg10", "گیرنده");
define("msg11", "موضوع");
define("msg12", "ارسال");

define("notice0", "از دهکده");
define("notice1", "نیروها");
define("notice2", "از بین رفتند");
define("notice3", "اسیران");
define("notice4", "اطلاعات");
define("notice5", "دفاع");
define("notice6", "نیروی کمکی");
define("notice7", "حمله");
define("notice8", "از دهکده");
define("notice9", "ارسال شده");
define("notice10", "در");
define("notice11", "فرستنده");
define("notice12", "از دهکده");
define("notice13", "نیروها");
define("notice14", "نیروها");
define("notice15", "اطلاعات");
define("notice16", "منابع به‌دست‌آمده از");
define("notice17", "ارسال شده");
define("notice18", "از دهکده");
define("notice19", "منابع");
define("notice20", "در دهکده");
define("notice21", "جاسوسان");
define("notice22", "هیچ گزارشی وجود ندارد");
define("notice23", "انتخاب همه");
define("notice24", "حذف");
define("plus0", "خرید طلا");
define("plus1", "قیمت");
define("plus2", "تعداد");
define("plus3", "خرید");
define("plus4", "تعرفه");
define("plus5", "خرید");
define("plus6", "ویژه");
define("plus7", "قیمت طلا");
define("plus8", "قیمت");
define("plus9", "مقدار");
define("plus10", "خرید (PayPal)");
define("plus11", "تعرفه");
define("plus12", "خرید");
define("plus13", "خرید مقدار دلخواه طلا (UnitPay) (روسی)");
define("plus14", "مبلغ پرداخت");
define("plus15", "جمع کل");
define("plus16", "*در خرید بیش از ۳۰۰ روبل، قیمت هر واحد طلا ارزان‌تر از تعرفه‌های عادی است!");
define("plus17", "در صورت وجود هرگونه سؤال، با");
define("plus18", "مدیر سیستم");
define("plus19", "پس از خرید طلا، باید وارد بخش");
define("plus20", "بانک");
define("plus21", "شوید. در آنجا می‌توانید طلا را به هر حساب (یا حساب‌ها) در سرور در دسترس منتقل کنید، به صورت جزئی یا کامل.");
define("plus22", "روبل");
define("plus23", "بانک (نسخهٔ کوچک)");
define("plus24", "در اینجا طلای خریداری‌شده یا منتقل‌شده از دورهای قبلی نگهداری می‌شود (در صورتی که موجودی بیش از ۱۰۰ سکه بوده باشد).<br />می‌توانید آن را به <b>حساب فعلی خود</b> در محدودهٔ xTravian.net منتقل کنید.");
define("plus25", "کد انتقال طلای خود را وارد کنید.");
define("plus26", "(این کد به ایمیل شما ارسال شده است.)");
define("plus27", "ایمیل یافت نشد!");
define("plus28", "کد تأیید شد!");
define("plus29", "مقدار در دسترس برای انتقال:");
define("plus30", "واحد طلا");
define("plus31", "طلای قابل انتقال");
define("plus32", "نام بازیکن");
define("plus33", "کد تأیید نشد!");
define("plus34", "خطایی رخ داد.<br />دوباره تلاش کنید.");
define("plus35", "بازیکن");
define("plus36", "یافت شد");
define("plus37", "شناسهٔ بازیکن");
define("plus38", "منتقل خواهد شد");
define("plus39", "واحد طلا");
define("plus40", "بازیکن یافت نشد");
define("plus41", "بازگشت");
define("plus42", "خطایی رخ داد.<br />دوباره تلاش کنید.");
define("plus43", "انتقال طلا با موفقیت انجام شد!");
define("plus44", "خطایی رخ داد.<br />دوباره تلاش کنید.");
define("plus45", "ایمیل");
define("plus46", "نسخهٔ کامل");
define("plus47", "دوستان خود را دعوت کنید و طلا بگیرید!");
define("plus48", "لینک دعوت اختصاصی خود را برای دوستانتان ارسال کنید.");
define("plus49", "شرایط لازم برای دریافت پاداش:");
define("plus50", "۱. زمانی که جمعیت امپراتوری بازیکن دعوت‌شده بیشتر از");
define("plus51", "شود، می‌توانید دریافت کنید");
define("plus52", "واحد طلا با کلیک روی آیکون مربوطه.");
define("plus53", "۲. شما نمی‌توانید معاون (جانشین) بازیکن دعوت‌شده باشید.");
define("plus54", "بازیکنان دعوت‌شده");
define("plus55", "بازیکن");
define("plus56", "تاریخ ثبت‌نام");
define("plus57", "جمعیت");
define("plus58", "دهکده‌ها");
define("plus59", "دریافت");
define("plus60", "شما هنوز هیچ بازیکن جدیدی دعوت نکرده‌اید.");
define("plus61", "برترین دعوت‌کنندگان");
define("plus62", "رتبه");
define("plus63", "بازیکن");
define("plus64", "صرافی");
define("plus65", "مقدار طلایی یا نقره‌ای که می‌خواهید مبادله کنید وارد نمایید");
define("plus66", "نرخ تبدیل");
define("plus67", "۱ طلا = ۱۰۰ نقره<br>۲۰۰۰ نقره = ۱ طلا");
define("plus68", "مبادله");
define("plus69", "تراوینی");
define("plus74", "خرید طلا");
define("plus75", "ویژگی‌ها");
define("plus76", "کسب طلا");
define("plus77", "بانک");

define("other0", "شما مسدود شده‌اید. لطفاً به مدیر سیستم پیام ارسال کنید.");
define("other1", "xTravian.net");
define("other2", "پایان");
define("other3", "پایان می‌یابد در");
define("other4", "سطح");
define("other5", "محل ساخت بیرونی");
define("other6", "شگفتی جهان");
define("other7", "محل ساخت");
define("other8", "محل ساخت میدان تجمع");
define("other9", "محل ساخت‌وساز");
define("other10", "در VKontakte");
define("other11", "فیسبوک");
define("other12", "ماجراجویی");
define("other13", "ساعت محافظت.");
define("other14", "این حساب کاربری حذف خواهد شد در");
define("other15", "آرتیفکت‌ها");
define("other16", "شگفتی دهکده");
define("other17", "اسکین‌ها از طریق");
define("other18", "تغییر زبان به روسی");
define("other19", "تغییر زبان به انگلیسی");
define("other20", "تولید");
define("other21", "هیچ‌کدام");
define("other22", "کلیک کنید برای");
define("other23", "ساخت‌وساز با کلیک روی زمین");

// میدان تجمع
define("punktxuev0","منابع");
define("punktxuev1","زیرساخت");
define("punktxuev2","نظامی");
define("punktxuev3","تأیید");
define("punktxuev4","شروع ماجراجویی");
define("punktxuev5","نیروها");
define("punktxuev6","زمان رسیدن");
define("punktxuev7","قهرمان شما هنوز در این دهکده حضور ندارد.");
define("punktxuev8","قهرمان شما مرده است.");
define("punktxuev9","شما باید میدان تجمع بسازید.");
define("punktxuev10","بازگشت به خانه");
define("punktxuev11","بازگرداندن این نیروها");
define("punktxuev12","واحدها");
define("punktxuev13","زمان");
define("punktxuev14","نیروی کافی وجود ندارد!");

// فعال‌سازی
define("activate0","برای بازی باید حساب کاربری خود را فعال کنید.");
define("activate1","کد فعال‌سازی:");
define("activate2","فعال‌سازی و شروع بازی");
define("activate3","ایمیل یا نام کاربری را اشتباه وارد کرده‌اید؟");
define("activate4","در اینجا می‌توانید لغو ثبت‌نام کرده و دوباره ثبت‌نام کنید.");
define("activate5","ایمیل شما:");
define("activate6","نام کاربری شما:");
define("activate7","رمز عبور شما:");
define("activate8","از صحت اطلاعات واردشده اطمینان حاصل کنید.");
define("activate9","مطمئن شوید که حساب کاربری قبلاً فعال نشده باشد.");
define("activate10","ارسال");
define("activate11","یا");

// اتحاد
define("ally0","دعوت‌نامه‌ها");
define("ally1","هیچ دعوت‌نامه‌ای وجود ندارد");
define("ally2","دعوت برای");
define("ally3","برو");
define("ally4","جزئیات");
define("ally5","موقعیت");
define("ally6","اعضا");
define("ally7","خروج");
define("ally8","اخبار");
define("ally9","حملات");
define("ally10","تنظیمات");
define("ally11","اختصاص");
define("ally12","هیچ‌کدام");
define("ally13","");
define("ally14","");

// فهرست فارم
define("farmlist0","دهکده");
define("farmlist1","جزئیات");
define("farmlist2","");
define("farmlist3","فاصله");
define("farmlist4","نیروها");
define("farmlist5","آخرین غارت");
define("farmlist6","افزودن غارت");
define("farmlist7","شروع غارت");
define("farmlist8","آیا مطمئن هستید که می‌خواهید این لیست را حذف کنید؟");
define("farmlist9","ایجاد لیست جدید");
define("farmlist10","هیچ لیست غارتی وجود ندارد.");
define("farmlist11","نام:");
define("farmlist12","ایجاد");
define("farmlist13","این لیست متعلق به شما نیست!");
define("farmlist14","در این مختصات هیچ دهکده‌ای وجود ندارد.");
define("farmlist15","هیچ نیرویی انتخاب نشده است.");
define("farmlist16","مختصات صحیح را وارد کنید.");
define("farmlist17","افزودن اسلات");
define("farmlist18","نام فارم:");
define("farmlist19","انتخاب هدف:");
define("farmlist20","حذف");
define("farmlist21","بیابان");

// دهکده ۳ (مرور)
define("dorf0","نمای کلی");
define("dorf1","منابع");
define("dorf2","انبار");
define("dorf3","امتیاز فرهنگی");
define("dorf4","نیروها");
define("dorf5","دهکده");
define("dorf6","حملات");
define("dorf7","ساختمان");
define("dorf8","نیروها");
define("dorf9","تاجران");
define("dorf10","مجموع");
define("dorf11","امتیاز فرهنگی/روز");
define("dorf12","جشن‌ها");
define("dorf13","جایگاه‌ها");
define("dorf14","نیروهای خودی");
define("dorf15","");
define("dorf16","");
define("dorf17","");
define("dorf18","");
define("dorf19","");
define("dorf20","");
define("dorf21","");
define("dorf22","");
define("dorf23","");
define("dorf24","");
define("dorf25","");
define("dorf26","");
define("dorf27","");
define("dorf28","");
define("dorf29","");
define("dorf30","");

// کسب طلا
define("mkg0","دوستان خود را دعوت کنید و طلا دریافت کنید!");
define("mkg1","چگونه؟");
define("mkg2","برای دوست خود ارسال کنید");
define("mkg3","لینک ارجاع اختصاصی شما");
define("mkg4","شرایط دریافت پاداش:");
define("mkg5","۱. وقتی جمعیت امپراتوری بازیکن دعوت‌شده بیشتر از");
define("mkg6","شود، شما می‌توانید");
define("mkg7","واحد طلا با کلیک روی آیکون بردارید.");
define("mkg8","۲. شما نمی‌توانید جانشین (معاون) بازیکن دعوت‌شده باشید.");
define("mkg9","بازیکنان دعوت‌شده:");
define("mkg10","بازیکن");
define("mkg11","تاریخ ثبت‌نام");
define("mkg12","جمعیت");
define("mkg13","دهکده");
define("mkg14","دریافت");
define("mkg15","شما هنوز هیچ بازیکن جدیدی دعوت نکرده‌اید.");
// پیام‌ها
define("MSG0","موضوع");
define("MSG1","بازیکن");
define("MSG2","تاریخ ارسال");
define("MSG3","هیچ پیامی موجود نیست.");
define("MSG4","انتخاب همه");
define("MSG5","حذف");
define("MSG6","صندوق ورودی");
define("MSG7","نوشتن");
define("MSG8","ارسال‌شده‌ها");
define("MSG9","تاریخ ارسال");
define("MSG10","پاسخ");
define("MSG11","بازگشت");
define("MSG12","گیرنده:");
define("MSG13","ارسال");

// مخفیگاه (Cranny)
define ("TA", "سطح مخفیگاه");
define ("TA1", "مخفیگاه برای پنهان کردن بخشی از منابع شما هنگام حمله به دهکده استفاده می‌شود. این منابع قابل سرقت نیستند.");
define ("TA2", "مخفیگاه");
define ("TA3", "واحد");
define ("TA4", "مخفیگاه در سطح");
define ("TA6", "هزینه ساخت تا سطح");
define ("TA7","ارتقا به سطح");
define("newrpt","گزارش(های) جدید:");

// آرتیفکت‌ها
define("sokr0","مالک");
define("sokr1","دهکده");
define("sokr2","اتحاد");
define("sokr3","اثر");
define("sokr4","پاداش");
define("sokr5","وضعیت");
define("sokr6","نگهداری‌شده در:");
define("sokr7","خزانه");
define("sokr8","سطح");
define("sokr9","تصرف‌شده");
define("sokr10","آرتیفکت شما");
define("sokr11","نام");
define("sokr12","شما آرتیفکت ندارید.");
define("sokr13","نزدیک‌ترین آرتیفکت‌ها");
define("sokr14","بازیکن");
define("sokr15","فاصله");
define("sokr16","هیچ آرتیفکت نزدیکی وجود ندارد.");
define("sokr17","خزانه");
define("sokr18","آرتیفکت کوچک");
define("sokr19","هیچ آرتیفکتی وجود ندارد.");
define("sokr20","آرتیفکت‌های بزرگ");
define("sokr21","غیرفعال");
define("sokr22","فعال");

// میخانه (Oasis / Tavern)
define("TVRN0","اُئیسی اشغال‌شده توسط");
define("TVRN1","");
define("TVRN2","نوع");
define("TVRN3","وفاداری");
define("TVRN4","فتح‌شده");
define("TVRN5","مختصات");
define("TVRN6","منابع");
define("TVRN7","اُئیسی بعدی از سطح ۱۰ عمارت قهرمان");
define("TVRN8","اُئیسی بعدی از سطح ۱۵ عمارت قهرمان");
define("TVRN9","اُئیسی بعدی از سطح ۲۰ عمارت قهرمان");
define("TVRN10","سایر اُئیسی‌ها");
define("TVRN11","مالک");
define("TVRN12","چوب");
define("TVRN13","خاک رس");
define("TVRN14","آهن");
define("TVRN15","گندم");

// گزارش‌ها
define("rpts0","نیروها");
define("rpts1","تلفات");
define("rpts2","اسیرشده");
define("rpts3","اطلاعات");
define("rpts4","از دهکده");
define("rpts5","نیروی کمکی");
define("rpts6","موضوع");
define("rpts7","منابع ارسال می‌کند به");
define("rpts8","ارسال‌شده توسط");
define("rpts9","دفاع");
define("rpts10","در دهکده");
define("rpts11","حمله");
define("rpts12","پیشاهنگ‌ها");
define("rpts13","(جدید)");
define("rpts14","هیچ گزارشی وجود ندارد.");
define("rpts15","فرستنده");
define("ot4m0","همه");
define("ot4m1","حمله");
define("ot4m2","نیروی کمکی");
define("ot4m3","متفرقه");
define("ot4m4","تجارت");
define("XUYXUYXUY","گزارش‌ها");
define("REPORT_TODAY","امروز");
define("REPROT_YESTERDAY","دیروز");
define("len0","انبار");
define("len1","دهکده");
// بازار
define("MERCHANTS","تاجران");
define("IMSEARCHING","در جستجوی");
define("IMOFFERING","پیشنهاد می‌کنم");
define("OFFEREDONTHEMARKET","در بازار پیشنهاد شده");
define("market0","مسیرهای تجاری");
define("market1","پیشنهادها در بازار");
define("market2","پیشنهادشده");
define("market3","به من");
define("market4","درخواستی");
define("market5","از من");
define("market6","بازیکن");
define("market7","مدت زمان");
define("market8","اقدام");
define("market9","منابع کافی نیست");
define("market10","تاجر کافی نیست");
define("market11","پذیرش");
define("market12","هیچ پیشنهادی در بازار وجود ندارد.");
define("market13","ارسال تاجران");
define("market14","هر تاجر می‌تواند حمل کند");
define("market15","واحد منبع");
define("market16","هیچ مختصاتی انتخاب نشده است");
define("market17","نمی‌توانید به همان دهکده منابع ارسال کنید.");
define("market18","بازیکن مسدود شده است. نمی‌توانید برای او منابع ارسال کنید.");
define("market19","منابع انتخاب نشده‌اند.");
define("market20","مختصات یا نام دهکده را وارد کنید.");
define("market21","تعداد تاجران کافی نیست.");
define("market22","تاجران در مسیر");
define("market23","ورود در");
define("market24","منبع");
define("market25","تاجران خودی در راه:");
define("market26","تاجران در حال بازگشت");
define("market27","پیشنهاد دادن");
define("market28","جستجو کردن");
define("market29","حداکثر زمان حمل:");
define("market30","ساعت");
define("market31","فقط اتحاد خود");
define("market32","فروش");
define("market33","پیشنهادهای خودی");
define("market34","پیشنهاد");
define("market35","جستجو");
define("market36","اتحاد");
define("market37","ساعت");
define("market38","همه");
define("market39","معامله با NPC انجام شد.");
define("market40","هزینه");
define("market41","بازگشت به ساختمان");
define("market42","توزیع منابع (مرحله ۱ از ۲)");
define("market43","تجارت منابع (مرحله ۲ از ۲)");
define("market44","نمی‌توانید در دهکده شگفتی جهان از تجارت NPC استفاده کنید.");
define("market45","شروع");
define("market46","هیچ مسیر تجاری فعالی وجود ندارد.");
define("market47","مسیر تجاری به");
define("market48","ویرایش");
define("market49","ایجاد مسیر تجاری جدید");
define("market50","منابع");
define("market51","زمان شروع");
define("market52","تعداد ارسال‌ها");
define("market53","ویرایش مسیر تجاری");
define("market54","دهکده هدف");

// فرم ورود
define("anlm0","لطفاً نام کاربری خود را وارد کنید");
define("anlm1","لطفاً ایمیل خود را وارد کنید");
define("anlm2","لطفاً رمز عبور خود را وارد کنید");

// ارتقا
define("upgra0","هزینه:");
define("upgra1","کارگران در حال کار هستند.");
define("upgra2","کمبود غذا: ابتدا مزرعه گندم را ارتقا دهید!");
define("upgra3","ارتقای انبار.");
define("upgra4","ارتقای انبار غلات.");
define("upgra5","منابع کافی موجود در");
define("upgra6","ساخت ساختمان");
define("upgra7","(در صف)");
define("upgra8","معمار");
define("upgra9","(هزینه‌ها:");

// شگفتی جهان
define("ww0","شگفتی جهان (World Wonder) همان‌طور که از نامش پیداست ساختمانی بسیار عظیم است. این ساختمان برای برنده شدن در سرور ساخته می‌شود. هر سطح از شگفتی جهان به صدها هزار (حتی میلیون‌ها) منبع برای ساخت نیاز دارد.");
define("ww1","برای تغییر نام شگفتی جهان باید حداقل سطح 1 آن را داشته باشید.");
define("ww2","نام شگفتی جهان:");
define("ww3","پس از رسیدن به سطح 10 دیگر نمی‌توانید نام شگفتی جهان را تغییر دهید.");
define("ww4","نام تغییر یافت.");
define("ww5","به نقشه ساخت شگفتی جهان نیاز دارید.");
define("ww6","به نقشه‌های ساخت شگفتی جهان بیشتری نیاز دارید.");
define("ww7","برای ساخت تا سطح");
define("ww8","برای ساخت شگفتی جهان از سطح 50 به بالا باید 2 نقشه ساخت داشته باشید (یکی نزد شما و دیگری نزد یکی از اعضای اتحاد شما باشد).");
define("ww9","برای ساخت شگفتی جهان باید ابتدا یک نقشه ساخت در حساب شما باشد و برای سطح 50 به بالا نقشه دوم نزد یکی از اعضای اتحاد شما باشد!");

// ارتقای آهنگری
define("kuzupg0","کاملاً توسعه یافته");
define("kuzupg1","ارتقای آهنگری");
define("kuzupg2","تحقیق در حال انجام است");
define("destroyvil","دهکده قبلاً نابود شده است.");

// معاون (Sitter)
define("accsit0","ارسال غارت");
define("accsit1","ارسال نیروی کمکی به سایر بازیکنان");
define("accsit2","ارسال منابع به سایر بازیکنان");
define("accsit3","خرج کردن طلا");
define("accsit4","خواندن و نوشتن پیام‌ها");
define("accsit5","حذف پیام‌ها و گزارش‌ها");

// وضعیت آنلاین در اتحاد
define("oweronline0","اکنون آنلاین");
define("oweronline1","آفلاین");
define("oweronline2","۳ روز گذشته");
define("oweronline3","۷ روز گذشته");

// ترجمه‌های اضافی
define("heroh0","مصرف");
define("heroh1","آیا واقعاً می‌خواهید این آیتم را بپوشید؟");
define("heroh2","تعداد فعلی امتیاز فرهنگی");
define("heroh3","افزودن امتیاز فرهنگی:");
define("heroh4","پس از استفاده خواهد شد:");
define("sendmsg","ارسال پیام");

// مأموریت‌های روزانه (EVERYDAY QUEST)
define("questday0","ماموریت امروز کامل شد");
define("questday1","ماموریت هنوز باز است");
define("questday2","ماموریت‌های روزانه");
define("questday3","امتیاز");
define("questday4","با جمع‌آوری 25 امتیاز یکی از پاداش‌های زیر را دریافت خواهید کرد:");
define("questday5","۵ ماجراجویی");
define("questday6","+۵۰۰۰ امتیاز فرهنگی");
if(!defined("HOWRES")){define("HOWRES",100000);} // تعریف متغیر برای مقدار منابع تصادفی
define("questday7",HOWRES." واحد از یک نوع منبع تصادفی");
define("questday8","با جمع‌آوری 50 امتیاز یکی از پاداش‌های زیر را دریافت خواهید کرد:");
define("questday9","+۱ روز حساب PLUS");
define("questday10","+۱ روز با ۲۵٪ افزایش تولید چوب");
define("questday11","+۱ روز با ۲۵٪ افزایش تولید خشت");
define("questday12","+۱ روز با ۲۵٪ افزایش تولید آهن");
define("questday13","+۱ روز با ۲۵٪ افزایش تولید گندم");
define("questday14","با جمع‌آوری 75 امتیاز یکی از پاداش‌های زیر را دریافت خواهید کرد:");
define("questday15","+۲۰ ماجراجویی");
define("questday16","+۲ سطل");
define("questday17","+۱۰۰۰ نقره");
define("questday18","با جمع‌آوری 100 امتیاز یکی از پاداش‌های زیر را دریافت خواهید کرد:");
define("questday19","+۵۰ طلا");
define("questday20","+۴۰۰۰ نقره");
define("questday21","+۵۰ ماجراجویی");
define("questday22","این پاداش‌های رایگان را هر روز دریافت کنید!");
define("questday23","(بازنشانی بعدی در ساعت ۱۸:۰۰ انجام می‌شود. قبل از آن پاداشتان را جمع‌آوری کنید!)");
define("questday24","تکمیل یک ماجراجویی");
define("questday25","دریافت مدال");
define("questday26","دعوت یک بازیکن");
define("questday27","ساخت یا تصرف دهکده جدید");
define("questday28","کسب یا خرج کردن طلا");
define("questday29","تصرف ۱ واحه");
define("questday30","بازدید از گروه ما در فیسبوک (برای کلیک اینجا)");
define("questday31","ارتقای یکی از واحدها به سطح نهایی در آهنگری");
define("questday32","تبریک! شما تعداد لازم امتیازات را برای دریافت پاداش جمع‌آوری کردید!");
define("questday33","رنگ‌بندی متن");
define("questday34","امتیاز");
define("questday35","می‌توانید جایزه جمع‌آوری شده را دریافت کنید");
define("questday36","امتیاز امروز.");
define("questday37","پاداش به‌صورت تصادفی از این فهرست انتخاب می‌شود:");
define("questday38","شما امروز جمع‌آوری کرده‌اید");
define("questday39","امتیاز و به خاطر آن پاداش زیر را دریافت می‌کنید:");
define("questday40","پاداش امروز شما:");

define("REP_С1","تمام نیروها <b>آزاد</b> شدند.");
define("REP_С2","اقامتگاه / قصر");
define("REP_С3","ظرفیت مخفیگاه");
define("REP_С4","دیوار");
define("REP_С5","قهرمان شما 0 امتیاز تجربه دریافت کرد");
define("REP_С6","قهرمان شما دریافت کرد");
define("REP_С7","قهرمان شما وفاداری را کاهش داد از");
define("REP_С8","به");
define("REP_С9","و دریافت کرد");
define("REP_С10","قهرمان شما واحه را تصرف کرد و دریافت کرد");
define("REP_С11","");
define("REP_С12","دهکده قابل تصرف نیست");
define("REP_С13","امتیاز فرهنگی کافی نیست");
define("REP_С14","ساکنان");
define("REP_С15","دهکده تصمیم گرفتند به امپراتوری شما بپیوندند");
define("REP_С16","");
define("REP_С17","اقامتگاه یا قصر نابود نشده است");
define("REP_С18","دهکده قبلاً نابود شده است");
define("REP_С19","نابود شد از سطح");
define("REP_С20","");
define("REP_С21","سطح");
define("REP_С22","");
define("REP_С23","دیوار آسیب ندید");
define("REP_С24","دیوار نابود شد");
define("REP_С25","اینجا دیواری وجود ندارد");
define("REP_С26","نیروهای کمکی در اینجا مورد حمله قرار گرفتند در");
define("REP_С27","حمله");
define("REP_С28","نیروی کمکی دریافت شد از");
define("REP_С29","نیروی کمکی ارسال شد به");
define("REP_С30","واحه تصرف شد");
define("REP_С31","چیز ارزشمندی پیدا نشد");
define("REP_С32","");
define("REP_С33","قهرمان شما یک آرتیفکت به دست آورد و دریافت کرد");
define("REP_С34","قهرمان شما یک آرتیفکت غیرفعال به دست آورد و دریافت کرد");
define("REP_С35","قهرمان شما آرتیفکتی به دست نیاورد و دریافت کرد");
define("REP_С36","شما به حداکثر تعداد آرتیفکت رسیده‌اید. قهرمان دریافت کرد");
define("REP_С37","جاسوسان");
define("REP_С38","منابع دریافت شد از");
define("REP_С39","منابع ارسال شد به");
define("REP_С40","نابود شد");
define("REP_С41","آسیب ندید");
define("REP_С42","وفاداری کاهش یافت از");
define("REP_С43","حیوانات به دام افتادند");
define("REP_С44","");
define("REP_С45","واحه");
define("REP_С46","قهرمان شما از این ماجراجویی جان سالم به در نبرد");
define("REP_С47","");
define("REP_С48","کاوش می‌کند");

define("savebankgold","موجودی طلای باقی‌مانده از دور قبلی را می‌توانید از طریق این بخش منتقل کنید");
define("allgold","تمام طلا");
define("adminhelp","در صورت داشتن سوال لطفاً با مدیریت تماس بگیرید");
define("endround","طلا بلافاصله پس از پرداخت به حساب شما اضافه می‌شود");
define("endround1","در پایان راند / حذف حساب، طلا بر اساس فرمول زیر به بانک منتقل می‌شود:");
// ماموریت‌ها
define("quest1","ماجراجویی بعدی");
define("quest2","در طول آموزش، شما از یک ماجراجویی مقداری تجربه کسب کرده‌اید. به محض اینکه قهرمانتان به دهکده بازگشت، ماجراجویی بعدی را آغاز کنید. غنیمت و تجربه به شما کمک می‌کند سریع‌تر پیشرفت کنید.");
define("quest3","رفتن به ماجراجویی دوم");
define("quest4","۳۰ تجربه قهرمان");
define("quest5","عالی، قهرمان شما در راه است. نکته: هرچه قدرت مبارزه قهرمان بیشتر باشد، آسیب کمتری در ماجراجویی‌ها می‌بیند.");
define("quest6","ساخت مخفیگاه");
define("quest7","بسیاری از بازیکنان با غارت منابع دیگران زندگی می‌کنند. در ابتدای بازی شما تحت محافظت مبتدی هستید و در امان می‌باشید. با ساخت مخفیگاه می‌توانید بخشی از منابع خود را از غارت حفظ کنید.");
define("quest8","در دهکده خود یک مخفیگاه بسازید");
define("quest9","عالی، حالا غارتگران به راحتی نمی‌توانند منابع شما را بدزدند. برای دیدن زمان باقی‌مانده محافظت مبتدی به بخش اطلاعات نگاه کنید.");
define("quest10","ساخت سربازخانه");
define("quest11","سربازخانه اولین ساختمانی است که به شما اجازه آموزش نیروها را می‌دهد. حتی اگر بازیکنی صلح‌طلب باشید، برای دفاع از خود و متحدانتان به نیرو نیاز خواهید داشت.");
define("quest12","ساخت سربازخانه");
define("quest13","سربازخانه شما ساخته شد! قدمی خوب به سوی سلطه بر جهان!");
define("quest14","سطح قهرمان");
define("quest15","قهرمان شما با هر سطح جدید قوی‌تر می‌شود. به بخش ویژگی‌های قهرمان بروید و امتیازهای قابل استفاده را بین توانایی‌ها تقسیم کنید.");
define("quest16","پس از رسیدن قهرمان به سطح جدید، امتیازهای موجود را توزیع کنید.");
define("quest17","می‌توانید توزیع امتیازها را در هر زمان تغییر دهید. برای این کار به کتاب دانایی نیاز دارید که در ماجراجویی‌ها پیدا می‌شود.");
define("quest18","آموزش نیرو");
define("quest19","اکنون زمان آموزش اولین نیروهای شماست. در سربازخانه می‌توانید یک نوع نیروی پیاده‌نظام را آموزش دهید.");
define("quest20","آموزش ".round(250*xQUEST)." نیرو در سربازخانه");
define("quest21","پایه‌های یک ارتش باشکوه گذاشته شد! همیشه به یاد داشته باشید حتی زمانی که آنلاین نیستید نیز ممکن است مورد حمله قرار بگیرید.");
define("quest22","دیوار شهر");
define("quest23","اکنون باید مقداری دفاع نیز بسازید. استحکامات دفاع پایه دهکده را افزایش داده و قدرت دفاعی نیروهای مدافع را نیز بیشتر می‌کند.");
define("quest24","در اطراف دهکده خود یک استحکامات بسازید.");
define("quest25","عالی، اکنون مدافعان دهکده شما بهتر محافظت می‌شوند.");
define("quest26","حمله به واحه");
define("quest27","در نقشه به دنبال یک واحه آزاد نزدیک بگردید و آن را غارت کنید. اگر حیواناتی از آن دفاع می‌کنند، قهرمان خود را با قفس‌ها بفرستید تا آن‌ها را اسیر کند.");
define("quest28","یک واحه آزاد روی نقشه باز کرده و به آن حمله کنید.");
define("quest29","۲ نیروی پایه");
define("quest30","تبریک، اولین حمله شما در راه است! هنوز برای مدت کوتاهی می‌توانید آن را از میدان تجمع لغو کنید.");
define("quest31","۱۰ ماجراجویی");
define("quest32","به فرستادن قهرمان خود به ماجراجویی ادامه دهید. پس از اتمام ۱۰ ماجراجویی می‌توانید در حراجی شرکت کرده و با دیگر بازیکنان آیتم معامله کنید.");
define("quest33","اتمام ۱۰ ماجراجویی");
define("quest34","۵۰۰ نقره");
define("quest35","تبریک، اکنون می‌توانید از خانه حراج استفاده کنید. این مقدار نقره را بگیرید تا بتوانید فوراً معامله را شروع کنید.");
define("quest36","حراجی‌ها");
define("quest37","به خانه حراج بروید و ببینید چه آیتم‌هایی در حال حاضر ارائه شده‌اند. شاید بخواهید برخی از غنیمت‌های ماجراجویی خود را نیز به نقره تبدیل کنید.");
define("quest38","یک پیشنهاد ثبت کنید یا در یک حراجی پیشنهاد بدهید.");
define("quest39","عالی، حالا می‌دانید چگونه تجهیزات و آیتم‌های مصرفی را با سایر بازیکنان معامله کنید.");
define("quest40","ارتقای سربازخانه");
define("quest41","اکنون سربازخانه خود را ارتقا دهید. با این کار شرایط لازم برای باز شدن ساختمان‌های بیشتر فراهم می‌شود.");
define("quest42","سربازخانه را به سطح ۳ ارتقا دهید.");
define("quest43","خوب است. اکنون نیروهای شما سریع‌تر آموزش می‌بینند و می‌توانید آکادمی بسازید.");
define("quest44","ساخت آکادمی");
define("quest45","در آکادمی می‌توانید واحدهای جدید و قوی‌تر برای دهکده خود تحقیق کنید. برخی واحدها بسیار گران هستند و برای تحقیق به شرایط بالایی نیاز دارند.");
define("quest46","اکنون یک آکادمی بسازید.");
define("quest47","آفرین. به زودی درباره سربازان قبیله خود بیشتر خواهید دانست.");
define("quest48","تحقیق واحد");
define("quest49","اکنون گزینه‌های تحقیق را بررسی کنید. واحدهای پیاده، سواره‌نظام و همچنین سلاح‌های محاصره وجود دارند. واحدها معمولاً در حمله یا دفاع تخصص دارند.");
define("quest50","یک نوع نیروی اضافی را تحقیق کنید.");
define("quest51","البته تحقیق به تنهایی کافی نیست؛ واحدهای شما باید آموزش هم ببینند.");
define("quest52","ساخت آهنگری");
define("quest53","آهنگری به شما اجازه می‌دهد سربازان خود را بهتر مسلح و تجهیز کنید. همچنین برای ساخت برخی ساختمان‌های نظامی دیگر به آهنگری نیاز دارید.");
define("quest54","یک آهنگری بسازید.");
define("quest55","عالی. اکنون می‌توانید سربازان خود را بهتر تجهیز کنید.");
define("quest56","بهبود واحدها");
define("quest57","بهبود تجهیزات سربازانتان ارزان نیست. هرچه تعداد نیروهای شما بیشتر باشد، ارتقا سودآورتری خواهد بود. این بار سود شما بیش از هزینه‌ها خواهد بود.");
define("quest58","یکی از بهبودهای واحدها را در آهنگری تحقیق کنید.");
define("quest59","عالی، اکنون توانایی حمله و دفاع نیروهای شما افزایش یافته است.");
define("quest60","معدن آهن");
define("quest61","دستور ساخت یک معدن آهن بدهید! هدف اصلی شما هنوز تولید بالای منابع است تا بتوانید سریع‌تر رشد کنید.");
define("quest62","ساخت یک معدن آهن را آغاز کنید");
define("quest63","یک روز پاداش +۲۵٪ به تولید همه منابع");
define("quest64","افزایش تولید آهن در دهکده شما. یک پاداش تولید باعث می‌شود بتوانید تولید هر منبع خاصی را حتی بیشتر افزایش دهید.");
define("quest65","منابع بیشتر");
define("quest66","هر یک از منابع چوب، سفال، آهن و گندم را به سطح ۱ ارتقا دهید. برای اتمام این مأموریت باید حداقل دو مزرعه از هر نوع بالاتر از سطح ۰ داشته باشید. تا زمانی که Travian PLUS فعال باشد، همیشه می‌توانید دستور ساخت یک ساختمان دیگر را هم‌زمان صادر کنید.");
define("quest67","یکی دیگر از مزرعه‌های هر منبع را به سطح ۱ ارتقا دهید.");
define("quest68","تبریک! دهکده شما در حال رشد و شکوفایی است...");
define("quest69","انبار غله");
define("quest70","برای ذخیره بیشتر گندم، به یک انبار غله نیاز دارید. سقف فعلی ذخیره شما در نوار منابع نمایش داده می‌شود.");
define("quest71","انبار غله بسازید");
define("quest72","آفرین! اکنون با انبار غله می‌توانید گندم بیشتری ذخیره کنید.");
define("quest73","همه به سطح ۱");
define("quest74","در آغاز بازی، بهتر است بر منابع تمرکز کنید. لطفاً همه مزارع منابع خود را به سطح ۱ ارتقا دهید.");
define("quest75","تمام مزارع منابع را به سطح ۱ ارتقا دهید");
define("quest76","تولید منابع شما به خوبی در حال پیشرفت است. به زودی می‌توانیم ساخت ساختمان‌های بیشتری را در دهکده آغاز کنیم.");
define("quest77","به سطح ۲!");
define("quest78","به افزایش تولید ادامه دهید. یکی از هرکدام از مزارع چوب، سفال، آهن و گندم را به سطح ۲ ارتقا دهید!");
define("quest79","هر منبع را به سطح ۲ ارتقا دهید");
define("quest80","آفرین! اگر به اطلاعات بیشتری درباره تولید خود نیاز دارید، روی انبارها کلیک کنید.");
define("quest81","بازار");
define("quest82","اگر در یکی از منابع کمبود دارید، می‌توانید در بازار آن را با سایر منابع و بازیکنان معامله کنید. برای ساخت یک بازار کوچک، ابتدا باید ساختمان اصلی خود را بزرگ‌تر کنید.");
define("quest83","بازار بسازید");
define("quest84","بازار شما آماده است و می‌توانید با بازیکنان دیگر معامله کنید. مراقب باشید فریب پیشنهادهای بسیار بد را نخورید!");
define("quest85","تجارت");
define("quest86","پیشنهادهای موجود در بازار را می‌توانید با کلیک روی «خرید» ببینید. نرخ مبادله و فاصله را بررسی کنید. اگر پیشنهاد مناسب پیدا نکردید، روی «پیشنهاد» کلیک کنید تا خودتان یک پیشنهاد بسازید.");
define("quest87","یک پیشنهاد در بازار ثبت کنید یا یکی را بپذیرید");
define("quest88","عالی، اولین معامله خود را آغاز کردید.");
define("quest89","همه به سطح ۲");
define("quest90","قبل از ساخت ساختمان‌های گران‌تر، باید تولید منابع را بیشتر افزایش دهیم. تمام مزارع منابع را به سطح ۲ ارتقا دهید.");
define("quest91","تمام مزارع منابع را به سطح ۲ ارتقا دهید");
define("quest92","تبریک! تولید منابع شما به خوبی در حال رشد است.");
define("quest93","انبار سطح ۳");
define("quest94","زمان آن رسیده است که انبار خود را با تولید افزایش‌یافته هماهنگ کنید. غنیمت‌های غیرمنتظره قهرمان شما نیز ممکن است باعث پر شدن بیش از ظرفیت شوند.");
define("quest95","انبار خود را به سطح ۳ ارتقا دهید");
define("quest96","خیلی خوب، اکنون هیچ منبع ارزشمندی هدر نمی‌رود.");
define("quest97","انبار غله سطح ۳");
define("quest98","هرچه تولید شما بالاتر باشد، ذخیره سریع‌تر پر می‌شود. انبار غله نیز باید ارتقا یابد.");
define("quest99","انبار غله را به سطح ۳ ارتقا دهید");
define("quest100","اکنون دوباره در انبار غله فضا وجود دارد تا تولید حتی در زمان غیبت شما ادامه یابد.");
define("quest101","آسیاب گندم");
define("quest102","آسیاب گندم تولید تمام مزارع گندم شما را افزایش می‌دهد. برای اینکه ارزش ساخت آن زیاد باشد، باید تولید پایه کافی داشته باشید.");
define("quest103","ساخت آسیاب گندم سطح ۱");
define("quest104","آسیاب گندم سطح ۲");
define("quest105","اکنون گندم آزاد زیادی برای ادامه ساخت‌وساز دارید. ساختمان‌هایی نیز وجود دارند که تولید منابع دیگر را افزایش می‌دهند.");
define("quest106","همه به سطح ۵");
define("quest107","برای اینکه منتظر هزینه سنگین برای ساخت و تأسیس دهکده دوم نباشید، باید تولید بسیار بیشتری داشته باشید. تمام مزارع منابع را به سطح ۵ ارتقا دهید.");
define("quest108","تمام مزارع منابع را به سطح ۵ ارتقا دهید");
define("quest109","یک روز پاداش +۲۵٪ به تولید همه منابع.");
define("quest110","آفرین، اکنون تولید قابل قبولی دارید.");
define("quest111","مشاهده آمار");
define("quest112","در دنیای تراوین شما با هزاران بازیکن دیگر رقابت می‌کنید. برای آگاهی از جایگاه خود در بازی به بخش آمار مراجعه کنید.");
define("quest113","آمار را باز کرده و خود را با سایر بازیکنان مقایسه کنید.");
define("quest114","علاوه بر رتبه، اطلاعات مفید دیگری نیز وجود دارد. زبانه «10 برتر» قوی‌ترین مهاجمان و موفق‌ترین غارتگران را نمایش می‌دهد.");
define("quest115","تغییر نام دهکده");
define("quest116","نامی که خودتان برای دهکده انتخاب می‌کنید، نشان می‌دهد که امپراتوری شما به صورت فعال مدیریت می‌شود.");
define("quest117","نام دهکده را روی تابلو دهکده تغییر دهید.");
define("quest118","۳۳ امتیاز فرهنگی");
define("quest119","آفرین، اکنون اولین گام را برای ثبت نام خود در دنیای تراوین برداشته‌اید.");
define("quest120","ساختمان اصلی سطح ۳");
define("quest121","ساختمان اصلی بزرگ‌تر ساختمان‌های جدیدی را آزاد می‌کند و سرعت ساخت و سازتان را افزایش می‌دهد. با این حال، زمانی ارزش دارد که منابع کافی تولید کنید.");
define("quest122","ساختمان اصلی خود را به سطح ۳ ارتقا دهید.");
define("quest123","عالی، اکنون ساختمان اصلی بزرگ‌تر به شما اجازه ساخت برخی ساختمان‌های جدید را می‌دهد.");
define("quest124","ساخت سفارت");
define("quest125","جهان تراوین مکانی خطرناک است و باید بتوانید از خود دفاع کنید. بهترین دفاع اضافی را متحدان قوی فراهم می‌کنند. برای پیوستن به اتحاد، یک سفارت بسازید.");
define("quest126","یک سفارت بسازید.");
define("quest127","عالی! اکنون می‌توانید دعوت‌نامه‌های اتحاد را بپذیرید. دعوت‌نامه‌ها درون سفارت نمایش داده می‌شوند.");
define("quest128","باز کردن نقشه");
define("quest129","نقشه، جهان تراوین را به شما نشان می‌دهد. همسایه‌هایتان را بررسی کنید تا متحدان و تهدیدها را بشناسید.");
define("quest130","نقشه را از منو باز کنید.");
define("quest131","آیا بازیکنان یا اتحادهای قدرتمند نزدیک شما هستند؟ نقشه همچنین به شما کمک می‌کند واحه‌ها و مکان‌های مناسب برای تأسیس دهکده‌های جدید را پیدا کنید.");
define("quest132","خواندن پیام");
define("quest133","شما به‌تازگی پیامی با چند راهنمای مفید دریافت کرده‌اید. پیام‌های خوانده‌نشده با عددی بالای دکمه مشخص می‌شوند. اکنون آن را بررسی کنید.");
define("quest134","نمای کلی پیام‌ها را باز کرده و پیام استاد مأموریت را بخوانید!");
define("quest135","از پیام‌ها برای ارتباط با بازیکنان دیگر استفاده کنید. همیشه بهتر است آرام و مودب باشید، حتی زمانی که در حال جنگ هستید.");
define("quest136","طلای جایزه");
define("quest137","در طول آموزش، شما از طلا برای سرعت دادن به ساخت‌وساز استفاده کرده‌اید. در فروشگاه طلا می‌توانید ببینید که از طلا برای چه چیزهای دیگری می‌توان استفاده کرد.");
define("quest138","نگاهی به مزایایی که می‌توانید با طلا بخرید بیندازید.");
define("quest139","در اینجا دوباره مقداری طلای رایگان دریافت می‌کنید تا بتوانید از برخی مزایای طلا استفاده کنید.");
define("quest140","اتحاد");
define("quest141","به دنبال متحدان بگردید و به یک اتحاد بپیوندید. اگر هنوز آشنایی ندارید، اتحادهای بازیکنان نزدیک خود را بررسی کنید یا در انجمن به دنبال اتحاد بگردید.");
define("quest142","به یک اتحاد بپیوندید.");
define("quest143","ما شروع فوق‌العاده‌ای داشته‌ایم. هرچه هر بازیکن قوی‌تر و فعال‌تر باشد، تیم شما نیز قوی‌تر خواهد بود. آیا یاد گرفته‌اید چگونه حملات را به یکدیگر گزارش دهید و درخواست کمک کنید؟");
define("quest144","ساختمان اصلی سطح ۵");
define("quest145","زمان آن رسیده که ساختمان اصلی را ارتقا دهید تا بتوانید ساختمان‌های جدید بسازید. لطفاً هم‌زمان به تولید منابع خود نیز توجه کنید.");
define("quest146","ساختمان اصلی خود را به سطح ۵ ارتقا دهید.");
define("quest147","عالی، اکنون می‌توانید اقامتگاه بسازید. سرعت کارگران شما نیز افزایش یافته است.");
define("quest148","مرکز حکومت");
define("quest149","اکنون برای تأسیس دهکده جدید، یک مرکز حکومت بسازید. اگر مطمئن نیستید که این دهکده پایتخت شما باقی خواهد ماند یا نه، بهتر است اقامتگاه را انتخاب کنید.");
define("quest150","یک اقامتگاه یا قصر بسازید.");
define("quest151","این ساختمان برای تأسیس دهکده جدید یا تصرف دهکده دیگر ضروری است. سطح آن تعداد گسترش‌های ممکن را محدود می‌کند.");
define("quest152","امتیاز فرهنگی");
define("quest153","برای اداره دهکده‌های بیشتر در امپراتوری خود به امتیاز فرهنگی نیاز دارید. در نمای کلی اقامتگاه یا قصر می‌توانید ببینید چقدر فاصله دارید و چه مدت طول می‌کشد.");
define("quest154","زبانه امتیاز فرهنگی را در اقامتگاه یا قصر خود باز کنید.");
define("quest155","در لیست دهکده‌ها نیز می‌توانید وضعیت فعلی دهکده‌های جدید و مقدار امتیاز فرهنگی موردنیاز را ببینید. برای یادگیری روش‌های افزایش سریع امتیاز فرهنگی به بخش «پاسخ‌ها» مراجعه کنید.");
define("quest156","انبار سطح ۷");
define("quest157","برای آماده شدن جهت تأسیس دهکده جدید، انبار خود را ارتقا دهید. ظرفیت فعلی ذخیره شما به‌زودی برای ساختمان‌ها و مهاجران موردنیاز کافی نخواهد بود.");
define("quest158","انبار خود را به سطح ۷ ارتقا دهید.");
define("quest159","عالی، ظرفیت ذخیره شما اکنون برای مدتی کافی است. به یاد داشته باشید از منابع ارزشمند خود دفاع کرده یا آن‌ها را مخفی کنید.");
define("quest160","اقامتگاه یا قصر سطح ۱۰");
define("quest161","مهاجران را می‌توان در قصر یا اقامتگاه آموزش داد. در زبانه «آموزش» سطح ساختمان موردنیاز نمایش داده می‌شود.");
define("quest162","اقامتگاه یا قصر خود را به سطح ۱۰ ارتقا دهید.");
define("quest163","۱۶۷ امتیاز فرهنگی");
define("quest164","از هر دهکده فقط می‌توانید ۲ تا ۳ دهکده جدید کنترل کنید. اکنون برای دهکده جدید فقط ۳ مهاجر و مقدار زیادی امتیاز فرهنگی نیاز دارید.");
define("quest165","آموزش سه مهاجر");
define("quest166","مهاجران هنگام تأسیس دهکده جدید همیشه به صورت گروهی سفر می‌کنند. تا زمانی که آماده حرکت شوند، از آن‌ها در برابر حملات محافظت کنید.");
define("quest167","سه مهاجر آموزش دهید.");
define("quest168","خوب است. مهاجران همیشه مقداری منابع برای دهکده جدید با خود می‌برند تا بتوانند بلافاصله ساخت آن را آغاز کنند.");
define("quest169","تأسیس دهکده جدید");
define("quest170","در نقشه به دنبال مکان مناسبی برای اسکان بگردید. آیا می‌خواهید نزدیک دهکده فعلی باشد، تولید یک منبع خاص بیشتر باشد یا نزدیک واحه‌های زیاد قرار داشته باشد؟");
define("quest171","با استفاده از مهاجران خود دهکده دوم را تأسیس کنید.");
define("quest172","آفرین. اکنون ۲ روز دیگر از Travian Plus به شما می‌دهم — این برای شما بسیار مفید خواهد بود.");
define("quest173","ماموریت‌های روزانه");
define("quest174","جوایز روزانه");
define("quest175","برای مشاهده جزئیات کلیک کنید");

//register mail
define("register1","به");
define("register2","سلام");
define("register3","از ثبت‌نام شما متشکریم.");
define("register4","نام کاربری");
define("register5","رمز عبور");
define("register6","کد فعال‌سازی");
define("register7","برای فعال‌سازی حساب خود روی لینک زیر کلیک کنید:");
define("register8","با احترام،");
define("register9","تیم TravianT4");
define("register10","رمز عبور جدید");
define("register11","شما درخواست یک رمز عبور جدید برای Travian داده‌اید.");
define("register12","برای فعال‌سازی رمز عبور جدید خود روی لینک زیر کلیک کنید. رمز عبور قبلی شما نامعتبر خواهد شد:");
define("register13","اگر می‌خواهید رمز عبور خود را تغییر دهید، به پروفایل خود در بازی بروید؛ در آنجا می‌توانید آن را تغییر دهید.");
define("register14","اگر شما درخواست رمز عبور جدید نداده‌اید، لطفاً این ایمیل را نادیده بگیرید.");

define("new_village","دهکده جدید");
define("new_village2","`s دهکده");


$lang_winner['1'] = 'بازیکنان گرامی '.SERVER_NAME;
$lang_winner['2'] = 'هر چیز خوبی روزی پایان می‌یابد، و این دوران نیز چنین است. گفته می‌شود سلیمان حلقه‌ای داشت که بر آن پیامی حک شده بود؛ پیامی که می‌توانست شادی و غم دنیا را از بین ببرد — آن پیام ترجمه تقریبی "این نیز بگذرد" بود. اکنون با شادی و اندوه فراوان به همه بازیکنان '.SERVER_NAME.' اعلام می‌کنیم که این دوران نیز به پایان رسیده است! امیدواریم از زمانی که با ما بودید به اندازه‌ای که ما از حضور شما لذت بردیم، شما نیز لذت برده باشید. از اینکه تا پایان همراه ما بودید سپاسگزاریم!';
$lang_winner['3'] = 'نتایج: روز مدت‌ها بود که به شب رسیده بود، اما کارگران دهکده';
$lang_winner['4'] = 'در شب‌های سرد زمستان بی‌وقفه کار می‌کردند، همواره نگران ارتش‌های بی‌شماری که در راه نابودی تلاششان بودند، آگاه از اینکه با زمان و بزرگ‌ترین تهدیدی که قبایل آزاد تا آن روز با آن روبه‌رو شده‌اند رقابت می‌کنند. سرانجام تلاش بی‌وقفه آنان نتیجه داد؛ زمانی که کارگری گمنام سنگ پایانی را نهاد بر بنایی که برای همیشه به عنوان بزرگ‌ترین و باشکوه‌ترین اثر تاریخ از زمان سقوط ناتارها شناخته خواهد شد.';
$lang_winner['5'] = 'به همراه اتحاد';
$lang_winner['6'] = 'اولین گروهی بود که شگفتی جهان را به پایان رساند، با صرف میلیون‌ها منبع و حفاظت از آن توسط صدها هزار مدافع شجاع. بنابراین';
$lang_winner['7'] = 'کسی است که عنوان "برنده این دوران" را دریافت می‌کند!';
$lang_winner['8'] = 'فرمانروای بزرگ‌ترین امپراتوری شخصی بود، و پس از او به ترتیب';
$lang_winner['9'] = 'و';
$lang_winner['10'] = 'بیش از هر کس دیگر دشمنان را نابود کرد و قدرتمندترین و ترسناک‌ترین فرمانده بود.';
$lang_winner['11'] = 'باشکوه‌ترین مدافع بود، دشمنان را در آستانه دروازه‌های دهکده‌ها از پا درآورد و زمین‌های اطراف آن دهکده‌ها را با خونشان رنگین ساخت.';
$lang_winner['12'] = 'با احترام';
$lang_winner['13'] = 'تیم شما در '.SERVER_NAME;
$lang_winner['14'] = 'ادامه';
$lang_winner['desc1'] = 'تعداد کل دهکده‌ها';
$lang_winner['desc2'] = 'جمعیت کل';
$lang_winner['desc3'] = 'امتیاز حمله';
$lang_winner['desc4'] = 'امتیاز دفاع';

// Plus & Gold Club section
define("PL_01", "باشگاه طلایی");
define("PL_02", "امکانات فوق‌العاده برای هر تجربه بازی!");
define("PL_03", "به تاجران اجازه دهید تا در منطقه‌ای منابع را به‌صورت خودکار منتقل کنند، واحه‌های تولید گندم را روی نقشه پیدا کنید، پیام‌ها را ذخیره کرده و تصمیم بگیرید در کدام نبردها شرکت کنید. از لیست مزارع برای زمان‌بندی حملات استفاده کنید... از حملات خود با فرار از دهکده پایتخت در هنگام نبرد محافظت کنید. همچنین می‌توانید حملات دشمن را مشاهده کنید!");
define("PL_04", "تراوین پلاس");
define("PL_05", "بررسی‌ها و قابلیت‌های بهتر!");
define("PL_06", "به تاجران اجازه دهید تا در منطقه منابع را به‌صورت خودکار منتقل کنند، واحه‌های تولید گندم را در نقشه بیابید، پیام‌ها را ذخیره کرده و تصمیم بگیرید در کدام جنگ‌ها شرکت کنید. از لیست مزارع برای زمان‌بندی حملات استفاده کنید... در زمان حمله از پایتخت خود عقب‌نشینی کنید تا نیروهای شما حفظ شوند. همچنین امکان دیدن حمله دشمن وجود دارد!");
define("PL_07", "+۲۵٪ چوب");
define("PL_08", "+۲۵٪ سفال");
define("PL_09", "+۲۵٪ آهن");
define("PL_10", "+۲۵٪ گندم");
define("PL_11", "افزایش ۲۵٪ در تولید");
define("PL_12", "افزایش ۲۵٪ در کل تولید");

define("PL_13", "لطفاً ویژگی‌ای را که می‌خواهید استفاده کنید انتخاب نمایید:");
define("PL_14", "در حال انجام");
define("PL_15", "");
define("PL_16", "نمایش کلی");
define("PL_17", "و موارد دیگر.");
define("PL_18", "انجام دهید.");
define("PL_19", "بعدی");

// productionBoostPopup
define("BD_LEVEL", "سطح");
define("MAXLEVEL", "این ساختمان به حداکثر سطح رسیده است");
define("TOP10", "۱۰ برتر");

$lang['buildings']['texts'] = array (
	'TRA0' => 'لیست آموزش',
	'TRA1' => 'واحدها',
	'TRA2' => 'مدت زمان',
	'TRA3' => 'پایان‌یافته',
	'AKA1' => 'یک تحقیق با یک پیش‌نیاز وجود دارد',
	'AKA2' => 'می‌تواند پس از پایان فرایند ساخت ساختمان آغاز شود.',
);

$lang['profile'] = array(
	'1' => 'پروفایل',
	'2' => 'رتبه جمعیت',
	'3' => 'جمعیت',
	'4' => 'رتبه تهاجمی',
	'5' => 'امتیاز',
	'6' => 'رتبه دفاعی',
	'7' => 'سطح قهرمان',
	'8' => 'تجربه',

	// Medals
	'9'  => 'دسته‌بندی',
	'10' => 'هفته',
	'11' => 'رتبه',
	'12' => 'امتیاز'
);

	
	
	$lang['quests'] = array(
	'Next' => 'ادامه',
	'getRewards' => 'دریافت پاداش‌ها',
	'ActivateTips' => 'نمایش راهنما',
	'DeactivateTips' => 'مخفی کردن راهنما',
	'TipsToggleDescription' => 'نمایش / مخفی کردن راهنما',
	'GetRewards' => 'دریافت پاداش',
	'Overview' => 'نمای کلی',
	'Battle' => 'نبرد',
	'Economy' => 'اقتصاد',
	'World' => 'جهان',
	
	'1' => array(
		'Title' => 'خوش آمدید',
		'Description' => 'سلام '.$session->username.'، به تراوین خوش آمدید!<br>تا زمانی که در حال ساخت دهکده جدید خود هستید، من به شما کمک خواهم کرد. در این آموزش باید دهکده خود را بسازید و با هدف بازی و ویژگی‌های آن آشنا شوید.',
		'toDo' => array('این آموزش ویژگی‌های اصلی بازی را توضیح می‌دهد و فقط چند دقیقه زمان می‌برد. اکنون شروع کنید!')
	),

	'2' => array(
		'Title' => 'وظایف و راهنما',
		'Description' => 'می‌توانید صفحه وظایف را جابه‌جا کرده یا ببندید. برای باز کردن دوباره آن، کافی است روی تصویر من در گوشه بالا سمت چپ کلیک کنید. راهنماها و وظایف در بازی به شما کمک خواهند کرد.',
		'toDo' => array('بستن صفحه وظایف', 'برای باز کردن صفحه راهنما روی مشاور کلیک کنید', 'غیرفعال کردن راهنمای ویژگی‌ها'),
		'reward' => 'یک گودال خاک رس سطح 1 در انتظار شماست!',
		'completed' => 'اکنون می‌توانید همیشه اطلاعات مربوط به وظیفه فعلی خود را مشاهده کنید. پس از دریافت پاداش، می‌توانید وظیفه بعدی را شروع کنید. گودال خاک رس خود را دریافت کنید.'
	),

	'3' => array(
		'Title' => 'ساخت چوب‌بری',
		'Description' => 'برای پیشرفت دهکده به منابع زیادی نیاز دارید؛ برای ساخت ساختمان‌ها، آموزش نیروها و گسترش امپراتوری! ابتدا تولید منابع خود را افزایش دهید — یک چوب‌بری بسازید.',
		'toDo' => array('روی یکی از زمین‌های جنگل کلیک کنید', 'ساخت چوب‌بری سطح 1 را شروع کنید'),
		'reward' => 'اتمام چوب‌بری سطح 1',
		'completed' => 'شروع قدرتمندی برای داشتن اقتصادی قوی‌تر است. من ساخت چوب‌بری را کامل کردم تا بتوانید ادامه دهید.'
	),

	'4' => array(
		'Title' => 'ارتقای چوب‌بری',
		'Description' => 'هر ارتقای ساختمان منابع بیشتری نیاز دارد اما در عوض تولید بیشتری نیز خواهد داشت. اکنون چوب‌بری خود را از سطح 1 به سطح 2 ارتقا دهید.',
		'toDo' => array('چوب‌بری سطح 1 را باز کنید','دستور ساخت چوب‌بری سطح 2 را بدهید'),
		'reward' => 'اتمام فوری ساخت چوب‌بری سطح 2',
		'completed' => 'نمایش انبار و منابع شما در بالای دهکده قرار دارد. هزینه ساخت از منابع شما کسر می‌شود. من این بار نیز ساخت را فوراً برای شما کامل می‌کنم.'
	),

	'5' => array(
		'Title' => 'ساخت مزرعه گندم',
		'Description' => 'به مصرف گندم در گوشه سمت چپ توجه کنید. این مقدار برای آموزش نیروها و ساختمان‌ها لازم است. لطفاً یک مزرعه گندم بسازید.',
		'toDo' => array('روی زمین گندم کلیک کنید','مزرعه گندم سطح 1 بسازید'),
		'reward' => 'اتمام مزرعه گندم سطح 1 و ارتقا به سطح 2',
		'completed' => 'اکنون گندم دهکده شما به اندازه کافی تولید می‌شود تا ساختمان‌های جدید بسازید. جمعیت و نیروهای مستقر در دهکده با گندم تغذیه می‌شوند.'
	),

	'6' => array(
		'Title' => 'تولید قهرمان',
		'Description' => 'اگر قهرمان شما زنده باشد می‌تواند برای دهکده منابع تولید کند. با ساختمان‌هایی که ساختیم کمی خاک رس داریم. تولید قهرمان را روی خاک رس قرار دهید.',
		'toDo' => array('روی تصویر قهرمان کلیک کنید و صفحه نمای کلی را باز کنید','تولید قهرمان را روی خاک رس تنظیم کرده و ذخیره کنید'),
		'reward' => ''.number_format(200 * SPEED).' <i class="r2"></i>',
		'completed' => 'عالی است! اکنون قهرمان شما به تولید منابع بیشتر کمک می‌کند. تمام منابع تولید شده به دهکده اصلی اضافه می‌شوند. من نیز کمی منابع برای شما افزایش می‌دهم.'
	),

	'7' => array(
		'Title' => 'ورود به مرکز دهکده',
		'Description' => 'اکنون با استفاده از نمای کلی دهکده در بالای منوی بازی ارزش منابع خود را افزایش می‌دهیم. برای این کار باید ساختمان‌هایی در دهکده بسازیم. وارد مرکز دهکده شوید.',
		'toDo' => array('وارد مرکز دهکده شوید')
	),

	'8' => array(
		'Title' => 'ساخت انبار',
		'Description' => 'بدون انبار فقط مقدار کمی از منابع در دهکده ذخیره می‌شود. روی محل ساخت کلیک کنید و انبار بسازید! در منوی ساخت، انبار را پیدا کرده و آن را بسازید.',
		'toDo' => array('منوی ساخت را باز کرده و بخش زیرساخت را انتخاب کنید','دستور ساخت انبار سطح 1 را بدهید'),
		'reward' => 'یک روز تراوین پلاس',
		'completed' => 'ساخت‌وساز شروع شده و به‌زودی می‌توانید منابع بیشتری ذخیره کنید. من به شما ۱.۸ ساعت تراوین پلاس می‌دهم که به شما اجازه می‌دهد هنگام ساخت یک ساختمان، ساختمان دیگری را نیز در صف قرار دهید.'
	),

	'9' => array(
		'Title' => 'نقطه تجمع',
		'Description' => 'برای فرستادن قهرمان به ماجراجویی به یک نقطه تجمع نیاز دارید که در مرکز دهکده قرار دارد. آن را بسازید و به سطح 1 ارتقا دهید.',
		'toDo' => array('روی محل ساخت نقطه تجمع کلیک کنید','نقطه تجمع سطح 1 بسازید'),
		'reward' => '<img src="img/x.gif" alt="gold" title="gold" class="gold"> 2',
		'completed' => 'عالی شد! اکنون می‌توانید قهرمان خود را به ماجراجویی بفرستید. برای انجام این کار کمی طلا به شما می‌دهم تا به‌خوبی از آن استفاده کنید.'
	),

	'10' => array(
		'Title' => 'اتمام فوری',
		'Description' => 'در پایین دهکده لیستی از تمام ساخت‌وسازهای در حال انجام را می‌بینید. این بار می‌توانید خودتان ساخت را سریع‌تر تمام کنید. از طلایی که در مرحله قبل گرفتید استفاده کنید و با کلیک روی "اتمام فوری ساخت" آن را کامل کنید.',
		'toDo' => array('ساخت‌وسازها را فوراً کامل کنید'),
		'reward' => '<img src="img/x.gif" alt="gold" title="gold" class="gold"> 10',
		'completed' => 'اکنون می‌توانید قهرمان خود را به ماجراجویی بفرستید. ابتدا چند منبع بسازید تا دهکده شما همیشه رشد کند. این طلا را دریافت کنید و عاقلانه از آن استفاده کنید.'
	),


'11' => array(
	'Title' => 'پیوستن به ماجراجویی',
	'Description' => 'مکان‌های مرموز اطراف خود را کشف کنید تا تجربه و غنیمت‌های ارزشمند به دست آورید. لیست ماجراجویی‌ها را باز کنید و قهرمان خود را به اولین ماجراجویی بفرستید.',
	'toDo' => array('قهرمان خود را به اولین ماجراجویی بفرستید'),
	'reward' => 'قهرمان شما بلافاصله از ماجراجویی بازخواهد گشت',
	'completed' => 'عالی! قهرمان شما به ماجراجویی رفت — چه چیزی پیدا کرد؟ زیر تصویر قهرمان می‌توانید ببینید که او در مسیر است. من کاری می‌کنم زودتر برسد تا نتیجه را ببینید.'
),

'12' => array(
	'Title' => 'گزارش‌ها',
	'Description' => 'قهرمان شما اکنون از اولین ماجراجویی در حال بازگشت است. در منوی بالای صفحه می‌توانید بخش گزارش‌ها را پیدا کنید. لیست گزارش‌ها را باز کنید و گزارش ماجراجویی را بخوانید.',
	'toDo' => array('باز کردن لیست گزارش‌ها','مشاهده گزارش جدید ماجراجویی'),
	'reward' => '<img src="img/x.gif" class="questRewardTypeItem item106"> <span class="questRewardValue">10</span>',
	'completed' => 'می‌توانید ببینید قهرمان شما چه پاداشی پیدا کرده است. قهرمان شما همچنین کمی زخمی شده است — برای جلوگیری از این مشکل مقداری پماد به شما می‌دهم.'
),

'13' => array(
	'Title' => 'درمان قهرمان',
	'Description' => 'قهرمان شما کمی زخمی شده است. با کلیک روی تصویر او نمای کلی قهرمان را باز کنید. حالا روی پمادها در موجودی کلیک کرده و با "تأیید" از آن‌ها استفاده کنید. فقط مقدار موردنیاز مصرف خواهد شد.',
	'toDo' => array('روی تصویر قهرمان کلیک کنید تا موجودی باز شود','روی پمادها در موجودی کلیک کرده و از آن‌ها استفاده کنید'),
	'reward' => 'همچنین قهرمان شما '.number_format(20*SPEED).' امتیاز تجربه دریافت کرد.',
	'completed' => 'تمام ابزارها و سلاح‌ها نیز به همین روش قابل استفاده هستند. بسته به نوع آیتم، با نگه داشتن نشانگر ماوس روی آن می‌توانید اطلاعات بیشتری ببینید.'
),

'14' => array(
	'Title' => 'راهنمای رابط کاربری',
	'Description' => 'در کنار تصویر من می‌توانید راهنمای بیشتری درباره بازی پیدا کنید. در آنجا توضیحاتی درباره چیدمان و بخش‌های مختلف رابط کاربری وجود دارد. آن را امتحان کنید!',
	'toDo' => array('راهنمای رابط کاربری را باز کنید و بخش‌های مختلف آن را ببینید'),
	'reward' => '<i class="r1"></i> '.number_format(270*SPEED).' <i class="r2"></i> '.number_format(300*SPEED).' <i class="r3"></i> '.number_format(270*SPEED).' <i class="r4"></i> '.number_format(220*SPEED).'',
	'completed' => 'اگر سؤال خاصی داشتید، ابتدا آن را در بخش "پاسخ‌های تراوین" جستجو کنید. برای این کار روی علامت "i" در بالای این پنجره یا گوشه صفحه کلیک کنید.'
),

'15' => array(
	'Title' => 'پایان آموزش',
	'completed' => 'اکنون با اصول اولیه بازی آشنا شده‌اید. اطلاعات مهم مانند داده‌های زمان‌بندی‌شده برای کمک به بازیکنان تازه‌وارد در جعبه اطلاعات سمت چپ نمایش داده می‌شود. از تراوین لذت ببرید!',
	'toDo' => array('پایان آموزش'),
	'reward' => 'اتمام آموزش'
),

'15a' => array(
	'Title' => 'رد کردن آموزش',
	'Description' => 'اکنون با اصول اولیه بازی آشنا شده‌اید. اطلاعات مهم مانند داده‌های زمان‌بندی‌شده برای کمک به بازیکنان تازه‌وارد در جعبه اطلاعات سمت چپ نمایش داده می‌شود. از تراوین لذت ببرید!',
	'toDo' => array(),
	'reward' => 'نقطه تجمع، گودال خاک رس، چوب‌بری سطح 2، مزرعه گندم سطح 2، 10 طلا، 1.8 ساعت پلاس'
),
);

$lang['quests']['battle'] = array(
	'1' => array(
		'Title' => 'ماجراجویی بعدی',
		'Description' => 'در طول آموزش، از یک ماجراجویی کمی تجربه به‌دست آوردید. به محض اینکه قهرمان به دهکده بازگشت، او را به ماجراجویی بعدی بفرستید. غنیمت و تجربه کمک می‌کنند سریع‌تر رشد کنید.',
		'toDo' => array('رفتن به ماجراجویی دوم'),
		'reward' => ''.number_format(30*SPEED).' امتیاز تجربه قهرمان',

		'completed' => 'عالی است، قهرمان شما در راه ماجراجویی است! نکته: هرچه قدرت جنگی قهرمان بیشتر باشد، در ماجراجویی‌ها آسیب کمتری می‌بیند.'
	),

	'2' => array(
		'Title' => 'ساخت مخفیگاه',
		'Description' => 'بسیاری از بازیکنان در ابتدای بازی منابع دیگران را غارت می‌کنند. شما اکنون در دوران حفاظت تازه‌وارد هستید، اما بهتر است مخفیگاهی بسازید تا بخشی از منابع شما همیشه امن بمانند.',
		'toDo' => array('ساخت یک مخفیگاه در دهکده'),
		'reward' => '<i class="r1"></i> '.number_format(130*SPEED).' <i class="r2"></i> '.number_format(150*SPEED).' <i class="r3"></i> '.number_format(120*SPEED).' <i class="r4"></i> '.number_format(100*SPEED).'',

		'completed' => 'آفرین! حالا غارتگران به این راحتی دست خالی شما را پیدا نمی‌کنند. در جعبه اطلاعات زمان باقی‌مانده‌ی حفاظت تازه‌وارد را ببینید.'
	),

	'3' => array(
		'Title' => 'ساخت سربازخانه',
		'Description' => 'سربازخانه اولین ساختمانی است که می‌توانید در آن نیروی نظامی تربیت کنید. حتی اگر قصد جنگ ندارید، برای دفاع از خود و متحدانتان نیاز به نیرو خواهید داشت.',
		'toDo' => array('ساخت سربازخانه'),
		'reward' => '<i class="r1"></i> '.number_format(110*SPEED).' <i class="r2"></i> '.number_format(140*SPEED).' <i class="r3"></i> '.number_format(160*SPEED).' <i class="r4"></i> '.number_format(30*SPEED).'',

		'completed' => 'سربازخانه ساخته شد! قدمی مهم به سوی قدرت‌مند شدن.'
	),

	'4' => array(
		'Title' => 'انجام 5 ماجراجویی',
		'Description' => 'هرچه بیشتر ماجراجویی کنید، غنیمت بیشتری به دست می‌آورید. هر زمان ماجراجویی جدید باز شد، قهرمان را بفرستید. اگر سلامتی او پایین است، او را آرامش دهید یا از پماد استفاده کنید.',
		'toDo' => array('تکمیل 5 ماجراجویی'),
		'reward' => '<img src="img/x.gif" title="Ointments" class="questRewardTypeItem item106"> <span class="questRewardValue">150</span>',

		'completed' => 'پمادها برای درمان قهرمان هستند. اگر آن‌ها را مجهز کنید، هنگام آسیب دیدن به‌طور خودکار مصرف می‌شوند.'
	),

	'5' => array(
		'Title' => 'آموزش نیرو',
		'Description' => 'اکنون زمان تربیت اولین نیروهاست. در سربازخانه می‌توانید نوعی از واحدهای پیاده‌نظام را آموزش دهید.',
		'toDo' => array('آموزش دو نیرو در سربازخانه'),
		'reward' => '<img src="img/x.gif" title="Cage" class="questRewardTypeItem item114"> <span class="questRewardValue">1</span>',

		'completed' => 'اولین قدم‌ها برای تشکیل یک ارتش باشکوه برداشته شد! فراموش نکنید که حتی وقتی آنلاین نیستید نیز ممکن است مورد حمله قرار بگیرید.'
	),

	'6' => array(
		'Title' => 'دیوار خاکی',
		'Description' => 'اکنون بهتر است کمی دفاع بسازید. استحکامات هم دفاع پایه‌ی دهکده را افزایش می‌دهند و هم قدرت جنگی نیروهای مدافع را بالا می‌برند.',
		'toDo' => array('ساخت دیوار یا استحکامات دور دهکده'),
		'reward' => '<i class="r1"></i> '.number_format(120*SPEED).' <i class="r2"></i> '.number_format(120*SPEED).' <i class="r3"></i> '.number_format(90*SPEED).' <i class="r4"></i> '.number_format(50*SPEED).'',

		'completed' => 'عالی است، اکنون مدافعان دهکده شما مقاوم‌تر هستند.'
	),

	'7' => array(
		'Title' => 'حمله به آبادی',
		'Description' => 'روی نقشه یک آبادی آزاد نزدیک دهکده پیدا کنید و آن را غارت کنید. اگر حیوانات از آن دفاع می‌کنند، قهرمان را با قفس مجهز کنید تا حیوانات را اسیر کند.',
		'toDo' => array('باز کردن یک آبادی آزاد روی نقشه و حمله به آن'),
		'reward' => '2 واحد نظامی پایه',

		'completed' => 'تبریک! اولین حمله شما در راه است. می‌توانید برای مدتی کوتاه آن را از نقطه تجمع لغو کنید.'
	),

	'8' => array(
		'Title' => '10 ماجراجویی',
		'Description' => 'به ماجراجویی‌های قهرمان ادامه دهید. پس از انجام 10 ماجراجویی، می‌توانید وارد حراجی شده و آیتم‌ها را با دیگر بازیکنان معامله کنید.',
		'toDo' => array('انجام 10 ماجراجویی'),
		'reward' => '500 نقره',

		'completed' => 'آفرین! هم‌اکنون امکان استفاده از حراجی برای شما فعال شد. این مقدار نقره را هم برای شروع معامله دریافت کنید.'
	),

	'9' => array(
		'Title' => 'حراجی',
		'Description' => 'به حراجی بروید و ببینید چه آیتم‌هایی در حال معامله هستند. حتی می‌توانید بعضی از غنیمت‌های قهرمان را بفروشید و نقره بگیرید.',
		'toDo' => array('ایجاد یا ثبت پیشنهاد در یک حراجی'),
		'reward' => '<i class="r1"></i> '.number_format(280*SPEED).' <i class="r2"></i> '.number_format(120*SPEED).' <i class="r3"></i> '.number_format(220*SPEED).' <i class="r4"></i> '.number_format(110*SPEED).'',

		'completed' => 'عالی! اکنون می‌دانید چگونه تجهیزات و آیتم‌های مصرفی را با بازیکنان دیگر معامله کنید.'
	),

	'10' => array(
		'Title' => 'ارتقای سربازخانه',
		'Description' => 'اکنون سربازخانه خود را ارتقا دهید. با این کار، پیش‌نیاز ساخت ساختمان‌های بیشتر را نیز فراهم می‌کنید.',
		'toDo' => array('ارتقای سربازخانه به سطح 3'),
		'reward' => '<i class="r1"></i> '.number_format(240*SPEED).' <i class="r2"></i> '.number_format(290*SPEED).' <i class="r3"></i> '.number_format(430*SPEED).' <i class="r4"></i> '.number_format(240*SPEED).'',

		'completed' => 'آفرین! نیروها سریع‌تر آموزش می‌بینند و اکنون می‌توانید آکادمی بسازید.'
	),

	'11' => array(
		'Title' => 'ساخت آکادمی',
		'Description' => 'در آکادمی می‌توانید واحدهای پیشرفته‌تری برای دهکده پژوهش کنید. بعضی از آن‌ها بسیار گران و با پیش‌نیازهای بالا هستند.',
		'toDo' => array('ساخت آکادمی'),
		'reward' => '<i class="r1"></i> '.number_format(210*SPEED).' <i class="r2"></i> '.number_format(170*SPEED).' <i class="r3"></i> '.number_format(245*SPEED).' <i class="r4"></i> '.number_format(115*SPEED).'',

		'completed' => 'عالی! به‌زودی با سربازان قبیله خود بیشتر آشنا خواهید شد.'
	),

	'12' => array(
		'Title' => 'پژوهش یک واحد',
		'Description' => 'گزینه‌های پژوهشی آکادمی را بررسی کنید. واحدهای پیاده‌نظام، سواره‌نظام و تجهیزات محاصره وجود دارند. هر واحد معمولاً در حمله یا دفاع تخصص دارد.',
		'toDo' => array('پژوهش یک نوع واحد جدید'),
		'reward' => '<i class="r1"></i> '.number_format(450*SPEED).' <i class="r2"></i> '.number_format(435*SPEED).' <i class="r3"></i> '.number_format(515*SPEED).' <i class="r4"></i> '.number_format(550*SPEED).'',

		'completed' => 'پژوهش کافی نیست؛ برای استفاده از نیرو باید آن‌ها را تربیت کنید!'
	),

	'13' => array(
		'Title' => 'ساخت آهنگری',
		'Description' => 'در آهنگری می‌توانید تجهیزات و اسلحه نیروهای خود را بهبود دهید. همچنین آهنگری پیش‌نیاز ساخت ساختمان‌های نظامی دیگر است.',
		'toDo' => array('ساخت آهنگری'),
		'reward' => '<i class="r1"></i> '.number_format(500*SPEED).' <i class="r2"></i> '.number_format(400*SPEED).' <i class="r3"></i> '.number_format(700*SPEED).' <i class="r4"></i> '.number_format(400*SPEED).'',

		'completed' => 'عالی! حالا می‌توانید نیروهای خود را بهتر مجهز کنید.'
	),

	'14' => array(
		'Title' => 'بهبود واحدها',
		'Description' => 'بهبود تجهیزات سربازان ارزان نیست، اما هرچه تعداد نیروهای شما بیشتر باشد، نتیجه این ارتقا ارزشمندتر می‌شود. این بار حتی بیش از هزینه، پاداش خواهید گرفت!',
		'toDo' => array('پایان ارتقای یک نوع نیرو'),
		'reward' => '<img src="img/x.gif" class="questRewardTypeItem item112"> <span class="questRewardValue">10</span>',

		'completed' => 'در آهنگری یک بهبود واحد انجام دهید!'
	),
);

$lang['quests']['economy'] = array(
	'1' => array(
		'Title' => 'معدن آهن',
		'Description' => 'افزایش تولید آهن برای دهکده شما. پاداش افزایش تولید می‌تواند تولید هر منبعی را حتی بیشتر افزایش دهد.',
		'toDo' => array('ارتقای معدن آهن'),
		'reward' => '۱ روز پاداش +۲۵٪ تولید برای همه منابع',

		'completed' => 'تولید آهن دهکده شما افزایش یافت. پاداش تولید می‌تواند باعث افزایش بیشتر تولید منابع شود.'
	),

	'2' => array(
		'Title' => 'منابع بیشتر',
		'Description' => 'یک جنگل، یک معدن خاک رس، یک معدن آهن و یک مزرعه گندم را به سطح ۱ ارتقا دهید. برای تکمیل این مأموریت باید حداقل دو میدان از هر نوع منبع بالاتر از سطح ۰ داشته باشید. تا زمانی که Travian PLUS فعال باشد، می‌توانید همزمان یک ساخت‌وساز اضافی نیز در صف قرار دهید.',
		'toDo' => array('یک میدان دیگر از هر منبع را به سطح ۱ ارتقا دهید'),
		'reward' => '<i class="r1"></i> '.number_format(160*SPEED).' <i class="r2"></i> '.number_format(190*SPEED).' <i class="r3"></i> '.number_format(150*SPEED).' <i class="r4"></i> '.number_format(70*SPEED).'',

		'completed' => 'تبریک! دهکده شما در حال رشد و پیشرفت است.'
	),

	'3' => array(
		'Title' => 'انبار گندم',
		'Description' => 'برای ذخیره گندم بیشتر به انبار گندم نیاز دارید. ظرفیت فعلی ذخیره را می‌توانید در نوار منابع مشاهده کنید.',
		'toDo' => array('ساخت انبار گندم'),
		'reward' => '<i class="r1"></i> '.number_format(250*SPEED).' <i class="r2"></i> '.number_format(290*SPEED).' <i class="r3"></i> '.number_format(100*SPEED).' <i class="r4"></i> '.number_format(130*SPEED).'',

		'completed' => 'عالی! اکنون انبار گندم به شما اجازه می‌دهد گندم بیشتری ذخیره کنید.'
	),

	'4' => array(
		'Title' => 'همه به سطح ۱',
		'Description' => 'در ابتدای بازی بهتر است روی منابع تمرکز کنید. همه میدان‌های منابع خود را به سطح ۱ ارتقا دهید.',
		'toDo' => array('ارتقای تمام میدان‌های منابع به سطح ۱'),
		'reward' => '<i class="r1"></i> '.number_format(400*SPEED).' <i class="r2"></i> '.number_format(460*SPEED).' <i class="r3"></i> '.number_format(330*SPEED).' <i class="r4"></i> '.number_format(270*SPEED).'',

		'completed' => 'تولید منابع شما به‌خوبی در حال پیشرفت است. به‌زودی می‌توانیم ساختمان‌های بیشتری در دهکده بسازیم.'
	),

	'5' => array(
		'Title' => 'به سطح ۲!',
		'Description' => 'عالی است! اگر اطلاعات بیشتری درباره تولید منابع می‌خواهید، روی نوار منابع کلیک کنید.',
		'toDo' => array('یک میدان از هر منبع را به سطح ۲ ارتقا دهید'),
		'reward' => '<i class="r1"></i> '.number_format(240*SPEED).' <i class="r2"></i> '.number_format(255*SPEED).' <i class="r3"></i> '.number_format(190*SPEED).' <i class="r4"></i> '.number_format(160*SPEED).'',

		'completed' => 'خوب انجام شد! برای مشاهده جزئیات بیشتر درباره تولید، روی نوار منابع کلیک کنید.'
	),

	'6' => array(
		'Title' => 'بازار',
		'Description' => 'اگر کمبود یک منبع دارید، می‌توانید آن را در بازار با منابع دیگر از بازیکنان دیگر معامله کنید. برای ساخت بازار به ساختمان اصلی با سطح بالاتر نیاز دارید.',
		'toDo' => array('ساخت بازار'),
		'reward' => '<i class="r1"></i> '.number_format(600*SPEED).'',

		'completed' => 'بازار شما آماده است و اکنون می‌توانید با دیگر بازیکنان معامله کنید. مراقب پیشنهادهای بسیار بد باشید!'
	),

	'7' => array(
		'Title' => 'تجارت',
		'Description' => 'پیشنهادهای موجود در بازار را می‌توانید در بخش خرید مشاهده کنید. نرخ تبادل و فاصله را بررسی کنید. اگر پیشنهاد مناسبی پیدا نکردید، می‌توانید خودتان یک پیشنهاد ایجاد کنید.',
		'toDo' => array('ایجاد یک پیشنهاد در بازار یا قبول یک پیشنهاد'),
		'reward' => '<i class="r1"></i> '.number_format(100*SPEED).' <i class="r2"></i> '.number_format(99*SPEED).' <i class="r3"></i> '.number_format(99*SPEED).' <i class="r4"></i> '.number_format(99*SPEED).'',

		'completed' => 'عالی! شما اولین معامله خود را انجام دادید.'
	),

	'8' => array(
		'Title' => 'همه به سطح ۲',
		'Description' => 'قبل از ساخت ساختمان‌های گران‌تر، بهتر است تولید منابع خود را بیشتر افزایش دهید. همه میدان‌های منابع را به سطح ۲ ارتقا دهید.',
		'toDo' => array('ارتقای همه میدان‌های منابع به سطح ۲'),
		'reward' => '<i class="r1"></i> '.number_format(400*SPEED).' <i class="r2"></i> '.number_format(400*SPEED).' <i class="r3"></i> '.number_format(400*SPEED).' <i class="r4"></i> '.number_format(200*SPEED).'',

		'completed' => 'تبریک! تولید منابع شما به خوبی در حال افزایش است.'
	),

	'9' => array(
		'Title' => 'انبار سطح ۳',
		'Description' => 'اکنون زمان آن است که ظرفیت انبار خود را با تولید افزایش‌یافته هماهنگ کنید. غنیمت‌های قهرمان نیز ممکن است باعث پر شدن سریع انبار شوند.',
		'toDo' => array('ارتقای انبار به سطح ۳'),
		'reward' => '<i class="r1"></i> '.number_format(620*SPEED).' <i class="r2"></i> '.number_format(730*SPEED).' <i class="r3"></i> '.number_format(560*SPEED).' <i class="r4"></i> '.number_format(230*SPEED).'',

		'completed' => 'خیلی خوب! اکنون منابع ارزشمند شما هدر نخواهند رفت.'
	),

	'10' => array(
		'Title' => 'انبار گندم سطح ۳',
		'Description' => 'هرچه تولید شما بیشتر باشد، ذخیره‌سازی سریع‌تر پر می‌شود. بهتر است انبار گندم را نیز ارتقا دهید.',
		'toDo' => array('ارتقای انبار گندم به سطح ۳'),
		'reward' => '<i class="r1"></i> '.number_format(880*SPEED).' <i class="r2"></i> '.number_format(1020*SPEED).' <i class="r3"></i> '.number_format(590*SPEED).' <i class="r4"></i> '.number_format(320*SPEED).'',

		'completed' => 'اکنون دوباره فضای کافی در انبار گندم دارید تا حتی در غیاب شما تولید ادامه یابد.'
	),

	'11' => array(
		'Title' => 'آسیاب گندم',
		'Description' => 'آسیاب گندم تولید همه مزارع گندم شما را افزایش می‌دهد. برای اینکه ارزش ساخت آن را داشته باشد باید تولید پایه نسبتاً بالایی داشته باشید.',
		'toDo' => array('ارتقای یک مزرعه گندم به سطح ۱'),
		'reward' => 'آسیاب گندم سطح ۲',

		'completed' => 'اکنون گندم آزاد بیشتری برای ساخت‌وسازهای بعدی دارید. ساختمان‌هایی نیز وجود دارند که تولید سایر منابع را افزایش می‌دهند.'
	),

	'12' => array(
		'Title' => 'همه به سطح ۵',
		'Description' => 'برای ساخت ساختمان‌ها و مهاجران جهت تأسیس دهکده دوم به تولید بسیار بیشتری نیاز دارید. همه میدان‌های منابع را به سطح ۵ ارتقا دهید.',
		'toDo' => array('ارتقای تمام میدان‌های منابع به سطح ۵'),
		'reward' => '۱ روز پاداش +۲۵٪ تولید برای همه منابع',

		'completed' => 'عالی! تولید قدرتمند شما به ساخت مهاجران کمک خواهد کرد.'
	),
);
$lang['quests']['world'] = array(
	'1' => array(
		'Title' => 'مشاهده آمار',
		'Description' => 'در دنیای تراوین، شما با هزاران بازیکن دیگر رقابت می‌کنید. با بررسی بخش آمار می‌توانید موقعیت خود را در میان بازیکنان دیگر ببینید.',
		'toDo' => array('آمار را باز کرده و خود را با سایر بازیکنان مقایسه کنید'),
		'reward' => '<i class="r1"></i> '.number_format(90*SPEED).' <i class="r2"></i> '.number_format(120*SPEED).' <i class="r3"></i> '.number_format(60*SPEED).' <i class="r4"></i> '.number_format(30*SPEED).'',

		'completed' => 'علاوه بر رتبه، اطلاعات مفید دیگری نیز در آن وجود دارد. در زبانه‌ی Top10 می‌توانید قدرتمندترین مهاجمان و موفق‌ترین غارتگران را مشاهده کنید.'
	),

	'2' => array(
		'Title' => 'تغییر نام دهکده',
		'Description' => 'نامی که شما برای دهکده انتخاب می‌کنید نشانه‌ای است برای سایر بازیکنان که نشان می‌دهد امپراتوری شما به‌صورت فعال مدیریت می‌شود.',
		'toDo' => array('تغییر نام دهکده از روی تابلو دهکده'),
		'reward' => '۱۰۰ امتیاز فرهنگی',

		'completed' => 'عالی است! نخستین گام را برای ثبت نشان خود در دنیای تراوین برداشتید.'
	),

	'3' => array(
		'Title' => 'ساختمان اصلی سطح ۳',
		'Description' => 'برای ساخت ساختمان‌های جدید باید ساختمان اصلی را ارتقا دهید. هرچه سطح ساختمان اصلی بالاتر باشد، مهندسان دهکده سریع‌تر ساختمان‌ها را می‌سازند. فراموش نکنید همه چیز به منابع نیاز دارد!',
		'toDo' => array('ارتقای ساختمان اصلی به سطح ۳'),
		'reward' => '<i class="r1"></i> '.number_format(170*SPEED).' <i class="r2"></i> '.number_format(100*SPEED).' <i class="r3"></i> '.number_format(130*SPEED).' <i class="r4"></i> '.number_format(70*SPEED).'',

		'completed' => 'عالی! ساختمان اصلی بزرگ‌تر اکنون اجازه‌ی ساخت ساختمان‌های جدیدی را می‌دهد که قبلاً قفل بودند.'
	),

	'4' => array(
		'Title' => 'ساخت سفارت‌خانه',
		'Description' => 'دنیای تراوین مکان خطرناکی است و باید قادر به دفاع از خود باشید. بهترین دفاع اضافه، داشتن متحدان قدرتمند است. برای پیوستن به اتحاد، سفارت‌خانه بسازید.',
		'toDo' => array('ساخت سفارت‌خانه'),
		'reward' => '<i class="r1"></i> '.number_format(215*SPEED).' <i class="r2"></i> '.number_format(145*SPEED).' <i class="r3"></i> '.number_format(195*SPEED).' <i class="r4"></i> '.number_format(50*SPEED).'',

		'completed' => 'بسیار خوب! اکنون می‌توانید دعوت‌نامه‌های اتحاد را بپذیرید. این دعوت‌نامه‌ها در بخش سفارت‌خانه قابل مشاهده‌اند.'
	),

	'5' => array(
		'Title' => 'باز کردن نقشه',
		'Description' => 'نقشه، جهان تراوین را به شما نشان می‌دهد. همسایگان خود را بررسی کنید تا متحدان بالقوه یا تهدیدات احتمالی را بشناسید!',
		'toDo' => array('باز کردن نقشه از طریق منو'),
		'reward' => '<i class="r1"></i> '.number_format(90*SPEED).' <i class="r2"></i> '.number_format(160*SPEED).' <i class="r3"></i> '.number_format(90*SPEED).' <i class="r4"></i> '.number_format(95*SPEED).'',

		'completed' => 'آیا بازیکنان یا اتحادهای قدرتمند نزدیک شما هستند؟ نقشه به شما در پیدا کردن واحه‌ها و مکان‌های مناسب برای تأسیس دهکده‌های جدید کمک می‌کند.'
	),

	'6' => array(
		'Title' => 'خواندن پیام',
		'Description' => 'اکنون یک پیام آموزشی دریافت کرده‌اید. پیام‌های خوانده‌نشده با عددی در بالای دکمه مشخص می‌شوند. همین حالا پیام را بخوانید.',
		'toDo' => array('صفحه‌ی پیام‌ها را باز کرده و پیام راهنما را مطالعه کنید'),
		'reward' => '<i class="r1"></i> '.number_format(280*SPEED).' <i class="r2"></i> '.number_format(315*SPEED).' <i class="r3"></i> '.number_format(200*SPEED).' <i class="r4"></i> '.number_format(145*SPEED).'',

		'completed' => 'از پیام‌ها برای ارتباط با دیگر بازیکنان استفاده کنید. همیشه آرام و مؤدب بودن حتی در زمان نبرد، نتیجه‌ی بهتری دارد.'
	),

	'7' => array(
		'Title' => 'طلای پاداش',
		'Description' => 'در آموزش اولیه از طلا برای سرعت بخشیدن به ساخت‌وساز استفاده کردید. با مراجعه به فروشگاه طلا می‌توانید کاربردهای دیگر طلای خود را ببینید.',
		'toDo' => array('نگاهی به امکاناتی که با طلا می‌توان خرید بیندازید'),
		'reward' => '<img src="img/x.gif" title="gold" class="gold"> 20',

		'completed' => 'دوباره مقداری طلا به صورت رایگان دریافت کردید تا بتوانید از مزایای طلای بازی استفاده کنید.'
	),

	'8' => array(
		'Title' => 'اتحاد',
		'Description' => 'به دنبال متحدان بگردید و به یک اتحاد بپیوندید. اگر هنوز ارتباطی ندارید، اتحاد بازیکنان نزدیک خود را بررسی کنید یا در انجمن بازی جست‌وجو نمایید.',
		'toDo' => array('پیوستن به یک اتحاد'),
		'reward' => '<i class="r1"></i> '.number_format(295*SPEED).' <i class="r2"></i> '.number_format(210*SPEED).' <i class="r3"></i> '.number_format(235*SPEED).' <i class="r4"></i> '.number_format(185*SPEED).'',

		'completed' => 'عالی! هرچه تک‌تک اعضا فعال‌تر و قوی‌تر باشند، قدرت اتحاد شما بیشتر خواهد شد. آیا یاد گرفته‌اید چگونه حملات را گزارش کرده و درخواست کمک کنید؟'
	),

	'9' => array(
		'Title' => 'ساختمان اصلی سطح ۵',
		'Description' => 'زمان آن رسیده تا ساختمان اصلی را ارتقا دهید تا بتوانید ساختمان‌های بیشتری بسازید. در عین حال مراقب تولید منابع خود باشید.',
		'toDo' => array('ارتقای ساختمان اصلی به سطح ۵'),
		'reward' => '<i class="r1"></i> '.number_format(570*SPEED).' <i class="r2"></i> '.number_format(470*SPEED).' <i class="r3"></i> '.number_format(560*SPEED).' <i class="r4"></i> '.number_format(265*SPEED).'',

		'completed' => 'عالی! ساختمان اصلی شما اکنون سریع‌تر می‌سازد. پاداش خود را بگیرید و برای مأموریت بعدی آماده شوید.'
	),

	'10' => array(
		'Title' => 'مرکز حکومت',
		'Description' => 'اکنون یک ساختمان حکومتی بسازید تا بتوانید به‌زودی دهکده‌ای جدید تأسیس نمایید. اگر مطمئن نیستید که این دهکده را پایتخت می‌خواهید، اقامتگاه را انتخاب کنید.',
		'toDo' => array('ساخت مرکز حکومت'),
		'reward' => '<i class="r1"></i> '.number_format(525*SPEED).' <i class="r2"></i> '.number_format(420*SPEED).' <i class="r3"></i> '.number_format(620*SPEED).' <i class="r4"></i> '.number_format(335*SPEED).'',

		'completed' => 'این ساختمان برای تأسیس یا تصرف دهکده جدید ضروری است. سطح آن مقدار مجاز گسترش‌ها را تعیین می‌کند.'
	),

	'11' => array(
		'Title' => 'امتیاز فرهنگی',
		'Description' => 'برای حکومت بر دهکده‌های بیشتر در قلمرو خود، به امتیاز فرهنگی نیاز دارید. در بخش اقامتگاه یا قصر می‌توانید میزان پیشرفت خود را مشاهده کنید.',
		'toDo' => array('باز کردن زبانه‌ی امتیاز فرهنگی در اقامتگاه یا قصر'),
		'reward' => '<i class="r1"></i> '.number_format(650*SPEED).' <i class="r2"></i> '.number_format(800*SPEED).' <i class="r3"></i> '.number_format(740*SPEED).' <i class="r4"></i> '.number_format(530*SPEED).'',

		'completed' => 'در فهرست دهکده‌ها می‌توانید وضعیت فعلی و میزان امتیاز فرهنگی مورد نیاز برای دهکده‌های جدید را ببینید. برای افزایش سریع‌تر امتیاز فرهنگی، بخش «Answers» را مطالعه کنید.'
	),

	'12' => array(
		'Title' => 'انبار سطح ۷',
		'Description' => 'انبار خود را ارتقا دهید تا برای تأسیس دهکده جدید آماده شوید. ظرفیت فعلی ذخیره به‌زودی برای ساخت مهاجران و ساختمان‌های مورد نیاز کافی نخواهد بود.',
		'toDo' => array('ارتقای انبار به سطح ۷'),
		'reward' => '<i class="r1"></i> '.number_format(2650*SPEED).' <i class="r2"></i> '.number_format(2150*SPEED).' <i class="r3"></i> '.number_format(1810*SPEED).' <i class="r4"></i> '.number_format(1320*SPEED).'',

		'completed' => 'خیلی خوب، ظرفیت ذخیره‌ی شما فعلاً کافی است. فراموش نکنید منابع ارزشمند خود را پنهان یا محافظت کنید!'
	),

	'13' => array(
		'Title' => 'اقامتگاه یا قصر سطح ۱۰',
		'Description' => 'مهاجران در قصر یا اقامتگاه آموزش داده می‌شوند. در زبانه‌ی «آموزش» سطح لازم ساختمان نمایش داده می‌شود.',
		'toDo' => array('ارتقای اقامتگاه یا قصر به سطح ۱۰'),
		'reward' => '۵۰۰ امتیاز فرهنگی',

		'completed' => 'از هر دهکده تنها می‌توان ۲ تا ۳ دهکده‌ی جدید اداره کرد. هم‌اکنون تنها به ۳ مهاجر و مقداری امتیاز فرهنگی برای ایجاد دهکده‌ی جدید نیاز دارید.'
	),

	'14' => array(
		'Title' => 'آموزش سه مهاجر',
		'Description' => 'برای تأسیس دهکده‌ی جدید باید سه مهاجر را همزمان روانه کنید. مراقب باشید تا در هنگام آماده‌سازی از حملات دشمنان در امان باشند.',
		'toDo' => array('آموزش سه مهاجر'),
		'reward' => '<i class="r1"></i> '.number_format(1050*SPEED).' <i class="r2"></i> '.number_format(800*SPEED).' <i class="r3"></i> '.number_format(900*SPEED).' <i class="r4"></i> '.number_format(750*SPEED).'',

		'completed' => 'تا زمان حرکت مهاجران در برابر حملات آن‌ها را محافظت کنید!'
	),

	'15' => array(
		'Title' => 'ایجاد دهکده جدید',
		'Description' => 'در نقشه به دنبال مکان مناسبی برای تأسیس دهکده جدید بگردید. نزدیک بودن به دهکده فعلی، داشتن منابع بیشتر یا قرارگیری در نزدیکی واحه‌ها را در نظر بگیرید. با استفاده از مهاجران خود دهکده دوم را بنیان‌گذاری کنید!',
		'toDo' => array('ایجاد دهکده جدید'),
		'reward' => '۴۸ ساعت Travian Plus',

		'completed' => 'عالی است! اکنون شما یکی از امپراتوری‌های قدرتمند در دنیای تراوین هستید. به توسعه‌ی خود ادامه دهید و نیروهای زیادی برای دفاع در برابر دشمنان آموزش دهید.'
	),
);
$lang['quests']['monitor'] = array(
	'1' => array('شروع آموزش'),
	'2' => array('بستن مأموریت‌ها','باز کردن مأموریت‌ها','غیرفعال کردن راهنماها'),
	'3' => array('باز کردن بخش جنگل','ساخت جنگل'),
	'4' => array('باز کردن ساختمان','جنگل سطح 2'),
	'5' => array('باز کردن مزرعه گندم','ساخت مزرعه گندم'),
	'6' => array('کلیک روی تصویر قهرمان','تغییر تولید'),
	'7' => array('ورود به مرکز دهکده'),
	'8' => array('کلیک روی محل ساخت','ساخت انبار'),
	'9' => array('کلیک روی محل میدان تمرین','ساخت میدان تمرین'),
	'10' => array('تکمیل ساخت‌وساز'),
	'11' => array('ماجراجویی قهرمان'),
	'12' => array('منوی گزارش‌ها','خواندن گزارش'),
	'13' => array('موجودی قهرمان','درمان قهرمان'),
	'14' => array('راهنمای رابط کاربری'),
	'15' => array('پایان آموزش')
);

$lang['quests']['monitor']['battle'] = array(
	'01' => 'ماجراجویی بعدی',
	'02' => 'ساخت مخفیگاه',
	'03' => 'ساخت پادگان',
	'04' => 'انجام 5 ماجراجویی',
	'05' => 'آموزش نیرو',
	'06' => 'دیوار خاکی',
	'07' => 'حمله به واحه',
	'08' => '10 ماجراجویی',
	'09' => 'حراجی‌ها',
	'10' => 'ارتقای پادگان',
	'11' => 'ساخت آکادمی',
	'12' => 'تحقیق نیرو',
	'13' => 'ساخت آهنگری',
	'14' => 'بهبود نیروها'
);

$lang['quests']['monitor']['economy'] = array(
	'01' => 'معدن آهن',
	'02' => 'منابع بیشتر',
	'03' => 'انبار گندم',
	'04' => 'همه به سطح 1',
	'05' => 'به سطح 2!',
	'06' => 'بازار',
	'07' => 'تجارت',
	'08' => 'همه به سطح 2',
	'09' => 'انبار سطح 3',
	'10' => 'انبار گندم سطح 3',
	'11' => 'آسیاب گندم',
	'12' => 'همه به سطح 5'
);

$lang['quests']['monitor']['world'] = array(
	'01' => 'مشاهده آمار',
	'02' => 'تغییر نام دهکده',
	'03' => 'ساختمان اصلی سطح 3',
	'04' => 'ساخت سفارت‌خانه',
	'05' => 'باز کردن نقشه',
	'06' => 'خواندن پیام',
	'07' => 'طلای پاداش',
	'08' => 'اتحاد',
	'09' => 'ساختمان اصلی سطح 5',
	'10' => 'مرکز حکومت',
	'11' => 'امتیاز فرهنگی',
	'12' => 'انبار سطح 7',
	'13' => 'اقامتگاه یا قصر سطح 10',
	'14' => '3 مهاجر',
	'15' => 'دهکده جدید',
);

$lang['quests']['Main'] = array(
	'QuestsList' => 'لیست مأموریت‌ها',
	'Quest' => 'مأموریت',
	'Reward' => 'پاداش شما',
);

$lang['main']['options'] = array(
	'1' => 'بازی',
	'2' => 'تنظیمات زبان',
	'3' => 'زبان',
	'4' => 'فارسـی',
	'5' => 'عربی',
	'6' => 'ذخیره',
);

$lang['links'] = array(
	'Farms' => 'سیستم فارم لیست',
	'Support' => 'تماس با پشتیبانی',
);

$lang['Report'] = array(
	'Silver' => 'نقره',
);


$lang['Msgs'] = array(
	'wMSGT' => 'پیام از مولتی‌هانتر',
	'wMSGI' => 'جایزه بزرگی در انتظار شماست.<br><br>این پیام به‌صورت خودکار ایجاد شده است و نیازی به پاسخ دادن ندارد.',

	'Arts' => '<div style="width:450px; height:830px; padding:95px 60px 60px 25px; background:url(img/Natars_Banner_gross.jpg) no-repeat;">
			<center>
				<h1>آرتیفکت‌ها</h1>
				<p style="font-size:85%; text-align:justify; width:400px">
				آرتیفکت‌ها ظاهر شده‌اند و زمان به‌دست آوردن آن‌ها فرا رسیده است. زود باشید تا یکی از این آرتیفکت‌های ارزشمند را قبل از ناپدید شدن تصاحب کنید.
					<br><br><img src="img/msg.jpg" alt="Artefacts" width="400" height="200" style="float:right">
					<br><br>
					آرتیفکت‌ها اشیای گران‌بها و کاربردی هستند و هر آرتیفکت اثر ویژه‌ی خود را دارد. برخی بازیکنان به‌دنبال آرتیفکت‌هایی هستند که سربازان را سریع‌تر آموزش دهند یا مصرف گندم را کاهش دهند، در حالی‌که دیگران تأثیرات متفاوتی را ترجیح می‌دهند. شما چه می‌خواهید؟ عجله کنید و مالک یکی از آرتیفکت‌ها شوید. فراموش نکنید داشتن آرتیفکت به‌تنهایی کافی نیست؛ باید از اتحاد خود کمک بگیرید تا بتوانید از آن دفاع کنید. پس خود را به‌خوبی آماده سازید!</p><br><br>
	<span style="font-size:60%; color:#666;"></span>
	</center>
	</div>',

	'WW' => 'زمان‌های بی‌شماری از نخستین نبردها بر دیوارهای ناتار گذشته است؛ نیروهای فراوانی نابود شده‌اند و بوی مرگ در هوا پیچیده است ... نبرد تازه آغاز شده است! آماده باشید، زیرا آینده در راه است!
	<br><br>
	پیشاهنگان با داستان‌هایی وحشتناک بازگشته‌اند؛ روایت‌هایی از قدرتی عظیم، بی‌رحم و بی‌امان که امید مردم را در هم می‌شکند. آماده شوید تا ارتش و دفاع خود را تجهیز کنید؛ این نبرد، پایانی ندارد.
	<br><br>
	طرح ساخت شگفتی جهان پدیدار شده است. با این طرح می‌توانید سطح شگفتی جهان را افزایش دهید و آرتیفکت‌ها را پیش از اینکه دشمن آنها را برباید به‌دست آورید.
	<br><br>
	ده‌ها پیشاهنگ در حال گشت‌وگذار برای یافتن نشانه‌های قدرت هستند، اما دسترسی به این مکان‌ها آسان نیست! مشکلات تازه آغاز شده‌اند و اسرار امپراتوری ناتار آشکار می‌شوند!
	<br><br>
	در پایان کار، زمانی‌که قدرتمندترین ارتش‌ها در میدان نبرد با هم برخورد می‌کنند، این نبرد سرنوشت تاریخ را رقم خواهد زد. این جنگ شماست، فرصتی برای جاودانه کردن نامتان در تاریخ تراوین. اینجا می‌توانید تبدیل به افسانه شوید ...
	<br><br>
	<span style="font-size:60%; color:#666;"></span>
	<br><br>
	<b>شرایط لازم</b> <i>: برای دزدیدن نقشه‌ی ساخت، باید این شرایط را فراهم کنید:</i><br>
	<li> ارسال حمله (نه غارت) به دهکده‌ای که آرتیفکت دارد </li>
	<li> باید در نبرد پیروز شوید </li>
	<li> خزانه‌ای که آرتیفکت در آن نگهداری می‌شود باید تخریب شود </li>
	<li> حضور قهرمان در نبرد الزامی است تا بتواند آرتیفکت را جمع‌آوری کند </li>
	<li> سطح خزانه‌ی مورد نیاز: 10 </li>
	<br><br>
	پس حرکت کنید و آرتیفکت را به‌دست آورید! اگر حمله موفقیت‌آمیز باشد و آرتیفکت دزدیده شود، هنگامی‌که قهرمان آن را به خزانه‌ی شما بیاورد، توانایی ویژه‌ای فعال خواهد شد!
	<br><br>
	برای ساخت شگفتی جهان تا سطح 49 باید طرح ساخت را در اختیار داشته باشید، و برای ادامه‌ی ساخت از سطح 49 تا 100، یکی از دوستان اتحاد شما باید طرح دوم را داشته باشد تا بتوانید شگفتی جهان را تکمیل کنید!'
);
$lang['Footer'] = array(
	'Homepage' => 'صفحه اصلی',
	'Forum' => 'انجمن',
	'Links' => 'لینک‌ها',
	'FAQ' => 'سوالات متداول - پاسخ‌ها',
	'Terms' => 'شرایط',
	'Imprint' => 'حقایق'
);

$lang['Hero'] = array(
	'status01' => 'قهرمان در حال ماجراجویی است',
	'status02' => 'قهرمان در حال بازگشت است',
	'status03' => 'قهرمان مرده است',
	'status04' => 'قهرمان در حال دفاع در دهکده است',
	'status05' => 'قهرمان در حال حاضر در دهکده است',

	'adv00' => 'ماجراجویی جدید',
	'adv01' => 'زمان ماجراجویی',
	'adv02' => 'رسیدن به',
	'adv03' => 'بازگشت به',
	'adv04' => 'ساعت',
	'adv05' => 'به ماجراجویی',
	'adv06' => 'بازگشت',

	'Speed' => 'سرعت',
	'Attributes' => 'ویژگی‌ها',
	'saveChanges' => 'لطفاً تغییرات را ذخیره کنید',

	'FStrength' => 'قدرت مبارزه',
	'FHero' => 'فرم قهرمان',

	'OW01' => 'رسیدن به',
	'OW02' => 'در',
	'OW03' => 'شما می‌توانید پیشرفت ماجراجویی را در',
	'OW04' => 'نقطه گردهمایی ببینید',

	'Revive01' => 'خانه او در',
	'Revive02' => 'در دهکده احیا خواهد شد',
	'Revive03' => 'برای تغییر دهکده اصلی قهرمان یا احیا او در دهکده‌ای دیگر',
	'Revive04' => 'هزینه احیا',
	'Revive05' => 'قهرمان در حال احیا در',
	'Revive06' => 'زمان باقی‌مانده',
);

$lang['Map'] = array(
	'0' => 'نقشه',
	'1' => 'فیلتر',
	'2' => 'تأیید',
	'3' => 'مختصات',
	'4' => 'اتحاد',

	'5' => 'بازیکن',
	'6' => 'جمعیت',
	'7' => 'اتحاد',
	'8' => 'قبیله',
	'9' => 'دهکده',
	'10' => 'یک واحه خالی',
	'11' => 'یک واحه اشغالی',
	'12' => 'مختصات',
	'13' => 'بارگزاری',

	'14' => 'رومی',
	'15' => 'ژرمن',
	'16' => 'گال‌ها',
	'17' => 'ناتارها',
	'18' => 'ناتارها',
	'19' => 'مصری‌ها',
	'20' => 'هونی‌ها',

	'21' => 'دهکده ناتار',
	'22' => 'شما حمله را بدون تلفات پیروز شدید',
	'23' => 'شما حمله را با تلفات پیروز شدید',
	'24' => 'هیچ یک از سربازان شما فرار نکردند',
	'25' => 'شما دفاع را بدون تلفات پیروز شدید',
	'26' => 'شما دفاع را با تلفات پیروز شدید',
	'27' => 'دهکده هک شده است',
	'28' => 'شما دفاع را با تلفات پیروز شدید',

	'29' => 'چوب',
	'30' => 'سفال',
	'31' => 'آهن',
	'32' => 'غله',
);

$lang['quests']['achievements'] = array(
	'1' => array(
		'Title' => 'کامل کردن یک ماجراجویی',
		'Description' => 'قهرمان خود را برای یک ماجراجویی ارسال کنید. این مأموریت زمانی کامل می‌شود که قهرمان شما به مقصد برسد، حتی اگر در حین ماجراجویی زنده نماند. برای ارسال قهرمان، فقط کافی است روی آیکون نشان داده شده در تصویر کلیک کنید.<br><br>امتیاز این مأموریت یک‌بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۵ امتیاز دارد',
		'questIn' => array('questGive' => 5, 'Hard' => 'متوسط', 'needReq' => 'موجود بودن ماجراجویی'),
	),
	'2' => array(
		'Title' => 'غارت یک واحه خالی',
		'Description' => 'نیروهای خود را برای غارت یک واحه خالی بفرستید. این مأموریت زمانی کامل می‌شود که ارتش شما به مقصد برسد، حتی اگر در نبرد کشته شوند. استفاده از قفس‌ها برای جلوگیری از نبرد امتیازی به شما نمی‌دهد. می‌توانید نتیجه‌ی غارت را در شبیه‌ساز نبرد در نقطه گردهمایی محاسبه کنید.<br><br>امتیاز این مأموریت تا ۳ بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۳ امتیاز دارد',
		'questIn' => array('questGive' => 3, 'Hard' => 'سخت', 'needReq' => '(تعداد زیاد) نیرو'),
	),
	'3' => array(
		'Title' => 'غارت/حمله به دهکده ناتار',
		'Description' => 'نیروهای خود را برای غارت یا حمله به دهکده ناتار بفرستید. این مأموریت زمانی کامل می‌شود که ارتش شما به مقصد برسد، حتی اگر در نبرد کشته شود. قبل از اینکه به دهکده‌ای کنترل‌شده توسط قبیله ناتار حمله کنید، حداقل باید ۱۰۰۰۰۰ نیرو جمع‌آوری کرده باشید.<br><br>امتیاز این مأموریت تا ۳ بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۳ امتیاز دارد',
		'questIn' => array('questGive' => 9, 'Hard' => 'چالشی', 'needReq' => '(تعداد زیاد) نیرو'),
	),
	'4' => array(
		'Title' => 'برنده شدن در یک حراجی',
		'Description' => 'شرکت در حراجی به شما امکان می‌دهد دو بار برنده شوید - اول وقتی برنده حراج می‌شوید و آیتم مورد نظر را دریافت می‌کنید و دوم زمانی که امتیاز برای تراز پاداش‌های روزانه خود جمع می‌کنید. امتیازها پس از برنده شدن در هر حراجی به شما تعلق خواهند گرفت.<br><br>امتیاز این مأموریت تا ۱ بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۵ امتیاز دارد',
		'questIn' => array('questGive' => 9, 'Hard' => 'چالش‌برانگیز', 'needReq' => 'کامل کردن ۱۰ ماجراجویی'),
	),
	'5' => array(
		'Title' => 'کسب یا خرج کردن طلای صفر / ۳',
		'Description' => 'برای کسب امتیاز در این مأموریت، باید یا طلای خود را جمع کنید یا خرج کنید. انتخاب با شماست که چگونه و برای چه هدفی می‌خواهید از موجودی طلای خود بهره ببرید.<br><br>امتیاز این مأموریت تا ۳ بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۲ امتیاز دارد',
		'questIn' => array('questGive' => 6, 'Hard' => 'متوسط', 'needReq' => 'طلا'),
	),
	'6' => array(
		'Title' => 'ارتقاء یک ساختمان',
		'Description' => 'برای کسب امتیاز در این مأموریت، باید یکی از ساختمان‌های موجود را ارتقاء دهید یا ساختمان جدیدی بسازید. امتیاز پس از اتمام ساخت داده می‌شود.<br><br>امتیاز این مأموریت تا ۳ بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۴ امتیاز دارد',
		'questIn' => array('questGive' => 12, 'Hard' => 'متوسط', 'needReq' => 'منابع'),
	),
	'7' => array(
		'Title' => 'ارتقاء یک فیلد منابع',
		'Description' => 'برای کسب امتیاز در این مأموریت، باید یکی از فیلدهای منابع موجود را ارتقاء دهید یا فیلد جدیدی بسازید. امتیاز پس از اتمام ساخت داده می‌شود.<br><br>امتیاز این مأموریت تا ۳ بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۵ امتیاز دارد',
		'questIn' => array('questGive' => 15, 'Hard' => 'متوسط', 'needReq' => 'منابع'),
	),
	'8' => array(
		'Title' => 'ساخت ۲۰ واحد پیاده نظام از یک نوع در یک زمان',
		'Description' => 'برای کسب امتیاز در این مأموریت، باید همزمان ساخت ۲۰ واحد پیاده نظام در تیپ خود در خوابگاه را درخواست کنید. توجه داشته باشید که واحدهای در حال آموزش در صف انتظار امتیازی برای این مأموریت ندارند.<br><br>امتیاز این مأموریت تا ۳ بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۴ امتیاز دارد',
		'questIn' => array('questGive' => 12, 'Hard' => 'چالشی', 'needReq' => 'خوابگاه'),
	),
	'9' => array(
		'Title' => 'ساخت ۲۰ واحد سواره‌نظام از یک نوع در یک زمان',
		'Description' => 'برای کسب امتیاز در این مأموریت، باید همزمان ساخت ۲۰ واحد سواره‌نظام در اصطبل را درخواست کنید. توجه داشته باشید که واحدهای سواره‌نظام در حال آموزش در صف انتظار امتیازی ندارند.<br><br>امتیاز این مأموریت تا ۳ بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۴ امتیاز دارد',
		'questIn' => array('questGive' => 12, 'Hard' => 'چالشی', 'needReq' => 'اصطبل'),
	),
	'10' => array(
		'Title' => 'برگزاری جشن کوچک یا بزرگ',
		'Description' => 'در تالار شهر خود یک جشن کوچک یا بزرگ برگزار کنید. امتیاز وقتی داده می‌شود که جشن برگزار کنید. جشن‌های در حال اجرا امتیازی نمی‌دهند.<br><br>امتیاز این مأموریت تا ۳ بار در روز قابل کسب است.',
		'toDo' => 'این مأموریت ارزش + ۵ امتیاز دارد',
		'questIn' => array('questGive' => 15, 'Hard' => 'سخت', 'needReq' => 'تالار شهر'),
	),
);

$lang['Daily'] = array(
	'01' => 'کامل کردن یک ماجراجویی',
	'02' => 'غارت یک واحه خالی',
	'03' => 'غارت/حمله به دهکده ناتار',
	'04' => 'بردن یک حراجی',
	'05' => 'کسب یا خرج کردن طلا',
	'06' => 'ارتقاء یک ساختمان',
	'07' => 'ارتقاء یک فیلد منابع',
	'08' => 'ساخت ۲۰ واحد پیاده‌نظام از یک نوع در یک زمان',
	'09' => 'ساخت ۲۰ واحد سواره‌نظام از یک نوع در یک زمان',
	'10' => 'برگزاری جشن کوچک یا بزرگ',

	'Close' => 'بستن',
	'Overview' => 'نمای کلی',
	'PG' => 'امتیازهای اعطا شده برای این مأموریت:',
	'Difficulty' => 'درجه سختی',
	'Requirement' => 'نیازمندی',
	'CRewards' => 'دریافت پاداش',

	'Congrats01' => 'تبریک! شما امتیاز کافی برای دریافت پاداش را جمع‌آوری کرده‌اید!',
	'Congrats02' => 'با جمع‌آوری',
	'Congrats03' => 'امتیاز امروز، اکنون می‌توانید پاداش خود را دریافت کنید',
	'Congrats04' => 'پاداش روزانه شما به صورت تصادفی از بین این گزینه‌ها تعیین می‌شود',
	'Congrats05' => 'با جمع‌آوری',
	'Congrats06' => 'امتیاز امروز، شما پاداش زیر را دریافت می‌کنید',
);
// Definitions
define('markASRead', 'علامت زدن به عنوان خوانده شده');
define('rMessage', 'نوشتن پیام');
define('Ignored', 'بازیکنان نادیده گرفته شده');
define('Ignored01', 'برای نادیده گرفتن پیام‌ها از یک بازیکن خاص، به پروفایل او رفته و روی "نادیده گرفتن" کلیک کنید!');
define('Ignored02', 'نادیده گرفتن بازیکن.');
define('Ignored03', 'بازیکن نادیده گرفته خواهد شد.');
define('Ignored04', 'توقف نادیده گرفتن این بازیکن.');
define('Ignored05', 'پذیرفتن پیام‌ها از بازیکن.');

define("herostatus9", "در راه");
define("herostatus100", "در دهکده");
define("herostatus101", "قهرمان مرده است");
define("herostatus102", "قهرمان در قفس است");
define("herostatus103", "قهرمان در حال دفاع است");


// Profile Language Array
$lang['Profile'] = array(
	'00' => 'پروفایل بازیکن',
	'01' => 'جزئیات',
	'02' => 'تاریخ تولد',
	'03' => 'جنسیت',
	'04' => 'در دسترس نیست',
	'05' => 'مرد',
	'06' => 'زن',
);

// Alliance Language Array
$lang['Alliance'] = array(
	'00' => 'شما در هیچ اتحادی نیستید.',
);

// Logout Language Array
$lang['Logout'] = array(
	'01' => 'بازگشت به بازی',
	'02' => 'نام حساب یا آدرس ایمیل',
	'03' => 'رمز عبور',
	'04' => 'ورود',
);
