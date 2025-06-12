const CopyWebpackPlugin = require("copy-webpack-plugin");
const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require("path");

module.exports = {
	...defaultConfig,
	plugins: [
		...defaultConfig.plugins,
		new CopyWebpackPlugin({
			patterns: [
				{
					from: path.resolve(__dirname, "blocks/**/*.{svg,webp,png,jpg,jpeg}"),
					to: path.resolve(__dirname, "build"),
					noErrorOnMissing: true,
				},
			],
		}),
	],
	resolve: {
		extensions: [".ts", ".js"],
	},
};
