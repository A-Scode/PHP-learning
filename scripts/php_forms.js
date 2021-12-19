const photo_label = document.getElementById("photo_label");
const profile_photo = document.getElementById("profile_photo");
const form = document.forms[0];
console.log(photo_label);

photo_label.oncontextmenu =()=>false;
profile_photo.oninput = e=>{
    console.log(e);
    let file_url = URL.createObjectURL(e.target.files[0]);
    photo_label.src = file_url;
    photo_label.style.aspectRatio = "auto";
}
