<?php if (!defined('THINK_PATH')) exit();?>        <input id="current_url" type="hidden" name="current_url" value="<?php echo ($current_url); ?>" />
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
                <th width="50">ID</th>
                <th>姓名</th>
                <th>性别</th>
                <th>生日</th>
                <th>手机号</th>
                <th>地址</th>
                <th>来源</th>
                <th>费用</th>
                <th>上课班级</th>
                <th>上课状态</th>
                <th>备注</th>
                <th width="120">操作</th>
            </tr>
          </thead>
          <tbody>
            <?php $__FOR_START_1925__=0;$__FOR_END_1925__=count($data_list);for($i=$__FOR_START_1925__;$i < $__FOR_END_1925__;$i+=1){ ?><tr>
                    <td><?php echo ($data_list[$i]['id']); ?></td>
                    <td><?php echo ($data_list[$i]['name']); ?></td>
                    <td><?php echo ($data_list[$i]['sex']); ?></td>
                    <td><?php echo date('Y-m-d',$data_list[$i]['birth']);?></td>
                    <td><?php echo ($data_list[$i]['phone']); ?></td>
                    <td><?php echo ($data_list[$i]['site']); ?></td>
                    <td><?php echo ($data_list[$i]['source']); ?></td>
                    <td><?php echo ($data_list[$i]['money']); ?></td>
                    <td><?php echo ($data_list[$i]['begins']); ?></td>
                    <td><?php echo ($student_status[$data_list[$i]['status']]); ?></td>
                    <td><?php echo ($data_list[$i]['ramark']); ?></td>
                    <td>
                      <a href="javascript:;">退学</a>
                      |<a href="javascript:;">编辑</a>
                      |<a href="javascript:;" onclick='del_article(<?php echo ($article_list[$i]["id"]); ?>,$(this))' class="js-ajax-delete">删除</a>
                    </td>
                </tr><?php } ?>

            
          </tbody>
      </table> 
      <div id="page" class="wp-paginate">
                <?php echo ($page); ?>
      </div>