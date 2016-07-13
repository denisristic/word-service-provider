<?php

namespace denisristic\WordServiceProvider\Generator;

use PhpOffice\PHPWord\PhpWord;
use PhpOffice\PHPWord\IOFactory;
use PhpOffice\PhpWord\Shared\Html;

class Word
{
    public function generateDOC($html)
    {
        $objPHPWord = new PHPWord(); // Create new PHPWord object

        $section = $objPHPWord->addSection();
        Html::addHtml($section, $html);

        $objWriter = IOFactory::createWriter($objPHPWord, 'Word2007');
        ob_start();
        $objWriter->save('php://output');
        $contents = ob_get_clean();

        return $contents;
    }
}
