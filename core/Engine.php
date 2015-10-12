<?php

class Engine
{
    /*public function pre();

    public function post();

    public function handle();

    public function output();

    public function parser();

    public function transfer();

    public function store();*/

    public function __construct($input = array())
    {

    }

    public function render($input)
    {
        $type = $input['type'];
        $reduce = $input['reduce'];
        $count = $input['count'];
        if(1 == $type){
            $rule = new Rule1($input);
            $rule->showRule();
        }else{
            $rule = new Rule2($input);
            $rule->enterRule();
        }
    }
}