const merge = require('webpack-merge')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const common = require('./webpack.common.js')

module.exports = merge(common, {
  mode: 'production',
  output: {
    filename: `[name]-[chunkhash:6].js`
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name]-[chunkhash:6].css',
      chunkFilename: '[id]-[chunkhash:6].css'
    })
  ]
})
