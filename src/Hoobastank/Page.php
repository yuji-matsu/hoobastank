<?php
namespace Hoobastank;

class Page {

    /**
     * @var string
     */
    protected $url;

    /**
     * @var array
     */
    protected $queries;

    /**
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = $url;
        $this->queries = $this->_extractQueriesFromUrl($url);
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return array
     */
    public function getQueries()
    {
        return $this->queries;
    }

    /**
     * @param array $queries
     */
    public function setQueries($queries)
    {
        $this->queries = $queries;
    }

    /**
     * @param string $url
     */
    private function _extractQueriesFromUrl($url)
    {
        $queries = [];

        $parsedUrl = parse_url($url);
        if(!isset($parsedUrl["query"]) || $parsedUrl["query"]==""){
            return $queries;
        }

        parse_str($parsedUrl["query"], $queries);
        return $queries;
    }
}