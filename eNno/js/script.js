document.addEventListener('DOMContentLoaded', function () {
    const videoModal = document.getElementById('videoModal');
    const videoFrame = document.getElementById('videoFrame');

    videoModal.addEventListener('show.bs.modal', function () {
        videoFrame.src = "https://www.youtube.com/embed/Y7f98aduVJ8?autoplay=1";
    });

    videoModal.addEventListener('hidden.bs.modal', function () {
        videoFrame.src = "";
    });
});