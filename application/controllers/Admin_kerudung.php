<?php 
	class Admin_kerudung extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('kerudung');
			$data['content']='admin/kerudung/kerudung';
			$this->load->view('admin/index',$data);
		}
		function add(){
			$data['content']='admin/kerudung/add';
			$this->load->view('admin/index',$data);
		}
		function save(){
			$jenis = $this->input->post("jenis");
			$bahan = $this->input->post("bahan");
			$warna =   $this->input->post("warna");

			$config = array(
				'upload_path'=> './upload/hijab/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('kerudung')) {
			$data=array(
				'jenis'=>$jenis,
				'bahan'=>$bahan,
				'warna'=>$warna,
				'kerudung'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('kerudung',$data);
						redirect('index.php/Admin_kerudung');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('kerudung',['kerudung_id'=>$id])->row();
			$data['content']='admin/kerudung/edit';
			$this->load->view('admin/index',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$jenis = $this->input->post("jenis");
			$bahan = $this->input->post("bahan");
			$warna =   $this->input->post("warna");


			$config = array(
				'upload_path'=> './upload/hijab/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('kerudung')) {
			$data=array(
				'jenis'=>$jenis,
				'bahan'=>$bahan,
				'warna'=>$warna,
				'kerudung'=> $this->upload->data('file_name')
			);
						$this->db->where('kerudung_id',$id);
						$this->db->update('kerudung',$data);
						redirect('index.php/Admin_kerudung');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('kerudung',['kerudung_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/Admin_kerudung'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>