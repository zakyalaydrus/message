<?php
namespace mzakyalaydrus\message;

use mzakyalaydrus\message\Jobs\CallMethodJob;

class Message{
    public function display(){
        return "This is message from test package display function!";
    }

    public function JobSetUp($array){
        CallMethodJob::dispatch($array);
        return true;
    }
}