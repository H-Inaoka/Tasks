<?php
/**
 * task index template
 *
 * @author Yuto Kitatsuji <Kitatsuji.Yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
?>

<div class="panel-body block">
	<div class="ng-scope">
		<div class="clearfix" style="margin-top: 10px; margin-bottom: 10px;">
			<div class="pull-left">
				<a href="#" class="btn btn-default">
				<span class="glyphicon glyphicon-list">
				</span>
					カテゴリ一覧へ
				</a>
			</div>
			<div class="pull-right">
				<span class="nc-tooltip" tooltip="追加">
					<span class="nc-tooltip" tooltip="追加">
						<a style="padding-right: 12px;" 
						   class="btn btn-success nc-btn-style" href="#">
							<span class="glyphicon glyphicon-plus">
							</span>
						</a>
					</span>
				</span>
			</div>
		</div>
		<div class="clearfix">
			<div class="pull-left">
				<span class="btn-group">
					<button aria-expanded="false" data-toggle="dropdown" 
							class="btn btn-default dropdown-toggle" type="button" style="width: 132px;">
						全てのToDo 
						<span class="caret">
						</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="#">
								未完了のToDo
							</a>
						</li>
						<li>
							<a href="#">
								完了したToDo
							</a>
						</li>
						<li>
							<a href="#">
								全てのToDo
							</a>
						</li>
					</ul>
				</span>
				<span class="btn-group">
					<button aria-expanded="false" data-toggle="dropdown" 
							class="btn btn-default dropdown-toggle" type="button" style="width: 132px;">
						全てのカテゴリ 
						<span class="caret">
						</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="#">
								全てのカテゴリ
							</a>
						</li>
						<li>
							<a href="#">
								カテゴリ1
							</a>
						</li>
						<li>
							<a href="#">
								カテゴリ2
							</a>
						</li>
					</ul>
				</span>
			</div>
		</div>
		<hr>
		<div>
			ToDoが一件も登録されていません。
		</div>
	</div>
</div>