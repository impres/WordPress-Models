<?php

namespace WordPressModels\PostModel;

/**
 * This is the model if you want to get posts of the default post type.
 *
 * Class DefaultPost
 * @package WordPressModels\PostModel
 */
class DefaultPost extends PostModel
{
	/**
	 * PostModel constructor.
	 *
	 * Set all the arguments that are default for this Model
	 */
	public function __construct()
	{
		$this->type('post');
	}
}