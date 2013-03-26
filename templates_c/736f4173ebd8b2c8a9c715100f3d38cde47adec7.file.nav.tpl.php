<?php /* Smarty version Smarty-3.1.13, created on 2013-03-26 04:45:13
         compiled from "E:\gisrespository\personal\php\php\zpopdesign\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120345148677b006921-10848263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736f4173ebd8b2c8a9c715100f3d38cde47adec7' => 
    array (
      0 => 'E:\\gisrespository\\personal\\php\\php\\zpopdesign\\templates\\nav.tpl',
      1 => 1364273023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120345148677b006921-10848263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148677b009af6_23147609',
  'variables' => 
  array (
    'mm' => 0,
    'urlroot' => 0,
    'sm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148677b009af6_23147609')) {function content_5148677b009af6_23147609($_smarty_tpl) {?><div id="container">
        	<div class="left_nav">
            	<ul id="menu">
                    <li>
                        <a href="javascript:void(0)" class="<?php if ($_smarty_tpl->tpl_vars['mm']->value=='about'){?>dq<?php }else{ ?>xz<?php }?>">ABOUT<span class="hr">了解</span></a>
                        <ul <?php if ($_smarty_tpl->tpl_vars['mm']->value=='about'){?>style="display:block;"<?php }else{ ?>style="display:none;"<?php }?>>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
about/who" class="sub_nav" <?php if ($_smarty_tpl->tpl_vars['sm']->value=='who'){?>style="color:red;"<?php }?>><span>众耀是谁</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
about/team" class="sub_nav" <?php if ($_smarty_tpl->tpl_vars['sm']->value=='team'){?>style="color:red;"<?php }?>><span>众耀团队</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
about/news" class="sub_nav" <?php if ($_smarty_tpl->tpl_vars['sm']->value=='news'){?>style="color:red;"<?php }?>><span>众耀动态</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
services" class="<?php if ($_smarty_tpl->tpl_vars['mm']->value=='service'){?>dq<?php }else{ ?>xz<?php }?>">SERVICES<span class="hr">服务</span></a> 
                    </li> 
                    <li>
                        <a href="javascript:void(0)" class="<?php if ($_smarty_tpl->tpl_vars['mm']->value=='works'){?>dq<?php }else{ ?>xz<?php }?>">WORKS<span class="hr">工作</span></a>
                        <ul <?php if ($_smarty_tpl->tpl_vars['mm']->value=='works'){?>style="display:block;"<?php }else{ ?>style="display:none;"<?php }?>>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
works/figure" class="sub_nav" <?php if ($_smarty_tpl->tpl_vars['sm']->value=='figure'){?>style="color:red;"<?php }?>><span>树形象</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
works/culture" class="sub_nav" <?php if ($_smarty_tpl->tpl_vars['sm']->value=='culture'){?>style="color:red;"<?php }?>><span>铸人心</span></a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
join" class="<?php if ($_smarty_tpl->tpl_vars['mm']->value=='joinus'){?>dq<?php }else{ ?>xz<?php }?>">JOIN US<span class="hr">加入</span></a> 
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
contact" class="<?php if ($_smarty_tpl->tpl_vars['mm']->value=='contact'){?>dq<?php }else{ ?>xz<?php }?>">CONTACT<span class="hr">联系</span></a> 
                    </li>
                </ul> 
            </div>
            <!-- left_nav END --><?php }} ?>