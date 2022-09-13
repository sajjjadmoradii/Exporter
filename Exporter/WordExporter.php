<?php

namespace Exporter;



class WordExporter extends Exporter
{
    protected $format = '.docx';
    public function export()
    {
    
        $file_name = "text-file-" . rand(0, 20) . $this->format;
        $file_path = __DIR__ . "/files/$file_name";
        // $file_path = str_replace("\\","/", __DIR__ . "/files/$file_name");
        

        file_put_contents($file_path, "{$this->data['name']}\n{$this->data['fatherName']}");
        echo "$file_name Successfully Created";
        var_dump($this->data);
    }
}
