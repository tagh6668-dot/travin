<?php
if (!defined("HLXGUVENLIK")) {
    exit('OLDUS');
}
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<?php
$odemeler = $database->query('SELECT * FROM odemeler ORDER BY id DESC');
?>

<div class="card" style="direction: rtl; text-align: right; font-family: Tahoma, sans-serif;">
    <div class="card-header" style="background: #2b6cb0; color: white; font-weight: bold; padding: 12px;">
        📑 گزارش تراکنش‌ها و پرداخت‌های آنلاین (<?php echo is_array($odemeler) ? count($odemeler) : 0; ?> تراکنش)
    </div>
    <div class="card-body table-responsive" style="padding: 20px;">
        <table class="table table-bordered table-striped" id="odemeler" style="width:100%;">
            <thead>
                <tr style="background: #edf2f7;">
                    <th>#</th>
                    <th>کد رهگیری / Authority</th>
                    <th>ایمیل کاربر</th>
                    <th>توضیحات</th>
                    <th>درگاه</th>
                    <th>تعداد سکه</th>
                    <th>وضعیت</th>
                    <th>تاریخ و زمان</th>
                    <th>آی‌پی (IP)</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (is_array($odemeler) && count($odemeler) > 0) {
                foreach ($odemeler as $odeme) {
                    $status_badge = '';
                    $durum = isset($odeme["durum"]) ? strtoupper($odeme["durum"]) : '';
                    if ($durum === 'SUCCESS' || $durum === 'OK') {
                        $status_badge = '<span class="badge badge-success" style="background:#38a169; color:white; padding:4px 8px; border-radius:4px;">موفق</span>';
                    } else if ($durum === 'PENDING') {
                        $status_badge = '<span class="badge badge-warning" style="background:#dd6b20; color:white; padding:4px 8px; border-radius:4px;">در انتظار</span>';
                    } else if ($durum === 'CANCELLED') {
                        $status_badge = '<span class="badge badge-secondary" style="background:#718096; color:white; padding:4px 8px; border-radius:4px;">انصراف</span>';
                    } else {
                        $status_badge = '<span class="badge badge-danger" style="background:#e53e3e; color:white; padding:4px 8px; border-radius:4px;">' . htmlspecialchars($durum ? $durum : 'ناموفق') . '</span>';
                    }

                    echo '
                    <tr>
                        <td>' . $odeme["id"] . '</td>
                        <td style="font-family:monospace; font-size:12px;">' . htmlspecialchars($odeme["anahtar"]) . '</td>
                        <td>' . htmlspecialchars($odeme["email"]) . '</td>
                        <td>' . htmlspecialchars($odeme["aciklama"]) . '</td>
                        <td><span class="badge badge-info" style="background:#3182ce; color:white; padding:3px 6px; border-radius:3px;">' . htmlspecialchars($odeme["tip"]) . '</span></td>
                        <td><strong>' . number_format($odeme["amount"]) . '</strong></td>
                        <td>' . $status_badge . '</td>
                        <td>' . (is_numeric($odeme["time"]) ? date("Y-m-d H:i:s", $odeme["time"]) : $odeme["time"]) . '</td>
                        <td style="direction:ltr; font-family:monospace;">' . htmlspecialchars($odeme["ip"]) . '</td>
                    </tr>';
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#odemeler').DataTable({
            "language": {
                "search": "جستجو:",
                "lengthMenu": "نمایش _MENU_ مورد در هر صفحه",
                "zeroRecords": "موردی یافت نشد",
                "info": "نمایش صفحه _PAGE_ از _PAGES_",
                "infoEmpty": "هیچ داده‌ای در دسترس نیست",
                "infoFiltered": "(فیلتر شده از _MAX_ کل رکوردها)",
                "paginate": {
                    "first": "اول",
                    "last": "آخر",
                    "next": "بعدی",
                    "previous": "قبلی"
                }
            }
        });
    });
</script>
