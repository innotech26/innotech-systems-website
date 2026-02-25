import './bootstrap';
import Alpine from 'alpinejs';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

window.Alpine = Alpine;
Alpine.start();

// Register GSAP Plugin
gsap.registerPlugin(ScrollTrigger);

// 1. Hero Animation (Load instantly)
document.addEventListener("DOMContentLoaded", () => {
    // Hero Text Stagger
    if(document.querySelector('.hero-text')) {
        gsap.from(".hero-text", {
            duration: 1,
            y: 50,
            opacity: 0,
            stagger: 0.2,
            ease: "power3.out"
        });
    }

    // 2. Services Fade In on Scroll
    const serviceCards = gsap.utils.toArray('.service-card');
    serviceCards.forEach(card => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            y: 50,
            opacity: 0,
            duration: 0.8
        });
    });
});