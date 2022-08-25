import Dropzone from "dropzone";

Dropzone.autoDiscover = false;
document.querySelector('[name="image"]').value = "";

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage : 'Arrastra aquí tu imagen \n o da click',
    acceptedFiles : '.png,.jpg,.jpeg,.gif',
    addRemoveLinks : true,
    dictRemoveFile : 'Borrar archivo',
    uploadMultiple: false,
    maxFiles : 1,
    init: function(){
        const imageName = document.querySelector('[name="image"]').value;
        if(imageName){
            const image = {}
            image.size = 1234;
            image.name = imageName

            this.options.addedfile.call( this, image);
            this.options.thumbnail.call(this, image, `/uploads/${image.name}`);

            image.previewElement.classList.add("dz-success", "dz-complete");
        } 
    }
});

dropzone.on("success", function(file, response){
    document.querySelector('[name="image"]').value = response.image;
});

dropzone.on("removedfile", function(){
    document.querySelector('[name="image"]').value = "";
});