<?php

namespace Exporter;

class PdfExporter extends Exporter{
    protected $format = '.pdf';

public function export(){
    var_dump($this->data);
        
    }

}
$pdfExporter = new PdfExporter(['name'=>'sajad','fatherName'=>'moradi']);
$pdfExporter->export(); 


