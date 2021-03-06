<?php

return [
	'404'      => 'Page not found.',
	'auth'     => [
		'title'          => 'Authorization',
		'username'       => 'Username',
		'password'       => 'Password',
		'login'          => 'Login',
		'logout'         => 'Logout',
		'wrong-username' => 'Wrong username',
		'wrong-password' => 'or password'
	],
	'ckeditor' => [
		'upload'        => [
			'success' => 'File was uploaded: \\n- Size: :size kb \\n- width/height: :width x :height',
			'error'   => [
				'common'              => 'Unable to upload the file.',
				'wrong_extension'     => 'File ":file" has wrong extension.',
				'filesize_limit'      => 'Maximum allowed file size is :size kb.',
				'imagesize_max_limit' => 'Width x Height = :width x :height \\n The maximum Width x Height must be: :maxwidth x :maxheight',
				'imagesize_min_limit' => 'Width x Height = :width x :height \\n The minimum Width x Height must be: :minwidth x :minheight',
			]
		],
		'image_browser' => [
			'title'    => 'Insert image from server',
			'subtitle' => 'Choose image to insert',
		],
	],
	'table'    => [
		'new-entry'      => 'New Entry',
		'edit'           => 'Edit',
		'restore'        => 'Restore',
		'delete'         => 'Delete',
		'delete-confirm' => 'Are you sure want to delete this entry?',
		'delete-error'   => 'Error while deleting this entry. You must delete all linked entries first.',
		'moveUp'         => 'Move Up',
		'moveDown'       => 'Move Down',
		'error'          => 'There was an error during your request',
		'filter'         => 'Show similar entries',
		'filter-goto'    => 'Show',
		'save'           => 'Save',
		'cancel'         => 'Cancel',
		'download'       => 'Download',
		'all'            => 'All',
		'processing'     => '<i class="fa fa-5x fa-circle-o-notch fa-spin"></i>',
		'loadingRecords' => 'Loading...',
		'lengthMenu'     => 'Show _MENU_ entries',
		'zeroRecords'    => 'No matching records found.',
		'info'           => 'Showing _START_ to _END_ of _TOTAL_ entries',
		'infoEmpty'      => 'Showing 0 to 0 of 0 entries',
		'infoFiltered'   => '(filtered from _MAX_ total entries)',
		'infoThousands'  => ',',
		'infoPostFix'    => '',
		'search'         => 'Search: ',
		'emptyTable'     => 'No data available in table',
		'paginate'       => [
			'first'    => '<i class="fa fa-angle-double-left"></i>',
			'previous' => '<i class="fa fa-angle-left"></i>',
			'next'     => '<i class="fa fa-angle-right"></i>',
			'last'     => '<i class="fa fa-angle-double-right"></i>'
		]
	],
	'select'   => [
		'nothing'     => 'Nothing selected',
		'selected'    => 'selected',
		'placeholder' => 'Select from the list',
	],
	'image'    => [
		'browse'         => 'Select Image',
		'browseMultiple' => 'Select Images',
		'remove'         => 'Remove Image',
	],
	'file'     => [
		'browse' => 'Select File',
		'remove' => 'Remove File',
	],
];