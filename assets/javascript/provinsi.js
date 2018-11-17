var provinsi = [
"Aceh",
"Sumatera Utara",
"Sumatera Barat",
"Riau",
"Pekanbaru",
"Jambi",
"Kepulauan Riau",
"Bengkulu",
"Kepulauan Bangka Belitung",
"Banten",
"Jawa Barat",
"DKI Jakarta",
"Jawa Tengah",
"DI Yogyakarta",
"Jawa Timur",
"Bali",
"Nusa Tenggara Barat",
"Nusa Tenggara Timur",
"Kalimantan Utara",
"Kalimantan Barat",
"Kalimantan Tengah",
"Kalimantan Selatan",
"Kalimantan Timur",
"Gorontalo	Gorontalo",
"Sulawesi Utara",
"Sulawesi Barat",
"Sulawesi Tengah",
"Sulawesi Selatan",
"Sulawesi Tenggara",
"Maluku Utara",
"Maluku",
"Papua Barat",
"Papua"];

var provinsihasil =" ";

for(var i = 0; i < provinsi.length; i++) {
   provinsihasil += "<option>" + provinsi[i] + "</option>";
}
 document.getElementById("provinsiK").innerHTML = provinsihasil;
