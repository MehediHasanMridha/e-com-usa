/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            poppins: ['Poppins']
        },
        extend: {
            colors: {
                cultured: '#F6F6F8',
                serpent: '#56CFE1',
                taupeGray: '#878787',
                vred: '#CC1512',
                rbalck: '#222222',
            },
            boxShadow: {
                'sshadow': 'rgba(0, 0, 0, 0.24) 0px 3px 8px',
            }
        },
    },
    plugins: [],
}

