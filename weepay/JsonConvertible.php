<?php 
namespace weepay;

interface JsonConvertible
{
    public function getJsonObject();

    public function toJsonString();
}
?>