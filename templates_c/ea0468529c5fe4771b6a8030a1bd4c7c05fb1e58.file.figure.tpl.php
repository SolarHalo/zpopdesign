<?php /* Smarty version Smarty-3.1.13, created on 2013-03-26 10:54:32
         compiled from "E:\gisrespository\personal\php\php\zpopdesign\templates\figure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295595148675a2714f9-39500370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea0468529c5fe4771b6a8030a1bd4c7c05fb1e58' => 
    array (
      0 => 'E:\\gisrespository\\personal\\php\\php\\zpopdesign\\templates\\figure.tpl',
      1 => 1364295266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295595148675a2714f9-39500370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148675a2ebca4_85382647',
  'variables' => 
  array (
    'urlroot' => 0,
    'type' => 0,
    'banners' => 0,
    'img' => 0,
    'vipcs' => 0,
    'vip' => 0,
    'normcs' => 0,
    'normc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148675a2ebca4_85382647')) {function content_5148675a2ebca4_85382647($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="right_colum">
            	<div class="r-colum_right">
                    <div class="colum works-nav"  id="works">
                    	<ul class="works-show_nav">
                        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
works/figure/logo" <?php if ($_smarty_tpl->tpl_vars['type']->value=="logo"){?> style="color:red;"<?php }?>>标志/VI</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
works/figure/web" <?php if ($_smarty_tpl->tpl_vars['type']->value=="web"){?> style="color:red;"<?php }?>>网站</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
works/figure/print" <?php if ($_smarty_tpl->tpl_vars['type']->value=="print"){?> style="color:red;"<?php }?>>印刷品</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
works/figure/publish" <?php if ($_smarty_tpl->tpl_vars['type']->value=="publish"){?> style="color:red;"<?php }?>>品牌发布</a></li>
                        </ul> 
                        <div class="works-show slides">
                        <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" width="400" />
                        <?php } ?>
                        	
                        </div> 
                        <div class="works-imgshow_list">
                        <?php  $_smarty_tpl->tpl_vars['vip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vipcs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vip']->key => $_smarty_tpl->tpl_vars['vip']->value){
$_smarty_tpl->tpl_vars['vip']->_loop = true;
?>
                        	<div>
                            	<a href="#推荐客户/<?php echo $_smarty_tpl->tpl_vars['vip']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
<?php echo $_smarty_tpl->tpl_vars['vip']->value['thumb'];?>
" /> 
                                <p><?php echo $_smarty_tpl->tpl_vars['vip']->value['industry'];?>
</p></a>
                             </div>
                        <?php } ?>
                        </div>
                    </div> 
                    <div class="zhegai" style="height:525px;">&nbsp;<!--用于遮挡竖滚动条--></div> 
                </div>
                <div class="colum_list"> 
                	<h3 class="works-show_h">案例分析</h3>
                    <div class="works-show_list"> 
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars['normc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['normc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['normcs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['normc']->key => $_smarty_tpl->tpl_vars['normc']->value){
$_smarty_tpl->tpl_vars['normc']->_loop = true;
?>
                        	<li><a href="#其他客户/<?php echo $_smarty_tpl->tpl_vars['normc']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['normc']->value['title'];?>
</a></li> 
                       <?php } ?>
                        </ul>
                    </div>
                    <div class="page"><span style="float:left; width:35px;">&nbsp;</span>
                        <a href="#">&or;</a><a href="#">&and;</a>
                    </div>
                    <div class="zhegai" style="height:530px;">&nbsp;<!--用于遮挡竖滚动条--></div>  
				</div> 
            </div> 
		<!-- container END --> 
		
		<div id="cwindow" class="smallLay">
		</div>
		
		<script src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
js/windowjs.js" type="text/javascript"></script>
		<script>
    $(function() {
      $('.slides').slidesjs({
        width: 400,
        height: 200,
        navigation: false,
        play: {
            active: false,
            auto: true,
            interval: 4000,
            swap: true
          }
      });
    });
  </script>
		
		
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>