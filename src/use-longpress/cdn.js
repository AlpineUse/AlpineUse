import useLongPressPlugin from "./index.js";

// Alpine.js init
document.addEventListener("alpine:init", () => {
  useLongPressPlugin();
});

// Livewire navigation
document.addEventListener("livewire:navigated", () => {
  useLongPressPlugin();
});
