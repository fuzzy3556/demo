document.addEventListener("mousemove", (e) => {
    document.querySelectorAll(".cloud").forEach(cloud => {
        const cloudRect = cloud.getBoundingClientRect();
        const dx = e.clientX - (cloudRect.left + cloudRect.width / 2);
        const dy = e.clientY - (cloudRect.top + cloudRect.height / 2);
        const distance = Math.sqrt(dx * dx + dy * dy);

        if (distance < 200) { // Increase the range of movement
            const moveFactor = -1.2; // Move even further away
            cloud.style.transform = `translate(${dx * moveFactor}px, ${dy * moveFactor}px)`;
        } else {
            cloud.style.transform = "translate(0, 0)";
        }
    });
});
