<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"E:\www\cms\public/../application/admin\view\admin_user\edit_menu.html";i:1514946050;s:51:"E:\www\cms\application\admin\view\public\modal.html";i:1514946050;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/static/module/layui/css/layui.css">
	
</head>
<body>
	<div class="layui-container">
		<div class="layui-row">
		<div class="layui-col-md8" style="margin-top: 20px;">
      				
<form  id="mainForm" class="layui-form layui-form-pane" method='post' action="edit_menu">
  <input type="text" style="display: none;"  name='id'  value="<?php echo $auth_rule['id']; ?>" name="">
  <div class="layui-form-item">
    <label class="layui-form-label">上级菜单</label>
    <div class="layui-input-block">
      <input class="layui-input" value="<?php echo $top_title; ?>" disabled="">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">菜单名称</label>
    <div class="layui-input-block">
      <input type="text" name="title" value="<?php echo $auth_rule['title']; ?>" required  lay-verify="required" placeholder="请输入菜单名称" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">控制器</label>
    <div class="layui-input-block">
      <input type="text" value="<?php echo $auth_rule['name']; ?>" name="name" required  lay-verify="required" placeholder="请输入控制器" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
      <label class="layui-form-label"><a style="color:green" target="_target" href="http://fontawesome.dashgame.com/">图标(点)</a></label>
      <div class="layui-input-block">
        <input type="text" value="<?php echo $auth_rule['icon']; ?>"  name="icon"    placeholder="请输入图标" autocomplete="off" class="layui-input">
      </div>
  </div>

    <div class="layui-form-item">
      <label class="layui-form-label">排序值</label>
      <div class="layui-input-block">
        <input type="text" name="sort"  value="<?php echo $auth_rule['sort']; ?>"   placeholder="请输入排序值（越大越靠前）" autocomplete="off" class="layui-input">
      </div>
    </div>

  <div class="layui-form-item">
    <label class="layui-form-label">隐藏</label>
    <div class="layui-input-block">
           <input type="radio" name="status" value="1" title="显示" <?php if($auth_rule['status']==1){echo 'checked';} ?>>
           <input type="radio" name="status" value="0" title="隐藏"<?php if($auth_rule['status']==0){echo 'checked';} ?> >
    </div>
  </div>

  <div class="" class="layui-form-item" >
    <div class="layui-input-block submit_btn">
      <button   class="layui-btn" lay-submit='' lay-filter="formDemo">提交</button>
      <button style="display: none;"  type="reset" class=" layui-btn layui-btn-primary">重置</button>
    </div>
  </div>

</form>

    		</div>
		</div>
	</div>	
</body>
<script src="/static/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/static/module/layui/layui.js"></script>
<script src="/static/admin/js/jquery.form.js"></script>
<script src="/static/admin/js/admin.js"></script>

  <script type="text/javascript">
      $(function(){
        var options = {
              type:'post',           //post提交
              //url:'http://ask.tongzhuo100.com/server/****.php?='+Math.random(),   //url
              dataType:"json",        //json格式
              data:{},    //如果需要提交附加参数，视情况添加
              clearForm: false,        //成功提交后，清除所有表单元素的值
              resetForm: false,        //成功提交后，重置所有表单元素的值
              cache:false,
              async:false,          //同步返回
              success:function(data){
                    console.log(data);
                    if(data.code==0){
                      layer.msg(data.msg);
                    }else{
                      layer.msg(data.msg,{icon:1,time:500},function(){
                        $("#reset").click();
                        lotus_close();
                        parent.location.reload();
                      });
                    }
                  //服务器端返回处理逻辑
                },
                error:function(XmlHttpRequest,textStatus,errorThrown){
                  layer.msg('操作失败:服务器处理失败');
              }
            };
          layui.use('form', function(){
            var form = layui.form;
            // bind form using 'ajaxForm'
            $('#mainForm').ajaxForm(options).submit(function(data){
              //无逻辑
            });

          });

        })
      // });
  </script>

</html>