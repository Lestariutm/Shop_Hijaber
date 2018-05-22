<?php 
	class Admin_busana extends CI_Controller{
		public function index(){
			$data['query']=$this->db->get('busana_muslim');
			$data['content']='admin/busana/busana';
			$this->load->view('admin/index',$data);
		}
		function add(){
			$data['content']='admin/busana/add';
			$this->load->view('admin/index',$data);
		}
		function save(){
			$bahan = $this->input->post("bahan");
			$ukuran =   $this->input->post("ukuran");

			$config = array(
				'upload_path'=> './upload/busana/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('busana')) {
			$data=array(
				'bahan'=>$bahan,
				'ukuran'=>$ukuran,
				'busana'=> $this->upload->data('file_name')
			);
			
						$this->db->insert('busana_muslim',$data);
						redirect('index.php/Admin_busana');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function edit($id){
			$data['query']=$this->db->get_where('busana_muslim',['busana_id'=>$id])->row();
			$data['content']='admin/busana/edit';
			$this->load->view('admin/index',$data);
		}
		function update(){
			$id =$this->input->post("id");
			$bahan = $this->input->post("bahan");
			$ukuran =   $this->input->post("ukuran");

			$config = array(
				'upload_path'=> './upload/busana/',
				'allowed_types'=> 'png|jpg|jpeg'
			);
			//echo "<script>alert('".$config['allowed_types']."')</script>";
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('gambar')) {
			$data=array(
				'bahan'=>$bahan,
				'ukuran'=>$ukuran,				
				'busana'=> $this->upload->data('file_name')
			);
						$this->db->where('busana_id',$id);
						$this->db->update('busana_muslim',$data);
						redirect('index.php/Admin_busana');
						
				}else{
					echo $this->upload->display_errors();
				}
		}
		function hapus($id){
			if($this->db->delete('busana_muslim',['busana_id'=>$id])){
				?>
				<script type="text/javascript">
					alert("Data Berhasil di hapus");
					window.location="<?php echo base_url('index.php/Admin_busana'); ?>";
				</script>
				<?php
			}
		}
	}
 ?>