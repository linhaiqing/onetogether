<include file="Public:header"/>		<div class="mainbox">			<div id="nav" class="mainnav_title">				<ul>					<a href="{:U('Merchant/news')}" class="on">商户公告</a>|					<a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Merchant/news_add')}','添加公告',800,460,true,false,false,addbtn,'add',true);">添加公告</a>				</ul>			</div>			<p>商户中心首页会显示最前面10条公告。置顶的公告会优先显示，并将悬浮在页面顶部。</p>			<form name="myform" id="myform" action="" method="post">				<div class="table-list">					<table width="100%" cellspacing="0">						<colgroup>							<col/>							<col/>							<col/>							<col width="180" align="center"/>						</colgroup>						<thead>							<tr>								<th>编号</th>								<th>标题</th>								<th class="textcenter">置顶</th>								<th class="textcenter">操作</th>							</tr>						</thead>						<tbody>							<if condition="is_array($news_list)">								<volist name="news_list" id="vo">									<tr>										<td>{$vo.id}</td>										<td>{$vo.title}</td>										<td class="textcenter"><if condition="$vo['is_top'] eq 1"><font color="green">是</font><else/><font color="red">否</font></if></td>										<td class="textcenter"><a href="javascript:void(0);" onclick="window.top.artiframe('{:U('Merchant/news_edit',array('id'=>$vo['id']))}','编辑公告',800,460,true,false,false,editbtn,'edit',true);">编辑</a> | <a href="javascript:void(0);" class="delete_row" parameter="id={$vo.id}" url="{:U('Merchant/news_del')}">删除</a></td>									</tr>								</volist>								<tr><td class="textcenter pagebar" colspan="9">{$pagebar}</td></tr>							<else/>								<tr><td class="textcenter red" colspan="9">列表为空！</td></tr>							</if>						</tbody>					</table>				</div>			</form>		</div><include file="Public:footer"/>