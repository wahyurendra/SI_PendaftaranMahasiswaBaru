<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$d['prodi']=$this->model_app->get_prodi();
		$d['content']=$this->load->view('admin/pengumuman/view', $d, TRUE);
		$this->load->view('admin/home', $d);
	}

	public function prodi($kode_prodi)
	{
		$thak=$this->model_app->kode_thak_aktif();
		$d['prodi']=$this->model_app->ambil_prodi($kode_prodi);
		$d['siswa']=$this->model_app->get_siswa_prodi($kode_prodi,$thak);
		$d['content']=$this->load->view('admin/pengumuman/prodi', $d, TRUE);
		$this->load->view('admin/home', $d);
	}


	public function report_maba($kode)
	{
		$kode_thak=$this->model_app->kode_thak_aktif();
		$filter=array(
				'thak'=>$kode_thak,
				'prodi'=>$kode,
				'nilai_tes !='=>0
			);
		$limit=$this->model_app->get_limit($kode);
		$d['thak_aktif']=$this->model_admin->ambil_thak_aktif();
		$d['maba']=$this->model_app->report($filter,$limit);
        $d['prodi']=$this->model_admin->ambil_prodi($kode);


       
        $pdfFilePath ="laporan-".$kode.time()."-download.pdf";
 
		$pdf = new \Mpdf\Mpdf();
        
        $header = '
			        <table width="100%" style="border-bottom: 2px solid #000000; vertical-align: top; font-family:
					serif; font-size: 9pt; color: #000088;"><tr>		
					<td width="20%" align="right">
					<div>
						<img src="'.base_url('assets/logo.png').'" width="75px" />
					</div></td>
					<td width="80%" style="text-align: center;">
						<h3>SEKOLAH TINGGI SANDI NEGARA</h3><br>
						<h5>Jl. Raya H. Usa, Desa Putat Nutug, Ciseeng, Bogor, Jawa Barat  Telp. (0251) 8541742 </h5>
					</td>
				</tr>
				</table>
				';

		$footer = '<table width="100%" style="border-top: 2px solid #000000; vertical-align: bottom; font-family: serif; font-size: 8pt;

    color: #000000; font-weight: bold; font-style: italic;"><tr>

    <td width="33%"><span style="font-weight: bold; font-style: italic;">'.base_url().'</span></td>

    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>

    <td width="33%" style="text-align: right; ">{DATE j-m-Y}</td>

    </tr></table>';

    $pdf->SetHTMLHeader($header);
	$pdf->SetHTMLFooter($footer);


        $pdf->AddPage('L', // L - landscape, P - portrait
            '', '', '', '',
            20, // margin_left
            20, // margin right
            40, // margin top
            20, // margin bottom
            10, // margin header
            12); // margin footer);

        $html=$this->load->view('admin/pengumuman/report',$d , true);

        //generate the PDF!
        $pdf->WriteHTML($html);
        
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $pdf->Output($pdfFilePath, "I");
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */