const inputFile = document.getElementById("inputFile");
const videoContainer = document.getElementById("videoContainer");

inputFile.addEventListener("change", function () {
  const file = inputFile.files[0];
  const url = URL.createObjectURL(file);
  const video = document.createElement("video");
  video.src = url;
  video.controls = true;
  videoContainer.appendChild(video);
});