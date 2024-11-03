const bubbleContainer = document.querySelector('.bubble-container');

for (let i = 0; i < 10; i++) {
    const bubble = document.createElement('div');
    bubble.classList.add('bubble');
    bubble.style.left = Math.random() * 100 + 'vw';
    bubble.style.animationDuration = Math.random() * 10 + 5 + 's';
    bubbleContainer.appendChild(bubble);
}
