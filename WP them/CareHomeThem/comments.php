<?php if (comments_open()) { ?>

<div class="comments-header">
	<h2>Комментарии</h2>
	<a href="#" class="blue-pill show_popup" data-popup = "callback_popup_comment">Оставить комментарий</a>
</div>
    <?php if (get_comments_number() == 0) { ?>
      <div class="comments active">
		<div class="commets-inner">
        	<h2>Оставьте первый комментарий - автор старался</h2>
      	</div>
  	</div>
    <?php } else { ?>

	<div class="comments active">
		<div class="commets-inner">
      <?php
        function mytheme_comment2($comment, $args, $depth){
           $GLOBALS['comment'] = $comment; ?>
           <div class="comment-wrapp">
               <div class="comment">
					<div class="inner">
						<div class="comment-header">
							<h3><?php echo get_comment_author_link() ?></h3>
							<?php edit_comment_link('(Редактировать)', '  ', '') ?>
							<?php if ($comment->comment_approved == '0') : ?>
                                <em>Ваш комментарий ожидает проверки.</em>
                            <?php endif; ?>
							<p><?php printf( '%1$s в %2$s', get_comment_date(),  get_comment_time()) ?></p>
						</div>
						<?php comment_text() ?>
						<div class="commet-footer clearfix">
							<div>
					            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
					        </div>
							<a href="#" class="show-comments right active">
								<span>Все ответы</span>
								<span class="active-txt">Скрыть все ответы</span>
								<i class="fa fa-angle-down"></i>
							</a>
						</div>
					</div>
				</div>
        <?php } 
        // Получаем комментарии поста с ID XXX из базы данных 
        $comments = get_comments(array(
            'post_id' => $page->ID,
            'status' => 'approve' // комментарии прошедшие модерацию
        ));

        // Формируем вывод списка полученных комментариев
        wp_list_comments(array(
				'reply_text' => 'Ответить',
            'per_page' => 10, // Пагинация комментариев - по 10 на страницу
            'style' => 'div',
            'callback' => 'mytheme_comment2',
            'reverse_top_level' => false // Показываем последние комментарии в начале
        ), $comments);
      ?>
		</div>
	</div>
  <?php } 
} else { ?>
  <h3>Обсуждения закрыты для данной страницы</h3>
  <?php }?>