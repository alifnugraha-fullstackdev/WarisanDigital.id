/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./*.php",
    "./templates/**/*.php",
    "./partials/**/*.php",
    "./src/**/*.{js,css}",
  ],
  theme: {
    extend: {
      colors: {
        // Material 3 Based Palette from Design
        "primary": "#cfbcff",
        "on-primary": "#381e72",
        "primary-container": "#6750a4",
        "on-primary-container": "#e0d2ff",
        "secondary": "#cdc0e9",
        "on-secondary": "#342b4b",
        "secondary-container": "#4d4465",
        "on-secondary-container": "#bfb2da",
        "tertiary": "#e7c365",
        "on-tertiary": "#3e2e00",
        "tertiary-container": "#c9a74d",
        "on-tertiary-container": "#503d00",
        "error": "#ffb4ab",
        "on-error": "#690005",
        "error-container": "#93000a",
        "on-error-container": "#ffdad6",
        "background": "#141218",
        "on-background": "#e6e0e9",
        "surface": "#141218",
        "on-surface": "#e6e0e9",
        "surface-variant": "#36343a",
        "on-surface-variant": "#cbc4d2",
        "outline": "#948e9c",
        "outline-variant": "#494551",
        "surface-bright": "#3b383e",
        "surface-dim": "#141218",
        "surface-container-lowest": "#0f0d13",
        "surface-container-low": "#1d1b20",
        "surface-container": "#211f24",
        "surface-container-high": "#2b292f",
        "surface-container-highest": "#36343a",
        
        // Legacy/Custom Names for specific worlds
        "gold": "#C9A84C",
        "gold-glow": "#E8C97A",
        "gold-dim": "#8A6A2A",
        "emerald-deep": "#2D6A4F",
        "blood-red": "#8B0000",
        "red-glow": "#CC2200",
      },
      fontFamily: {
        "headline": ["Newsreader", "serif"],
        "display": ["Newsreader", "serif"],
        "body": ["Inter", "sans-serif"],
        "label": ["Space Grotesk", "sans-serif"],
        "mono": ["Space Mono", "monospace"],
      },
      backgroundImage: {
        'noise': "url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E\")",
      }
    },
  },
  plugins: [],
}