(() => {
    "use strict";
    function isWebp() {
        function testWebP(callback) {
            let webP = new Image;
            webP.onload = webP.onerror = function() {
                callback(webP.height == 2);
            };
            webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
        }
        testWebP((function(support) {
            let className = support === true ? "webp" : "no-webp";
            document.documentElement.classList.add(className);
        }));
    }

    function tab() {
        const buttonsTab = document.querySelectorAll(".tab-btn");
        const tabs = document.querySelectorAll(".tab");
        buttonsTab.forEach((btn => {
            btn.addEventListener("click", (() => {
                const {tab: tabId} = btn.dataset;
                const currentTab = document.querySelector(`.tab[data-tab="${tabId}"]`);
                tabs.forEach((tab => tab.classList.remove("active")));
                currentTab.classList.add("active");
                buttonsTab.forEach((btn => btn.classList.remove("active")));
                btn.classList.add("active");
            }));
        }));
    }
    
    isWebp();
    tab();
})();