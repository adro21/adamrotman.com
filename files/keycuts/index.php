<!doctype html>
<html lang="en" class="h-100">
  <head>
    <?php require_once('includes/head.php'); ?>
    <link href="css/mac-keyboard.css" rel="stylesheet">
  </head>
  
  <body class="text-center text-white bg-dark">
    
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-decoration-none logo">
            KEYCUTS
          </a>
    
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-3 link-light">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="apple-icon" role="img" width="18" height="22.15" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 315"><path d="M213.803 167.03c.442 47.58 41.74 63.413 42.197 63.615c-.35 1.116-6.599 22.563-21.757 44.716c-13.104 19.153-26.705 38.235-48.13 38.63c-21.05.388-27.82-12.483-51.888-12.483c-24.061 0-31.582 12.088-51.51 12.871c-20.68.783-36.428-20.71-49.64-39.793c-27-39.033-47.633-110.3-19.928-158.406c13.763-23.89 38.36-39.017 65.056-39.405c20.307-.387 39.475 13.662 51.889 13.662c12.406 0 35.699-16.895 60.186-14.414c10.25.427 39.026 4.14 57.503 31.186c-1.49.923-34.335 20.044-33.978 59.822M174.24 50.199c10.98-13.29 18.369-31.79 16.353-50.199c-15.826.636-34.962 10.546-46.314 23.828c-10.173 11.763-19.082 30.589-16.678 48.633c17.64 1.365 35.66-8.964 46.64-22.262"/></svg>
                Mac</a></li>
            <li><a href="pc-keyboard.php" class="nav-link px-3 link-secondary">
                <svg width="18" viewBox="0 0 480 480" class="windows-icon">
                <path d="M0.176,224L0.001,67.963l192-26.072V224H0.176z M224.001,37.241L479.937,0v224H224.001V37.241z M479.999,256l-0.062,224
                  l-255.936-36.008V256H479.999z M192.001,439.918L0.157,413.621L0.147,256h191.854V439.918z"></path>
              </svg>
               PC</a></li>
          </ul>
    
        </header>
      </div>

  <main>
    
