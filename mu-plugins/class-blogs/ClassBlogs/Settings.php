<?php

/**
 * Shared settings used by the class blogs plugin suite.
 *
 * These settings consist mainly of directory names and IDs used by the class
 * blogs suite or WordPress itself.
 *
 * @package ClassBlogs
 * @subpackage Settings
 * @since 0.1
 */
class ClassBlogs_Settings
{

	/**
	 * The current version of the class blogs suite.
	 *
	 * @var string
	 * @since 0.1
	 */
	const VERSION = "0.1";

	/**
	 * The default cache length, in seconds.
	 *
	 * @var int
	 * @since 0.1
	 */
	const DEFAULT_CACHE_LENGTH = 3600;

	/**
	 * The name of the directory containing the class blogs source.
	 *
	 * @var string
	 * @since 0.1
	 */
	const SRC_DIR_NAME = 'class-blogs';

	/**
	 * The name of the directory containing static media files.
	 *
	 * @var string
	 * @since 0.1
	 */
	const MEDIA_DIR_NAME = 'media';

	/**
	 * The name fo the directory containing JavaScript files.
	 *
	 * @var string
	 * @since 0.1
	 */
	const MEDIA_JS_DIR_NAME = 'js';

	/**
	 * The name of the directory containing CSS files.
	 *
	 * @var string
	 * @since 0.1
	 */
	const MEDIA_CSS_DIR_NAME = 'css';

	/**
	 * The name of the directory containing images files.
	 *
	 * @var string
	 * @since 0.2
	 */
	const MEDIA_IMAGES_DIR_NAME = 'images';

	/**
	 * The ID WordPress uses for inactive widgets in a widget list.
	 *
	 * @var string
	 * @since 0.1
	 */
	const INACTIVE_WIDGETS_ID = 'wp_inactive_widgets';

	/**
	 * The ID WordPress uses for the meta widget.
	 *
	 * @var string
	 * @since 0.1
	 */
	const META_WIDGET_ID = 'meta-2';

	/**
	 * The ID WordPress uses for the search widget.
	 *
	 * @var string
	 * @since 0.1
	 */
	const SEARCH_WIDGET_ID = 'search-2';

	/**
	 * The prefix used for all tables created by a class blogs plugin.
	 *
	 * @var string
	 * @since 0.1
	 */
	const TABLE_PREFIX = "cb_";

	/**
	 * Returns the ID of the root blog.
	 *
	 * @return int the ID of the root blog
	 *
	 * @since 0.1
	 */
	public static function get_root_blog_id()
	{
		return 1;
	}

	/**
	 * Returns the ID of the first admin user.
	 *
	 * @return int the ID of the first admin user
	 *
	 * @since 0.1
	 */
	public static function get_admin_user_id()
	{
		return 1;
	}
}

?>
