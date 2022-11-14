const path = require('path');
const fs = require('fs');
const HtmlWebpackPlugin = require('html-webpack-plugin');

// Look for .php files
const phpFiles = [];
const directories = ['template'];
while (directories.length > 0) {
    const directory = directories.pop();
    const dirContents = fs.readdirSync(directory)
        .map(file => path.join(directory, file));

    phpFiles.push(...dirContents.filter(file => file.endsWith('.php')));
    directories.push(...dirContents.filter(file => fs.statSync(file).isDirectory()));
}

const entry = { common: './js/common.js' };
phpFiles.forEach(phpFile => {
    const entryName = phpFile.replace(path.normalize("template/"), "").replace('.php', '');
    if (entryName.substring(0, 3) !== 'lib') {
        entry[entryName] = `./js/${entryName}.js`;
    }
});

module.exports = {
    mode: 'development',
    entry,
    plugins: [
        ...phpFiles.map(phpFile => {
            const entryName = phpFile.replace(path.normalize("template/"), "");
            const chunkName = entryName.replace('.php', '');
            return new HtmlWebpackPlugin({
                template: phpFile,
                filename: entryName,
                chunks: ['common', chunkName],
                inject: entryName.substring(0, 3) !== 'lib'
            })
        }
        ),
    ],
    output: {
        filename: '[name].[contenthash].js',
        path: path.resolve(__dirname, './dist'),
        publicPath: './dist/',
        clean: true,
    },
    module: {
        rules: [
            {
                test: /\.php$/i,
                use: 'html-loader',
            },
            {
                test: /\.(png|jpg|webp)$/i,
                type: 'asset/resource',
                use: [{
                    loader: 'image-webpack-loader',
                    options: {
                        pngquant: {
                            quality: [.90, .95],
                        },
                        webp: {
                            quality: 75
                        },
                        // esModule: false
                    }
                }],
                parser: {
                    dataUrlCondition: {
                        maxSize: 10 * 1024 // Inline anything under 10kb
                    },
                    javascript: {
                        url: 'relative', // disable parsing of `new URL()` syntax
                    },
                },
                generator: {
                    publicPath: 'https://www.megatrustee.com.my/dist/',
                    filename: '[hash][ext]',
                }
            },
            {
                test: /\.s[ac]ss$/i,
                use: ['style-loader', 'css-loader', 'sass-loader'],
            },
            // {
            //     test: /\.(woff|woff2|eot|ttf|otf)$/i,
            //     type: 'asset/resource',
            // },
        ],
    },
};