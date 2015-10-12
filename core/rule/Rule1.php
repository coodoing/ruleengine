<?php

class Rule1 implements IRule
{
    private $dataIn;

    public function __construct($input)
    {
        $this->dataIn = $input;
    }

    /**
     * 列表显示规则
     */
    public function showRule()
    {
        echo "rule1.showRule";
    }

    /**
     * 设置准入规则
     */
    public function enterRule()
    {
        echo "rule1.enterRule";
    }

    /**
     * db操作规则
     */
    public function opRule()
    {
        echo "rule1.opRule";
    }

}