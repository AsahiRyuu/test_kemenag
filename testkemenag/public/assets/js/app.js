function toggleNav(){
  var nav = document.getElementById('mainnav');
  nav.classList.toggle('open');
}
document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.ticker-track');
  if (!track) return;

  // Gandakan konten supaya loop-nya mulus (0% → -50%)
  track.innerHTML = track.innerHTML + track.innerHTML;

  // Atur durasi berdasar lebar konten (biar speed stabil)
  const viewport = track.parentElement;
  const speedPxPerSec = 120;                           // << ubah kalau mau lebih cepat/lambat
  const contentWidth   = track.scrollWidth / 2;        // karena sudah diduplikasi
  const duration = Math.max(20, Math.min(60, contentWidth / speedPxPerSec));
  track.style.setProperty('--ticker-duration', `${duration}s`);
});


// Jam di info bar (update setiap 30 detik)
(function(){
  var el = document.getElementById('infobar-time');
  if(!el) return;
  function two(n){ return n<10 ? '0'+n : n; }
  function tick(){
    var d = new Date();
    el.textContent = two(d.getHours())+':'+two(d.getMinutes())+' WIB';
  }
  tick();
  setInterval(tick, 30000);
})();
