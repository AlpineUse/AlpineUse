const colors = require("tailwindcss/colors");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: "class",
    content: ["./resources/**/*.{php,html,js,jsx,ts,tsx,vue,twig}"],

    theme: {
        screens: {
            xs: "320px",
            sm: "768px",
            md: "1024px",
            lg: "1366px",
            xl: "1920px",
        },

        extend: {
            colors: {
                primary: {
                    light: "#0891b2",
                    DEFAULT: colors.cyan,
                    dark: "#06b6d4",
                    foreground: {
                        light: "#ffffff",
                        dark: "#ffffff",
                    },
                },
                secondary: {
                    light: "#e5e7eb",
                    DEFAULT: colors.gray,
                    dark: "#27272a",
                    foreground: {
                        light: "#000000",
                        dark: "#ffffff",
                    },
                },
                success: {
                    light: "#15803d",
                    DEFAULT: colors.green,
                    dark: "#4ade80",
                    foreground: {
                        light: "#000000",
                        dark: "#ffffff",
                    },
                },
                danger: {
                    light: "#b91c1c",
                    DEFAULT: colors.red,
                    dark: "#f87171",
                    foreground: {
                        light: "#000000",
                        dark: "#ffffff",
                    },
                },
                warning: {
                    light: "#67e8f9",
                    DEFAULT: colors.gray,
                    dark: "#0e7490",
                    foreground: {
                        light: "#000000",
                        dark: "#ffffff",
                    },
                },
                light: {
                    DEFAULT: "#fafafa",
                },
                dark: {
                    DEFAULT: "#09090b",
                },
            },
            fontFamily: {
                sans: ['"Cairo Variable"', ...defaultTheme.fontFamily.sans],
            },
            borderColor: {
                DEFAULT: "transparent",
            },
            keyframes: {
                shimmer: {
                    "100%": {
                        transform: "translateX(100%)",
                    },
                },
                "collapsible-down": {
                    from: { height: 0 },
                    to: { height: "var(--radix-collapsible-content-height)" },
                },
                "collapsible-up": {
                    from: { height: "var(--radix-collapsible-content-height)" },
                    to: { height: 0 },
                },
                "accordion-down": {
                    from: { height: 0 },
                    to: { height: "var(--radix-accordion-content-height)" },
                },
                "accordion-up": {
                    from: { height: "var(--radix-accordion-content-height)" },
                    to: { height: 0 },
                },
            },
            animation: {
                "accordion-down": "accordion-down 0.2s ease-out",
                "accordion-up": "accordion-up 0.2s ease-out",
                "collapsible-down": "collapsible-down 0.2s ease-in-out",
                "collapsible-up": "collapsible-up 0.2s ease-in-out",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("tailwind-scrollbar-hide"),
        require("tailwindcss-animate"),
        require("autoprefixer"),
    ],
};