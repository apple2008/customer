<?php if (!defined('THINK_PATH')) exit();?>     <!--   <div class="table-actions">
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
				<!--	<th width="15"><label><input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x"></label></th>-->
					<th width="50">ID</th>
					<th width="70">客户分类</th>
					<th width="70">项目</th>
					<th width="150">企业名称</th>
					<th width="210">地址</th>
					<?php if($admin_id == 1): ?><th width="80">联系人</th><?php endif; ?>
					<th width="90">职位</th>
					<?php if($admin_id == 1): ?><th width="100">电话</th>
						<th width="100">手机</th><?php endif; ?>

					<th width="100">邮箱</th>
					<th width="70">企业人数</th>
					<th width="60">来源</th>
					<th width="250">跟进记录</th>
					<th width="100">创建时间</th>
					<th width="70">操作</th>
				</tr>
			</thead>
			<tbody>
			  <?php $__FOR_START_114__=0;$__FOR_END_114__=count($article_list);for($i=$__FOR_START_114__;$i < $__FOR_END_114__;$i+=1){ ?><tr>
				 <!--  <td>
					<input type="checkbox" class="js-check" data-yid="js-check-y" data-xid="js-check-x" name="ids[]" value="<?php echo ($article_list[$i]['id']); ?>" title="ID:<?php echo ($article_list[$i]['id']); ?>"></td>-->
					<td><b><?php echo ($article_list[$i]['id']); ?></b></td>
					<td>
						<?php if($article_list[$i]['cate_id'] == 1): ?><b> A 类</b>
							<?php elseif($article_list[$i]['cate_id'] == 2): ?>
							<b> B 类</b>
							<?php else: ?>
							<b>C 类</b><?php endif; ?>
					</td>
					<td><?php echo ($article_list[$i]['project']); ?></td>
					<td><?php echo ($article_list[$i]['corp_name']); ?></td>
					<td><?php echo ($article_list[$i]['address']); ?></td>
					<?php if($admin_id == 1): ?><td><?php echo ($article_list[$i]['name']); ?></td><?php endif; ?>
					<td><?php echo ($article_list[$i]['position']); ?></td>
					<?php if($admin_id == 1): ?><td><?php echo ($article_list[$i]['telphone']); ?></td>
						<td><?php echo ($article_list[$i]['mobile']); ?></td><?php endif; ?>
                    <td><?php echo ($article_list[$i]['email']); ?></td>
					<td><?php echo ($article_list[$i]['corp_num']); ?></td>
					<td><?php echo ($article_list[$i]['source']); ?></td>
					<td><?php echo ($article_list[$i]['mark']); ?></td>
					<td><?php echo date('Y-m-d',$article_list[$i]['create_time']) ?></td>
					<td><a href="<?php echo U('/Admin/index/editArticle',array('id'=>$article_list[$i]['id']));?>">编辑</a> |
						<a href="javascript:;" onclick='del_article(<?php echo ($article_list[$i]["id"]); ?>,$(this))' class="js-ajax-delete">删除</a>
					</td>

				 </tr><?php } ?>
				

			</tbody>
            

		</table>
			<div id="page" class="wp-paginate">
             	<?php echo ($page); ?>
            </div>