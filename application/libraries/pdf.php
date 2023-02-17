<?php defined('BASEPATH') OR exit('no direct script access allowed');

require_once(dirname(__FILE__) . '\autoload.php');

use Dompdf\Dompdf;
class Pdf extends Dompdf{

    public function create_pdf($html, $filename='', $download=true, $paper='A4', $orientation='portrait'){
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        if($download){
            $dompdf->stream($filename . '.pdf', array('Attachment' => 1));
        }
        else{
            $dompdf->stream($filename . '.pdf', array('Attachment' => 0));
        }
    }

}