const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
var path = require('path');


const jsPath = './js';
const sassPath = './sass';
const cssPath = './css';
const outputPath = 'js/dist';
const localDomain = 'http://localhost';
const entryPoints = {
    'index': jsPath + '/index.js',
    'style': sassPath + '/style.scss'
}


module.exports = {
    entry: entryPoints,
    output:{
        path: path.resolve(__dirname,outputPath),
        filename: '[name].min.js',
    },
    plugins: [
        new RemoveEmptyScriptsPlugin(),
        new MiniCssExtractPlugin({
            filename: '../../css/[name].min.css'
        }),
        new BrowserSyncPlugin({
            proxy: localDomain,
            files: [cssPath + '**/*',outputPath + '**/*.js', './**/*.php'],
            injectCss: true,
            notify: false
        },{reload:true})
    ],
    watchOptions: {
        poll: 1000,
    },
    module: {
        rules: [
            {
                test: /\.s?[c]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ]
            },
            {
                test: /\.sass$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader: 'sass-loader',
                        options:{
                            sassOptions: {indentedSyntax: true},
                        },
                    },
                ]
            }
        ]
    }
}
