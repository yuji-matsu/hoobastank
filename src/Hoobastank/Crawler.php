<?php
namespace Hoobastank;

abstract class Crawler {

    /**
     * @return \Hoobastank\ListPage\Generator
     */
    abstract function getListPageGenerator();

    /**
     * @param \Hoobastank\Page $listPage
     * @return \Hoobastank\ListPage\Coordinator
     */
    abstract function getListPageCoordinator( $listPage );


    public function crawl()
    {
        $listPages = $this->getListPageGenerator()->generate();

        foreach( $listPages as $listPage ){
            $listPageCoordinator = $this->getListPageCoordinator( $listPage );
            $listPageCoordinator->crawl();
        }
    }
}