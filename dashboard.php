<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Welcome User</title>

    <link rel="stylesheet" href="assets/plugins/taskbar_calender/css/demo.css" />

    <link rel="stylesheet" href="assets/plugins/taskbar_calender/css/theme1.css" />

    <link rel="stylesheet" href="assets/plugins/file_manager/css/style.css" />

    <link rel="stylesheet" href="assets/plugins/jsPanel/css/jspanel.css" />
    <link rel="stylesheet" href="assets/css/profilePanel.css" type="text/css" />
    <script src="assets/js/jquery3.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/plugins/image_viewer/spotlight.bundle.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/27fbeea9fb.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="assets/plugins/js_cropper/cropper.js"></script>

    <link rel="stylesheet" href="assets/plugins/metro_ui/css/metro-all.css" />

    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
</head>

<body>
    <section>
        <div class="calender-container widget" id="calender">
            <div><time id="calendar-time"></time></div>
            <div class="line-in-calender"></div>
            <div id="caleandar" class="calender"></div>
        </div>
        <div class="start-container widget" id="start">
            <div class="header">
                <span><a href="logout.php"><i class="fas fa-sign-out-alt"></a></i></span>
                <span><i class="fas fa-cog"></i></span>
                <span onclick="showProfile()"><i class="fas fa-user"></i></span>
            </div>
            <div class="body">
                <div>
                    <span><i class="fab fa-apple" style="color: rgb(253, 249, 253);"></i></span>
                    <p>Apple</p>
                </div>
                <div>
                    <span><i class="fab fa-linkedin-in" style="color: rgb(20, 116, 194);" ;></i></span>
                    <p>LinkedIn</p>
                </div>
                <div>
                    <span><i class="fab fa-instagram" style="color: rgb(188, 20, 194);"></i></span>
                    <p>Instagram</p>
                </div>
                <div>
                    <span><i class="fab fa-imdb" style="color: rgb(214, 218, 14);"></i></span>
                    <p>IMDb</p>
                </div>
                <div>
                    <span><i class="fab fa-facebook-square" style="color: rgb(20, 75, 194);"></i></span>
                    <p>Facebook</p>
                </div>
                <div>
                    <span><i class="fab fa-chrome" style="color: rgb(243, 242, 242);"></i></span>
                    <p>Chrome</p>
                </div>
                <div>
                    <span><i class="fab fa-firefox-browser" style="color: rgb(255, 123, 0);"></i></span>
                    <p>Firefox</p>
                </div>
                <div>
                    <span><i class="fab fa-whatsapp" style="color: rgb(20, 194, 93);"></i></span>
                    <p>WhatsApp</p>
                </div>
                <div>
                    <span><i class="fab fa-telegram-plane" style="color: rgb(26, 92, 235);"></i></span>
                    <p>Telegram</p>
                </div>
                <div>
                    <span><i class="fab fa-google" style="color: rgb(241, 107, 58);"></i></span>
                    <p>Google</p>
                </div>
            </div>
        </div>
    </section>
    <div class="footer" id="footer">
        <div class="panel-bottom" id="task-bar">
            <ul class="icon-container" id="taskbar">
                <li onclick="showStartContainer()">
                    <span><i class="fab fa-microsoft"></i></span>
                </li>
            </ul>
            <div id="dateTime-container" onclick="showCalender()">
                <time id="time"></time>
                <time id="date"></time>
            </div>
        </div>
    </div>
    <div id="overlay">
        <div id="column">
            <div class="this-pc">
                <span>
                    <img src="./assets/resources/images/icons/this_pc.ico" height="90" width="100" alt="This Pc" class="modal-icon" />
                </span>
            </div>
            <div class="file-explorer">
                <span>
                    <img src="./assets/resources/images/icons/file_explorer.png" height="90" width="100" alt="File Explorer" class="modal-icon" />
                </span>
            </div>
        </div>
    </div>

    <script  type="text/javascript" src="assets/plugins/taskbar_calender/js/caleandar.min.js"></script>
    <script  type="text/javascript" src="assets/plugins/taskbar_calender/js/demo.js"></script>
    <script  type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/plugins/jsPanel/js/extensions/jspanel.js"></script>
    <script type="text/javascript" src="assets/plugins/jsPanel/js/extensions/contextmenu/jspanel.contextmenu.js"></script>
    <script type="text/javascript" src="assets/plugins/jsPanel/js/extensions/hint/jspanel.hint.js"></script>
    <script type="text/javascript" src="assets/plugins/jsPanel/js/extensions/modal/jspanel.modal.js"></script>
    <script type="text/javascript" src="assets/plugins/jsPanel/js/extensions/tooltip/jspanel.tooltip.js"></script>
    <script type="text/javascript" src="assets/plugins/jsPanel/js/extensions/dock/jspanel.dock.js"></script>
    <script type="text/javascript" src="assets/plugins/metro_ui/js/metro.js"></script>
    <script type="text/javascript" src="assets/plugins/file_manager/js/file_app.js"></script>
</body>

</html>
