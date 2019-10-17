const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const WebpackAssetsManifest = require('webpack-assets-manifest')

module.exports = {
  cache: false,
  entry: [
    './src/js/index.js',
    './src/css/index.styl'
  ],
  output: {
    filename: 'index.js',
    path: path.resolve(__dirname, 'dist')
  },
  module: {
    rules: [
      {
        test: /\.styl/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: 'css-loader',
            options: {
              sourceMap: true,
              url: false
            }
          },
          {
            loader: 'postcss-loader'
          },
          {
            loader: 'stylus-loader'
          }
        ]
      },
      {
        test: /\.js$/,
        include: [
          path.resolve(__dirname, 'src/js'),
          path.resolve(__dirname, 'node_modules/ky')
        ],
        use: {
          loader: 'babel-loader',
          options: {
            presets: [
              [
                '@babel/preset-env', {
                  useBuiltIns: 'usage',
                  corejs: 3,
                  targets: {
                    ie: '11'
                  }
                }
              ]
            ]
          }
        }
      }
    ]
  },
  plugins: [
    new WebpackAssetsManifest()
  ]
}
