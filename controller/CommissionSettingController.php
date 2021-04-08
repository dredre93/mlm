<?php



function insert() 
{
}

function update() 
{
	echo "update record";

}

if($_POST['insert'] and $_SERVER['REQUEST_METHOD'] == "POST"){
    insert();
}

if($_POST['update'] and $_SERVER['REQUEST_METHOD'] == "POST"){
    update();
}

?>