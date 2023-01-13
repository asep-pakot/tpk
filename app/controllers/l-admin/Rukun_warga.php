<?php
/**
 * - This file was created using CoGen
 * 
 * - Date created : 2023-01-11 | 07:13
 * - Author       : CiFireCMS
 * - License      : MIT License
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Rukun_warga extends Backend_Controller {
	
	public $mod = 'rukun-warga';

	public function __construct() 
	{
		parent::__construct();
		
		$this->load->model("mod/rukun_warga_model");
		$this->meta_title("Rukun Warga");
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

					foreach ($this->rukun_warga_model->datatable('_data', 'data') as $val) 
					{
						$row = [];
						// checkbox (all row)
						$row[] = '<div class="text-center"><input type="checkbox" class="row_data" value="'. encrypt($val['id']) .'"></div>';
						$row[] = $val['id'];
						$row[] = $val['kecamatan'];
						$row[] = $val['desa'];
						$row[] = $val['erw'];
						$row[] = '<div class="text-center"><div class="btn-group">
									<button type="button" onclick="location.href=\''. admin_url($this->mod."/edit/".$val['id']) .'\'" class="btn btn-xs btn-white" data-toggle="tooltip" data-placement="top" data-title="'. lang_line('button_edit') .'"><i class="cificon licon-edit"></i></button>
									<button type="button" class="btn btn-xs btn-white delete_single" data-toggle="tooltip" data-placement="top" data-title="'.lang_line('button_delete').'" data-pk="'. encrypt($val['id']) .'"><i class="cificon licon-trash-2"></i></button>
								</div></div>';
						$data[] = $row;
					} // endforeach.

					$this->json_output(['data' => $data, 'recordsFiltered' => $this->rukun_warga_model->datatable('_data', 'count')]);
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
					'field' => 'kecamatan',
					'label' => 'Kecamatan',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'desa',
					'label' => 'Desa',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'erw',
					'label' => 'Erw',
					'rules' => 'trim'
				)));

				$this->form_validation->set_rules(array(array(
					'field' => 'kode_rw',
					'label' => 'Kode Rw',
					'rules' => 'trim'
				)));

				if ($this->form_validation->run())
				{
					$data_isert = array(
						'kecamatan' => xss_filter($this->input->post('kecamatan')),
						'desa' => xss_filter($this->input->post('desa')),
						'erw' => xss_filter($this->input->post('erw')),
						'kode_rw' => xss_filter($this->input->post('kode_rw')),
					);

					if ($this->rukun_warga_model->insert($data_isert))
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
			$cek_id = $this->rukun_warga_model->cek_id($id_edit);

			if ($cek_id == 1) 
			{
				if ($this->input->method() == 'post')
				{
					$this->form_validation->set_rules(array(array(
						'field' => 'kecamatan',
						'label' => 'Kecamatan',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'desa',
						'label' => 'Desa',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'erw',
						'label' => 'Erw',
						'rules' => 'trim'
					)));

					$this->form_validation->set_rules(array(array(
						'field' => 'kode_rw',
						'label' => 'Kode Rw',
						'rules' => 'trim'
					)));

					if ( $this->form_validation->run() )
					{
						$data_update = array(

							'kecamatan' => xss_filter($this->input->post('kecamatan')),
							'desa' => xss_filter($this->input->post('desa')),
							'erw' => xss_filter($this->input->post('erw')),
							'kode_rw' => xss_filter($this->input->post('kode_rw')),
						);

						if ($this->rukun_warga_model->update($id_edit, $data_update))
						{
							$this->cifire_alert->set($this->mod, 'info', 'Data has been successfully updated');
						}
						else
						{
							$this->cifire_alert->set($this->mod, 'danger', "Oups..! Some error occurred.<br>Please complete the data correctly");
						}
					}
				}
				$data_edit = $this->rukun_warga_model->get_data_edit($id_edit);
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
					$this->rukun_warga_model->delete($pk);
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