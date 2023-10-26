/** @type {HTMLInputElement} */
const fileInput = document.querySelector("input[type='file']");
console.log(fileInput);

/** @type {HTMLImageElement} */
const preview = document.getElementById("preview");

if (fileInput.files.length !== 0) updateImageDisplay();
fileInput.addEventListener("change", updateImageDisplay);

function updateImageDisplay() {
    const curFiles = fileInput.files;
    if (curFiles.length === 0) {
        const para = document.createElement("p");
        para.textContent = "No files currently selected for upload";
        preview.appendChild(para);
        return;
    }

    const file = curFiles[0];
    if (!isValid(file)) {
        return;
    }
    const url = URL.createObjectURL(file);
    preview.src = url;

    // const listItem = document.createElement("li");
    // const para = document.createElement("p");
    // if (validFileType(file)) {
    //     para.textContent = `File name ${file.name}, file size ${returnFileSize(
    //         file.size
    //     )}.`;
    //     const image = document.createElement("img");
    //     image.src = URL.createObjectURL(file);

    //     listItem.appendChild(image);
    //     listItem.appendChild(para);
    // } else {
    //     para.textContent = `File name ${file.name}: Not a valid file type. Update your selection.`;
    //     listItem.appendChild(para);
    // }

    // img.appendChild(listItem);
}

// https://developer.mozilla.org/en-US/docs/Web/Media/Formats/Image_types

function isValid(file) {
    const fileTypes = [
        "image/apng",
        "image/bmp",
        "image/gif",
        "image/jpeg",
        "image/pjpeg",
        "image/png",
        "image/svg+xml",
        "image/tiff",
        "image/webp",
        "image/x-icon",
    ];

    return fileTypes.includes(file.type);
}
