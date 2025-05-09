<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AirRadio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-black text-white font-sans">
    <div class="container mx-auto px-4 py-8">
        <header class="mb-8">
            <h1 class="text-3xl font-bold">AirRadio</h1>
            <p class="text-gray-400">Your favorite radio stations in one place</p>
        </header>

        <main>
            <livewire:radio-search />
        </main>
    </div>

    <div id="player-bar" class="fixed bottom-0 left-0 right-0 bg-gray-900 p-4 hidden backdrop-blur-lg bg-opacity-90 border-t border-gray-800 shadow-lg transition-all duration-300 z-50">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img id="current-radio-icon" src="" alt="Radio icon" class="w-14 h-14 rounded-lg shadow-md object-cover">
                <div>
                    <h3 id="current-radio-name" class="font-semibold text-lg"></h3>
                    <p id="current-radio-language" class="text-sm text-gray-400 flex items-center">
                        <span class="inline-block w-2 h-2 rounded-full bg-green-500 mr-2"></span>
                        <span class="capitalize"></span>
                    </p>
                </div>
            </div>
            <div class="flex items-center space-x-6">
                <div id="sound-wave" class="hidden h-8 flex items-center space-x-1">
                    <div class="w-1 bg-green-500 rounded-full animate-sound-wave" style="height: 30%; animation-delay: -0.5s;"></div>
                    <div class="w-1 bg-green-500 rounded-full animate-sound-wave" style="height: 60%; animation-delay: -0.3s;"></div>
                    <div class="w-1 bg-green-500 rounded-full animate-sound-wave" style="height: 100%; animation-delay: -0.1s;"></div>
                    <div class="w-1 bg-green-500 rounded-full animate-sound-wave" style="height: 80%; animation-delay: -0.4s;"></div>
                    <div class="w-1 bg-green-500 rounded-full animate-sound-wave" style="height: 40%; animation-delay: -0.2s;"></div>
                </div>
                <div class="flex items-center bg-gray-800 rounded-full px-3 py-1">
                    <button id="volume-down-btn" class="text-gray-400 hover:text-white p-2 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072M12 6a7.975 7.975 0 00-3 1.142M12 6a7.975 7.975 0 013 1.142" />
                        </svg>
                    </button>
                    <input type="range" id="volume-control" min="0" max="100" value="80" class="w-24 mx-2 accent-green-500">
                    <button id="volume-up-btn" class="text-gray-400 hover:text-white p-2 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072M12 6a7.975 7.975 0 00-3 1.142M12 6a7.975 7.975 0 013 1.142M19.071 5.929a9 9 0 010 12.728M5.929 5.929a9 9 0 0112.728 0" />
                        </svg>
                    </button>
                </div>
                <button id="play-pause-btn" class="bg-green-500 hover:bg-green-600 text-white rounded-full p-4 shadow-lg transform hover:scale-105 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                    </svg>
                </button>
                <button id="cast-btn" class="text-gray-400 hover:text-white p-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 14.5A2.5 2.5 0 0011 12c0-1.38-1.12-2.5-2.5-2.5S6 10.62 6 12c0 1.38 1.12 2.5 2.5 2.5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15.5c-1.66 0-3 1.34-3 3v2h12v-2c0-1.66-1.34-3-3-3H5zM19 6.5h-1v-1c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v1H5c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-9c0-1.1-.9-2-2-2z" />
                    </svg>
                </button>
                <div id="loading-indicator" class="hidden ml-2">
                    <div class="animate-spin rounded-full h-6 w-6 border-t-2 border-b-2 border-green-500"></div>
                </div>
            </div>
        </div>
    </div>

    <audio id="audio-player" style="display: none;"></audio>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const audioPlayer = document.getElementById('audio-player');
            const playerBar = document.getElementById('player-bar');
            const playPauseBtn = document.getElementById('play-pause-btn');
            const castBtn = document.getElementById('cast-btn');
            const currentRadioName = document.getElementById('current-radio-name');
            const currentRadioIcon = document.getElementById('current-radio-icon');
            const currentRadioLanguage = document.getElementById('current-radio-language');
            const volumeControl = document.getElementById('volume-control');
            const volumeUpBtn = document.getElementById('volume-up-btn');
            const volumeDownBtn = document.getElementById('volume-down-btn');
            const loadingIndicator = document.getElementById('loading-indicator');
            const soundWave = document.getElementById('sound-wave');

            let isPlaying = false;
            let isLoading = false;
            let currentRadio = null;
            let castSession = null;

            // Set initial volume
            audioPlayer.volume = volumeControl.value / 100;

            // Audio player event listeners
            audioPlayer.addEventListener('waiting', () => {
                isLoading = true;
                loadingIndicator.classList.remove('hidden');
                playPauseBtn.classList.add('opacity-50');
                soundWave.classList.add('hidden');
            });

            audioPlayer.addEventListener('playing', () => {
                isLoading = false;
                loadingIndicator.classList.add('hidden');
                playPauseBtn.classList.remove('opacity-50');
                if (isPlaying) {
                    soundWave.classList.remove('hidden');
                }
            });

            audioPlayer.addEventListener('pause', () => {
                soundWave.classList.add('hidden');
            });

            // Volume control event listeners
            volumeControl.addEventListener('input', () => {
                audioPlayer.volume = volumeControl.value / 100;

                // If casting, update cast volume
                if (castSession) {
                    castSession.setVolume(volumeControl.value / 100);
                }
            });

            volumeUpBtn.addEventListener('click', () => {
                volumeControl.value = Math.min(parseInt(volumeControl.value) + 10, 100);
                audioPlayer.volume = volumeControl.value / 100;

                // If casting, update cast volume
                if (castSession) {
                    castSession.setVolume(volumeControl.value / 100);
                }
            });

            volumeDownBtn.addEventListener('click', () => {
                volumeControl.value = Math.max(parseInt(volumeControl.value) - 10, 0);
                audioPlayer.volume = volumeControl.value / 100;

                // If casting, update cast volume
                if (castSession) {
                    castSession.setVolume(volumeControl.value / 100);
                }
            });

            // Play radio function
            function playRadio(radio) {
                currentRadio = radio;

                // Show loading state
                isLoading = true;
                loadingIndicator.classList.remove('hidden');
                playPauseBtn.classList.add('opacity-50');
                soundWave.classList.add('hidden');

                // If casting, play on Chromecast
                if (castSession) {
                    const mediaInfo = new chrome.cast.media.MediaInfo(radio.url, 'audio/mp3');
                    mediaInfo.metadata = new chrome.cast.media.MusicTrackMetadata();
                    mediaInfo.metadata.title = radio.name;
                    mediaInfo.metadata.artist = radio.language;
                    mediaInfo.metadata.images = [
                        { url: radio.icon }
                    ];

                    const request = new chrome.cast.media.LoadRequest(mediaInfo);
                    castSession.loadMedia(request).then(
                        function() {
                            isPlaying = true;
                            isLoading = false;
                            loadingIndicator.classList.add('hidden');
                            playPauseBtn.classList.remove('opacity-50');
                            soundWave.classList.remove('hidden');
                            updatePlayPauseButton();
                        },
                        function(error) {
                            console.error('Error loading media: ' + error);
                            // Fallback to local playback
                            playLocalRadio(radio);
                        }
                    );
                } else {
                    // Play locally
                    playLocalRadio(radio);
                }

                // Update player bar
                currentRadioName.textContent = radio.name;
                currentRadioIcon.src = radio.icon;
                currentRadioLanguage.querySelector('span:last-child').textContent = radio.language;
                playerBar.classList.remove('hidden');
            }

            function playLocalRadio(radio) {
                audioPlayer.src = radio.url;
                audioPlayer.play();
                isPlaying = true;
                updatePlayPauseButton();
            }

            // Play/Pause button functionality
            playPauseBtn.addEventListener('click', () => {
                if (castSession && castSession.media && castSession.media.length > 0) {
                    // Control Chromecast playback
                    const mediaSession = castSession.media[0];
                    if (isPlaying) {
                        mediaSession.pause(null);
                        isPlaying = false;
                        soundWave.classList.add('hidden');
                    } else {
                        mediaSession.play(null);
                        isPlaying = true;
                        if (!isLoading) {
                            soundWave.classList.remove('hidden');
                        }
                    }
                } else {
                    // Control local playback
                    if (isPlaying) {
                        audioPlayer.pause();
                        isPlaying = false;
                        soundWave.classList.add('hidden');
                    } else {
                        audioPlayer.play();
                        isPlaying = true;
                        if (!isLoading) {
                            soundWave.classList.remove('hidden');
                        }
                    }
                }
                updatePlayPauseButton();
            });

            function updatePlayPauseButton() {
                playPauseBtn.innerHTML = isPlaying ?
                    `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6" />
                          </svg>` :
                    `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                          </svg>`;
            }

            // Add click event listener for radio cards
            document.addEventListener('click', function(e) {
                const radioCardElement = e.target.closest('.radio-card');
                if (radioCardElement) {
                    // Check if the click was on the favorite button
                    if (e.target.closest('button[wire\\:click]')) {
                        // If it was the favorite button, don't play the radio
                        return;
                    }

                    const radioCard = radioCardElement.querySelector('.cursor-pointer');
                    if (radioCard) {
                        const radio = {
                            url: radioCard.dataset.url,
                            name: radioCard.dataset.name,
                            language: radioCard.dataset.language,
                            icon: radioCard.dataset.icon
                        };
                        playRadio(radio);
                    }
                }
            });

            // Chromecast integration
            // Load the Cast framework
            window['__onGCastApiAvailable'] = function(isAvailable) {
                if (isAvailable) {
                    initializeCastApi();
                }
            };

            function initializeCastApi() {
                cast.framework.CastContext.getInstance().setOptions({
                    receiverApplicationId: chrome.cast.media.DEFAULT_MEDIA_RECEIVER_APP_ID,
                    autoJoinPolicy: chrome.cast.AutoJoinPolicy.ORIGIN_SCOPED
                });

                const castContext = cast.framework.CastContext.getInstance();

                // Listen for cast state changes
                castContext.addEventListener(
                    cast.framework.CastContextEventType.SESSION_STATE_CHANGED,
                    function(event) {
                        switch(event.sessionState) {
                            case cast.framework.SessionState.SESSION_STARTED:
                            case cast.framework.SessionState.SESSION_RESUMED:
                                castSession = castContext.getCurrentSession();
                                // If we have a current radio, start casting it
                                if (currentRadio) {
                                    audioPlayer.pause();
                                    playRadio(currentRadio);
                                }
                                castBtn.classList.add('text-green-500');
                                break;
                            case cast.framework.SessionState.SESSION_ENDED:
                                castSession = null;
                                castBtn.classList.remove('text-green-500');
                                // If we were playing, resume local playback
                                if (isPlaying && currentRadio) {
                                    playLocalRadio(currentRadio);
                                }
                                break;
                        }
                    }
                );

                // Cast button click handler
                castBtn.addEventListener('click', function() {
                    if (castSession) {
                        // Disconnect from current session
                        castSession.endSession(true);
                    } else {
                        // Request a new session
                        castContext.requestSession();
                    }
                });
            }

            // Load the Cast API
            if (!window.chrome || !window.chrome.cast) {
                const script = document.createElement('script');
                script.src = 'https://www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1';
                document.head.appendChild(script);
            }
        });
    </script>

    <style>
        @keyframes sound-wave {
            0% { height: 10%; }
            50% { height: 100%; }
            100% { height: 10%; }
        }

        .animate-sound-wave {
            animation: sound-wave 1s ease-in-out infinite;
        }
    </style>
    @livewireScripts
</body>

</html>