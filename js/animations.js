document.addEventListener('DOMContentLoaded', () => {
    const bubbles = document.querySelectorAll('.bubble');

    // Function to randomize bubble positions
    const randomizeBubblePositions = () => {
        bubbles.forEach(bubble => {
            const x = Math.random() * window.innerWidth;
            const y = Math.random() * window.innerHeight;
            bubble.style.left = `${x}px`;
            bubble.style.top = `${y}px`;
        });
    };

    // Change color on mouse enter
    bubbles.forEach(bubble => {
        bubble.addEventListener('mouseenter', () => {
            bubble.style.backgroundColor = 'blue'; // Change to blue on hover
        });
        bubble.addEventListener('mouseleave', () => {
            bubble.style.backgroundColor = 'red'; // Change back to red
        });
    });

    // Initial random position
    randomizeBubblePositions();

    // Randomize positions every few seconds
    setInterval(randomizeBubblePositions, 3000);
});
