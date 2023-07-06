<?php function linkedListMultiplierCheck( $arr, $init ) {

$head = new Node($arr[0],
                 new Node($arr[1],
                          new Node($arr[2],
                                   new Node($arr[3], NULL))));
return linkedListMultiplier($head, $init);
}

class Node {
public $data, $next;
public function __construct($data, $next = NULL) {
  list($this->data, $this->next) = [$data, $next];
}
}
// DO NOT MODIFY THE CODE ABOVE							  


function getValues($head, $result = [])
{
    array_push($result, $head->data);

    if($head->next){
       $result = getValues($head->next, $result);
    }
    return $result;
}

function linkedListMultiplier($head, $init)
{

    $values = getValues($head);
    $multiplier = null;
    $result = null;
    $calculatedList = array();

    foreach($values as $key => $givenNumber){
    //Starts a multiplier
        if($multiplier == null){
        $multiplier = $init;
    }
    //Calculate
    $result = ($multiplier * $givenNumber);
    //Save at list
    array_push($calculatedList, $result);
    //Switch multiplier
    $multiplier = $result;
    //Clear result
    $result = null;
    }
    return $calculatedList;
}


$head = array(1,2,3,4);
$init = 1;

print_r(linkedListMultiplierCheck( $head, $init ));

?>