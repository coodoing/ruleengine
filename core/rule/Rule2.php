<?php

class Rule2 implements IRule
{
    /**
     * 列表显示规则
     */
    public function showRule()
    {
        echo "rule2.showRule";
    }

    /**
     * 设置准入规则
     */
    public function enterRule()
    {
        echo "rule2.enterRule";
    }

    /**
     * db操作规则
     */
    public function opRule()
    {
        echo "rule2.opRule";
    }

}