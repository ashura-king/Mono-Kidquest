const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
const container = document.body;

const audioPaths = {
    A: '/public/Sound/A.mp3',
    B: '/public/Sound/B.mp3',
    C: '/public/Sound/C.mp3',
    D: '/public/Sound/D.mp3',
    E: '/public/Sound/E.mp3',
    F: '/public/Sound/F.mp3',
    G: '/public/Sound/G.mp3',
    H: '/public/Sound/H.mp3',
    I: '/public/Sound/I.mp3',
    J: '/public/Sound/J.mp3',
    K: '/public/Sound/K.mp3',
    L: '/public/Sound/L.mp3',
    M: '/public/Sound/M.mp3',
    N: '/public/Sound/N.mp3',
    O: '/public/Sound/O.mp3',
    P: '/public/Sound/P.mp3',
    Q: '/public/Sound/Q.mp3',
    R: '/public/Sound/R.mp3',
    S: '/public/Sound/S.mp3',
    T: '/public/Sound/T.mp3',
    U: '/public/Sound/U.mp3',
    V: '/public/Sound/V.mp3',
    W: '/public/Sound/W.mp3',
    X: '/public/Sound/X.mp3',
    Y: '/public/Sound/Y.mp3',
    Z: '/public/Sound/Z.mp3'
};

letters.split('').forEach(letter => {
    const box = document.createElement('div');
    box.className = 'box';
    box.textContent = letter;

    box.addEventListener('mouseover', () => {
        const audioPath = audioPaths[letter];
        if (audioPath) {
            const audio = new Audio(audioPath);
            audio.play();
        }
        box.classList.add('animate');
    });

    box.addEventListener('animationend', () => {
        box.classList.remove('animate');
    });

    container.appendChild(box);
});