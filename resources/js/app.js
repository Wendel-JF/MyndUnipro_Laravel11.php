import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


    
// DARK MODE TOGGLE BUTTON
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
        var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

        // Função para atualizar ícones com base no tema
        function updateIcons() {
            if (document.documentElement.classList.contains("dark")) {
                themeToggleDarkIcon.classList.remove("hidden");
                themeToggleLightIcon.classList.add("hidden");
            } else {
                themeToggleDarkIcon.classList.add("hidden");
                themeToggleLightIcon.classList.remove("hidden");
            }
        }

        // Verifica o estado inicial do tema
        if (
            localStorage.getItem("theme") === "dark" ||
            (!localStorage.getItem("theme") &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }

        // Atualiza os ícones no carregamento inicial
        updateIcons();

        var themeToggleBtn = document.getElementById("theme-toggle");

        // Alterna o tema e salva no localStorage
        themeToggleBtn.addEventListener("click", function () {
            document.documentElement.classList.toggle("dark");

            if (document.documentElement.classList.contains("dark")) {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.setItem("theme", "light");
            }

            // Atualiza os ícones após a mudança de tema
            updateIcons();
        });

