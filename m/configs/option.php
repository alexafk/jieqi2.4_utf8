<?php
/**
 * 数据表里面可选项和值的对应关系
 * multiple 0 单选 1 对选
 * default 默认值
 * items 选项列表
*/

//显示状态
$jieqiOption['system']['display'] = array('multiple' => 0, 'default' => 0, 'items' => array(0 => '显示', 1 => '待审', 2 => '隐藏'));

$jieqiOption['system']['gender'] = array('multiple' => 0, 'default' => 0, 'items' => array(0 => '保密', 1 => '男', 2 => '女'));

$jieqiOption['system']['sex'] = array('multiple' => 0, 'default' => 0, 'items' => array(0 => '保密', 1 => '男', 2 => '女'));
?>