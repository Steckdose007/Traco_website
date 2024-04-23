
// File for Ajax and JavaScript integration


// We want to asynchronously upload the files:
async function uploadFile() {
    let formData = new FormData(); 
    formData.append("fileupload", fileupload.files[0]);
      await fetch('http://localhost/upload', {
      method: "POST", 
      body: formData
    }); 
  }


