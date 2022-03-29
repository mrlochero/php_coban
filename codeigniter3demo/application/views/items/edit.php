<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Sửa Item</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="<?php echo base_url('item');?>"> Quay lại</a>
		</div>
	</div>
</div>
<form method="post" action="<?php echo base_url('item/update/'.$item->id);?>">
	<?php


	if ($this->session->flashdata('errors')){
		echo '<div class="alert alert-danger">';
		echo $this->session->flashdata('errors');
		echo "</div>";
	}


	?>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Tiêu đề:</strong>
				<input type="text" name="title" class="form-control" value="<?php echo $item->title; ?>" >
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Mô tả:</strong>
				<textarea name="description" class="form-control"><?php echo $item->description; ?></textarea>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Lưu</button>
		</div>
	</div>
</form>