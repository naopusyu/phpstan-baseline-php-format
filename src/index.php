<?php

// 存在しないクラス
$model = new Model();

// 存在しない関数
func();

class Sample
{
    public function get()
    {
        // 未定義のプロパティ
        return $this->property;
    }
}
