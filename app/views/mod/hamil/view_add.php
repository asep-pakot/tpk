<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-inner">
	<div class="d-sm-flex align-items-center justify-content-between pd-b-20">
		<div class="pageheader pd-t-20 pd-b-0">
			<div class="d-flex justify-content-between">
				<div class="clearfix">
					<div class="breadcrumb pd-0 pd-b-10 mg-0">
						<a href="#" class="breadcrumb-item"><?=lang_line('ui_dashboard');?></a>
						<a href="#" class="breadcrumb-item"><?=lang_line('ui_component');?></a>
						<a href="#" class="breadcrumb-item">Hamil</a>
						<a href="#" class="breadcrumb-item">Add Data</a>
					</div>
					<h4 class="pd-0 mg-0 tx-20">Hamil</h4>
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
			<h6 class="lh-5 mg-b-0">Add Data</h6>
		</div>
		<?php 
			echo form_open('','autocomplete="off" class="form-bordered"');
			echo form_hidden('act', 'add');
		?>
		<div class="card-body">
			<!-- input text | Id User -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Id User</label>
				<div class="col-md-10">
					<input type="text" name="id_user"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Id User -->
			<!-- input text | Id Kec -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Id Kec</label>
				<div class="col-md-10">
					<input type="text" name="id_kec"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Id Kec -->
			<!-- input text | Id Desa -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Id Desa</label>
				<div class="col-md-10">
					<input type="text" name="id_desa"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Id Desa -->
			<!-- input text | Id Rw -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Id Rw</label>
				<div class="col-md-10">
					<input type="text" name="id_rw"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Id Rw -->
			<!-- input text | Id Rt -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Id Rt</label>
				<div class="col-md-10">
					<input type="text" name="id_rt"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Id Rt -->
			<!-- input date | Tanggal -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Tanggal</label>
				<div class="col-md-10">
					<div class="input-group" style="max-width:250px;">
						<input id="date-picker" type="text" name="tanggal" value="<?=date('Y-m-d');?>" class="form-control" placeholder="yyyy-mm-dd" required/>
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
				</div>
			</div>
			<!--/ input date | Tanggal -->
			<!-- input text | Rw Sasaran -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Rw Sasaran</label>
				<div class="col-md-10">
					<input type="text" name="rw_sasaran"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Rw Sasaran -->
			<!-- input text | Rt Sasaran -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Rt Sasaran</label>
				<div class="col-md-10">
					<input type="text" name="rt_sasaran"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Rt Sasaran -->
			<!-- input text | Nama Kk -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Nama Kk</label>
				<div class="col-md-10">
					<input type="text" name="nama_kk"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Nama Kk -->
			<!-- input text | Nik Kk -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Nik Kk</label>
				<div class="col-md-10">
					<input type="text" name="nik_kk"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Nik Kk -->
			<!-- input text | Nama Bumil -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Nama Bumil</label>
				<div class="col-md-10">
					<input type="text" name="nama_bumil"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Nama Bumil -->
			<!-- input text | No Wa -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">No Wa</label>
				<div class="col-md-10">
					<input type="text" name="no_wa"  class="form-control" />
				</div>
			</div>
			<!--/ input text | No Wa -->
			<!-- input select ENUM | Renc Hamil -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Renc Hamil</label>
				<div class="col-md-10">
					<select name="renc_hamil" class="form-control" style="max-width:400px;" required>
						<option value="3" style="display:none;">3</option><option value="3">3</option>
					</select>
				</div>
			</div>
			<!--/ input select ENUM | Renc Hamil -->
			<!-- input text | Usia Kand -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Usia Kand</label>
				<div class="col-md-10">
					<input type="text" name="usia_kand"  class="form-control" />
				</div>
			</div>
			<!--/ input text | Usia Kand -->
			<!-- input select ENUM | Renc Lahir -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Renc Lahir</label>
				<div class="col-md-10">
					<select name="renc_lahir" class="form-control" style="max-width:400px;" required>
						<option value="3" style="display:none;">3</option><option value="3">3</option>
					</select>
				</div>
			</div>
			<!--/ input select ENUM | Renc Lahir -->
			<!-- input number | Materi -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Materi</label>
				<div class="col-md-10">
					<input type="number" name="materi"  class="form-control" required />
				</div>
			</div>
			<!--/ input number | Materi -->
			<!-- input browse filemanager | Photo -->
			<div class="form-group row">
				<label class="col-form-label col-md-2">Photo</label>
				<div class="col-md-10">
					<div class="input-group" style="max-width:400px;">
						<div class="input-group-prepend">
							<button type="button" id="browse-filemanager" href="<?=site_url('plugins/filemanager/dialog.php?type=1&relative_url=1&field_id=pictures&sort_by=date&descending=1&akey='.fmkey());?>" class="btn btn-default">Browse</button>
						</div>
						<input id="prv" type="text"  class="form-control" placeholder="Choose file..." readonly />
					</div>
					<input id="pictures" type="hidden" name="photo"  class="form-control" />
				</div>
			</div>
			<!-- input browse filemanager | Photo -->
			</div> <!-- card-body -->
			<div class="card-footer">
				<button type="submit" class="btn btn-lg btn-primary mr-2"><i class="cificon licon-send mr-2"></i><?=lang_line('button_submit');?></button>
			</div>
		<?=form_close();?>
	</div> <!-- card -->
</div> <!-- page-inner -->