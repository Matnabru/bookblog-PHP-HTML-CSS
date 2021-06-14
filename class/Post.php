<?php


require_once 'DataSource.php';

class Post
{

    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "DataSource.php";
        $this->ds = new DataSource();
    }

    function getPostById($memberId)
    {
        $query = "select * FROM post WHERE id = ?";
        $paramType = "i";
        $paramArray = array($memberId);
        $postResult = $this->ds->select($query, $paramType, $paramArray);
        
        return $postResult;
    }
    function getEveryPost(){
        $query = "select * FROM post ORDER BY id DESC";
        $paramType = "";
        $paramArray = array("");
        $postResult = $this->ds->select($query, $paramType, $paramArray);
        
        return $postResult;
    }
    
}