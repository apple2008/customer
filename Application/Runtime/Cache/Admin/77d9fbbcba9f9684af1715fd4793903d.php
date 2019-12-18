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
					<th width="50">ID</th>
					<th width="60">用户</th>
					<th width="60">行程类别</th>
					<th width="150">时间</th>
					<th width="100">内容</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			  <?php $__FOR_START_12211__=0;$__FOR_END_12211__=count($college_list);for($i=$__FOR_START_12211__;$i < $__FOR_END_12211__;$i+=1){ ?><tr>
					<td><b><?php echo ($college_list[$i]['id']); ?></b></td>
					<td><?php echo ($college_list[$i]['username']); ?></td>
					<td>
						<?php if($college_list[$i]['week_type'] == 1): ?>本周
							<?php else: ?>
 							  下周<?php endif; ?>
					</td>
					<td><?php echo ($college_list[$i]['week_date']); ?>      <?php echo ($college_list[$i]['week_name']); ?></td>
					<td><?php echo ($college_list[$i]['content']); ?></td>
					<td>
					<a href="<?php echo U('/Admin/index/collegeMajorEdit',array('id'=>$college_list[$i]['id']));?>">编辑</a> | 
					<a href="javascript:;" onclick='del_college(<?php echo ($college_list[$i]["id"]); ?>,$(this),<?php echo U('/Admin/College/ajaxDelMajor');?>)' class="js-ajax-delete">删除</a>
					
					</td>
				 </tr><?php } ?>
				

			</tbody>
            
			
			
		</table>
			<div id="page" class="wp-paginate">
             	<?php echo ($page); ?>
            </div>