<?php

namespace Hoobastank\DetailPage;

abstract class Analyzer {

    /**
     * @var \Hoobastank\Page
     */
    protected $detailPage;

    /**
     * @param \Hoobastank\Page $detailPage
     */
    public function __construct($detailPage)
    {
        $this->detailPage = $detailPage;
    }

    /**
     * @return \Hoobastank\DetailPage\Analyzer\Result
     */
    abstract function analyze();
}