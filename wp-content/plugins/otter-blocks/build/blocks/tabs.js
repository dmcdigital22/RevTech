!function(){"use strict";var e={n:function(t){var c=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(c,{a:c}),c},d:function(t,c){for(var s in c)e.o(c,s)&&!e.o(t,s)&&Object.defineProperty(t,s,{enumerable:!0,get:c[s]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}},t=window.wp.i18n,c=window.wp.domReady;e.n(c)()((()=>{const e=document.querySelectorAll(".wp-block-themeisle-blocks-tabs");let c=!1;const s=[];var o,l;e.forEach((e=>{const o=Array.from(e.querySelectorAll(":scope > .wp-block-themeisle-blocks-tabs__content > .wp-block-themeisle-blocks-tabs-item")),l=document.createElement("div");l.classList.add("wp-block-themeisle-blocks-tabs__header"),e.prepend(l),o.forEach(((e,a)=>{const n=document.createElement("div");n.classList.add("wp-block-themeisle-blocks-tabs__header_item");const i=e.querySelector(":scope > .wp-block-themeisle-blocks-tabs-item__content");"true"!==e.dataset.defaultOpen||c?s.push({headerItem:n,content:i}):(n.classList.add("active"),i.classList.add("active"),c=!0),n.innerHTML=e.dataset.title||(0,t.__)("Untitled Tab"),n.tabIndex=0;const r=e.querySelector(".wp-block-themeisle-blocks-tabs-item__header"),d=(e,t)=>{const c=e.querySelector(":scope > .wp-block-themeisle-blocks-tabs-item__content"),s=e.querySelector(":scope > .wp-block-themeisle-blocks-tabs-item__header");c.classList.toggle("active",t===a),c.classList.toggle("hidden",t!==a),s.classList.toggle("active",t===a),s.classList.toggle("hidden",t!==a),Array.from(l.childNodes).forEach(((e,t)=>{e.classList.toggle("active",t===a),e.classList.toggle("hidden",t!==a)}))};n.addEventListener("click",(()=>o.forEach(d))),n.addEventListener("keyup",(e=>{"Enter"===e.code&&(e.preventDefault(),o.forEach(d))})),r.addEventListener("click",(()=>o.forEach(d))),r.addEventListener("keyup",(e=>{"Enter"===e.code&&(e.preventDefault(),o.forEach(d))})),l.appendChild(n)}))})),c||(null==s||null===(o=s[0])||void 0===o||o.headerItem.classList.add("active"),null==s||null===(l=s[0])||void 0===l||l.content.classList.add("active"))}))}();