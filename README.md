# jQuery-WordPress53-Fix

> Author: LuRenJiasWorld<loli@lurenjia.in>

[toc]

## 中文/Chinese

### 描述
这个简单的WordPress插件能帮助你解决在更新到WordPress5.3之后遇到的`$ is not a function`报错问题。

### 使用方法
1. 安装
2. 激活
3. 使用

### 其他信息

本插件在WordPress所生成HTML页面的`<head>`位置添加了一行代码：`<script> var $ = jQuery; </script>`。

但是需要注意的是，本插件并非该错误的永久解决方法，但是它能在一段时间内保证不出现问题，而且可以使一些不常更新/停更的插件继续正常运行。

## 英文/English
### Description

A simple WordPress Plugin to fix the error of `$ is not a function`.

### How to use

1. Install
2. Active
3. Enjoy

### More info

This plugin inject `<script> var $ = jQuery; </script>` into the head of ths html. 

However, this is not a permanent fix for this problem, but it could work for those inactively/no longer updated plugins.
