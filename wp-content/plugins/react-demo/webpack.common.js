const path = require("path");

module.exports = {
	entry: {
		app: "./src/ReactDemo.js"
	},
	node: { global: true, fs: 'empty' },
	output: {
		filename: "ReactDemo.js",
		path: path.resolve(__dirname),
		libraryTarget: 'umd'
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: "babel-loader",
					options: {
                        presets:['react'],
                        plugins: ["transform-class-properties"]
                    }
				}
			},
			{
				test: /\.scss$/,
				use: ["style-loader", "css-loader", "sass-loader"]
			},
			{
				test: /\.css$/,
				use: ["style-loader", "css-loader", "sass-loader"]
			}
		]
	}
};
