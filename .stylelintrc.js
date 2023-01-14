module.exports = {
	extends: [ '@wordpress/stylelint-config', 'stylelint-config-prettier' ],
	rules: {
		'string-quotes': 'single',
	},
	overrides: [
		{
			files: [ '*.scss', '**/*.scss' ],
			customSyntax: 'postcss-scss',
		},
	],
};
