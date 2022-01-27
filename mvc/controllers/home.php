<?php
class Home extends Controller{
    function helloWorld(){
        $this->view("mainLayout", [
            "page" => "home"]);
    }
}
?>