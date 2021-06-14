<?php
include("./vendor/autoload.php");
include("./core/bootstrap.php");
Router::load("Route.php")->direct(
                                Request::uri(),Request::method()
                            );

