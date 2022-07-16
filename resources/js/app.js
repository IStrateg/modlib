import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


var le = document.querySelectorAll(".light-switch");
le.length > 0 && le.forEach((function(e, t) {
        "true" !== localStorage.getItem("dark-mode") && "dark-mode"in localStorage || (e.checked = !0),
            e.addEventListener("change", (function() {
                    var i = e.checked;
                    le.forEach((function(e, n) {
                            n !== t && (e.checked = i)
                        }
                    )),
                        e.checked ? (document.documentElement.classList.add("dark"),
                            localStorage.setItem("dark-mode", !0)) : (document.documentElement.classList.remove("dark"),
                            localStorage.setItem("dark-mode", !1))
                }
            ))
    }));

