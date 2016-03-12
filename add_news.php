<?php

	require_once ('connect.php');


	$cate = 1;
	for($i = 1; $i <= 100; $i++ ){

		$sql = "INSERT INTO `news`(`id`, `category_id`, `title`, `details`, `picture`, `by`, `created_at`, `updated_at`)
			VALUES ('$i', '$cate', 'title $i', 'data data data data data', 'picture', 'by tis', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000')";

		$cate = $cate === 3 ? 1 : $cate + 1;

		$handle->query($sql);
	}