<template>
       <div class="language-toggle">
        <label class="switch">
            <input type="checkbox" id="languageToggle">
            <span>English</span>
            <span>Malay</span>
        </label>
        </div>

</template>

<script setup>

document.addEventListener('DOMContentLoaded', () => {
const languageToggle = document.getElementById('languageToggle');

// Check if user preferred Malay and is on Malay page
const isMalayPage = window.location.href.includes('bm.index');
const savedLanguage = localStorage.getItem('preferredLanguage');

if (isMalayPage || savedLanguage === 'Malay') {
  languageToggle.checked = true;
}

// Event listener for toggle button
languageToggle.addEventListener('change', () => {
  if (languageToggle.checked) {
    // Set language to Malay and navigate to Malay page
    localStorage.setItem('preferredLanguage', 'Malay');
    window.location.href = "{{ route('bm.index') }}"; // Use Laravel route for BM page
  } else {
    // Set language to English and navigate back to English page
    localStorage.setItem('preferredLanguage', 'English');
    window.location.href = "{{ route('index') }}"; // Add a route for English page if needed
  }
});
});
</script>

<style scoped>

/* Language Toggle Styles */
.language-toggle {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 14px;
}

/* From Uiverse.io by cbolson */ 
.header .switch {
  --_switch-bg-clr: #a9a9a9;
  --_switch-padding: 3px; /* padding around button*/
  --_slider-bg-clr: #ef6603; /* slider color unchecked */
  --_slider-bg-clr-on: #ef6603; /* slider color checked */
  --_slider-txt-clr: #ffffff;
  --_label-padding: 3px 15px; /* padding around the labels -  this gives the switch it's global width and height */
  --_switch-easing: cubic-bezier(
    0.47,
    1.64,
    0.41,
    0.8
  ); /* easing on toggle switch */
  color: white;
  width: fit-content;
  display: flex;
  justify-content: center;
  position: relative;
  border-radius: 9999px;
  cursor: pointer;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  position: relative;
  isolation: isolate;
}

.header .switch input[type="checkbox"] {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}
.header .switch > span {
  display: grid;
  place-content: center;
  transition: opacity 300ms ease-in-out 150ms;
  padding: var(--_label-padding);
}
.header .switch::before,
.header .switch::after {
  content: "";
  position: absolute;
  border-radius: inherit;
  transition: inset 150ms ease-in-out;
}
/* switch slider */
.header .switch::before {
  background-color: var(--_slider-bg-clr);
  inset: var(--_switch-padding) 50% var(--_switch-padding)
    var(--_switch-padding);
  transition:
    inset 500ms var(--_switch-easing),
    background-color 500ms ease-in-out;
  z-index: -1;
  box-shadow:
    inset 0 1px 1px rgba(0, 0, 0, 0.3),
    0 1px rgba(255, 255, 255, 0.3);
}
/* switch bg color */
.header .switch::after {
  background-color: var(--_switch-bg-clr);
  inset: 0;
  z-index: -2;
}
/* switch hover & focus */
.header .switch:focus-within::after {
  inset: -0.25rem;
}
.header .switch:has(input:checked):hover > span:first-of-type,
.header .switch:has(input:not(:checked)):hover > span:last-of-type {
  opacity: 1;
  transition-delay: 0ms;
  transition-duration: 100ms;
}
/* switch hover */
.header .switch:has(input:checked):hover::before {
  inset: var(--_switch-padding) var(--_switch-padding) var(--_switch-padding)
    45%;
}
.header .switch:has(input:not(:checked)):hover::before {
  inset: var(--_switch-padding) 45% var(--_switch-padding)
    var(--_switch-padding);
}
/* checked - move slider to right */
.header .switch:has(input:checked)::before {
  background-color: var(--_slider-bg-clr-on);
  inset: var(--_switch-padding) var(--_switch-padding) var(--_switch-padding)
    50%;
}
/* checked - set opacity */
.header .switch > span:last-of-type,
.header .switch > input:checked + span:first-of-type {
  opacity: 0.75;
}
.header .switch > input:checked ~ span:last-of-type {
  opacity: 1;
}

.header .cta-btn {
  font-family: var(--heading-font);
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 3px 10px;
  border-radius: 50px;
  transition: 0.3s;
  margin: 10px;
  background: var(--accent-color);
  color: var(--contrast-color);
  font-size: 14px;
  
  /* Add box shadow for 3D effect */
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2), 0px 4px 10px rgba(0, 0, 0, 0.15);
}

.header .cta-btn:hover {
  background: color-mix(in srgb, var(--accent-color) 90%, white 15%);
  
  /* Make it look like it's lifting on hover */
  box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.25), 0px 6px 15px rgba(0, 0, 0, 0.2);
  transform: translateY(-2px); /* Slight lift */
}

.header .cta-btn:active {
  /* Simulate pressing down */
  box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.2), 0px 3px 8px rgba(0, 0, 0, 0.15);
  transform: translateY(2px);
}

</style>

