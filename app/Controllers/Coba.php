<?php

namespace App\Controllers;

use \App\Models\CobaModel; // JIKA KONEK DB DENGAN MODEL
class Coba extends BaseController
{	
	protected $KomikModel;
	public function __construct()
	{
		$this->KomikModel = new CobaModel();
	}

	public function index()
	{
		return view('welcome_message');
	}

	public function ckeditor(){
		return view('pages/ckeditor');
	}
	public function ckeditor4(){
		return view('pages/ckeditor4');
	}

	public function select($nama = false) {
		// ====KONEK DB TANPA MODEL ====
		// $db = \Config\Database::connect();
		// $komik = $db->query("SELECT * FROM komik")->getResultArray();
		// dd($komik);

		if ($nama == false) {
			// ==== KONEK DENGAN MODEL ====
				//  $KomikModel = new \App\Models\CobaModel(); //alternatif
			// $KomikModel = new CobaModel(); //PINDAH KE KONTRUCT BUAT JADI GLOBAL VARIABEL
			$komik = $this->KomikModel->findAll();
		}else{
			// ======= SELECT WITH WHERE KONDISI ============
			$komik = $this->KomikModel->where(['nama'=>$nama])->first();
		}
		dd($komik);


	}

	public function insert(){
		// dd($this->request->getVar());
		$slug = url_title($this->request->getVar('nama'),'-',true);
		$this->KomikModel->save([
			'nama'=>$this->request->getVar('nama'),
			'isi'=>$this->request->getVar('isi')
		]);

		session()->setFlashdata('pesan','berhasil');

		return redirect()->to('/coba/tambah');
	}

	public function tambah(){
		return view('pages/tambah');
	}

	public function unggahgambar(){
		/* nama file : unggahgambar.php */
		if(isset($_FILES['upload']['name'])) {
			$file=$_FILES['upload']['tmp_name'];

			$file_name=$_FILES['upload']['name'];
		
			$file_name_array=explode(".", $file_name);
		
			$extension=end($file_name_array);
		
			$new_image_name=rand() . '.' . $extension;
		
			chmod('uploadimage', 0777);
		
			$allowed_extension=array("jpg", "gif", "png");
		
			if(in_array($extension, $allowed_extension)) {
			
					move_uploaded_file($file, 'uploadimage/' . $new_image_name);
				
					$function_number=$_GET['CKEditorFuncNum'];
			
					$url=base_url('uploadimage/').'/'. $new_image_name;
			
					$message='';
					
					$hasil = array(
						'uploaded'=>1,
						'fileName'=>$new_image_name,
						'url'=>$url,
						'message'=>''
					);
					// echo json_encode($hasil);
					echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
			}
		}
	}

	public function uploadck5(){
		if(isset($_FILES['upload']['name'])) {
			$file=$_FILES['upload']['tmp_name'];
			$file_name=$_FILES['upload']['name'];
			$file_name_array=explode(".", $file_name);
			$extension=end($file_name_array);
			$new_image_name=rand() . '.' . $extension;
			
			$nama = $file_name;
			$file_public_addr =base_url('uploadimage/')."/".$nama;
			// echo $file_public_addr;
			// die();
			$success=move_uploaded_file($file, 'uploadimage/' . $nama);
			// $success=move_uploaded_file($_FILES["upload"]["tmp_name"],SYS_EXT.$file_public_addr);
			if($success){
				$json["uploaded"]=true;
				$json["url"]=$file_public_addr;
				// $json["url"]=$localfileaddr;
      		 	return json_encode($json);
			}
			else{
					$json["uploaded"]=false;
					$json["error"]=array("message"=>"Error Uploaded");
					return json_encode($json);
			}
		}else{
			$json["uploaded"]=false;
			$json["error"]=array("message"=>"Error Uploaded NO UPLOAD");
			return json_encode($json);
		}
	
		// ===============
	}
}
