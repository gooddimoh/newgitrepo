<?php

interface http
{
    function getdata($s);

    function getsdata();
}

trait httpt
{
    function getdata($s);

    function getsdata();
}


class HttpRequests implements http
{
    use httpt;

    function request($data)
    {
        return $data;
    }

    function response($data)
    {
        return $data;
    }

    function getdata($s)
    {
        // TODO: Implement getdata() method.
    }

    function getsdata()
    {
        // TODO: Implement getsdata() method.
    }
}

$http = new HttpRequests();

$http->request($data);
$http->response($data);
$http::class;
