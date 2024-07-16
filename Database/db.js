// Add your enhanced JavaScript for the music player
const musicPlayer = document.getElementById('musicPlayer');
const playBtn = document.getElementById('playBtn');

playBtn.addEventListener('click', togglePlay);

function togglePlay() {
  if (musicPlayer.paused) {
    musicPlayer.play();
    playBtn.classList.add('playing');
    document.body.classList.add('playing');
  } else {
    musicPlayer.pause();
    playBtn.classList.remove('playing');
    document.body.classList.remove('playing');
  }
}
