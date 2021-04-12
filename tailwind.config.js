module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            'arvo': ['"Arvo"'],
            'gotham': ['"Gotham"'],
            'gotham-rounded': ['"Gotham Rounded"'],
            'lexend': ['"Lexend Deca"']
        },
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#760B73',
                }
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}