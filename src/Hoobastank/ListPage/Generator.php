<?php

namespace Hoobastank\ListPage;

abstract class Generator {

    /**
     * @return \Hoobastank\Page[]
     */
    abstract public function generate();
}