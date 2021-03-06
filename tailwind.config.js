module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            gridRow: {
                "span-21": "span 21 / span 21",
                "span-7": "span 7 / span 7",
                "span-8": "span 8 / span 8",
                "span-9": "span 9 / span 9",
                "span-10": "span 10 / span 10",
                "span-11": "span 11 / span 11",
                "span-22": "span 22 / span 22",
                "span-23": "span 23 / span 23",
                "span-24": "span 24 / span 24",
                "span-25": "span 25 / span 25",
                8: "span 8 / span 8",
                12: "span 12 / span 12",
            },
            width: {
                15: "15rem",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
