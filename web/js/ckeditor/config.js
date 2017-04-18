/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
        config.language = 'es';
	config.uiColor = '#d5f0fb';
	config.height = 300;
	config.toolbarCanCollapse = true;
        config.filebrowserUploadUrl = 'http://blog.devel.es/admin/uploadimage';
        config.filebrowserBrowseUrl = '/admin/browse';
        config.filebrowserImageWindowWidth = '640';
        config.filebrowserImageWindowHeight = '480';
        config.extraPlugins = 'filebrowser';
};
