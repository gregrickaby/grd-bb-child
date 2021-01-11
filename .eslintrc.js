module.exports = {
	env: {
		browser: true,
		node: true,
		es6: true,
	},
	root: true,
	extends: [ 'plugin:@wordpress/eslint-plugin/recommended', 'prettier' ],
	plugins: [ 'prettier' ],
	rules: {
		'prettier/prettier': 'error',
	},
};
