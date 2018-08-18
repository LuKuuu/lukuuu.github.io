// Sample Media Player using HTML5's Media API
//
// Ian Devlin (c) 2012
// http://iandevlin.com
// http://twitter.com/iandevlin
//
// This was written as part of an article for the February 2013 edition of .net magazine (http://netmagazine.com/)

// Wait for the DOM to be loaded before initialising the media player
document.addEventListener("DOMContentLoaded", function() { initialiseMediaPlayer(); }, false);

// Variables to store handles to various required elements
var mediaPlayer;
var playPauseBtn;
var muteBtn;
var progressBar;
var fullScreenButton;

function initialiseMediaPlayer() {
	// Get a handle to the player
	mediaPlayer = document.getElementById('media-video');

	// Get handles to each of the buttons and required elements
	playPauseBtn = document.getElementById('play-pause-button');
	muteBtn = document.getElementById('mute-button');
	progressBar = document.getElementById('progress-bar');
	fullScreenButton = document.getElementById("full-screen-button");

	// Hide the browser's default controls
//	mediaPlayer.controls = false;

	// Add a listener for the timeupdate event so we can update the progress bar
	mediaPlayer.addEventListener('timeupdate', updateProgressBar, false);

	// Add a seekable functionality to the progress bar
	progressBar.addEventListener("mouseup", function(e)
	{ setPlayPosition(e.pageX); }, false);
	function setPlayPosition(x) {
		var progressBar = document.getElementById("progress-bar");
		var value = (x - findPos(progressBar)).toFixed(2);
		var timeToSet = ((mediaPlayer.duration /
		progressBar.offsetWidth).toFixed(2) * value).toFixed(2);
		mediaPlayer.currentTime = timeToSet;
	}
	function findPos(obj) {
		var curleft = 0;
		if (obj.offsetParent) {
			do { curleft += obj.offsetLeft; } while
			(obj = obj.offsetParent);
		}
		return curleft;
	}

	// Event listener for the full-screen button
	fullScreenButton.addEventListener("click", function() {
		if (mediaPlayer.requestFullscreen) {
			mediaPlayer.setAttribute('allowfullscreen', 'allowfullscreen');
			mediaPlayer.requestFullscreen();
		} else if (mediaPlayer.mozRequestFullScreen) {
			mediaPlayer.setAttribute('mozallowfullscreen', 'mozallowfullscreen');
			mediaPlayer.mozRequestFullScreen(); // Firefox
		} else if (mediaPlayer.webkitRequestFullscreen) {
			mediaPlayer.setAttribute('webkitallowfullscreen', 'webkitallowfullscreen');
			mediaPlayer.webkitRequestFullscreen(); // Chrome and Safari
		}
	}, false)

	// Add a listener for the play and pause events so the buttons state can be updated
	mediaPlayer.addEventListener('play', function() {
		// Change the button to be a pause button
		changeButtonType(playPauseBtn, 'pause');
	}, false);
	mediaPlayer.addEventListener('pause', function() {
		// Change the button to be a play button
		changeButtonType(playPauseBtn, 'play');
	}, false);

	// need to work on this one more...how to know it's muted?
	mediaPlayer.addEventListener('volumechange', function(e) {
		// Update the button to be mute/unmute
		if (mediaPlayer.muted) changeButtonType(muteBtn, 'unmute');
		else changeButtonType(muteBtn, 'mute');
	}, false);

	mediaPlayer.addEventListener('ended', function() { mediaPlayer.pause(); }, false);
}

function togglePlayPause() {
	// If the mediaPlayer is currently paused or has ended
	if (mediaPlayer.paused || mediaPlayer.ended) {
		// Change the button to be a pause button
		changeButtonType(playPauseBtn, 'pause');
		// Play the media
		mediaPlayer.play();
	}
	// Otherwise it must currently be playing
	else {
		// Change the button to be a play button
		changeButtonType(playPauseBtn, 'play');
		// Pause the media
		mediaPlayer.pause();
	}
}

// Stop the current media from playing, and return it to the start position
function stopPlayer() {
	mediaPlayer.pause();
	mediaPlayer.currentTime = 0;
}

// Changes the volume on the media player
function changeVolume(direction) {
	if (direction === '+') mediaPlayer.volume += mediaPlayer.volume == 1 ? 0 : 0.1;
	else mediaPlayer.volume -= (mediaPlayer.volume == 0 ? 0 : 0.1);
	mediaPlayer.volume = parseFloat(mediaPlayer.volume).toFixed(2);
}

// Toggles the media player's mute and unmute status
function toggleMute() {
	if (mediaPlayer.muted) {
		// Change the button to be a mute button
		changeButtonType(muteBtn, 'mute');
		// Unmute the media player
		mediaPlayer.muted = false;
	}
	else {
		// Change the button to be an unmute button
		changeButtonType(muteBtn, 'unmute');
		// Mute the media player
		mediaPlayer.muted = true;
	}
}

// Replays the media currently loaded in the player
function replayVideo() {
	resetPlayer();
	mediaPlayer.play();
}

// Update the progress bar
function updateProgressBar() {
	// Work out how much of the media has played via the duration and currentTime parameters
	var percentage = Math.floor((100 / mediaPlayer.duration) * mediaPlayer.currentTime);
	// Update the progress bar's value
	progressBar.value = percentage;
	// Update the progress bar's text (for browsers that don't support the progress element)
	progressBar.innerHTML = percentage + '%';
}

// Updates a button's title, innerHTML and CSS class to a certain value
function changeButtonType(btn, value) {
	btn.title = value;
	btn.innerHTML = value;
	btn.className = value;
}

// Loads a video item into the media player
function loadVideo() {
	for (var i = 0; i < arguments.length; i++) {
		var file = arguments[i].split('.');
		var ext = file[file.length - 1];
		// Check if this media can be played
		if (canPlayVideo(ext)) {
			// Reset the player, change the source file and load it
			resetPlayer();
			mediaPlayer.src = arguments[i];
			mediaPlayer.load();
			break;
		}
	}
}

// Checks if the browser can play this particular type of file or not
function canPlayVideo(ext) {
	var ableToPlayVideo = (mediaPlayer.canPlayType('video/' + ext) != "") ? 1 : "";
	var ableToPlayAudio = (mediaPlayer.canPlayType('audio/' + ext) != "") ? 1 : "";
	var ableToPlayMedia = (mediaPlayer.canPlayType('application/' + ext) != "") ? 1 : "";
	if (ableToPlayVideo == '' && ableToPlayAudio == '' && ableToPlayMedia == '') return false;
	else return true;
}

// Resets the media player
function resetPlayer() {
	// Reset the progress bar to 0
	progressBar.value = 0;
	// Move the media back to the start
	mediaPlayer.currentTime = 0;
	// Ensure that the play pause button is set as 'play'
	changeButtonType(playPauseBtn, 'play');
}