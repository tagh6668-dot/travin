<?php
if(!defined("HLXGUVENLIK"))
	exit('OLDU');
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<?php
$packages = $database->query('SELECT * FROM packages');
?>

<div class="card" style="direction: rtl; text-align: right; font-family: Tahoma, sans-serif;">
	<div class="card-header" style="background: #2b6cb0; color: white; font-weight: bold; padding: 12px;">
		📦 بسته‌های سکه و شارژ حساب (<?php echo is_array($packages) ? count($packages) : 0;?> بسته)
	</div>
	<div class="card-body table-responsive" style="padding: 20px;">
		<div class="col-sm-12 text-center mb-3">
			<button class="btn btn-primary btn-hlx" data-action="yeniPaket">➕ افزودن بسته جدید</button>
		</div>
<table class="table table-bordered table-striped" id="packages" style="width: 100%;">
	<thead>
	<tr style="background: #edf2f7;">
		<th>نام بسته</th>
		<th>قیمت (تومان)</th>
		<th>تعداد سکه</th>
		<th>گردونه هدیه</th>
		<th>نوع بسته</th>
		<th>عملیات</th>
	</tr>
	</thead>
<tbody>
<?php
if($packages && is_array($packages)){
	foreach($packages as $paket){
		echo '
		<tr>
				<td>'.htmlspecialchars($paket["name"]).'</td>
				<td>'.number_format($paket["price"]).' تومان</td>
				<td><strong>'.number_format($paket["amount"]).'</strong></td>
				<td>'.($paket["cark"] ? number_format($paket["cark"])." شانس گردونه" : "ندارد").'</td>
				<td>'.($paket["tip"]=="gold" ? "<span class='badge badge-warning' style='background:#d69e2e; color:white; padding:4px 8px;'>سکه طلا</span>" : "<span class='badge badge-info'>گردونه</span>").'</td>
				<td>
					<button class="btn btn-sm btn-success btn-hlx" data-action="paketCek" data-id="'.$paket["id"].'"><i class="fas fa-edit"></i> ویرایش</button>
					<button class="btn btn-sm btn-danger btn-hlx" data-action="paketSil" data-id="'.$paket["id"].'"><i class="fas fa-trash"></i> حذف</button>
				</td>
		</tr>
		';
	}
}
?>
</tbody>
</table>
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="paketForm" style="direction: rtl; text-align: right;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">افزودن / ویرایش بسته</h5>
        <button type="button" class="close ml-0 mr-auto" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form id="islemForm">
		<div class="modal-body">
			<input type="hidden" name="id" id="id" value="0">
			<input type="hidden" name="ajaxAction" id="ajaxAction" value="paketKaydet">
			<div class="form-group">
				<label>نام بسته</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="مثال: بسته برنزی" required>
			</div>
			<div class="form-group">
				<label>قیمت (تومان)</label>
				<input type="number" class="form-control" name="price" id="price" step="1" required>
			</div>
			<div class="form-group">
				<label>تعداد سکه</label>
				<input type="number" class="form-control" name="amount" id="amount" step="1" required>
			</div>
			<div class="form-group">
				<label>تعداد بانس گردونه</label>
				<input type="number" class="form-control" name="cark" id="cark" step="1" value="0" required>
			</div>
			<div class="form-group">
				<label>نوع بسته</label>
				<select class="custom-select" name="tip" id="tip" required>
					<option value="gold">بسته طلا (سکه)</option>
					<option value="cark">بسته گردونه</option>
				</select>
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">ذخیره بسته</button>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
		</div>
	  </form>
    </div>
  </div>
</div>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script> 
	$(document).ready(function() {
		$('#packages').DataTable({
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
	$(document).on('click','.btn-hlx', function (e) {
		switch($(this).data('action')){
			case 'yeniPaket':
				$('.modal-title').text('افزودن بسته جدید');
				$('#name').val('');
				$('#price').val('');
				$('#amount').val('');
				$('#cark').val('0');
				$('#tip').val('gold');
				$('#id').val(0);
				$('#paketForm').modal('show');
			break;
			case 'paketCek':
				$.ajax({
					method: "POST",
					url: "ajax.php",
					data: {"ajaxAction":"paketCek","id":$(this).data('id')},
					success: function(data){
						data = jQuery.parseJSON(data);
						if(data.status){
							$('.modal-title').text('ویرایش بسته سکه');
							$('#name').val(data.data.name);
							$('#price').val(data.data.price);
							$('#amount').val(data.data.amount);
							$('#cark').val(data.data.cark);
							$('#tip').val(data.data.tip);
							$('#id').val(data.data.id);
							$('#paketForm').modal('show');
						}else{
							alert(data.message);
						}
					},
					error: function(xhr){
						alert("خطا در برقراری ارتباط");
					}
				});
			break;
			case 'paketSil':
				if (confirm("آیا از حذف این بسته اطمینان دارید؟") == true) {
					$.ajax({
						method: "POST",
						url: "ajax.php",
						data: {"ajaxAction":"paketSil","id":$(this).data('id')},
						success: function(data){
							data = jQuery.parseJSON(data);
							if(data.status){
								location.reload();
							}else{
								alert(data.message);
							}
						},
						error: function(xhr){
							alert("خطا در برقراری ارتباط");
						}
					});
				}
			break;
			default :
				return false;
			break;
		}
	});
	
	$( "#islemForm").submit(function( event ) {
		event.preventDefault();
		$.ajax({
			url: "ajax.php",
			type: 'POST',
			data: $(this).serialize(),
			success: function (data) {
				data = jQuery.parseJSON(data);
				if(data.status){
					location.reload(); 
				}else{
					alert(data.message);
				}
			},
			error: function (hata) {
				alert("خطای غیرمنتظره‌ای رخ داد!");
			}
		});
	});
</script>