<div class="keyboard-container" id="capture">
    <div class="keyboard">
      <div class="keyboard-row thin">
        <div class="key lowercase">Esc</div>
        <div class="key function lo-bright"><span>f1</span><img src="images/icons/png/apple-icons-10_1.png" /></div>
        <div class="key function hi-bright"><span>f2</span><img src="images/icons/png/apple-icons-09_1.png" /></div>
        <div class="key function expose"><span>f3</span><img src="images/icons/png/apple-icons-08_1.png" /></div>
        <div class="key function tilez"><span>f4</span><img src="images/icons/png/apple-icons-07_1.png" /></div>
        <div class="key function"><span>f5</span></div>
        <div class="key function"><span>f6</span></div>
        <div class="key function rewind"><span>f7</span><img src="images/icons/png/apple-icons-06_1.png" /></div>
        <div class="key function play-pause"><span>f8</span><img src="images/icons/png/apple-icons-04_1.png" /></div>
        <div class="key function ffwd"><span>f9</span><img src="images/icons/png/apple-icons-05_1.png" /></div>
        <div class="key function mute"><span>f10</span><img src="images/icons/png/apple-icons-11.png" /></div>
        <div class="key function lo-vol"><span>f11</span><img src="images/icons/png/apple-icons-03_1.png" /></div>
        <div class="key function hi-vol"><span>f12</span><img src="images/icons/png/apple-icons-02_1.png" /></div>
        <div class="key eject"><img src="images/icons/png/apple-icons-01_1.png" /></div>
      </div>
      <div class="keyboard-row numbers-row">
        <div class="key"><span>~<br/>`</span></div>
        <div class="key"><span>!<br/>1</span></div>
        <div class="key"><span>@<br/>2</span></div>
        <div class="key"><span>#<br/>3</span></div>
        <div class="key"><span>$<br/>4</span></div>
        <div class="key"><span>%<br/>5</span></div>
        <div class="key"><span>^<br/>6</span></div>
        <div class="key"><span>&amp;<br/>7</span></div>
        <div class="key"><span>*<br/>8</span></div>
        <div class="key"><span>(<br/>9</span></div>
        <div class="key"><span>)<br/>0</span></div>
        <div class="key"><span>_<br/>-</span></div>
        <div class="key"><span>+<br/>=</span></div>
        <div class="key extra-size lowercase lower-right"><span class="lower-row-text">delete</span></div>
      </div>
      <div class="keyboard-row">
        <div class="key extra-size lowercase lower-left"><span class="lower-row-text">tab</span></div>
        <div class="key">Q</div>
        <div class="key">W</div>
        <div class="key">E</div>
        <div class="key">R</div>
        <div class="key">T</div>
        <div class="key">Y</div>
        <div class="key">U</div>
        <div class="key">I</div>
        <div class="key">O</div>
        <div class="key">P</div>
        <div class="key"><span>{<br/>[</span></div>
        <div class="key"><span>}<br/>]</span></div>
        <div class="key"><span>|<br/>\</span></div>
      </div>
      <div class="keyboard-row">
        <div class="key lowercase lower-left extra-size-two"><span class="lower-row-text">caps lock</span><span class="absolute-left caps-dot">&bull;</span></div>
        <div class="key">A</div>
        <div class="key">S</div>
        <div class="key">D</div>
        <div class="key">F</div>
        <div class="key">G</div>
        <div class="key">H</div>
        <div class="key">J</div>
        <div class="key">K</div>
        <div class="key">L</div>
        <div class="key"><span>:<br/>;</span></div>
        <div class="key"><span>"<br/>'</span></div>
        <div class="key extra-size-two lowercase lower-right"><span class="lower-row-text">return</span><span class="absolute-right">enter</span></div>
      </div>
      <div class="keyboard-row">
        <div class="key double-size lowercase lower-left"><span class="lower-row-text">shift</span></div>
        <div class="key">Z</div>
        <div class="key">X</div>
        <div class="key">C</div>
        <div class="key">V</div>
        <div class="key">B</div>
        <div class="key">N</div>
        <div class="key">M</div>
        <div class="key"><span>&lt;<br/>,</span></div>
        <div class="key"><span>&gt;<br/>.</span></div>
        <div class="key"><span>?<br/>/</span></div>
        <div class="key double-size lowercase lower-right"><span class="lower-row-text">shift</span></div>
      </div>
      <div class="keyboard-row bottom-row">
        <div class="key lower-left lowercase"><span class="lower-row-text">fn</span></div>
        <div class="key lower-left lowercase"><span class="lower-row-text">control</span></div>
        <div class="key lower-left lowercase"><span class="lower-row-text">option</span><span class="absolute-left">alt</span></div>
        <div class="key lower-center lowercase extra-size-two"><span class="lower-row-text">command</span><span class="absolute-right icon">&#8984;</span></div>
        <div class="key space-bar"></div>
        <div class="key lower-center lowercase extra-size-two"><span class="lower-row-text">command</span><span class="absolute-left icon">&#8984;</span></div>
        <div class="key lower-right lowercase"><span class="lower-row-text">option</span><span class="absolute-right">alt</span></div>
        <div class="arrows">
            <div class="key">&#9668;</div>
            <div class="up-down">
              <div class="key">&#9650;</div>
              <div class="key">&#9660;</div>
            </div>
            <div class="key">&#9658;</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </main>

  <div class="d-inline-block tooltip-holder" tabindex="0" data-bs-toggle="tooltip" title="Select keys to download">
     <a href="#" class="capture-btn btn btn-lg btn-primary disabled" download="mac-keyboard-shortcut.png">Download</a>
  </div>

</div>

<?php require_once('includes/foot.php'); ?>

  </body>
</html>


