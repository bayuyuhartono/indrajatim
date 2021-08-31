/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) 
{
  config.filebrowserBrowseUrl       = 'https://indrajatim.com/assets/kcfinder/browse.php?type=files';
  config.filebrowserImageBrowseUrl  = 'https://indrajatim.com/assets/kcfinder/browse.php?type=images';
  config.filebrowserFlashBrowseUrl  = 'https://indrajatim.com/assets/kcfinder/browse.php?type=flash';
  config.filebrowserUploadUrl       = 'https://indrajatim.com/assets/kcfinder/upload.php?type=files';
  config.filebrowserImageUploadUrl  = 'https://indrajatim.com/assets/kcfinder/upload.php?type=images';
  config.filebrowserFlashUploadUrl  = 'https://indrajatim.com/assets/kcfinder/upload.php?type=flash';  
  config.contentsCss = 'https://fonts.googleapis.com/css2?family=Amiri&display=swap';
  config.contentsCss = 'https://fonts.googleapis.com/css?family=Lobster';
  config.contentsCss = 'https://fonts.googleapis.com/css?family=Cardo:400,400italic,700';
  config.font_names =  'Cardo; serif;'+config.font_names;
  config.font_names =  'serif;sans serif;monospace;cursive;fantasy;Lobster;'+config.font_names;
  config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons = 'Source,Flash,About,Print,Preview,Textarea,Select,Button,ImageButton,Superscript,Subscript,Strike,NewPage,Save,Templates,Cut,Copy,Redo,Undo,Find,Replace,Paste,PasteText,PasteFromWord,Form,Checkbox,TextField,CreateDiv,Smiley,Anchor,HiddenField,SetLanguage,InsertSpecialCharacter,RadioButton,FontSize,Table,SpecialChar';
};
 