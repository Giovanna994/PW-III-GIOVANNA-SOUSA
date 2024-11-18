import firebase from "firebase/compat/app";
import "firebase/compat/firestore";

const firebaseConfig = {
    apiKey: "AIzaSyA-yD_M0bcnuQXpCClKwx9ryYfqH4skde0",
    authDomain: "crudpam-e2575.firebaseapp.com",
    projectId: "crudpam-e2575",
    storageBucket: "crudpam-e2575.firebasestorage.app",
    messagingSenderId: "900523307877",
    appId: "1:900523307877:web:c2a58d9a8cb0c64980a78c"
  };

    if(!firebase.apps.length){

        console.log(`Conectabdi... ${firebase.apps.length}`)
        firebase.initializeApp(firebaseConfig)
        console.log(`conectado: ${firebase.apps.length}`)
    }
    
export default firebase;    