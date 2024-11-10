const firebaseConfig = {

    apiKey: "AIzaSyDVoYDOMTdo-d-YNKH25g-F1Ajk6DyI-nU",
  
    authDomain: "hospital-ad66f.firebaseapp.com",
  
    databaseURL: "https://hospital-ad66f-default-rtdb.firebaseio.com",
  
    projectId: "hospital-ad66f",
  
    storageBucket: "hospital-ad66f.appspot.com",
  
    messagingSenderId: "606370340441",
  
    appId: "1:606370340441:web:ac31493793f1f3a99d9b48"
  
  };
  

  //initialize firebase
firebase.initializeApp(firebaseConfig);  

//reference database
var hospitalDB = firebase.database().ref("hospital");

document.getElementById("appoinment").addEventListener("submit",submitForm);

function submitForm(e){
    e.preventDefault();
    var dropdown = getElementVal('input');
    var name = getElementVal('name');
    var phone = getElementVal('phone');
    var date = getElementVal('date');
    var message = getElementVal('message');
     
    saveMessages(dropdown,name,phone,date,message);
    //   enable alert
  document.querySelector(".alert").style.display = "block";

  //   remove the alert
  setTimeout(() => {
    document.querySelector(".alert").style.display = "none";
  }, 3000);

  //   reset the form
  document.getElementById("contactForm").reset();
    
}
const saveMessages =(dropdown,name,phone,date,message)=>{
    var newhospital = hospitalDB.push();
    newhospital.set({
        dropdown : dropdown,
        name :name,
        phone : phone,
        date : date,
        message : message
    });
};

const getElementVal = (id) =>{
    return document.getElementById(id).value;
};