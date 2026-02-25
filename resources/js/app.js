import './bootstrap';
import Alpine from 'alpinejs';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

window.Alpine = Alpine;
Alpine.start();

// Register GSAP Plugin
gsap.registerPlugin(ScrollTrigger);

// Professional motion defaults across the site.
gsap.defaults({
    ease: "power2.out",
    duration: 0.75
});

document.addEventListener("DOMContentLoaded", () => {
    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    if (prefersReducedMotion) {
        return;
    }

    // Hero Text Stagger
    if (document.querySelector('.hero-text')) {
        gsap.from(".hero-text", {
            duration: 0.95,
            y: 44,
            opacity: 0,
            stagger: 0.14,
            clearProps: "transform"
        });
    }

    // Smoothly introduce the sticky nav and top utility bar.
    gsap.from("nav", {
        y: -30,
        opacity: 0,
        duration: 0.65
    });

    gsap.from("main section", {
        scrollTrigger: {
            trigger: "main",
            start: "top 78%"
        },
        y: 24,
        opacity: 0,
        duration: 0.7
    });

    // Card reveal for service cards and card-like surfaces used across pages.
    const cards = Array.from(new Set(gsap.utils.toArray('.service-card, .group.rounded-2xl, article.rounded-2xl')));
    cards.forEach((card, index) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            y: 26,
            opacity: 0,
            duration: 0.65,
            delay: (index % 4) * 0.04
        });
    });

    if (document.querySelector("footer")) {
        gsap.from("footer", {
            scrollTrigger: {
                trigger: "footer",
                start: "top 92%",
                toggleActions: "play none none reverse"
            },
            y: 24,
            opacity: 0,
            duration: 0.75
        });
    }
});
