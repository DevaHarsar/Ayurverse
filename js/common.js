function toggleSanskrit() {
    let sans = document.getElementById("sans-content");
    let eng = document.getElementById("eng-content");
    let hin = document.getElementById("hindi-content");
    let tam = document.getElementById("tamil-content");
    sans.style.display = "block"
    eng.style.display = "none"
    hin.style.display = "none"
    tam.style.display="none"

    let button = document.getElementById("sanskrit")
    button.style.background = "var(--primary-color)"
    button.style.color = "white"

    let eng_button = document.getElementById("english")
    eng_button.style.background = "white"
    eng_button.style.color = "black"

    let hin_button = document.getElementById("hindi")
    hin_button.style.background = "white"
    hin_button.style.color = "black"
    
    let tam_button = document.getElementById("tamil")
    tam_button.style.background = "white"
    tam_button.style.color = "black"
    
    
    
    
}
  
  function toggleEnglish() {
    let sans = document.getElementById("sans-content");
    let eng = document.getElementById("eng-content");
    let hin = document.getElementById("hindi-content");
    let tam = document.getElementById("tamil-content");
    sans.style.display = "none"
    eng.style.display = "block"
    hin.style.display = "none"
    tam.style.display = "none"

    let button = document.getElementById("sanskrit")
    button.style.background = "white"
    button.style.color = "black"
    
    let eng_button = document.getElementById("english")
    eng_button.style.background = "var(--primary-color)"
    eng_button.style.color = "white"

    let hin_button = document.getElementById("hindi")
    hin_button.style.background = "white"
    hin_button.style.color = "black"


    let tam_button = document.getElementById("tamil")
    tam_button.style.background = "white"
    tam_button.style.color = "black"
}
  
  function toggleHindi() {
    let sans = document.getElementById("sans-content");
    let eng = document.getElementById("eng-content");
    let hin = document.getElementById("hindi-content");
    let tam = document.getElementById("tamil-content");
    sans.style.display = "none"
    eng.style.display = "none"
    hin.style.display = "block"
    tam.style.display = "none"

    let button = document.getElementById("sanskrit")
    button.style.background = "white"
    button.style.color = "black"

    let eng_button = document.getElementById("english")
    eng_button.style.background = "white"
    eng_button.style.color = "black"

    let hin_button = document.getElementById("hindi")
    hin_button.style.background = "var(--primary-color)"
    hin_button.style.color = "white"


    let tam_button = document.getElementById("tamil")
    tam_button.style.background = "white"
    tam_button.style.color = "black"

  }
  function toggletamil() {
    let sans = document.getElementById("sans-content");
    let eng = document.getElementById("eng-content");
    let hin = document.getElementById("hindi-content");
    let tam = document.getElementById("tamil-content");
    sans.style.display = "none";
    eng.style.display = "none";
    hin.style.display = "none";
    tam.style.display = "block";

    let button = document.getElementById("sanskrit");
    button.style.background = "white";
    button.style.color = "black";

    let eng_button = document.getElementById("english");
    eng_button.style.background = "white";
    eng_button.style.color = "black";

    let hin_button = document.getElementById("hindi");
    hin_button.style.background = "white";
    hin_button.style.color = "black";

    let tam_button = document.getElementById("tamil");
    tam_button.style.background = "var(--primary-color)";
    tam_button.style.color = "white";
}
