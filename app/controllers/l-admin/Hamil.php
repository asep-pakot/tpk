<?php
/**
 * - This file was created using CoGen
 * 
 * - Date created : 2023-01-12 | 05:45
 * - Author       : CiFireCMS
 * - License      : MIT License
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Hamil extends Backend_Controller {
	
	public $mod = 'hamil';

	public function __construct() 
	{
		parent::__construct();
		
		$this->load->model("mod/hamil_model");
		$this->meta_title("Hamil");
	}


	public function index()
	{
		if ($this->role->i('read'))
		{
			if ($this->input->is_ajax_request()) 
			{
				if ($this->input->post('act')=='delete') {
					return $this->_delete();
				}
				else
				{
					$data = array();

					foreach ($this->hamil_model->datatable('_data', 'data') as $val) 
					{
						$row = [];
						// checkbox (all row)
						$row[] = '<div class="text-center"><input type="checkbox" class="row_data" value="'. encrypt($val['id']) .'"></div>';
						$row[] = $val['id'];
						$row[] = $val['nama_kk'];
						$row[] = $val['nama_bumil'];
						$row[] = $val['renc_lahir'];
						$row[] = '<div class="text-center"><div class="btn-group">
									<button type="button" onclick="location.href=\''. admin_url($this->mod."/edit/".$val['id']) .'\'" class="btn btn-xs btn-white" data-toggle="tooltip" data-placement="top" data-title="'. lang_line('button_edit') .'"><i class="cificon licon-edit"></i></button>
									<button type="button" class="btn btn-xs btn-white delete_single" data-toggle="tooltip" data-placement="top" data-title="'.lang_line('button_delete').'" data-pk="'. encrypt($val['id']) .'"><i class="cificon licon-trash-2"></i></button>
								</div></div>';
						$data[] = $row;
					} // endforeach.

					$this->json_output(['data' => $data, 'recordsFiltered' => $this->hamil_model->datatable('_data', 'count')]);
				}

			}
			else
			{
				$this->render_view('view_index');
			}
		}
		else
		{
			$this->render_403();
		}
	}


	public function add()
	{
		if ($this->role->i('write') ) 
		{
			if ($this->input->method() == 'post')
			{
				$this->form_validation->set_rules(array(array(
					'field' => 'id_user',
					'label' => 'Id User',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'id_kec',
					'label' => 'Id Kec',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'id_desa',
					'label' => 'Id Desa',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'id_rw',
					'label' => 'Id Rw',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'id_rt',
					'label' => 'Id Rt',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'tanggal',
					'label' => 'Tanggal',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'rw_sasaran',
					'label' => 'Rw Sasaran',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'rt_sasaran',
					'label' => 'Rt Sasaran',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'nama_kk',
					'label' => 'Nama Kk',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'nik_kk',
					'label' => 'Nik Kk',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'nama_bumil',
					'label' => 'Nama Bumil',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'no_wa',
					'label' => 'No Wa',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'renc_hamil',
					'label' => 'Renc Hamil',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'usia_kand',
					'label' => 'Usia Kand',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'renc_lahir',
					'label' => 'Renc Lahir',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'materi',
					'label' => 'Materi',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'photo',
					'label' => 'Photo',
					'rules' => 'trim'
				)));

				if ($this->form_validation->run())
				{
					$data_isert = array(
						'id_user' => xss_filter($this->input->post('id_user')),
						'id_kec' => xss_filter($this->input->post('id_kec')),
						'id_desa' => xss_filter($this->input->post('id_desa')),
						'id_rw' => xss_filter($this->input->post('id_rw')),
						'id_rt' => xss_filter($this->input->post('id_rt')),
						'tanggal' => xss_filter($this->input->post('tanggal')),
						'rw_sasaran' => xss_filter($this->input->post('rw_sasaran')),
						'rt_sasaran' => xss_filter($this->input->post('rt_sasaran')),
						'nama_kk' => xss_filter($this->input->post('nama_kk')),
						'nik_kk' => xss_filter($this->input->post('nik_kk')),
						'nama_bumil' => xss_filter($this->input->post('nama_bumil')),
						'no_wa' => xss_filter($this->input->post('no_wa')),
						'renc_hamil' => xss_filter($this->input->post('renc_hamil')),
						'usia_kand' => xss_filter($this->input->post('usia_kand')),
						'renc_lahir' => xss_filter($this->input->post('renc_lahir')),
						'materi' => xss_filter($this->input->post('materi')),
						'photo' => xss_filter($this->input->post('photo')),
					);

					if ($this->hamil_model->insert($data_isert))
					{
						$this->cifire_alert->set($this->mod, 'info', 'Data has been successfully added');
						redirect(admin_url($this->mod),'refresh');
					}
					else
					{
						$this->cifire_alert->set($this->mod, 'danger', "Oups..! Some error occurred.<br>Please complete the data correctly");
					}
				}
			}
			else
			{
				$this->render_view('view_add');
			}
		}
		else
		{
			$this->render_403();
		}
	}


	public function edit($id_data = '')
	{
		if ($this->role->i('modify'))
		{
			$id_edit = xss_filter($id_data, 'sql');
			$cek_id = $this->hamil_model->cek_id($id_edit);

			if ($cek_id == 1) 
			{
				if ($this->input->method() == 'post')
				{
					$this->form_validation->set_rules(array(array(
						'field' => 'id_user',
						'label' => 'Id User',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'id_kec',
						'label' => 'Id Kec',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'id_desa',
						'label' => 'Id Desa',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'id_rw',
						'label' => 'Id Rw',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'id_rt',
						'label' => 'Id Rt',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'tanggal',
						'label' => 'Tanggal',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'rw_sasaran',
						'label' => 'Rw Sasaran',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'rt_sasaran',
						'label' => 'Rt Sasaran',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'nama_kk',
						'label' => 'Nama Kk',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'nik_kk',
						'label' => 'Nik Kk',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'nama_bumil',
						'label' => 'Nama Bumil',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'no_wa',
						'label' => 'No Wa',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'renc_hamil',
						'label' => 'Renc Hamil',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'usia_kand',
						'label' => 'Usia Kand',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'renc_lahir',
						'label' => 'Renc Lahir',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'materi',
						'label' => 'Materi',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'photo',
						'label' => 'Photo',
						'rules' => 'trim'
					)));

					if ( $this->form_validation->run() )
					{
						$data_update = array(

							'id_user' => xss_filter($this->input->post('id_user')),
							'id_kec' => xss_filter($this->input->post('id_kec')),
							'id_desa' => xss_filter($this->input->post('id_desa')),
							'id_rw' => xss_filter($this->input->post('id_rw')),
							'id_rt' => xss_filter($this->input->post('id_rt')),
							'tanggal' => xss_filter($this->input->post('tanggal')),
							'rw_sasaran' => xss_filter($this->input->post('rw_sasaran')),
							'rt_sasaran' => xss_filter($this->input->post('rt_sasaran')),
							'nama_kk' => xss_filter($this->input->post('nama_kk')),
							'nik_kk' => xss_filter($this->input->post('nik_kk')),
							'nama_bumil' => xss_filter($this->input->post('nama_bumil')),
							'no_wa' => xss_filter($this->input->post('no_wa')),
							'renc_hamil' => xss_filter($this->input->post('renc_hamil')),
							'usia_kand' => xss_filter($this->input->post('usia_kand')),
							'renc_lahir' => xss_filter($this->input->post('renc_lahir')),
							'materi' => xss_filter($this->input->post('materi'), 'xss'),
							'photo' => xss_filter($this->input->post('photo')),
						);

						if ($this->hamil_model->update($id_edit, $data_update))
						{
							$this->cifire_alert->set($this->mod, 'info', 'Data has been successfully updated');
						}
						else
						{
							$this->cifire_alert->set($this->mod, 'danger', "Oups..! Some error occurred.<br>Please complete the data correctly");
						}
					}
				}
				$data_edit = $this->hamil_model->get_data_edit($id_edit);
				$this->vars['data_row'] = $data_edit;
				$this->render_view('view_edit');
			}
			else
			{
				$this->render_404();
			}
		}
		else
		{
			$this->render_403();
		}
	}


	private function _delete()
	{
		if ($this->input->is_ajax_request())
		{
			if ($this->role->i('delete'))
			{
				$data = $this->input->post('data');

				foreach ($data as $key)
				{
					$pk = xss_filter(decrypt($key),'sql');
					$this->hamil_model->delete($pk);
				}

				$response['success'] = true;
				$this->json_output($response);
			}
			else
			{
				$response['success'] = false;
				$this->json_output($response);
			}
		}
		else
		{
			show_403();
		}
	}
} // End Class.