<?php

namespace Hoobastank\DetailPage;

abstract class Coordinator {

    /**
     * @var \Hoobastank\Page
     */
    protected $detailPage;

    /**
     * @param $detailPage
     * @return mixed
     */
    abstract public function getDetailPageAnalyzer($detailPage);

    /**
     * Do what you want to do depending on analyzed result
     *
     * @param \Hoobastank\DetailPage\Analyzer\Result $analyzedResult
     * @return mixed
     */
    abstract public function process($analyzedResult);

    /**
     * @param \Hoobastank\Page $detailPage
     */
    public function __construct( $detailPage )
    {
        $this->detailPage = $detailPage;
    }

    public function crawl()
    {
        $analyzer = $this->getDetailPageAnalyzer( $this->detailPage );
        $analyzedResult = $analyzer->analyze();

        $this->process( $analyzedResult );
    }
}