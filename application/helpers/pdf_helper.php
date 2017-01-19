<?php

function prep_pdf($orientation = 'landscape')
{
	$CI = & get_instance();
	
	$CI->cezpdf->selectFont(base_url() . '/fonts/Helvetica.afm');	
	
	$all = $CI->cezpdf->openObject();
	$CI->cezpdf->saveState();
	$CI->cezpdf->setStrokeColor(0,0,0,1);
	//$CI->cezpdf->ezImage(base_url() . '/image/pdfmies.png', 100, 420, 'full', 'center');
	//$CI->cezpdf->addJpegFromFile(base_url() . '/image/pdfmies.JPG',10,10,591,191); 
	
	
	if($orientation == 'landscape') {
		$CI->cezpdf->ezSetMargins(50,70,50,50);
		$CI->cezpdf->ezStartPageNumbers(500,28,8,'','{PAGENUM}',1);
		$CI->cezpdf->line(20,40,578,40);
		$CI->cezpdf->addText(50,32,8,'Printed on ' . date('m/d/Y h:i:s a'));
		
		//$CI->cezpdf->addText(50,22,8,'CI PDF Tutorial - http://www.christophermonnat.com');
	}
	else {
		$CI->cezpdf->ezStartPageNumbers(750,28,8,'','{PAGENUM}',1);
		$CI->cezpdf->line(20,40,800,40);
		$CI->cezpdf->addText(50,32,8,'Printed on ' . date('m/d/Y h:i:s a'));
		//$CI->cezpdf->addText(50,22,8,'CI PDF Tutorial - http://www.christophermonnat.com');
	}
	$CI->cezpdf->restoreState();
	$CI->cezpdf->closeObject();
	$CI->cezpdf->addObject($all,'all');
}

?>