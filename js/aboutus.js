document.addEventListener("keydown", f => {
    console.log(f);
    if(f.key.toLowerCase() === "n" && f.altKey){
        window.location.href = '../app/userprofile.php';
    }
    else if(f.key.toLowerCase() === "p" && f.altKey){
        window.location.href = '../app/chart.php';
    }

  })