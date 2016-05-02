<?php

namespace Hoobastank\ListPage;

abstract class Analyzer {

    /**
     * @var \Hoobastank\Page
     */
    protected $listPage;

    /**
     * @param \Hoobastank\Page $listPage
     */
    public function __construct($listPage)
    {
        $this->listPage = $listPage;
    }

    /**
     * @return \Hoobastank\ListPage\Analyzer\Result
     */
    abstract function analyze();
}