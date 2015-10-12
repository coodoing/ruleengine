<?php

interface IRule
{
    /**
     * 列表显示规则
     */
    public function showRule();

    /**
     * 设置准入规则
     */
    public function enterRule();

    /**
     * db操作规则
     */
    public function opRule();
}