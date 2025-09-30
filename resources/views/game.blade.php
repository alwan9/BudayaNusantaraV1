 @include('layouts.header')

 @include('components.go-top')
 @include('components.navbar')




 <div class="flex items-center justify-center w-full min-h-screen bg-[#FFF7E6] px-4 py-10">
     <div class="lg:grid grid-cols-2 gap-10 items-center pt-[20%] md:pt-0">
         <div class="flex justify-end  relative" data-aos="fade-up" data-aos-duration="2000">
             <img id="character-img" class="w-full px-[20%] relative z-10" src="./assets/karakter5.png" alt="">
             <div
                 class="blob lg:w-[500px] w-[200px] md:w-[400px]  lg:h-[500px] h-[200px] md:h-[400px] opacity-30 bg-orange-700 absolute right-[25%] bottom-0">
             </div>
         </div>


         <div class="container max-w-xl w-full text-left px-[5%] lg:px-0 mt-10 md:mt-0">
             {{-- Judul --}}
             <div id="intro-section">
                 <h1 data-aos="fade-up" data-aos-duration="800"
                     class="text-xl md:text-4xl font-bold text-[#FF7A00] mb-4 flex item-center gap-3 merriweather text-gradasi">
                     <svg class="w-[80px] md:w-[130px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                         <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="32"
                             d="M256 160c16-63.16 76.43-95.41 208-96a15.94 15.94 0 0 1 16 16v288a16 16 0 0 1-16 16c-128 0-177.45 25.81-208 64c-30.37-38-80-64-208-64c-9.88 0-16-8.05-16-17.93V80a15.94 15.94 0 0 1 16-16c131.57.59 192 32.84 208 96m0 0v288" />
                     </svg>
                     Selamat datang di Jelajah Budaya Nusantara!
                 </h1>
                 <p data-aos="fade-up" data-aos-duration="1500" class="mt-5 text-base md:text-2xl">Uji pengetahuanmu,
                     kumpulkan skor terbaik, dan jadi Sang
                     Penjelajah Budaya sejati!
                     Klik tombol di bawah dan mulailah petualanganmu sekarang!</p>
             </div>
             {{-- Timer dan Skor --}}
             <div class=" flex gap-3 text-center mb-5 " data-aos="fade-up" data-aos-duration="2000">
                 <div class="text-sm md:text-2xl mt-4 bg-orange-100/50 text-orange-600 px-5 md:px-10 py-2 rounded-2xl border-2 border-orange-600/20 "
                     id="timer">Waktu: 30 detik</div>
                 <div
                     class="flex gap-2 item-center text-sm md:text-2xl mt-4 bg-orange-100/50 text-orange-600 px-5 md:px-10 py-2 rounded-2xl border-2 border-orange-600/20">
                     <div class=" " id="score">Skor Benar: 0</div>
                     <div> / 40
                     </div>
                 </div>
             </div>

             {{-- Cerita dan Pertanyaan --}}
             <div class=" text-base md:text-2xl">
                 <div id="story-box">
                 </div>
                 <div id="question-box">
                 </div>
             </div>

             {{-- Pilihan Jawaban --}}
             <div id="answers" class="space-y-2 text-left mt-10"></div>

             {{-- Tombol Start --}}
             <div data-aos="fade-up" data-aos-duration="3000">
                 <button id="next-btn"
                     class="bg-[#FF7A00] text-white shadow-orange-500/50 shadow-lg  mt-4  btn-bg transition flex gap-2 items-center shake-lr"
                     onclick="startGame()">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                         <g fill="none">
                             <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                 d="M21.22 8c-.689-2.184-1.792-3.365-3.13-3.84c-.38-.135-.788-.16-1.193-.16h-.612a4.24 4.24 0 0 0-2.45.78l-.502.354a2.31 2.31 0 0 1-2.666 0l-.502-.355A4.24 4.24 0 0 0 7.715 4h-.612c-.405 0-.813.025-1.194.16c-2.383.846-4.022 3.935-3.903 10.943c.024 1.412.354 2.972 1.628 3.581A3.2 3.2 0 0 0 5.027 19a2.74 2.74 0 0 0 1.53-.437c.915-.599 1.584-1.6 2.554-2.102a4.1 4.1 0 0 1 1.89-.461H13c.658 0 1.306.158 1.89.46c.97.504 1.64 1.504 2.553 2.103c.39.256.895.437 1.531.437a3.2 3.2 0 0 0 1.393-.316c1.274-.609 1.604-2.17 1.628-3.581A35 35 0 0 0 21.918 12M7.5 9v3M6 10.5h3" />
                             <path fill="currentColor"
                                 d="M19 10.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m-3 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0M16.75 8a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5m0 3a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5" />
                         </g>
                     </svg>Mulai Petualangan
                 </button>
             </div>

         </div>
     </div>

     {{-- Pop-up Feedback --}}
     <div id="popup" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50">
         <div id="popup-content"
             class="bg-[#FF7A00] text-white text-sm px-6 py-4 rounded shadow font-medium text-center">
             ✅ Benar!
         </div>
     </div>
 </div>

 {{-- @include('components.motif1') --}}

 {{-- animasi scroll --}}
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
     AOS.init();
 </script>
 <script>
     const scenes = [{
             story: "Kamu memulai perjalanan di Pulau Dewata, Bali. Pulau ini tidak hanya terkenal karena keindahan alamnya, tetapi juga karena kekayaan budayanya seperti tarian sakral, upacara adat, dan musik tradisional yang unik.",
             question: "Apa nama tarian terkenal dari Bali?",
             choices: ["Tari Kecak", "Tari Jaipong", "Tari Saman", "Tari Piring"],
             correct: "Tari Kecak"
         }, {
             story: "Perjalananmu berlanjut ke Yogyakarta, kota budaya yang kental dengan tradisi Jawa. Di sini kamu melihat berbagai warisan budaya seperti keraton, batik, dan candi-candi peninggalan kerajaan Hindu dan Buddha.",
             question: "Apa nama candi terkenal di dekat Yogyakarta?",
             choices: ["Borobudur", "Prambanan", "Cetho", "Muaro Jambi"],
             correct: "Prambanan"
         },
         {
             story: "Kamu tiba di pedalaman Kalimantan dan disambut oleh masyarakat Dayak yang ramah. Mereka memperlihatkan rumah panjang dan memperdengarkan alat musik tradisional mereka yang khas.",
             question: "Alat musik tradisional Kalimantan adalah?",
             choices: ["Kolintang", "Sape", "Gamelan", "Angklung"],
             correct: "Sape"
         },
         {
             story: "Perjalananmu membawa ke dataran tinggi Sumatera Utara, di mana masyarakat Batak melestarikan tradisi mereka dengan penuh semangat, termasuk pakaian adat, musik gondang, dan ritual adat.",
             question: "Kain khas Batak Toba disebut?",
             choices: ["Ulos", "Songket", "Lurik", "Ikat"],
             correct: "Ulos"
         }, {
             story: "Terakhir, kamu menjelajahi Papua. Di antara hutan lebat dan pegunungan, kamu menemukan budaya lokal yang sangat unik dan otentik, termasuk tarian perang dan alat musik dari kayu dan kulit.",
             question: "Apa nama alat musik khas Papua?",
             choices: ["Tifa", "Kendang", "Rebana", "Bonang"],
             correct: "Tifa"
         }, {
             story: "Di tanah Minangkabau, kamu menyaksikan pertunjukan tari di mana para penari menari di atas pecahan piring dengan penuh keseimbangan.",
             question: "Apa nama tari khas Minangkabau ini?",
             choices: ["Tari Piring", "Tari Lilin", "Tari Topeng", "Tari Payung"],
             correct: "Tari Piring"
         }, {
             story: "Di Makassar, kamu menghadiri pesta adat masyarakat Bugis yang kaya akan simbol dan filosofi kehidupan bahari.",
             question: "Apa nama perahu tradisional masyarakat Bugis?",
             choices: ["Phinisi", "Jukung", "Lancang", "Perahu Sandeq"],
             correct: "Phinisi"
         }, {
             story: "Di Tanah Toraja, Sulawesi Selatan, kamu menyaksikan rumah adat yang tinggi dan melengkung, serta upacara kematian yang megah.",
             question: "Apa nama rumah adat suku Toraja?",
             choices: ["Tongkonan", "Rumah Gadang", "Joglo", "Limas"],
             correct: "Tongkonan"
         }, {
             story: "Di Jakarta, kamu melihat boneka raksasa yang menari diiringi musik khas Betawi dalam sebuah arak-arakan budaya.",
             question: "Apa nama boneka raksasa khas Betawi ini?",
             choices: ["Ondel-ondel", "Wayang Golek", "Reog", "Barongan"],
             correct: "Ondel-ondel"
         }, {
             story: "Saat berada di Banten, kamu menyaksikan atraksi yang menegangkan di mana seseorang kebal terhadap tusukan benda tajam.",
             question: "Apa nama seni pertunjukan ini?",
             choices: ["Debus", "Silat", "Reog", "Ketoprak"],
             correct: "Debus"
         }, {
             story: "Kamu tiba di Sumatera Selatan dan menyaksikan rumah adat dengan atap bertingkat yang khas serta ukiran indah pada dindingnya.",
             question: "Apa nama rumah adat dari Sumatera Selatan?",
             choices: ["Rumah Limas", "Rumah Gadang", "Tongkonan", "Joglo"],
             correct: "Rumah Limas"
         }, {
             story: "Di tanah Bugis, kamu melihat alat musik tiup panjang yang biasa dimainkan saat upacara adat dan penyambutan tamu.",
             question: "Apa nama alat musik tiup tradisional Bugis ini?",
             choices: ["Puik-puik", "Serunai", "Saluang", "Seruling"],
             correct: "Puik-puik"
         }, {
             story: "Kamu mengunjungi Nusa Tenggara Timur dan bertemu dengan masyarakat yang memainkan alat musik berbentuk setengah lingkaran dari daun lontar.",
             question: "Apa nama alat musik unik ini?",
             choices: ["Sasando", "Sape", "Kolintang", "Kecapi"],
             correct: "Sasando"
         }, {
             story: "Di Jawa Barat, kamu menyaksikan pertunjukan wayang yang menggunakan boneka kayu tiga dimensi dengan kostum khas.",
             question: "Apa nama pertunjukan wayang ini?",
             choices: ["Wayang Golek", "Wayang Kulit", "Wayang Orang", "Wayang Beber"],
             correct: "Wayang Golek"
         }, {
             story: "Kamu berkunjung ke Lombok dan disambut dengan iringan musik tradisional yang dimainkan oleh kelompok besar dengan gendang besar.",
             question: "Apa nama pertunjukan ini?",
             choices: ["Gendang Beleq", "Rebana", "Gamelan", "Tifa"],
             correct: "Gendang Beleq"
         }, {
             story: "Di Kalimantan Tengah, kamu melihat upacara adat suku Dayak yang menggunakan senjata tradisional sebagai bagian dari tarian perang.",
             question: "Apa nama tarian ini?",
             choices: ["Tari Mandau", "Tari Gantar", "Tari Saman", "Tari Kipas"],
             correct: "Tari Mandau"
         },
         {
             story: "Kamu tiba di Maluku dan menyaksikan masyarakat memukul alat musik tabung saat upacara adat.",
             question: "Apa nama alat musik ini?",
             choices: ["Tifa", "Kendang", "Rebana", "Gendang"],
             correct: "Tifa"
         },

         {
             story: "Perjalanan membawamu ke Sulawesi Utara di mana kamu melihat pertunjukan alat musik pukul dari kayu yang disusun bertingkat.",
             question: "Apa nama alat musik tersebut?",
             choices: ["Kolintang", "Gamelan", "Sape", "Rebana"],
             correct: "Kolintang"
         }, {
             story: "Di tanah Riau, kamu menyaksikan tarian Melayu klasik yang lembut dan biasanya dimainkan saat acara resmi kerajaan.",
             question: "Apa nama tarian tersebut?",
             choices: ["Tari Zapin", "Tari Serimpi", "Tari Lenso", "Tari Payung"],
             correct: "Tari Zapin"
         }, {
             story: "Kamu tiba di Nusa Tenggara Barat dan menyaksikan tarian dinamis yang dimainkan oleh dua pemuda dengan perisai dan rotan.",
             question: "Apa nama tarian perang tradisional ini?",
             choices: ["Tari Peresean", "Tari Kancet", "Tari Kabasaran", "Tari Caci"],
             correct: "Tari Peresean"
         }, {
             story: "Kamu mengunjungi Minahasa di Sulawesi Utara dan menyaksikan sekelompok pria mengenakan baju perang merah menari dengan tombak.",
             question: "Apa nama tarian perang khas Minahasa ini?",
             choices: ["Tari Kabasaran", "Tari Mandau", "Tari Sajojo", "Tari Cakalele"],
             correct: "Tari Kabasaran"
         }, {
             story: "Saat berada di Kalimantan Barat, kamu melihat rumah panjang yang ditinggali banyak keluarga dan menjadi pusat kegiatan adat.",
             question: "Apa nama rumah adat suku Dayak ini?",
             choices: ["Rumah Panjang", "Rumah Limas", "Tongkonan", "Joglo"],
             correct: "Rumah Panjang"
         }, {
             story: "Kamu menelusuri desa di Maluku dan disambut dengan tarian cepat dan ritmis yang dilakukan oleh dua barisan penari laki-laki dan perempuan.",
             question: "Apa nama tarian ini?",
             choices: ["Tari Cakalele", "Tari Lenso", "Tari Lulo", "Tari Saman"],
             correct: "Tari Cakalele"
         }, {
             story: "Di Gorontalo, kamu menyaksikan pertunjukan tari berpasangan yang menggambarkan kebersamaan dalam masyarakat.",
             question: "Apa nama tari pergaulan khas Gorontalo?",
             choices: ["Tari Dana-Dana", "Tari Lenso", "Tari Kipas", "Tari Lulo"],
             correct: "Tari Dana-Dana"
         }, {
             story: "Di Bali, kamu menghadiri upacara keagamaan di pura yang dihiasi dengan sesajen kecil berisi bunga dan dupa.",
             question: "Apa nama sesajen harian umat Hindu Bali?",
             choices: ["Canang Sari", "Banten", "Liwetan", "Tumpeng"],
             correct: "Canang Sari"
         }, {
             story: "Kamu berada di Sumatera Barat dan mengunjungi rumah tradisional yang memiliki atap bergonjong seperti tanduk kerbau.",
             question: "Apa nama rumah adat ini?",
             choices: ["Rumah Gadang", "Joglo", "Rumah Limas", "Tongkonan"],
             correct: "Rumah Gadang"
         }, {
             story: "Di Jakarta, kamu menghadiri pertunjukan musik tradisional Betawi dengan alat musik seperti gambang kromong.",
             question: "Apa nama pertunjukan musik khas Betawi ini?",
             choices: ["Gambang Kromong", "Tanjidor", "Saluang", "Karinding"],
             correct: "Gambang Kromong"
         }, {
             story: "Di Kalimantan Selatan, kamu menghadiri pesta rakyat Banjar dengan pertunjukan wayang dan pertarungan seni bela diri.",
             question: "Apa nama seni bela diri khas Banjar?",
             choices: ["Kuntau", "Pencak Silat", "Debus", "Caci"],
             correct: "Kuntau"
         }, {
             story: "Kamu sampai di daerah Flores, NTT dan menyaksikan duel tarian pria dengan cambuk yang menggambarkan keberanian dan kehormatan.",
             question: "Apa nama tarian tradisional ini?",
             choices: ["Tari Caci", "Tari Peresean", "Tari Kabasaran", "Tari Lulo"],
             correct: "Tari Caci"
         }, {
             story: "Kamu berada di Bengkulu dan mendengar alunan musik dari alat pukul logam kecil yang biasanya dimainkan dalam pertunjukan tradisional.",
             question: "Apa nama alat musik tradisional Bengkulu ini?",
             choices: ["Doll", "Rebana", "Kolintang", "Gong"],
             correct: "Doll"
         }, {
             story: "Di Sulawesi Tenggara, kamu melihat sekelompok orang menari sambil berpegangan tangan membentuk lingkaran besar.",
             question: "Apa nama tarian pergaulan khas Sulawesi Tenggara ini?",
             choices: ["Tari Lulo", "Tari Sajojo", "Tari Lenso", "Tari Serimpi"],
             correct: "Tari Lulo"
         }, {
             story: "Kamu mengunjungi Jambi dan melihat rumah adat beratap panjang dengan banyak tiang penyangga.",
             question: "Apa nama rumah adat dari Jambi?",
             choices: ["Rumah Kajang Leko", "Rumah Bubungan Tinggi", "Rumah Panjang", "Joglo"],
             correct: "Rumah Kajang Leko"
         }, {
             story: "Di Kepulauan Riau, kamu menyaksikan pertunjukan musik khas Melayu dengan alat tiup dari bambu.",
             question: "Apa nama alat musik tradisional Melayu ini?",
             choices: ["Serunai", "Saluang", "Sape", "Tifa"],
             correct: "Serunai"
         }, {
             story: "Kamu sampai di Provinsi Banten dan melihat peragaan seni bela diri yang menunjukkan kekebalan tubuh terhadap benda tajam dan api.",
             question: "Apa nama pertunjukan tradisional tersebut?",
             choices: ["Debus", "Kuntau", "Reog", "Caci"],
             correct: "Debus"
         }, {
             story: "Di Kalimantan Timur, kamu melihat alat musik berbentuk gitar panjang dengan ukiran khas suku Dayak.",
             question: "Apa nama alat musik ini?",
             choices: ["Sape", "Sasando", "Kolintang", "Kecapi"],
             correct: "Sape"
         }, {
             story: "Di Sulawesi Tengah, kamu melihat rumah adat unik dengan bentuk seperti rumah panggung tinggi dan atap runcing.",
             question: "Apa nama rumah adat Sulawesi Tengah?",
             choices: ["Lobo", "Tongkonan", "Gadang", "Limas"],
             correct: "Lobo"
         }, {
             story: "Kamu tiba di Bali dan menyaksikan tarian klasik dengan gerakan mata dan jari yang sangat ekspresif.",
             question: "Apa nama tarian klasik dari Bali ini?",
             choices: ["Tari Legong", "Tari Kecak", "Tari Saman", "Tari Jaipong"],
             correct: "Tari Legong"
         }, {
             story: "Kamu berada di Jawa Tengah dan melihat pertunjukan teater tradisional yang menceritakan cerita kerajaan dalam bentuk sandiwara.",
             question: "Apa nama seni pertunjukan ini?",
             choices: ["Ketoprak", "Wayang Orang", "Ludruk", "Lenong"],
             correct: "Ketoprak"
         }, {
             story: "Saat di Jawa Timur, kamu menyaksikan pertunjukan komedi tradisional yang dibumbui dengan sindiran sosial dan humor.",
             question: "Apa nama seni pertunjukan ini?",
             choices: ["Ludruk", "Wayang Golek", "Ketoprak", "Lenong"],
             correct: "Ludruk"
         }, {
             story: "Kamu berkeliling ke daerah Betawi dan menyaksikan pertunjukan tradisional yang menggabungkan unsur musik, tari, dan dialog lucu.",
             question: "Apa nama pertunjukan khas Betawi ini?",
             choices: ["Lenong", "Ludruk", "Ketoprak", "Wayang Orang"],
             correct: "Lenong"
         }

     ];

     let current = 0;
     let score = 0;
     let timer = 30;
     let interval;
     let playing = false;

     function shuffle(array) {
         for (let i = array.length - 1; i > 0; i--) {
             const j = Math.floor(Math.random() * (i + 1));
             [array[i], array[j]] = [array[j], array[i]];
         }
         return array;
     }


     function startGame() {
         current = 0;
         score = 0;
         timer = 30;
         playing = true;
         updateScore();
         document.getElementById("character-img").src = "./assets/karakter5.png";

         document.getElementById("next-btn").style.display = "none";
         document.getElementById("popup").classList.add("hidden");
         startTimer();
         document.getElementById("intro-section").style.display = "none";

         loadScene();
     }
     // Klik overlay untuk mulai ulang game
     document.getElementById("popup").addEventListener("click", function() {
         if (!playing) {
             startGame();
         }
     });


     function startTimer() {
         clearInterval(interval);
         interval = setInterval(() => {
             if (!playing) return;
             timer--;
             document.getElementById("timer").textContent = `Waktu: ${timer} detik`;
             if (timer <= 0) {
                 playing = false;
                 showPopup("⏱️ Waktu Habis!", true);
                 setTimeout(endGame, 2000);
             }
         }, 1000);
     }

     function loadScene() {
         const scene = scenes[current];
         document.getElementById("story-box").textContent = scene.story;
         document.getElementById("question-box").textContent = scene.question;

         const answersDiv = document.getElementById("answers");
         answersDiv.innerHTML = "";
         const shuffledChoices = shuffle([...scene.choices]);
         shuffledChoices.forEach(choice => {
             const btn = document.createElement("button");
             btn.className = `
  w-full
  bg-orange-100/90
  text-orange-600
  px-4
  py-2
  rounded-2xl
  border-2
  border-orange-600/20
  hover:bg-orange-200/70
  transition
  text-left
`.trim();

             btn.textContent = choice;
             btn.onclick = () => handleAnswer(choice);
             answersDiv.appendChild(btn);
         });
     }

     function handleAnswer(choice) {
         if (!playing) return;

         const scene = scenes[current];
         const characterImg = document.getElementById("character-img");

         if (choice === scene.correct) {
             score++;
             showPopup("✅ Benar!");
             characterImg.src = "./assets/karakter5-bahagia.png"; // Ganti ke ekspresi senang
         } else {
             showPopup(`❌ Salah!\nJawaban: ${scene.correct}`);
             characterImg.src = "./assets/karakter5-sedih.png"; // Ganti ke ekspresi sedih
         }

         updateScore();
         current++;

         if (current < scenes.length) {
             setTimeout(() => {
                 document.getElementById("popup").classList.add("hidden");
                 loadScene();
                 characterImg.src = "./assets/karakter5.png"; // Kembalikan ke normal
             }, 1200);
         } else {
             setTimeout(endGame, 1500);
         }
     }


     function updateScore() {
         document.getElementById("score").textContent = `Skor Benar: ${score}`;
     }

     function endGame() {
         playing = false;
         clearInterval(interval);
         document.getElementById("story-box").textContent =
             "🎉 Perjalanan selesai! Kamu telah menjelajahi budaya Nusantara.";
         document.getElementById("question-box").textContent = "";
         document.getElementById("answers").innerHTML = "";
         document.getElementById("timer").textContent = "Waktu: 0 detik";
         document.getElementById("next-btn").style.display = "inline-block";
         document.getElementById("next-btn").textContent = "Main Lagi";
         showPopup(`🏁 Kuis Selesai!\nSkor akhir kamu: ${score} / ${scenes.length}`, true);
         document.getElementById("intro-section").style.display = "block";

     }

     function showPopup(message, longer = false) {
         const popup = document.getElementById("popup");
         const popupContent = document.getElementById("popup-content");
         popupContent.textContent = message;
         popup.classList.remove("hidden");

         if (!longer) {
             setTimeout(() => {
                 popup.classList.add("hidden");
             }, 1000);
         } else {
             // Kalau overlay diklik → restart game
             popup.onclick = () => {
                 popup.classList.add("hidden");
                 startGame();
             };

             setTimeout(() => {
                 popup.classList.add("hidden");
             }, 2500);
         }
     }
 </script>

 @include('layouts.footer')
