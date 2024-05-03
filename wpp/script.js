document.addEventListener('DOMContentLoaded', function() {
    const songsList = document.querySelectorAll('.Songs li');
    const audioPlayer = document.getElementById('audioPlayer');
    const audioSource = document.getElementById('audioSource');

    songsList.forEach(function(song) {
        song.addEventListener('click', function() {
            const songSrc = this.getAttribute('data-src');
            audioSource.src = songSrc;
            audioPlayer.load();
            audioPlayer.play();
        });
    });
});


