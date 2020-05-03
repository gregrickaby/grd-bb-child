module.exports = {
	env: {
		es6: true,
		browser: true,
	},
	root: true,
	extends: ['plugin:@wordpress/eslint-plugin/recommended', 'prettier'],
	plugins: ['prettier'],
	rules: {
		'prettier/prettier': 'error',
	},
};
