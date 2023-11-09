function validateForm() {
    //let x = document.forms["myForm"]["fname"].value;
    var x = document.getElementById("fname");
    var nrp = document.getElementById("nrp");
    //bahwa yang dicek cukup yang invalid,
    //lakukan per jenis validasi, supaya user tahu salahnya apa
    if (x.value == "") {
      alert("Nama harus diisi..");
      x.focus();
      return false; //function ini ada return value, bukan void
      //stop, gk jadi diirm ke server

    }
    if (nrp.value == "") {
      alert("nrp harus diisi..");
      nrp.focus();
      return false; //function ini ada return value, bukan void
      //stop, gk jadi diirm ke server

    }
    if(isNaN(nrp.value)== true){
     alert("NRP harus berupa angka.");
     nrp.focus();
     nrp.value = "";
     return false;
    }
    if (nrp.value.length != 10){
      alert("Jumlah digit harus 10, Anda memasukkan " + nrp.value.length + " digit.")
      return false;
    }
    if(nrp.value.substring(0,4) != 5026){
      alert ("Hanya untuk mahasiswa Sistem Informasi");
      return false;
    }
    if(nrp.value.substring(4,6) != 21 && nrp.value.substring(4,6) != 22){
      alert ("Hanya untuk angkatan 2021 dan 2022");
      return false;
    }
    return true; //boleh diberi blh tidak, krn defaut fucntion adalah true. Pencegahan nilai
    //ke false berfungsi supaya tdk jadi dikirimkan
  }
