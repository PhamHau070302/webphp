<?php
    class controller{

        function ModelAdmin($model){
            require_once "./models/admin/".$model.".php";
            return new $model;
        }

        function ViewAdmin($view, $data = []){
            require_once "./views/admin/cpanel/".$view.".php";
        }

        function ModelClient($model){
            require_once "./models/client/".$model.".php";
            return new $model;
        }

        function ViewClinet($view, $data = []){
            require_once "./views/client/cpanel/".$view.".php";
        }

        function ModelCommon($model){
            require_once "./models/common/".$model.".php";
            return new $model;
        }
    }
?>