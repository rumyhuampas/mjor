<?php defined('SYSPATH') OR die('No Direct Script Access');

class Helpers_Reportes {
	
	public static function create($source, $format = '', $orientation = 'P'){
		return View_MPDF::factory($source, NULL,
			array('',	// mode - default ''
				$format,	// format - A4, for example, default ''
				0,		// font size - default 0
				'',		// default font family
				8,		// margin_left
				8,		// margin right
				25,		// margin top
				15,		// margin bottom
				9,		// margin header
 				9,		// margin footer
 				$orientation));  // L - landscape, P - portrait
	}
	
	public static function show($pdf){
		$pdf->inline($pdf->filename);
	}

	public static function createVale($id, $date, $text){
		$pdf = Helpers_Reportes::create('reports/vale', 'A4-L');
		$stylesheet = file_get_contents('assets/css/pdfstyle.css');
		$pdf->get_mpdf()->WriteHTML($stylesheet, 1);
		
		$pdf->showImageErrors = true;
		
		$pdf->get_mpdf()->SetTitle(Helpers_Const::APPNAME.' - Vale');
		$pdf->get_mpdf()->SetSubject('Vale');
		$pdf->get_mpdf()->SetAuthor(Helpers_Const::APPNAME);
		$pdf->get_mpdf()->SetCreator(Helpers_Const::APPNAME);
		
		$pdf->title = Helpers_Const::APPNAME.' - Vale';
		$pdf->filename = Helpers_Const::APPNAME.' - vale.pdf';
		
		$pdf->_id = $id;
		$pdf->_date = $date;
		$pdf->_text = $text;
		
		return $pdf;
	}
	
	public static function createPdf(){
		
		
		$pdfheader = file_get_contents('application/views/reports/_pdfheader.php');
		$pdf->get_mpdf()->SetHTMLHeader($pdfheader);
		$pdffooter = file_get_contents('application/views/reports/_pdffooter.php');
		$pdf->get_mpdf()->SetHTMLFooter($pdffooter);
	}
}
	