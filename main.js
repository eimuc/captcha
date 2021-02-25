function checkBox() {
    const checkbox = document.getElementsByTagName('input');
    let checkCount = 0;

    for(let i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked == true) {
            checkCount++;
        }
    }

    if (checkCount > 3) {
        document.getElementsByTagName('span').innerHTML='GALIMA TIK 3 GI PASRINKTI';
        console.log(document.getElementsByTagName('span').innerHTML);
        return false;
        
    }
}
