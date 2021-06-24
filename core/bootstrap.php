<?php
include("function.php");
App::bind("database",new QueryBuilder(new Connection));
