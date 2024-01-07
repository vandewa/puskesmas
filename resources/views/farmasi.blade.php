<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(120deg, #2196F3, #4CAF50);
            backdrop-filter: blur(500px);
            overflow: hidden;
            animation: gradientMove 10s linear infinite;
            /* Animasi latar belakang bergerak lebih lambat */
        }

        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 600px;
        }

        .queues {
            display: flex;
            justify-content: space-between;
        }

        .queue {
            flex: 1;
            padding: 20px;
            border-radius: 5px;
        }

        .left {
            background-color: #007BFF;
            color: #fff;
        }

        .right {
            background-color: #00BFFF;
            color: #fff;
        }

        h2 {
            font-size: 20px;
        }

        .patient {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            font-size: 16px;
        }

        .number {
            font-weight: bold;
            font-size: 20px;
        }

        @keyframes gradientMove {
            0% {
                background-position: 100% 0;
            }

            100% {
                background-position: -100% 0;
            }
        }


        #clock,
        #date {
            user-select: none;
        }

        .glow {
            font-size: 4vw;
            font-weight: bold;
            animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
        }

        .glow.mini {
            font-size: 1.5vw;
            /* margin-bottom: 50px; */
        }

        @keyframes marquee {
            0% {
                text-indent: 800px;
            }

            100% {
                text-indent: -800px;
            }
        }

        .marquee {
            width: 90%;
            margin: auto;
            padding: 12px;
            font-size: 18px;
            overflow: hidden;
            white-space: nowrap;
            border: solid 1px #CCCCCC;
            border-radius: 0px;
            box-shadow: 2px 2px 3px #999999;
            animation: marquee 20s linear infinite;
        }

        .marquee:hover {
            animation-play-state: paused;
            cursor: wait;
        }
    </style>
    <title>Layar Antrian Pasien</title>
</head>

<body>
    <div class="container" style="margin-right: 30px; width: 400px;">
        <img src="https://seeklogo.com/images/P/puskesmas-logo-0141823BF8-seeklogo.com.png" alt="" height="150">
        <h1>PUSKESMAS SAPURAN</h1>
    </div>

    <div class="container">
        <h1 style="font-size: 55px;color: black;">Farmasi</h1>

        <div
            style="background-color: #007BFF;border-radius: 30px;width: 50%; margin-left: auto;
                margin-right: auto;">
            <h2 style="font-size: 100px; color:white; " id="asu">0</h2>
        </div>


        <div>
            <div id="clock" class="glow"></div>
            <div id="date" class="glow mini"></div>
        </div>

        <!-- <div class="mt-4">
              <p class="marquee">Semoga lekas sembuh, salam hangat dari kami Puskesmas Sapuran.</p>
          </div> -->

    </div>



    <script>
        setInterval(displayTime, 1000);

        function displayTime() {
            const timeNow = new Date();
            document.getElementById('clock').innerText = timeNow.toLocaleString('id-ID', {
                timeStyle: 'medium'
            });

            document.getElementById('date').innerText = timeNow.toLocaleString('id-ID', {
                dateStyle: 'full'
            });
            // console.log(timeNow);
        }

        displayTime();
    </script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('5bd3c21fd26c6b2d50f9', {
            cluster: 'ap1'
        });

        function wait(timeout) {
            return new Promise(resolve => {
                setTimeout(resolve, timeout);
            });
        }
        var channel = pusher.subscribe('my-channel');
        channel.bind('farmasi', function(data) {
            // alert(data.poli.queue + data.queue_no);
            $('#asu').text(data.poli.queue + ' ' + data.queue_no);
            // console.log(data);
            // let auo = data.no.split('');
            // $('#instansi-antrian' + data.instansi.id).text(data.no);

            var msg = new SpeechSynthesisUtterance(
                `Nomor antrian. ${data.poli.queue}.'..'. ${data.queue_no}. silahkan menuju ke Farmasi`
            );
            msg.rate = 0.9;
            msg.voiceURI = 'native';
            msg.pitch = 0;
            msg.lang = 'id-ID';
            window.speechSynthesis.speak(msg);
        });
    </script>
</body>

</html>
