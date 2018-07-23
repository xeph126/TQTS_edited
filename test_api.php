<?php
$array_test = array();
$array_test['data'][] = array( 
                              "Test1" => '1', 
                              "Test2" => '2', 
                              "Test3" => '3', 
                              );
$array_test['data'][] = array( 
                              "Test1" => '4', 
                              "Test2" => '5', 
                              "Test3" => '6', 
                              );
$array_test['data'][] = array( 
                              "Test1" => '7', 
                              "Test2" => '8', 
                              "Test3" => '9', 
                              );                              
echo json_encode($array_test);
?>
