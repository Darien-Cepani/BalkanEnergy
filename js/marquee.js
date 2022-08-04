const root = document.documentElement;
const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
const marquee1 = document.querySelector("ul.line1");

// Line 1
root.style.setProperty("--marquee-elements", marquee1.children.length);

for(let i=0; i<marqueeElementsDisplayed; i++) {
  marquee1.appendChild(marquee1.children[i].cloneNode(true));
}