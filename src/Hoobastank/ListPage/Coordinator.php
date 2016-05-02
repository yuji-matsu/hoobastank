<?php

namespace Hoobastank\ListPage;

abstract class Coordinator {

    /**
     * @var \Hoobastank\Page
     */
    protected $listPage;

    /**
     * @param \Hoobastank\Page $detailPage
     * @return \Hoobastank\DetailPage\Coordinator
     */
    abstract public function getDetailPageCoordinator($detailPage);

    /**
     * @return \Hoobastank\ListPage\Analyzer
     */
    abstract public function getListPageAnalyzer();

    /**
     * Do what you want to do depending on analyzed result
     *
     * @param \Hoobastank\ListPage\Analyzer\Result $analyzedResult
     * @return mixed
     */
    abstract protected function process( $analyzedResult );

    /**
     * @param \Hoobastank\Page $listPage
     */
    public function __construct($listPage)
    {
        $this->listPage = $listPage;
    }

    public function crawl()
    {
        $analyzer = $this->getListPageAnalyzer($this->listPage);
        $analyzedResult = $analyzer->analyze();

        $this->process( $analyzedResult );

        foreach( $analyzedResult->getDetailPages() as $detailPage ){
            $detailPageCoordinator = $this->getDetailPageCoordinator( $detailPage );
            $detailPageCoordinator->crawl();
        }
    }
}