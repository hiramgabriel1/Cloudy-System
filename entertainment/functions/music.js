var btnPlay = document.getElementById("play");
var btnStop = document.getElementById("stop");
var btnReplay = document.getElementById("replay");
//Image
var cover = document.querySelector(".cover");
//Element audio
var audio = document.getElementById("audio");
//Icon play and pause
var icon = document.getElementById("icon");
//Progress Bar
var progressBar = document.getElementById("progress-bar");
var progress = document.getElementById("progress");

var count = 0;

function playMusic() {
  cover.setAttribute("class", "play");
  icon.setAttribute("class", "fas fa-pause");
  audio.play();
  //Count the clicks
  count += 1;
}

//---------------- Play music
btnPlay.addEventListener("click", () => {
  playMusic();

  //Restart the class
  if (count % 2 == 0) {
    //Pause music
    cover.setAttribute("class", "cover");
    icon.setAttribute("class", "fas fa-play");
    audio.pause();
  }
});

//---------------- Stop music
btnStop.addEventListener("click", () => {
  stopMusic();
  count = 0;
});

//---------------- Replay music
btnReplay.addEventListener("click", () => {
  var time = audio.currentTime;
  var replay_10 = time - 10;
  audio.currentTime = replay_10;
});

//---------------- Audio
audio.addEventListener("timeupdate", function () {
  //Time
  var duration = audio.duration;
  var currentTime = audio.currentTime;
  document.getElementById("duration").innerHTML = convertElapsedTime(duration);
  document.getElementById("current-time").innerHTML =
    convertElapsedTime(currentTime);
  //Progress Bar
  progress.style.width = (currentTime / duration) * 100 + "%";

  //Stop when audio ends
  if (currentTime == duration) {
    stopMusic();
  }
});

//---------------- Control of the progress
progressBar.addEventListener("mousedown", function (event) {
  var clickedPosition = event.clientX - event.target.offsetLeft;
  audio.currentTime =
    (clickedPosition / event.target.offsetWidth) * audio.duration;
});

//Convert
function convertElapsedTime(inputSeconds) {
  var seconds = Math.floor(inputSeconds % 60);
  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  var minutes = Math.floor(inputSeconds / 60);
  return minutes + ":" + seconds;
}

//Function stop
function stopMusic() {
  audio.pause();
  audio.currentTime = 0;
  icon.setAttribute("class", "fas fa-play");
  cover.setAttribute("class", "cover");
}
