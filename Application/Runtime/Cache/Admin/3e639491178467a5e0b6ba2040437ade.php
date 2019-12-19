<?php if (!defined('THINK_PATH')) exit();?>      <!--  <div class="table-actions">
			<button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="/index.php/AdminPost/check/check/1" data-subcheck="true">审核</button>
			<button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="/index.php/AdminPost/check/uncheck/1" data-subcheck="true">取消审核</button>
			<button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="/index.php/AdminPost/top/top/1" data-subcheck="true">置顶</button>
			<button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="/index.php/AdminPost/top/untop/1" data-subcheck="true">取消置顶</button>
			<button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="/index.php/AdminPost/recommend/recommend/1" data-subcheck="true">推荐</button>
			<button class="btn btn-primary btn-small js-ajax-submit" type="submit" data-action="/index.php/AdminPost/recommend/unrecommend/1" data-subcheck="true">取消推荐</button>
			<button class="btn btn-primary btn-small js-articles-copy" type="button">批量复制</button>
			<button class="btn btn-danger btn-small js-ajax-submit" type="submit" data-action="/index.php/AdminPost/delete" data-subcheck="true" data-msg="您确定删除吗？">删除</button>
		</div>-->
		
        <input id="current_url" type="hidden" name="current_url" value="<?php echo ($current_url); ?>" />

		<table class="table table-hover table-bordered table-list">
			<thead>
				<tr>
					<!--<th width="15"><label><input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x"></label></th>-->
					<th width="10">ID</th>
					<th width="70">审核项目</th>
					<th width="60">项目金额</th>
					<th width="70">项目状态</th>
					<th width="150">企业名称</th>
					<th width="150">地址</th>
					<?php if($admin_id == 1): ?><th width="70">联系人</th><?php endif; ?>
					<th width="70">职位</th>
					<?php if($admin_id == 1): ?><th width="100">电话</th>
						<th width="100">手机</th>
						<th width="100">邮箱</th><?php endif; ?>
					<th width="70">业务</th>
					<th width="60">辅导顾问</th>
					<th width="50">首款</th>
					<th width="50">尾款</th>
					<th width="90">预计审核时间</th>
					<th width="80">审核机构</th>
					<th width="90">最终审核时间</th>
					<th width="70">操作</th>
				</tr>
			</thead>
			<tbody>
			  <?php $__FOR_START_27617__=0;$__FOR_END_27617__=count($college_list);for($i=$__FOR_START_27617__;$i < $__FOR_END_27617__;$i+=1){ ?><tr>
				  <!-- <td>
					<input type="checkbox" class="js-check" data-yid="js-check-y" data-xid="js-check-x" name="ids[]" value="<?php echo ($college_list[$i]['id']); ?>" title="ID:<?php echo ($college_list[$i]['id']); ?>"></td>-->
					<td><b><?php echo ($college_list[$i]['id']); ?></b></td>
					<td><?php echo ($college_list[$i]['project']); ?></td>
					<td><?php echo ($college_list[$i]['pro_money']); ?></td>
					<td>
						<?php if($college_list[$i]['status'] == 1): ?><b> 已收首款</b>
							<?php else: ?>
							<b>项目已完成</b><?php endif; ?>
					</td>
					<td><?php echo ($college_list[$i]['corp_name']); ?></td>
					<td><?php echo ($college_list[$i]['address']); ?></td>
					<?php if($admin_id == 1): ?><td><?php echo ($college_list[$i]['name']); ?></td><?php endif; ?>
					<td><?php echo ($college_list[$i]['position']); ?></td>
						<?php if($admin_id == 1): ?><td><?php echo ($college_list[$i]['telphone']); ?></td>
							<td><?php echo ($college_list[$i]['mobile']); ?></td>
							<td><?php echo ($college_list[$i]['email']); ?></td><?php endif; ?>
					<td><?php echo ($college_list[$i]['business']); ?></td>
					<td><?php echo ($college_list[$i]['help_man']); ?></td>
					<td><?php echo ($college_list[$i]['first_money']); ?></td>
					<td><?php echo ($college_list[$i]['last_money']); ?></td>
					<td><?php echo $college_list[$i]['check_time'] ?></td>
					<td><?php echo ($college_list[$i]['check_setup']); ?></td>
					<td><?php echo $college_list[$i]['last_check_time'] ?></td>
					<td>
					<a href="<?php echo U('/Admin/index/collegeSchoolEdit',array('id'=>$college_list[$i]['id']));?>">编辑</a> |
					<a href="javascript:;" onclick='del_college(<?php echo ($college_list[$i]["id"]); ?>,$(this))' class="js-ajax-delete">删除</a>|
					<a href="javascript:;" onclick='change_college(<?php echo ($college_list[$i]["id"]); ?>,$(this))' class="js-ajax-delete">一键转换</a>
					</td>
				 </tr><?php } ?>
				

			</tbody>
            
			
			
		</table>
			<div id="page" class="wp-paginate">
             	<?php echo ($page); ?>
            </div>