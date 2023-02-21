var x = 0;
function spaceClick(){
    player   = document.getElementById('video');
    btnSpace = document.getElementById('btnSpace');
    progressBar  = document.getElementById('progress-bar');
    btnCurrent = document.getElementById('current');

    flag = document.getElementById('flag');
    diem = document.getElementById('diem');

    
    playIcon = document.getElementById('play-icon');
    playIcon.style.display = 'none';
      

    player.addEventListener('timeupdate', updateProgressBar, false);
    progressBar.addEventListener("click", seek);

    if(x==0){

        if (player.paused || player.ended ) {
            btnSpace.innerHTML= 'Space';
            stopVideo();
            player.play();
            flag.style.display = 'none';
            diem.style.display = 'none';
        }
        else {    
            x=1;
            flag.style.display = 'block';
            diem.style.display = 'block';

            btnSpace.innerHTML= player.currentTime + ' - Lam lai - ' + player.duration;
            var screenWidth = $("#video").width();

            var time_s = (screenWidth * player.currentTime) / (player.duration)
            
            flag.style.marginLeft = time_s +'px';

            var timefix = (screenWidth * 15) / (player.duration)

            diem.style.marginLeft = timefix +'px';

            if(player.currentTime >= 15 && player.currentTime <=16){
                btnCurrent.innerHTML = 5 + ' điểm';
            }else{
                btnCurrent.innerHTML = 3 + ' điểm';
            }  
        }   
    } 
}


function xxx(){
    player   = document.getElementById('video');
    btnSpace = document.getElementById('btnSpace');
    progressBar  = document.getElementById('progress-bar');
    btnCurrent = document.getElementById('current');

    flag = document.getElementById('flag');
    diem = document.getElementById('diem');

    
    playIcon = document.getElementById('play-icon');
    playIcon.style.display = 'none';
      

    player.addEventListener('timeupdate', updateProgressBar, false);
    progressBar.addEventListener("click", seek);

    if(x==0){

        if (player.paused || player.ended ) {
            btnSpace.innerHTML= 'Space';
            stopVideo();
            player.play();
            flag.style.display = 'none';
            diem.style.display = 'none';
        }
        else {    
            x=1;
            flag.style.display = 'block';
            diem.style.display = 'block';

            btnSpace.innerHTML= player.currentTime + ' - Lam lai - ' + player.duration;
            var screenWidth = $("#video").width();

            var time_s = (screenWidth * player.currentTime) / (player.duration)
            
            flag.style.marginLeft = time_s +'px';

            var timefix = (screenWidth * 15) / (player.duration)

            diem.style.marginLeft = timefix +'px';

            if(player.currentTime >= 15 && player.currentTime <=16){
                btnCurrent.innerHTML = 5 + ' điểm';
            }else{
                btnCurrent.innerHTML = 3 + ' điểm';
            }  
        }   
    } 
}
 
function spacePress(){
    player   = document.getElementById('video');
    btnSpace = document.getElementById('btnSpace');
    progressBar  = document.getElementById('progress-bar');
    btnCurrent = document.getElementById('current');

    flag = document.getElementById('flag');
    diem = document.getElementById('diem');
    
    player.addEventListener('timeupdate', updateProgressBar, false);
    progressBar.addEventListener("click", seek);
   
    flag.style.display = 'block';
    diem.style.display = 'block';

    btnSpace.innerHTML= player.currentTime + ' - Lam lai - ' + player.duration;
    var screenWidth = $("#video").width();

    var time_s = (screenWidth * player.currentTime) / (player.duration)

    if(time_s == 0){
        time_s = time_s + 15;  
    }
    flag.style.marginLeft = time_s +'px';

    var timefix = (screenWidth * 15) / (player.duration)

    diem.style.marginLeft = timefix +'px';

    if(player.currentTime >= 15 && player.currentTime <=16){
        btnCurrent.innerHTML = 5 + ' điểm';
    }else{
        btnCurrent.innerHTML = 3 + ' điểm';
    }
        
}
function playVideo() { 
    player   = document.getElementById('video');
    player.play();
}
function stopVideo() {
    player   = document.getElementById('video');
    player.pause();
    if (player.currentTime) player.currentTime = 0;
}

function seek(e) {
    player       = document.getElementById('video');
    var percent = e.offsetX / this.offsetWidth;
    player.currentTime = percent * player.duration;
    e.target.value = Math.floor(percent / 100);
    e.target.innerHTML = progressBar.value + '% played';

    btnCurrent = document.getElementById('current');
    btnCurrent.innerHTML = player.currentTime;

    btnSpace = document.getElementById('btnSpace');
    flag = document.getElementById('flag');
    diem = document.getElementById('diem');

    flag.style.display = 'block';
    diem.style.display = 'block';

    btnSpace.innerHTML= player.currentTime + ' - Lam lai - ' + player.duration;
    var screenWidth = $("#video").width();

    var time_s = (screenWidth * player.currentTime) / (player.duration)

    flag.style.marginLeft = time_s +'px';

    var timefix = (screenWidth * 15) / (player.duration)

    diem.style.marginLeft = timefix +'px';

    if(player.currentTime >= 15 && player.currentTime <=16){
        btnCurrent.innerHTML = 5 + ' điểm';
    }else{
        btnCurrent.innerHTML = 3 + ' điểm';
    }
}
function updateProgressBar() {
    player       = document.getElementById('video');
    var percentage = Math.floor((100 / player.duration) * player.currentTime);
    progressBar.value = percentage;
    progressBar.innerHTML = percentage + '% played';
}