<?php

namespace Hoobastank\ListPage\Analyzer;

class Result {

    /**
     * @var \Hoobastank\Page[]
     */
    protected $detailPages;

    /**
     * @var int
     */
    protected $totalNumPage;

    /**
     * @var int
     */
    protected $currentNumPage;

    /**
     * @var int
     */
    protected $totalNumEntries;

    /**
     * @return \Hoobastank\Page[]
     */
    public function getDetailPages()
    {
        return $this->detailPages;
    }

    /**
     * @return int
     */
    public function getTotalNumPage()
    {
        return $this->totalNumPage;
    }

    /**
     * @return int
     */
    public function getCurrentNumPage()
    {
        return $this->currentNumPage;
    }

    /**
     * @return int
     */
    public function getTotalNumEntries()
    {
        return $this->totalNumEntries;
    }
}