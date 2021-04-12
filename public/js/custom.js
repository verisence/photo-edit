const image = document.getElementById('image');
let cropper = new Cropper(image, {
    aspectRatio: 16 / 9,
    crop(event) {
        // console.log(event.detail.x);
        // console.log(event.detail.y);
        // console.log(event.detail.width);
        // console.log(event.detail.height);
        // console.log(event.detail.rotate);
        // console.log(event.detail.scaleX);
        // console.log(event.detail.scaleY);

    },
});

document.getElementById("rotate").addEventListener("click", function() {
    cropper.rotate(90);
});

document.getElementById("zoom-in").addEventListener("click", function() {
    cropper.zoom(0.1);
});

document.getElementById("zoom-out").addEventListener("click", function() {
    cropper.zoom(-0.1);
});

document.getElementById("save-image").addEventListener("click", function() {
    var croppedimage = cropper.getCroppedCanvas().toDataURL("image/png");
    console.log(croppedimage);
});