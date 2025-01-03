module.exports = {
    plugins: [
        require('autoprefixer'), // Ajoute des préfixes spécifiques aux navigateurs
        require('cssnano')({ preset: 'default' }), // Minifie le CSS
    ],
};
