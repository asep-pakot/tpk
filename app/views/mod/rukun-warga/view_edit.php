<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-inner">
	<div class="d-sm-flex align-items-center justify-content-between pd-b-20">
		<div class="pageheader pd-t-20 pd-b-0">
			<div class="d-flex justify-content-between">
				<div class="clearfix">
					<div class="breadcrumb pd-0 pd-b-10 mg-0">
						<a href="#" class="breadcrumb-item"><?=lang_line('ui_dashboard');?></a>
						<a href="#" class="breadcrumb-item"><?=lang_line('ui_component');?></a>
						<a href="#" class="breadcrumb-item">Rukun Warga</a>
						<a href="#" class="breadcrumb-item">Edit Data</a>
					</div>
					<h4 class="pd-0 mg-0 tx-20">Rukun Warga</h4>
				</div>
			</div>
		</div>
		<div class="mg-t-15">
			<button type="button" class="btn btn-md pd-x-15 btn-white btn-uppercase" onclick="window.location='<?=admin_url($this->mod);?>'"><i data-feather="arrow-left" class="mr-2"></i><?=lang_line('button_back');?></button>
		</div>
	</div>

	<div>
		<?=$this->cifire_alert->show($this->mod);?>
		<div class="ajax_alert" style="display:none;"></div>
	</div>

	<div class="card">
		<div class="card-header">
			<h6 class="lh-5 mg-b-0">Edit Data</h6>
		</div>
		<?php 
			echo form_open('','autocomplete="off"');
			echo form_hidden('act', '1');
		?>
		<div class="card-body">
			<!-- input text | Kecamatan -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Kecamatan</label>
				<div class="col-md-10">
					<input type="text" name="kecamatan" value="<?=$data_row['kecamatan'];?>" class="form-control" />
				</div>
			</div>
			<!--/ input text | Kecamatan -->
			<!-- input text | Desa -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Desa</label>
				<div class="col-md-10">
					<input type="text" name="desa" value="<?=$data_row['desa'];?>" class="form-control" />
				</div>
			</div>
			<!--/ input text | Desa -->
			<!-- input text | Erw -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Erw</label>
				<div class="col-md-10">
					<input type="text" name="erw" value="<?=$data_row['erw'];?>" class="form-control" />
				</div>
			</div>
			<!--/ input text | Erw -->
			<!-- input text | Kode Rw -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Kode Rw</label>
				<div class="col-md-10">
					<input type="text" name="kode_rw" value="<?=$data_row['kode_rw'];?>" class="form-control" />
				</div>
			</div>
			<!--/ input text | Kode Rw -->
			</div> <!-- card-body -->
			<div class="card-footer">
				<button type="submit" class="btn btn-lg btn-primary mr-2"><i class="cificon licon-save mr-2"></i><?=lang_line('button_save');?></button>
			</div>
		<?=form_close();?>
	</div> <!-- card -->
</div> <!-- page-inner -->