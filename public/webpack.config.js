var webpack = require('webpack');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
    entry: './project/comman.js',
    output: {
        path: __dirname,
        filename: "bundle.js"
    },
    module:{
        loaders: [
            {
                test: /\.css$/,
                loader: "style-loader!css-loader"
            },
            {
                test: /\.js$/,
                loader: "babel-loader",
                exclude:/node_modules/,
                query: {
                    presets: ['es2015', 'stage-0'],
                    plugins: ['transform-runtime']
                }
            },
            {   test: /\.jpg$/,
                loader: "file-loader"
            },
            {   test: /\.(png|woff|woff2|eot|ttf|svg)$/,
                loader: 'url-loader?limit=100000'
            }
        ]
    },
    plugins: [
        new webpack.BannerPlugin('版权所有，翻版必究-reallyli'),
        new UglifyJSPlugin(),
        new ExtractTextPlugin("style.css")
    ]
}