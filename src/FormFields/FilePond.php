<?php

namespace YellowThree\VoyagerExtension\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class FilePond extends AbstractHandler
{
    protected $name = 'YT FilePond';
    protected $codename = 'filepond';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('vextension::formfields.filepond', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}
