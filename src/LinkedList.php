<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 4/23/2022
 * Time: 4:05 PM
 */

class LinkedList
{
    public $head;

    public function printList()
    {
        $temp = $this->head;

        if ($temp != null) {
            while($temp->next != null){
                echo $temp->data . PHP_EOL;
                $temp = $temp->next;
            }
        }else{
            echo 'List is empty';
        }
    }
}