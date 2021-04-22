const path = require("path")
const MiniCssExtractPlugin = require("mini-css-extract-plugin")

module.exports = {
  entry: {
    scripts: "./inc/js/scripts.js",
    vendors: "./inc/js/vendors.js",
    bootstrap: "./inc/scss/bootstrap.scss",
    main: "./inc/scss/main.scss"
  },
  plugins: [new MiniCssExtractPlugin({ filename: "../css/[name].css" })],
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"]
      },
      {
        test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: "file-loader",
            options: {
              entry: path.resolve(__dirname, "inc/fonts"),
              name: "[name].[ext]",
              outputPath: "../fonts/"
            }
          }
        ]
      }
    ]
  },
  watch: true
}
