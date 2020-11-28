

function SubmitForm() {
    const myForm =document.getElementById("myForm");
myForm.addEventListener("submit", (e)=>{

    e.preventDefault();
    console.log("vForm has been submitted");
});
}