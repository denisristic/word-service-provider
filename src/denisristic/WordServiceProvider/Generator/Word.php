<?php

namespace denisristic\WordServiceProvider\Generator;

class Word
{
    public function generateDOC($html)
    {
        $objPHPWord = new \PHPWord(); // Create new PHPWord object

        $section = $objPHPWord->addSection();
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html);

        $objWriter = \PHPWord_IOFactory::createWriter($objPHPWord, 'Word2007');
        ob_start();
        $objWriter->save('php://output');
        $contents = ob_get_clean();

        return $contents;
    }
}
